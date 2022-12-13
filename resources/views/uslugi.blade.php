@extends('layouts.admin_base')

@section('title', 'Услуги')
    
@section('main')
    @foreach ($uslugi as $usluga)
    <div class="border border-1 p-3 rounded">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="text">{{$usluga->name}}</h2>
            <a href="#">Редактировать услугу</a>
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