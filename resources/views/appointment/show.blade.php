@extends('adminlte::page')

@section('content_top_nav_left')
    <div class="ml-5 d-flex align-items-center">
        <h6 class="m-0">PiT Ticket - {{ $ticket->id }}</h6>
    </div>
@stop

@section('content')
    <div class="d-flex justify-content-between align-items-center w-100 sticky-top"
        style="min-height: 10px; background-color: #fff;">
        <div>
            <div class="d-flex flex-direction-row button-container">
                <button class="top-button go-back">Go Back</button>
                <button class="top-button top-submit-button" id="top-submit-button">Submit</button>
                {{-- <button class="top-button top-cancel-button" id="top-cancel-button">Cancel</button> --}}
                <button class="top-button" id="top-cancel" data-toggle="modal" data-target="#cancelModal">Cancel</button>

            </div>
        </div>
        <div>

        </div>
    </div>
    <div class="p-5">
        {{-- <h1 class="text-align-center">Ticket Information</h1> --}}

        <div class="">
            <form method="POST" action="{{ route('appointment-groups.update', ['appointment_group' => $ticketId]) }}" id="update-ticket-form">

                @csrf
                @method('PUT')
                <div class="row">
                    <!-- First Column -->
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="select-department" class="col-5 text-right">Select Department:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="select-department"
                                    name="select-department">
                                    <option value="">Select Department</option>
                                    @foreach ($matchingRoles as $matchingRole)
                                        <option value="{{ $matchingRole->id }}"
                                            {{ $ticket->department_id == $matchingRole->id ? 'selected' : '' }}>
                                            {{ $matchingRole->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="assign-to" class="col-5 text-right">Assign To:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="assign-to" name="assign-to">
                                    <option value="">Select Staff</option>

                                </select>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="select-therapists" class="col-5 text-right">Suggest Therapists:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm selectpicker" id="select-therapists"
                                    name="suggest-therapists[]" multiple data-live-search="true">
                                    @foreach ($therapists as $therapist)
                                        @php
                                            $therapistId = $therapist->id;
                                            $suggested_array = json_decode($ticket->suggested_therapists) ?? [];
                                            $isSelected = in_array($therapistId, $suggested_array);
                                        @endphp
                                        <option value="{{ $therapist->id }}" {{ $isSelected ? 'selected' : '' }}>
                                            {{ $therapist->user()->first()->first_name }}
                                            {{ $therapist->user()->first()->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="select-therapists" class="col-5 text-right">Assign Therapist:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm selectpicker" id="assign-therapist"
                                    name="assign-therapist">
                                    @php
                                            $suggested_array = json_decode($ticket->suggested_therapists) ?? [];
                                            $selected = \App\Models\Ticket::where('id', $ticketId)->first()->assigned_therapist;

                                    @endphp
                                    <option value="">Select Therapist</option>
                                    @foreach ($suggested_array as $therapist)

                                        <option value="{{ $therapist }}" {{ $selected == $therapist ? 'selected' : '' }}>
                                            {{ \App\Models\Therapist::where('id', $therapist)->first()->user()->first()->first_name }} {{ \App\Models\Therapist::where('id', $therapist)->first()->user()->first()->last_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mono-multi-zd" class="col-5 text-right">Mono/Multi ZD:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="mono-multi-zd"
                                    name="mono-multi-zd" value="{{ $ticket->mono_multi_zd }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mono-multi-screening" class="col-5 text-right">Mono/Multi Screening:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="mono-multi-screening"
                                    name="mono-multi-screening" value="{{ $ticket->mono_multi_screening }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="intakes-therapist" class="col-5 text-right">Intakes/Therapist:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="intakes-therapist"
                                    name="intakes-therapist" value="{{ $ticket->intake_or_therapist }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tresonit-number" class="col-5 text-right">Tresonit Number:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="tresonit-number"
                                    name="tresonit-number" value="{{ $ticket->tresonit_number }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datum-intake" class="col-5 text-right">Datum Intake:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="datum-intake"
                                    name="datum-intake" value="{{ $ticket->datum_intake }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datuem-intake-2" class="col-5 text-right">Datuem Intake 2:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="datuem-intake-2"
                                    name="datuem-intake-2" value="{{ $ticket->datum_intake_2 }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nd-account" class="col-5 text-right">ND Account:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="nd-account"
                                    name="nd_account" value="{{ $ticket->nd_account }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="avc-alfmvm-sbg" class="col-5 text-right">AvC/AlfmVm/SBG:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="avc-alfmvm-sbg"
                                    name="avc-alfmvm-sbg" value="{{ $ticket->avc_alfmvm_sbg }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="honos" class="col-5 text-right">Honos:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="honos" name="honos"
                                    value="{{ $ticket->honos }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berha-intake" class="col-5 text-right">Berha Intake:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="berha-intake"
                                    name="berha-intake" value="{{ $ticket->berha_intake }}" readonly>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="strike-history" class="col-5 text-right">Strike History:</label>
                            <div class="col-7">
                                <textarea class="form-control form-control-sm" id="strike-history" rows="3" name="strike-history"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ticket-history" class="col-5 text-right">Ticket History:</label>
                            <div class="col-7">
                                <textarea class="form-control form-control-sm" id="ticket-history" rows="3" name="ticket-history"></textarea>
                            </div>
                        </div> --}}
                    </div>
                    <!-- Second Column -->
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="select-department" class="col-5 text-right">Select Patient:</label>
                            <div class="col-7">
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control form-control-sm" id="select-patient"
                                            name="select-patient">
                                            {{-- <option value="">Select Patient</option>
                                            @foreach ($patients as $pat)
                                                <option value="{{ $pat->id }}"
                                                    {{ $ticket->patient()->first()->id == $pat->id ? 'selected' : '' }}>
                                                    {{ $pat->user()->first()->first_name }}
                                                    {{ $pat->user()->first()->last_name }}</option>
                                            @endforeach --}}
                                            <option value="{{ $ticket->patient()->first()->id }}">
                                                {{ $ticket->patient()->first()->user()->first()->first_name }}
                                                {{ $ticket->patient()->first()->user()->first()->last_name }}
                                            </option>
                                        </select>
                                        <div class="input-group-append " id="view-patient" data-toggle="modal"
                                            data-target="#patient-view-modal">
                                            <div class="input-group-text bg-gradient-primary">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $config = ['format' => 'DD-MM-YYYY'];
                        @endphp
                        <div class="form-group row">
                            <label for="rom-start" class="col-5 text-right">ROM Start:</label>
                            <div class="col-7">
                                <x-adminlte-input-date name="rom-start" :config="$config" placeholder="Choose a date..."
                                    id="rom-start" :value="$ticket->rom_start" class="form-control-sm" readonly>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text bg-gradient-primary">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input-date>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="rom-end" class="col-5 text-right">ROM End:</label>
                            <div class="col-7">
                                <x-adminlte-input-date name="rom-end" :config="$config" placeholder="Choose a date..."
                                    id="rom-end" :value="$ticket->rom_end" class="form-control-sm" readonly>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text bg-gradient-primary">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input-date>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="berha-eind" class="col-5 text-right">Berha Eind:</label>
                            <div class="col-7">
                                <x-adminlte-input-date name="berha-eind" :config="$config" placeholder="Choose a date..."
                                    id="berha-eind" :value="$ticket->berha_end" class="form-control-sm" readonly>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text bg-gradient-primary">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input-date>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="vtcb-date" class="col-5 text-right">VTCB Date:</label>
                            <div class="col-7">
                                <x-adminlte-input-date name="vtcb-date" :config="$config" placeholder="Choose a date..."
                                    id="vtcb-date" :value="$ticket->vtcb_date" class="form-control-sm" readonly>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text bg-gradient-primary">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input-date>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="closure" class="col-5 text-right">Closure:</label>
                            <div class="col-7">
                                <x-adminlte-input-date name="closure" :config="$config" placeholder="Choose a date..."
                                    id="closure" :value="$ticket->closure" class="form-control-sm">
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text bg-gradient-primary" readonly>
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input-date>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="aanm-intake" class="col-5 text-right">Aanm Intake 1 (dagentussen):</label>
                            <div class="col-7">
                                <x-adminlte-input-date name="aanm-intake" :config="$config"
                                    placeholder="Choose a date..." id="aanm-intake" :value="$ticket->aanm_intake_1"
                                    class="form-control-sm">
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text bg-gradient-primary">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input-date>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-5 text-right">Location:</label>
                            <div class="col-7">
                                <input class="form-control form-control-sm" id="location" name="location"
                                    value="{{ $ticket->location }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="call-strike" class="col-5 text-right">Call Strike:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="call-strike" name="call-strike">
                                    <option value="">Select Strike</option>
                                    <option value="strike_1" {{ $ticket->call_strike == 'strike_1' ? 'selected' : '' }}>
                                        Strike 1</option>
                                    <option value="strike_2" {{ $ticket->call_strike == 'strike_2' ? 'selected' : '' }}>
                                        Strike 2</option>
                                    <option value="strike_3" {{ $ticket->call_strike == 'strike_3' ? 'selected' : '' }}>
                                        Strike 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="remarks" class="col-5 text-right">Remarks:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="remarks" name="remarks"
                                    value="{{ $ticket->remarks }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="select-status" class="col-5 text-right">Status:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="select-status" name="select-status">
                                    <option value="">Select Status</option>
                                    <option value="open" {{ $ticket->status == 'open' ? 'selected' : '' }} disabled>
                                        {{ $ticket->department_id != null ?? ucfirst(Spatie\Permission\Models\Role::where('id', $ticket->department_id)->first()->name) }}
                                        Open</option>
                                    <option value="onhold" {{ $ticket->status == 'onhold' ? 'selected' : '' }}>
                                        {{ $ticket->department_id != null ?? ucfirst(Spatie\Permission\Models\Role::where('id', $ticket->department_id)->first()->name) }}
                                        On hold</option>
                                    <option value="in_progress" {{ $ticket->status == 'in_progress' ? 'selected' : '' }}>
                                        {{ $ticket->department_id != null ?? ucfirst(Spatie\Permission\Models\Role::where('id', $ticket->department_id)->first()->name) }}
                                        In progess</option>
                                    <option value="finished" {{ $ticket->status == 'finished' ? 'selected' : '' }}>
                                        {{ $ticket->department_id != null ?? ucfirst(Spatie\Permission\Models\Role::where('id', $ticket->department_id)->first()->name) }}
                                        Finished</option>
                                    {{-- <option value="work_finished"
                                        {{ $ticket->call_strike == 'work_finished' ? 'selected' : '' }} disabled>
                                        Work Finished</option> --}}
                                    <option value="cancelled" {{ $ticket->status == 'cancelled' ? 'selected' : '' }}
                                        disabled>
                                        Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comments" class="col-5 text-right">Comments:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="comments" name="comments"></div>
                        </div>
                        <div class="form-group row">
                            <label for="language-treatment" class="col-5 text-right">Language Treatment:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="language-treatment"
                                    name="language-treatment">
                                    <option value="dutch" {{ $ticket->language == 'dutch' ? 'selected' : '' }}>Dutch
                                    </option>
                                    <option value="english" {{ $ticket->language == 'english' ? 'selected' : '' }}>English
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-5 text-right">File:</label>
                            <div class="col-7"><input type="file" class="form-control-file form-control-sm"
                                    id="file"></div>
                        </div>
                    </div>
                </div>
                {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="ml-3 col-2 text-right">Activity Log</h6>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">


                        <div class="form-group row">
                            <label for="comments" class="col-2 text-right">Work Note:</label>
                            <div class="col-10">
                                <textarea class="form-control form-control-sm" id="comments" name="comments"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id="ticket-history">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="pr-3 col-2 text-right">Activites</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="px-5 py-3" id="history-card">
                        <div class="card">
                            <div class="card-body" id="history-body">
                                {{-- <div id="history-content"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    @include('extras.patient_modal')
    @include('extras.cancelModal')
@stop

@section('js')
    <script>
        // submit form
        $(document).ready(function() {
            var assignToSelect = $('#assign-to');

            var defaultRole = $('#select-department').val();

            var assignedStaff = '{{ $ticket->assigned_staff }}' !== null ? '{{ $ticket->assigned_staff }}' : '';

            $('#rom-start').prop('readonly', true);
            $('#rom-end').prop('readonly', true);
            $('#berha-eind').prop('readonly', true);
            $('#vtcb-date').prop('readonly', true);
            $('#closure').prop('readonly', true);
            $('#aanm-intake').prop('readonly', true);

            var select = $('#select-therapists');

            // Event listener for change event
            select.on('changed.bs.select', function(e, clickedIndex, isSelected, previousValue) {
                var selectedOptions = select.val();

                // Disable remaining options if the limit is reached
                if (selectedOptions.length >= 3) {
                    select.find('option:not(:selected)').attr('disabled', true);
                    select.selectpicker('refresh');
                } else {
                    // Enable all options
                    select.find('option').attr('disabled', false);
                    select.selectpicker('refresh');
                }
            });

            var ticketId = '{{ $ticket->id }}';

            getHistories(ticketId)

            document.getElementById('top-submit-button').addEventListener('click', function() {
                $('select[name="select-status"] option').removeAttr('disabled');
                $('#update-ticket-form').submit()
            });
            $('#update-ticket-form').submit(function(event) {
                event.preventDefault(); // Prevent form submission

                var formData = $(this).serialize(); // Serialize form data
                console.log(formData);

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

                getHistories(ticketId)
            });

            // var assignToSelect = $('#assign-to');

            // var defaultRole = $('#select-department').val();

            getUsers(defaultRole)

            function getUsers(roleVal) {
                $.ajax({
                    url: '/get-role-users', // Replace with your Laravel route
                    type: 'GET',
                    data: {
                        role: roleVal
                    },
                    success: function(response) {
                        // Populate the "Assign To" select input with the retrieved users
                        assignToSelect.empty()
                        $.each(response.users, function(index, user) {
                            var option = $('<option></option>').text(user.first_name).val(user
                                .id);



                            // Check if the user ID matches the "Assign To" value
                            if (user.id == assignedStaff) {
                                option.prop('selected', true);
                            }

                            assignToSelect.append(option);
                            assignToSelect.prepend($('<option></option>').val("").text(
                                'Select Staff'));
                        });

                        console.log(response.users)
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }



            // $('#top-cancel-button').on('click', function() {
            //     var ticketId = '{{ $ticket->id }}';

            //     cancelTicket(ticketId)


            // });



            // Handle the change event of the "Roles" select input
            $('#select-department').on('change', function() {
                var selectedRole = $(this).val();

                getUsersChanged(selectedRole, assignToSelect)


            });






            // for cancellation

            function cancelTicket(ticketId, mailId, reason) {
                $.ajax({
                    url: '/cancel-ticket/', // Replace with your Laravel route
                    type: 'GET',
                    data: {
                        id: ticketId,
                        mailId: mailId,
                        reason: reason
                    },
                    success: function(response) {
                        // Populate thconsole.log(response);
                        Swal.fire('Success!', 'Ticket Cancelled', 'success');
                    },
                    error: function(xhr, status, error) {
                        Swal.fire('Error!', 'Request failed', 'error');
                        console.log(xhr.responseText)
                    }
                });
            }

            $('#clickable').click(function() {
                if ($('#sendEmailToggle').is(':checked')) {
                    $('#sendEmailToggle').prop('checked', false)
                    $('#emailFields').hide();
                    console.log('Toggle button is ON');
                } else {
                    $('#sendEmailToggle').prop('checked', true)
                    $('#emailFields').show();
                    console.log('Toggle button is OFF');
                }
            })

            $('#emailTypeCancel').change(function() {
                var selectedType = $(this).val();
                $.ajax({
                    url: '/getemailsforcancel',
                    method: 'GET',
                    data: {
                        type: selectedType
                    },
                    success: function(response) {
                        var emailNameSelect = $('#emailNameCancel');
                        console.log(response);
                        emailNameSelect.empty();
                        if (response && response.length > 0) {
                            response.forEach(function(email) {
                                var option = $('<option></option>').attr('value', email
                                    .id).text(email.mail_name);
                                emailNameSelect.append(option);
                            });
                        }
                        // $('#emailFields').show();
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $('#submitCancel').on('click', function() {
                var ticketId = '{{ $ticket->id }}';

                var mailId = $('#emailNameCancel').val()

                var reason = $('#cancelReason').val()

                cancelTicket(ticketId, mailId, reason)


            });

            $('.go-back').click(function() {
                history.go(-1); // Go back one page
                console.log('click back button')
            });



        });
    </script>
@stop