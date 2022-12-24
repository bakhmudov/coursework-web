@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-5">
                <form action="{{ route('questionnaire.update', $questionnaire->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Введите имя" name="name"
                               value="{{ $questionnaire->name }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Введите фамилию" name="surname"
                               value="{{ $questionnaire->surname }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Введите отчество" name="patronymic"
                               value="{{ $questionnaire->patronymic }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" name="birthday" value="{{ $questionnaire->birthday }}">
                        <span class="input-group-text" id="inputGroup-sizing-default">Укажите дату рождения</span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Оконченное среднее учебное заведение"
                               name="secondary_school" value="{{ $questionnaire->secondary_school }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" name="secschool_enddate"
                               value="{{ $questionnaire->secschool_enddate }}">
                        <span class="input-group-text" id="inputGroup-sizing-default">Укажите дату окончания</span>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="honors" id="gold" value="Золотая медаль">
                        <label class="form-check-label" for="gold">
                            Золотая медаль
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="honors" id="silver"
                               value="Серебряная медаль">
                        <label class="form-check-label" for="silver">
                            Серебряная медаль
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="honors" id="red-diploma"
                               value="Красный диплом">
                        <label class="form-check-label" for="red-diploma">
                            Красный диплом
                        </label>
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Адрес" name="address"
                               value="{{ $questionnaire->address }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Номер телефона" name="phone_number"
                               value="{{ $questionnaire->phone_number }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Код специальности" name="specialty_code"
                               value="{{ $questionnaire->specialty_id }}">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Сохранить изменения">
                </form>
            </div>
        </div> <!-- row justify-content -->
    </div> <!-- container -->
@endsection
