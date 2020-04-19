{{--<a href="{{ aurl('countreis/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#show_countreis{{ $id }}"><i class="fa fa-eye"></i></button>
<!-- Modal -->
<div id="show_countreis{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><apan class="btn btn-danger">&times;</apan></button>
                {{--                <h4 class="modal-title">{{ trans('admin.close') }}</h4>--}}
            </div>
            {!! Form::open(['route'=>['countreis.destroy',$id],'method'=>'delete']) !!}
            <div class="modal-body">
                <!-- /.----------------------------------------------------------------- -->
                {{-- {!! Form::open(['route'=>['countreis.update',$countreis->id],'method'=>'put']) !!}--}}
                {!! Form::open(['url'=>aurl('countreis/'.$id),'method'=>'get']) !!}

                <div class="form-group">
                    {!! Form::label('name',trans('admin.country_name_ar')) !!}
                    {!! Form::text('country_name_ar',$country_name_ar,['class'=>'form-control','class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group name -->
                <div class="form-group">
                    {!! Form::label('country_name_en',trans('admin.country_name_en')) !!}
                    {!! Form::text('country_name_en',$country_name_en,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group country_name_en -->
                <div class="form-group">
                    {!! Form::label('mob',trans('admin.mob')) !!}
                    {!! Form::text('mob',$mob,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group mob -->
                <div class="form-group">
                    {!! Form::label('code',trans('admin.code')) !!}
                    {!! Form::text('code',$code,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group code -->
                <!----------------start  logo-->
                <aside class="row model_actions">
                    <div class="col-md-12">
                          @if(!empty($countreis->logo))
                                     <div> <img src="{{url('public/storage').Storage::url($countreis->logo)}}" class="img_120px fa-spin"></div>
                                   @else
                                                  <img src="{{url('')}}/default/flag.gif" class="img_120px">
                                  @endif 
                    </div><!--col-md-12-->
                    <div class="col-md-12 content_btn-actions_model">
                        <!-- /.---------- -->
                        <a href="{{ aurl('countreis/'.$id.'/edit') }}" class="btn btn-success "><i class="fa fa-edit"></i> {{trans('admin.edit_page')}}</a>
                        <span>
                         {!! Form::open(['route'=>['countreis.destroy',$id],'method'=>'delete' ,'class'=>'d-inline-block']) !!}
                            {{  Form::button(' <i class="fa fa-trash">  </i>'.trans('admin.delete_fast').'<img src="'.asset('/default/alert.gif').'" class="w_h_20px">', ['type' => 'submit', 'class' => 'btn btn-danger   btn_alert_delete_htis  '] )  }}
                            {!! Form::close() !!}
                       </span>
                    
                        <button type="button" class="btn btn-warning" data-dismiss="modal">{{ trans('admin.close') }}  <i class="fas fa-times"> </i></button>
                        <!-- /.----------------------------------------------------------------- -->
                    </div><!--col-md-12-->
                    
                </aside><!--model_actions row-->
            <!-- /.---------- -->
            {!! Form::close() !!}
            <!-- /.----------------------------------------------------------------- -->
            </div>
        </div>
    </div>
</div>
