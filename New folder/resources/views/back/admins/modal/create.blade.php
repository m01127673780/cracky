<!-- start  Modal lg  Modal lg Create New record--------------- -->
<div class="modal fade bd-example-modal-lg" id="createNewRow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start  Modal lg---------------- -->
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- -----------------------------------------------------------------------------}}
                    <div class="box">
                        <div class="box-header">
                            <center class="box-title"><h3 class="head_title">{{ trans('admin.create_admin') }}</h3></center>
                        </div>
                        <section class="modal_massage"> @include('back.message_error') </section>


                    <!-- /.box-header ,'required'=>'required' -->
                        <div class="box-body">
                             {!! Form::open(['url'=>aurl('admin/create_quick')]) !!}
                            <div class="form-group">
                            {!! Form::label('name',trans('admin.name')) !!}
                            {!! Form::text('name',old('name'),['class'=>'form-control','class'=>'form-control' ]) !!}
                            </div><!-- /.form-group name -->
                            <div class="form-group">
                            {!! Form::label('email',trans('admin.email')) !!}
                            {!! Form::text('email',old('email'),['class'=>'form-control' ]) !!}
                            </div><!-- /.form-group name -->
                            <div class="form-group">
                            {!! Form::label('password',trans('admin.password')) !!}
                            {!! Form::password('password',['class'=>'form-control' ]) !!}
                            </div><!-- /.form-group name -->
                            {!! Form::submit(trans('admin.create_admin'),['class'=>'btn btn-info']) !!}
                            {!! Form::close() !!}
                        </div>   <!-- box-body-->
                     </div><!-- /.box -->

                    {{-- -----------------------------------------------------------------------------}}
                </div><!-- /.container-fluid -->
            </div><!-- /.modal-body -->

            <!--  End   Modal  lg---------------- -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog modal-lg -->
</div><!-- /.modal fade bd-example-modal-lg -->
<style>
    .modal-content{
        width: 120%;
    }
</style>
<!-- End  Modal lg Create New record  ---------------- -->

