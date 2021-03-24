@extends('front.master')
@section('content')


<!-- main content -->
<div class="main">
    <div class="container">
        <div class="audio_list">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>اختر</th>
                        <th>تشغيل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contents as $value)
                    <tr>
                        <td>
                            <a href="{{url('view_content/'.$value->id)}}">
                                <span>{{$value->title}}</span>
                            </a>
                        </td>
                        <td>
                            <div class="np-play play-status">
                                <span class="fa fa-play" data-src="{{url($value->video)}}"></span>
                            </div>
                            <audio id="audio_test" controls="controls" style="display:none">
                                <source id="audioSource" src="">
                            </audio>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
