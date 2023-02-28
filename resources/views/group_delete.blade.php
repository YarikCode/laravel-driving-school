@extends('layouts.admin_base')

@section('title', 'Удаление группы')

@section('main')
    <form class="container content_block p-3" action="{{route('admin.groups.destroy', ['group' => $group->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <h2 class="text mb-4">Удаление группы</h2>
        <p class="text mb-2">Номер группы: {{$group->id}}</p>
        <p class="text mb-2">Название: {{$group->name}}</p>
        <p class="text">Время обучения: {{$group->time}}</p>
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
@endsection