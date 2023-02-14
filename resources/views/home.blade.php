@extends('layouts.base')

@section('main')
    <div class="container">
        <h1 class="montserrat_light">Мой профиль</h1>
        <div class="content_block p-3 mb-3">
            <div class="row justify-content-start">
                <div class="col-auto">
                    <img class="img-fluid" src="/img/user_icon.png" width="200" height="200">
                </div>
                <div class="col-auto d-flex flex-column justify-content-center">
                    <h3 class="montserrat_bold mb-3">Мои данные</h3>
                    <p class="montserrat_light">ФИО: {{ Auth::user()->name }}</p>
                    <p class="montserrat_light">Электронная почта: {{ Auth::user()->email }}</p>
                    <p class="montserrat_light">Номер телефона: {{ Auth::user()->number }}</p>
                    <p class="montserrat_light">Статус: {{ Auth::user()->status }}</p>
                </div>
            </div>
        </div>

        <h1 class="montserrat_light">Мои заявки</h1>
        @foreach ($applications as $application)
            <div class="content_block p-3 mb-2 ">
                <div class="d-flex justify-content-between mb-3">
                    <h2 class="montserrat_bold">Заказ услуги</h2>
                    <a href="{{route('app.delete', ['app' => $application->id])}}"><button class="custom_button">Удалить</button></a>
                </div>
                <h4 class="montserrat_light mb-4">{{$application->usluga->name}}</h4>
                <div>
                    <p class="montserrat_light">Номер заявки: {{$application->id}}</p>
                    <p class="montserrat_light">Услуга: {{$application->usluga->name}}</p>
                    <p class="montserrat_light">Пользователь: {{$application->user->name}}</p>
                    <p class="montserrat_light">Время обучения: {{$application->time}}</p>
                    <p class="montserrat_light">Желаемая дата: {{$application->date}}</p>
                    <div class="d-flex">
                        <p class="montserrat_light pe-1">Статус заявки:</p>
                        @if($application->status === 'Новая заявка')
                            <p class="montserrat_light text-primary">Новая заявка</p>
                        @elseif($application->status === 'Одобрена')
                            <p class="montserrat_light text-success">Одобрена</p>
                        @elseif($application->status === 'Отклонена')
                            <p class="montserrat_light text-danger">Отклонена</p>
                        @else <p class="text">$application->status</p>
                        @endif
                    </div>
                    <div class="d-flex">
                        <p class="montserrat_light pe-1">Стоимость:</p>
                        <p class="title">{{$application->usluga->price}} ₽</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection