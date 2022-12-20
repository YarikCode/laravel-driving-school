@extends('layouts.admin_base')

@section('title', 'Добавление услуги')

@section('main')
    <form class="container content_block p-3 mb-2" action="{{ route('usl.store' )}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="text">Добавление услуги</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">Название услуги</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите название услуги" name="name" entype="multipart/form-data">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Описание услуги</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Введите описание услуги" name="description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Стоимость услуги</label>
            <input type="number" min="1" step="any" class="form-control" id="exampleInputPassword1" placeholder="Введите стоимость услуги" name="price">
        </div>
        <div class="mb-2">
            <label for="exampleInputPassword1">Изображение</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Выберите изображение" name="File">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>    
    </form>
@endsection