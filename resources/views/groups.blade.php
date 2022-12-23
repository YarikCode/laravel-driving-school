@extends('layouts.admin_base')

@section('title', 'Группы')

@section('main')
  <div class="container content_block p-3 mb-2">
    <h2 class="montserrat_light">Группы</h2>
    <nav>
        <ul style="list-style-type: none" class="p-0 m-0 mb-2">
            <li><a class="btn btn-success" href="{{route('admin.groups.add')}}">Добавить</a></li>
        </ul>
    </nav>
  </div>
  @foreach ($groups as $group)
      <div class="container content_block p-3 mb-2">
        <div class="d-flex justify-content-between mb-3">
          <h2 class="text">{{$group->name}}</h2>
          <div class="d-flex flex-column">
              <a class="action_text" href="{{ route('admin.groups.edit', ['group' => $group->id]) }}">Редактировать группу</a>
              <a class="action_text" href="{{ route('admin.groups.delete', ['group' => $group->id]) }}">Удалить группу</a>
          </div>
      </div>
        <p class="text">Номер группы: {{ $group->id }}</p>
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
@endsection