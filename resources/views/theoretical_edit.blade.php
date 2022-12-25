@extends('layouts.admin_base')

@section('title', 'Редактирование занятия')

@section('main')
    <form class="container content_block p-3 mb-2" action="{{ route('admin.theoretical.update', ['lesson' => $lesson->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h2 class="text">Редактирование теоретического занятия</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">Название занятия</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Введите название занятия" name="name" value="{{ old('name', $lesson->name) }}" required>
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Описание занятия</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите описание занятия" name="description" value="{{ old('description', $lesson->description) }}" required>
            @error('description')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Дата</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите дату" name="date" value="{{ old('date', $lesson->date) }}" required>
            @error('date')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Время</label>
            <input type="time" class="form-control @error('price') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите стоимость услуги" name="time" value="{{ old('time', $lesson->time) }}" required>
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
                    <option @if ($lesson->teacher_id === $teacher->id) selected @endif value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>    
    </form>
@endsection