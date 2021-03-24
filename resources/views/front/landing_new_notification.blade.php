@extends('front.master')
@section('content')

<style type="text/css">
header,
footer {
    display: none;
}

body {
    height: 0;
}

.landing_page .text-info{
  width: 90%;
  margin-top: 13px;
}

</style>

<div class="landing_page">
    <div class="logo">
        <img src="{{url('assets/front/')}}/img/logo.png" alt="دليل المسلم">
    </div>

    <div class="text-info">
        <div class="notificationmessage">
            <!-- The following text should not be sent, it's just an example -->
            You have been successfully registered
        </div>
    </div>
    <div class="disclaimerdiv">
        <!-- The following text should not be sent, it's just an example -->
        Disclaimer Text
    </div>
</div>

@stop