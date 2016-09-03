@extends('admin.sidebar')

@section('styles')
    <link href="{{asset('adminbuild/css/admin.style.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="right_col" role="main" style="min-height: 1647px;">
        <h1>Слайдер наверху</h1>
        {{csrf_field()}}
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content">
                <div id="items" class="row">
                    @foreach($images as $image)
                        <div class="col-md-55" data-id="{{$image->id}}" id="image-{{$image->id}}">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{asset('images/slider/top/'.$image->file_path)}}" alt="image" />
                                    <div class="mask">
                                        <p>&nbsp</p>
                                        <div class="tools tools-bottom">
                                            <a href="#!" data-id="{{$image->id}}" class="delete_image_top"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption" style="text-align: center; text-transform: uppercase">
                                    <p>{{$image->name}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection

@section('scripts')

@endsection