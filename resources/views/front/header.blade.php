<!DOCTYPE html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <!-- IE compatibility meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for phons -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- links -->
    <link rel="stylesheet" href="{{url('assets/front/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('assets/front/')}}/css/animate.css">
    <link rel="stylesheet" href="{{url('assets/front/')}}/css/all.min.css">
    <link rel="stylesheet" href="{{url('assets/front/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('assets/front/')}}/css/owl.theme.default.css">
    <link rel="stylesheet" href="{{url('assets/front/')}}/css/audioplayer.css">
    <link rel="stylesheet" href="{{url('assets/front/')}}/css/main-style.css">

    <!-- title -->
    <title>{!! DB::table('settings')->where('key','like','%title%')->first()->value !!}</title>
    <style>
    .active{
        background: #b63b4d;
        color: #FFF;
    }
    header{
        background: {!! DB::table('settings')->where('key','like','%navbar%')->first()->value !!}
    }
    footer{
        background: {!! DB::table('settings')->where('key','like','%footer%')->first()->value !!}
    }

    </style>
</head>

<body>

    <!-- navbar -->
    <header >
        <div class="container-fluid">
            <div class="row">

                <!-- hamburger -->
                <div class="col-4">
                    <input type="checkbox" id="menu-toggle">
                    <label class="hamburger-wrapper" for="menu-toggle">
                        <span class="hamburger"></span>
                    </label>
                    <nav>
                        <div class="spacer"></div>
                        <!-- accordion -->
                        <ul id="accordion" class="accordion list-unstyled">
                            {{-- <li>
                                <div class="link">Islamic <i class="fa fa-chevron-down"></i>
                                </div>

                                <ul class="submenu list-unstyled">
                                    <li><a href="{{url('sebha')}}">السبحة الإلكترونية</a></li>
                                    <li><a href="{{url('zakah')}}">حساب الزكاة</a></li>
                                    <li><a href="{{url('merath')}}">حساب المواريث</a></li>
                                    @foreach(general_service() as $val)
                                    <li><a href="{{url('list_contents/'.$val->id)}}">{{$val->title}}</a></li>
                                    @endforeach
                                    <li><a href="{{url('salah_time')}}">مواقيت الصلاة</a></li>
                                    <li><a href="{{url('mosque')}}">اقرب مسجد</a></li>
                                    <li><a href="{{url('azan')}}">اذان</a></li>
                                    <li><a href="{{url('rbts')}}">كول تون</a></li>
                                </ul>
                            </li> --}}
                            <!---------->
                            @foreach(get_providers() as $val)
                            <li >
                                <div class="link">{{'الشيخ '.$val->title}}<i class="fa fa-chevron-down">
                            </i>
                                </div>
                                <ul class="submenu list-unstyled">
                                    <?php $services = provider_service($val->id);?>
                                    @foreach($services as $value)
                                    <li><a href="{{url('list_contents/'.$value->id)}}" class="">{{$value->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>

                    </nav>
                </div>

                <div class="col-4 h_title">
                    <div class="page_title">
                        <img src="{{url('').'/'. DB::table('settings')->where('key','like','%header_logo%')->first()->value }}" alt="islamic" onclick="gotohome()">
                    </div>
                </div>
                <div class="col-4 h_arrow">
                    <a class="arrow back" href="#"><i class="fas fa-angle-left fa-lg"></i></a>
                </div>

            </div>
        </div>
    </header>
    <!-- end navbar -->


    <script>
        function gotohome(){
    window.location.href='{{url("/home")}}' ;
}
    </script>
