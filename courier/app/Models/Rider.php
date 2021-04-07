<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{

    protected $guard = 'rider';

    protected $fillable = [
        'name', 'email','phone', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
