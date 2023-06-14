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

            <form method="POST" action="{{ route('patients.store') }}" id="create-patient-form" class="">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-md-6 justify-content-end">
                       <div class="form-group row">
                            <label for="select-patient" class="col-5 text-right">Select Patient:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="select-patient" name="select-patient">
                                    <option value="Patient 1">Patient 1</option>
                                    <option value="Patient 2">Patient 2</option>
                                    <option value="Patient 3">Patient 3</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="select-therapist" class="col-5 text-right">Select Therapist:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="select-therapist" name="select-therapist">
                                    <option value="Therapist 1">Therapist 1</option>
                                    <option value="Therapist 2">Therapist 2</option>
                                    <option value="Therapist 3">Therapist 3</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="appointment-date" class="col-5 text-right">Appointment Date:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="appointment-date" name="appointment-date">
                                    <option value="Date 1">Date 1</option>
                                    <option value="Date 2">Date 2</option>
                                    <option value="Date 3">Date 3</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="appointment-time" class="col-5 text-right">Appointment Time:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="appointment-time" name="appointment-time">
                                    <option value="Time 1">Time 1</option>
                                    <option value="Time 2">Time 2</option>
                                    <option value="Time 3">Time 3</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="appointment-fee" class="col-5 text-right">Appointment Fee:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="appointment-fee" name="appointment-fee"></div>
                        </div>
                        <div class="form-group row">
                            <label for="language" class="col-5 text-right">Language:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="language" name="language">
                                    <option value="language1">Language 1</option>
                                    <option value="language2">Language 2</option>
                                    <option value="language3">Language 3</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>




                    </div>
                    <div class="col-md-6 justify-content-start">


                        <div class="form-group row">
                            <label for="remarks" class="col-5 text-right">Remarks:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="remarks" name="remarks"></div>
                        </div>

                        <div class="form-group row">
                            <label for="select-status" class="col-5 text-right">Select Status:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="select-status" name="select-status">
                                    <option value="Status1">Status 1</option>
                                    <option value="Status2">Status 2 </option>
                                    <option value="Status3">Status 3</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="appointment-type" class="col-5 text-right">Appointment Type:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="appointment-type" name="appointment-type">
                                    <option value="Type1">Type 1</option>
                                    <option value="Type2">Type 2</option>
                                    <option value="Type3">Type 3</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="payment-method" class="col-5 text-right">Payment Method:</label>
                            <div class="col-7">
                                <select class="form-control form-control-sm" id="payment-method" name="payment-method">
                                    <option value="Method1">Method 1</option>
                                    <option value="Method2">Method 2</option>
                                    <option value="Method3">Method 3</option>

                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="therapist-comment" class="col-5 text-right">Therapist Comment:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="therapist-comment" name="therapist-comment"></div>
                        </div>

                        <div class="form-group row">
                            <label for="appointment-history" class="col-5 text-right">Appointment History:</label>
                            <div class="col-7"><input type="text" class="form-control form-control-sm"
                                    id="appointment-history" name="appointment-history"></div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@stop
