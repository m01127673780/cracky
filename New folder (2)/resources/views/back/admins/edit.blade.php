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
                            <div class="card-body">
{{--                            {{dd($admin)}}--}}
                            <!-- /.----------------------------------------------------------------- -->
                                    {{-- {!! Form::open(['route'=>['admin.update',$admin->id],'method'=>'put']) !!}--}}
                                    {!! Form::open(['url'=>aurl('admin/'.$admin->id),'method'=>'put']) !!}
                                <div class="form-group">
                                    {!! Form::label('name',trans('admin.name')) !!}
                                    {!! Form::text('name',$admin->name,['class'=>'form-control','class'=>'form-control' ]) !!}
                                </div><!-- /.form-group name -->
                                <div class="form-group">
                                    {!! Form::label('email',trans('admin.email')) !!}
                                    {!! Form::text('email',$admin->email,['class'=>'form-control' ]) !!}
                                </div><!-- /.form-group name -->
                                <div class="form-group">
                                    {!! Form::label('password',trans('admin.password')) !!}
                                    {!! Form::password('password',['class'=>'form-control' ]) !!}
                                </div><!-- /.form-group name -->
                            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-info']) !!}
                            {!! Form::close() !!}
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












