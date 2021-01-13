<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    const GENDER_MALE = 'M';
    const GENDER_FEMALE = 'F';

    public $timestamps = false;

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}