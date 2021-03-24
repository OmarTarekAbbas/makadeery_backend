@extends('front.master')
@section('content')

<style type="text/css">
    header, footer {
        display: none;
    }

    body {
        height: 0;
    }
</style>

            <div class="notification_page">

                <!-- <div class="logo_img">
                    <img src="{{asset('assets/front/img')}}/logo2.png" alt="">
                </div> -->

                <div class="sms">
                    <div class="shbka">
                        <div class="container">
                            <div class="oredoo">
                                <div class="row justify-content-center">
                                    <div class="col-xs-12">
                                        <img src="{{asset('assets/front/img')}}/oredoo.png" id="ooredoo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sms_title">
                        <h4>تم تجديد الاشتراك</h4>
                    </div>

                    <a href="{{url('home')}}" class="btn">الرئيسية</a>
                </div>
                         
            </div>

            <!-- ==================================== -->
            @stop
            <!-- ==================================== -->
