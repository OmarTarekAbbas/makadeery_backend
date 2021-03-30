<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Makadeery</title>
  <link rel="shortcut icon" sizes="16x16" href="{{asset('front/images/Cutting/Splash/logo_strap.png')}}">
  <link rel="stylesheet" href="{{asset('front/css/all_css_minify.css')}}">
</head>

<body>
  <header class="header_Nav">
    <input type="checkbox" id="menu-toggle">
    <label class="hamburger-wrapper" for="menu-toggle">
      @include("front.svg.menu")
    </label>

    <nav id="test" class="navbar_btn">
      <ul id="accordion" class="accordion list-unstyled">
        <li id="indexed" class="">
          <a href="{{url('')}}" class="link text-capitalize link_href">الرئيسية
            @include("front.svg.home")
          </a>
        </li>

        <li>
          <a href="{{route('contents', ['search'=> 'لحوم'])}}" class="link text-capitalize link_href">لحوم
            @include("front.svg.meat")
          </a>
        </li>

        <li>
          <a href="{{route('contents', ['search'=> 'اسماك'])}}" class="link text-capitalize link_href">اسماك
            @include("front.svg.fish")
          </a>
        </li>

        <li>
          <a href="{{route('contents', ['search'=> 'فراخ'])}}" class="link text-capitalize link_href">فراخ
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <section class="search_form">
              <h5 class="find_your_food text-capitalize text-center font-weight-bold">Search</h5>

                            <form action="{{route('contents')}}" class="search-container">
                                @if(request()->has('OpID'))
                                <input type="hidden" name="OpID" value="{{request()->get('OpID')}}">
                                @endif
                                <input type="text" name="search" value="{{ request()->get('search') }}"
                                    class="form-control search-bar" placeholder="بحث ...">
                                <button class="btn search-icon"><i class="far fa-search"></i></button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

    <main class="main close_nav">


