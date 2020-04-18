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
                                <section class="page_create_message">@include('back.message')</section>
                        <!-- /.card-header -->
                            <div class="card-body form_dark">
                       
 <!-- /.----------------------------------------------------------------- -->
                             <div class="box-body">
                                     {!! Form::open(['url'=>aurl('sliders'),'files'=>true]) !!}
                                   <div class="row">
                                  <!--   {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-sliders-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                     }} -->

                                    <div class="col-md-12  " >
                                              <section>
                                                <div class="form-group ">
                                                {!! Form::label('link',trans('admin.link')) !!}
                                                {!! Form::text('link',old('link'),['class'=>'form-control' ]) !!}
                                            </div><!-- /.form-group text3_ar -->
                                            <!----------------start  photo-->
                                            <div class="input-group ">
                                                <div class="custom-file">
                                                    {!! Form::label('photo',trans('admin.photo_sliders'),['class'=>'custom-file-label']) !!}
                                                    {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                                </div>
                                            </div>
                                              <div class="text-center"> <img   src="{{url('default')}}/slider.png" class="img_100px"></div>
                                           <!----------------End photo-->
                                           </section> 
                                       </div><!-- col-md-12-->

                                   <div class="col-md-6 content_form_ar" >
                                    <div class="form-group d-none">
                                        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
                                        {!! Form::text('head_ar',old('head_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group head_en -->
                                     <div class="form-group d-none">
                                        {!! Form::label('title_ar',trans('admin.title_ar')) !!}
                                        {!! Form::text('title_ar',old('title_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group title_ar -->
                                    <div class="form-group d-none">
                                        {!! Form::label('text1_ar',trans('admin.text1_ar')) !!}
                                        {!! Form::text('text1_ar',old('text1_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group text1_ar -->
                                    <div class="form-group d-none">
                                        {!! Form::label('text2_ar',trans('admin.text2_ar')) !!}
                                        {!! Form::text('text2_ar',old('text2_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group text2_ar -->
                                    <div class="form-group d-none">
                                        {!! Form::label('text3_ar',trans('admin.text3_ar')) !!}
                                        {!! Form::text('text3_ar',old('text3_ar'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group text3_ar -->
                                     <!----------------start  photo-->
                                    <div class="input-group  d-none ">
                                       <!--  <div class="custom-file">
                                            {!! Form::label('photo',trans('admin.photo_sliders'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('photo',['class'=>'custom-file-input','id'=>''] ) !!}
                                        </div> -->
                                    </div>
                                    <div class="text-center  d-none"> <img   src="{{url('default')}}/slider.png" class="img_100px"></div>
                                   <!----------------End photo-->
                                   </div><!--col-md-6 content_form_ar-->
                                   <div class="col-md-6 content_form_en" >
                                   <div class="form-group d-none">
                                        {!! Form::label('head_en',trans('admin.head_en')) !!}
                                        {!! Form::text('head_en',old('head_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group head_en --> 
                                      <div class="form-group d-none">
                                        {!! Form::label('title_en',trans('admin.title_en')) !!}
                                        {!! Form::text('title_en',old('title_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                  <div class="form-group d-none">
                                        {!! Form::label('head_en',trans('admin.head_en')) !!}
                                        {!! Form::text('head_en',old('head_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group head_en -->
                                     <div class="form-group d-none">
                                        {!! Form::label('title_en',trans('admin.title_en')) !!}
                                        {!! Form::text('title_en',old('title_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                    <div class="form-group d-none">
                                        {!! Form::label('text1_en',trans('admin.text1_en')) !!}
                                        {!! Form::text('text1_en',old('text1_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group text1_en -->
                                    <div class="form-group d-none">
                                        {!! Form::label('text2_en',trans('admin.text2_en')) !!}
                                        {!! Form::text('text2_en',old('text2_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group text2_en -->
                                    <div class="form-group d-none">
                                        {!! Form::label('text3_en',trans('admin.text3_en')) !!}
                                        {!! Form::text('text3_en',old('text3_en'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group text3_ar -->
                                   </div><!--col-md-6 content_form_en-->
                                </div><!--row-->
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-sliders-h"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->                            </div>
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