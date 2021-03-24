@extends('front.master')
@section('content')
<style>
    .main h2  {
        text-align: center;
        color: #f3e5b8;
        margin-bottom: 10%;
    }   
</style>
<!-- main content -->
<div class="main">
    <div class="container">
        <h2>مواقيت الصلاة</h2>       
        <table class="table table-dark table-hover">
            <thead>
                <tr>

                    <th>{{$hjrri_date->day.' - '.$hjrri_date->month .' - '.$hjrri_date->year}}</th>
                    <th>{{date('d/m/Y')}}</th>
                </tr>
                <tr>
                    <th>الصلاة</th>
                    <th>الوقت</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prayer_times as $key=>$value)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$value}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
