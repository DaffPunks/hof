<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Дом страха | Квесты в реальном времени | Прохождение квест комнат в реальности </title>

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" type="text/css" href="{{asset('css/build/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/build/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/build/slick-theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}" />

    <script type="text/javascript" src="{{asset('js/build/jquery.min.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('js/build/bootstrap.min.js')}}" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" defer></script>
    <script type="text/javascript" src="{{asset('js/build/slick.min.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('js/build/carousel.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('js/build/jquery.maskedinput.min.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('js/build/masonry.pkgd.min.js')}}" defer></script>

    <script type="text/javascript" src="{{asset('js/main.js')}}" defer></script>
</head>
<body>
<header>
    <a href="/"><div class="logo"></div></a>
    <a href="#about" class="header__link header__about to_about">О нас</a>
    <a href="#shedule" class="header__link header__schedule to_shedule">Расписание</a>
    <a href="#rules" class="header__link header__rules to_rules">Правила</a>
    <a href="#reviews" class="header__link header__feedback to_reviews">Отзывы</a>
    <a href="#contacts" class="header__link header__contact to_contacts">Контакты</a>
    <a class="header__number">51-08-44</a>
    <a class="header__adress to_map">г. Рязань, ул. Чкалова, д. 44</a>
</header>
<main id="main_carousel">
    <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($imagestop as $image)
            <div class="item">
                <img src="{{asset('images/slider/top/'.$image->file_path)}}" data-color="lightblue" alt="First Image">
            </div>
            @endforeach
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="testy">
        <div class="stupid_wrapper addmirrorthere">
            <a class="terrible-text">
                ПРОКЛЯТЫЙ БАР
            </a>
        </div>
        <div class="stupid_wrapper">
            <button class="terrible-button btn-custom to_shedule">Забронировать</button>
        </div>
    </div>
</main>
<section id="about">
    <div class="container">
        <h2>Сильные стороны нашего квеста</h2>
        <div class="about_strong row">
            <div class="col-xs-6 col-md-3 strong_item">
                <div class="strong_circle">
                    <img src="images/rocket.png">
                </div>
                <div class="strong_text">
                    Настоящий перформанс
                </div>
            </div>
            <div class="col-xs-6 col-md-3 strong_item">
                <div class="strong_circle">
                    <img src="images/place.png">
                </div>
                <div class="strong_text">
                    Большая локация
                </div>
            </div>
            <div class="col-xs-6 col-md-3 strong_item">
                <div class="strong_circle">
                    <img src="images/actor.png">
                </div>
                <div class="strong_text">
                    Взаимодействие с живыми персонажами
                </div>
            </div>
            <div class="col-xs-6 col-md-3 strong_item">
                <div class="strong_circle">
                    <img src="images/skull.png">
                </div>
                <div class="strong_text">
                    Квест в стиле хоррор
                </div>
            </div>
        </div>
        <div class="about_strong row">
            <div class="col-xs-6 col-md-3 strong_item">
                <div class="strong_circle">
                    <img src="images/decor.png">
                </div>
                <div class="strong_text">
                    Реалистичное оформление
                </div>
            </div>
            <div class="col-xs-6 col-md-3 strong_item">
                <div class="strong_circle">
                    <img src="images/questionmark.png">
                </div>
                <div class="strong_text">
                    Нестандартные игровые задачи
                </div>
            </div>
            <div class="col-xs-6 col-md-3 strong_item">
                <div class="strong_circle">
                    <img src="images/sound.png">
                </div>
                <div class="strong_text">
                    Звуковое и световое сопровождение
                </div>
            </div>
            <div class="col-xs-6 col-md-3 strong_item">
                <div class="strong_circle">
                    <img src="images/tea.png">
                </div>
                <div class="strong_text">
                    Вкусный чай и не только...
                </div>
            </div>
        </div>
        <h2>Что вас ждёт?</h2>
        <div class="about_legend">
            <p>9 лет назад в баре Харат была убита его хозяйка Оксана. Компания завсегдатаев зверски расправилась с женщиной, а затем инсценировала ограбление и скрылась. В суматохе было утеряно обручальное кольцо с руки Оксаны. По этой причине, дух хозяйки не может покинуть стены бара, пока ей не будет возвращено кольцо.</p>
            <p>С тех пор бар приобрел дурную репутацию. В нем стали пропадать люди. Уже более сотни посетителей не вернулись домой. Местный бармен, муж Оксаны, мстит всем, в ком ему мерещатся убийцы жены. Что он может сделать с посетителями, можно узнать, только посетив бар Харат.</p>
            <p>И если бармен начнет охоту за Вами, у Вас будет только один шанс выйти живыми… Не упустите его.</p>
        </div>
        <div class="about_carousel">
            @foreach($imagesmid as $item)
            <div><h3><img src="{{asset('images/slider/mid/'.$item->file_path)}}" style="width: 100%;"></h3></div>
            @endforeach
        </div>
        <div class="about_condition row">
            <div class="condition_text condition_left col-md-4">
                Количество игроков:
                <span>2-6 чел.</span>
            </div>
            <div class="condition_text condition_center col-md-4">
                Продолжительность:
                <span>60 минут</span>
            </div>
            <div class="condition_text condition_right col-md-4">
                Минимальный возраст:
                <span>16+</span>
            </div>
        </div>
        <div class="default_button">
            <button class="to_shedule">Забронировать</button>
        </div>
    </div>
</section>
<section id="shedule">
    <div class="container">
        <h2>Расписание</h2>
        <h3>Возможность проведения игры в другое время уточняйте<a href="tel:+74912510844"> по телефону</a></h3>
        <div class="container calendar">
            @for ($i = 0; $i < 10; $i++)
            <div class="row calendar-item">
                <div class="col-md-2 col-sm-3 col-xs-4 col-date">
                    <div class="calendar-date">
                        <span class="day">{{\Carbon\Carbon::today()->addDays($i)->format('d.m')}}</span>
                        <span class="day-name">{{AppHelper::dayOfWeekend(\Carbon\Carbon::today()->addDays($i)->dayOfWeek)}}</span>
                    </div>
                </div>
                <div>
                    <div class="col-md-10 col-sm-9 col-xs-8 cal-scroll">
                        <div class="cal-hours">
                            @for($d = 0; $d < 7; $d++)
                            <a href="#!"
                               data-price="{{ $times[ AppHelper::counter($d,$i) ]->price }}"
                               data-id="{{ $times[ AppHelper::counter($d,$i) ]->id }}"
                               data-dayoftheweek="{{ AppHelper::dayOfWeekend( \Carbon\Carbon::today()->addDays($i)->dayOfWeek ) }}"
                               data-time="{{ AppHelper::formatTime( $times[ AppHelper::counter($d,$i) ] ) }}"
                               data-daymonth="{{ AppHelper::monthOfYear( $times[AppHelper::counter($d,$i)] ) }}"

                               class="@if($times[AppHelper::counter($d,$i)]->is_reserved) reserved @else buy_one_click_popup @endif cal-hour">
                                {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $times[AppHelper::counter($d,$i)]->time)->format('H:i')}}
                            </a>
                            @endfor
                        </div>
                        <div class="price-blocks">
                            <div class="price-block price-amount-4">
                                {{$price[0]->value}} руб
                            </div>
                            <div class="price-block price-amount-3">
                                {{$price[1]->value}} руб
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            @for ($i = 10; $i < 20; $i++)
            <div class="row calendar-item" style="display: none;">
                <div class="col-md-2 col-sm-3 col-xs-4 col-date">
                    <div class="calendar-date">
                        <span class="day">{{\Carbon\Carbon::today()->addDays($i)->format('d.m')}}</span>
                        <span class="day-name">{{AppHelper::dayOfWeekend(\Carbon\Carbon::today()->addDays($i)->dayOfWeek)}}</span>
                    </div>
                </div>
                <div>
                    <div class="col-md-10 col-sm-9 col-xs-8 cal-scroll">
                        <div class="cal-hours">
                            @for($d = 0; $d < 7; $d++)
                                <a href="#!"
                                   data-price="{{ $times[ AppHelper::counter($d,$i) ]->price }}"
                                   data-id="{{ $times[ AppHelper::counter($d,$i) ]->id }}"
                                   data-dayoftheweek="{{ AppHelper::dayOfWeekend( \Carbon\Carbon::today()->addDays($i)->dayOfWeek ) }}"
                                   data-time="{{ AppHelper::formatTime( $times[ AppHelper::counter($d,$i) ] ) }}"
                                   data-daymonth="{{ AppHelper::monthOfYear( $times[AppHelper::counter($d,$i)] ) }}"
                                   class="@if($times[AppHelper::counter($d,$i)]->is_reserved) reserved @else buy_one_click_popup @endif cal-hour">
                                    {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $times[AppHelper::counter($d,$i)]->time)->format('H:i')}}
                                </a>
                            @endfor
                        </div>
                        <div class="price-blocks">
                            <div class="price-block price-amount-4">
                                {{$price[0]->value}} руб
                            </div>
                            <div class="price-block price-amount-3">
                                {{$price[1]->value}} руб
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            @endfor
        </div>
        <div class="default_button more_shedule">
            <button>Показать ещё</button>
        </div>

    </div>
