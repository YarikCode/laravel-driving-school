@extends('layouts.base')

@section('title', 'Главная')

@section('main')

    <!-- Описание при входе -->
    <div class="container p-0 pb-4 d-flex flex-column justify-content-center" style="min-height: 100vh">
        <div class="index_image d-flex align-items-center justify-content-center m-0 p-0" style='background-image: url("/img/xl.jpg");'>
            <h1 class="light_text" style="color: white;">Автошкола "Мастер вождения"</h1>
        </div>
        <div class="row m-0 p-0 pt-2 gap-2">
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_1.jpg")'>
                <h2 class="light_text" style="color: white;">Лучшие автомобили</h2>
            </div>
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_3.jpg")'>
                <h2 class="light_text" style="color: white;">Лучшие инструкторы</h2>
            </div>
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_2.jpg")'>
                <h2 class="light_text" style="color: white;">Комфортные условия</h2>
            </div>
            <div class="col col_index_image" style='background-image: url("/img/index_image_col_4.jpg")'>
                <h2 class="light_text" style="color: white;">Рассрочка без переплат</h2>
            </div>
        </div>
    </div>

    <!-- Качество -->
    <div class="container-fluid d-flex flex-column justify-content-center all_height_image" style='background-image: url("/img/background_image.jpg");'>
        <div class="container d-flex flex-column gap-4">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <h1 class="montserrat_bold block_title" style="color: white;">Качество</h1>
                    <h5 class="montserrat_light" style="color: white">Мы подготовили для вас комфортные условия для обучения и разработали несколько курсов с максимально выгодными ценами.</h5>
                    <h5 class="montserrat_light mb-4" style="color: white;">Во все программы включены: полный теоретический курс по ПДД, вождение с инструктором (преодоление препятствий на автодроме и езда по городу), ГСМ, топливо, сбор всей необходимой документации для ГИБДД, предоставление автомобилей на экзамен и сопровождение ученика сотрудниками автошколы.</h5>
                    <a href="{{ route('public.usl') }}" class="white_custom_button">Записаться</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Инструкторы -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center p-md-5 p-3">
                <h1 class="montserrat_light block_title">Вас будет учить лучший инструктор</h1>
                <div class="d-flex flex-column">
                    <h5 class="montserrat_bold mb-1">Инструкторы европейского уровня</h5>
                    <h5 class="montserrat_light">Наши инструкторы ежегодно подтверждают и повышают свою квалификацию. Сами они проходят обучение у лучших тренеров России и Европы, а также регулярно сдают экзамены по ПДД.</h5>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="montserrat_bold mb-1">Строгий деловой дресс-код</h5>
                    <h5 class="montserrat_light">Наши инструкторы одеты в форменную одежду – классические костюмы с галстуком. Форму специально шьют под заказ на фабрике в Стамбуле</h5>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="montserrat_bold mb-1">Надёжность и комфорт на дороге</h5>
                    <h5 class="montserrat_light mb-3">Инструкторы не «сидят» в мобильном телефоне во время проведения урока. С такими наставниками рядом не страшны даже самые сложные ситуации на дороге. Под их чутким руководством вы уверенно сможете сдать на права</h5>
                </div>
                <a href="{{ route('public.usl') }}" class="custom_button">Записаться</a>
            </div>
            <div class="col-md-6 col-sm-12 all_height_image" style='background-image: url("/img/background_image_2.jpg");'></div>
        </div>
    </div>

    <!-- Стоимость обучения -->
    <div class="container-fluid about_price">
        <div class="row">
            <div class="col-md-6 col-sm-12 all_height_image" style='background-image: url("/img/background_image_3.jpg");'></div>
            <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center p-md-5 p-3">
                <h1 class="montserrat_light">Доступная стоимость обучения в автошколе Ейска</h1>
                <h5 class="montserrat_light mb-3">Мы ценим не только ваше время, но и деньги. Наши тарифы выгодно отличаются от принятых в других автошколах цен и позволяют значительно экономить. Дешево и качественно на 100% — так можно охарактеризовать наши услуги. Сколько длится обучение в автошколе, зависит от индивидуального графика каждого клиента. А сколько стоит обучение, можно узнать у наших менеджеров, которые перезвонят вам после оформленной вами онлайн-заявки или непосредственно в нашем заведении.<br>Честность, открытость и уважение к клиенту — наши приоритеты. Наша автошкола — одна из немногих в Москве, которая возвращает потраченные средства при негативном результате. Не упустите свой шанс стать профессионалом недорого.</h5>
                <a href="{{ route('public.usl') }}" class="custom_button">Записаться</a>
            </div>
        </div>
    </div>

    <!-- Автопарк -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center p-md-5 p-3">
                <h1 class="montserrat_light">У нас собственный автопарк из 13 иномарок</h1>
                <h5 class="montserrat_light mb-3">В нашей автошколе присутствует собственный автопарк из 13 иномарок. Наш автопарк состоит из большого количества автомобилей, присутствуют как автомобили с механической, так и с автоматической трансмиссией. Каждый автомобиль регулярно проходит техническое обслуживание. При движении в нашем автомобиле вы будете чувствовать себя комфортно и уверено. Все автомобили оборудованы всеми необходимыми техническими средствами, чтобы вы чувствовали себя уверено в любой дорожной ситуации.</h5>
                <a href="{{ route('public.usl') }}" class="custom_button">Записаться</a>
            </div>
            <div class="col-md-6 col-sm-12 all_height_image" style='background-image: url("/img/background_image_4.jpg");'></div>
        </div>
    </div>

    <!-- Обучение -->
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12">
                <h1 class="montserrat_light mb-3">Как происходит обучение</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
                <h4 class="montserrat_bold text-uppercase">теория</h4>
                <p class="montserrat_light">Теоретический курс проходит в лекционном формате в классе. Ученики напрямую общаются с преподавателем, это очень интересно и эффективно. На лекциях разбирают правила дорожного движения и их применения в реальной жизни.</p>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <h4 class="montserrat_bold text-uppercase">практика</h4>
                <p class="montserrat_light">Вождение проходит на автодроме и по городским маршрутам, на специально оборудованном авто, под руководством инструктора с большим стажем. Вы сами выбираете удобное время для практики. Инструктора работают для вас в будние и выходные дни. Вождение самый интересный процесс обучения.</p>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <h4 class="montserrat_bold text-uppercase">внутренние экзамены в автошколе</h4>
                <p class="montserrat_light">Тест на знание правил ПДД проходит на компьютере. Вождение проходит в городских условиях на дорогах общего пользования. В случае успешной сдачи внутренних экзаменов, вы будете допущены до финальных испытаний в ГИБДД. Экзамены проходят лояльно, их не нужно бояться.</p>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
                <h4 class="montserrat_bold text-uppercase">экзамен в гибдд</h4>
                <p class="montserrat_light">После экзаменов в автошколе, вы организованно идете на экзамены в ГИБДД. Куратор и инструктора автошколы все организуют. Всего два этапа, экзамен по теории и практике. После успешной сдачи экзаменов в ГАИ, долгожданные права будут у вас в кармане.</p>
            </div>
        </div>
    </div>

    <!-- Мы гордимся учениками -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="montserrat_bold">Мы гордимся НАШИМИ УЧЕНИКАМИ</h1>
                <h2 class="montserrat_light">Мы выпустили более 50 000 водителей</h2>
            </div>
        </div>
        <div class="row g-3 mb-5">
            <div class="col-md-4 col-sm-12"><img src="/img/collage_1.jpg" class="img-fluid"></div>
            <div class="col-md-4 col-sm-12"><img src="/img/collage_2.jpg" class="img-fluid"></div>
            <div class="col-md-4 col-sm-12"><img src="/img/collage_3.jpg" class="img-fluid"></div>
            <div class="col-md-4 col-sm-12"><img src="/img/collage_4.jpg" class="img-fluid"></div>
            <div class="col-md-4 col-sm-12"><img src="/img/collage_5.jpg" class="img-fluid"></div>
            <div class="col-md-4 col-sm-12"><img src="/img/collage_6.jpg" class="img-fluid"></div>
        </div>
    </div>

    <!-- Отзывы -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="montserrat_light" style="margin-bottom: 70px">Отзывы о нашей работе</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 p-2 review_margin">
                <div class="review_card">
                    <img src="/img/review_people_1.jpg" alt="Михаил Иванов" class="img-fluid">
                    <p class="montserrat_light">Мои отзыв о хорошей автошколе и достойном инструкторе. Проходил обучение в автошколе "Мастер вождения" в Ейске. Автошкола в центре города, приезжать туда одно удовольствие, всегда дружеская и домашняя атмосфера, здесь реально чувствуешь, что учеников любят. Теорию в автошколе проходил на Красной, все занятия были интересные, новая мультимедийная система с видео и инфографикой не дают заскучать. Удобно, что всем дают темы занятий заранее. Практику откатал с Марианной Климентьевной. Мариана, человек знающий свое дело, всегда в хорошем настроении и все подробно рассказывает. Машина новая комфортная, приятная в управлении и обучении. Много занятий откатал в городе, это очень порадовало. Экзамены в автошколе лояльные, ни кто ни чем не грузит. Посетив всего два экзамена в ГИБДД, быстро и без напрягов получил права. Очень рад, всем советую автошколу "Мастер вождения" в Ейске.</p>
                    <h4 class="montserrat_bold">Михаил Иванов</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 p-2 review_margin">
                <div class="review_card">
                    <img src="/img/review_people_2.jpg" alt="Евгения Волкова" class="img-fluid">
                    <p class="montserrat_light">Отзыв о хорошей автошколе в Ейске. Хочу поделиться своей историей об обучении в Ейске. Я мама троих детей и учиться в автошколе, в моем положении, было очень не просто, думаю многие меня поймут. В своем отзыве об автошколе я хочу донести главное, - Никогда не сдавайтесь! Когда я пришла в автошколу "Мастер вождения" у меня еще было двое детей :) В процессе всего обучения, что-то останавливало меня и всегда были какие-то жизненные обстоятельства, в результате которых мне пришлось переносить обучение. Финалом переносов стала моя третья беременность, сами понимаете отсрочку в автошколе я взяла почти на два года. В общей сложности весь процесс от поступления в автошколу, до получения прав, занял у меня 2,5 года. За это время у меня сгорели 2 медсправки и один раз сданные экзамены в ГИБДД. Я благодарю коллектив автошколы "Мастер вождения", за их поддержку, за то что они всегда входили в мое положение и не отказывались от меня, ждали меня и помогли мне наконец-то получить мои долгожданные права!</p>
                    <h4 class="montserrat_bold">Евгения Волкова</h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 p-2">
                <div class="review_card">
                    <img src="/img/review_people_3.jpg" alt="Руфина Просветова" class="img-fluid">
                    <p class="montserrat_light">Добрый день, хотелось бы написать отзыв об автошколе "Мастер вождения", которую я закончила. Мне очень понравилось, что для обучения я выбрала именно эту автошколу, так как у нее много плюсов:<br>1)Приемлемая для меня цена, без всяких дополнительных доплат, заплатила 1 раз и все.<br>2)Удобное расположение, в одном шаге от центра города.<br>3)Хорошие инструкторы по вожденеию и преподаватели теории.<br>Мне очень понравилось, как обьясняют теоретический материал, спасибо большое преподавателю теории Снежане, она очень доходчиво обьясняет, расжевывает каждый момент.
                    </p>
                    <h4 class="montserrat_bold">Руфина Просветова</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Ответы на вопросы -->
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12">
                <h1 class="montserrat_light">Ответы на ваши вопросы</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Могу ли сдать экзамены в ГИБДД в другом городе, отучившись в автошколе "Мастер Вождения"?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body fst-italic">Да, можете. После окончания а/ш вы предупреждаете нас об этом, чтобы мы подготовили комплект документов для сдачи в другом городе</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Могу ли я записаться, если мне ещё нет 18 лет?
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body fst-italic">Да, но экзамен в ГИБДД вы будете сдавать только с 17 лет.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Из чего состоит обучение?
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body fst-italic">Обучение состоит из теоретического курса, который проходит в формате лекции с использованием мультимедийного оборудования и/или обучение проходит дистанционно в формате видеоуроков в мобильном приложении. Практические занятия проходят в городе, на учебных маршрутах, утвержденных в автошколе, и на закрытой площадке.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Сколько времени занимает обучение?
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body fst-italic">2-2,5 месяца занимает полный курс обучения, включающий в себя теоретический курс обучения и практические занятия (начинающиеся в течении 14 дней от начала обучения и проходящие до конца курса, параллельно с теорией) с дальнейшим экзаменом в ГИБДД.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Какими способами я могу оплатить обучение?
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body fst-italic">У нас осуществляется как наличный, так и безналичный расчет.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Возможна ли рассрочка оплаты за обучение?
                          </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body fst-italic">Да, вы можете оплачивать обучение частями.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Расположение -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <h1 class="montserrat_light">Расположение автошколы</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab51ee96bfb7c1233ad55f0b70612556625dfbf0d8e9b4120c9495c80d25a6810&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>

    <!-- Футер -->
    <footer class="container-fluid footer pt-4 pb-4">
        <div class="container">
            <h1 class="montserrat_bold" style="color: white">Контакты</h1>
            <div class="row">
                <div class="col">
                    <div class="mb-4">
                        <p class="montserrat_light mb-1" style="color: gray">ТЕЛЕФОН:</p>
                        <p class="montserrat_light" style="color: white">+7 (964) 922-38-71</p>
                    </div>
                    <div class="mb-4">
                        <p class="montserrat_light mb-1" style="color: gray">ЭЛ. АДРЕС:</p>
                        <p class="montserrat_light" style="color: white">drivermaster@mail.ru</p>
                    </div>
                    <div class="mb-4">
                        <p class="montserrat_light mb-1" style="color: gray">ОТДЕЛ ПРОДАЖ:</p>
                        <p class="montserrat_light" style="color: white">г. Ейск, ул. Мичурина, 22</p>
                    </div>
                </div>
                <div class="col">
                        <div class="mb-4">
                            <p class="montserrat_light mb-1" style="color: gray">ГРАФИК РАБОТЫ:</p>
                            <p class="montserrat_light" style="color: white">пн-пт: 8:00 - 18:00 <br> сб: 9:00 - 17:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection('main')