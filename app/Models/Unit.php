<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public $timestamps = false;

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function hasOnlyStudentsOfGender(string $gender): bool
    {
        foreach ($this->rooms as $room)
        {
            if (!$room->hasOnlyStudentsOfGender($gender))
            {
                return false;
            }
        }
        return true;
    }
}