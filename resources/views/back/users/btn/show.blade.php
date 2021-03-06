{{--<a href="{{ aurl('users/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-success btn_show_user_none_bg " data-toggle="modal" data-target="#show_users{{ $id }}"><i class="fa fa-eye"></i></button>
<!-- Modal -->
<div id="show_users{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><apan class="btn btn-danger">&times;</apan></button>
             </div>
             <div class="modal-body">
                <!-- /.----------------------------------------------------------------- -->
                 {!! Form::open(['url'=>aurl('users/'.$id),'method'=>'get']) !!}
                <div class="form-group">
                    {!! Form::label('name',trans('admin.name')) !!}
                    {!! Form::text('name',$name,['class'=>'form-control','class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group name -->
                <div class="form-group">
                    {!! Form::label('email',trans('admin.email')) !!}
                    {!! Form::text('email',$email,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group name -->
                <div class="form-group">
                    {!! Form::label('email',trans('admin.created_at')) !!}
                    {!! Form::text('email',$created_at,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group name -->
                <div class="form-group">
                    {!! Form::label('email',trans('admin.updated_at')) !!}
                    {!! Form::text('email',$updated_at,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group name -->
                 <div class="form-group">
                    {!! Form::label('email',trans('admin.level')) !!}
                    {!! Form::text('email',$level,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                 </div><!-- /.form-group name -->
                {!! Form::close() !!}
                <aside class="buttons_actions_modal">
                <!-- /.---------- -->
                    <a href="{{ aurl('users/'.$id.'/edit') }}" class="btn btn-success "><i class="fa fa-edit"></i> {{trans('admin.edit_page')}}</a>
                    <span>
                        {!! Form::open(['route'=>['users.destroy',$id],'method'=>'delete' ,'class'=>'d-inline-block']) !!}
                        {{  Form::button(' <i class="fa fa-trash">  </i>'.trans('admin.delete_fast').'<img src="'.asset('/default/alert.gif').'" class="w_h_20px">', ['type' => 'submit', 'class' => 'btn btn-danger   btn_alert_delete_htis  '] )  }}
                        {!! Form::close() !!}
                            </span>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">{{ trans('admin.close') }}  <i class="fas fa-times"> </i></button>
                </aside><!--buttons_actions_modal-->
             <!-- /.----------------------------------------------------------------- -->
             </div>
        </div><!--modal-content-->
    </div><!--./modal-dialog-->
</div><!--#show_users-->
