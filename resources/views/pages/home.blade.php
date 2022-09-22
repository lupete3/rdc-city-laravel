@extends('base')
    
@section('content')

    <img src="{{asset('images/002.jpg')}}" alt="ISC" class="rounded shadow-md mt-12 ">
 
    <h1 class="text-3xl sm:text-5xl font-semibold text-indigo-600 mt-2">Hello From DRC</h1>

    <p class="text-gray-800">It's currently {{ date('h:i A') }} </p>
       
@stop
