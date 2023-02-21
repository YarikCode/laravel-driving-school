@extends('layouts.base')

@section('main')
    <div class="container pb-5">
        <h1 class="montserrat_light">Обучение</h1>
        <div class="content_block p-3 mb-2">
            <p class="text mb-0">Добро пожаловать, кандидат в водители. Это раздел обучение. В данном разделе вы можете ознакомиться со списком теоретических и практических занятий для вас. В нашей школе вождения каждый урок теории – это не долгая и нудная лекция, а увлекательный рассказ с пояснениями, которые помогают каждому лучше усвоить программу курса. А практику вождения преподают инструкторы, которые научат Вас безупречно водить и ориентироваться в любых дорожных ситуациях.</p>
        </div>

        @if(count($drivingLessons) != 0)
            <h2 class="montserrat_light">Занятия по вождению</h2>
            @foreach ($drivingLessons as $drivingLesson)
                <div class="content_block p-3 mb-2">
                    <h3 class="text">{{ $drivingLesson->name }}</h3>
                    <p class="text">Ученик: {{ $drivingLesson->student->name }}</p>
                    <p class="text">Инструктор: {{ $drivingLesson->instructor->name }}</p>
                    <p class="text">Дата: {{ $drivingLesson->date }}</p>
                    <p class="text mb-0">Время: {{ $drivingLesson->time }}</p>
                </div>
            @endforeach
        @endif
        
        @if(count($theoreticalLessons) != 0)
            <h2 class="montserrat_light mt-3">Теоретические занятия</h2>
            @foreach ($theoreticalLessons as $theoreticalLesson)
                <div class="content_block p-3 mb-2">
                    <h3 class="text">Тема: {{ $theoreticalLesson->name }}</h3>
                    <p class="text">Описание: {{ $theoreticalLesson->description }}</p>
                    <p class="text">Группа: {{ $theoreticalLesson->group->name }}</p>
                    <p class="text">Преподаватель: {{ $theoreticalLesson->teacher->name }}</p>
                    <p class="text">Дата: {{ $theoreticalLesson->date}}</p>
                    <p class="text mb-0">Время: {{ $theoreticalLesson->time }}</p>
                    @if ($theoreticalLesson->file != null)
                        <div class="d-flex align-items-center mt-2">
                            <img src="/img/pdf_document.png" alt="Пдф документ" class="theoretical_image me-2">
                            <a href="/storage/lessonFiles/{{ $theoreticalLesson->file }}">{{$theoreticalLesson->file}}</a>
                        </div>
                    @endif
                </div>
            @endforeach
        @endif

    </div>
@endsection