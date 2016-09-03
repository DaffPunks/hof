@extends('admin.sidebar')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/r-2.1.0/sc-1.4.2/datatables.min.css"/>
    <link href="{{asset('adminbuild/css/admin.style.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="right_col" role="main" style="min-height: 1647px;">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Расписание</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped table-bordered calendar-table">
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
                        @foreach($old as $item)
                            <tr class="select_row @if($item->is_reserved) reserved @endif"  id="row-id-{{$item->id}}">
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
    </div>
    </div>

    <div class="clearfix"></div>
    </div>

@endsection

@section('scripts')

@endsection