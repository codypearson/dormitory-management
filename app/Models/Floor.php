<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    public $timestamps = false;

    public function dormitory()
    {
        return $this->belongsTo(Dormitory::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}