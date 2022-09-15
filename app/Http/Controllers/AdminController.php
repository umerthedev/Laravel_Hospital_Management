<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_doctor_view()
    {
        return view('admin/add_doctor');
    }


    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room_number = $request->room_number;
        $doctor->speciality = $request->speciality;
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }
}