</section>
<section id="rules">
    <div class="container">
        <h2>Правила игры</h2>
        <div class="row">
            <div class="col-md-4 strong_item">
                <div class="strong_circle">
                    <img src="images/brokenglass.png">
                </div>
                <div class="strong_text">
                    Запрещено ломать оборудование
                </div>
            </div>
            <div class="col-md-4 strong_item">
                <div class="strong_circle">
                    <img src="images/action.png">
                </div>
                <div class="strong_text">
                    Запрещено рименять грубую физическую силу к актерам
                </div>
            </div>
            <div class="col-md-4 strong_item">
                <div class="strong_circle">
                    <img src="images/lightning.png">
                </div>
                <div class="strong_text">
                    Запрещено пытаться открыть и проникнуть в места, обозначенные этим знаком
                </div>
            </div>
        </div>
    </div>
</section>
<section id="reviews">
    <div class="container">
        <h2>Отзывы</h2>
        <div class="grid">
            <div class="grid-sizer grid-sizer-3"></div>
            @foreach($vkmsg as $vk)
            <div class="grid-item grid-item-3">
                <div class="review-wrap">
                    <div class="review-wrap2">
                        <a @if(array_key_exists('screen_name', $vkprofiles[AppHelper::findProfileIndex($vk['from_id'], $vkprofiles)]))href="https://vk.com/{{$vkprofiles[AppHelper::findProfileIndex($vk['from_id'], $vkprofiles)]['screen_name']}}"@endif class="review_circle">
                            <img src="{{$vkprofiles[AppHelper::findProfileIndex($vk['from_id'], $vkprofiles)]['photo_100']}}" style="border-radius: 100%">
                        </a>
                        <div class="review_name">
                            {{ $vkprofiles[AppHelper::findProfileIndex($vk['from_id'], $vkprofiles)]['first_name'] }}
                        </div>
                        <div class="review_text">
                            {!!$vk['text']!!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="default_button more_reviews">
            <button>Показать ещё</button>
        </div>
        <div class="doyoulike">
            <div class="doyoulike_wrap">
                <h4>Понравился квест</h4>
                <p>Напиши отзыв в группе и поделись своими эмоциями с другими!</p>
                <a href="https://vk.com/kvest62">
                    <img src="images/vklogo.png" height="30">
                </a>
            </div>
        </div>
    </div>
</section>
<section id="contacts">
    <div class="container">
        <h2>Контакты</h2>
        <div class="row">
            <div class="col-md-5 info">
                <div class="info_item">
                    <img src="images/vkredlogo.png" height="30">
                    <a href="https://vk.com/kvest62">vk.com/kvest62</a>
                </div>
                <div class="info_item">
                    <img src="images/instagramred.png" height="30">
                    <a href="https://www.instagram.com/domstraha/">instagram.com/domstraha</a>
                </div>
                <div class="info_item">
                    <img src="images/pointer.png">
                    <a>г. Рязань, ул. Чкалова, д. 44</a>
                </div>
                <div class="info_item">
                    <img src="images/phoneicon.png">
                    <a>+7 (4912) 51-08-44</a>
                </div>
                <div class="info_item mail_icon">
                    <img src="images/mailicon.png" height="30">
                    <a>kvest062@yandex.ru</a>
                </div>
            </div>
            <div class="col-md-7 rating">
                <div class="row">
                    <a class="left_image col-md-8 col-xs-12" href="http://mir-kvestov.ru/">
                        <img src="images/mirquest.png">
                    </a>
                    <a class="right_image col-md-4 col-xs-12" href="http://mir-kvestov.ru/">
                        <img src="images/guildquest.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="how-to-arive">
            <p><b>Как добраться:</b> маршрутное такси №77 и №49, троллейбусы №2 и №5 до остановки «Кондитерская фабрика», далее 1 минуту пешком до дома №44 по ул. Чкалова.</p>
            </br>
            <p>На личном транспорте двигаясь по ул. Чкалова (одностороннее движение) до конца дома №44 (левое крыло), отдельный вход на цоколь.</p>
        </div>
    </div>
</section>
<div id="yandexmap">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=X5xFhBWAuH1STkfaQvXUF2fzghgb-lrm&amp;width=100%&amp;height=500&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
</div>
<footer>
    <div class="container footer">
        <div class="row">
            <div class="col-md-4 col-sm-12 logo_img" style="padding-top: 20px">
                <a class="to_top" href="#!">
                    <img src="images/logo.png" alt="Lattes theme logo">
                </a>
            </div>
            <div class="col-md-8 hidden-sm">
                <div class="footer-links">
                    <a class="to_about" href="#!">
                        О нас		</a>
                    <a class="to_shedule" href="#!">
                        Расписание		</a>
                    <a class="to_rules" href="#!">
                        Правила		</a>
                    <a class="to_reviews" href="#!">
                        Отзывы    </a>
                    <a class="to_contacts" href="!#">
                        Контакты    </a>
                    <a class="soclinks" href="https://vk.com/kvest62">
                        <img src="images/vkredlogo.png">
                    </a>
                    <a class="soclinks" href="https://www.instagram.com/domstraha/">
                        <img src="images/instagramred.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h1>
                    <span>+7(4912)51-08-44</span>
                </h1>

                <div class="addresses">
                    <img src="images/pin.png">
                    <span>
                                Рязань, ул. Чкалова, д. 44
                            </span>
                </div>
            </div>
            <div class="col-md-8 hidden-sm">
                <div class="row footer_rating" style="display: flex;">
                    <div class="col-md-8">
                        <div class="footer-description">
                            <a href="http://mir-kvestov.ru/" target="_blank">
                                <img src="images/mirquest.png" height="100" alt="Отзывы на Квест в реальности Биошок (Quest Moscow)" title="Отзывы на Квест в реальности Биошок (Quest Moscow)">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-description">
                            <a href="http://mir-kvestov.ru/" target="_blank">
                                <img src="images/guildquest.png" height="100" alt="Отзывы на Квест в реальности Биошок (Quest Moscow)" title="Отзывы на Квест в реальности Биошок (Quest Moscow)">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="order" style="display:none">
    <div class="order_background">
    </div>
    <div class="order_main">
        <div class="main_pic">

        </div>
        <div class="main_details">
            <h2 class="details_alright">
                Всё правильно?
            </h2>
            <p class="details_day">
                Четверг
            </p>
            <p class="details_date">
                        <span class="date_day">
                            29 Августа
                        </span>
                в
                <span class="date_time">
                            16.00
                        </span>
            </p>
            <p class="details_price">
                        <span class="price_price">
                            3500
                        </span>

                <span class="price_forteam">
                            - Стоимость за команду
                        </span>
            </p>
            <div class="details_close">X</div>
            <form action="reserve" class="buy_one_click_form" method="post" id="buy_one_click_form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="ID" value="231">

                <input placeholder="Имя*" required type="text" name="FIRSTNAME" value="" id="firstinput">

                <input placeholder="Фамилия" type="text" name="SECONDNAME" value="" id="secondinput">

                <input placeholder="Телефон*" required type="text" name="PHONE" value="" id="phoneinput">

                <input placeholder="E-Mail" type="email" name="EMAIL" value="" id="emailinput">

                <input type="submit" value="Купить" class="button-send" id="h2o_preorder_button_submit"/>
            </form>
        </div>
    </div>
</div>

@if( Session::has('success') || Session::has('fail') )
<div class="popup-notification">
    <div>
        {{Session::get('success')}}
        {{Session::get('fail')}}
    </div>
</div>
@endif


<!-- Scripts -->



</body>
</html>