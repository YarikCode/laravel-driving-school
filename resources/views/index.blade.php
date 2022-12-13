@extends('layouts.base')

@section('title', 'Главная')

@section('main')
    <div class="container">
        <div class="row mt-3 border border-1 p-3 rounded">
            <div class="col-3"><img src="./img/moto.jpg" class="rounded" width="100%" height="auto" alt=""></div>
            <div class="col-5">
                <h1 class="title">Категория A</h1>
                <p class="text">В стоимость включены:
                    теоретическая часть,
                    практическая часть (вождение),
                    а так же все расходы на ГСМ (бензин, амортизацию и т.д.).
                    Цена зафиксирована в договоре.</p>
                <h4 class="text">Больше никаких доплат!</h4>
            </div>
            <div class="col-4 d-flex">
                <h1 class="title">37 000</h1>
                <div class="ms-4">
                    <a href="#"><button class="custom_button">Записаться</button></a>
                </div>
            </div>
        </div>
        <div class="row mt-3 border border-1 p-3 rounded">
            <div class="col-3"><img src="./img/avto.jpg" class="rounded" width="100%" height="auto" alt=""></div>
            <div class="col-5">
                <h1 class="title">Категория B</h1>
                <p class="text">В стоимость включены:
                    теоретическая часть,
                    практическая часть (вождение),
                    а так же все расходы на ГСМ (бензин, амортизацию и т.д.).
                    Цена зафиксирована в договоре.</p>
                <h4 class="text">Больше никаких доплат!</h4>
            </div>
            <div class="col-4 d-flex">
                <h1 class="title">37 000</h1>
                <div class="ms-4">
                    <a href="#"><button class="custom_button">Записаться</button></a>
                </div>
            </div>
        </div>
        <div class="row mt-3 border border-1 p-3 rounded">
            <div class="col-3"><img src="./img/znak.jpg" class="rounded" width="100%" height="auto" alt=""></div>
            <div class="col-5">
                <h1 class="title">Восстановление навыков</h1>
                <p class="text">В стоимость включены:
                    теоретическая часть,
                    практическая часть (вождение),
                    а так же все расходы на ГСМ (бензин, амортизацию и т.д.).
                    Цена зафиксирована в договоре.</p>
                <h4 class="text">Больше никаких доплат!</h4>
            </div>
            <div class="col-4 d-flex">
                <h1 class="title">16 000</h1>
                <div class="ms-4">
                    <a href="#"><button class="custom_button">Записаться</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
