<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/main.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
          <ul class="nav me-auto">
            <li class="nav-item"><a href="/" class="nav-link link-dark px-2 active text" aria-current="page">Главная</a></li>
            @auth
            <li class="nav-item"><a href="/home" class="nav-link link-dark px-2 text">Мои заявки</a></li>
            @endauth
          </ul>
          <ul class="nav">
            @guest
              <li class="nav-item"><a href="{{route('login')}}" class="nav-link link-dark px-2">Вход</a></li>
              <li class="nav-item"><a href="{{route('register')}}" class="nav-link link-dark px-2">Регистрация</a></li>
            @endguest
            @auth
              <div class="flex-shrink-0 dropdown d-flex align-items-center justify-content-center">
                <p class="text m-0 me-1">{{Auth::user()->name}}</p>
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
                  <li><a class="dropdown-item" href="#">Личный кабинет</a></li>
                  <li><a class="dropdown-item" href="#">Обучение</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><form action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" value="Выход" class="dropdown-item">
                  </form></li>
                </ul>
              </div>
            @endauth
          </ul>
        </div>
      </nav>
    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
          <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 text">Автошкола "Мастер вождения"</span>
          </a>
          <form class="col-12 col-lg-auto mb-3 mb-lg-0">
            <input type="search" class="form-control" placeholder="Поиск..." aria-label="Search">
          </form>
        </div>
    </header>
    @yield('main');
</body>
</html>