<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Patient;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    public function show(){
        $doctors = Doctor::all();
        $timeSlot=["08:00:00","09:00:00","10:00:00","11:00:00","12:00:00","01:00:00","02:00:00","03:00:00","04:00:00","05:00:00"];
        return view('appointment', ['timeSlot' => $timeSlot, 'doctors' => $doctors]);
    }

    public function add(){
        $r = request();

        $existingAppointment = Patient::where('appointmentDate', $r->appointmentDate)
            ->where('appointmentTime', $r->appointmentTime)
            ->first();
    
        if ($existingAppointment) {
            return redirect() -> back() -> with('error', 'The appointment is unavailable. Please choose a different date or time. You can search the appointment <a href="' . route('search') . '">here</a>.') -> withInput();
        }

        $addAppointment = Patient::create([
            'name' => $r->name,
            'contactNumber' => $r->contactNumber,
            'appointmentDate' => $r->appointmentDate,
            'appointmentTime' => $r->appointmentTime,
            'doctor' => $r->doctor,
        ]);
    
        return redirect() -> route('appointment') -> with('success', 'Appointment booked successfully!');
    }

    public function search()
    {
        $r = request();
        $date = $r -> input('appointmentDate');
        $appointments = Patient::where('appointmentDate', $date) -> get();
        return view('search', ['appointments' => $appointments, 'selectedDate' => $date]);
    }
}
