@extends('layouts.admin_base')

@section('title', 'Редактирование заявки')

@section('main')
    <form class="border border-1 p-3 rounded" action="{{ route('update.app', ['app' => $app->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <h4 class="text">Редактирование статуса заявки</h4>
        <p class="text">Номер заявки: {{ $app->id }}</p>
        <div class="d-flex">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" value="Новая заявка">
                <label class="form-check-label" for="inlineCheckbox1"><p class="text text-primary">Новая заявка</p></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" value="Отклонена">
                <label class="form-check-label" for="inlineCheckbox2"><p class="text text-danger">Отклонена</p></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" value="Одобрена">
                <label class="form-check-label" for="inlineCheckbox3"><p class="text text-success">Одобрена</p></label>
            </div>
        </div>
        <input type="submit" class="btn btn-success" value="Сохранить">
    </form>
@endsection