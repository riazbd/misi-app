<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .header {
            text-align: center;
            background: rgb(11, 113, 197);
            color: white;
            margin-bottom: 50px;

        }

        .footer {
            text-align: center;
            background: rgb(11, 113, 197);
            color: white;
            margin-top: 200px;

        }

        table.table-bordered tbody th,
        table.table-bordered tbody td {
            border: 1px solid #dddddd;
        }

        table.table-bordered tbody td {
            text-align: center;
        }
    </style>

    <style>

    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Misi Appointment Invoice</h2>
                </div>
            </div>

        </div>
    </div>


    {{-- <p>Therapist Comment</p> --}}
    <?php
    //dd($appointment);
    // echo $appointment->id;
    // echo '</br>';
    // echo $appointment->therapist_comment;
    ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%;">ID</th>
                <th style="width: 5%;">Ticket</th>
                <th style="width: 10%;">Status</th>
                <th style="width: 35%;">Remarks</th>
                <th style="width: 5%;">Fee</th>
                <th style="width: 20%;">Created At</th>
                <th style="width: 20%;">Updated At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->ticket_id }}</td>
                <td>{{ $appointment->status }}</td>
                <td>{{ $appointment->remarks }}</td>
                <td>{{ $appointment->fee }}</td>

                <td>{{ $appointment->created_at }}</td>
                <td>{{ $appointment->updated_at }}</td>

            </tr>

        </tbody>
    </table>



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Thanks</h4>
                </div>
            </div>

        </div>
    </div>




</body>

</html>
