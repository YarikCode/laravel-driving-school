@extends('layouts.base')

@section('main')
    <div class="container container-fluid">
        <div class="container container-fluid">
            @foreach ($applications as $application)
                <div class="border content_block p-3 mb-2 ">
                    <div class="d-flex justify-content-between mb-3">
                        <h2 class="text">Заказ услуги</h2>
                        <a href="{{route('app.delete', ['app' => $application->id])}}">Отменить заявку</a>
                    </div>
                    <h4 class="text mb-4">{{$application->usluga->name}}</h4>
                    <div>
                        <p class="text">Номер заявки: {{$application->id}}</p>
                        <p class="text">Услуга: {{$application->usluga->name}}</p>
                        <p class="text">Пользователь: {{$application->user->name}}</p>
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
    </div>
@endsection