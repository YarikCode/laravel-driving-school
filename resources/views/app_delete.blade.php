@extends('layouts.base')

@section('title', 'Удаление заявки')

@section('main')
    <form class="container content_block p-3" action="{{route('app.destroy', ['app' => $app->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <h2 class="text mb-4">Удаление заявки</h2>
        <p class="text mb-2">Пользователь: {{Auth::user()->name}}</p>
        <p class="text">Услуга: {{$app->usluga->name}}</p>
        <button type="submit" class="btn btn-primary">Удалить</button>
    </form>
@endsection