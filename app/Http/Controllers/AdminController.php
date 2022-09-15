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
    // public function upload(Request $request )
    // {
    //     $doctor = new doctor;
    // }
}
