@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-4">
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Код специальности</th>
                        <th scope="col">Нзвание специальности</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($specialties as $specialty)

                        <tr>

                            <th scope="row">
                                <a href="{{ route('specialty.show', $specialty->id) }}">{{ $specialty->id }}</a>
                            </th>
                            <td>{{ $specialty->title }}</td>

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
