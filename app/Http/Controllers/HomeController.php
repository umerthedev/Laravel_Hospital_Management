<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\doctor;
use App\Models\specialist;
use App\Models\appointment;


class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                $user = user::all()->count();
                $doctors = doctor::all()->count();
                $specialist = specialist::all()->count();
                $appoint = appointment::all()->count();
                return view('admin/home', compact('user', 'doctors', 'specialist', 'appoint'));
            }
        } else {
            return redirect()->back();
        }
    }
    public function index()
    {
        $doctor = doctor::all();
        return view('user.home', compact('doctor'));
    }

    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->status = 'In Progress';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('message', 'Appointment Submitted Successfully, We Will Contact with You Soon!!!!!!!');
    }
    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();

            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function delete_app($id)
    {
        $delapp = appointment::find($id);
        $delapp->delete();
        return redirect()->back()->with('message', 'Appointment Cancel Successfully');
    }
}
