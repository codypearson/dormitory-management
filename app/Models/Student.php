<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const GENDER_MALE = 'M';
    const GENDER_FEMALE = 'F';

    public $timestamps = false;

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}