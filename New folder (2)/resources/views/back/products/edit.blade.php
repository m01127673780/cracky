@extends('back.index')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper content_wrapper_datatable">
            <!-- Content Header (Page header) -->
            <!-- Main content -->      <div class="box-body">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card card_dark">
                            <div class="card-header">
                                <h3 class="card-title">{{$title}}</h3>
                            </div>
                        @include('back.message')
                        <!-- /.card-header -->
                         <div class="card-body form_dark">
                            <!-- /.----------------------------------------------------------------- -->
                             <div class="box-body">
                                    {!! Form::open(['url'=>aurl('products/'.$products->id),'method'=>'put','files'=>true]) !!}
                                   <div class="row">
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-cube"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                     }}
                                   <div class="col-md-6 content_form_ar" >
                                    <div class="form-group">
                                        {!! Form::label('product_name_ar',trans('admin.product_name_ar')) !!}
                                        {!! Form::text('product_name_ar',$products->product_name_ar,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group product_name_en -->
                                    <div class="form-group">
                                        {!! Form::label('price',trans('admin.price')) !!}
                                        {!! Form::text('price',$products->price,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group price -->
                                     <div class="form-group">
                                        {!! Form::label('description_ar',trans('admin.description_ar')) !!}
                                        {!! Form::textarea('description_ar',$products->description_ar,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description_ar -->
                                     <!----------------start  photo-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('photo',trans('admin.photo_products'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                    <div class="text-center">
                                         @if(!empty($products->photo))
                                         <div class="text-center"> <img src="{{url('public/storage').Storage::url($products->photo)}}" class="img_100px  "></div>
                                         @else
                                         <div class="text-center">  <img   src="{{url('default')}}/product.png" class="img_100px"></div>
                                         @endif
                                    </div>
                                   <!----------------End photo-->
                                   <div class="form-group">
                                        {!! Form::label('price_offer',trans('admin.price_offer')) !!}
                                        {!! Form::text('price_offer',$products->price_offer,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group price_offer --> 
                                    <div class="form-group">
                                        {!! Form::label('add_by_ar',trans('admin.add_by_ar')) !!}
                                        {!! Form::text('add_by_ar',$products->add_by_ar,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group add_by_ar -->
                                  
                                   </div><!--col-md-6 content_form_ar-->
                                   <div class="col-md-6 content_form_en" >
                                   <div class="form-group">
                                        {!! Form::label('product_name_en',trans('admin.product_name_en')) !!}
                                        {!! Form::text('product_name_en',$products->product_name_en,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group product_name_en --> 
                                   <div class="form-group">
                                        {!! Form::label('price_old',trans('admin.price_old')) !!}
                                        {!! Form::text('price_old',$products->price_old,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group price_old -->
                                    
                                      <div class="form-group">
                                        {!! Form::label('description_en',trans('admin.description_en')) !!}
                                        {!! Form::textarea('description_en',$products->description_en,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group description_en -->
                                   <!----------------start  add_by_photo-->
                                    <div class="input-group ">
                                        <div class="custom-file">
                                            {!! Form::label('add_by_photo',trans('admin.add_by_photo_products'),['class'=>'custom-file-label']) !!}
                                            {!! Form::file('add_by_photo',['class'=>'custom-file-input','id'=>'inputGroupFile02'] ) !!}
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        @if(!empty($products->add_by_photo))
                                        <div class="text-center"> <img src="{{url('public/storage').Storage::url($products->add_by_photo)}}" class="img_100px  "></div>
                                        @else
                                        <div class="text-center">  <img   src="{{url('default')}}/product.png" class="img_100px"></div>
                                        @endif

                                         </div>
                                  <!----------------End add_by_photo-->
                                   <div class="form-group">
                                        {!! Form::label('discount',trans('admin.discount')) !!}
                                        {!! Form::text('discount',$products->discount,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group discount -->
                                    <div class="form-group">
                                        {!! Form::label('add_by_en',trans('admin.add_by_en')) !!}
                                        {!! Form::text('add_by_en',$products->add_by_en,['class'=>'form-control','class'=>'form-control' ]) !!}
                                    </div><!-- /.form-group add_by_en -->
                                   </div><!--col-md-6 content_form_en-->
                                </div><!--row-->
                                    {{ Form::button('<i class="fa fa-location-arrow "> '
                                        . trans('admin.save').'
                                        </i> <i class="fas fa-cube"> </i> ' ,
                                        ['type' => 'submit', 'class' => 'form-control btn btn-info btn-lg'] )
                                    }}
                                    {!! Form::close() !!}
                                </div><!-- box-body-->
                                <!-- /.----------------------------------------------------------------- -->
                            </div> <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
   @endsection