@extends('layouts.main-layout')
@section('content')
    <main class="home">
        <div class="ospiti">
            <h1>Ospiti:</h1>

            <ul>
                @foreach ($ospiti as $ospite)
                    <li><a href="{{ route('ospiti.ospite', $ospite -> id) }}">
                        {{ $ospite -> name}}
                        {{ $ospite -> lastname}}
                        [{{ $ospite -> id }}]
                    </a></li>
                @endforeach
            </ul>

        </div>
    </main>
@endsection
