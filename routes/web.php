<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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
Route::get('/home', [HomeController::class, 'redirect']);

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

// speciality route
Route::get('/view_speciality', [AdminController::class, 'view_speciality']);
Route::post('/add_speciality', [AdminController::class, 'add_speciality']);
Route::get('/edit_speciality/{id}', [AdminController::class, 'edit_spe']);
Route::post('/update_speciality/{id}', [AdminController::class, 'update_speciality']);


Route::post('/appointment', [HomeController::class, 'appointment']);
