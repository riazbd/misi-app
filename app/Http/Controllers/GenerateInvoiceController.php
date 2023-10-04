<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\TicketAppointment;
use App\Models\Intake;
use App\Models\Ticket;
use App\Models\Patient;
use App\Models\User;
use App\Models\EmailTemplate;

class GenerateInvoiceController extends Controller
{


    public function generatePDF(Request $request, $id)
    {


        $intake = Intake::where('id', $id)->first();
        $appointment = TicketAppointment::where('id', $id)->first();
        $ticket = Ticket::where('id', $appointment->ticket_id)->first();
        $patient = Patient::where('id', $ticket->patient_id)->first();
        $user = User::where('id', $patient->user_id)->first();

        $pdf = PDF::loadView('invoice', compact('intake', 'appointment', 'patient', 'user'));
        //dd($intake);

        return $pdf->stream();
    }


    public function generatePdfForEmail(Request $request)
    {
        $ticketId = $request->input('ticketId');
        $mailId = $request->input('mailId');
        $ticket = Ticket::where('id', $ticketId)->first();
        if ($request->input('mailId') != null) {
            $emailTemplate = EmailTemplate::where('id', $request->input('mailId'))->first();
        }
        $pdf = PDF::loadView('emailPdf', compact('ticket', 'emailTemplate'));
        return $pdf->stream();
    }
}
