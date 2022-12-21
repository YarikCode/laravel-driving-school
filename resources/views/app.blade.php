@extends('layouts.admin_base')

@section('title', 'Заявки')
    
@section('main')
    @foreach ($applications as $application)
        <div class="container content_block p-3 mb-2">
            <div class="d-flex justify-content-between mb-3">
                <h2 class="text">Заявка на обучение</h2>
                <div class="d-flex flex-column">
                    <a class="action_text" href="{{ route('app.admin.delete', ['app' => $application->id]) }}">Удалить заявку</a>
                    <a class="action_text" href="{{ route('status.app', ['app' => $application->id]) }}">Редактировать статуc</a>
                </div>
            </div>
            <h4 class="text mb-4">Заявка на обучение №{{$application->id}}</h4>
            <div>
                <p class="text">Номер услуги: {{$application->id}}</p>
                <p class="text">Пользователь: {{$application->user->name}}</p>
                <p class="text">Наименование услуги: {{$application->usluga->name}}</p>
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
                <p class="text">Стоимость: {{$application->usluga->price}}</p>
            </div>
        </div>
    @endforeach
@endsection