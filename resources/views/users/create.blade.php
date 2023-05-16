@extends('adminlte::page')

@section('content')
    <div class="container mt-5">
        <h1>Create New User</h1>


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-4 col-sm-12 col-md-4">
                        <div class="form-group">
                            <strong>Role:</strong>
                            {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'multiple']) !!}
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-12 col-md-4 text-center align-self-center">
                        <div class="d-flex flex-direction-row">
                            <a class="btn btn-info mr-2" href="{{ route('users.index') }}"> Back</a>
                            <button type="submit" class="btn btn-primary ml-2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection
