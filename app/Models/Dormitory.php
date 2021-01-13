<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dormitory extends Model
{
    public $timestamps = false;

    public function floors()
    {
        return $this->hasMany(Floor::class);
    }
}
