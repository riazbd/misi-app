@extends('adminlte::page')

@section('content_top_nav_left')
<div class="ml-5 d-flex align-items-center">
    <h6 class="m-0">Patient - {{$patient->user()->first()->user_serial_no}}</h6>
</div>
@stop

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

            <form method="POST" action="{{ route('patients.update', ['patient' => $patient->id]) }}" id="update-patient-form"
                class="">
                @csrf
                @method('PUT')
                <div class="row justify-content-between">
                    <div class="col-md-6 justify-content-end">

                        <div class="form-group row">
                            <label for="first-name" class="col-5 text-right">First Name:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="first-name" name="first-name"
                                    value="{{ $patient->user()->first()->first_name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last-name" class="col-5 text-right">Last Name:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="last-name" name="last-name"
                                    value="{{ $patient->user()->first()->last_name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone-number" class="col-5 text-right">Phone Number:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="phone-number"
                                    name="phone-number" value="{{ $patient->user()->first()->phone }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alt-phone-number" class="col-5 text-right">Alternative Phone Number:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="alt-phone-number"
                                    name="alt-phone-number" value="{{ $patient->alternative_phone }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emergency-contact" class="col-5 text-right">Emergency Contact:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="emergency-contact"
                                    name="emergency-contact" value="{{ $patient->emergency_contact }}">
                            </div>
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
                                    id="dob" onchange="calculateAge()" :value="$patient->user()->first()->date_of_birth" class="form-control-sm">
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text bg-gradient-primary">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input-date>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-5 text-right">Age:</label>
                            <div class="col-7"><input type="number" class="form-control form-control-sm" id="age"
                                    name="age" readonly></div>
                        </div>
                        <div class="form-group row">
                            <label for="marital-status" class="col-5 text-right">Marital Status:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="marital-status" name="marital-status">
                                    <option value="Single"
                                        {{ $patient->user()->first()->marital_status == 'Single' ? 'selected' : '' }}>Single
                                    </option>
                                    <option value="Married"
                                        {{ $patient->user()->first()->marital_status == 'Married' ? 'selected' : '' }}>
                                        Married
                                    </option>
                                    <option value="Divorced"
                                        {{ $patient->user()->first()->marital_status == 'Divorced' ? 'selected' : '' }}>
                                        Divorced
                                    </option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-5 text-right">Status:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="status" name="status">
                                    <option value="Active"
                                        {{ $patient->user()->first()->status == 'Avtive' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="Inavtive"
                                        {{ $patient->user()->first()->status == 'Inactive' ? 'selected' : '' }}>Inactive
                                    </option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sex" class="col-5 text-right">Sex:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="sex" name="sex">
                                    <option value="Male"
                                        {{ $patient->user()->first()->sex == 'Male' ? 'selected' : '' }}>
                                        Male</option>
                                    <option value="Femail"
                                        {{ $patient->user()->first()->sex == 'Female' ? 'selected' : '' }}>
                                        Femail</option>
                                    <option value="Other"
                                        {{ $patient->user()->first()->sex == 'Other' ? 'selected' : '' }}>
                                        Other</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="occupation" class="col-5 text-right">Occupation:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="occupation"
                                    name="occupation" value="{{ $patient->occupation }}">
                            </div>
                        </div>
                    </div>
                    {{-- {{ dd($patient->blood_group) }} --}}
                    <div class="col-md-6 justify-content-start">
                        <div class="form-group row">
                            <label for="blood-group" class="col-5 text-right">Blood group:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="blood-group" name="blood-group">
                                    <option value="">Select Blood Group</option>
                                    <option value="A+" {{ $patient->blood_group === 'A+' ? 'selected' : '' }}>A+
                                    </option>
                                    <option value="A-" {{ $patient->blood_group === 'A-' ? 'selected' : '' }}>A-
                                    </option>
                                    <option value="B+" {{ $patient->blood_group === 'B+' ? 'selected' : '' }}>B+
                                    </option>
                                    <option value="B-" {{ $patient->blood_group === 'B-' ? 'selected' : '' }}>B-
                                    </option>
                                    <option value="O+" {{ $patient->blood_group === 'O+' ? 'selected' : '' }}>B-
                                    </option>
                                    <option value="O-" {{ $patient->blood_group === 'O-' ? 'selected' : '' }}>B-
                                    </option>
                                    <option value="AB+" {{ $patient->blood_group === 'AB+' ? 'selected' : '' }}>B-
                                    </option>
                                    <option value="AB-" {{ $patient->blood_group === 'AB-' ? 'selected' : '' }}>B-
                                    </option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-5 text-right">Country:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm selectpicker" id="country" name="country" data-live-search="true">
                                    {{-- <option value="country1" {{ $patient->blood_group === 'AB-' ? 'selected' : '' }}>Country 1</option>
                                    <option value="country1" {{ $patient->blood_group === 'AB-' ? 'selected' : '' }}>Country 2</option>
                                    <option value="country1" {{ $patient->blood_group === 'AB-' ? 'selected' : '' }}>Country 3</option> --}}
                                    @foreach ($countries as $country)
                                        <option value="{{ $country['name_en'] }}"
                                            {{ $patient->country === $country['name_en'] ? 'selected' : '' }}>
                                            {{ $country['name_en'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city-state" class="col-5 text-right">City/State:</label>
                            <div class="col-7">
                                <input class="form-control form-control-sm" id="city-state" name="city-state"
                                    value="{{ $patient->city_or_state }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-5 text-right">Email:</label>
                            <div class="col-7">
                                <input type="email" class="form-control form-control-sm" id="email" name="email"
                                    value="{{ $patient->user()->first()->email }}">
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div> --}}
                        <div class="form-group row">
                            <label for="insurance-number" class="col-5 text-right">Insurance Number:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="insurance-number"
                                    name="insurance-number" value="{{ $patient->insurance_number }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area" class="col-5 text-right">Area:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="area" name="area"
                                    value="{{ $patient->area }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob-number" class="col-5 text-right">DOB Number:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="dob-number"
                                    name="dob-number" value="{{ $patient->DOB_number }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bsn-number" class="col-5 text-right">BSN Number:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="bsn-number"
                                    name="bsn-number" value="{{ $patient->BSN_number }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="remarks" class="col-5 text-right">Remarks:</label>
                            <div class="col-7">
                                <input type="text" class="form-control form-control-sm" id="remarks" name="remarks"
                                    value="{{ $patient->remarks }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file-type" class="col-5 text-right">File Type:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="file-type" name="file-type">
                                    <option value="type1">File Type 1</option>
                                    <option value="type2">File Type 2</option>
                                    <option value="type3">File Type 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-5 text-right">File:</label>
                            <div class="col-7"><input type="file" class="form-control-file form-cntrol-file-sm"
                                    id="file" name="file"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="residential-address" class="col-5 text-right">Residential Address:</label>
                            <div class="col-7">
                                <textarea class="form-control" id="residential-address" rows="3" name="residential-address">{{ $patient->residential_address }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="medical-history" class="col-5 text-right">Medical History:</label>
                            <div class="col-7">
                                <textarea class="form-control" id="medical-history" rows="3" name="medical-history">{{ $patient->medical_history }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
            </form>

        </div>
    </div>

@stop

