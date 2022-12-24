@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-5">
                <form action="{{ route('discipline.update', $discipline->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="input-group input-group-lg mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Введите название дисциплины"
                               value="{{ $discipline->title }}">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Сохранить изменения">
                </form>
            </div>
        </div> <!-- row justify-content -->
    </div> <!-- container -->
@endsection
