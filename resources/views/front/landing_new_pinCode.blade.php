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
        <div class="pindiv">
            <!-- The following input tag should not be sent, it's just an example -->
            <input type="text" value="" autofocus="" placeholder="Enter Pin Code">
        </div>
        <input type="submit" class="submitbutton" value="Subscibe">
        <input type="submit" class="confirmbutton" value="Confirm">
    </div>
    <div class="disclaimerdiv">
        <!-- The following text should not be sent, it's just an example -->
        Disclaimer Text
    </div>
</div>

@stop