<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makadeery</title>
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="{{asset('front/css/style_ar.css')}}">
</head>

<body>
    <header class="header_Nav">
        <input type="checkbox" id="menu-toggle">
        <label class="hamburger-wrapper" for="menu-toggle">
            <svg class="burger_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 50 30" xml:space="preserve">
                <rect x="13.2" y="1.2" class="st0" width="32.9" height="5.2" />
                <rect x="3.8" y="12.9" class="st0" width="32.7" height="5" />
                <rect x="13.2" y="23.6" class="st0" width="32.9" height="5.2" />
            </svg>
        </label>

        <nav id="test" class="navbar_btn">
            <ul id="accordion" class="accordion list-unstyled">
                <li id="indexed" class="">
                    <a href="{{url('')}}" class="link text-capitalize">الرئيسية
                    @include("front.svg.home")
                    </a>
                </li>

                <li>
                    <a href="category.php" class="link text-capitalize">لحوم
                    @include("front.svg.meat")
                    </a>
                </li>

                <li>
                    <a href="category.php" class="link text-capitalize">اسماك
                        @include("front.svg.fish")
                    </a>
                </li>

                <li>
                    <a href="category.php" class="link text-capitalize">فراخ
                    @include("front.svg.chicken")
                    </a>
                </li>
            </ul>
        </nav>

        <div class="search_btn">
            <a data-toggle="modal" data-target="#exampleModal">
                <i class="far fa-search"></i>
            </a>
        </div>
    </header>

    <div class="search_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <section class="search_form">
                            <h5 class="find_your_food text-capitalize text-center font-weight-bold">Search</h5>

                            <form action="{{route('contents')}}" class="search-container">
                                <input type="text" name="search" value="{{ request()->get('search') }}" class="form-control search-bar" placeholder="بحث ...">
                                <button class="btn search-icon"><i class="far fa-search"></i></button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main close_nav">
