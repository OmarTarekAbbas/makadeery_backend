<!-- Start Header -->
@include("front.header")
<!-- End Header -->

<section class="sub_category">
    <div class="row m-0 w-100">
        <div class="col-12">
            <h3 class="ramdan_menu text-center text-capitalize rounded">اختر مقاديرك</h5>
        </div>

        @forelse ($contents as $content)
        <div class="col-6">
            <a href="{{route('meal',$content->id)}}" class="link_href">
                <div class="ramdan_category">
                    <p class="ramdan_category_desc mb-0">{{$content->title}}</p>
                </div>
            </a>
        </div>
    @empty
    @include("front.error404")
    @endforelse

    </div>
</section>
<!-- Start Footer -->
@include("front.footer")
<!-- End Footer -->
