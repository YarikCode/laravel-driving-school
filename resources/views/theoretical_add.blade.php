@extends('layouts.admin_base')

@section('title', 'Добавление занятия')

@section('main')
    <form class="container content_block p-3 mb-2" action="{{ route('admin.theoretical.store', ['group' => $group->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="text">Добавление теоретического занятия</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">Название занятия</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Введите название занятия" name="name" value="{{ old('name') }}" required>
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Описание занятия</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите описание занятия" name="description" value="{{ old('description') }}" required>
            @error('description')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Дата</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите дату" name="date" value="{{ old('date') }}" required>
            @error('date')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Время</label>
            <input type="time" class="form-control @error('price') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите стоимость услуги" name="time" value="{{ old('time') }}" required>
            @error('time')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="exampleInputPassword1">Преподаватель</label>
            <select class="form-select" aria-label="Default select example" name="teacher">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="exampleInputPassword1">Дополнительный материал</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="exampleInputPassword1" placeholder="Выберите файл" name="file" value="{{ old('file') }}">
            @error('file')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <small id="emailHelp" class="form-text text-muted">Выберите 1 файл формата ".pdf"</small>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>    
    </form>
@endsection