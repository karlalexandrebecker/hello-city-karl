@extends('app')

@section('title','About-us | ' . config('app.name'))

@section('content')
<img src="{{ asset('images/Teacher-du-net-logo.png') }}" alt="TDN Logo" height="150">

<p>Built with &hearts; by les Teachers du NET.</p>

<p><a href="/">Revenir à la page d'accueil</a></p>
@endsection