@extends('layouts.base')

@section('title', 'Главная')

@section('main')
    <div class="container p-0 pb-4 d-flex flex-column justify-content-center" style="min-height: 100vh">
        <div class="index_image d-flex align-items-center justify-content-center m-0 p-0" style='background-image: url("/img/xl.jpg");'>
            <p class="light_text" style="color: white; font-size: 50px">Автошкола "Мастер вождения"</p>
        </div>
        <div class="row m-0 p-0 pt-2 gap-2">
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_1.jpg")'>
                <p class="light_text" style="color: white; font-size: 30px">Лучшие автомобили</p>
            </div>
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_3.jpg")'>
                <p class="light_text" style="color: white; font-size: 30px">Лучшие инструкторы</p>
            </div>
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_2.jpg")'>
                <p class="light_text" style="color: white; font-size: 30px">Комфортные условия</p>
            </div>
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_4.jpg")'>
                <p class="light_text" style="color: white; font-size: 30px">Рассрочка без переплат</p>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column justify-content-center all_height_image" style='background-image: url("/img/background_image.jpg");'>
        <div class="container d-flex flex-column gap-4">
            <p class="montserrat_light media_tex block_title" style="color: white;">Качество</p>
            <p class="montserrat_extraLight media_text" style="color: white; font-size: 20px;">Мы подготовили для вас комфортные условия для обучения и разработали несколько курсов с максимально выгодными ценами.</p>
            <p class="montserrat_bold media_text" style="color: white; font-size: 18px;">Во все программы включены: полный теоретический курс по ПДД, вождение с инструктором (преодоление препятствий на автодроме и езда по городу), ГСМ, топливо, сбор всей необходимой документации для ГИБДД, предоставление автомобилей на экзамен и сопровождение ученика сотрудниками автошколы.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center p-5">
                <p class="montserrat_light media_text block_title">Вас будет учить лучший инструктор</p>
                <div class="d-flex flex-column">
                    <p class="montserrat_bold mb-1" style="font-size: 20px;">Инструкторы европейского уровня</p>
                    <p class="montserrat_light" style="font-size: 18px;">Наши инструкторы ежегодно подтверждают и повышают свою квалификацию. Сами они проходят обучение у лучших тренеров России и Европы, а также регулярно сдают экзамены по ПДД.</p>
                </div>
                <div class="d-flex flex-column">
                    <p class="montserrat_bold mb-1" style="font-size: 20px;">Строгий деловой дресс-код</p>
                    <p class="montserrat_light" style="font-size: 18px;">Наши инструкторы одеты в форменную одежду – классические костюмы с галстуком. Форму специально шьют под заказ на фабрике в Стамбуле</p>
                </div>
                <div class="d-flex flex-column">
                    <p class="montserrat_bold mb-1" style="font-size: 20px;">Надёжность и комфорт на дороге</p>
                    <p class="montserrat_light" style="font-size: 18px;">Инструкторы не «сидят» в мобильном телефоне во время проведения урока. С такими наставниками рядом не страшны даже самые сложные ситуации на дороге. Под их чутким руководством вы уверенно сможете сдать на права</p>
                </div>
            </div>
            <div class="col all_height_image" style='background-image: url("/img/background_image_2.jpg");'></div>
        </div>
    </div>
@endsection('main')