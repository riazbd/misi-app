<?php

namespace App\Http\Controllers;

use App\Models\Intake;
use App\Models\LeaveSchedule;
use App\Models\Ticket;
use App\Models\TicketAppointment;
use App\Models\WorkDayTime;
use Carbon\Carbon;
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
        $data = $request->all();

        try {

            $data_startTime = $data['appointment-time'];
            $startTime = Carbon::parse($data_startTime);
            $endTime = $startTime->copy()->addMinutes(60);


            $appointment = new TicketAppointment();

            $appointment->ticket_id = $data['select-ticket'];
            $appointment->fee = $data['select-ticket'];
            $appointment->status = $data['select-status'];
            $appointment->type = $data['appointment-type'];

            $appointment->therapist_comment = $data['therapist-comment'];
            $appointment->remarks = $data['remarks'];

            $appointment->save();

            $intake = new Intake();

            $intake->appointment_id = $appointment->id;
            $intake->date = $data['appointment-date'];
            $intake->start_time = $startTime->format('H:i:s');
            $intake->end_time = $endTime->format('H:i:s');
            $intake->status = 'Active';
            $intake->payment_method = $data['payment-method'];
            $intake->payment_status = 'Unpaid';

            $intake->save();

            return response()->json(['message' => 'Data saved successfully']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
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
