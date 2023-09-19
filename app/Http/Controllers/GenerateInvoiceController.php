<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\TicketAppointment;

class GenerateInvoiceController extends Controller
{


    public function generatePDF(Request $request, $id)
    {

        $appointment = TicketAppointment::where('id', $id)->first();
        $pdf = PDF::loadView('invoice', compact('appointment'));

        return $pdf->stream();
    }
}
