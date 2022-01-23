@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الالعاب</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة
                الالعاب</span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
@if (session()->has('Add'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('Add') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session()->has('edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('edit') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session()->has('delete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('delete') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<!-- row -->
<div class="row">



    <!--/div-->

    <!--div-->

    <!--/div-->

    <!--div-->
    <div class="col-xl-12">
        <div class="card mg-b-20" style="width: 100%">
            <div class="col-sm-1 col-md-2">
                @can('اضافة لعبه')
                <a class="btn btn-primary btn-sm" href="{{ route('img.create') }}">اضافة لعبه</a>
                @endcan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">الاسم</th>
                                <th class="border-bottom-0">الصوره</th>
                                <th class="border-bottom-0">العمليات</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $i = 0;
                            @endphp

                            @foreach ($img as $imges)

                            @php
                            $i++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$imges->title}}</td>
                                <td>
                                    <img style="width: 90px; height: 90px;" src="{{asset('images/games/'.$imges->photo)}}">
                                </td>

                                <td>
                                    @can('تعديل لعبه')
                                    <a href="{{route('img.edit', $imges->id)}}" class="btn btn-sm btn-info" title="تعديل"><i class="las la-pen"></i></a>
                                    @endcan

                                    @can('حذف لعبه')
                                    <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale" data-id="{{$imges->id}}" data-name="{{$imges->name}}" data-toggle="modal" href="#modaldemo9" title="حذف"><i class="las la-trash"></i></a>
                                    @endcan

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->

    <!--div-->



    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف لعبه</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="img/destroy" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>هل انت متاكد من عملية الحذف ؟</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        <input class="form-control" name="name" id="name" type="text" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-danger">تاكيد</button>
                    </div>
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
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>


<script>
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
    })
</script>
@endsection