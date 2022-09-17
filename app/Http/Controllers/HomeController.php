<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                return view('admin/home');
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
        if(Auth::id())
        {
            $data->user_id =Auth::user()->id;
        }
        
        $data->save();
        return redirect()->back()->with('message', 'Appointment Submit Successfully, We Will Contact with You Soon!!!!!!!');


    }
}
