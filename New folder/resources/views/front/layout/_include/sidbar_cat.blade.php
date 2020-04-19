   @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp
 <div class="col-md-3 further_info    wow   fadeInRight  box_one d-none d-md-block d-lg-block"   data-wow-duration="2s"  >
                <section class="content_product_owl_carsoul_col_2" >
                <div class="card card_product_details  " style="width:100% ">
                <div class="card-body card_product_details_body p_b_10 ">

<style type="text/css">
@media (max-width: 768px){ 
    .list_group_links_dpe,.list_group_links_dpe .list-group-item,.list_group_links_dpe .list-group-item a{
  display: inline-block;

 
  }}
</style>
                <!-- ================================================================================== -->
                <ul class="list-group list_group_links_dpe list-group-flush text-right p_0  ">
                        @foreach($products_paginate as $product_paginate)
                      <li class="list-group-item"><a href="{{$product_paginate->id}} ">
                         <span> {{$product_paginate['product_name_'.$lang]}} </span> 
                          <span> <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product_paginate->photo}}"> </span> 
                      </a></li>
                        @endforeach
                            {{$products_paginate->links('vendor.pagination.bootstrap-4')}}
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