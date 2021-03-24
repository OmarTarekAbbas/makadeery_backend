@extends('front.master')
@section('content')
<style>
.main h6 {
    text-align: center;
    color: #f3e5b8;
    margin-bottom: 15%;
}

.main .video_content a video {
    width: 100%;
    border: 2px solid #f3e5b8;
    border-radius: 5px;
}
.video_content .over{
    height: 130px;
}
.video_content a img{
    height: 130px;
}
</style>
<!-- main content -->


<div class="main">
    <div class="container">
        <div class="row">
            @foreach($contents as $item)
            @if($item[0]->content_type_id == 5)
            <div class="col-12">
                <div class="video_content">
                    <div class="over"></div>
                    <a href="{{url('view_content/'.$item[0]->id)}}">
                        <div class="play_icon"><i class="far fa-play-circle fa-2x"></i></div>

                        <div class="title_content">
                            <img src="{{$item[0]->image_preview}}" alt="">
                        </div>
                    </a>
                </div>
                <h6>{{$item[0]->title}}</h6>
            </div>
            @elseif ($item[0]->content_type_id == 3)
            <div class="col-12">
                <div class="video_content">
                    <a href="{{url('view_content/'.$item[0]->id)}}">
                        <div class="over"></div>
                        <img src="{{$item[0]->path}}" alt="{{$item[0]->title}}">
                    </a>
                </div>
                <h6>{{$item[0]->title }}</h6>
            </div>
            @elseif ($item[0]->content_type_id == 4)
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
            @elseif ($item[0]->content_type_id == 6)
            <div class="col-12">
                <div class="video_content">
                    <div class="over"></div>
                    <a href="{{url('view_content/'.$item[0]->id)}}">
                        <div class="play_icon"><i class="far fa-play-circle fa-2x"></i></div>
                        <div class="title_content">
                            <img src="{{$item[0]->image_preview}}" alt="">
                        </div>
                    </a>
                </div>
                <h6>{{$item[0]->title}}</h6>
            </div>
            @else
            <div class="col-12">
                <a href="{{url('view_content/'.$item[0]->id)}}">
                    {!! $item[0]->path !!}
                </a>
                <h6>{{$item[0]->title}}</h6>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<!-- end main content -->
@stop
