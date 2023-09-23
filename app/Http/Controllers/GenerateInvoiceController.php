<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\TicketAppointment;
use App\Models\Intake;

class GenerateInvoiceController extends Controller
{


    public function generatePDF(Request $request, $id)
    {

        //$appointment = TicketAppointment::where('id', $id)->first();
        $intake = Intake::where('id', $id)->first();
        $pdf = PDF::loadView('invoice', compact('intake'));
        //dd($intake);

        return $pdf->stream();
    }
}
