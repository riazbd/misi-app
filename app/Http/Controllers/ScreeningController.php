<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class ScreeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $screenerId = Role::where('name', 'screener')->first()->id;
        // dd($screenerId);
        $tickets = Ticket::where('department_id', $screenerId)->get();
        $heads = [
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            'ID',
            'Assigned To',
            'Patient ID',
            'Mono/Multi ZD',
            'Mono/Multi Screening',
            'Intake or Therapist',
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
            // dd($ticket->patient()->first()->id);
            if ($ticket->assigned_staff === null) {
                $assigned = '<span class="d-inline-block badge badge-warning badge-pill badge-lg assign-me" data-row-id="' . $ticket->id . '" style="cursor: pointer">Assign to Me</span>';
            } elseif ($ticket->assigned_staff == Auth::user()->id) {
                $assigned = '<span class="d-inline-block badge badge-success badge-pill badge-lg owned" style="cursor: pointer">Owned</span>';
            } else {
                $assigned = $ticket->assigned_staff;
            }

            $items = [];

            // '<nobr><a class="btn btn-xs btn-default text-primary mx-1 shadow" href="' . route('screening.edit', ['screening' => $ticket->id]) . '">
            //             <i class="fa fa-lg fa-fw fa-pen"></i>'

            array_push($items, '<nobr>
                    </a><a class="btn btn-xs btn-default text-danger mx-1 shadow" href="' . route('screening.destroy', ['screening' => $ticket->id]) . '">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </a><a class="btn btn-xs btn-default text-teal mx-1 shadow" href="' . route('screening.show', ['screening' => $ticket->id]) . '">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </a></nobr>', $ticket->id, $assigned, $ticket->patient()->first()->id, $ticket->mono_multi_zd, $ticket->mono_multi_screening, $ticket->intake_or_therapist, $ticket->tresonit_number, $ticket->datum_intake, $ticket->datum_intake_2, $ticket->nd_account, $ticket->avc_alfmvm_sbg, $ticket->honos, $ticket->berha_intake, $ticket->rom_start, $ticket->rom_end, $ticket->berha_end, $ticket->vtcb_date, $ticket->closure, $ticket->aanm_intake_1, $ticket->location, $ticket->call_strike, $ticket->remarks);
            array_push($data, $items);
        }

        $config = [
            'data' => $data,


        ];

        return view('screener.index', compact('heads', 'config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $roles = ['pib', 'pit', 'heranmelding', 'appointment'];
        $matchingRoles = Role::whereIn('name', $roles)->get();
        // $screener = Role::where('name', 'screener')->first();
        $patients = Patient::all();
        $ticket = Ticket::where('id', $id)->first();
        $screening = $id;
        return view('screener.show', compact('patients', 'matchingRoles', 'screening', 'ticket'));
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
            $ticket = Ticket::where('id', $id)->first();
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
            // $ticket->rom_start =  Carbon::createFromFormat('d/m/Y', $data['rom-start'])->format('Y-m-d');
            // $ticket->rom_end = Carbon::createFromFormat('d/m/Y', $data['rom-end'])->format('Y-m-d');
            // $ticket->berha_end = Carbon::createFromFormat('d/m/Y', $data['berha-eind'])->format('Y-m-d');
            // $ticket->vtcb_date = Carbon::createFromFormat('d/m/Y', $data['vtcb-date'])->format('Y-m-d');
            // $ticket->closure = Carbon::createFromFormat('d/m/Y', $data['closure'])->format('Y-m-d');
            // $ticket->aanm_intake_1 = Carbon::createFromFormat('d/m/Y', $data['aanm-intake'])->format('Y-m-d');
            $ticket->rom_start =  $data['rom-start'];
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
