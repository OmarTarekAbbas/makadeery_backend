<!-- Start Header -->
@include("front.header")
<!-- End Header -->
<style>
  body {
    background-image: url('{{url("/front/images/Cutting/ramadan_bg_res.jpg")}}');
  }

  @media (min-width: 1030px) {
    body {
      background-size: 25% 100%;
    }
  }

  .header_Nav {
    background: #FFF;
    height: 45px;
  }

  @media (min-width: 1024px) and (max-width: 1029.9px) {
    .header_Nav {
      height: 60px;
    }
  }
</style>
@if(isset($content) && $content!=null)
  <section class="inner_category">
    <div class="row m-0">
      <div class="col-12">
        <video class="video rounded" controls>
          <source src="{{$content->path}}" type="video/mp4">
        </video>
      </div>

      <!-- <div class="grid_view">
              <a href="javascript:void(0);" class="inner_share">
                  <i class="fas fa-ellipsis-h"></i>
              </a>

              <a href="javascript:void(0);" class="inner_share">
                  <i class="fas fa-bars"></i>
              </a>

              <a href="javascript:void(0);" class="inner_share">
                  <i class="fas fa-share"></i>
              </a>

              <a href="javascript:void(0);" class="inner_share">
                  <i class="fas fa-thumbs-down"></i>
              </a>

              <a href="javascript:void(0);" class="inner_share">
                  <i class="fas fa-thumbs-up"></i>
              </a>
          </div> -->

      <div class="col-12">
        <div class="episode">
          <h5 class="episode_title">{{$content->title}}</h5>

          <!-- <span class="episode_num">1- رمضان - <span class="episode_hegri">1442</span></span> -->
          <span class="episode_num">{{$hjrri_date->day.' - '.$hjrri_date->month .' - '.$hjrri_date->year}}</span>
        </div>
      </div>
    </div>
  </section>
@else
  @include("front.error404")
@endif
<!-- Start Footer -->
@include("front.footer")
<!-- End Footer -->
