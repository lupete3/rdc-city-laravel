@extends('layouts/base' , ['pageTitle' => 'About Us '])
   
@section('content')

    <img src="{{asset('images/001.jpg')}}" alt="Tom" class="rounded-full shadow-md my-12">
    
    <h2 class="text-gray-600 text-2xl mb-5">Build with <span class="text-pink-500">&hearts;</span> by Pl@cid</h2>

        
    <p><a href="{{route('home')}}" class="text-indigo-400 hover:text-indigo-600 underline">Revenir à la page d'accueil</a> </p>

@endsection
