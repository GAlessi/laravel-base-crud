@extends('layouts.main-layout')
@section('content')
    <main class="home">
        <div class="ospiti">
            <h1>Ospiti:</h1>

            <ul>
                @foreach ($ospiti as $ospite)
                    <li>
                        {{ $ospite -> name}}
                        [{{ $ospite -> id }}]
                    </li>
                @endforeach
            </ul>

        </div>
    </main>
@endsection
