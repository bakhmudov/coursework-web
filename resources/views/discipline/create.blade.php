@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-5">
                <form action="{{ route('discipline.store') }}" method="post">
                    @csrf

                    <div class="input-group input-group-lg mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Введите название дисциплины">
                    </div>

                    <input type="submit" class="btn btn-outline-primary" value="Добавить">
                </form>
            </div>
        </div> <!-- row justify-content -->
    </div> <!-- container -->
@endsection
