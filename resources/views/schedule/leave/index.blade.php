@extends('adminlte::page')


@section('content')
    <div class="pt-5">

        <div class=" pull-right">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#leaveCreateModal">
                Create Leave
            </button>
        </div>
        <div class="mt-2 datatable-container">
            <x-adminlte-datatable id="leaveTable" :heads="$heads" striped hoverable bordered with-buttons beautify
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
    @include('schedule.leave.modals.create')
    @include('schedule.leave.modals.edit')
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
            $('#leaveTable').DataTable().destroy();
            $('#leaveTable tfoot th').each(function(index) {
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
            $('#leaveTable th').css('text-align', 'center');
            $('#leaveTable').DataTable({
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


            // create leave

            document
                .getElementById("leavesubmit")
                .addEventListener("click", function() {
                    $("#leaveCreateForm").submit();
                });
            $("#leaveCreateForm").submit(function(event) {
                event.preventDefault(); // Prevent form submission

                var formData = $(this).serialize(); // Serialize form data
                console.log(formData);

                $.ajax({
                    url: '/create-leaves',
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        Swal.fire("Success!", "Leave Created Successfully", "success");
                    },
                    error: function(xhr) {
                        // Handle error response
                        console.log(xhr.responseText);
                        Swal.fire("Error!", "Request failed", "error");
                    },
                });
            });

            // create end

            document
                .getElementById("leaveUpdateSubmit")
                .addEventListener("click", function() {

                    $("#leaveUpdateForm").submit();
                });
            $("#leaveUpdateForm").submit(function(event) {
                event.preventDefault(); // Prevent form submission

                var formData = $(this).serialize(); // Serialize form data
                console.log(formData);

                $.ajax({
                    url: '/update-leaves/' + $(this).data('leave-id'),
                    type: "GET",
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        Swal.fire("Success!", "Form updated", "success");
                    },
                    error: function(xhr) {
                        // Handle error response
                        console.log(xhr.responseText);
                        Swal.fire("Error!", "Request failed", "error");
                    },
                });
            });



            function fetchLeaveInfo(id) {
                $.ajax({
                    url: "/to-fetch-leaves",
                    method: "get",
                    data: {
                        leaveId: id
                    },
                    success: function(response) {
                        console.log(response);
                        console.log("Success");

                        $('#therapistshow').empty()

                        $('#therapistshow').append($('<option></option>').attr('value', response.therapist_id).text(response.therapist_name));

                        $('#therapistshow').selectpicker('refresh');
                        $('#start-show-update').val(response.start_date)
                        $('#end-show-update').val(response.end_date)


                        $("#leaveShowModal").modal("show");
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    },
                });
            }

            $("#leaveUpdatemodalshow").click(function() {
                let id = $(this).data("leave-id");
                $("#leaveUpdateForm").attr('data-leave-id', id)

                fetchLeaveInfo(id);
            });


            // $('#start-date').datetimepicker({
            //     format: 'L',
            //     useCurrent: false,
            //     minDate: moment().startOf('day')
            // });

            // $('#start-date').on('change.datetimepicker', function (e) {
            //     $(this).find('input').val(e.date.format('L'));
            // });

            // $('#end-date').datetimepicker({
            //     format: 'L',
            //     useCurrent: false,
            //     minDate: moment().startOf('day')
            // });
            // $('#end-date').on('change.datetimepicker', function (e) {
            //     $(this).find('input').val(e.date.format('L'));
            // });

            // $('#dates').datetimepicker({
            //     format: 'yyyy-mm-dd' ,
            //     useCurrent: false,
            //     minDate: moment().startOf('day'),
            //     multidate: true, // Allow multiple dates to be selected
            //     multidateSeparator: ', ',
            //     dateRange: true // Enable date range selection
            // });
            // $('#dates').on('change.datetimepicker', function (e) {
            //     $(this).find('input').val(e.date.format('L'));
            // });

            // $('#dates').on('changeDate', function(e) {
            //     // Get the selected dates as an array of Date objects
            //     var selectedDates = $('#dates').datepicker('getDates');

            //     // Convert the array of Date objects to an array of formatted strings
            //     var formattedDates = selectedDates.map(date => moment(date).format('YYYY-MM-DD'));

            //     // Update the input value with the selected dates
            //     $('[name="dates"]').val(formattedDates.join(', '));
            // });

            // $('#dates').datepicker({
            //     range: true,
            //     multipleDates: true,
            //     dateFormat: 'yyyy-mm-dd',
            //     clearButton: true,
            //     onSelect: function(formattedDate, date, inst) {
            //         var selectedDates = inst.selectedDates.map(date => date.toLocaleDateString('en-CA'));
            //         $('[name="dates"]').val(selectedDates.join(', '));
            //     }
            // });
            var selectedDates = [];

            function updateInputField(startDate, endDate) {
                if (startDate.format('YYYY-MM-DD') === endDate.format('YYYY-MM-DD')) {
                    $('#dates').val(startDate.format('YYYY-MM-DD'));
                } else {
                    $('#dates').val(startDate.format('YYYY-MM-DD') + ' - ' + endDate.format('YYYY-MM-DD'));
                }
            }

            // $('#dates').daterangepicker({
            //     opens: 'left', // Adjust the position of the datepicker if needed
            //     startDate: moment(), // Set the initial date
            //     endDate: moment(), // Set the initial date
            //     minDate: moment().startOf('day'), // Set the minimum selectable date
            //     showDropdowns: true, // Show dropdowns for month and year selection
            //     linkedCalendars: false, // Allow selecting different dates for start and end
            //     locale: {
            //         format: 'YYYY-MM-DD' // Date format
            //     },
            //     ranges: false // Disable the predefined ranges to allow custom selection
            // }, updateInputField);

            flatpickr('#dates', {
                mode: 'range',
                dateFormat: 'm/d/Y',
                minDate: 'today',
                onChange: function(selectedDates, dateStr) {
                    if (selectedDates.length === 1) {
                        $('#dates').val(dateStr);
                    } else if (selectedDates.length === 2) {
                        var startDateStr = selectedDates[0].toLocaleDateString('en-US');
                        var endDateStr = selectedDates[1].toLocaleDateString('en-US');
                        $('#dates').val(startDateStr + ' - ' + endDateStr);
                    }
                }
            });

            // Update the selectedDates array whenever the selection changes
            $('#dates').on('apply.daterangepicker', function(ev, picker) {
                selectedDates = picker.selectedDates;
                updateInputField(picker.startDate, picker.endDate);
            });

            // $('#start-date-show').datetimepicker({
            //     format: 'L',
            //     useCurrent: false,
            //     minDate: moment().startOf('day')
            // });

            // $('#start-date-show').on('change.datetimepicker', function (e) {
            //     $(this).find('input').val(e.date.format('L'));
            // });

            // $('#end-date-show').datetimepicker({
            //     format: 'L',
            //     useCurrent: false,
            //     minDate: moment().startOf('day')
            // });
            // $('#end-date-show').on('change.datetimepicker', function (e) {
            //     $(this).find('input').val(e.date.format('L'));
            // });
            $("#start-time").flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: false,
                minuteIncrement: 1,
                static: true
            });

            $("#end-time").flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: false,
                minuteIncrement: 1,
                static: true
            });
        });
    </script>

@stop
