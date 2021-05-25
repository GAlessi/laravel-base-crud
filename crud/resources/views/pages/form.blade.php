@extends('layouts.main-layout')
@section('content')
    <main>
        <form method="POST" action="{{ route('ospiti.store') }}">
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
                <label for="date_of_birth">Date</label>
                <div>
                    <input id="date_of_birth" type="date" name="date_of_birth">
                </div>
            </div>
            <div>
                <label for="document_type">Type of Document</label>
                <select  name="document_type">
                    <option selected value="CI">CI</option>
                    <option value="DriverLicense">Driver License</option>
                </select>
                {{-- <div>
                    <input id="document_type" type="text" name="document_type">
                </div> --}}
            </div>
            <div>
                <label for="document_number">Document Number</label>
                <div>
                    <input id="document_number" type="text" name="document_number">
                </div>
            </div>

            <button type="submit" name="button">Send</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </main>
@endsection
