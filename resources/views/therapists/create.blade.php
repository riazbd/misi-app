@extends('adminlte::page')

@section('content')

<div class="container">
    <h1>User Management</h1>
    <div class="mt-5">

        <form method="POST" action="{{route('patients.create')}}">
            @csrf
            <div class="row">
              <div class="col-md-6">

                <div class="form-group">
                    <label for="patient-source">Therapist Type:</label>
                    <select class="form-control" id="patient-source" name="patient-source">
                      <option>Type 1</option>
                      <option>Type 2</option>
                      <option>Type 3</option>
                      <option>Type 4</option>
                      <option>Type 5</option>
                      <option>Type 6</option>
                      <option>Type 7</option>
                    </select>
                  </div>
                <div class="form-group">
                  <label for="first-name">First Name:</label>
                  <input type="text" class="form-control" id="first-name" name="first-name">
                </div>
                <div class="form-group">
                  <label for="last-name">Last Name:</label>
                  <input type="text" class="form-control" id="last-name" name="last-name">
                </div>
                <div class="form-group">
                  <label for="phone-number">Phone Number:</label>
                  <input type="text" class="form-control" id="phone-number" name="phone-number">
                </div>
                <div class="form-group">
                  <label for="alt-phone-number">Alternative Phone Number:</label>
                  <input type="text" class="form-control" id="alt-phone-number" name="alt-phone-number">
                </div>

                <div class="form-group">
                  <label for="dob">Date of Birth:</label>
                  <input type="date" class="form-control" id="dob" name="dob">
                </div>
                <div class="form-group">
                  <label for="age">Age:</label>
                  <input type="number" class="form-control" id="age" name="age">
                </div>
                <div class="form-group">
                  <label for="marital-status">Marital Status:</label>
                  <select class="form-control" id="marital-status" name="marital-status">
                    <option>Single</option>
                    <option>Married</option>
                    <option>Divorced</option>
                    <!-- Add more options as needed -->
                  </select>
                </div>
                <div class="form-group">
                    <label for="marital-status">Sex:</label>
                    <select class="form-control" id="marital-status" name="sex">
                      <option>Male</option>
                      <option>Femail</option>
                      <option>Other</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>
                <div class="form-group">
                  <label for="occupation">Occupation:</label>
                  <select class="form-control" id="occupation" name="occupation">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="blood-group">Blood group:</label>
                    <select class="form-control" id="blood-group" name="blood-group">
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="country">Country:</label>
                    <select class="form-control" id="country" name="country">
                      <option>Country 1</option>
                      <option>Country 2</option>
                      <option>Country 3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="city-state">City/State:</label>
                    <select class="form-control" id="city-state" name="city-state">
                      <option>City/State 1</option>
                      <option>City/State 2</option>
                      <option>City/State 3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="insurance-number">Insurance Number:</label>
                    <input type="text" class="form-control" id="insurance-number" name="insurance-number">
                </div>

                <div class="form-group">
                  <label for="area">Area:</label>
                  <input type="text" class="form-control" id="area" name="area">
                </div>
                <div class="form-group">
                  <label for="dob-number">DOB Number:</label>
                  <input type="text" class="form-control" id="dob-number" name="dob-number">
                </div>
                <div class="form-group">
                  <label for="bsn-number">BSN Number:</label>
                  <input type="text" class="form-control" id="bsn-number" name="dob-number">
                </div>

                <div class="form-group">
                  <label for="file-type">File Type:</label>
                  <select class="form-control" id="file-type" name="file-type">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                  </select>
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
                        <textarea class="form-control" id="residential-address" rows="3" name="residential-address"></textarea>
                      </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>

    </div>
</div>

@stop
