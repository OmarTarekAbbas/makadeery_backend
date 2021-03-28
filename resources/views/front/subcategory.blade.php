<!-- Start Header -->
@include("front.header")
<!-- End Header -->

<section class="list_category">
    <div class="row m-0 w-100">
        <div class="col-12">
            <h3 class="ramdan_menu text-center text-capitalize rounded">اختر مقاديرك</h5>
        </div>
        @foreach ($category->sub_cats as $sub_cats)
        <div class="col-12">
            <a href="{{route('contents', ['category_id'=> $sub_cats->id])}}" class="link_href">
                <div class="ramdan_category_last">
                    <img class="ramdan_category_img" src="{{$sub_cats->image}}" alt="{{$sub_cats->title}}">
                </div>
            </a>
        </div>
        @endforeach
</section>
<!-- Start Footer -->
@include("front.footer")
<!-- End Footer -->
