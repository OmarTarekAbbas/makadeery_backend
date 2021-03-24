@extends('front.master')
@section('content')
<?php
preg_match("/iPhone|iPad|iPod/", $_SERVER['HTTP_USER_AGENT'], $matches);
$os = current($matches);

switch ($os) {
    case 'iPhone':
        if (preg_match('/OS 8/', $_SERVER['HTTP_USER_AGENT']) || preg_match('/OS 9/', $_SERVER['HTTP_USER_AGENT'])) {
            $Att = '&body=';
        } else {
            $Att = ';';
        }
        break;
    case 'iPad': $Att = '&body=';
        break;
    case 'iPod': $Att = '&body=';
        break;
    default : $Att = '?body=';
        break;
}?>
<!-- main content -->
<div class="main">
    <div class="container">
        <div class="audio_page">

            <div class="title_content">
                <h6>{{$rbt->title}}</h6>
            </div>
            <div class="audio">
                <div class="audio-player">
                    <audio id="player" src="{{url($rbt->source)}}"></audio>

                    <div class="time-holder cf">
                        <div class="duration">00:50</div>
                        <div>/</div>
                        <div class="current-time">00:00</div>
                    </div>

                    <div class="audio-controls flex-container">
                        <div class="play-btn flex-col-1">
                            <span class="fa fa-play"></span>
                        </div>
                    </div>

                    <div class="seek-bar">
                        <div class="seek-bar-track"></div>
                        <div class="seek-bar-thumb"></div>
                    </div>
                </div>
            </div>
            <div class="btns">
                <a class="btn" href="sms:{{$rbt->operator->code}}{{$Att}}{{$rbt->code}}">اجعلها كول تون</a>
                <a class="btn" href="{{url('rbts/')}}">المزيد</a>
            </div>

        </div>
    </div>
</div>
@stop

