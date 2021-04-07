<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{

    protected $guard = 'merchant';

    protected $fillable = [
        'name', 'email','phone', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
