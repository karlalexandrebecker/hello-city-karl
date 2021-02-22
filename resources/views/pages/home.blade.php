@extends('app')

@section('content')
<h1>Hello from Quebec!</h1>

<p>Its currently {{ date('h:i A') }}.</p>
@endsection

@section('link-about')
<a href="/about">About us</a>
@endsection