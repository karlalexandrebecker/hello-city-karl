@extends('layouts.app', ['title' => 'Help'])

@section('content')
            <h2 class="mb-5 text-gray-700">Help.</h2>

            <p><a href="{{ route('home') }}" class="text-indigo-400 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>
@endsection