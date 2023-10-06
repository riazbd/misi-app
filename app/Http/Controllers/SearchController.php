<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket; // Replace with the actual model you want to search in
use App\Models\Patient;
use Spatie\Permission\Models\Role;
use PragmaRX\Countries\Package\Countries;

class SearchController extends Controller
{
    public function searchById(Request $request)
    {

        $id = $request->input('id'); // Get the ID from the request

        $record = Ticket::find($id); // Replace YourModel with your actual model
        //dd($record);
        if (!$record) {
            //return redirect()->route('searchById')->with('error', 'Record not found');

            session()->flash('success', 'No ticket found.');
            return back();
            //return view('search.result');
        }

        // return view('search.result', ['record' => $record]);



        $roles = ['screener', 'pib', 'pit', 'heranmelding', 'appointment'];
        // dd($roles);
        $matchingRoles = Role::whereIn('name', $roles)->get();

        //dd($matchingRoles);

        $ticket = Ticket::where('id', $id)->first();
        $patient = $ticket->patient()->first();
        $patients = Patient::all();


        $countries = Countries::all();

        $attachments = $ticket->attachments;

        return view('tickets.show', compact('patients', 'matchingRoles', 'ticket', 'patient', 'attachments', 'countries'));
    }
}
