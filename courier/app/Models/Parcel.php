<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $guarded = ['id'];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
    public function reciever()
    {
        return $this->hasOne(Reciever::class);
    }
    public function rider()
    {
        return $this->belongsTo(Rider::class);
    }
}
