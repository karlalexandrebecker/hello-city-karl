@extends('app')

@section('content')
<img src="{{ asset('images/Quebec-flag.png') }}" alt="Quebec flag" height="150">

<h1>Hello from Quebec!</h1>

<p>Its currently {{ date('h:i A') }}.</p>
@endsection