@extends('base')

@section('title',' About Us | '. config('app.name'))
   
@section('content')
    
    <h1>Build with &hearts; Pl@cid</h1>

    <img src="{{asset('images/001.jpg')}}" alt="Tom">

        
    <p><a href="{{route('home')}}">Revenir à la page d'accueil</a> </p>

@endsection
