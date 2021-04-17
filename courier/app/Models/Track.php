<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $guarded = ['id'];
    public function parcel()
    {
        return $this->belongsTo(Parcel::class );
    }
}
