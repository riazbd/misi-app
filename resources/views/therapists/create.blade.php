@extends('adminlte::page')

@section('content')

    <div class="p-5">
        {{-- <h1>Therapist Management</h1> --}}
        <div class="">

            <form method="POST" action="{{ route('therapists.store') }}" id="create-therapist-form">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="therapist-type" class="col-5 text-right">Therapist Type:</label>
                            <div class="col-7">
                                <select type="text" class="form-control  form-control-sm" id="therapist-type"
                                    name="therapist-type">
                                    <option value="Therapist type 1">Therapist type 1</option>
                                    <option value="Therapist type 2">Therapist type 2</option>
                                    <option value="Therapist type 3">Therapist type 3</option>
                                    <option value="Therapist type 4">Therapist type 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="first-name" class="col-5 text-right">First Name:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm" id="first-name"
                                    name="first-name"></div>
                        </div>
                        <div class="form-group row">
                            <label for="last-name" class="col-5 text-right">Last Name:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm" id="last-name"
                                    name="last-name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone-number" class="col-5 text-right">Phone Number:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm" id="phone-number"
                                    name="phone-number"></div>
                        </div>
                        <div class="form-group row">
                            <label for="alt-phone-number" class="col-5 text-right">Alternative Phone Number:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="alt-phone-number" name="alt-phone-number"></div>
                        </div>
                        <div class="form-group row">
                            <label for="emergency-contact" class="col-5 text-right">Emergency Contact:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="emergency-contact" name="emergency-contact"></div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-5 text-right">Date of Birth:</label>
                            {{-- <input type="date" class="form-control" id="dob" name="dob"
                                onchange="calculateAge()"> --}}
                            {{-- <input type="text" class="form-control" id="dob" name="dob" onchange="calculateAge()"> --}}
                            @php
                                $config = ['format' => 'DD-MM-YYYY'];
                            @endphp
                            <div class="col-7">
                                <x-adminlte-input-date name="dob" :config="$config" placeholder="Choose a date..."
                                    id="dob" onchange="calculateAge()" class="form-control-sm">
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text bg-gradient-primary">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input-date>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" name="age" readonly>
                        </div> --}}
                        <div class="form-group row">
                            <label for="marital-status" class="col-5 text-right">Marital Status:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="marital-status" name="marital-status">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="divorced">Divorced</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-5 text-right">Status:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="status" name="status">
                                    <option value="Active">Active</option>
                                    <option value="Inavtive">Inactive</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sex" class="col-5 text-right">Sex:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="sex" name="sex">
                                    <option value="Male">Male</option>
                                    <option value="Femail">Femail</option>
                                    <option value="Other">Other</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="blood-group" class="col-5 text-right">Blood group:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="blood-group" name="blood-group">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-5 text-right">Country:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="country" name="country">
                                    <option value="country1">Country 1</option>
                                    <option value="country1">Country 2</option>
                                    <option value="country1">Country 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city-state" class="col-5 text-right">City/State:</label>
                            <div class="col-7"><input class="form-control form-control-sm" id="city-state"
                                    name="city-state"></div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-5 text-right">Email:</label>
                            <div class="col-7"><input type="email" class="form-control form-control-sm"
                                    id="email" name="email"></div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-5 text-right">Password:</label>
                            <div class="col-7"><input type="password" class="form-control form-control-sm"
                                    id="password" name="password"></div>
                        </div>
                        <div class="form-group row">
                            <label for="insurance-number" class="col-5 text-right">Insurance Number:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="insurance-number" name="insurance-number"></div>
                        </div>

                        <div class="form-group row">
                            <label for="area" class="col-5 text-right">Area:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="area" name="area"></div>
                        </div>
                        <div class="form-group row">
                            <label for="dob-number" class="col-5 text-right">DOB Number:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="dob-number" name="dob-number"></div>
                        </div>
                        <div class="form-group row">
                            <label for="bsn-number" class="col-5 text-right">BSN Number:</label>
                            <div class="col-7"><input type="text" class="form-control  form-control-sm"
                                    id="bsn-number" name="bsn-number"></div>
                        </div>
                        <div class="form-group row">
                            <label for="remarks" class="col-5 text-right">Remarks:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="remarks" name="remarks"></div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-5 text-right">File:</label>
                            <div class="col-7"><input type="file" class="form-control-file form-control-file-sm"
                                    id="file" name="file"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="residential-address" class="col-5 text-right">Residential Address:</label>
                            <div class="col-7">
                                <textarea class="form-control" id="residential-address" rows="3" name="residential-address"></textarea>
                            </div>
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
            $('#create-therapist-form').submit(function(event) {
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
