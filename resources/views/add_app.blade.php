@extends('layouts.base')

@section('title', 'Создание заявки')

@section('main')
    <form class="container content_block p-3" action="{{route('app.store', ['usl' => $usl->id])}}" method="POST">
        @csrf
        <h2 class="text mb-4">Создание заявки</h2>
        <p class="text mb-2">Пользователь: {{Auth::user()->name}}</p>
        <p class="text">Услуга: {{$usl->name}}</p>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection