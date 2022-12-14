@extends('layouts.admin_base')

@section('title', 'Удаление услуги')

@section('main')
    <form class="container content_block p-3 mb-2" action="{{route('usl.destroy', ['usl' => $usl->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <h2 class="text">Удаление услуги</h2>
        <p class="text">Номер услуги: {{$usl->id}}</p>
        <p class="text">Услуга: {{$usl->name}}</p>
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
@endsection