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



// AJAX routes
Route::get('check_if_full', 'AppointmentController@checkIfDayIsFull')->name('ajax_check_if_full');
Route::get('check_if_taken', 'AppointmentController@checkIfAppointmentExists')->name('ajax_check_if_exists');
