<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\TicketAppointment;

class GenerateInvoiceController extends Controller
{


    public function generatePDF(Request $request, $id)
    {
        //$appointments = TicketAppointment::all();
        //dd($id);
        //$appointment = TicketAppointment::where('id', $id)->first();

        $appointment = TicketAppointment::where('id', $id)->first();
        //$appointment = TicketAppointment::all();
        //dd($appointment);
        //$data = ['foo' => 'bar'];; // Your data to pass to the PDF view
        $pdf = PDF::loadView('invoice', compact('appointment'));
        //dd($pdf);

        return $pdf->stream();
    }
}
