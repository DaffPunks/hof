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
                        <h2>Email для рассылки </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left">
                            @foreach($emails as $email)
                            <form action="{{url('/admin/email/delete')}}" method="post">
                                <div class="form-group" style="margin-bottom: 0">
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{$email->email}}" disabled>
                                            <input type="hidden" value="{{$email->id}}" name="id">
                                            {{csrf_field()}}
                                            <span class="input-group-btn">
                                                  <button type="submit" class="btn btn-danger">Удалить</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                            <form action="{{url('/admin/email/add')}}" method="post">
                                <div class="form-group" style="margin-bottom: 0">
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control" value="">
                                            {{csrf_field()}}
                                            <span class="input-group-btn">
                                                  <button type="submit" class="btn btn-primary">Добавить</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="divider-dashed"></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection