@extends('layouts.app')

@section('title','About-us | ' . config('app.name'))

@section('content')
<img src="{{ asset('images/Teacher-du-net-logo-mini.png') }}" alt="TDN Logo" class="my-12 rounded-full shadow-md">

<h2 class="mb-5 text-gray-700">Built with <span class="text-pink-500">&hearts;</span> by les Teachers du NET.</h2>

<p><a href="{{ route('home') }}" class="text-indigo-400 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>
@endsection