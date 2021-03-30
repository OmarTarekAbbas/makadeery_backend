</main>

<div class="loading-overlay">
  <div class="spinner">
    <img src="{{asset('front')}}/images/Cutting/Splash/logo_strap.png" alt="loading">
  </div>
</div>

<script src="{{asset('front')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('front')}}/js/popper.min.js"></script>
<script src="{{asset('front')}}/js/bootstrap.min.js"></script>
<script src="{{asset('front')}}/js/script_minify.js"></script>


<script>
   op_id = {{ isset($_REQUEST['OpID']) ? 1 : 0 }}
   if (op_id) {
     var operator_id = {{ isset($_REQUEST['OpID']) ? $_REQUEST['OpID'] : '' }}
     $('.link_href').each(function() {
       console.log($(this));
       var $this = $(this);
       var _href = $this.attr("href");
          if (_href.includes('?')) {
            $this.attr("href", _href + '&OpID=' + operator_id);
          } else {
            $this.attr("href", _href + '?OpID=' + operator_id);
          }
        });
      }

</script>
</body>

</html>
