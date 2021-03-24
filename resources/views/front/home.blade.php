@extends('front.master')
@section('content')

<style>
    /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
    #map {
        height: 55vh;
        width: 100%;
        border: 3px solid #f5c52a;
    }

    .gm-style .gm-style-iw {
        text-align: right !important
    }

</style>

<!-- main content -->
<div class="main">
    <div class="container">
        @if($main_video)
        <a href="{{url('view_content/'.$main_video->id)}}">
        <div class="video">
            {{--  <video class="mx-auto d-block text-center" id="myVideo" width="100%" controls>
                <source src="{{$main_video->video}}" type="video/mp4">
            </video>  --}}

            <img src="{{$main_video->image_preview}}" style="width:100%;height:200px" >

        </div>
        <h6 style="color: #f3e5b8; margin:10px;text-align:center">{{$main_video->title}}</h6>
    </a>


        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <h5 class="modal-title" id="exampleModalLabel">مواقيت الصلاة</h5>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>{{$hjrri_date->day.' - '.$hjrri_date->month .' - '.$hjrri_date->year}}</th>
                                        <th>{{date('d/m/Y')}}</th>
                                    </tr>
                                    <tr>
                                        <th>الصلاة</th>
                                        <th>الوقت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($prayer_times as $key=>$value)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$value}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal2">اقرب مسجد</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->



            <!-- Modal2 -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <h5 class="modal-title" id="exampleModalLabel">اقرب مسجد</h5>
                        </div>
                        <div class="modal-body">
                            <div id="map"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal">مواقيت الصلاة</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal2 -->

        @endif
        <!------------------------------------------------------------->

        <div class="el_shuo5">
            <div class="row">
                @foreach($providers as $provider)
                <div class="col-6">
                    <a href="{{url('list_services/'.$provider->id)}}">
                        <img src="{{url($provider->image)}}" alt="{{$provider->title}}">
                        <h6>{{$provider->title}}</h6>
                    </a>
                </div>
                @endforeach

            </div>
        </div>

        <!---------------------------------------------------------------------->
        {{-- <div class="el_5damat">
            <h2> دليل المسلم</h2>
            <div class="row">

                <div class="col-4">
                    <a href="{{url('sebha')}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url('assets/front/')}}/img/2.png" alt="qases">
                        <h6>السبحة</h6>
                    </a>
                </div>

                <div class="col-4">
                    <a href="{{url('zakah')}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url('assets/front/')}}/img/3.png" alt="qases">
                        <h6>حساب الزكاه</h6>
                    </a>
                </div>

                <div class="col-4">
                    <a href="{{url('merath')}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url('assets/front/')}}/img/4.png" alt=" qases">
                        <h6>حساب المواريث</h6>
                    </a>
                </div>
                @foreach($generalService as $service)
                <div class="col-4">
                    <a href="{{url('list_contents/'.$service->id)}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url($service->image)}}" alt="{{url($service->image)}}">
                        <h6>{{$service->title}}</h6>
                    </a>
                </div>
                @endforeach

                <div class="col-4">
                    <a href="{{url('salah_time')}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url('assets/front/')}}/img/7.png" alt="qases">
                        <h6>مواقيت الصلاة</h6>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{url('mosque')}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url('assets/front/')}}/img/8.png" alt="qases">
                        <h6>اقرب مسجد</h6>
                    </a>
                </div>

                <div class="col-4">
                    <a href="{{url('azan')}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url('assets/front/')}}/img/9.png" alt="qases">
                        <h6>اذان</h6>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{url('rbts')}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url('assets/front/')}}/img/9.png" alt="qases">
                        <h6>كول تون</h6>
                    </a>
                </div>
            </div>
        </div> --}}


        <!-------------------------------------------------------------------------------->
        <div class="el_5damat el_5damat_2">
            <h2>الموضوعات</h2>
            <div class="row">
                @foreach($topics as $topic)
                <div class="col-4">
                    <a href="{{url('list_contents/'.$topic->id)}}">
                        <img class="wow pulse" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="{{url($topic->image)}}" alt="{{$topic->title}}">
                        <h6>{{$topic->title}}</h6>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@stop
<!--====================== Modal =================== -->
@section('script')
<script src="{{url('assets/front/')}}/js/mosque.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkPbH3-wDpLOsruf4eBsae2q3xnb6153s&libraries=places&callback=initMap&language=ar" async defer></script>
@stop
