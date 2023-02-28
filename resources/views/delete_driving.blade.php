@extends('layouts.admin_base')

@section('title', 'Удаление практического занятия')

@section('main')
    <form class="container content_block p-3" action="{{route('admin.driving.destroy', ['lesson' => $lesson->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <h2 class="text mb-4">Удаление занятия</h2>
        <p class="text mb-2">Номер занятия: {{$lesson->id}}</p>
        <p class="text mb-2">Ученик: {{$lesson->student->name}}</p>
        <p class="text mb-2">Инструктор: {{$lesson->instructor->name}}</p>
        <p class="text mb-2">Дни недели: {{$lesson->date}}</p>
        <p class="text mb-2">Время: {{$lesson->time}}</p>
        <p class="text mb-4">Автомобиль: {{$lesson->car->name}}</p>
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
@endsection