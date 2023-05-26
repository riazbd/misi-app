@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-align-center">Ticket Information</h1>
        <div class="row mt-5">
            <div class="col-md-6 px-3" style="border-right: 1px solid #dedede">
                <div>
                    Hello
                </div>

            </div>
            <div class="col-md-6 px-3">
                <form method="POST" action="{{ route('heranmelding.update', ['heranmelding' => $ticketId]) }}"
                    id="update-ticket-form">

                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- First Column -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="select-department">Select Department:</label>
                                <select class="form-control" id="select-department" name="select-department">
                                    @foreach ($matchingRoles as $matchingRole)
                                        <option value="{{ $matchingRole->id }}">{{ $matchingRole->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select-department">Suggest Therapists:</label>
                                <select class="form-control selectpicker" id="suggest-therapists"
                                    name="suggest-therapists[]" multiple data-live-search="true">
                                    @foreach ($therapists as $therapist)
                                        <option value="{{ $therapist->id }}">{{ $therapist->user()->first()->first_name }}
                                            {{ $therapist->user()->first()->last_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mono-multi-zd">Mono/Multi ZD:</label>
                                <input type="text" class="form-control" id="mono-multi-zd" name="mono-multi-zd">
                            </div>
                            <div class="form-group">
                                <label for="mono-multi-screening">Mono/Multi Screening:</label>
                                <input type="text" class="form-control" id="mono-multi-screening"
                                    name="mono-multi-screening">
                            </div>
                            <div class="form-group">
                                <label for="intakes-therapist">Intakes/Therapist:</label>
                                <input type="text" class="form-control" id="intakes-therapist" name="intakes-therapist">
                            </div>
                            <div class="form-group">
                                <label for="tresonit-number">Tresonit Number:</label>
                                <input type="text" class="form-control" id="tresonit-number" name="tresonit-number">
                            </div>
                            <div class="form-group">
                                <label for="datum-intake">Datum Intake:</label>
                                <input type="text" class="form-control" id="datum-intake" name="datum-intake">
                            </div>
                            <div class="form-group">
                                <label for="datuem-intake-2">Datuem Intake 2:</label>
                                <input type="text" class="form-control" id="datuem-intake-2" name="datuem-intake-2">
                            </div>
                            <div class="form-group">
                                <label for="nd-account">ND Account:</label>
                                <input type="text" class="form-control" id="nd-account" name="nd_account">
                            </div>
                            <div class="form-group">
                                <label for="avc-alfmvm-sbg">AvC/AlfmVm/SBG:</label>
                                <input type="text" class="form-control" id="avc-alfmvm-sbg" name="avc-alfmvm-sbg">
                            </div>
                            <div class="form-group">
                                <label for="honos">Honos:</label>
                                <input type="text" class="form-control" id="honos" name="honos">
                            </div>
                            <div class="form-group">
                                <label for="berha-intake">Berha Intake:</label>
                                <input type="text" class="form-control" id="berha-intake" name="berha-intake">
                            </div>
                            <div class="form-group">
                                <label for="strike-history">Strike History:</label>
                                <textarea class="form-control" id="strike-history" rows="3" name="strike-history"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ticket-history">Ticket History:</label>
                                <textarea class="form-control" id="ticket-history" rows="3" name="ticket-history"></textarea>
                            </div>
                        </div>
                        <!-- Second Column -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="select-department">Select Patient:</label>
                                <select class="form-control" id="select-patient" name="select-patient">
                                    <option value="">Select Patient</option>
                                    @foreach ($patients as $patient)
                                        <option value="{{ $patient->id }}">{{ $patient->user()->first()->first_name }}
                                            {{ $patient->user()->first()->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rom-start">ROM Start:</label>
                                <input type="date" class="form-control" id="rom-start" name="rom-start">
                            </div>
                            <div class="form-group">
                                <label for="rom-end">ROM End:</label>
                                <input type="date" class="form-control" id="rom-end" name="rom-end">
                            </div>
                            <div class="form-group">
                                <label for="berha-eind">Berha Eind:</label>
                                <input type="date" class="form-control" id="berha-eind" name="berha-eind">
                            </div>
                            <div class="form-group">
                                <label for="vtcb-date">VTCB Date:</label>
                                <input type="date" class="form-control" id="vtcb-date" name="vtcb-date">
                            </div>
                            <div class="form-group">
                                <label for="closure">Closure:</label>
                                <input type="date" class="form-control" id="closure" name="closure">
                            </div>
                            <div class="form-group">
                                <label for="aanm-intake">Aanm-intake 1 (dagentussen):</label>
                                <input type="date" class="form-control" id="aanm-intake" name="aanm-intake">
                            </div>
                            <div class="form-group">
                                <label for="location">Location:</label>
                                <select class="form-control" id="location" name="location">
                                    <option>Location 1</option>
                                    <option>Location 2</option>
                                    <option>Location 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="call-strike">Call Strike:</label>
                                <select class="form-control" id="call-strike" name="call-strike">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="remarks">Remarks:</label>
                                <input type="text" class="form-control" id="remarks" name="remarks">
                            </div>
                            <div class="form-group">
                                <label for="comments">Comments:</label>
                                <input type="text" class="form-control" id="comments" name="comments">
                            </div>
                            <div class="form-group">
                                <label for="language-treatment">Language Treatment:</label>
                                <select class="form-control" id="language-treatment" name="language-treatment">
                                    <option>Language 1</option>
                                    <option>Language 2</option>
                                    <option>Language 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file">File:</label>
                                <input type="file" class="form-control-file" id="file">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

    </div>
@stop

@section('js')
    <script>
        // submit form
        $(document).ready(function() {
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

            $('#suggest-therapists').on('change', function() {
                var selectedOptions = $(this).val();
                var maxSelections = 3;

                if (selectedOptions.length >= maxSelections) {
                    // Disable remaining options when the maximum limit is reached
                    $(this).find('option:not(:selected)').prop('disabled', true);
                } else {
                    // Enable all options when the selection count is below the limit
                    $(this).find('option').prop('disabled', false);
                }

                $(this).selectpicker('refresh');
            });
        });
    </script>
@stop
