<!-- Start Header -->
@include("front.header")
<!-- End Header -->
<section class="all_ramdan">
  <div class="row m-0 w-100">
    <div class="col-12">
      <a href="{{isset($content) && $content != null ? $content->url : 'javascript:void(0)'}}">
        <h4 class="ramdan_menu text-center text-capitalize rounded">منيو رمضان</h5>
      </a>
    </div>

    <!--
    @foreach ($categorys as $category)
    <div class="{{$loop->last && $loop->iteration  % 2==1 ? 'col-12' : 'col-6'}}">
      <a href="{{route('subcategory', ['category' => $category ,'category_title' => setSlug($category->title)])}}" class="link_href">
        <div class="ramdan_category {{$loop->last && $loop->iteration % 2==1 ? 'ramdan_category_last' : ''}}">
          <img class="ramdan_category_img" src="{{$category->image}}" alt="{{$category->title}}">

          <p class="ramdan_category_title text-center text-capitalize">{{$category->title}}</p>
        </div>
      </a>
    </div>
    @endforeach
    -->

    @if(isset($content) && $content!=null)
      <section class="inner_category">
        <div class="row m-0">
          <div class="col-12">
            <video class="video rounded" controls>
              <source src="{{url('/uploads/content/path/'.$content->path)}}" type="video/mp4">
            </video>
          </div>

          <div class="col-12">
            <div class="episode">
              <h5 class="episode_title">{{$content->title}}</h5>

              <span class="episode_num">{{$hjrri_date->day.' - '.$hjrri_date->month .' - '.$hjrri_date->year}}</span>
            </div>
          </div>
        </div>
      </section>
    @endif

  </div>
</section>
<!-- Start Footer -->
@include("front.footer")
<!-- End Footer -->
