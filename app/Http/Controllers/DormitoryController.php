<?php

namespace App\Http\Controllers;

use App\Models\Dormitory;
use Illuminate\Http\Request;

class DormitoryController extends Controller
{
    public function __invoke()
    {
        return view('dormitories', [
            'dormitories' => Dormitory::all()
        ]);
    }
}
