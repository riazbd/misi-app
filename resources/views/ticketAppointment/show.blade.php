@extends('adminlte::page')

@section('content')
    <div class="d-flex justify-content-between align-items-center w-100 sticky-top"
        style="min-height: 10px; background-color: #fff;">
        <div>
            <div class="d-flex flex-direction-row button-container">
                <button class="top-button go-back">Go Back</button>
                <button class="top-button top-submit-button" id="top-submit-button">Submit</button>

            </div>
        </div>
        <div>

        </div>
    </div>
    <div class="p-5">
        {{-- <h1>User Management</h1> --}}
        <div class="">

            <form method="POST"
                action="{{ route('ticket-appointments.update', ['ticket_appointment' => $appointment->id]) }}"
                id="update-appointment-form" class="">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-md-6 justify-content-end">

                        <div class="form-group row">
                            <label for="select-ticket" class="col-5 text-right">Slected Ticket:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="select-ticket" name="select-ticket">
                                    <option value="{{ $appointment->ticket()->first()->id }}">
                                        {{ $appointment->ticket()->first()->id }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="appointment-fee" class="col-5 text-right">Appointment Fee:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="appointment-fee" name="appointment-fee"></div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="language" class="col-5 text-right">Language:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="language" name="language">
                                    <option value="language1">Language 1</option>
                                    <option value="language2">Language 2</option>
                                    <option value="language3">Language 3</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div> --}}


                        <div class="form-group row">
                            <label for="appointment-type" class="col-5 text-right">Appointment Type:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="appointment-type" name="appointment-type">
                                    <option value="online">Online</option>
                                    <option value="offline">Offline</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="payment-method" class="col-5 text-right">Payment Method:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="payment-method" name="payment-method">
                                    <option value="card">Card</option>
                                    <option value="insurance">Insurance</option>
                                    <option value="cash">Cash</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>




                    </div>
                    <div class="col-md-6 justify-content-start">


                        <div class="form-group row">
                            <label for="remarks" class="col-5 text-right">Remarks:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm" id="remarks"
                                    name="remarks"></div>
                        </div>

                        <div class="form-group row">
                            <label for="select-status" class="col-5 text-right">Select Status:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="select-status" name="select-status">
                                    <option value="active">Active</option>
                                    <option value="cancelled">Canceled</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="therapist-comment" class="col-5 text-right">Therapist Comment:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="therapist-comment" name="therapist-comment"></div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="appointment-history" class="col-5 text-right">Appointment History:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="appointment-history" name="appointment-history"></div>
                        </div> --}}
                    </div>
                </div>
            </form>

        </div>
        <hr>
        <div>
            <h4>Intakes</h4>
            <div class="mt-2 datatable-container">
                <x-adminlte-datatable id="patientsTable" :heads="$heads" striped hoverable bordered with-buttons beautify
                    with-footer>
                    @foreach ($config['data'] as $row)
                        <tr>
                            @foreach ($row as $cell)
                                <td>{!! $cell !!}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </x-adminlte-datatable>
            </div>
        </div>
    </div>

@stop

@section('css')
    <style>
        table.dataTable td,
        table.dataTable th {
            padding: 5px 5px;
            width: 1px;
            white-space: nowrap;
        }

        .column-search-input::placeholder {
            text-align: center;
        }
    </style>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            // update appointment
            document.getElementById('top-submit-button').addEventListener('click', function() {
                $('#update-appointment-form').submit()
            });
            $('#update-appointment-form').submit(function(event) {
                event.preventDefault(); // Prevent form submission

                var formData = $(this).serialize(); // Serialize form data

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        Swal.fire('Success!', 'Request successful', 'success');

                    },
                    error: function(xhr) {
                        // Handle error response
                        console.log(xhr.responseText);
                        Swal.fire('Error!', 'Request failed', 'error');
                    }
                });
            });



            // table js
            $('#patientsTable').DataTable().destroy();
            $('#patientsTable tfoot th').each(function(index) {
                if (index != 0) {
                    var title = $(this).text();
                    $(this).html('<input type="text" placeholder="Search ' + title +
                        '" class="form-control column-search-input" />');
                    $('.column-search-input').each(function() {
                        var placeholder = $(this).attr('placeholder');
                        var placeholderLength = placeholder.length;

                        // Calculate the minimum width based on placeholder length
                        var minWidth = placeholderLength * 10 +
                            'px'; // Adjust the multiplier to suit your needs

                        $(this).css('min-width', minWidth);
                    });
                }

            });
            $('#patientsTable th').css('text-align', 'center');
            $('#patientsTable').DataTable({
                initComplete: function() {
                    // Apply the search
                    this.api()
                        .columns()
                        .every(function() {
                            var that = this;

                            $('input', this.footer()).on('keyup change clear', function() {
                                if (that.search() !== this.value) {
                                    that.search(this.value).draw();
                                }
                            });
                        });
                },
                scrollX: true, // Enable horizontal scrolling
                fixedHeader: true,
                scrollY: '50vh',
                scrollCollapse: true,
                paging: true,
                dom: 'Bftip',
                buttons: [
                    'pageLength', 'copy', 'excel', 'pdf', 'print', 'colvis'
                ]
            })
        });
    </script>
@stop
