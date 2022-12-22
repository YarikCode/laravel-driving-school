@extends('layouts.admin_base')

@section('title', 'Группы')

@section('main')
    <div class="container">
        @foreach ($groups as $group)
            <div class="content_block p-3 mb-2">
                <h3 class="text">Номер группы: {{ $group->id }}</h3>
                <p class="text">Название: {{ $group->name }}</p>
                <p class="text">Описание: {{ $group->description }}</p>
                <p class="text">Время: {{ $group->time }}</p>
                <h4 class="text">Ученики группы</h4>
                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">ФИО</th>
                            <th scope="col">Почта</th>
                            <th scope="col">Номер</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($group->user as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->number }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
            
        @endforeach
    </div>
@endsection