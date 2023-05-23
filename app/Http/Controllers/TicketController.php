<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
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
            $ticket->mon_multi_zd = $data['mono-multi-zd'];
            $ticket->mono_multi_screening = $data['mono-multi-screening'];
            $ticket->intake_or_therapist = $data['intakes-therapist'];
            $ticket->tresonit_number = $data['tresonit-number'];
            $ticket->datumn_intake = $data['datum-intake'];
            $ticket->datumn_intake_2 = $data['datuem-intake-2'];
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
