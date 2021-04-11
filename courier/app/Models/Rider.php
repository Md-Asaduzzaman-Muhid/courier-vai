<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Rider extends Authenticatable
{
    use Notifiable;
    protected $guard = 'rider';

    protected $fillable = [
        'name', 'email','phone', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function parcel()
    {
        return $this->hasMany(Parcel::class);
    }
}
