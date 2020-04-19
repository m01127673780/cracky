{{--<a href="{{ aurl('sliders/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#show_sliders{{ $id }}"><i class="fa fa-eye"></i></button>
<!-- Modal -->
<div id="show_sliders{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><apan class="btn btn-danger">&times;</apan></button>
                {{--                <h4 class="modal-title">{{ trans('admin.close') }}</h4>--}}
            </div>
             <div class="modal-body">
                 <!-- /.----------------------------------------------------------------- ,'disabled'=>'disabled' -->
                             <div class="box-body">
                                     {!! Form::open(['route'=>['sliders.update',$id],'method'=>'put','class'=>'form_save_in_modal','files'=>true]) !!}                                   
                                    <div class="row">
                                        <div class="col-md-12  " >
                                      <section>
                                        <div class="form-group ">
                                        {!! Form::label('link',trans('admin.link')) !!}
                                        {!! Form::text('link',$link,['class'=>'form-control','class'=>'form-control' ,'disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group text3_ar -->
                                   
                                   </section> 
                               </div><!-- col-md-12-->

                                   <div class="col-md-6 content_form_ar" >
                                    <div class="form-group  d-none">
                                        {!! Form::label('head_ar',trans('admin.head_ar')) !!}
                                        {!! Form::text('head_ar',$head_ar,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group head_en -->
                                     <div class="form-group  d-none">
                                        {!! Form::label('title_ar',trans('admin.title_ar')) !!}
                                        {!! Form::text('title_ar',$title_ar,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group title_ar -->
                                    <div class="form-group  d-none">
                                        {!! Form::label('text1_ar',trans('admin.text1_ar')) !!}
                                        {!! Form::text('text1_ar',$text1_ar,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group text1_ar -->
                                    <div class="form-group  d-none">
                                        {!! Form::label('text2_ar',trans('admin.text2_ar')) !!}
                                        {!! Form::text('text2_ar',$text2_ar,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group text2_ar -->
                                    <div class="form-group  d-none">
                                        {!! Form::label('text3_ar',trans('admin.text3_ar')) !!}
                                        {!! Form::text('text3_ar',$text3_ar,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group text3_ar -->
                                     <!----------------start  photo-->
                                     @if(!empty($photo))
                                         <div class="text-center"> <img src="{{url('public/storage').Storage::url($photo)}}" class="img_100px  "></div>
                                       @else
                                      <div class="text-center"> <img   src="{{url('default')}}/slider.png" class="img_100px"></div>

                                       @endif
                                   <!----------------End photo-->
                                   </div><!--col-md-6 content_form_ar-->
                                   <div class="col-md-6 content_form_en" >
                                   <div class="form-group  d-none">
                                        {!! Form::label('head_en',trans('admin.head_en')) !!}
                                        {!! Form::text('head_en',$head_en,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group head_en --> 
                                      <div class="form-group  d-none">
                                        {!! Form::label('title_en',trans('admin.title_en')) !!}
                                        {!! Form::text('title_en',$title_en,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                  <div class="form-group  d-none">
                                        {!! Form::label('head_en',trans('admin.head_en')) !!}
                                        {!! Form::text('head_en',$head_en,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group head_en -->
                                     <div class="form-group  d-none">
                                        {!! Form::label('title_en',trans('admin.title_en')) !!}
                                        {!! Form::text('title_en',$title_en,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group title_en -->
                                    <div class="form-group  d-none">
                                        {!! Form::label('text1_en',trans('admin.text1_en')) !!}
                                        {!! Form::text('text1_en',$text1_en,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group text1_en -->
                                    <div class="form-group  d-none">
                                        {!! Form::label('text2_en',trans('admin.text2_en')) !!}
                                        {!! Form::text('text2_en',$text2_en,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group text2_en -->
                                    <div class="form-group  d-none">
                                        {!! Form::label('text3_en',trans('admin.text3_en')) !!}
                                        {!! Form::text('text3_en',$text3_en,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group text3_ar -->
                                    <div class="form-group  d-none">
                                        {!! Form::label('link',trans('admin.link')) !!}
                                        {!! Form::text('link',$link,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                                    </div><!-- /.form-group text3_ar -->
                                   </div><!--col-md-6 content_form_en-->
                                </div><!--row-->
                                    
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->
                <!-- /.---------- -->
                      <a href="{{ aurl('sliders/'.$id.'/edit') }}" class="btn btn-success "><i class="fa fa-edit"></i> {{trans('admin.edit_page')}}</a>
                       <span>
                         {!! Form::open(['route'=>['sliders.destroy',$id],'method'=>'delete' ,'class'=>'d-inline-block']) !!}
                         {{  Form::button(' <i class="fa fa-trash">  </i>'.trans('admin.delete_fast').'<img src="'.asset('/default/alert.gif').'" class="w_h_20px">', ['type' => 'submit', 'class' => 'btn btn-danger   btn_alert_delete_htis  '] )  }}
                         {!! Form::close() !!}
                       </span>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">{{ trans('admin.close') }}  <i class="fas fa-times"> </i></button>
               <!-- /.----------------------------------------------------------------- -->
            </div>
        </div>
    </div>
</div>
