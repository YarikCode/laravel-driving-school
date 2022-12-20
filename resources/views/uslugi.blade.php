@extends('layouts.admin_base')

@section('title', 'Услуги')
    
@section('main')
    <div class="container content_block p-3 mb-2">
        <nav>
            <ul style="list-style-type: none" class="p-0 m-0 mb-2">
                <li><a class="btn btn-success" href="{{route('admin.usl.add')}}">Добавить</a></li>
            </ul>
        </nav>
    </div>
    @foreach ($uslugi as $usluga)
    <div class="container content_block p-3 mb-2">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="text">{{$usluga->name}}</h2>
            <div class="d-flex flex-column">
                <a href="{{route('usl.edit', ['usl' => $usluga->id])}}">Редактировать услугу</a>
                <a href="{{route('usl.delete', ['usl' => $usluga->id])}}">Удалить услугу</a>
            </div>
        </div>
        <h4 class="text mb-4">{{$usluga->name}}</h4>
        <div>
            <p class="text">Номер услуги: {{$usluga->id}}</p>
            <p class="text">Наименование: {{$usluga->name}}</p>
            <p class="text">Описание: {{$usluga->description}}</p>
            <p class="text">Стоимость: {{$usluga->price}}</p>
            <p class="text">Изображение: {{$usluga->image}}</p>
            <p class="text">Создание: {{$usluga->created_at}}</p>
            <p class="text">Редактирование: {{$usluga->updated_at}}</p>
        </div>
    </div>
    @endforeach
@endsection