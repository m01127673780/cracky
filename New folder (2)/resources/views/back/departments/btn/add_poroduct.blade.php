{{--<a href="{{ aurl('departments/'.$id.'/edit') }}" class="btn btn-dark"><i class="fa fa-cube"></i></a>--}}

     @push('js')
        <script>
            $(document).ready(function () {
                $('#jstree').jstree({
                    'core' : {
                        'data' : {!! load_dep($parent,$id) !!},
                        "themes": {
                            "name": "default-dark",
                            "dots": true,
                            "variant": "large",
                            "icons": true,
                            "multiple" : true,
                            "animation" : 1000,
                        }
                    },
                    "checkbox" : {
                        "keep_selected_style" : false
                    },
                    "plugins" : [  "wholerow","radio","/*checkbox*/" ]
                });//#jstree
            });//document

            //-----------------------get id
            $('#jstree').on('changed.jstree',function(e,data){
                var  i , j , r =[];//=  var  i[]; var  j[];var  r[];
                for(i=0,j = data.selected.length;i < j;i++ )
                {
                    r.push(data.instance.get_node(data.selected[i]).id);
                }//for
                $('.parent_id').val(r.join(','));
                //1,2,3,4,5,6
            });/*changed*/

        </script>
    @endpush
 <!-- Trigger the modal with a button -->


<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#add_product_departments{{ $id }}"><i class="fa fa-plus"> </i>  {{ trans('admin.add_poroduct_in_this_dep') }}<i class="fa fa-cube"></i></button>
<!-- Modal -->
<div id="add_product_departments{{ $id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start  Modal lg---------------- -->
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- -------------------------------------------------------}}
                    <div class="box">
                        <div class="box-header">
                            <center class="box-title"><h3 class="head_title">{{ trans('admin.create_new_product') }}</h3></center>
                        </div>
                        <section class="modal_massage"> @include('back.message_error') </section>
                        <!-- /.----------------------------------------------------------------- -->
                        <div class="box-body">
                            {!! Form::open(['url'=>aurl('products/create_quick'),'files'=>true]) !!}
                            {!! Form::hidden('department_id',$id,['class'=>'form-control' ]) !!}
                            <div class="row">
                                {{ Form::button('<i class="fa fa-location-arrow "> '
                                    . trans('admin.create_new_product').'
                                    </i> <i class="fas fa-cube"> </i> ' ,
                                    ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                }}
                                <div class="col-md-6 content_form_ar" >
                                    <div class="form-group">
                                        {!! Form::label('product_name_ar',trans('admin.product_name_ar')) !!}
                                        {!! Form::text('product_name_ar',old('product_name_ar'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group product_name_en -->
                                    <div class="form-group">
                                        {!! Form::label('price',trans('admin.price')) !!}
                                        {!! Form::text('price',old('price'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group price -->
                                    <div class="form-group">
                                        {!! Form::label('description_ar',trans('admin.description_ar')) !!}
                                        {!! Form::textarea('description_ar',old('description_ar'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description_ar -->
                                    <!----------------start  photo-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('photo',trans('admin.photo_products'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                    <div class="text-center"> <img   src="{{url('default')}}/product.png" class="img_100px"></div>
                                    <!----------------End photo-->
                                    <div class="form-group">
                                        {!! Form::label('price_offer',trans('admin.price_offer')) !!}
                                        {!! Form::text('price_offer',old('price_offer'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group price_offer -->


                                    <div class="form-group">
                                        {!! Form::label('add_by_ar',trans('admin.add_by_ar')) !!}
                                        {!! Form::text('add_by_ar',old('add_by_ar'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group add_by_ar -->

                                </div><!--col-md-6 content_form_ar-->
                                <div class="col-md-6 content_form_en" >
                                    <div class="form-group">
                                        {!! Form::label('product_name_en',trans('admin.product_name_en')) !!}
                                        {!! Form::text('product_name_en',old('product_name_en'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group product_name_en -->
                                    <div class="form-group">
                                        {!! Form::label('price_old',trans('admin.price_old')) !!}
                                        {!! Form::text('price_old',old('price_old'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group price_old -->

                                    <div class="form-group">
                                        {!! Form::label('description_en',trans('admin.description_en')) !!}
                                        {!! Form::textarea('description_en',old('description_en'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description_en -->
                                    <!----------------start  add_by_photo-->

                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('add_by_photo',trans('admin.add_by_photo_products'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('add_by_photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                    <div class="text-center">  <img   src="{{url('default')}}/product.png" class="img_100px"></div>
                                    <!----------------End add_by_photo-->
                                    <div class="form-group">
                                        {!! Form::label('discount',trans('admin.discount')) !!}
                                        {!! Form::text('discount',old('discount'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group discount -->
                                    <div class="form-group">
                                        {!! Form::label('add_by_en',trans('admin.add_by_en')) !!}
                                        {!! Form::text('add_by_en',old('add_by_en'),['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group add_by_en -->
                                </div><!--col-md-6 content_form_en-->
                                <div class="col-md-12">
                                    <!-- /.-------------------------------------------- start  HTML JS Tree--------------------- -->
                                    <div class="content_departments card_dark">
                                        <!--  start js tree ----------------------------------- -->
                                        <br>
                                        <a class="btn btn-danger    hidden showbtn_control delete_dpe"  data-toggle="modal" data-target="#delete_bootstrap_modal"> <i class="fas fa-trash"></i> {{trans('admin.delete')}}</a>
                                        <a class="btn btn-success   hidden showbtn_control edit_dpe"> <i class="fas fa-edit"></i>{{trans('admin.edit')}}</a>
                                        <a class="btn btn-primary   hidden showbtn_control add_new_product_in_dpe"> <i class="fas fa-plus"></i>{{trans('admin.add_product_in_th_dep')}}</a>
                                        <div class="clearfix"></div>
                                        <div id="jstree"></div>
{{--                                        <input type="hidden" name="department_id" class="department_id" value="{{old('department_id')}}"   >--}}
                                        <div class="clearfix"></div>
                                        <!--  start js tree ----------------------------------- -->
                                    </div><!--content_departments-->
                                    <!-- /.--------------------------------------------- ُEnd HTML JS Tree-------------------- -->
                                    <br>
                                </div>
                            </div><!--row-->
                            {{ Form::button('<i class="fa fa-location-arrow "> '
                                . trans('admin.create_new_products').'
                                </i> <i class="fas fa-cube"> </i> ' ,
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
</div><!--modal fade"-->