@extends('admin.sidebar')

@section('styles')
    <link href="{{asset('adminbuild/css/build/remodal.css')}}" rel="stylesheet">
    <link href="{{asset('adminbuild/css/build/remodal-default-theme.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/r-2.1.0/sc-1.4.2/datatables.min.css"/>
    <link href="{{asset('adminbuild/css/admin.style.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div class="right_col" role="main" style="min-height: 1647px;">
        <!-- top tiles -->
        <div class="row tile_count">
            <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Кол-во заказов</span>
                <div class="count">{{$count}}</div>
            </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="dashboard_graph">
                    <div class="row x_title">
                        <div class="col-md-12">
                            <h3>Бронирование</h3>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Таблица бронирований</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-striped table-bordered table-hover main-table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Дата</th>
                                        <th>Время</th>
                                        <th>Цена</th>
                                        <th>Имя</th>
                                        <th>Фамилия</th>
                                        <th>Телефон</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($response as $item)
                                    <tr class="select_row" id="row-id-{{$item->id}}" style="cursor: pointer">
                                        <th class="row_id" scope="row">{{$item->id}}</th>
                                        <td class="row_date">{{AppHelper::formatDate($item)}}</td>
                                        <td class="row_time">{{AppHelper::formatTime($item)}}</td>
                                        <td class="row_price">{{$item->price}}</td>
                                        <td class="row_firstname">{{$item->first_name}}</td>
                                        <td class="row_lastname">{{$item->last_name}}</td>
                                        <td class="row_phone">{{$item->phone}}</td>
                                        <td class="row_email">{{$item->email}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

        <div class="remodal" data-remodal-id="modal">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h1>Бронирование</h1>
            <div class="remodal-true-wrapper">
                <div class="r_field remodal_id" style="display: none"></div>
                <div class="r_field remodal_data">Дата: <span></span></div>
                <div class="r_field remodal_time">Время: <span></span></div>
                <div class="r_field remodal_price">Цена: <span></span></div>
                <div class="r_field remodal_firstname">Имя: <span></span></div>
                <div class="r_field remodal_lastname">Фамилия: <span></span></div>
                <div class="r_field remodal_phone">Телефон: <span></span></div>
                <div class="r_field remodal_email">Email: <span></span></div>
            </div>
            <br>
                {{csrf_field()}}
            <button data-remodal-action="cancel" class="remodal-cancel">Удалить</button>
            <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
        </div>
@endsection

@section('scripts')

@endsection