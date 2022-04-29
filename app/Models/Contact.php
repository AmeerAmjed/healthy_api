<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'profile_id',
        'profile_user_id',

        'phone_number',
        'phone_number_verified'
    ];
}
