@extends('layouts.app')

@section('content')
    <h1>This questionnaire page</h1>

    @foreach($questionnaires as $q)
        <div>{{ $q->name }}</div>
    @endforeach
@endsection
