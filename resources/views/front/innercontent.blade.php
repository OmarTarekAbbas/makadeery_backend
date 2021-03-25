<!-- Start Header -->
@include("front.header")
<!-- End Header -->

<section class="inner_category">
    <div class="row m-0">
        <div class="col-12">

            <video class="video" controls>
                <source src="{{$content->path}}" type="video/mp4">
            </video>
        </div>

        <div class="grid_view">
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
        </div>

        <div class="col-12">
            <div class="episode">
                <h5 class="episode_title">{{$content->title}}</h5>

                <span class="episode_num">1- رمضان - <span class="episode_hegri">1442</span></span>
            </div>
        </div>
    </div>
</section>

<script>
document.body.style.backgroundSize = "25% 100%";
</script>
<!-- Start Footer -->
@include("front.footer")
<!-- End Footer -->
