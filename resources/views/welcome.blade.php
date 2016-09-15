@extends('layout')

@section('content')
        
        @if(empty($people))
            There are no people.
        @else
            There are people.
        @endif

        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach

@stop
