<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::view('/addDoctor', 'addDoctor') -> name('addDoctor');

Route::view('/about', 'about') -> name('about');

//Route::view('/search', 'search') -> name('search');

Route::post('/addDoctor/store', [App\Http\Controllers\DoctorController::class,'add'])->name('addDoctor.store');

Route::get('/appointment', [App\Http\Controllers\AppointmentController::class,'show'])->name('appointment');

Route::post('/appointment/store', [App\Http\Controllers\AppointmentController::class,'add'])->name('appointment.store');

Route::get('/search', [App\Http\Controllers\AppointmentController::class,'search'])->name('search');

Route::get('/search/all', [App\Http\Controllers\AppointmentController::class,'all'])->name('search.all');

Route::post('/search/results', [App\Http\Controllers\AppointmentController::class,'search'])->name('search.results');

Route::get('/doctor', [App\Http\Controllers\DoctorController::class,'show'])->name('doctor');