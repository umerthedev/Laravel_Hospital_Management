<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\Appointment;
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

    public function delete_speciality($id)
    {
        $del = specialist::find($id);
        $del->delete();
        return redirect()->back()->with('message', 'Doctor Speciality Delete Successfully');
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

    public function show_appointment()
    {
        $apps = appointment::all();
        return view('admin.show_appointment', compact('apps'));
    }

    public function approved_appoint($id)
    {
        $app_approved = appointment::find($id);
        $app_approved->status = 'Approved';
        $app_approved->save();
        return redirect()->back()->with('message', 'Appointment Approved Successfully');
    }
    public function cancel_appoint($id)
    {
        $app_cancel = appointment::find($id);
        $app_cancel->status = 'Canceled';
        $app_cancel->save();
        return redirect()->back()->with('message', 'Appointment Cancel Successfully');
    }

    public function show_doctors()
    {
        $docs = doctor::all();
        return view('admin.show_doctors', compact('docs'));
    }
    public function edit_docts($id)
    {
        $doc = doctor::find($id);
        $spe = specialist::all();

        return view('admin.edit_doctors', compact('doc', 'spe'));
    }

    public function up_doctor(Request $request, $id)
    {
        $docs = doctor::find($id);
        // dd($docs);
        $docs->name = $request->name;
        // dd($docs);
        $docs->phone = $request->phone;
        $docs->room_number = $request->room_number;
        $docs->speciality = $request->speciality;

        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $docs->image = $imagename;
        }
        $docs->save();
        return redirect()->back()->with('message', 'Doctor info Changed Successfully');
    }
    public function delete_docts($id)
    {
        $doctors = doctor::find($id);
        $doctors->delete();
        return redirect()->back()->with('message', 'Doctor Deleted from list Successfully');
    }
}
