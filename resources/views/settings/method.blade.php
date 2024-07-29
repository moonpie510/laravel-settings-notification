@extends('layouts.settings')

@section('content')
    <form action="{{route('settings.method.change', auth()->user()->id)}}" method="post">
        @csrf
        <h3>Выберите способ подтверждения по умолчанию</h3>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="method" value="email">
            <label class="form-check-label" for="flexRadioDefault1">
                Email
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="method" value="sms">
            <label class="form-check-label" for="flexRadioDefault2">
                SMS
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="method" value="telegram">
            <label class="form-check-label" for="flexRadioDefault2">
                Telegram
            </label>
        </div>

        <input type="submit" value="Выбрать" class="btn btn-primary mt-4">
    </form>
@endsection
