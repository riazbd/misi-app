<?php

namespace App\Http\Controllers;

use App\Models\Intake;
use App\Models\LeaveSchedule;
use App\Models\Therapist;
use App\Models\Ticket;
use App\Models\TicketAppointment;
use App\Models\WorkDayTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TicketAppointmentController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:patient|admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = TicketAppointment::all();
        $heads = [
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            'INVOICE',
            'ID',
            'Ticket',
            'Status',
            'Remarks',
            'Fee',
            'Created At',
            'Updated At',
        ];



        $data = [];

        foreach ($appointments as $appointment) {
            $download_button  = '<span class="d-inline-block badge badge-success badge-pill badge-lg owned" style="cursor: pointer">Download</span>';
            $items = [];

            array_push($items, '<nobr>
                    </a><a class="btn btn-xs btn-default text-danger mx-1 shadow" href="' . route('ticket-appointments.destroy', ['ticket_appointment' => $appointment->id]) . '">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </a><a class="btn btn-xs btn-default text-teal mx-1 shadow" href="' . route('ticket-appointments.show', ['ticket_appointment' => $appointment->id]) . '"  data-toggle="tooltip" data-placement="top" title="Show Appointment Information">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </a><button class="btn btn-xs btn-default text-primary mx-1 shadow createModal" data-toggle="tooltip" data-placement="top" title="Create Intake" data-appointment="' . $appointment->id . '" data-ticket-id="' . $appointment->ticket_id . '">
                    <i class="fa fa-lg fa-fw fa-plus"></i>
                </button></nobr>', '</a><a class="text-info mx-1" href="' . route('generate-invoice', ['id' => $appointment->id])  . '">
                ' .   $download_button . '</a>', '</a><a class="text-info mx-1" href="' . route('ticket-appointments.show', ['ticket_appointment' => $appointment->id]) . '">
                    ' .   $appointment->id . '</a>', $appointment->ticket()->first()->id, ucfirst($appointment->status), $appointment->remarks, $appointment->fee, Carbon::parse($appointment->created_at)->format('d F, Y'), Carbon::parse($appointment->updated_at)->format('d F, Y'),);
            array_push($data, $items);
        }

        $config = [
            'data' => $data,


        ];

        return view('ticketAppointment.index', compact('heads', 'config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tickets = Ticket::where('department_id', 11)->get();
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
            $intake->status = 'not_visited';
            $intake->payment_method = 'N/A';
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
        $appointment = TicketAppointment::where('id', $id)->first();

        // intake part
        $intakes = Intake::where('appointment_id', $appointment->id)->get();
        $heads = [
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            'ID',
            'Date',
            'Time',
            'Status',
            'Payment Method',
            'Payment Status',
            'Created At',
            'Updated At'
        ];



        $data = [];

        foreach ($intakes as $intake) {
            $items = [];

            array_push($items, '<nobr>
                    </a><a class="btn btn-xs btn-default text-danger mx-1 shadow" href="' . route('ticket-appointments.destroy', ['ticket_appointment' => $appointment->id]) . '">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </a><button class="btn btn-xs btn-default text-teal mx-1 shadow showModal" data-intake-id="' . $intake->id . '">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </button></nobr>', $intake->id, Carbon::parse($intake->date)->format('d F, Y'), $intake->start_time, ucfirst($intake->status), ucfirst($intake->payment_method), ucfirst($intake->payment_status), Carbon::parse($intake->created_at)->format('d F, Y'), Carbon::parse($intake->updated_at)->format('d F, Y'),);
            array_push($data, $items);
        }

        $config = [
            'data' => $data,


        ];
        // end intake part
        return view('ticketAppointment.show', compact('appointment', 'heads', 'config'));
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
        $data = $request->all();

        try {


            $appointment = TicketAppointment::where('id', $id)->first();

            $appointment->ticket_id = $data['select-ticket'];
            $appointment->fee = $data['select-ticket'];
            $appointment->status = $data['select-status'];
            $appointment->type = $data['appointment-type'];

            $appointment->therapist_comment = $data['therapist-comment'];
            $appointment->remarks = $data['remarks'];

            $appointment->save();

            return response()->json(['message' => 'Data saved successfully']);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
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

    public function getIntake($id)
    {

        $intake = Intake::where('id', $id)->first();

        return response()->json($intake);
    }

    public function toCalendar()
    {
        $therapists = Therapist::all();
        return view('ticketAppointment.calendar', compact('therapists'));
    }

    public function getEvents()
    {
        $intakes = Intake::all();

        $formattedEvents = [];

        foreach ($intakes as $event) {
            $formattedEvents[] = [
                'title' => 'Appointment for ticket - ' . $event->appointment()->first()->ticket()->first()->id,
                'start' => $event->date . 'T' . $event->start_time,
                'end' => $event->date . 'T' . $event->end_time,
                'extendedProps' => [
                    'therapistId' => $event->appointment()->first()->ticket()->first()->assigned_therapist,
                ],

            ];
        }

        return response()->json($formattedEvents);
    }
}
