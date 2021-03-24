<!-- loading -->
<div class="loading-overlay">
    <div class="spinner">
        {{-- <img src="{!! DB::table('settings')->where('key','like','%loading_image%')->first()->value !!}" alt="loading"> --}}
        <img src="{{url('').'/'. DB::table('settings')->where('key','like','%loading_image%')->first()->value }}"
            alt="loading">
    </div>
</div>
<!-- end loading -->

<style>
a:hover {
    color: #f3e5b8;
    text-decoration: none;
}
</style>

<!-- footer -->
<footer>

</footer>
<!-- end footer -->

<!-- script -->
<script src="{{url('assets/front/')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{url('assets/front/')}}/js/popper.min.js"></script>
<script src="{{url('assets/front/')}}/js/bootstrap.min.js"></script>
<script src="{{url('assets/front/')}}/js/wow.min.js"></script>
<script src="{{url('assets/front/')}}/js/owl.carousel.min.js"></script>
<script src="{{url('assets/front/')}}/js/player_audio.js"></script>
<script src="{{url('assets/front/')}}/js/merath_calculation.js"></script>
<script src="{{url('assets/front/')}}/js/script.js"></script>
<script>
/* Start Active Menu */
$(function() {
    // this will get the full URL at the address bar
    var url = window.location.href;
    // passes on every "a" tag
    $("ul li a").each(function() {
        // checks if its the same on the address bar
        if (url == (this.href)) {
            $("#home").removeClass("active");
            //console.log('hi omar')
            $(this).closest("li a").addClass("active");
            $(this).closest(".submenu").css("display", "block");
        }
    });
});
/* End Active Menu */
</script>

@yield('script')

</body>

</html>
