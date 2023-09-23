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
                <div class="col-md-6">
                    <div class="invoice-logo">
                        <img src="">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="invoice-header">
                        <h4>Misi Intake Invoice</h4>
                        <p>Address place here</p>
                        <p>Rendom text place here</p>
                        <p>City name</p>
                        <p>Country name</p>
                    </div>

                </div>
            </div>

        </div>
    </div>


    {{-- <p>Therapist Comment</p> --}}
    <?php
    
    //dd($intake);
    ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%;">ID</th>
                <th style="width: 5%;">appointment_id</th>
                <th style="width: 10%;">date</th>
                <th style="width: 10%;">start_time</th>
                <th style="width: 10%;">end_time</th>
                <th style="width: 10%;">status</th>
                <th style="width: 10%;">Payment status</th>
                <th style="width: 10%;">Payment method</th>
                <th style="width: 15%;">Created At</th>
                <th style="width: 15%;">Updated At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $intake->id }}</td>
                <td>{{ $intake->appointment_id }}</td>
                <td>{{ $intake->date }}</td>
                <td>{{ $intake->start_time }}</td>
                <td>{{ $intake->end_time }}</td>

                <td>{{ $intake->status }}</td>
                <td>{{ $intake->payment_status }}</td>
                <td>{{ $intake->payment_method }}</td>
                <td>{{ $intake->created_at }}</td>
                <td>{{ $intake->updated_at }}</td>

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
