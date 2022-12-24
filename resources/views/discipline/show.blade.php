@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Название дисциплины</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $discipline->id }}</th>
                    <td>{{ $discipline->title }}</td>
                </tr>
                </tbody>
            </table>

            <div>
                <a href="{{ route('discipline.edit', $discipline->id) }}" class="btn btn-outline-success mb-1">Редактировать</a>
            </div>

            <form action="{{ route('discipline.delete', $discipline->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-outline-danger mb-5">
            </form>

            <div>
                <a href="{{ route('discipline.index') }}" class="btn btn-outline-warning">Вернуться</a>
            </div>
        </div> <!-- row justify-content -->
    </div> <!-- container -->
@endsection
