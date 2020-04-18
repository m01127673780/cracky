
  @include('front.layout._include.modal') 
@php
$lang = session('lingfront');
@endphp
<!--   -->


   <!-- ============================================================start section larg_img_Dep -->
<section class="m_20_0  wow   d-none  fadeInLeft  " data-wow-duration="3s" data-wow-delay="1s" data-wow-iteration="1" style=" ">        
    <div class="container-fluid p_0_0" style="padding: 0;">
        <div class="row content_larg_img">
          <div class="col-md-12" style="height: 300px!important;">
                @foreach($products as $product)
                      @foreach($departments_paginate as $department_paginate)
                           @if(($productfind->department_id) === $product->department_id)
                                <div class="w_100_100  h_300_px img_dpe_id"style="background-image: url({{url('public/storage').'/'.$department_paginate->icon}});">
                                </div>
                           @endif<!--/. $department->id) == '15' -->
                      @endforeach <!-- /End departments_paginate -->
                @endforeach <!-- /End product -->
          </div><!--/.col-md-12-->
        </div><!--End row--> 
    </div><!--End container-->
</section><!--End section-->

 <style type="text/css">
  .m_20_0{
    margin: 20px 0;
  }  .w_100_100{
    width:100%;
  }  .h_300_px {
    height: 300px;
  }
    }  .p_0_0 {
    padding: 0;
  }  .img_dpe_id {
    background-repeat: no-repeat;
     background-size: contain;

    width: 100px;
    height: 500px;
  }
</style>
  <!-- ============================================================End section larg_img_Dep -->
                   <div class="col-md-9 bg_page h_1000_px box_two  "> 

                      <!-- ========================================================== -->
                     @include('front.layout._include.details_show') 
   
                          <!-- --------------------------------------------------------------- -->
                            <div class="owl-carousel owl-theme  owl_carousel_slider_product_new carousel_similar   wow  fadeInDown  "   data-wow-duration="2s">
                                  @if(count($products) > 4 )
                                        @foreach($products as $product)
                                         @if(($productfind->department_id) === $product->department_id)
                                              @include('front.layout._include.item_product')
                                          @endif<!--/. $department->id) == '15' -->
                                        @endforeach 
                                    @endif<!--/.count)  -->
                              <!-- ========================================================== -->
                            </div><!--owl-carousel owl_carousel_discount-->
                          <!-- ========================================================== -->
                      <style type="text/css">
                         .owl_carousel_slider_product_new .car_discount {
                          background: #f9f9f9;
                        }    .owl_carousel_slider_product_new  {
                         }
                      </style>
                      <!-- ========================================================== -->             
                        </div><!-- .col-md-10 bg_page h_1000_px col_larg_product-->

<script type="text/javascript">
     // ------------------------------------------------------
  $('.owl_carousel_discount').owlCarousel({
             loop: true,
            margin: 0,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                 '<i class="fa fa-angle-right"></i>'
            ],            
            dots: true,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed:3000,
             responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                568: {
                    items: 1,
                    autoWidth: false
                },
                667: {
                    items: 2,
                    autoWidth: false
                },
                768: {
                    items: 2,
                    autoWidth: false
                },
                1000: {
                    items: 3,
                    autoWidth: false
                },
                1200: {
                    items:4,
                    autoWidth: false
                }
            }
});
 //https://stackoverflow.com/questions/29214470/owl-carousel-2-drag-direction/43338253
  // ------------------------------------------------------

    // ------------------------------------------------------
  $('.owl_carousel_slider_product_new').owlCarousel({
             loop: true,
            margin: 10,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                 '<i class="fa fa-angle-right"></i>'
            ],            
            dots: true,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed:3000,
             responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                568: {
                    items: 1,
                    autoWidth: false
                },
                667: {
                    items: 2,
                    autoWidth: false
                },
                768: {
                    items: 2,
                    autoWidth: false
                },
                1000: {
                    items: 3,
                    autoWidth: false
                },
                1200: {
                    items:3,
                    autoWidth: false
                }
            }
});
   // ------------------------------------------------------ 
   $('.owl_carousel_slider_product_new_tow').owlCarousel({
             loop: true,
            margin: 10,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                 '<i class="fa fa-angle-right"></i>'
            ],            
            dots: true,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed:2000,
             responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                568: {
                    items: 1,
                    autoWidth: false
                },
                667: {
                    items: 2,
                    autoWidth: false
                },
                768: {
                    items: 2,
                    autoWidth: false
                },
                1000: {
                    items: 3,
                    autoWidth: false
                },
                1200: {
                    items:4,
                    autoWidth: false
                }
            }
});
   // ------------------------------------------------------
 
</script>