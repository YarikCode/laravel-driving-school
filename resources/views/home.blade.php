@extends('layouts.base')

@section('main')
    <div class="container">
        <h1 class="montserrat_light">Мой профиль</h1>
        <div class="content_block p-3 mb-3">
            <div class="row justify-content-start">
                <div class="col-auto">
                    <img class="img-fluid" src="/img/default.jpg" width="200" height="200">
                </div>
                <div class="col-auto d-flex flex-column justify-content-center">
                    <h3 class="text mb-3">Мои данные</h3>
                    <p class="text">ФИО: {{ Auth::user()->name }}</p>
                    <p class="text">Электронная почта: {{ Auth::user()->email }}</p>
                    <p class="text">Номер телефона: {{ Auth::user()->number }}</p>
                    <p class="text">Статус: {{ Auth::user()->status }}</p>
                </div>
            </div>
        </div>

        <h1 class="montserrat_light">Мои заявки</h1>
        @foreach ($applications as $application)
            <div class="content_block p-3 mb-2 ">
                <div class="d-flex justify-content-between mb-3">
                    <h2 class="text">Заказ услуги</h2>
                    <a href="{{route('app.delete', ['app' => $application->id])}}"><button class="white_custom_button">Удалить заявку</button></a>
                </div>
                <h4 class="text mb-4">{{$application->usluga->name}}</h4>
                <div>
                    <p class="text">Номер заявки: {{$application->id}}</p>
                    <p class="text">Услуга: {{$application->usluga->name}}</p>
                    <p class="text">Пользователь: {{$application->user->name}}</p>
                    <p class="text">Время обучения: {{$application->time}}</p>
                    <p class="text">Желаемая дата: {{$application->date}}</p>
                    <div class="d-flex">
                        <p class="text pe-1">Статус заявки:</p>
                        @if($application->status === 'Новая заявка')
                            <p class="text text-primary">Новая заявка</p>
                        @elseif($application->status === 'Одобрена')
                            <p class="text text-success">Одобрена</p>
                        @elseif($application->status === 'Отклонена')
                            <p class="text text-danger">Отклонена</p>
                        @else <p class="text">$application->status</p>
                        @endif
                    </div>
                    <div class="d-flex">
                        <p class="text pe-1">Стоимость:</p>
                        <p class="title">{{$application->usluga->price}} ₽</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection