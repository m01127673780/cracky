@extends('back.index')
@section('content')
    @push('js')
    <script>
        $(document).ready(function () {
            $('#jstree').jstree({
                'core' : {
                    'data' : {!! load_dep(old('parent')) !!},
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
                    "keep_selected_style" : false
                },
                "plugins" : [  "wholerow","radio","/*checkbox*/" ]
            });//#jstree
        });//document

        //-----------------------get id
            $('#jstree').on('changed.jstree',function(e,data){
                var  i , j , r =[];//=  var  i[]; var  j[];var  r[];
                for(i=0,j = data.selected.length;i < j;i++ )
              {
                r.push(data.instance.get_node(data.selected[i]).id);
              }//for
                $('.parent_id').val(r.join(','));
                //1,2,3,4,5,6
            });/*changed*/

    </script>
    @endpush
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper content_wrapper_datatable">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card card_dark">
                            <div class="card-header">
                                <h3 class="card-title">{{$title}}</h3>
                            </div>
                                <section class="page_create_message">@include('back.message')</section>
                        <!-- /.card-header -->
                            <div class="card-body form_dark">
                                <!-- /.----------------------------------------------------------------- -->
                                <div class="box-body">
                                    {!! Form::open(['url'=>aurl('departments'),'files'=>true]) !!}
                                    <div class="form-group">
                                        {!! Form::label('dep_name_ar',trans('admin.dep_name_ar')) !!}
                                        {!! Form::text('dep_name_ar',old('dep_name_ar'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group dep_name_ar -->
                                    <div class="form-group">
                                        {!! Form::label('dep_name_en',trans('admin.dep_name_en')) !!}
                                        {!! Form::text('dep_name_en',old('dep_name_en'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group dep_name_en -->
                                    <!--  start js tree ----------------------------------- -->
                                    <div class="clearfix"></div>
                                    <div id="jstree"></div>
                                    <input type="hidden" name="parent" class="parent_id" value="{{old('parent')}}">
                                    <div class="clearfix"></div>
                                    <!--  start js tree ----------------------------------- -->
                                    <div class="form-group">
                                        {!! Form::label('description',trans('admin.description')) !!}
                                        {!! Form::textarea('description',old('description'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description -->
                                    <div class="form-group">
                                        {!! Form::label('keyword',trans('admin.keyword')) !!}
                                        {!! Form::textarea('keyword',old('keyword'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group keyword -->
                                    <!----------------start  icon-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('icon',trans('admin.icon_departments'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('icon',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                    <div>  <img   src="{{url('default')}}/dep.png" class="img_100px"></div>

                                <!----------------End icon-->
                                    {{ Form::button('<i class="fa fa-location-arrow ">'
                                        . trans('admin.create_new_departments').'
                                        </i> <i class="fas fa-th"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
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
@endsection