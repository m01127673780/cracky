{{--<a href="{{ aurl('users/'.$id.'/edit') }}" class="btn btn-info"><i class="fa fa-edit"></i></a>--}}


<button type="button" class="btn btn-info " data-toggle="modal" data-target="#edit_users{{ $id }}"><i class="fa fa-edit"></i></button>
<!-- Modal -->
<div id="edit_users{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><apan class="btn btn-danger">&times;</apan></button>
            </div>
            <div class="modal-body">
                <!-- /.----------------------------------------------------------------- -->
                 {!! Form::open(['route'=>['users.update',$id],'method'=>'put','class'=>'form_save_in_modal','files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('name',trans('admin.name')) !!}
                    {!! Form::text('name',$name,['class'=>'form-control','class'=>'form-control']) !!}
                </div><!-- /.form-group name -->
                <div class="form-group">
                    {!! Form::label('email',trans('admin.email')) !!}
                    {!! Form::text('email',$email,['class'=>'form-control' ]) !!}
                </div><!-- /.form-group email -->
                <div class="form-group">
                    {!! Form::label('created_at',trans('admin.created_at')) !!}
                    {!! Form::text('created_at',$created_at,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group created_at -->
                <div class="form-group">
                    {!! Form::label('updated_at',trans('admin.updated_at')) !!}
                    {!! Form::text('updated_at',$updated_at,['class'=>'form-control','disabled'=>'disabled' ]) !!}
                </div><!-- /.form-group updated_at -->
                <div class="form-group">
                    {!! Form::label('password',trans('admin.password')) !!}
                    {!! Form::password('password',['class'=>'form-control' ]) !!}
                </div><!-- /.form-group password -->
                <div class="form-group">
                    {!! Form::label('level',trans('admin.level')) !!}
                    {!! Form::select('level'    ,[
                    'user'        =>trans('admin.user'),
                    'vendor'      =>trans('admin.vendor'),
                    'company'     =>trans('admin.company'),
                    'labor_Office'=>trans('admin.labor_Office'),
                    'corporation' =>trans('admin.corporation'),
                    'store'       =>trans('admin.store')
                    ],$level,['class'=>'form-control','placeholder'=>'........................']) !!}
                </div><!-- /.form-group name -->
                <aside class="buttons_actions_modal ">
                    {{ Form::button('<i class="fa fa-location-arrow ">'
                    . trans('admin.save').'
                    </i> <i class="fas fa-user"> </i> ' ,
                    ['type' => 'submit', 'class' => '  btn btn-info   btn_save_form_in_modal-- bottom_0'] )
                    }}
                    {!! Form::close() !!}
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
