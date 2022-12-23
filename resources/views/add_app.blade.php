@extends('layouts.base')

@section('title', 'Создание заявки')

@section('main')
    <form class="container content_block p-3" action="{{route('app.store', ['usl' => $usl->id])}}" method="POST">
        @csrf
        <h2 class="text mb-4">Создание заявки</h2>
        <p class="text mb-2">Пользователь: {{Auth::user()->name}}</p>
        <p class="text">Услуга: {{$usl->name}}</p>
        <div class="form-group">
            <label for="exampleInputPassword1">Время обучения</label>
            <select class="form-select mb-2" aria-label="Default select example" name="time">
                <option value="Дневное обучение">Дневное обучение</option>
                <option value="Вечернее обучение">Вечернее обучение</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="exampleInputEmail1">Желаемая дата начала обучения</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="date" required>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection