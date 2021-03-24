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
                    @foreach($contents as $item)
                    <div class="col-12">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>اختر</th>
                            <th>تشغيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="{{url('view_content/'.$item[0]->id)}}">
                                    <span>{{$item[0]->title}}</span>
                                </a>
                            </td>
                            <td>
                                <div class="np-play play-status">
                                    <span class="fa fa-play" data-src="{{$item[0]->path}}"></span>
                                </div>
                                <audio id="audio_test" controls="controls" style="display:none">
                                    <source id="audioSource" src="">
                                </audio>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<!-- end main content -->
@stop
