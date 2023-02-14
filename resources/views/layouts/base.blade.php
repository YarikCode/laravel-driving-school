<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  <!-- Шапка сайта -->
  <header class="header">
    <nav class="py-2">
        <div class="container d-flex flex-wrap">
          <ul class="nav me-auto">
            <li class="nav-item text header_text"><a href="{{ route('index') }}" class="nav-link link-dark px-2 active" aria-current="page">Главная</a></li>
            <li class="nav-item text header_text"><a href="{{ route('public.usl') }}" class="nav-link link-dark px-2">Услуги</a></li>
            @auth
              <li class="nav-item text header_text"><a href="{{ route('home') }}" class="nav-link link-dark px-2">Личный кабинет</a></li>
              @if (Auth::user()->group_id != null)
                <li class="nav-item text header_text"><a href="{{ route('lessons') }}" class="nav-link link-dark px-2">Обучение</a></li>
              @endif
            @endauth
          </ul>
          <ul class="nav d-flex align-items-center">
            @guest
              <li class="nav-item text header_text"><a href="{{ route('login') }}" class="nav-link link-dark px-2">Войти</a></li>
              <li class="nav-item text header_text"><a href="{{ route('register') }}" class="nav-link link-dark px-2">Зарегистрироваться</a></li>
            @endguest
            @auth
              <div class="ps-2 dropdown text-end d-flex align-items-center">
                <p class="text header_text m-0 me-2">{{ Auth::user()->name }}</p>
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle show" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
                  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-110px, 34px);">
                  <li><a class="dropdown-item text" href="{{ route('index') }}">Главная</a></li>
                  <li><a class="dropdown-item text" href="{{ route('public.usl') }}">Услуги</a></li>
                  <li><a class="dropdown-item text" href="{{ route('home') }}">Личный кабинет</a></li>
                  @if (Auth::user()->group_id != null)
                    <li><a class="dropdown-item text" href="{{ route('lessons') }}">Обучение</a></li>
                  @endif
                  @if (Auth::user()->status == "Admin")
                    <li><a class="dropdown-item text" href="{{ route('admin') }}">Панель администратора</a></li>
                  @endif
                  <li><hr class="dropdown-divider"></li>
                  <li><form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" class="dropdown-item text" value="Выйти">
                  </form></li>
                </ul>
              </div>
            @endauth
          </ul>
        </div>
    </nav>
  </header>
  
  <!-- Основной контент -->
  <div class="content pt-3">
      @yield('main')
  </div>
</body>
</html>