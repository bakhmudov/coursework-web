@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-dark table-striped">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Нзвание экзамена</th>
                    <th scope="col">Номер анкеты</th>
                    <th scope="col">Нзвание дисциплины</th>
                    <th scope="col">Оценка</th>
                </tr>
                </thead>
                <tbody>
                @foreach($exams as $exam)

                    <tr>

                        <th scope="row">
                            <a href="{{ route('$specialty.show', $exam->id) }}">{{ $exam->id }}</a>
                        </th>
                        <td>{{ $exam->questionnaire_id }}</td>
                        <td>{{ $exam->discipline_id }}</td>
                        <td>{{ $exam->mark }}</td>

                    </tr>

                @endforeach
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
