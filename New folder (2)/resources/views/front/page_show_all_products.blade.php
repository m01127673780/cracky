 @include('front.layout._include.header')
 

  @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp 
   @include('front.layout._include.sidbar')
  <!------------------------------------------------------->
  <section class="m_20_0  wow      fadeInLeft m_t_b30px  " data-wow-duration="3s" data-wow-delay="1s" data-wow-iteration="1" style=" ">        
    <div class="container-fluid p_0_0" style="padding: 0;">
        <div class="row content_larg_img">
          <div class="col-md-12" style="height: 300px!important;">
          <a href="#">
                                            <div class="content_img_dpe_larg" ></div>
                                         <img class=""  src="{{url('default')}}/dep.png" class="w_h_px" style="width: 20px;height: 20px;" >
                                     </a>
          </div><!--/.col-md-12-->
        </div><!--End row--> 
    </div><!--End container-->
</section><!--End section-->

  <!------------------------------------------------------->
 
     <section class="">

   <!------------------------------------------------------->
  <section class="   " >        
    <div class="container-fluid   " >
        <div class="row  content_flex ">
          <div class="col-md-10 box_one "  >
        @include('front.layout._include.all_product')
          </div><!--/.col-md-10-->
          <div class="col-md-2 content_sidbar_name_products box_two"  >
       <!------------------------------------------------>

 <div class="     wow   fadeInRight  box_one d-none d-md-block d-lg-block"   data-wow-duration="2s"  >
                <section class=" " >
                <div class="card card_product_details  "  >
                <div class="card-body   ">

 
                <!-- ================================================================================== -->
                <ul class="list-group list_group_links_dpe list-group-flush text-right m_t_b30px  ">
                        @foreach($products_paginate_show_all_product as $product_paginate_show_all_product)
                      <li class="list-group-item"><a href="{{$product_paginate_show_all_product->id}} ">
                         <span> {{$product_paginate_show_all_product['product_name_'.$lang]}} </span> 
                          <span> <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product_paginate_show_all_product->photo}}"> </span> 
                      </a></li>
                        @endforeach
                            {{$products_paginate_show_all_product->links('vendor.pagination.bootstrap-4')}}
                </ul>
                <!-- ================================================================================== -->
                </div><!--card-body-->
                </div><!--card-->
                </section><!--content_col_2-->


 
                </div><!--col-md-2 further_info-->   
  <!-- ============================================================End section new_product -->
  <style type="text/css">
  .card_product_details{
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
     border-top: 2px solid #d9bebe;

  }
  .card_product_details_body.card-body{
    padding: 3px 0;
  }
 .list_group_links_dpe li a {

                          display: block;
                          font-size: 13px;
                          color: #666;
                          padding: 8px 18px;
                          transition:all .5s ease;
  }
   .list_group_links_dpe li {
border:none;
    padding: 0px 0px;
  }
  .list_group_links_dpe li a:hover {
   color: blue;
   padding-right: 30px;
   font-size: 14px;
   background: #d9bebe
  }
  .container
  {
       max-width: 1300px; 
  }
</style>
       <!------------------------------------------------>
          </div><!--/.col-md-2-->
        </div><!--End row--> 
    </div><!--End container-->
</section><!--End section-->

  <!------------------------------------------------------->
   </section><!--./ content_flex-->
@include('front.layout._include.btn_to_top')
 @include('front.layout._include.section_footer')
 
@include('front.layout._include.footer') 




      