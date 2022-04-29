<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;

    protected $fillable = [
        'pharmacies_id',
        'pharmacies_user_id',

        'gov',
        'city',
        'street',
        'lat',
        'lng',
    ];
}
