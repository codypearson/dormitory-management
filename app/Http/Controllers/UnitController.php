<?php

namespace App\Http\Controllers;

use App\Models\Unit;

class UnitController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function allUnits($floorId)
    {
        return view('units', [
            'units' => Unit::where('floor_id', $floorId)->get()
        ]);
    }

    public function unitDetail($unitId)
    {
        return view('unit_detail', [
            'unit' => Unit::find($unitId)
        ]);
    }
}
