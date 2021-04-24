<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Merchant extends Authenticatable
{
    use Notifiable;
    protected $guard = 'merchant';

    protected $fillable = [
        'name', 'email','phone', 'password', 'nid','area',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function company()
    {
        return $this->hasOne(Company::class);
    }
    public function parcel()
    {
        return $this->hasMany(Parcel::class);
    }
}
