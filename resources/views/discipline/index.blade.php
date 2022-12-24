@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-4">
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Название дисциплины</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($disciplines as $discipline)

                        <tr>

                            <th scope="row">
                                <a href="{{ route('discipline.show', $discipline->id) }}">{{ $discipline->id }}</a>
                            </th>
                            <td>{{ $discipline->title }}</td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                <a href="{{ '/' }}" class="btn btn-outline-warning">Вернуться</a>
            </div>
        </div> <!-- row justify-content -->
    </div> <!-- container -->
@endsection
