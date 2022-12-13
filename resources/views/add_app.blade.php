@extends('layouts.base')

@section('title', 'Создание заявки')

@section('main')
    <form class="container border border-1 p-3 rounded" action="{{route('app.store', ['usl' => $usl->id])}}" method="POST">
        @csrf
        <h2 class="text mb-4">Создание заявки</h2>
        <p class="text mb-2">Пользователь: {{Auth::user()->name}}</p>
        <p class="text">Услуга: {{$usl->name}}</p>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection