@extends('layouts.base')

@section('main')
    <div class="container">
        <h1 class="montserrat_light">Обучение</h1>
        <h2 class="montserrat_light">Занятия по вождению</h2>
        @foreach ($drivingLessons as $drivingLesson)
            <div class="content_block p-3 mb-2">
                <h3 class="text">{{ $drivingLesson->name }}</h3>
                <p class="text">Ученик: {{ $drivingLesson->student->name }}</p>
                <p class="text">Инструктор: {{ $drivingLesson->instructor->name }}</p>
                <p class="text">Дата: {{ $drivingLesson->date }}</p>
                <p class="text">Время: {{ $drivingLesson->time }}</p>
            </div>
        @endforeach
        <h2 class="montserrat_light mt-3">Теоретические занятия</h2>
        @foreach ($theoreticalLessons as $theoreticalLesson)
            <div class="content_block p-3 mb-2">
                <h3 class="text">Тема: {{ $theoreticalLesson->name }}</h3>
                <p class="text">Описание: {{ $theoreticalLesson->description }}</p>
                <p class="text">Группа: {{ $theoreticalLesson->group->name }}</p>
                <p class="text">Преподаватель: {{ $theoreticalLesson->teacher->name }}</p>
                <p class="text">Дата: {{ $theoreticalLesson->date}}</p>
                <p class="text">Время: {{ $theoreticalLesson->time }}</p>
            </div>
        @endforeach
    </div>
@endsection