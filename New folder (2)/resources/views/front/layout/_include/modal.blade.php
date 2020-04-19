    @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp
   <style type="text/css">
                                  .container_fluid_modal{
                                    background: #fff;
                                    margin-top: 50px;
                                    position: relative;
                                  } 

                                      .modal_body_zoome{
                                    margin-top:50px;
                                  }
                                      .btn_modal_close i{
                                    background: none;
                                  }
                                  .btn_modal_close  {
                                    position: absolute;
                                    top: -39px;
                                    right: -38px;
                                  }
                                </style> 
                                <!-- ========================================================= start model  -->
  
                       <!-- ======================================start  Modal show product for All products  -->
                              @foreach($products as $product)
                             <!-- ===================================img====================== start model  -->
                            <!-- Button trigger modal -->
                            <!-- Large modal -->
                            <div class="modal fade product{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                              <div class="modal-dialog ">
                                <div class="modal-content modal_content_show ">
                                    
                                    <!-- -------------------------------------------- -->
                                        <div class="modal-body modal_body_zoome">
                                               <div class="container-fluid container_fluid_modal" style="">
                                                       <button type="button" class="btn btn-danger btn_modal_close" data-dismiss="modal"><i class="fa fa-close"  ></i></button>
                                         <!-- -------------------------------------------- -->
                                          <div class="row row_content_img_details">

                                  <div class="col-md-6 col-xs-6 col_content_disc_deatils">
                                      <div class="content_disc_deatils text-right">
                                         <div class="content_slider_product_discount    ">
                                       <div class="card card_disc_deatils border_none  ">
                                          <div class="card-body m_t_50px">
                                            <span class="card-text  title_product_deatils     ">{{$product['product_name_'.$lang]}} <span>.</span>
                                            </span>
                                              <p class=" text_r content_icons_stars "> 
                                              <i class="fa fa-star color_star font_s_9" aria-hidden="true"></i>
                                              <i class="fa fa-star color_star font_s_9" aria-hidden="true"></i>
                                              <i class="fa fa-star color_star font_s_9" aria-hidden="true"></i>
                                              <!--<i class="fa fa-star-o color_star font_s_9" aria-hidden="true"></i>-->
                                              <i class="fa fa-star-half-o color_star font_s_9" aria-hidden="true"></i> 
                                              </p><!--/. content_icons_stars--> 
                                              <!-- --------------- -->
                                              <p class="text_r">
                                              <span class="price   d-none ">  لأقسام  :  </span>
                                              <!--<a href="#" > {{$product->product_name_ar}} </a>-->
                                              </p>
                                              <!-- --------------- -->
                                              <p>
                                             @if(!empty($product->add_by_photo))
                                              <a href="#">
                                              <img src="{{url('public/storage').'/'.$product->add_by_photo}}" class="  " style="    height: 75px;  width: 100px;">
                                              </a>
                                           
                                                         <span class="price ">:  من قبل    </span> 
                                                         @endif
                                              </p> 
                                              <!-- --------------- -->
                                              <p>
                                               <span class="price  d-none  ">:  الوصف </span>
                                               </p><article class="discrption_product_details">
                                              {{$product['description_'.$lang]}}
                                              </article>
                                               <p></p><!--/--> 
                                              <!-- --------------- -->
                                              <p class="text_r p_t_10">
                                                <span class="  price_through"><span>{{trans('admin.egy')}}</span>  {{$product->price}}  </span>
                                              <span class="price ">
                                                <span> {{trans('admin.egy')}}</span> {{$product->price_old}}  </span>  
                                              </p><!--/. text_r--> 
                                              <!-- --------------- -->
                                              </div><!--/. card-body--> 
                                          </div><!--/. card--> 
                                       </div><!--End content_slider_product_1-->
                                      <!-- ********************************************hover -->
                                          <aside class="posi_abs content_hover_product d-block">
                                      <!--     <button class="btn btn-danger btn_eey_product"  data-toggle="modal" data-target=".bd-example-modal-lg"> <i class="pe-7s-look"></i></button> -->
                                          </aside> 
                                          <div class=" posi_a   d-none ">
                                          <button class="btn  btn-outline-danger "> <i class="pe-7s-share"></i></button>
                                          <button class="btn  btn-outline-danger "> <i class="pe-7s-like"></i></button>
                                          <button class="btn  btn-warning ">  <span>اضف الى السله </span><i class="pe-7s-cart"></i></button>
                                          </div>
                                      <!-- ********************************************hover -->
                                      </div><!--./content_disc_deatils -->                
                                  </div><!--/.col-md-6-->
                                   <div class="col-md-6 col-xs-6 ---col_content_img_deatils">
                                        <div class="content_img_deatils zoom" id="zoom"  >
                                          <img src="{{url('public/storage').'/'.$product->photo}}">
                                        </div><!--./content_img_deatils -->
                                  </div><!--/.col-md-6--> 

                                  </div><!--End row-->
                                         <!-- -------------------------------------------- -->
                                         <!-- -------------------------------------------- -->
                                          </div><!--modal-content-->
                                    </div><!--modal-dialog modal-lg-->
                                </div><!--modal   -->
                              </div><!--  -->
                            </div><!--  -->
                            @endforeach
                             @php
                            
                            @endphp
                           
                      <!-- ======================================End Modal show product for All products  -->