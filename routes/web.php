<?php

use App\Http\Controllers\DormitoryController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dormitories', DormitoryController::class)->name('dormitories');
Route::get('/floors/{dormitoryId}', FloorController::class)->name('floors');
Route::get('/units/{floorId}', [UnitController::class, 'allUnits'])->name('units');
Route::get('/unit-detail/{unitId}', [UnitController::class, 'unitDetail'])->name('unit-detail');
Route::get('/students', [StudentController::class, 'list'])->name('student-list');
Route::get('/edit-student/{student?}', [StudentController::class, 'form'])->name('edit-student');

Route::post('/save-student', [StudentController::class, 'save'])->name('save-student');
Route::delete('/student/{student}', [StudentController::class, 'delete'])->name('delete-student');