<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function show()
    {
        $doctors = Doctor::all();
        return view('doctor', ['doctors' => $doctors]);
    }

    public function add() {
        $r = request();

        $imageName = 'empty.jpg';
        if ($r->hasFile('image')) {
            $image = $r->file('image');
            $imageName = $image -> getClientOriginalName();
            $image->move(public_path('images'), $imageName);
        }

        Doctor::create([
            'name' => $r->name,
            'specialization' => $r->specialization,
            'contactNumber' => $r->contactNumber,
            'email' => $r->email,
            'image' => $imageName,
        ]);
    
        return redirect()->route('addDoctor') -> with('success', 'Doctor added successfully!');
    }
    
    
}
