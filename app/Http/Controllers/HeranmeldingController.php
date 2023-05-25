<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HeranmeldingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heranmeldingId = Role::where('name', 'heranmelding')->first()->id;
        $tickets = Ticket::where('department_id', $heranmeldingId);
        $heads = [
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            'ID',
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
            $items = [];

            array_push($items, '<nobr><a class="btn btn-xs btn-default text-primary mx-1 shadow" href="' . route('tickets.edit', ['ticket' => $ticket->id]) . '">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
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

        return view('heranmelding.index', compact('heads', 'config'));
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
}
