<?php

namespace App\Rules;

use App\Models\Room;
use Illuminate\Contracts\Validation\Rule;

class RoomOccupancy implements Rule
{
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
        if (!$room) {
            return true;
        }
        return $room->hasSpaceAvailable();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return sprintf('The room may not contain more than %u students.', Room::MAX_OCCUPANCY);
    }
}
