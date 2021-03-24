@extends('front.master')
@section('content')
<?php
preg_match("/iPhone|iPad|iPod/", $_SERVER['HTTP_USER_AGENT'], $matches);
$os = current($matches);

switch ($os) {
    case 'iPhone':
        if (preg_match('/OS 8/', $_SERVER['HTTP_USER_AGENT']) || preg_match('/OS 9/', $_SERVER['HTTP_USER_AGENT'])) {
            $Att = '&body=';
        } else {
            $Att = ';';
        }
        break;
    case 'iPad': $Att = '&body=';
        break;
    case 'iPod': $Att = '&body=';
        break;
    default : $Att = '?body=';
        break;
}?>
<link rel="stylesheet" type="text/css" href="{{url('assets/front/')}}/css/aboelwafa.css">

<div class="main">
   <div class="container">

<div class="azan">
 
    <h2> يمكنك الآن اختيار الأذان  بصوت شيخك المفضل  </h2>

    
    <div class="select-panel">
           <select id="chooseProvider" name="provider">
               <option value="empty">اختر المؤذن</option>
               @foreach($providers as $value)
               <option value="{{$value->provider->id}}">{{$value->provider->title}}</option>
               @endforeach
              
           </select>
           <i class="fa fa-angle-down"></i>
    </div>

    <div id="chooseAudio">
        <h2 id="provider-name"></h2>
        <table>


        </table>
    </div>


    <a href="#" class="button" id="chooseRBT" onclick="confirm('لتأكيد الاشتراك فى الخدمة إضغط تأكيد')">اجعلها كول تون</a>

    <div class="tab-bar-wrapper decorator">
   
    </div>
</div>


   </div>
</div>


@stop
@section('script')

<script src="{{url('assets/front/')}}/js/player.js"></script>
<script>
     $('#chooseProvider').on('change',function(){
         
         var id  = $(this).val();
         var title  = $("#chooseProvider option:selected").text();
        
            $.ajax({
            method: "get",
            url: "<?= url('providers/list_azan') ?>",
            data: {id: id},
            success: function (data) {
                $("#chooseAudio table").html(data);
                
                 $('#chooseAudio').slideDown();

                $('#provider-name').text(title);

                $('body.service').css({
                    "background":"#eee"
                });
            }
        });
     });
     $( document ).on( "click", "input:radio[name=audio]:checked", function() {
                var value = $(this).val();
                var op = $(this).attr('data-op');
                $("#chooseRBT").prop('href', "sms:"+op+"{{$Att}}"+value);
            });
    </script>
@stop

