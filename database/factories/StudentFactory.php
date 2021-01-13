<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['M', 'F']);
        $allRooms = Room::all();
        $availableRooms = $allRooms->filter(function (Room $room) use ($gender) {
            return $room->hasSpaceAvailable() && $room->unit->hasOnlyStudentsOfGender($gender);
        });
        $room = $availableRooms->random();

        return [
            'name' => $this->faker->name($gender == 'M' ? 'male' : 'female'),
            'home_address' => $this->faker->address,
            'gender' => $gender,
            'student_id' => $this->faker->randomNumber(7, true),
            'dob' => $this->faker->date(),
            'phone_number' => $this->faker->numerify('###-###-####'),
            'room_id' => $room
        ];
    }
}
