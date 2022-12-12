@extends('layouts.base')

@section('main')
    <div class="container container-fluid">
        <h2 class="title">Ваши заявки:</h2>
        <br>
        @foreach ($applications as $application)
            @if ($application->id == Auth::user()->id)
                <div class="row">
                    <h2 class="Заявка на обучение"></h1>
                    <p class="text">Номер заявки: {{$application->id}}</h3>
                    <p class="text">Наименование услуги: {{$application->usluga->name}}</p>
                    <p class="text">Пользователь: {{$application->user->name}}</p>
                    <p class="text">Статус заявки: {{$application->status}}</p>
                    <br>
                </div>
            @endif
        @endforeach
    </div>
@endsection
