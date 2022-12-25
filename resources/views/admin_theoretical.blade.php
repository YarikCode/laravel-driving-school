@extends('layouts.admin_base')

@section('title', 'Теоретические занятия')

@section('main')
  <div class="container content_block p-3 mb-2">
    <h2 class="montserrat_light">Теоретические занятия</h2>
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
              <a class="action_text" href="{{ Route('admin.theoretical.add', ['group' => $group->id]) }}">Добавить занятие</a>
          </div>
      </div>
        <h4 class="text">Занятия</h4>
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Преподаватель</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Время</th>
                    <th scope="col">Действия</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($group->theoreticalLesson as $lesson)
                    <tr>
                        <th scope="row">{{ $lesson->id }}</th>
                        <td>{{ $lesson->name }}</td>
                        <td>{{ $lesson->teacher->name }}</td>
                        <td>{{ $lesson->date }}</td>
                        <td>{{ $lesson->time }}</td>
                        <td><a href="{{ Route('admin.theoretical.delete', ['lesson' => $lesson->id]) }}">Удалить</a> / <a href="{{ Route('admin.theoretical.edit', ['lesson' => $lesson->id]) }}">Редактировать</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
  @endforeach
@endsection