@extends('back.index')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper content_wrapper_datatable">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                       <div class="card-header card_all_btn_dpe">
    <span class="card-title  color_000">{{ $title }}</span>
    <a href="products?department_id=19" class="btn btn-danger"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_0') }}</a>
    <a href="products?department_id=13" class="btn btn-info"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_1') }}</a>
    <a href="products?department_id=14" class="btn btn-success"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_2') }}</a>
    <a href="products?department_id=15" class="btn btn-warning"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_3') }}</a>
    <a href="products?department_id=20" class="btn btn-danger"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_5') }}</a>
    <a href="products?department_id=21" class="btn btn-primary"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_6') }}</a>
    <a href="products?department_id=16" class="btn btn-dark"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_7') }}</a>
    <a href="products?department_id=18" class="btn btn-secondary"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_8') }}</a>

</div>
                            <section class="page_create_message">@include('back.message')</section>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <!-- /.----------------------------------------------------------------- -->
                                departments
                            <!-- /.----------------------------------------------------------------- -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- start  Modal--------------- -->
    <div class="modal fade" id="mutlipleDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert btn-danger ">
                        <div class="empty_record hidden"> <h5>{{ trans('admin.please_check_some_records') }} !</h5></div> <!--empty_record-->
                        <div class="not_empty_record hidden">  <h5>{{ trans('admin.ask_delete_item') }} ? <span class="record_count"></span></h5></div> <!--not_empty_record-->
                    </div>
                </div> <!--alert btn-danger   -->
                <div class="modal-footer">
                    <div class="not_empty_record hidden">
                        <input type="submit" name="del_all" value="{{trans('admin.no')}}" class="btn btn-info   p_l_r_20px">
                        <input type="submit" name="del_all" value="{{trans('admin.yes')}}" class="btn btn-danger del_all">
                    </div> <!--not_empty_record-->
                    <div class="empty_record hidden">  <input type="submit" name="del_all" value="{{trans('admin.close')}}" class="btn btn-danger  "></div> <!--empty_record-->
                </div>
            </div>
        </div>
    </div>
    <!-- End  Modal--------------- -->
    @include('back.departments.modal.create')
    @push('js')
        <script>
            delete_all()();
        </script>
{{--        {!! $dataTable->scripts() !!}--}}
    @endpush
@endsection