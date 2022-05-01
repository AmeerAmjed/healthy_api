<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;


class LoginController extends Controller
{
    public function login(Request $request)
    {

        $fields = $request->validate([
            'phone_number' => 'required|string',
            'password' => 'required|string'
        ]);
        $user = User::where('phone_number', $fields['phone_number'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response(
                [
                    'message' => "error login, phone_number & Password doesn't match"
                ],
                Response::HTTP_UNAUTHORIZED
            );
        }

        $token = $user->createToken('laraRestApi')->accessToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, Response::HTTP_ACCEPTED);
    }
}
