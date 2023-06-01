<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HeranmeldingController;
use App\Http\Controllers\PibController;
use App\Http\Controllers\PitController;
use App\Http\Controllers\ScreeningController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('therapists', TherapistController::class);
    Route::resource('tickets', TicketController::class);
    Route::resource('screening', ScreeningController::class);
    Route::resource('pib', PibController::class);
    Route::resource('pit', PitController::class);
    Route::resource('heranmelding', HeranmeldingController::class);
    Route::get('/update-assigned-to', 'App\Http\Controllers\TicketController@updateAssignedTo');
    Route::get('/get-role-users', 'App\Http\Controllers\TicketController@getUsersByRole');
});
