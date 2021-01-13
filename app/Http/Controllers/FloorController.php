<?php

namespace App\Http\Controllers;

use App\Models\Floor;

class FloorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($dormitoryId)
    {
        return view('floors', [
            'floors' => Floor::where('dormitory_id', $dormitoryId)->get()
        ]);
    }
}
