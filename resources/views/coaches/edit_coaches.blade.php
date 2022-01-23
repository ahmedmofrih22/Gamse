@extends('layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{ URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />
@section('title')
تعديل مستخدم - مورا سوفت للادارة القانونية
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">المستخدمين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل
                مستخدم</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('coaches.update', $coch->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                    {{-- 1 --}}




                    <div class="row">
                        <div class="col">
                            <label for="inputName" class="control-label">اسم المستخدم</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $coch->name }}">
                        </div>
                        <div class="col">
                            <label for="inputName" class="control-label">رقم الجوال</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $coch->phone }}">
                        </div>
                    </div>

                    <div class="col">
                        <label for="inputName" class="control-label">البريد الالكتروني</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $coch->email }}">
                    </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="inputName" class="control-label">رقم الحساب البنكي</label>
                    <input type="number" class="form-control" id="Bank_account_number" name="Bank_account_number" value="{{ $coch->Bank_account_number }}">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="inputName" class="control-label">تاريخ الميلاد</label>
                    <input type="date" class="form-control" id="Date_of_Birth" name="Date_of_Birth" value="{{ $coch->Date_of_Birth }}">
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="inputName" class="control-label">المدينة</label>
                    <input type="text" class="form-control" id="City" name="City" value="{{ $coch->City }}">
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label for="inputName" class="control-label">الوصف</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $coch->description }}">
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="inputName" class="control-label">تاريخ الميلاد</label>
                    <input type="file" class="form-control" id="Date_of_Birth" name="photo">
                    <img style="width: 90px; height: 90px;" src="{{asset('images/coaches/'.$coch->photo)}}">

                </div>

            </div>


            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">حفظ البيانات</button>
            </div>


            </form>
        </div>






    </div>

</div>




</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')

<!-- Internal Nice-select js-->
<script src="{{ URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js') }}"></script>

<!--Internal  Parsley.min js -->
<script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
<!-- Internal Form-validation js -->
<script src="{{ URL::asset('assets/js/form-validation.js') }}"></script>
@endsection