<?php

namespace App\Http\Requests;

use App\Rules\RoomOccupancy;
use App\Rules\RoomUnitGender;
use Illuminate\Foundation\Http\FormRequest;

class SaveStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'gender' => ['required', 'in:M,F'],
            'dob' => ['nullable', 'date'],
            'student_id' => ['required', 'string', 'unique:students,student_id'],
            'phone' => ['nullable', 'regex:/\d{3}-\d{3}-\d{4}/'],
            'room_id' => ['nullable', 'exists:rooms,id', new RoomOccupancy, new RoomUnitGender($this->gender ?? '')]
        ];
    }
}
