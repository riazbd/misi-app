<?php

namespace App\Http\Controllers;

use App\Models\LeaveSchedule;
use App\Models\Ticket;
use App\Models\WorkDayTime;
use Illuminate\Http\Request;

class TicketAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tickets = Ticket::where('department_id', 10)->get();
        return view('ticketAppointment.create', compact('tickets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDatesAndAppoints($id)
    {
        $therapistId = Ticket::where('id', $id)->first()->assigned_therapist;
        $leaves_data = LeaveSchedule::where('therapist_id', $therapistId)->get();

        $holidays = WorkDayTime::where('therapist_id', $therapistId)->first()->weekly_holidays;

        // Convert the dates from JSON string to an array
        $leaves = $leaves_data->map(function ($leave) {
            $leave->dates = json_decode($leave->dates);
            return $leave;
        });

        $dates = $leaves->pluck('dates')->flatten()->toArray();

        return response()->json(['leave_dates' => $dates, 'holidays' => $holidays]);
    }
}
