             
     @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp 
  <!-- ============================================================start section footer -->
    <section class="bg_f9f9f9  content_flex_four_section m_t_60px" >        
    <div class="container-fluid">
        <div class="row content_footer">
            <div class=" col-md-4 col-sm-12   border_r wow   fadeInLeft  box_one "   data-wow-duration="2s"     >
           <div class="content_footer_newsletter  text-right">
       <!-- ---------------------------------------------------------------- -->
                  <div class="content_footer_copyright_social">
                    <div class="container">
                       <div class="row">
                           <!----------------- -->
                                <form class="form-inline subscribe">
                                         <button type="submit" class="btn btn-primary mb-2">Send</button>
                                         <div class="form-group mx-sm-3 mb-2 content_input">
                                            <label for="inputPassword2" class="sr-only">{{trans('admin.send')}}</label>
                                            <input type="password" class="form-control" id="inputPassword2" placeholder="{{trans('admin.short_message')}}">
                                        </div>
                                </form>  
                                 <div class="content_middle">
                                    <div class=" middle">
                                      <a class=" btn_media" href="{{frontend()->facebook}}">  <i class=" fa fa-facebook">    </i></a>
                                      <a class=" btn_media" href=" <?php echo frontend()->twitter ?> ">   <i class=" fa fa-twitter">     </i></a>
                                      <a class=" btn_media" href="{{frontend()->gmail}}">       <i class=" fa fa-google">      </i></a>
                                      <a class=" btn_media" href="{{frontend()->instagram}}">   <i class=" fa fa-instagram">    </i></a>
                                  </div><!--middle--> 
                                  <!--<a href=" <?php echo frontend()->twitter ?>"> <?php echo frontend()->twitter ?></a>-->
                                  </div><!--content_middle-->  
                                  <div class="text-right contact_us_footer  " >
                                    <p>{{trans('admin.email')}}     : {{frontend()->section_footer_address_en}}</p>
                                    <p>{{trans('admin.phone')}}     : {{frontend()->section_footer_phone}}</p>
                                    <p> {{trans('admin.address')}}  : {{frontend()->section_footer_email}}t</p>
                                  </div><!-- contact_us_footer -->
                               <div class="content_bitmap">                          
                                <a href="#">
                                 @if(!empty(frontend()->section_footer_img_payment_methods))
                                      <img  class=""src="{{url('public/storage').Storage::url(frontend()->section_footer_img_payment_methods)}}">
                                  @else
                                       <img class=""  src="{{url('default')}}/section_footer_img_payment_methods.png" >
                                  @endif 
                               </a>
                              </div><!--/.content_bitmap-->
                           <!-- ------------->
                        </div><!--row-->
                       </div><!--container--> 
                    </div><!--content_footer_copyright_social-->
                <!-- -------------------------------------------------------------------------- -->
              </div><!--/.content_footer_newsletter-->
         </div><!--/.col-md-4-->
            <!-- -------------------------------------------------------------- -->
             <div class="col-md-2 d-sm-none d-md-block box_two  none_sm  wow  fadeInLeft      "   data-wow-duration="2s"  >
           <div class="content_footer_links" >
               <div class="  "  >
                  <ul class="list-unstyled    ul_links text-center">
                    @foreach($products_paginate_footer_two as $product_paginate_two)
                       <li class="list-group-item li_link_footer">
                        <a href="{{$product_paginate_two->id}} ">
                           <i class="fa fa-angle-double-right"></i>  <span class="name_link"> {{$product_paginate_two['product_name_'.$lang]}}</span>  
                            <span>
                               <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product_paginate_two->photo}}">
                            </span> 
                        </a>
                      </li>
                        @endforeach
                  </ul> 
              </div>
           </div><!--/.content_footer_links-->
        </div><!--/.col-md-2-->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->


          <div class="col-md-2 d-md-block col none_sm wow box_three   fadeInRight "      data-wow-duration="2s"  >
           <div class="content_footer_links" >
               <div class="  "  >
                  <ul class="list-unstyled    ul_links text-center">
                      <li>
                       @foreach($products_paginate_footer_one as $product_paginate_one)
                       <li class="list-group-item li_link_footer">
                        <a href="{{$product_paginate_one->id}} ">
                           <i class="fa fa-angle-double-right"></i>  <span class="name_link"> {{$product_paginate_one['product_name_'.$lang]}}</span>  
                            <span>
                               <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product_paginate_one->photo}}">
                            </span> 
                        </a>
                      </li>
                        @endforeach
                     </li> 
                  </ul> 
              </div>
           </div><!--/.content_footer_links-->
        </div><!--/.col-md-2-->
         <!-- -------------------------------------------------------------- -->
         <div class=" col-md-4 col-sm-12 box_four none_sm  border_l wow   fadeInRight  "   data-wow-duration="2s"  >
           <div class="content_footer_info">
                <p class="font_s_14 text-right">
                    @if(!empty(frontend()->section_footer_img_about))
                 
                    <img  class="w_50_px"src="{{url('public/storage').Storage::url(frontend()->section_footer_img_about)}}">
                @else
                    <img class="w_50_px"src="{{url('default')}}/section_footer_img_about.png" >
                @endif
 
                              <span> {{frontend()['section_footer_about_'.$lang]}}</span>  

                </p>
              </div><!--/.content_footer_info-->
            </div><!--/. col-md-4 col-sm-12  -->
            <!-- -------------------------------------------------------------- -->

          </div><!--End row-->
      </div><!--End container-->
  </section><!--End section-->
  <!--  =================================End section footer -->
  <!--  =================================start section section_copyright -->

  <section class="section_copyright wow    fadeInUp "   data-wow-duration="2s"  >
  <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="curveUpColor" class="bg_f9f9f9">
    <path class="paths_setionpath_footre" d="M0 100 C 20 0 50 0 100 100 Z" ></path>
  </svg>
  <section class="   bg_ffcc00 "  >        
      <div class="container-fluid  bg_ffcc00 ">
           <div class="container  bg_ffcc00 ">
             <div class="row  ">
                <!--------------------------------->
                <div class="col-md-6">
                    <div class=" p_copyright">                 
                         <span>{{trans('admin.copyright')}} <a href="http://cracky-eg.com/">cracky-eg.com</a></span>
                    </div><!--/.content_bitmap-->
               </div><!--/.col-md-6-->
               <!--------------------------------->
                <div class="col-md-6 copyright">
                    <P class="p_powered_by">
                         <p> Powered By :  syade.com <a class="d-inline" href="PixeL-eg.com"></a>
                            <div class="d-inline content_copyright "  >
                                 <div class=" middle">
                                      <a class=" btn_media" href="#"> <i class=" fa fa-facebook"></i></a>
                                      <a class=" btn_media" href="#"> <i class=" fa fa-twitter"></i></a>
                                      <a class=" btn_media" href="#"> <i class=" fa fa-google"></i></a>
                                      <a class=" btn_media" href="#"> <i class=" fa fa-instagram"></i></a>
                                 </div>
                              </div><!--col-md-6--> 
                          </p>
                      </P>      
                  </div><!--/.col-md-6-->
              <!-- ----------------------------------- -->
            </div><!--End row-->
          </div><!--End container-fluid-->
       </div><!--End container-->
  </section><!--End section-->
  </section><!--./wow-->
   <!-- ============================================================End   section section_copyright -->







 
