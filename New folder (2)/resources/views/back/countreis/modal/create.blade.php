<!-- start  Modal lg  Modal lg Create New record--------------- -->
<div class="modal fade bd-example-modal-lg" id="createNewCountreis" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start  Modal lg---------------- -->
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- -------------------------------------------------------}}
                    <div class="box">
                        <div class="box-header">
                            <center class="box-title"><h3 class="head_title">{{ trans('admin.create_create') }}</h3></center>
                        </div>
                        <section class="modal_massage"> @include('back.message_error') </section>
                          <!-- /.box-header ,'required'=>'required' -->
                            <!-- /.----------------------------------------------------------------- -->
                                <div class="box-body">
                                    {!! Form::open(['url'=>aurl('countreis/create_quick'),'files'=>true]) !!}
                                    <div class="form-group">
                                        {!! Form::label('country_name_ar',trans('admin.country_name_ar')) !!}
                                        {!! Form::text('country_name_ar',old('country_name_ar'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group country_name_en -->
                                        {!! Form::label('country_name_en',trans('admin.country_name_en')) !!}
                                        {!! Form::text('country_name_en',old('country_name_en'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group country_name_en -->
                                    <div class="form-group">
                                        {!! Form::label('code',trans('admin.code')) !!}
                                        {!! Form::text('code',old('code'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group name -->
                                    <div class="form-group">
                                        {!! Form::label('mob',trans('admin.mob')) !!}
                                        {!! Form::text('mob',old('mob'),['class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group mob -->
                                    <!----------------start  logo-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('logo',trans('admin.logo_countreis'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('logo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                      <div>  <img   src="{{url('')}}/default/flag.gif" class="img_100px"></div>
                                     
                                <!----------------End logo-->
                                    {{ Form::button('<i class="fa fa-location-arrow ">'
                                    . trans('admin.create_new_countreis').'
                                    </i> <i class="fa fa-flag-usa"> </i> ' ,
                                    ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->
                     </div><!-- /.box -->

                    {{-- -----------------------------------------------------------------------------}}
                </div><!-- /.container-fluid -->
            </div><!-- /.modal-body -->

            <!--  End   Modal  lg---------------- -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog modal-lg -->
</div><!-- /.modal fade bd-example-modal-lg -->
<style>
    .modal-content{width: 120%;}
 </style>
<!-- End  Modal lg Create New record  ---------------- -->

