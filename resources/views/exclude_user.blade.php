@extends('layouts.admin_base')

@section('title', 'Исключение пользователя')

@section('main')
    <form class="container content_block p-3" action="{{ route('admin.user.exclude', ['user' => $user->id]) }}" method="POST">
        @csrf
        <h2 class="text mb-4">Исключение пользователя</h2>
        <p class="text mb-2">Пользователь: {{$user->name}}</p>
        <p class="text mb-2">Группа: {{$user->group->name}}</p>
        <button type="submit" class="btn btn-primary">Исключить</button>
    </form>
@endsection