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
        <div class="audio_list">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>اشترك</th>
                        <th>اختر</th>
                        <th>تشغيل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rbts as $val)
                    <tr>
                        <td>
                            <a class="btn" href="sms:{{$val->operator->code}}{{$Att}}{{$val->code}}">اجعلها كول تون</a>
                        </td>
                        <td>
                            <a href="{{url('view_rbt/'.$val->id)}}">
                                <span>{{$val->title}}</span>
                            </a>
                        </td>
                        <td>
                            <div class="np-play play-status">
                                <span class="fa fa-play" data-src="{{url($val->source)}}"></span>
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
