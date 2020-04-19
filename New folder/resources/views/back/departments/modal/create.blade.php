  
<!-- start  Modal lg  Modal lg Create New record--------------- -->
<div class="modal fade bd-example-modal-lg" id="createNewDepartments" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start  Modal lg---------------- -->
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- -------------------------------------------------------}}
                    <div class="box">
                        <div class="box-header">
                            <center class="box-title"><h3 class="head_title">{{ trans('admin.create_dep') }}</h3></center>
                        </div><!-- /.box-header  --> 
                        <section class="modal_massage"> @include('back.message_error') </section>
                              <!-- /.----------------------------------------------------------------- -->
                                <div class="box-body">
                   <!-- /.----------------------------------------------------------------- -->
                                <div class="box-body">
                                    {!! Form::open(['url'=>aurl('departments'),'files'=>true]) !!}
                                    <div class="row">
                                        {{ Form::button('<i class="fa fa-location-arrow ">'
                                        . trans('admin.create_new_departments').'
                                        </i> <i class="fas fa-th"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    <div class="col-md-6 content_form_ar" >
                                        <div class="form-group">
                                        {!! Form::label('dep_name_ar',trans('admin.dep_name_ar')) !!}
                                        {!! Form::text('dep_name_ar',old('dep_name_ar'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group dep_name_ar -->
                                    
                                    <div class="form-group">
                                        {!! Form::label('description_ar',trans('admin.description_ar')) !!}
                                        {!! Form::textarea('description_ar',old('description_ar'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description_ar -->
                                    <div class="form-group">
                                        {!! Form::label('keyword_ar',trans('admin.keyword_ar')) !!}
                                        {!! Form::textarea('keyword_ar',old('keyword_ar'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group keyword_ar -->
                                     <!--  start js tree ----------------------------------- -->
                                    <div class="clearfix"></div>
                                    <div id="jstree"></div>
                                    <input type="hidden" name="parent" class="parent_id" value="{{old('parent')}}">
                                    <div class="clearfix"></div>
                                    <!--  End js tree ----------------------------------- -->
                                    </div><!--col-md-6 content_form_ar-->
                                    
                                     <div class="col-md-6 content_form_en" >
                                   
                                    
                                    <div class="form-group">
                                        {!! Form::label('dep_name_en',trans('admin.dep_name_en')) !!}
                                        {!! Form::text('dep_name_en',old('dep_name_en'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group dep_name_en -->
                                   
                                    
                                     <div class="form-group">
                                        {!! Form::label('description_en',trans('admin.description_en')) !!}
                                        {!! Form::textarea('description_en',old('description_en'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description_en -->
                                    <div class="form-group">
                                        {!! Form::label('keyword_en',trans('admin.keyword_en')) !!}
                                        {!! Form::textarea('keyword_en',old('keyword_en'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group keyword_en --> 
            
                                    <!----------------start  icon-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('icon',trans('admin.icon_departments'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('icon',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                    <div>  <img   src="{{url('default')}}/dep.png" class="img_100px"></div>

                                <!----------------End icon-->  
                                         </div><!--col-md-6 content_form_en-->
                                </div><!--row-->
                                    
                              {{ Form::button('<i class="fa fa-location-arrow ">'
                                        . trans('admin.create_new_departments').'
                                        </i> <i class="fas fa-th"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}

                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->
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

