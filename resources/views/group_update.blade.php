@extends('layouts.admin_base')

@section('title', 'Редактирование группы')

@section('main')
    <form class="container content_block p-3 mb-2" action="{{ route('admin.groups.update', ['group' => $group->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <h2 class="text">Редактирование группы</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">Название группы</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Введите название группы" name="name" value="{{ old('name', $group->name) }}" required>
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Время обучения</label>
            <select class="form-select mb-2" aria-label="Default select example" name="time" required>
                @if ($group->time === "Дневное обучение")
                    <option selected="selected" value="Дневное обучение">Дневное обучение</option>
                    <option value="Вечернее обучение">Вечернее обучение</option>
                @else
                    <option value="Дневное обучение">Дневное обучение</option>
                    <option selected="selected" value="Вечернее обучение">Вечернее обучение</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>    
    </form>
@endsection