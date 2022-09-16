<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\specialist;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_doctor_view()
    {
        $sdata = specialist::all();
        return view('admin/add_doctor', compact('sdata'));
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

    public function add_doctor_speciality()
    {
        $data = specialist::all();
        return view('admin.add_speciality', compact('data'));
    }



    public function add_speciality(Request $request)
    {
        $specialist = new specialist;
        $specialist->specialist_name = $request->specialist;
        $specialist->save();
        return redirect()->back()->with('message', 'Doctor Speciality Added Successfully');
    }

    public function edit_spe($id)
    {
        $cat = specialist::find($id);
        return view('admin.edit_speciality', compact('cat'));
    }


    public function update_speciality(Request $request, $id)
    {
        $spe = specialist::find($id);
        $spe->specialist_name = $request->specialist;
        $spe->save();
        return redirect()->back()->with('message', 'Doctor Speciality Update Successfully');
    }
}
