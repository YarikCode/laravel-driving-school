@extends('layouts.base')

@section('title', 'Создание заявки')

@section('main')

    <div class="container order_block color_1 p-3">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-9 col-12 d-flex flex-column justify-content-center">
                <h2 class="montserrat_bold">Оставьте заявку прямо сейчас</h2>
                <h5 class="montserrat_light color_usl">Услуга: {{$usl->name}}</h5>
                <p class="montserrat_light color_desc">{{$usl->description}}</p>
            </div>
            <form class="col-xl-3 col-lg-4 col-md-5 col-sm-9 col-12 order_form d-flex flex-column p-4" action="{{route('app.store', ['usl' => $usl->id])}}" method="POST">
                    @csrf
                    <p class="montserrat_bold text-center color_1">Заполните форму и ожидайте звонок от нашего оператора через 2-3 часа</p>
                    <div class="form-group montserrat_light color_1">
                        <label for="exampleInputPassword1" class="mb-2">Выберите желаемое время:</label>
                        <select class="form-select mb-2" aria-label="Default select example" name="time">
                            <option value="Дневное обучение">Дневное обучение</option>
                            <option value="Вечернее обучение">Вечернее обучение</option>
                        </select> 
                    </div>
                    <div class="form-group montserrat_light color_1 mb-2">
                        <label for="exampleInputEmail1" class="mb-2">Выберите желаемую дату:</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" name="date" max="2030-01-01" min="2023-01-01" required>
                    </div>
                    <div class="form-group montserrat_light color_1">
                        <label for="exampleInputEmail1" class="mb-2">Введите номер телефона:</label>
                        <input type="tel" class="form-control" id="phone-mask" name="phone_number" placeholder="+7(000)000-00-00" required>
                    </div>
                    <button type="submit" class="btn btn-primary montserrat_bold mt-4 mb-3">Отправить заявку</button>
                    <div class="form-check d-flex align-items-center m-0">
                        <input type="checkbox" class="form-check-input me-2 mt-0" id="exampleCheck1" required>
                        <label class="form-check-label order_checkbox montserrat_light" for="exampleCheck1">Согласие на обработку персональных данных</label>
                    </div>
                    <ul class="order_ul m-0 mt-2 montserrat_light">
                        <li>ваша заявка будет рассмотрена нашим сотрудником</li>
                        <li>все данные защищены и не будут переданы третьим лицам</li>
                    </ul>
            </form>
        </div>
    </div>

    <!-- Код для создания маски номера телефона -->
    <script src="https://unpkg.com/imask"></script>
    <script>
        var phoneMask = IMask(
        document.getElementById('phone-mask'), {
            mask: '+{7}(000)000-00-00'
        });
    </script>
@endsection