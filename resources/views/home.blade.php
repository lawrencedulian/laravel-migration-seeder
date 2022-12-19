@extends('layouts.app')

@section('content')
    <section>
        @foreach ($trains as $train)
            <ul>
                <li>{{ $train->azienda }}</li>
            </ul>
        @endforeach
    </section>
@endsection
