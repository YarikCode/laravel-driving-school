@extends('layouts.base')

@section('title', 'Главная')

@section('main')
    <div class="container">
        @foreach ($uslugi as $usluga)
            <div class="row mt-3 border border-1 p-3 rounded">
                <div class="col-3"><img src="/storage/uploads/{{$usluga->image}}" class="rounded" width="100%" height="auto" alt=""></div>
                <div class="col-5">
                    <h3 class="title">{{$usluga->name}}</h3>
                    <p class="text">{{$usluga->description}}</p>
                    <h4 class="text">Больше никаких доплат!</h4>
                </div>
                <div class="col-4 d-flex">
                    <h1 class="title">{{$usluga->price}}</h1>
                    <div class="ms-4">
                        <a href="{{route('app.add', ['usl' => $usluga])}}"><button class="custom_button">Записаться</button></a>
                    </div>
                </div>
            </div> 
        @endforeach
    </div>
@endsection
