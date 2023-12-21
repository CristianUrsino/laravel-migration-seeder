@extends('layouts/app')
@section('title','trains')

@section('content')
    <h2>TRENI IN PARTENZA OGGI:</h2>
    <ul>
        @foreach ($trains as $train)
            <li>{{$train->codice_treno}}</li>
        @endforeach
    </ul>
@endsection