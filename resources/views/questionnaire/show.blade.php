@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Отчество</th>
                    <th scope="col">Дата рождения</th>
                    <th scope="col">СУЗ</th>
                    <th scope="col">Дата окончания СУЗ</th>
                    <th scope="col">Награды за учебу</th>
                    <th scope="col">Адрес</th>
                    <th scope="col">Номер телефона</th>
                    <th scope="col">Код специальности</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $questionnaire->id }}</th>
                    <td>{{ $questionnaire->name }}</td>
                    <td>{{ $questionnaire->surname }}</td>
                    <td>{{ $questionnaire->patronymic }}</td>
                    <td>{{ $questionnaire->birthday }}</td>
                    <td>{{ $questionnaire->secondary_school }}</td>
                    <td>{{ $questionnaire->secschool_enddate }}</td>
                    <td>{{ $questionnaire->honors }}</td>
                    <td>{{ $questionnaire->address }}</td>
                    <td>{{ $questionnaire->phone_number }}</td>
                    <td>{{ $questionnaire->specialty_id }}</td>
                </tr>
                </tbody>
            </table>

            <div>
                <a href="{{ route('questionnaire.edit', $questionnaire->id) }}" class="btn btn-outline-success mb-1">Редактировать</a>
            </div>

            <form action="{{ route('questionnaire.delete', $questionnaire->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-outline-danger mb-5">
            </form>

            <div>
                <a href="{{ route('questionnaire.index') }}" class="btn btn-outline-warning">Вернуться</a>
            </div>
        </div> <!-- row justify-content -->
    </div> <!-- container -->
@endsection
