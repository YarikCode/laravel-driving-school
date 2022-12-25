@extends('layouts.admin_base')

@section('title', 'Удаление теоретического занятия')

@section('main')
    <form class="container content_block p-3" action="{{route('admin.theoretical.destroy', ['lesson' => $lesson->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <h2 class="text mb-4">Удаление теоретического занятия</h2>
        <p class="text">Номер занятия: {{$lesson->id}}</p>
        <p class="text">Название: {{$lesson->name}}</p>
        <p class="text">Описание: {{$lesson->description}}</p>
        <p class="text">Дата: {{$lesson->date}}</p>
        <p class="text">Время: {{$lesson->time}}</p>
        <p class="text mb-2">Преподаватель: {{$lesson->teacher->name}}</p>
        <button type="submit" class="btn btn-primary">Удалить</button>
    </form>
@endsection