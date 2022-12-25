@extends('layouts.admin_base')

@section('title', 'Редактирование занятия')

@section('main')
    <form class="container content_block p-3 mb-2" action="{{ route('admin.driving.update', ['lesson' => $lesson->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <h2 class="text">Редактирование практического занятия</h2>
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
            <label for="exampleInputPassword1">Ученик</label>
            <select class="form-select @error('student') @enderror" aria-label="Default select example" name="student" required>
                @foreach ($group->user as $user)
                    <option @if ($user->id === $lesson->student->id) selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('student')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Инструктор</label>
            <select class="form-select" aria-label="Default select example" name="instructor" required>
                @foreach ($instructors as $instructor)
                    <option @if ($instructor->id === $lesson->instructor->id) selected @endif value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                @endforeach
            </select>
            @error('instructor')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Время</label>
            <input type="time" class="form-control @error('price') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите время занятий" name="time" value="{{ old('time', $lesson->time) }}" required>
            @error('time')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Дни недели</label>
            <input type="dates" class="form-control @error('dates') is-invalid @enderror" id="exampleInputPassword1" placeholder="Введите дни недели занятий" name="dates" value="{{ old('dates', 'Пн, Вт, Ср, Чт, Пт') }}" required>
            @error('dates')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="exampleInputPassword1">Автомобиль</label>
            <select class="form-select" aria-label="Default select example" name="car" required>
                @foreach ($cars as $car)
                    <option @if ($car->id === $lesson->car->id) selected @endif value="{{ $car->id }}">{{ $car->name }}</option>
                @endforeach
            </select>
            @error('car')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>    
    </form>
@endsection