@extends('adminlte::page')

@section('content')
    <div class="d-flex justify-content-between align-items-center w-100 sticky-top"
        style="min-height: 10px; background-color: #fff;">
        <div>
            <div class="d-flex flex-direction-row button-container">
                <button class="top-button go-back" id="goback">Go Back</button>
                <button class="top-button " id="showFileInput"> <i class="fas fa-fw fa-solid fa-paperclip"></i></button>
                <button class="top-button top-submit-button" id="top-submit-button">Submit</button>


            </div>
        </div>
        <div>

        </div>
    </div>




    <div class="p-5">
        {{-- <h2>Ticket Form</h2> --}}

    </div>
@stop

@section('js')

@stop
