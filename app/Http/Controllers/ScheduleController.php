<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index () {

        $data = Schedule::select()->where('is_deleted', 0)->get();
        return view('dashboard')->with('data', $data);
    }
    public function addSchedule () {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'date_time' => 'required',
        ]);
  
        $data = Schedule::create([
            'title' => request('title'),
            'description' => request('description'),
            'date_time' => request('date_time'),
        ]);
        return back()->with('success', 'Succesfully Inserted');
    }
}
