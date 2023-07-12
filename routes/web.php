<?php

use App\Http\Controllers\Appointment;
use App\Http\Controllers\EmailTamplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HeranmeldingController;
use App\Http\Controllers\NoApprovalController;
use App\Http\Controllers\PibController;
use App\Http\Controllers\PitController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\TicketAppointmentController;
use App\Http\Controllers\VtcbController;
use App\Http\Controllers\WorkSchedule;
use App\Http\Controllers\YesApprovalController;

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
    Route::resource('yes-approvals', YesApprovalController::class);
    Route::resource('appointment-groups', Appointment::class);
    Route::resource('no-approvals', NoApprovalController::class);
    Route::resource('vtcbs', VtcbController::class);
    Route::resource('ticket-appointments', TicketAppointmentController::class);

    Route::resource('questions', QuestionController::class);
    Route::resource('work-schedules', WorkSchedule::class);
    Route::get('/datesandappoints/{id}', 'App\Http\Controllers\TicketAppointmentController@getDatesAndAppoints');
    Route::get('/missing-info-tickets', 'App\Http\Controllers\TicketController@missingInfo');
    Route::get('/update-assigned-to', 'App\Http\Controllers\TicketController@updateAssignedTo');
    Route::get('/get-role-users', 'App\Http\Controllers\TicketController@getUsersByRole');
    Route::get('/cancel-ticket', 'App\Http\Controllers\TicketController@cancelTicket')->name('cancel-ticket');
    Route::get('/cancelled-tickets', 'App\Http\Controllers\TicketController@getCancelledTickets')->name('cancelled-tickets');
    Route::get('/get-histories', 'App\Http\Controllers\TicketController@getHistories')->name('ticket-history');
    Route::get('/to-formula', 'App\Http\Controllers\QuestionController@toFormula')->name('get-form-data');
    Route::get('/update-answers', 'App\Http\Controllers\QuestionController@updateAnswers')->name('update-answer');
    Route::get('/to-fetch-worktime', 'App\Http\Controllers\WorkSchedule@toFetchData')->name('fetch-worktime');
    Route::get('/leaves', 'App\Http\Controllers\WorkSchedule@leaveIndex')->name('leaves');
    Route::POST('/create-leaves', 'App\Http\Controllers\WorkSchedule@leaveCreate')->name('create-leaves');
    Route::get('/to-fetch-leaves', 'App\Http\Controllers\WorkSchedule@toFetchLeaves')->name('fetch-leaves');
    Route::get('/update-leaves/{id}', 'App\Http\Controllers\WorkSchedule@UpdateLeaves')->name('update-leaves');
    Route::get('/update-worktime/{id}', 'App\Http\Controllers\WorkSchedule@updateWorkTime')->name('update-worktime');
    Route::get('/getemailsforcancel', 'App\Http\Controllers\EmailTamplateController@getEmailForCancel')->name('get-cancel-email');
    Route::resource('email-templates', EmailTamplateController::class);
});
