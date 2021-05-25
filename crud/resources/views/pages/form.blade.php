@extends('layouts.main-layout')
@section('content')
    <main>
        <form method="POST" action="{{ route('store') }}">
            @csrf
            @method('POST')

            <div>
                <label for="name">Name</label>
                <div>
                    <input id="name" type="text" name="name">
                </div>
            </div>
            <div>
                <label for="lastname">Lastname</label>
                <div>
                    <input id="lastname" type="text" name="lastname">
                </div>
            </div>

            <div>
                <label for="original_title">Date</label>
                <div>
                    <input id="title" type="date" name="date">
                </div>
            </div>
            <div>
                <label for="document_type">Type of Document</label>
                <div>
                    <input id="document_type" type="text" name="document_type">
                </div>
            </div>
            <div>
                <label for="document_number">Document Number</label>
                <div>
                    <input id="document_number" type="text" name="document_number">
                </div>
            </div>

            <button type="submit" name="button">Send</button>
        </form>

    </main>
@endsection
