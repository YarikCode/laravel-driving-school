@extends('layouts.admin_base')

@section('title', 'Редактирование заявки')

@section('main')
    <form class="container content_block p-3 mb-2" action="{{ route('update.app', ['app' => $app->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <h4 class="text">Редактирование статуса заявки</h4>
        <p class="text">Номер заявки: {{ $app->id }}</p>
        <p class="text">Услуга: {{ $app->usluga->name }}</p>
        <p class="text">Пользователь: {{ $app->user->name }}</p>
        <p class="text">Время обучения: {{ $app->time }}</p>
        <p class="text">Номер пользователя: {{ $app->user->number }}</p>
        <p class="text">Желаемая дата: {{ $app->date }}</p>
        <div class="row ps-3">
            <div class="col-auto form-check form-check-inline">
                <input @if ($app->status === "Новая заявка") checked @endif class="form-check-input" type="radio" name="status" value="Новая заявка">
                <label class="form-check-label" for="inlineCheckbox1"><p class="text text-primary">Новая заявка</p></label>
            </div>
            <div class="col-auto form-check form-check-inline">
                <input @if ($app->status === "Отклонена") checked @endif class="form-check-input" type="radio" name="status" value="Отклонена">
                <label class="form-check-label" for="inlineCheckbox2"><p class="text text-danger">Отклонена</p></label>
            </div>
            <div class="col-auto form-check form-check-inline">
                <input @if ($app->status === "Одобрена") checked @endif class="form-check-input" type="radio" name="status" value="Одобрена">
                <label class="form-check-label" for="inlineCheckbox3"><p class="text text-success">Одобрена</p></label>
            </div>
        </div>
        <div class="form-group mb-2">
            <label for="exampleInputPassword1">Группа обучения</label>
            <select class="form-select mb-2" aria-label="Default select example" name="group">
                <option @if ($app->group_id === "NULL") selected @endif value="NULL">Отсутствует</option>
                @foreach ($groups as $group)
                    <option @if ($app->user->group_id === $group->id) selected @endif value="{{ $group->id }}">{{ $group->name }} ({{ $group->time }})</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-success mb-2" value="Сохранить">
    </form>
@endsection