@extends('back.index')
@section('content')

 
@push('js')

{{------------------------------------------------------------}}
<!-- Modal -->
<div class="modal fade" id="delete_bootstrap_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['url'=>'','method'=>'delete','id'=>'form_Delete_department']) !!}
            <div class="modal-body">
                <h4>
                    {{trans('admin.ask_delete_dep')}}  <span id="dep_name"> </span>
                      
                </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{trans('admin.close')}}</button>
                {!! Form::submit(trans('admin.yes'),['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
{{------------------------------------------------------------}}


    <script>
        $(document).ready(function () {
            $('#jstree').jstree({
                'core' : {
                    'data' : {!! load_dep() !!},
                    "themes": {
                        "name": "default-dark",
                        "dots": true,
                        "variant": "large",
                        "icons": true,
                        "multiple" : true,
                        "animation" : 1000,

                    }
                },
                "checkbox" : {
                    "keep_selected_style" : true
                },
                "plugins" : [  "wholerow","radio","/*checkbox*/" ]
            });//.jstree
        });//document

        //-----------------------get id
        $('#jstree').on('changed.jstree',function(e,data){
            var  i , j , r =[];//=  var  i[]; var  j[];var  r[];
            var name =[];
            var icon =[];
            for(i=0,j = data.selected.length;i < j;i++ )
            {
                r.push(data.instance.get_node(data.selected[i]).id);
                name.push(data.instance.get_node(data.selected[i]).text);
                icon.push(data.instance.get_node(data.selected[i]).icon);
            }//for
            $('#form_Delete_department').attr('action','{{aurl('departments')}}/'+r.join(', '));
            $('#dep_name').text(name.join(',')); //get name dpe
             $('#dep_icon').attr('src','{{url('storage')}}/'+icon.join(', '));//get src   dpe


            //start code show btn controll in the dep
            if(r.join(', ') != '')
            {
                $('.showbtn_control').removeClass('hidden');
                $('.edit_dpe').attr('href','{{aurl('departments/')}}/'+r.join(', ')+'/edit');

            }else{
                $('.showbtn_control').addClass('hidden');

            } //  code show btn controll in the dep
         });/*changed*/

    </script>
    @endpush

<div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper content_wrapper_datatable">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">

                <!-- /.-------------------------------------------- start  HTML JS Tree--------------------- -->
                <div class="content_departments card_dark">
                    <!--  start js tree ----------------------------------- -->
                    <br>
                    <a class="btn btn-danger    hidden showbtn_control delete_dpe"  data-toggle="modal" data-target="#delete_bootstrap_modal"> <i class="fas fa-trash"></i> {{trans('admin.delete')}}</a>
                    <a class="btn btn-success   hidden showbtn_control edit_dpe"> <i class="fas fa-edit"></i>{{trans('admin.edit')}}</a>
                    <a class="btn btn-primary   hidden showbtn_control add_new_product_in_dpe"> <i class="fas fa-plus"></i>{{trans('admin.add_product_in_th_dep')}}</a>
                    <div class="clearfix"></div>
                    <div id="jstree"></div>
                    <input type="hidden" name="parent" class="parent_id" value="">
                    <div class="clearfix"></div>
                    <!--  start js tree ----------------------------------- -->
                </div><!--content_departments-->
                <!-- /.--------------------------------------------- ُEnd HTML JS Tree-------------------- -->

                <div class="row">

                    <div class="col-12">
                        <div class="card">
<div class="card-header card_all_btn_dpe">
    <span class="card-title  color_000">{{ $title }}</span>
    <a href="departments?id=19" class="btn btn-danger"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_0') }}</a>
    <a href="departments?id=13" class="btn btn-info"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_1') }}</a>
    <a href="departments?id=14" class="btn btn-success"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_2') }}</a>
    <a href="departments?id=15" class="btn btn-warning"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_3') }}</a>
    <a href="departments?id=20" class="btn btn-danger"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_5') }}</a>
    <a href="departments?id=21" class="btn btn-primary"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_6') }}</a>
    <a href="departments?id=16" class="btn btn-dark"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_7') }}</a>
    <a href="departments?id=18" class="btn btn-secondary"> <i class="fas pe-fw fa-cube"></i> {{ trans('admin.dpe_8') }}</a>

</div>
                            <section class="page_create_message">@include('back.message')</section>
                        <!-- /.card-header -->


                            <div class="card-body">
                                {!! Form::open(['id'=>'form_data','url'=>aurl('departments/destroy/all'),'method'=>'delete']) !!}
                                <!-- /.----------------------------------------------------------------- -->
                         {!! $dataTable->table([
                            'class'=>'table table-bordered table-striped dataTable',
                            'id'=>'example2',
                            'role'=>'grid',
                            'aria-describedby'=>'example2_info'

                            ],true) !!}
                          {!! Form::close() !!}
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
        delete_all();
            // html demo

 
        </script>
        {!! $dataTable->scripts() !!}

        @endpush
@endsection
