@extends('front.master')
@section('content')
<style>
    .main .title img{
        width: 35%;
        margin: 0 auto;
        display: block;
        border: 2px solid #f3e5b8;
        border-radius: 5px;
    }
    .main .title h6 {
        text-align: center;
        color: #f3e5b8;
        font-size: 18px;
        font-weight: bold;
        padding-top: 5px;
    }
    .main .content {
        padding-top: 5%;
        width: 90%;
        margin: 0 auto;
        text-align: center;
    }
    .main .content a img {
        border: 2px solid #f3e5b8;
        border-radius: 5px;
        display: block;
        width: 100%;
    }
    .main .content a h6 {
        color: #f3e5b8;
        font-size: 12px;
        padding-top: 3px;
    }
</style>    
<!-- main content -->
<div class="main">
    <div class="container">
        <div class="title">
            <img src="{{url($provider->image)}}" alt="{{$provider->title}}">
            <h6>{{'الشيخ '.$provider->title}}</h6>
        </div>
        <div class="content">
            <div class="row">
                <?php $services = provider_service($provider->id); ?>
                @foreach($services as $value)
                <div class="col-4">
                    <a href="{{url('list_contents/'.$value->id)}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url($value->image)}}" alt="{{$value->title}}">
                        <h6>{{$value->title}}</h6>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- end main content -->
@stop
