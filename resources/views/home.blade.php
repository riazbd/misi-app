@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Hello isn't me you looking for?</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- <form action="{{ route('searchById') }}" method="GET" target="_blank">
        <input type="text" name="id" placeholder="Enter ID">
        <button type="submit">Search</button>
    </form> --}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('adminlte_css')
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
