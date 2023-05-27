@extends('adminlte::page')

@section('content')

    <div class="container">
        <h1>Therapist Management</h1>
        <div class="mt-5">

            <form method="POST" action="{{ route('therapists.update', ['therapist' => $therapist->id]) }}" id="update-therapist-form">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first-name">Therapist Type:</label>
                            <select type="text" class="form-control" id="therapist-type" name="therapist-type">
                                <option value="Therapist type 1">Therapist type 1</option>
                                <option value="Therapist type 2">Therapist type 2</option>
                                <option value="Therapist type 3">Therapist type 3</option>
                                <option value="Therapist type 4">Therapist type 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="first-name">First Name:</label>
                            <input type="text" class="form-control" id="first-name" name="first-name" value="{{ $therapist->user()->first()->first_name }}">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name:</label>
                            <input type="text" class="form-control" id="last-name" name="last-name" value="{{ $therapist->user()->first()->last_name }}">
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Phone Number:</label>
                            <input type="text" class="form-control" id="phone-number" name="phone-number" value="{{ $therapist->user()->first()->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="alt-phone-number">Alternative Phone Number:</label>
                            <input type="text" class="form-control" id="alt-phone-number" name="alt-phone-number" value={{ $therapist->alternative_phone }}>
                        </div>
                        <div class="form-group">
                            <label for="emergency-contact">Emergency Contact:</label>
                            <input type="text" class="form-control" id="emergency-contact" name="emergency-contact" value="{{ $therapist->emergency_contact }}">
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            {{-- <input type="date" class="form-control" id="dob" name="dob"
                                onchange="calculateAge()"> --}}
                            {{-- <input type="text" class="form-control" id="dob" name="dob" onchange="calculateAge()"> --}}
                            @php
                                 $config = ['format' => 'DD-MM-YYYY'];
                            @endphp
                            <x-adminlte-input-date name="dob" :config="$config" placeholder="Choose a date..." id="dob" onchange="calculateAge()" :value="$therapist->user()->first()->date_of_birth">
                                <x-slot name="appendSlot">
                                    <div class="input-group-text bg-gradient-primary">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input-date>
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" name="age" readonly>
                        </div>
                        <div class="form-group">
                            <label for="marital-status">Marital Status:</label>
                            <select class="form-control" id="marital-status" name="marital-status">
                                <option value="Single" {{ $therapist->user()->first()->marital_status == 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Married" {{ $therapist->user()->first()->marital_status == 'Married' ? 'selected' : '' }}>Married</option>
                                <option value="Divorced" {{ $therapist->user()->first()->marital_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status">
                                <option value="Active" {{ $therapist->user()->first()->status == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Inavtive" {{ $therapist->user()->first()->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sex">Sex:</label>
                            <select class="form-control" id="sex" name="sex">
                                <option value="Male" {{ $therapist->user()->first()->sex == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Femail" {{ $therapist->user()->first()->sex == 'Female' ? 'selected' : '' }}>Femail</option>
                                <option value="Other" {{ $therapist->user()->first()->sex == 'Other' ? 'selected' : '' }}>Other</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="blood-group">Blood group:</label>
                            <select class="form-control" id="blood-group" name="blood-group">
                                <option value="A+" {{ $therapist->blood_group == 'A+' ? 'selected' : '' }}>A+</option>
                                <option value="A-" {{ $therapist->blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                                <option value="B+" {{ $therapist->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                                <option value="B-" {{ $therapist->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                                <option value="AB-" {{ $therapist->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                                <option value="AB+" {{ $therapist->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                                <option value="O+" {{ $therapist->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                                <option value="O-" {{ $therapist->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <select class="form-control" id="country" name="country">
                                @foreach ($countries as $country)
                                    <option value="{{ $country['name_en'] }}" {{ $therapist->country == $country['name_en'] ? 'selected' : '' }}>{{ $country['name_en'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city-state">City/State:</label>
                            <input class="form-control" id="city-state" name="city-state" value="{{ $therapist->city_or_state }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $therapist->user()->first()->email }}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div> --}}
                        <div class="form-group">
                            <label for="insurance-number">Insurance Number:</label>
                            <input type="text" class="form-control" id="insurance-number" name="insurance-number" value="{{ $therapist->insurance_number }}">
                        </div>

                        <div class="form-group">
                            <label for="area">Area:</label>
                            <input type="text" class="form-control" id="area" name="area" value="{{ $therapist->area }}">
                        </div>
                        <div class="form-group">
                            <label for="dob-number">DOB Number:</label>
                            <input type="text" class="form-control" id="dob-number" name="dob-number" value="{{ $therapist->DOB_number }}">
                        </div>
                        <div class="form-group">
                            <label for="bsn-number">BSN Number:</label>
                            <input type="text" class="form-control" id="bsn-number" name="bsn-number" value="{{ $therapist->BSN_number }}">
                        </div>
                        <div class="form-group">
                            <label for="remarks">Remarks:</label>
                            <input type="text" class="form-control" id="remarks" name="remarks" value="{{ $therapist->remarks }}">
                        </div>

                        <div class="form-group">
                            <label for="file">File:</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="residential-address">Residential Address:</label>
                            <textarea class="form-control" id="residential-address" rows="3" name="residential-address">{{ $therapist->residential_address }}</textarea>
                        </div>


                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>
    </div>

@stop

@section('js')
    <script>

        // $("#dob").datepicker();
        function calculateAge() {
            var dobInput = moment(document.getElementById('dob').value, 'DD-MM-YYYY');
            var dob = new Date(dobInput);
            var today = new Date();
            if (isNaN(Date.parse(dobInput))) {
                console.log("Invalid date input:", dobInput);
                return;
            }
            var age = today.getFullYear() - dob.getFullYear();

            // Check if the birthday hasn't happened yet this year
            if (today.getMonth() < dob.getMonth() || (today.getMonth() === dob.getMonth() && today.getDate() < dob
                    .getDate())) {
                age--;
            }

            // Set the calculated age in the input field
            document.getElementById('age').value = age;
        }


        // submit form
        $(document).ready(function() {
            $('#update-therapist-form').submit(function(event) {
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
