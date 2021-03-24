@extends('front.master')
@section('content')
<style>
    .main h2 {
        text-align: center;
        color: #f3e5b8;
        margin-bottom: 8%;
    }
</style>

<!-- main content -->
<div class="main">
    <div class="container">
        <h2>حساب المواريث</h2>

        <div class="t1">
            <table class="table table-dark table-hover">
                <thead>
                    <h4 class="text-center thead1_h4">معلومات عن المتوفى</h4>
                </thead>
                <tbody>
                    <tr>
                        <td>قيمة التركة</td>
                        <td>
                            <div class="form-group">
                                <input type="number" class="form-control merath_input" id="MalVarligi" onkeypress="EnsureNumeric()" name="MalVarligi" placeholder="1000" required>
                            </div>
                        </td>


                    </tr>
                    <tr>
                        <td>عدد الابناء</td>
                        <td>
                            <div class="form-group">
                                <input type="number" class="form-control" id="ErkekCocuk" name="" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>عدد البنات</td>
                        <td>
                            <div class="form-group">
                                <input type="number" class="form-control" id="KizCocuk" name="" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>الاب</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" name="sellist1" id="Baba">
                                    <option>لا</option>
                                    <option>نعم</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>الام</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" id="Anne" name="">
                                    <option>لا</option>
                                    <option>نعم</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>عدد الاخوة</td>
                        <td>
                            <div class="form-group">
                                <input type="number" class="form-control" id="ErkekKardes" name="" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>عدد الاخوات</td>
                        <td>
                            <div class="form-group">
                                <input type="number" class="form-control" id="KizKardes" name="" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>عدد الزوجات</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" id="Es" name="">
                                    <option>لا</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button id="btn_cal" class="btn merath_btn" type="submit" onclick="PayHesapla()">حساب الميراث</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ادخل قيمة التركة اولا
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلق</button>
                    </div>
                </div>
            </div>
        </div>

        <!---->

        <div class="t2" style="display: none">
            <table class="table table-dark table-hover">
                <thead>
                    <h4 class="text-center thead2_h4" style="display: none">قسمة التركة</h4>
                </thead>
                <tbody>
                    <tr>
                        <td>نصيب الابناء</td>
                        <td>
                            <div class="form-group">
                                <label id="ECp">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نصيب البنات</td>
                        <td>
                            <div class="form-group">
                                <label id="KCp">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نصيب الاب</td>
                        <td>
                            <div class="form-group">
                                <label id="Bp">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نصيب الام</td>
                        <td>
                            <div class="form-group">
                                <label id="Ap">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نصيب الزوجة الاولى</td>
                        <td>
                            <div class="form-group">
                                <label id="Es1p">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نصيب الزوجة الثانية</td>
                        <td>
                            <div class="form-group">
                                <label id="Es2p">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نصيب الزوجة الثالثة</td>
                        <td>
                            <div class="form-group">
                                <label id="Es3p">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نصيب الزوجة الرابعة</td>
                        <td>
                            <div class="form-group">
                                <label id="Es4p">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نصيب الاخوة</td>
                        <td>
                            <div class="form-group">
                                <label id="EKp">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نصيب الاخوات</td>
                        <td>
                            <div class="form-group">
                                <label id="KKp">0</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>المتبقية</td>
                        <td>
                            <div class="form-group">
                                <label id="Xp">0</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <a href="{{url('merath')}}" class="btn merath_btn" onclick="PayHesapla()">حساب الميراث</a>
        </div>

    </div>
</div>
@stop
