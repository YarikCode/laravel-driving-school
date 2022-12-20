@extends('layouts.admin_base')

@section('title', 'Редактирование услуги')

@section('main')
    <form class="container content_block p-3 mb-2" action="{{route('usl.update', ['usl' => $usl->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h2 class="text">Редактирование услуги</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">Название услуги</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Введите название услуги" name="name" entype="multipart/form-data" value="{{ old('name', $usl->name) }}" required>
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Описание услуги</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите описание услуги" name="description" value="{{ old('description', $usl->description) }}" required>
            @error('description')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Стоимость услуги</label>
            <input type="number" min="1" step="any" class="form-control @error('price') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите стоимость услуги" name="price" value="{{ old('price', $usl->price) }}" required>
            @error('price')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-2">
            <label for="exampleInputPassword1">Изображение</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="exampleInputPassword1" placeholder="Выберите изображение" name="image">
            @error('image')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection