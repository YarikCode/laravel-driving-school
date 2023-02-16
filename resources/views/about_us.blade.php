@extends('layouts.base')

@section('title', 'О нас')
    
@section('main')
    <div class="container pb-3">

        <div class="content_block p-3 mb-3">
          <h2 class="montserrat_light">Краткие сведения</h2>
          <p class="montserrat_light">Автошкола "Мастер вождения" начала свою деятельность в 2017 году. Мы занимаемся обучением водителей транспортных средств различных категорий на профессиональном уровне. Являемся одной из ведущих автошкол города Ейска. Входим в состав Межрегиональной ассоциации автошкол (МААШ). Имеем бессрочную лицензию Департамента образования Краснодарского края 23853 № 00139423 от 01 октября 2018г.</p>
          <p class="montserrat_light mb-0">Для нас главное качество подготовки водителей. Большая часть нашего коллектива – это опытные инструкторы и преподаватели, подготовившие не одну сотню, а некоторые и тысячу людей.</p>
        </div>

        <div class="content_block table-responsive p-3 mb-3">
            <h2 class="montserrat_light">Сведенния об организации</h2>
            <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td><b>Вид</b></td>
                    <td>Юридическое лицо</td>
                  </tr>
                  <tr>
                    <td><b>Сокращенное наименование</b></td>
                    <td>ООО "Мастер вождения"</td>
                  </tr>
                  <tr>
                    <td><b>Полное наименование</b></td>
                    <td>Общество с ограниченной ответственностью "Мастер вождения"</td>
                  </tr>
                  <tr>
                    <td><b>ИНН</b></td>
                    <td>9751996479</td>
                  </tr>
                  <tr>
                    <td><b>КПП</b></td>
                    <td>928196175</td>
                  </tr>
                  <tr>
                    <td><b>ОГРН</b></td>
                    <td>859307651091765</td>
                  </tr>
                  <tr>
                    <td><b>Учредитель</b></td>
                    <td>Иванов Иван Иванович</td>
                  </tr>
                  <tr>
                    <td><b>Местонахождение</b></td>
                    <td>Краснодарский край, г. Ейск, ул. Мичурина, 22</td>
                  </tr>
                </tbody>
            </table>
        </div>

        <div class="content_block p-3">
          <h2 class="montserrat_light">Документы организации</h2>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <img src="/img/license.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-12">
              <img src="/img/INN.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        
    </div>
@endsection