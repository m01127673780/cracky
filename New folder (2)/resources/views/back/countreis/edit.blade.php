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
                        <div class="card card_dark">
                            <div class="card-header">
                                <h3 class="card-title">{{$title}}</h3>
                            </div>
                        @include('back.message')
                        <!-- /.card-header -->
                         <div class="card-body form_dark">
                                <!-- /.----------------------------------------------------------------- -->
                                <div class="box-body">
                                     {!! Form::open(['url'=>aurl('countreis/'.$countreis->id),'method'=>'put','files'=>true]) !!}

                                    <div class="form-group">
                                        {!! Form::label('country_name_ar',trans('admin.country_name_ar')) !!}
                                        {!! Form::text('country_name_ar',$countreis->country_name_ar,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group country_name_en -->
                                        {!! Form::label('country_name_en',trans('admin.country_name_en')) !!}
                                        {!! Form::text('country_name_en',$countreis->country_name_en,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group country_name_en -->
                                    <div class="form-group">
                                        {!! Form::label('code',trans('admin.code')) !!}
                                        {!! Form::text('code',$countreis->code,['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group name -->
                                    <div class="form-group">
                                        {!! Form::label('mob',trans('admin.mob')) !!}
                                        {!! Form::text('mob',$countreis->mob,['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group mob -->
                                 <!----------------start  logo-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('logo',trans('admin.logo_countreis'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('logo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                    @if(!empty($countreis->logo))
                                     <div> <img src="{{url('storage').Storage::url($countreis->logo)}}" class="img_100px fa-spin"></div>
                                   @endif
                                  @if(empty($icon))
                                                 <img src="{{url('')}}/default/flag.gif" class="img_120px">
                                  @endif 
                                <!----------------End logo-->
                                    {{ Form::button('<i class="fa fa-location-arrow ">'
                                    . trans('admin.save').'
                                     </i> <i class="fa fa-flag-usa"> </i> ' ,
                                    ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
                            <!-- /.----------------------------------------------------------------- -->
                            </div> <!-- /.card-body -->
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
