{{--<a href="{{ aurl('countreis/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}


 <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_countreis{{ $id }}"><i class="fa fa-edit"></i></button>
<!-- Modal -->
<div id="edit_countreis{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><apan class="btn btn-danger">&times;</apan></button>
                {{--                <h4 class="modal-title">{{ trans('admin.close') }}</h4>--}}
            </div>
            <div class="modal-body">
                <!-- /.----------------------------------------------------------------- -->
                 {!! Form::open(['route'=>['countreis.update',$id],'method'=>'put','class'=>'form_save_in_modal','files'=>true]) !!} 
 

                <div class="form-group">
                    {!! Form::label('name',trans('admin.country_name_ar')) !!}
                    {!! Form::text('country_name_ar',$country_name_ar,['class'=>'form-control','class'=>'form-control']) !!}
                </div><!-- /.form-group name -->
                <div class="form-group">
                    {!! Form::label('country_name_en',trans('admin.country_name_en')) !!}
                    {!! Form::text('country_name_en',$country_name_en,['class'=>'form-control' ]) !!}
                </div><!-- /.form-group country_name_en -->
                <div class="form-group">
                    {!! Form::label('mob',trans('admin.mob_show')) !!}
                    {!! Form::text('mob',$mob,['class'=>'form-control']) !!}
                </div><!-- /.form-group mob -->
                <div class="form-group">
                    {!! Form::label('code',trans('admin.code')) !!}
                    {!! Form::text('code',$code,['class'=>'form-control']) !!}
                </div><!-- /.form-group code -->
                <!----------------start  logo-->
                <aside class="row model_actions">
                    <div class="col-md-8 content_btn-actions_model">  </div><!--col-md-8-->
                        
                  
                    <div class="col-md-4"></div><!--col-md-4-->

                    
            
                </aside><!--model_actions row-->
                                  <!----------------start  logo-->
                    <div class="input-group ">
                        <div class="custom-file">
                            {!! Form::label('image','',['class'=>'custom-file-label']) !!}
                            {!! Form::file('logo',['class'=>'custom-file-input','id'=>' '] ) !!}
                        </div>
                    </div>
                    <br/>
                    @if(empty($logo))
                     <img src="{{url('')}}/default/flag.gif" class="img_120px"> <br/><br/>
                    @endif 
                     @if(!empty($logo))
                        <div> <img src="{{url('public/storage').Storage::url($logo)}}" class="img_100px fa-spin"></div>
                    @endif
                    <br/><br/>
                    
                    
                    
                    
                     
                    
                    
                <!----------------End logo-->
                <!-- /.---------- -->
                   {{ Form::button('<i class="fa fa-location-arrow ">'
                    . trans('admin.save').'
                     </i> <i class="fa fa-flag-usa"> </i> ' ,
                    ['type' => 'submit', 'class' => '  btn btn-info   btn_save_form_in_modal'] )
                    }}
                   {!! Form::close() !!}
                <!-- /.---------- -->
             		  <a href="{{ aurl('countreis/'.$id.'/edit') }}" class="btn btn-success "><i class="fa fa-edit"></i> {{trans('admin.edit_page')}}</a>
                       <span>
                         {!! Form::open(['route'=>['countreis.destroy',$id],'method'=>'delete' ,'class'=>'d-inline-block']) !!}
                         {{  Form::button(' <i class="fa fa-trash">  </i>'.trans('admin.delete_fast').'<img src="'.asset('/default/alert.gif').'" class="w_h_20px">', ['type' => 'submit', 'class' => 'btn btn-danger   btn_alert_delete_htis  '] )  }}
                         {!! Form::close() !!}
                       </span>
					<button type="button" class="btn btn-warning" data-dismiss="modal">{{ trans('admin.close') }}  <i class="fas fa-times"> </i></button>
               <!-- /.----------------------------------------------------------------- -->
            </div>
        </div>
    </div>
</div>
