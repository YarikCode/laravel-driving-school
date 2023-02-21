@extends('layouts.admin_base')

@section('title', 'Заявки')
    
@section('main')
    <div class="container content_block p-3 mb-2">
        <h2 class="montserrat_light">Заявки</h2>
    </div>


    <div class="container content_block p-3 mb-2">
        <form id="admin_app_form" method="GET" action="{{ route('application.update') }}">
            <div class="form-check mb-2">
                <!-- <input class="form-check-input" id="onlyNewCheckbox" type="checkbox" name="onlyNew"> -->
                @if (isset($onlynew))
                    <input class="form-check-input" id="onlyNewCheckbox" type="checkbox" name="onlyNew" checked>
                @else
                    <input class="form-check-input" id="onlyNewCheckbox" type="checkbox" name="onlyNew">
                @endif
                <label class="form-check-label" for="flexCheckDefault" id="only_new_checkbox">
                Только новые заявки
                </label>
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputEmail1">Номер заявки</label>
                @if (isset($id))
                    <input type="number" class="form-control" id="application_search_number" aria-describedby="numberHelp" placeholder="Введите номер заявки" name="appID" value="{{ $id }}">
                @else
                    <input type="number" class="form-control" id="application_search_number" aria-describedby="numberHelp" placeholder="Введите номер заявки" name="appID">
                @endif
                <small id="numberHelp" class="form-text text-muted">Используйте это поле для поиска заявки по ее номеру</small>
            </div>
            <button type="submit" class="btn btn-success">Обновить</button>
        </form>
    </div>
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
    <!-- <script src="/js/ajaxAdminApp.js"></script> -->
@endsection