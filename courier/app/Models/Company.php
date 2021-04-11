<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = ['merchant_id'];
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}
