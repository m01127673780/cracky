  @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp
           <div class=" item_custom_product">  
                                                 <div class="card_content_product_min card  border_none m_b_20" style="width: 18rem;margin: auto; ">
                                                      <button class="btn btn-danger icon_eey_product"
                                                        data-toggle="modal" data-target=".product{{$product->id}}">  <i class="pe-7s-look"></i></button>
                                                        <!-- show/product') -->
                                                        <a class="link_product  " href="{{url('show/product/'.$product->id)}}">
                                                           <img class="h_300px card-img-top" src="{{url('public/storage').'/'.$product->photo}}" alt="Card image cap">
                                                             <div class="card-body">
                                                                     <p class="card-text  text-right  p_disc">{{$product['description_' . $lang]}}<span>...</span></p>
                                                                     <p class="card-text  text-right  p_disc">{{$product['product_name_' . $lang]}}<span>...</span></p>
                                                                  <p class=" text-right  content_stars" style="margin-bottom: 0"> 
                                                                  <i class="fa fa-star color_star font_s_9"></i>
                                                                  <i class="fa fa-star color_star font_s_9"></i>
                                                                  <i class="fa fa-star color_star font_s_9"></i>
                                                                  <i class="fa fa-star-o color_star font_s_9"></i>
                                                                  <i class="fa fa-star-half-o color_star font_s_9"></i> 
                                                                  </p><!--/. text-right--> 
                                                                  <p class="text-right"> <span class="price_min "><span>  {{trans('admin.egy')}}</span>{{$product->price}} </span>
                                                                   <span class="  price_through">
                                                                @if(!empty($product->price_old))
                                                               <span>{{trans('admin.egy')}}</span>{{$product->price_old}} </span>
                                                             </p>
                                                           @endif
                                                              </div>
                                                         </a><!--link_product-->
                                                         <div class="  content_3_icon_hover_product" >
                                                             <button class="btn  btn-outline-danger d-none "> <i class="pe-7s-share"></i></button>
                                                             <button class="btn  btn-outline-danger  d-none "> <i class="pe-7s-like"></i></button>
                                                             <a class="btn  btn-warning " href="{{url('show/product/'.$product->id)}}">
                                                               <span> {{trans('admin.show')}}</span><i class="fas fa-link"></i>
                                                             </a>

                                                          </div><!-- content_hover_3_icon_product -->
                                                   </div><!-- card_content_product_min -->
                                             </div><!--/. item-->