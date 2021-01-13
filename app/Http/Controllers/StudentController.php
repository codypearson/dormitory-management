<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveStudentRequest;
use App\Models\Room;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        return view('students', [
            'students' => Student::orderBy('name')->get()
        ]);
    }

    public function form(Student $student = null)
    {
        return view('edit_student', [
            'student' => $student,
            'rooms' => Room::all()
        ]);
    }

    public function save(SaveStudentRequest $request)
    {
        if ($request->id)
        {
            $student = Student::find($request->id);
        } else 
        {
            $student = new Student;
        }

        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->student_id = $request->student_id;
        $student->home_address = $request->home_address;
        $student->phone_number = $request->phone;
        $student->room_id = $request->room_id;

        $student->save();

        return redirect()->route('student-list');
    }

    public function delete(Student $student)
    {
        $student->delete();

        return [
            'success' => true
        ];
    }
}
