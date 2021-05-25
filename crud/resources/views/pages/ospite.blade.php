@extends('layouts.main-layout')
@section('content')
    <main>
        <ul>
            <li><h1>{{$ospite -> name}} {{$ospite -> lastname}}</h1></li>
            <li><h3> Date of Birth: {{$ospite -> date_of_birth}}</h3></li>
            <li><h3>{{$ospite -> document_type}} : {{$ospite -> document_number}}</h3></li>
        </ul>
    </main>
@endsection
