<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Student;

class StudentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBuildSampleStudents()
    {
        for ($i = 0; $i < 120; $i++)
        {
            Student::factory()->create();
        }
    }
}
