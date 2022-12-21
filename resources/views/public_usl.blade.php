@extends('layouts.base')

@section('title', 'Услуги')
    
@section('main')
    <div class="container">
        <h1 class="montserrat_light">Наши услуги</h1>
        @foreach ($uslugi as $usluga)
            <div class="content_block row p-3 mb-3">
                <div class="col-auto p-0">
                    <img class="img-fluid" width="300" height="300" src="/storage/uploads/{{ $usluga->image }}">
                </div>
                <div class="col">
                    <h2 class="montserrat_light">{{ $usluga->name }}</h2>
                    <h5 class="montserrat_light">{{ $usluga->description }}</h2>
                </div>
                <div class="col">
                    <h1 class="montserrat_bold d-flex justify-content-beetwen">{{ $usluga->price }} ₽</h1>
                    <a href="{{ route('app.add', ['usl' => $usluga->id ]) }}">
                        <button class="custom_button">Записаться</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection