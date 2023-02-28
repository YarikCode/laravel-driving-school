@extends('layouts.admin_base')

@section('title', 'Удаление заявки')

@section('main')
    <form class="container content_block p-3" action="{{route('app.admin.destroy', ['app' => $app->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <h2 class="text mb-4">Удаление заявки</h2>
        <p class="text mb-2">Пользователь: {{Auth::user()->name}}</p>
        <p class="text mb-4">Услуга: {{$app->usluga->name}}</p>
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
@endsection