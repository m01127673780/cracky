<!-- start  Modal lg  Modal lg Create New record--------------- -->
<div class="modal fade bd-example-modal-lg" id="createNewFrontends" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- start  Modal lg------------------>
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- -----------------------------------------------------------------------------}}
                    <div class="box">
                        <div class="box-header">
                            <center class="box-title"><h3 class="head_title">{{ trans('admin.frontends') }}</h3></center>
                        </div>
                        <section class="modal_massage">@include('back.message_error')</section>
                        <!--/.box-header ,'required'=>'required' -->
                        <!-- /.----------------------------------------------------------------- -->

                        <!-- /.----------------------------------------------------------------- -->
                                <div class="box-body">
                                    {!! Form::open(['url'=>aurl('frontends'),'files'=>true]) !!}
                                   <!-- /.---------- -->
                                   {{ Form::button('<i class="fa fa-location-arrow ">'
                                    . trans('admin.save').'
                                     </i> <i class="fa fa-th"> </i> ' ,
                                    ['type' => 'submit', 'class' => 'm_b_20px  btn btn-primary   form-control m_b_20px'] )
                                    }}
                                    <!-- /.---------- -->
                                               
                                <!--******************************************************-->
                                <section class="row">
                                    <aside class="col-md-6" >
                                     <!------------------------ Start Icon -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('icon',trans('admin.custom_icon'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('icon',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->icon))
                                             <div class="text-center  ">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->icon)}}" class="img_100px">
                                             </div>
                                        @else
                                             <div class="text-center img_100px ">
                                                <img   src="{{url('default')}}/icon.png" class="img_100px text-center">
                                            </div>
                                        @endif
                                    <!------------------------ End Icon -->
                                    </aside><!--col-md-6-->
                                    <aside class="col-md-6" >
                                     <!------------------------ Start logo -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('logo',trans('admin.custom_logo'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('logo',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->logo))
                                             <div class="text-center  ">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->logo)}}" class="img_100px">
                                             </div>
                                        @else
                                             <div class="text-center img_100px ">
                                                <img   src="{{url('default')}}/logo.png" class="img_100px text-center">
                                            </div>
                                        @endif
                                    <!------------------------ End logo -->
                                </aside><!--col-md-6-->
                                </section><!--row-->
                                <!--******************************************************-->
                                                                       
                                <!--******************************************************-->
                                <section class="row">
                                    <aside class="col-md-9" >
                                     <!------------------------ Start img_larg -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('img_larg',trans('admin.custom_img_larg'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('img_larg',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->img_larg))
                                             <div class="">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->img_larg)}}" class="img_preview">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/img_larg.png" class="img_preview ">
                                            </div>
                                        @endif
                                    <!------------------------ End img_larg -->
                                    </aside><!--col-md-9-->
                                    <aside class="col-md-3" >
                                     <!------------------------ Start img_insid -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('img_insid',trans('admin.custom_img_insid'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('img_insid',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->img_insid))
                                             <div class=" ">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->img_insid)}}" class=" img_preview">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/img_insid.png" class="img_preview">
                                            </div>
                                        @endif
                                    <!------------------------ End img_insid -->
                                </aside><!--col-md-3-->
                                </section><!--row-->
                                <!--******************************************************-->
                                       <!-- section_three_img -->
                                <!--******************************************************-->
                                <section class="row">
                                    <aside class="col-md-4" >
                                     <!------------------------ Start section_three_img_one -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('section_three_img_one',trans('admin.section_three_img_one'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('section_three_img_one',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->section_three_img_one))
                                             <div class="">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->section_three_img_one)}}" class="img_preview_250px">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/section_three_img_one.png" class="img_preview_250px ">
                                            </div>
                                        @endif
                                    <!------------------------ End section_three_img_one -->
                                    </aside><!--col-md-4-->
                                    <aside class="col-md-4" >
                                     <!------------------------ Start section_three_img_two -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('section_three_img_two',trans('admin.custom_section_three_img_two'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('section_three_img_two',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->section_three_img_two))
                                             <div class=" ">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->section_three_img_two)}}" class=" img_preview_250px">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/section_three_img_two.png" class="img_preview_250px">
                                            </div>
                                        @endif
                                    <!------------------------ End section_three_img_two -->
                                </aside><!--col-md-4--> 
                                <aside class="col-md-4" >
                                     <!------------------------ Start section_three_img_three -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('section_three_img_three',trans('admin.custom_section_three_img_three'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('section_three_img_three',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->section_three_img_three))
                                             <div class=" ">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->section_three_img_three)}}" class=" img_preview_250px">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/section_three_img_three.png" class="img_preview_250px">
                                            </div>
                                        @endif
                                    <!------------------------ End section_three_img_three -->
                                </aside><!--col-md-4-->
                                </section><!--row-->
                                <!--******************************************************-->
                                                                           <!-- section_three_img -->
                                <!--******************************************************-->
                                <section class="row">
                                    <aside class="col-md-6" >
                                     <!------------------------ Start   -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('section_tow_img_one',trans('admin.section_tow_img_one'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('section_tow_img_one',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->section_tow_img_one))
                                             <div class="">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->section_tow_img_one)}}" class="img_preview_300px">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/section_tow_img_one.png" class="img_preview_300px ">
                                            </div>
                                        @endif
                                    <!------------------------ End section_tow_img_one -->
                                    </aside><!--col-md-6-->
                                    <aside class="col-md-6" >
                                     <!------------------------ Start section_tow_img_two -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('section_tow_img_two',trans('admin.custom_section_tow_img_two'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('section_tow_img_two',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->section_tow_img_two))
                                             <div class=" ">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->section_tow_img_two)}}" class=" img_preview_300px">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/section_tow_img_two.png" class="img_preview_300px">
                                            </div>
                                        @endif
                                    <!------------------------ End section_tow_img_two -->
                                </aside><!--col-md-6--> 
                                </section><!--row-->
                                <!--******************************************************-->
                                    
                                     <!-- section_Footer -->
                                <!--******************************************************-->
                                <section class="row">
                                    <aside class="col-md-6" >
                                     <!------------------------ about_ar -->
                                    <div class="form-group">
                                    {!! Form::label('section_footer_about_ar',trans('admin.section_footer_about_ar')) !!}
                                    {!! Form::textarea('section_footer_about_ar',frontend()->section_footer_about_ar,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End section_footer_about_ar -->
                                    </aside><!--col-md-6-->
                                    <aside class="col-md-6" >
                                     <!------------------------ section_footer_about_en -->
                                    <div class="form-group">
                                    {!! Form::label('section_footer_about_en',trans('admin.section_footer_about_en')) !!}
                                    {!! Form::textarea('section_footer_about_en',frontend()->section_footer_about_en,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End section_footer_about_en -->
                                </aside><!--col-md-6--> 
                                </section><!--row-->
                                <!--******************************************************-->
                                                                        <!-- section_section_footer_img -->
                                <!--******************************************************-->
                                <section class="row">
                                    <aside class="col-md-4" >
                                     <!------------------------ Start section_footer_img_about -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('section_footer_img_about',trans('admin.section_footer_img_about'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('section_footer_img_about',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->section_footer_img_about))
                                             <div class="">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->section_footer_img_about)}}" class="img_preview_250px">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/section_footer_img_about.png" class="img_preview_250px ">
                                            </div>
                                        @endif
                                    <!------------------------ End section_footer_img_about -->
                                    </aside><!--col-md-4-->
                                    <aside class="col-md-4" >
                                     <!------------------------ Start section_footer_img_payment_methods -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('section_footer_img_payment_methods',trans('admin.custom_section_footer_img_payment_methods'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('section_footer_img_payment_methods',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->section_footer_img_payment_methods))
                                             <div class=" ">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->section_footer_img_payment_methods)}}" class=" img_preview_250px">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/section_footer_img_payment_methods.png" class="img_preview_250px">
                                            </div>
                                        @endif
                                    <!------------------------ End section_footer_img_payment_methods -->
                                </aside><!--col-md-4--> 
                                <aside class="col-md-4" >
                                     <!------------------------ Start section_footer_payment_methods -->
                                        <div class="input-group ">
                                            <div class="custom-file">
                                                {!! Form::label('section_footer_payment_methods',trans('admin.custom_section_footer_payment_methods'),['class'=>'custom-file-label']) !!}
                                                {!! Form::file('section_footer_payment_methods',['class'=>'custom-file-input'] ) !!}
                                            </div>
                                        </div>
                                        @if(!empty(frontend()->section_footer_payment_methods))
                                             <div class=" ">
                                                <img   src="{{url('public/storage').Storage::url(frontend()->section_footer_payment_methods)}}" class=" img_preview_250px">
                                             </div>
                                        @else
                                             <div class=" ">
                                                <img   src="{{url('default')}}/section_footer_payment_methods.png" class="img_preview_250px">
                                            </div>
                                        @endif
                                    <!------------------------ End section_footer_payment_methods -->
                                </aside><!--col-md-4-->
                                </section><!--row-->
                                <!--******************************************************-->
                                  <!-- section_Footer -->
                                <!--******************************************************-->
                                <section class="row">
                   
                                    <aside class="col-md-6" >
                                     <!------------------------ section_footer_address_en -->
                                    <div class="form-group">
                                    {!! Form::label('section_footer_address_en',trans('admin.section_footer_address_en')) !!}
                                    {!! Form::text('section_footer_address_en',frontend()->section_footer_address_en,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End section_footer_address_en -->
                                </aside><!--col-md-6-->
                                <aside class="col-md-6" >
                                     <!------------------------ section_footer_address_ar -->
                                    <div class="form-group">
                                    {!! Form::label('section_footer_address_ar',trans('admin.section_footer_address_ar')) !!}
                                    {!! Form::text('section_footer_address_ar',frontend()->section_footer_address_ar,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End section_footer_address_ar -->
                                </aside><!--col-md-6-->                    
                                <aside class="col-md-6" >
                                     <!------------------------ section_footer_phone -->
                                    <div class="form-group">
                                    {!! Form::label('section_footer_phone',trans('admin.section_footer_phone')) !!}
                                    {!! Form::text('section_footer_phone',frontend()->section_footer_phone,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End section_footer_phone -->
                                </aside><!--col-md-6-->
                                <aside class="col-md-6" >
                                     <!------------------------ section_footer_email -->
                                    <div class="form-group">
                                    {!! Form::label('section_footer_email',trans('admin.section_footer_email')) !!}
                                    {!! Form::text('section_footer_email',frontend()->section_footer_email,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End section_footer_email -->
                                </aside><!--col-md-6-->
                                 <aside class="col-md-6" >
                                     <!------------------------ section_footer_sen_message -->
                                    <div class="form-group">
                                    {!! Form::label('section_footer_sen_message',trans('admin.section_footer_sen_message')) !!}
                                    {!! Form::text('section_footer_sen_message',frontend()->section_footer_sen_message,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End section_footer_sen_message -->
                                </aside><!--col-md-6-->
                                <aside class="col-md-6" >
                                     <!------------------------ facebook -->
                                    <div class="form-group">
                                    {!! Form::label('facebook',trans('admin.facebook')) !!}
                                    {!! Form::text('facebook',frontend()->facebook,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End facebook -->
                                </aside><!--col-md-6--> 
                                <aside class="col-md-6" >
                                     <!------------------------ twitter -->
                                    <div class="form-group">
                                    {!! Form::label('twitter',trans('admin.twitter')) !!}
                                    {!! Form::text('twitter',frontend()->twitter,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End twitter -->
                                </aside><!--col-md-6-->                             
                                 <aside class="col-md-6" >
                                     <!------------------------ instagram -->
                                    <div class="form-group">
                                    {!! Form::label('instagram',trans('admin.instagram')) !!}
                                    {!! Form::text('instagram',frontend()->instagram,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End instagram -->
                                </aside><!--col-md-6-->                              
                                <aside class="col-md-6" >
                                     <!------------------------ gmail -->
                                    <div class="form-group">
                                    {!! Form::label('gmail',trans('admin.gmail')) !!}
                                    {!! Form::text('gmail',frontend()->gmail,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End gmail -->
                                </aside><!--col-md-6-->                              
                                <aside class="col-md-6" >
                                     <!------------------------ section_footer_sen_email -->
                                    <div class="form-group">
                                    {!! Form::label('section_footer_sen_email',trans('admin.section_footer_sen_email')) !!}
                                    {!! Form::text('section_footer_sen_email',frontend()->section_footer_sen_email,['class'=>'form-control']) !!}
                                    </div>
                                    <!------------------------ End section_footer_sen_email -->
                                </aside><!--col-md-6--> 
                                </section><!--row-->
                                <!--******************************************************-->
                                                                   <!-- /.---------- -->
                                   {{ Form::button('<i class="fa fa-location-arrow ">'
                                    . trans('admin.save').'
                                     </i> <i class="fa fa-th"> </i> ' ,
                                    ['type' => 'submit', 'class' => 'm_b_20px  btn btn-primary   form-control m_b_20px'] )
                                    }}
                                    <!-- /.---------- -->
             
                                <!-- ======================================================================================== -->
                                     {!! Form::close() !!}
                                </div> <!-- /.box-body -->
                                <!-- /.----------------------------------------------------------------- -->
                        <!-- /.----------------------------------------------------------------- -->
                     </div><!-- /.box -->
                    {{-- -----------------------------------------------------------------------------}}
                </div><!-- /.container-fluid -->
            </div><!-- /.modal-body -->
            <!--  End   Modal  lg---------------- -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog modal-lg -->
</div><!-- /.modal fade bd-example-modal-lg -->
<!-- End  Modal lg Create New record  ---------------- -->
