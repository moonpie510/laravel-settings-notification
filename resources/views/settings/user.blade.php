@extends('layouts.settings')

@section('content')
    <form action="{{route('settings.change', auth()->user()->id)}}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Пол</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="man" @if(auth()->user()->settings)
                            {{auth()->user()->settings['gender'] == 'man' ? 'checked' : ''}}
                            @endif>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Мужчина
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="women" @if(auth()->user()->settings)
                            {{auth()->user()->settings['gender'] == 'women' ? 'checked' : ''}}
                            @endif>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Женщина
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="helicopter" @if(auth()->user()->settings)
                            {{(auth()->user()->settings['gender'] == 'helicopter' ? 'checked' : '')}}
                            @endif>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Вертолет апачи
                        </label>
                    </div>
                </div>
                <div class="col">
                    <h4>Адрес</h4>
                    <div class="mb-3">
                        <label>Город проживания</label>
                        <input type="text" class="form-control w-50" name="city" value="{{auth()->user()->settings['city'] ?? ''}}">
                    </div>
                </div>
                <div class="col">
                    <h4>Должность</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="job" value="admin" @if(auth()->user()->settings)
                            {{auth()->user()->settings['job'] == 'admin' ? 'checked' : ''}}
                            @endif>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Администратор
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="job" value="manager" @if(auth()->user()->settings)
                            {{auth()->user()->settings['job'] == 'manager' ? 'checked' : ''}}
                            @endif>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Менеджер
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="job" value="teacher" @if(auth()->user()->settings)
                            {{auth()->user()->settings['job'] == 'teacher' ? 'checked' : ''}}
                            @endif>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Учитель
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Сохранить" class="btn btn-primary mt-4">
    </form>

@endsection
