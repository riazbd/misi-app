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
        {{-- <h1 class="text-align-center">Ticket Information</h1> --}}

        <div class="">
            <form method="POST" action="{{ route('yes-approvals.update', ['yes_approval' => $ticketId]) }}"
                id="update-ticket-form">

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
                        <div class="form-group row">
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
                        </div>
                        <div class="form-group row">
                            <label for="mono-multi-zd" class="col-5 text-right">Mono/Multi ZD:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="mono-multi-zd"
                                    name="mono-multi-zd" value="{{ $ticket->mono_multi_zd }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mono-multi-screening" class="col-5 text-right">Mono/Multi Screening:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="mono-multi-screening"
                                    name="mono-multi-screening" value="{{ $ticket->mono_multi_screening }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="intakes-therapist" class="col-5 text-right">Intakes/Therapist:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="intakes-therapist"
                                    name="intakes-therapist" value="{{ $ticket->intake_or_therapist }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tresonit-number" class="col-5 text-right">Tresonit Number:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="tresonit-number"
                                    name="tresonit-number" value="{{ $ticket->tresonit_number }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datum-intake" class="col-5 text-right">Datum Intake:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="datum-intake"
                                    name="datum-intake" value="{{ $ticket->datum_intake }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="datuem-intake-2" class="col-5 text-right">Datuem Intake 2:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="datuem-intake-2"
                                    name="datuem-intake-2" value="{{ $ticket->datum_intake_2 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nd-account" class="col-5 text-right">ND Account:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="nd-account" name="nd_account"
                                    value="{{ $ticket->nd_account }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="avc-alfmvm-sbg" class="col-5 text-right">AvC/AlfmVm/SBG:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="avc-alfmvm-sbg"
                                    name="avc-alfmvm-sbg" value="{{ $ticket->avc_alfmvm_sbg }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="honos" class="col-5 text-right">Honos:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="honos" name="honos"
                                    value="{{ $ticket->honos }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berha-intake" class="col-5 text-right">Berha Intake:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="berha-intake"
                                    name="berha-intake" value="{{ $ticket->berha_intake }}">
                            </div>
                        </div>
                        <div class="form-group row">
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
                        </div>
                    </div>
                    <!-- Second Column -->
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="select-department" class="col-5 text-right">Select Patient:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="select-patient" name="select-patient">
                                    <option value="">Select Patient</option>
                                    @foreach ($patients as $patient)
                                        <option value="{{ $patient->id }}"
                                            {{ $ticket->patient()->first()->id == $patient->id ? 'selected' : '' }}>
                                            {{ $patient->user()->first()->first_name }}
                                            {{ $patient->user()->first()->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @php
                            $config = ['format' => 'DD-MM-YYYY'];
                        @endphp
                        <div class="form-group row">
                            <label for="rom-start" class="col-5 text-right">ROM Start:</label>
                            <div class="col-7">
                                <x-adminlte-input-date name="rom-start" :config="$config" placeholder="Choose a date..."
                                    id="rom-start" :value="$ticket->rom_start" class="form-control-sm">
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
                                    id="rom-end" :value="$ticket->rom_end" class="form-control-sm">
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
                                    id="berha-eind" :value="$ticket->berha_end" class="form-control-sm">
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
                                    id="vtcb-date" :value="$ticket->vtcb_date" class="form-control-sm">
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
                                        <div class="input-group-text bg-gradient-primary">
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
                                    value="{{ $ticket->location }}">
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
                                        Open</option>
                                    <option value="onhold" {{ $ticket->call_strike == 'onhold' ? 'selected' : '' }}>
                                        On hold</option>
                                    <option value="in_progress"
                                        {{ $ticket->call_strike == 'in_progress' ? 'selected' : '' }}>
                                        In progess</option>
                                    {{-- <option value="work_finished"
                                        {{ $ticket->call_strike == 'work_finished' ? 'selected' : '' }} disabled>
                                        Work Finished</option> --}}
                                    <option value="cancelled" {{ $ticket->call_strike == 'cancelled' ? 'selected' : '' }}
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
            </form>
        </div>

    </div>
@stop

@section('js')
    <script>
        // submit form
        $(document).ready(function() {
            var assignToSelect = $('#assign-to');

            var defaultRole = $('#select-department').val();

            var assignedStaff = '{{ $ticket->assigned_staff }}' !== null ? '{{ $ticket->assigned_staff }}' : '';

            document.getElementById('top-submit-button').addEventListener('click', function() {
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
                        $.each(response.users, function(index, user) {
                            var option = $('<option></option>').text(user.first_name).val(user
                                .id);



                            // Check if the user ID matches the "Assign To" value
                            if (user.id == assignedStaff) {
                                option.prop('selected', true);
                            }

                            assignToSelect.append(option);
                        });

                        console.log(response.users)
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }



            // Handle the change event of the "Roles" select input
            $('#select-department').on('change', function() {
                var selectedRole = $(this).val();

                getUsers(selectedRole)


            });
        });
    </script>
@stop
