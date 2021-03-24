@extends('front.master')
@section('content')

<!--=========== content start =================== -->
<div class="main">
   <div class="container">

        <div class="table">          
          <table class="table">
            <tbody>
              <tr>
                <td>رقم الهاتف</td>
                <td>12302456</td>
              </tr>
              <tr>
                <td>الشبكة</td>
                <td>ooredoo</td>
              </tr>
              <tr>
                <td>تاريخ الاشتراك</td>
                <td>22/02/2019</td>
              </tr>
              <tr>
                <td>تاريخ التجديد</td>
                <td>25/02/2019</td>
              </tr>
              <tr>
                <td>اسم الخدمة</td>
                <td>علاوين</td>
              </tr>
              <tr>
                <td>نوع الخدمة</td>
                <td>يومية</td>
              </tr>
            </tbody>
          </table>

          <a href="{{url('home')}}" class="btn">الرئيسية</a>
        <a href="" class="btn">الغاء</a>

      </div>
   </div>
</div>
<!--=========== content end =================== -->
@stop
