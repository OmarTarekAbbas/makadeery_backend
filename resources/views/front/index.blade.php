<!-- Start Header -->
@include("front.header")
<!-- End Header -->

<section class="all_ramdan">
    <div class="row m-0 w-100">
        <div class="col-12">
            <h4 class="ramdan_menu text-center text-capitalize rounded">منيو رمضان</h5>
        </div>
        @foreach ($categorys as $category)
        <div class="col-6">
            <a href="category.php">
                <div class="ramdan_category">
                    <img class="ramdan_category_img" src="{{$category->image}}" alt="{{$category->title}}">

                    <p class="ramdan_category_title text-center text-capitalize">{{$category->title}}</p>
                </div>
            </a>
        </div>
        @endforeach

        <!-- <div class="col-6">
            <a href="category.php">
                <div class="ramdan_category">
                    <img class="ramdan_category_img" src="{{asset('front')}}/images/Cutting/Home/Photos/02.jpg"
                        alt="Egypt Food">

                    <p class="ramdan_category_title text-center text-capitalize">مصرى</p>
                </div>
            </a>
        </div>

        <div class="col-6">
            <a href="category.php">
                <div class="ramdan_category">
                    <img class="ramdan_category_img" src="{{asset('front')}}/images/Cutting/Home/Photos/03.jpg"
                        alt="Chinese Food">

                    <p class="ramdan_category_title text-center text-capitalize">صينى</p>
                </div>
            </a>
        </div>

        <div class="col-6">
            <a href="category.php">
                <div class="ramdan_category">
                    <img class="ramdan_category_img" src="{{asset('front')}}/images/Cutting/Home/Photos/04.jpg"
                        alt="Hendi Food">

                    <p class="ramdan_category_title text-center text-capitalize">هندى</p>
                </div>
            </a>
        </div>

        <div class="col-12">
            <a href="category.php">
                <div class="ramdan_category ramdan_category_last">
                    <img class="ramdan_category_img" src="{{asset('front')}}/images/Cutting/Home/Photos/05.jpg"
                        alt="Fast Food">

                    <p class="ramdan_category_title text-center text-capitalize">اكلات سريعة</p>
                </div>
            </a>
        </div> -->

    </div>
</section>
<!-- Start Footer -->
@include("front.footer")
<!-- End Footer -->
