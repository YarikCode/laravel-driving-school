@extends('layouts.admin_base')

@section('title', 'Редактирование услуги')

@section('main')
    <form class="container content_block p-3 mb-2" action="{{route('usl.update', ['usl' => $usl->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h2 class="text">Редактирование услуги</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">Название услуги</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите название услуги" name="name" entype="multipart/form-data" value="{{$usl->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Описание услуги</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Введите описание услуги" name="description" value="{{$usl->description}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Стоимость услуги</label>
            <input type="number" min="1" step="any" class="form-control" id="exampleInputPassword1" placeholder="Введите стоимость услуги" name="price" value="{{$usl->price}}">
        </div>
        <div class="mb-2">
            <label for="exampleInputPassword1">Изображение</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Выберите изображение" name="File" value="{{$usl->image}}">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection