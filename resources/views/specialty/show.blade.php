@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название специальности</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $specialty->id }}</th>
                    <td>{{ $specialty->title }}</td>
                </tr>
                </tbody>
            </table>

            <div>
                <a href="{{ route('specialty.edit', $specialty->id) }}" class="btn btn-outline-success mb-1">Редактировать</a>
            </div>

            <form action="{{ route('specialty.delete', $specialty->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-outline-danger mb-5">
            </form>

            <div>
                <a href="{{ route('specialty.index') }}" class="btn btn-outline-warning">Вернуться</a>
            </div>
        </div> <!-- row justify-content -->
    </div> <!-- container -->
@endsection
