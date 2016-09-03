@extends('admin.sidebar')

@section('styles')
    <link href="{{asset('adminbuild/css/build/dropzone.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="right_col" role="main">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Цены </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form action="{{url('/admin/setprice')}}" method="post" id="demo-form2" class="form-horizontal form-label-left" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Первое значение (10:00 - 16:00)
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="first-price" required="required" class="form-control col-md-7 col-xs-12" data-parsley-id="5" value="{{$config[0]->value}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Второе значение (18:00 - 22:00)
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="last-price" name="last-name" required="required" class="form-control col-md-7 col-xs-12 " data-parsley-id="7" value="{{$config[1]->value}}">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Изменить</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection