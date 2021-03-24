@extends('front.master')
@section('content')
<div class="main">
    <div class="container">
        <div class="zakah_title">
            <h2>حاسبة الزكاة</h2>
            <p>إذا أردت أن تحسب النصاب بالذهب فهو المال الذي يبلغ أن يشترى به (85) جراماً من الذهب عيار (24).

                فلو كان جرام الذهب عيار (24) مثلاً بـ (60) فيكون النصاب هو: (85) جرام × (60) = (5100)، فإن كان مالك قد بلغ النصاب وجب عليك اخراج الزكاة وهي ربع العشر وطريقة حسابها ان تقسم مالك على العدد 40</p>
        </div>
        <fieldset class="zakah">
            <ul class="form_zakah">
                <li class="field">
                    <label >سعر غرام الذهب </label>
                    <div class="field-value"><input type="text" name="goldNissab"  id="txtGoldPrice" class="textbox required" maxlength="255" />
                    </div>
                    <span class="clearfix"></span>
                </li>
                <li class="field">
                    <label >المال المدّخر </label>
                    <div class="field-value"><input type="text" class="textbox required" id="txtSavedMoney" maxlength="255" />
                    </div>
                    <span class="clearfix"></span>
                </li>
                <div class="line"><hr></div>
                <div>
                    <li class="field">
                        <label >مقدار الزكاة</label>
                        <div class="field-value">
                            <label id="result"></label>
                        </div>
                    </li>
                </div>
                <li class="actions"  style="text-align:center">
                <center><a href="#" id="Calculate" class="button">احسب</a></center>
                </li>
            </ul>
        </fieldset>



    </div>
</div>
@stop
@section('script')
<script>
    $('#Calculate').click(function () {
        var GoldPrice = $('#txtGoldPrice').val();
        var SavedMoney = $('#txtSavedMoney').val();
        var min = GoldPrice * 85;       
        if (SavedMoney >= min) {
            var result = SavedMoney / 40;           
            $('#result').text(result);
        }
        else {
            $('#result').text('0');
        }
    })
</script>    
@stop

