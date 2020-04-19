{{--<a href="{{ aurl('admin/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}
{{--<a href="{{ aurl('countreis/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_admins{{ $id }}"><i class="fa fa-edit"></i></button>
<!-- Modal -->
<div id="edit_admins{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="  card_dark">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><apan class="btn btn-danger">&times;</apan></button>
                {{--                <h4 class="modal-title">{{ trans('admin.close') }}</h4>--}}
            </div>
            <div class="modal-body content_form_modal_edit_admins">
                <!-- /.----------------------------------------------------------------- -->
                {!! Form::open(['route'=>['admin.update',$id],'method'=>'put','class'=>'form_save_in_modal','files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('name',trans('admin.name')) !!}
                    {!! Form::text('name',$name,['class'=>'form-control','class'=>'form-control']) !!}
                </div><!-- /.form-group name -->
                <div class="form-group">
                    {!! Form::label('email',trans('admin.email')) !!}
                    {!! Form::email('email',$email,['class'=>'form-control' ]) !!}
                </div><!-- /.form-group country_name_en -->
                <div class="form-group">
                    {!! Form::label('password',trans('admin.password')) !!}
                    {!! Form::password('password',['class'=>'form-control' ]) !!}
                </div><!-- /.form-group name -->

                <aside class="row model_actions">
                    <div class="col-md-8 content_btn-actions_model">  </div><!--col-md-8-->
                    <div class="col-md-4"></div><!--col-md-4-->
                </aside><!--model_actions row-->
                <!-- /.---------- -->
                   <aside class="buttons_actions_modal">
                            {{ Form::button('<i class="fa fa-location-arrow ">'
                            . trans('admin.save').'
                            </i> <i class="fa fa-flag-usa"> </i> ' ,
                            ['type' => 'submit', 'class' => '  btn btn-info   btn_save_form_in_modal-'] )
                            }}
                            {!! Form::close() !!}
                            <!-- /.---------- -->
                            <a href="{{ aurl('admin/'.$id.'/edit') }}" class="btn btn-success "><i class="fa fa-edit"></i> {{trans('admin.edit_page')}}</a>
                            <span>
                            {!! Form::open(['route'=>['admin.destroy',$id],'method'=>'delete' ,'class'=>'d-inline-block']) !!}
                            {{  Form::button(' <i class="fa fa-trash">  </i>'.trans('admin.delete_fast').'<img src="'.asset('/default/alert.gif').'" class="w_h_20px">', ['type' => 'submit', 'class' => 'btn btn-danger   btn_alert_delete_htis  '] )  }}
                            {!! Form::close() !!}
                            </span>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">{{ trans('admin.close') }}  <i class="fas fa-times"> </i></button>
                   </aside><!--buttons_actions_modal-->
                <!-- /.----------------------------------------------------------------- -->
            </div><!--./ modal-body-->
        </div><!--./ card_dark-->
    </div><!--./ modal-content-->
</div><!--./ modal-dialog-->
</div><!--./ modal fade-->