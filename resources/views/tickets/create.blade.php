@extends('adminlte::page')

@section('content')
    <div class="container">
        <h2>Ticket Form</h2>
        <form method="POST" action="{{ route('tickets.store') }}" id="create-ticket-form">
            @csrf
            <div class="row">
                <!-- First Column -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="select-department">Select Department:</label>
                        <select class="form-control" id="select-department" name="select-department">
                            <option value="{{ $screener->id }}">{{ $screener->name }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mono-multi-zd">Mono/Multi ZD:</label>
                        <input type="text" class="form-control" id="mono-multi-zd" name="mono-multi-zd">
                    </div>
                    <div class="form-group">
                        <label for="mono-multi-screening">Mono/Multi Screening:</label>
                        <input type="text" class="form-control" id="mono-multi-screening" name="mono-multi-screening">
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
                    @php
                        $config = ['format' => 'DD-MM-YYYY'];
                    @endphp
                    <div class="form-group">
                        <label for="rom-start">ROM Start:</label>
                        <x-adminlte-input-date name="rom-start" :config="$config" placeholder="Choose a date..."
                            id="rom-start">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-gradient-primary">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>


                    <div class="form-group">
                        <label for="rom-end">ROM End:</label>
                        <x-adminlte-input-date name="rom-end" :config="$config" placeholder="Choose a date..."
                            id="rom-end">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-gradient-primary">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>

                    <div class="form-group">
                        <label for="berha-eind">Berha Eind:</label>
                        <x-adminlte-input-date name="berha-eind" :config="$config" placeholder="Choose a date..."
                            id="berha-eind">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-gradient-primary">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>


                    <div class="form-group">
                        <label for="vtcb-date">VTCB Date:</label>
                        <x-adminlte-input-date name="vtcb-date" :config="$config" placeholder="Choose a date..."
                            id="vtcb-date">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-gradient-primary">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>


                    <div class="form-group">
                        <label for="closure">Closure:</label>
                        <x-adminlte-input-date name="closure" :config="$config" placeholder="Choose a date..."
                            id="closure">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-gradient-primary">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>

                    <div class="form-group">
                        <label for="aanm-intake">Aanm Intake 1 (dagentussen):</label>
                        <x-adminlte-input-date name="aanm-intake" :config="$config" placeholder="Choose a date..."
                            id="aanm-intake">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-gradient-primary">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input class="form-control" id="location" name="location">
                    </div>
                    <div class="form-group">
                        <label for="call-strike">Call Strike:</label>
                        <select class="form-control" id="call-strike" name="call-strike">
                            <option value="">Select Strike</option>
                            <option value="strike_1">Strike 1</option>
                            <option value="strike_2">Strike 2</option>
                            <option value="strike_3">Strike 3</option>
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
                            <option value="">Select Language</option>
                            <option value="dutch">Dutch</option>
                            <option value="english">English</option>
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
@stop

@section('js')
    <script>
        // submit form
        $(document).ready(function() {
            $('#create-ticket-form').submit(function(event) {
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
        });
    </script>
@stop
