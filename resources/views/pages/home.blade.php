@extends('layouts.app')

@section('content')
            
            <img src="{{ asset('images/Quebec-flag-mini.png') }}" alt="Quebec flag" class="mt-12 rounded shadow-md h-32" />
            <h1 class="mt-5 text-3xl sm:text-5xl front-semi-bold text-indigo-600">Hello from Quebec!</h1>
            <p>Its currently {{ date('h:i A') }}.</p>
@endsection