<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        $heads = [
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            'ID',
            'Patient ID',
            'Mono/Multi ZD',
            'Mono/Multi Screening',
            'Intake or Therapist',
            // ['label' => 'Phone', 'width' => 40],
            'Tresonit Number',
            'Datum Intake',
            'Datum Intake 2',
            'ND Account',
            'AVC/ALFMVM/SBG',
            'Honos',
            'Berha Intake',
            'ROM Start',
            'ROM End',
            'Berha End',
            'VTCB Date',
            'Closure',
            'Aanm Intake',
            'Location',
            'Strike',
            'Remarks',


        ];



        $data = [];

        foreach ($tickets as $ticket) {
            $items = [];

            array_push($items, '<nobr>
                    </a><a class="btn btn-xs btn-default text-danger mx-1 shadow" href="' . route('tickets.destroy', ['ticket' => $ticket->id]) . '">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </a><a class="btn btn-xs btn-default text-teal mx-1 shadow" href="' . route('tickets.show', ['ticket' => $ticket->id]) . '">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </a></nobr>', $ticket->id, $ticket->patient()->first()->id, $ticket->mono_multi_zd, $ticket->mono_multi_screening, $ticket->intake_or_therapist, $ticket->tresonit_number, $ticket->datum_intake, $ticket->datum_intake_2, $ticket->nd_account, $ticket->avc_alfmvm_sbg, $ticket->honos, $ticket->berha_intake, $ticket->rom_start, $ticket->rom_end, $ticket->berha_end, $ticket->vtcb_date, $ticket->closure, $ticket->aanm_intake_1, $ticket->location, $ticket->call_strike, $ticket->remarks);
            array_push($data, $items);
        }

        $config = [
            'data' => $data,


        ];

        return view('tickets.index', compact('heads', 'config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $screener = Role::where('name', 'screener')->first();
        $patients = Patient::all();
        return view('tickets.create', compact(['screener', 'patients']));
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
            $ticket = new Ticket();
            $ticket->department_id = $data['select-department'];
            $ticket->patient_id = $data['select-patient'];
            $ticket->mono_multi_zd = $data['mono-multi-zd'];
            $ticket->mono_multi_screening = $data['mono-multi-screening'];
            $ticket->intake_or_therapist = $data['intakes-therapist'];
            $ticket->tresonit_number = $data['tresonit-number'];
            $ticket->datum_intake = $data['datum-intake'];
            $ticket->datum_intake_2 = $data['datuem-intake-2'];
            $ticket->nd_account = $data['nd_account'];
            $ticket->avc_alfmvm_sbg = $data['avc-alfmvm-sbg'];
            $ticket->honos = $data['honos'];
            $ticket->berha_intake = $data['berha-intake'];
            $ticket->strike_history = $data['strike-history'];
            $ticket->ticket_history = $data['ticket-history'];
            $ticket->rom_start = $data['rom-start'];
            $ticket->rom_end = $data['rom-end'];
            $ticket->berha_end = $data['berha-eind'];
            $ticket->vtcb_date = $data['vtcb-date'];
            $ticket->closure = $data['closure'];
            $ticket->aanm_intake_1 = $data['aanm-intake'];
            $ticket->location = $data['location'];
            $ticket->call_strike = $data['call-strike'];
            $ticket->remarks = $data['remarks'];
            $ticket->comment = $data['comments'];
            $ticket->language = $data['language-treatment'];
            // $ticket->files = $data[''];

            $ticket->save();

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
        $roles = ['screener', 'pib', 'pit', 'heranmelding', 'appointment'];
        $matchingRoles = Role::whereIn('name', $roles)->get();
        $ticket = Ticket::where('id', $id)->first();
        $patients = Patient::all();
        return view('tickets.show', compact('patients', 'matchingRoles', 'ticket'));
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

    public function updateAssignedTo(Request $request)
    {
        $rowId = $request->input('rowId');
        $assignedTo = $request->input('assignedTo');

        // Retrieve the record from the database based on the provided ID
        $record = Ticket::find($rowId);

        if ($record) {
            // Update the assigned_to value with the provided assignedTo value
            $record->assigned_staff = $assignedTo;
            $record->save();

            return response()->json(['message' => 'Assigned To updated successfully'], 200);
        }

        // return response()->json(['message' => 'Record not found'], 404);
    }
}
