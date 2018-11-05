@extends('layout.master')
@section('title', 'Page Title')
@section('content')
@foreach ($publicaciones as $v)
    <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
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