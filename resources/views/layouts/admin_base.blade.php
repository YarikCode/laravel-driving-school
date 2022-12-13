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
    <div class="container-fluid row">
        <div class="col-xs-12 col-md-3 admin_panel">
            <div class="d-flex p-3" style="border-bottom: 1px solid rgb(145, 145, 145)">
                <img src="/img/user.png" height="50" width="50">
                <div class="ms-2">
                    <p class="text mb-1" style="color: rgb(145, 145, 145)">Добро пожаловать,</p>
                    <h5 class="text" style="color: rgb(207, 207, 207)">{{Auth::user()->name}}</h5>
                </div>
            </div>
            <div class="d-flex flex-column pt-1 ps-3">
                <p class="title" style="color: rgb(207, 207, 207)" >Управление модулем</p>
                <div>
                    <nav>
                        <ul style="list-style-type: none">
                            <li class="text admin_menu_li pt-1 pb-1"><a href="/" class="admin_menu_href">Главная</a></li>
                            <li class="text admin_menu_li pt-1 pb-1"><a href="#" class="admin_menu_href">Заявки</a></li>
                            <li class="text admin_menu_li pt-1 pb-1"><a href="{{route('admin.usl')}}" class="admin_menu_href">Услуги</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-9 p-2">
            @yield('main')
        </div>
    </div>
</body>
</html>