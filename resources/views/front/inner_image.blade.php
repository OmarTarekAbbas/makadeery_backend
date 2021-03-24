@extends('front.master')
@section('content')

<!-- main content -->
<div class="main">
    <div class="container">
        <div class="image_page">
            <div class="title_content">
                <h6>{{$content->title}}</h6>
            </div>

            <div class="video">
                <img src="{{url($content->video)}}" alt="" class="mx-auto d-block text-center" width="100%">
            </div>

            <div class="btns">
                <a class="btn" href="{{url('list_contents/'.$content->service_id)}}">المزيد</a>
            </div>
            <div class="btns">
                <a class="btn" href="{{url($content->video)}}"download>تحميل</a>
            </div>
        </div>
    </div>
</div>

@stop

