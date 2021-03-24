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

        <div class="landing_page">
            <div class="logo" id="image">
                <img src="{{url('assets/front/')}}/img/logo.png" alt="دليل المسلم">
            </div>

            <div class="title">
                <h3>الغاء الاشتراك</h3>
            </div>

            <div class="shbka">
                    <div class="container">
                        <div class="oredoo">
                            <div class="row justify-content-center">
                                <div class="col-xs-12">
                                    <img src="{{asset('assets/front/img')}}/viva.png" id="viva">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="form_content">
                        <form action="#" id="form">
                            <div class="form-group form-inline">
                                <label for="phone"><span>965</span></label>
                                <input type="tel" class="form-control" id="phone" placeholder="ادخل رقم تليفونك" name="phone" required pattern="[0-9]{8}" autofocus>
                                <span class="validity"></span>
                            </div>
                            <button id="subscribe_button" class="btn" type="submit">الغاء</button>
                        </form>
                    </div>
                </div>                
            </div>


            <div class="copy-digizone">
        <p>Digizone. All rights reserved &copy; <span>2019</span></p>
    </div>


@stop