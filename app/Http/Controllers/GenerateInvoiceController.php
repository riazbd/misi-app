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

        // $ticketId = $request->input('ticketId');
        // $mailId = $request->input('mailId');
        // $reason = $request->input('reason');

        // dd($ticketId);

        // $ticketId = $request->query('ticketId');
        // $mailId = $request->query('mailId');
        // $reason = $request->query('reason');


        // // $intake = Intake::where('id', $id)->first();
        // // $appointment = TicketAppointment::where('id', $id)->first();
        // // $ticket = Ticket::where('id', $appointment->ticket_id)->first();
        // //$patient = Patient::where('id', $ticket->patient_id)->first();
        // // $user = User::where('id', $patient->user_id)->first();

        // // $pdf = PDF::loadView('emailPdf', compact('intake', 'appointment', 'patient', 'user'));
        // dd($ticketId);

        // $ticket = Ticket::where('id', $request->input('id'))->first();
        // dd($ticket);
        // $patient = Patient::where('id', $ticket->patient_id)->first();
        // $user = User::where('id', $patient->user_id)->first();

        // if ($request->input('mailId') != null) {
        //     $emailTemplate = EmailTemplate::where('id', $request->input('mailId'))->first();

        //     $userEmail = $ticket->patient()->first()->user()->first()->email;

        //     // Retrieve the dynamic values from the fetched email template
        //     $subject = $emailTemplate->mail_subject;
        //     $body = $emailTemplate->mail_body;
        //     $recipientName = $ticket->patient()->first()->user()->first()->name;

        //     // $mail = new CancelMail();
        //     // $mail->subject = $subject;
        //     // $mail->body = $body;
        //     // $mail->recipientName = $recipientName;

        //     // Mail::to($userEmail)->send($mail);
        // }
        //$pdf = PDF::loadView('emailPdf', compact('ticket', 'emailTemplate'));

        $pdf = PDF::loadView('emailPdf');
        //dd($intake);

        return $pdf->stream();
    }
}
