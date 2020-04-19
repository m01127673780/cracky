@php
$lang = session('lingfront');


@endphp
 <div class="col-md-12 col-lg-2  further_info   h_1000_px section_box_special_offers_two" >
   <section class="content_product_owl_carsoul_col_2 wow  fadeInRight  "   data-wow-duration="2s" >
            <div class="card  " style="width:100%">
 
     <div class="flag m_nono">
		<h6>{{trans('admin.offers')}} <span>{{trans('admin.special')}} </span></h6>
	<div class="triangle-left"></div>
</div>
                   <div class="card-body card_body_detils_special_offers ">
                    <!-- ================================================================================== -->
                     @foreach($products as $product)
                        @if(($product->department_id) == '20')
                               <a href="{{url('show/product/'.$product->id)}}">
                                                              
                                    <aside class="row row_content_special_offers">
                                          
                                            <div class=" bg_page col_p_detils_special_offers" style="width: 50%!important">
                                                <span>{{$product['product_name_'. $lang]}} </span>
                                                <p class="text-right"> <span class="price_min "><span>  {{trans('admin.egy')}}</span>{{$product->price}} </span>
                                                    <span class="  price_through">
                                                    @if(!empty($product->price_old))
                                                         <span>{{trans('admin.egy')}}</span>
                                                         {{$product->price_old}} </span>
                                                    @endif 
                                                </p>
                                            </div><!--col_p_detils_special_offers-->
                                            
                                            <div  style="width: 50%!important" class="content_img_special_offers  zoom">
                                                 <img class="card-img-top-offers" src="{{url('public/storage').'/'.$product->photo}}" alt="Card image cap"> 
                                            </div>
                                    </aside><!--row_content_special_offers-->
                                    </br></br>
                                @endif<!--/. $department->id) == '15' -->
                            </a><!--link_product-->
                        @endforeach
                                <!-- ================================================================================== -->
                      </div><!--card-body-->
                </div><!--card-->
       </section><!--content_col_2--> 
                    <br>
                    <!-- ..................................... -->
                    <section class="section_img_larg  wow  fadeInLeft  "   data-wow-duration="2s">
                    <div class="card m_b_20 m_t_20 dorder_none" style="width:100%">
                           @if(!empty(frontend()->img_insid))
                                <img  class=""src="{{url('public/storage').Storage::url(frontend()->img_insid)}}">
                            @else
                                 <img class=""  src="{{url('default')}}/img_insid.png" >
                            @endif 
                    </div>
                    </section><!--section_img_larg-->
                    <!-- ..................................... -->
                      <section class="content_product_owl_carsoul_col_2 wow  fadeInUp  "   data-wow-duration="2s" >
                        <div class="card  " style="width:100%">
                            <!--........................-->
                            <div class="flag m_nono">
                            <h6>{{trans('admin.the_most')}} <span>{{trans('admin.top_selling')}} </span></h6>
                            <div class="triangle-left"></div>
                            </div>
                            <!--........................-->
                           
                              <div class="card-body">
                                         <!-- ================================================================================== -->
                     @foreach($products as $product)
                        @if(($product->department_id) == '21')
                            <a href="{{url('show/product/'.$product->id)}}">
                                    <aside class="row row_content_special_offers">
                                            <div class=" bg_page col_p_detils_special_offers" style="width: 50%!important">
                                                <span>{{$product['product_name_' . $lang]}} </span>
                                                <p class="text-right"> <span class="price_min "><span>  {{trans('admin.egy')}}</span>{{$product->price}} </span>
                                                    <span class="  price_through">
                                                    @if(!empty($product->price_old))
                                                         <span>{{trans('admin.egy')}}</span>
                                                         {{$product->price_old}} </span>
                                                    @endif 
                                                </p>
                                            </div><!--col_p_detils_special_offers-->
                                            <div  style="width: 50%!important" class="content_img_special_offers  zoom ">
                                                 <img class="card-img-top-offers" src="{{url('public/storage').'/'.$product->photo}}" alt="Card image cap"> 
                                            </div>
                                    </aside><!--row_content_special_offers-->
                                @endif<!--/. $department->id) == '15' -->
                            </a><!--link_product-->
                        @endforeach
                                <!-- ================================================================================== -->
                                 </div><!--card-body-->
                             </div><!--card-->
                    </section><!--content_col_2--> 

                   
                </div><!--col-md-2 further_info--> 
                            <style type="text/css">
                  .dorder_none
                  {
                    border:none;
                  }
                    .m_b_20
                  {
                    margin-bottom: 20px;
                  }
                  /*----------------*/
                    .content_product_owl_carsoul_col_2 .card_body_detils_special_offers
                  {
                    padding-bottom: 0;
                  } 
                   .content_product_owl_carsoul_col_2 .card-header
                  {
                    background: red: 20px;
                  }
                   .col_p_detils_special_offers{
                    padding: 3px;
                    text-align: right;
                   }   
                    .col_p_detils_special_offers span{
                      color: #999;
                      font-size: 13px;

                   }
                   .link_product{
                   }
.card-img-top-offers {
    width: 80px;
    height: 80px!important;
    margin: 3px 10;
    border-radius: 50%;
}
.card_body_detils_special_offers {
    
        padding: 7px!important;
      }
            .card-img-top-offers {
     height: 100%;
}
      @media(max-width: 768px){

      .card-img-top-offers {
    width: 100px;
    height: 80%!important;
}
    .card_body_detils_special_offers{
 height: 140px;
     padding-bottom: 10px;
   }
}

 
                 </style>


