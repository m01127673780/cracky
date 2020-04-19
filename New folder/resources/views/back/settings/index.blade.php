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
                                    {!! Form::open(['url'=>aurl('settings'),'files'=>true]) !!}
                                    {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}

                                    <div class="form-group">
                                        {!! Form::label('sitename_ar',trans('admin.sitename_ar')) !!}
                                        {!! Form::text('sitename_ar',setting()->sitename_ar,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('sitename_en',trans('admin.sitename_en')) !!}
                                        {!! Form::text('sitename_en',setting()->sitename_en,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('email',trans('admin.email')) !!}
                                        {!! Form::email('email',setting()->email,['class'=>'form-control']) !!}
                                    </div>

                                    <!------------------------>
                                    <!--************************************-->
                                            <section class="row">

                                    <aside class="col-md-6" >
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('icon',trans('admin.custom_icon'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('icon',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(setting()->icon))
                                            <img   src="{{url('public/storage').Storage::url(setting()->icon)}}" class="img_100px">
                                        @else
                                            <div>  <img   src="{{url('default')}}/icon.png" class="img_100px"></div>
                                        @endif
                                    <!------------------------>
                                        <!------------------------>
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('logo',trans('admin.custom_logo'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('logo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(setting()->logo))
                                            <img   src="{{url('public/storage').Storage::url(setting()->logo)}}" class="img_100px">
                                        @else
                                            <div>  <img   src="{{url('default')}}/logo.png" class="img_100px"></div>
                                        @endif
                                    <!------------------------></aside>
                                    <aside class="col-md-6" >
                                        <!------------------------>
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('img_maintenance',trans('admin.custom_img_maintenance'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('img_maintenance',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(setting()->img_maintenance))
                                            <img   src="{{url('public/storage').Storage::url(setting()->img_maintenance)}}" class="img_100px">
                                        @else
                                            <div>  <img   src="{{url('default')}}/img_maintenance.png" class="img_100px"></div>
                                        @endif
                                    <!------------------------>
                                        <!------------------------>
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('bg_maintenance',trans('admin.custom_bg_maintenance'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('bg_maintenance',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(setting()->bg_maintenance))
                                            <img   src="{{url('public/storage').Storage::url(setting()->bg_maintenance)}}" class="img_100px">
                                        @else
                                            <div>  <img   src="{{url('default')}}/bg_maintenance.png" class="img_100px"></div>
                                        @endif
                                    <!------------------------>
                                    </aside>
                                </section>
                                    <!--************************************-->
                                    <div class="form-group">
                                        {!! Form::label('description',trans('admin.description')) !!}
                                        {!! Form::textarea('description',setting()->description,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('keywords',trans('admin.keywords')) !!}
                                        {!! Form::textarea('keywords',setting()->keywords,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('main_lang',trans('admin.main_lang')) !!}
                                        {!! Form::select('main_lang',['ar'=>trans('admin.ar'),'en'=>trans('admin.en')],setting()->main_lang,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('status',trans('admin.status')) !!}
                                        {!! Form::select('status',['open'=>trans('admin.open'),'close'=>trans('admin.close')],setting()->status,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('message_maintenance',trans('admin.message_maintenance')) !!}
                                        {!! Form::textarea('message_maintenance',setting()->message_maintenance,['class'=>'form-control']) !!}
                                    </div>
                                    {{--                                    {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}--}}
                                    {!! Form::close() !!}
                                </div> <!-- /.box-body -->
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