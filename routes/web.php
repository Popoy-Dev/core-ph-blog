<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScheduleController;


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

Route::get('/schedules', function () {
    return view('dashboard');
})->middleware(['auth'])->name('schedules');


Route::group(['middleware' => ['auth']], function () {
    Route::post('add-schedule', [ScheduleController::class, 'addSchedule']);
});


require __DIR__.'/auth.php';
