@extends('layouts.admin_base')

@section('title', 'Заявки')
    
@section('main')
    <div class="container content_block p-3 mb-2">
        <h2 class="montserrat_light">Заявки</h2>
    </div>

    <!-- 

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
                <p class="text">Номер заявки: {{$application->id}}</p>
                <p class="text">Пользователь: {{$application->user->name}}</p>
                <p class="text">Наименование услуги: {{$application->usluga->name}}</p>
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
                <p class="text">Стоимость: {{$application->usluga->price}}</p>
            </div>
        </div>
    @endforeach

    -->

    <div class="container content_block p-3 mb-3 table-responsive">
        <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Пользователь</th>
                <th scope="col">Наименование услуги</th>
                <th scope="col">Время обучения</th>
                <th scope="col">Желаемая дата</th>
                <th scope="col">Статус заявки</th>
                <th scope="col">Действия</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($applications as $application)
                <tr>
                    <th scope="row">{{ $application->id }}</th>
                    <td>{{ $application->user->name }}</td>
                    <td>{{ $application->usluga->name }}</td>
                    <td>{{ $application->time }}</td>
                    <td>{{ $application->date }}</td>
                    <td>
                        @if($application->status === 'Новая заявка')
                            <p class="text text-primary">Новая заявка</p>
                        @elseif($application->status === 'Одобрена')
                            <p class="text text-success">Одобрена</p>
                        @elseif($application->status === 'Отклонена')
                            <p class="text text-danger">Отклонена</p>
                        @else <p class="text">$application->status</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('app.admin.delete', ['app' => $application->id]) }}">Удалить заявку</a><br>
                        <a href="{{ route('status.app', ['app' => $application->id]) }}">Редактировать статуc</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>

@endsection