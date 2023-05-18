@extends('adminlte::page')

@section('content')
<div class="container">
    <h2>Ticket Form</h2>
    <form>
      <div class="row">
        <!-- First Column -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="select-department">Select Department:</label>
                <select class="form-control" id="select-department" name="select-department">
                  <option>Department 1</option>
                  <option>Department 2</option>
                  <option>Department 3</option>
                </select>
              </div>
          <div class="form-group">
            <label for="mono-multi-zd">Mono/Multi ZD:</label>
            <input type="text" class="form-control" id="mono-multi-zd">
          </div>
          <div class="form-group">
            <label for="mono-multi-screening">Mono/Multi Screening:</label>
            <input type="text" class="form-control" id="mono-multi-screening">
          </div>
          <div class="form-group">
            <label for="intakes-therapist">Intakes/Therapist:</label>
            <input type="text" class="form-control" id="intakes-therapist">
          </div>
          <div class="form-group">
            <label for="tresonit-number">Tresonit Number:</label>
            <input type="text" class="form-control" id="tresonit-number">
          </div>
          <div class="form-group">
            <label for="datum-intake">Datum Intake:</label>
            <input type="text" class="form-control" id="datum-intake">
          </div>
          <div class="form-group">
            <label for="datuem-intake-2">Datuem Intake 2:</label>
            <input type="text" class="form-control" id="datuem-intake-2">
          </div>
          <div class="form-group">
            <label for="nd-account">ND Account:</label>
            <input type="text" class="form-control" id="nd-account">
          </div>
          <div class="form-group">
            <label for="avc-alfmvm-sbg">AvC/AlfmVm/SBG:</label>
            <input type="text" class="form-control" id="avc-alfmvm-sbg">
          </div>
          <div class="form-group">
            <label for="berha-intake">Berha Intake:</label>
            <input type="text" class="form-control" id="berha-intake">
          </div>
          <div class="form-group">
            <label for="strike-history">Strike History:</label>
            <textarea class="form-control" id="strike-history" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="ticket-history">Ticket History:</label>
            <textarea class="form-control" id="ticket-history" rows="3"></textarea>
          </div>
        </div>
        <!-- Second Column -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="select-department">Select Patient:</label>
                <select class="form-control" id="select-patient">
                  <option>Patient 1</option>
                  <option>Patient 2</option>
                  <option>Patient 3</option>
                </select>
              </div>
          <div class="form-group">
            <label for="rom-start">ROM Start:</label>
            <input type="date" class="form-control" id="rom-start">
          </div>
          <div class="form-group">
            <label for="rom-end">ROM End:</label>
            <input type="date" class="form-control" id="rom-end">
          </div>
          <div class="form-group">
            <label for="berha-eind">Berha Eind:</label>
            <input type="date" class="form-control" id="berha-eind">
          </div>
          <div class="form-group">
            <label for="vtcb-date">VTCB Date:</label>
            <input type="date" class="form-control" id="vtcb-date">
          </div>
          <div class="form-group">
            <label for="closure">Closure:</label>
            <input type="date" class="form-control" id="closure">
          </div>
          <div class="form-group">
            <label for="aanm-intake">Aanm-intake 1 (dagentussen):</label>
            <input type="date" class="form-control" id="aanm-intake">
          </div>
          <div class="form-group">
            <label for="location">Location:</label>
            <select class="form-control" id="location">
              <option>Location 1</option>
              <option>Location 2</option>
              <option>Location 3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="call-strike">Call Strike:</label>
            <select class="form-control" id="call-strike">
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="remarks">Remarks:</label>
            <input type="text" class="form-control" id="remarks">
          </div>
          <div class="form-group">
            <label for="comments">Comments:</label>
            <input type="text" class="form-control" id="comments">
          </div>
          <div class="form-group">
            <label for="language-treatment">Language Treatment:</label>
            <select class="form-control" id="language-treatment">
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
@stop
