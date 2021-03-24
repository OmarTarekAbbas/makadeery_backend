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
</style>

<div class="landing_page">
    <div class="logo">
        <img src="{{url('assets/front/')}}/img/logo.png" alt="دليل المسلم">
    </div>

    <div class="text-info">
        <div class="ServiceTitle">Welcome to Health Service</div>
        <div class="hediv">
            <!-- The following input tag should not be sent, it's just an example -->
            96555626338
        </div>
        <div class="msisdndiv">
            <!-- The following input tag should not be sent, it's just an example -->
            <input type="text" value="" autofocus="" placeholder="Enter your mobile number">
        </div>
        <input type="submit" class="submitbutton" value="Send">
        <input type="submit" class="confirmbutton" value="Confirm">
    </div>
    <div class="disclaimerdiv">
        <!-- The following text should not be sent, it's just an example -->
        Disclaimer Text
    </div>
</div>

@stop