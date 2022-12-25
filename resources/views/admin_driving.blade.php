@extends('layouts.admin_base')

@section('title', 'Практические занятия')

@section('main')
  <div class="container content_block p-3 mb-2">
    <h2 class="montserrat_light">Практические занятия</h2>
    <nav>
        <ul style="list-style-type: none" class="p-0 m-0 mb-2">
        </ul>
    </nav>
  </div>
  @foreach ($groups as $group)
      <div class="container content_block p-3 mb-2">
        <div class="d-flex justify-content-between mb-3">
          <h2 class="text">{{$group->name}}</h2>
          <div class="d-flex flex-column">
              <a class="action_text" href="{{ Route('admin.driving.add', ['group' => $group->id]) }}">Добавить занятие</a>
          </div>
      </div>
        <h4 class="text">Занятия</h4>
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Ученик</th>
                    <th scope="col">Инструктор</th>
                    <th scope="col">Дни недели</th>
                    <th scope="col">Время</th>
                    <th scope="col">Автомобиль</th>
                    <th scope="col">Действия</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($group->user as $user)
                    @if (isset($user->drivingLesson->id))
                        @php
                            $lesson = $user->drivingLesson
                        @endphp
                        <tr>
                            <th scope="row">{{ $lesson->id }}</th>
                            <td>{{ $lesson->name }}</td>
                            <td>{{ $lesson->student->name }}</td>
                            <td>{{ $lesson->instructor->name }}</td>
                            <td>{{ $lesson->date }}</td>
                            <td>{{ $lesson->time }}</td>
                            <td>{{ $lesson->car->name }}</td>
                            <td><a href="{{ route('admin.driving.edit', ['lesson' => $lesson->id, 'group' => $group->id]) }}">Редактировать</a> / <a href="{{ route('admin.driving.delete', ['lesson' => $lesson->id]) }}">Удалить</a></td>
                        </tr>
                    @endif
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
  @endforeach
@endsection