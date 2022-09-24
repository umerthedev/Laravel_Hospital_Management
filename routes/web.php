<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Appointment;


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

Route::get('/', [HomeController::class, 'index']);

// Admin And User Login Route
Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Add Doctor route
Route::get('/add_doctor_view', [AdminController::class, 'add_doctor_view']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);
Route::get('/add_doctor_speciality', [AdminController::class, 'add_doctor_speciality']);

Route::get('/show_appointment', [AdminController::class, 'show_appointment']);
Route::get('/approved_appoint/{id}', [AdminController::class, 'approved_appoint']);
Route::get('/cancel_appoint/{id}', [AdminController::class, 'cancel_appoint']);



Route::get('/show_doctors', [AdminController::class, 'show_doctors']);
Route::get('/edit_docts/{id}', [AdminController::class, 'edit_docts']);
Route::post('/update_doctor/{id}', [AdminController::class, 'up_doctor']);
Route::get('/delete_docts/{id}', [AdminController::class, 'delete_docts']);

// speciality route
Route::get('/view_speciality', [AdminController::class, 'view_speciality']);
Route::post('/add_speciality', [AdminController::class, 'add_speciality']);
Route::get('/delete_speciality/{id}', [AdminController::class, 'delete_speciality']);
Route::get('/edit_speciality/{id}', [AdminController::class, 'edit_spe']);
Route::post('/update_speciality/{id}', [AdminController::class, 'update_speciality']);


Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/delete_app/{id}', [HomeController::class, 'delete_app']);
