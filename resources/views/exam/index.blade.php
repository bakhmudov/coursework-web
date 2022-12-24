@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-8">
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
                                <a href="{{ route('entre_exam.show', $exam->id) }}">{{ $exam->id }}</a>
                            </th>
                            <td>{{ $exam->questionnaire_id }}</td>
                            <td>{{ $exam->discipline_id }}</td>
                            <td>{{ $exam->mark }}</td>

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
