
  @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp
                          <!--........................-->
                        <center>
                        <div class="flag m_nono">
                        <h6>{{trans('admin.all')}} <span>{{trans('admin.products')}} </span></h6>
                        <div class="triangle-left"></div>
                        </div>
                         <i class="btn btn-danger icon_pontr_bottom" style="
                            /* float: right; */
margin-right: 119px;
    /* position: absolute!important; */
    right: 0!important;
    height: 40px;
    width: 48px;
    z-index: 99;
    background: #fbba00!important;
    border: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    /* line-height: 17; */
    /* bottom: -78px; */
    margin-top: 2px;
                        ">
                        <i class="fas fa-hand-point-down" aria-hidden="true"></i> 
                        </i>
                        </center>
                        
                        <!--........................-->

  <section class="p_25_0">        
                 <div class="container none_sm">   {{$all_products->links('vendor.pagination.bootstrap-4')}}</div
      <div class="container-fluid">

          <div class="row ">
             <!-- --------------------------------------------- -->
              @foreach($all_products as $all_product)

                   <div class="col-sm-6 col-md-3   col-lg-2   wow  bounceIn m_t_b30px    "   data-wow-duration="2s">
                                                 <div class="card_content_product_min card  border_none m_b_20" style="width:100%;margin: auto; ">
                                                      <button class="btn btn-danger icon_eey_product"
                                                        data-toggle="modal" data-target=".product{{$all_product->id}}">  <i class="pe-7s-look"></i></button>
                                                        <!-- show/product') -->
                                                        <a class="link_product  " href="{{url('show/product/'.$all_product->id)}}">
                                                           <img class="h_300px card-img-top" src="{{url('public/storage').'/'.$all_product->photo}}" alt="Card image cap">
                                                             <div class="card-body">
                                                                     <p class="card-text  text-right  p_disc">{{$all_product['description_' . $lang]}}<span>...</span></p>
                                                                     <p class="card-text  text-right  p_disc">{{$all_product['product_name_' . $lang]}}<span>...</span></p>
                                                                  <p class=" text-right  content_stars" style="margin-bottom: 0"> 
                                                                  <i class="fa fa-star color_star font_s_9"></i>
                                                                  <i class="fa fa-star color_star font_s_9"></i>
                                                                  <i class="fa fa-star color_star font_s_9"></i>
                                                                   <!--<i class="fa fa-star-o color_star font_s_9"></i>-->
                                                                  <i class="fa fa-star-half-o color_star font_s_9"></i> 
                                                                  </p><!--/. text-right--> 
                                                                  <p class="text-right"> <span class="price_min "><span>  {{trans('admin.egy')}}</span>{{$all_product->price}} </span>
                                                                   <span class="  price_through">
                                                                @if(!empty($all_product->price_old))
                                                               <span>{{trans('admin.egy')}}</span>{{$all_product->price_old}} </span>
                                                             </p>
                                                           @endif
                                                              </div>
                                                         </a><!--link_product-->
                                                         <div class="  content_3_icon_hover_product" >
                                                             <button class="btn  btn-outline-danger d-none "> <i class="pe-7s-share"></i></button>
                                                             <button class="btn  btn-outline-danger  d-none "> <i class="pe-7s-like"></i></button>
                                                             <a class="btn  btn-warning " href="{{url('show/product/'.$all_product->id)}}">
                                                               <span> {{trans('admin.show')}}</span><i class="fas fa-link"></i>
                                                             </a>

                                                          </div><!-- content_hover_3_icon_product -->
                                                   </div><!-- card_content_product_min -->
                                             </div><!--/. col-md-3 -->
                                             @endforeach

            <!-- --------------------------------------------- -->

           </div><!--End row-->
                              <div class="container-fluid m_t_b_75px">  <div class=" m_t_75px">    {{$all_products->links('vendor.pagination.bootstrap-4')}}</div>

      </div><!--End container-->
  </section><!--End section-->
  <!-- ============================================================End section larg_img -->