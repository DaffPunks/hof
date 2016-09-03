<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="ROBOTS" CONTENT="NOINDEX">

    <title>Админ-панель | Проклятый Бар</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{url('images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{url('images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{url('images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('images/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{url('images/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link href="{{asset('css/build/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('adminbuild/css/build/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('adminbuild/css/build/custom.min.css')}}" rel="stylesheet">
    <!-- User styles -->
    @yield('styles')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{url('/admin')}}" class="site_title"><i class="fa fa-code" style="border: 0px"></i> <span>Проклятый Бар</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="{{asset('images/administrator_icon.jpg')}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Привет,</span>
                        <h2>{{Auth::user()->name}}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>&nbsp</h3>
                        <ul class="nav side-menu">
                            <li><a href="{{url('/admin')}}"><i class="fa fa-home"></i> Текущие бронирования </a>
                            </li>
                            <li><a><i class="fa fa-calendar"></i> Расписание <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('/admin/calendar')}}">Календарь</a></li>
                                    <li><a href="{{url('/admin/history')}}">История</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/admin/pricing')}}"><i class="fa fa-rub"></i> Контроль цен </a>
                            </li>
                            <li><a><i class="fa fa-image"></i> Слайдер наверху <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('/admin/topslider')}}">Картинки</a></li>
                                    <li><a href="{{url('/admin/topslider/upload')}}">Загрузить</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-image"></i> Слайдер посередине <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url('/admin/midslider')}}">Картинки</a></li>
                                    <li><a href="{{url('/admin/midslider/upload')}}">Загрузить</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/admin/email')}}"><i class="fa fa-envelope"></i> Email-рассылка </a>
                            </li>
                            <li><a href="{{url('/admin/register')}}"><i class="fa fa-plus-square"></i> Новый пользователь </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('images/administrator_icon.jpg')}}" alt="">Админ
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out pull-right"></i> Выйти</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

    @yield('content')

    <!-- /page content -->
    </div>
</div>
<footer style="background-color: #f6f6f6"></footer>

<!-- jQuery -->
<script src="{{asset('js/build/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/build/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('adminbuild/js/build/fastclick.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('adminbuild/js/build/custom.min.js')}}"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/r-2.1.0/sc-1.4.2/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/r-2.1.0/sc-1.4.2/datatables.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/Sortable/1.4.2/Sortable.min.js"></script>
<script src="{{asset('adminbuild/js/build/remodal.min.js')}}"></script>
<script src="{{asset('adminbuild/js/build/jquery.knob.min.js')}}"></script>
<script src="{{asset('adminbuild/js/build/dropzone.min.js')}}"></script>

<script src="{{asset('adminbuild/js/admin.custom.js')}}"></script>
@yield('scripts')
</body>
</html>