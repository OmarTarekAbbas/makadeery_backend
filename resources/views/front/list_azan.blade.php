<table>
    <tr>
        <th>اختر</th>
        <th>تشغيل</th>
        <th>الأذان</th>
    </tr>
    @foreach($audios as $val)
    <tr>
        <td class="audio-radio">
                <input id="audioChosen" class="center" type="radio" name="audio" value="{{$val->code}}" data-op="{{$val->operator->code}}">
            <label for="" class="center"><span class="center"></span></label>
        </td>
        <td class="np-play" data-src="{{url($val->source)}}"></td>
        <td>{{$val->title}}</td>
    </tr>
    @endforeach
</table>