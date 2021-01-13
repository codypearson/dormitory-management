<?php

namespace App\Rules;

use App\Models\Room;
use Illuminate\Contracts\Validation\Rule;

class RoomUnitGender implements Rule
{
    protected $gender;

    public function __construct(string $gender)
    {
        $this->gender = $gender;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $room = Room::find($value);
        if (!$room || empty($this->gender))
        {
            return true;
        }
        return $room->unit->hasOnlyStudentsOfGender($this->gender);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'A unit may not contain students of both genders.';
    }
}
