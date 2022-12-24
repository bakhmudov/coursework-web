@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-5">
                <form action="{{ route('entry_exam.update', $exams->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <select class="form-select mb-3" name="questionnaire_id">
                        @foreach($questionnaires as $q)
                            <option value="{{ $q->id }}">{{ $q->surname }} {{ $q->name }} {{ $q->patronymic }}</option>
                        @endforeach
                    </select>

                    <select class="form-select mb-3" name="discipline_id">
                        @foreach($disciplines as $discipline)
                            <option value="{{ $discipline->id }}">{{ $disciplines->title }}</option>
                        @endforeach
                    </select>

                    <div class="input-group input-group-lg mb-3">
                        <input type="text" class="form-control" name="mark" placeholder="Введите название экзамена">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Сохранить изменения">
                </form>
            </div>
        </div> <!-- row justify-content -->
    </div> <!-- container -->
@endsection
