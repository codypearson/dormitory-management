<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    const MAX_OCCUPANCY = 2;

    public $timestamps = false;

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function hasOnlyStudentsOfGender(string $gender): bool
    {
        foreach ($this->students as $student)
        {
            if ($student->gender != $gender)
            {
                return false;
            }
        }
        return true;
    }

    public function hasSpaceAvailable(): bool
    {
        return count($this->students) < static::MAX_OCCUPANCY;
    }
}