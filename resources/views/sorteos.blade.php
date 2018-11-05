@extends('layout.master')
@section('title', 'Page Title')
@section('content')
@foreach ($publicaciones as $v)
    <div class="col-lg-4 col-md-4 portfolio-item" style="padding-top: 15px;">
        <div class="card h-75" >
            <a href=""><img class="card-img-top" src="{{$v['img']}}" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">{{$v['desc']}}</a>
                </h4>
                <p class="card-text">{{$v['nombre']}}</p>
            </div>
        </div>
    </div>
@endforeach
@stop