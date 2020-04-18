
      <div class="col-md-12 col-lg-10 bg_page h_1000_px col_larg_product section_box_special_offers_one"> 
          <!-- ========================================================== -->
         @php
          if(count($products) > 0){
             echo count($products);
              $lang = session('lingfront');
               @endphp
                   <i class="btn btn-danger icon_pontr_bottom" style="float: right;
    margin-right: 91px;
    position: absolute!important;
    right: 0!important;
    height: 41px;
    width: 41px;
    z-index: 99;
    background: #ffcc00!important;
    border: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    ">
                       <i class="fas fa-hand-point-down"></i> 
                       </i> 




                                        <div class="owl-carousel owl-theme owl_carousel_slider_product_new_one wow  fadeInRight "   data-wow-duration="2s">
                                        @foreach($products as $product)
                                        @if(($product->department_id) == '13')
                                        @include('front.layout._include.item_product')
                                        @endif<!--/. $department->id) == '17' -->
                                        @endforeach
                                        <!-- ========================================================= -->
                                        </div><!--owl-carousel owl_carousel_discount-->

                                        <div class="owl-carousel owl-theme owl_carousel_slider_product_new_two wow  fadeInRight "   data-wow-duration="2s">
                                        @foreach($products as $product)
                                        @if(($product->department_id) == '14')
                                        @include('front.layout._include.item_product')
                                        @endif<!--/. $department->id) == '17' -->
                                        @endforeach
                                        <!-- ========================================================= -->
                                        </div><!--owl-carousel owl_carousel_discount-->
                                        
                                        <div class="owl-carousel owl-theme owl_carousel_slider_product_new_three  wow  fadeInRight "   data-wow-duration="2s">
                                        @foreach($products as $product)
                                        @if(($product->department_id) == '15')
                                        @include('front.layout._include.item_product')
                                        @endif<!--/. $department->id) == '17' -->
                                        @endforeach
                                        <!-- ========================================================= -->
                                        </div><!--owl-carousel owl_carousel_discount-->









                       <!-- ======================================start  Modal show product for All products  -->
                     @include('front.layout._include.modal')

                             @php
                             } //end count()
                            @endphp
                           
                      <!-- ======================================End Modal show product for All products  -->
                        </div><!-- .col-md-10 bg_page h_1000_px col_larg_product-->
               <!-- --------------------------------------------------------------- -->
                <style type="text/css">
                            .container_fluid_modal{
                            background: #fff;
                            margin-top: 50px;
                            position: relative;
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

                            <style type="text/css">
                            .owl_carousel_slider_product_new .car_discount {
                            background: #f9f9f9;
                            }    .owl_carousel_slider_product_new  {
                            }
                            </style>
  <script type="text/javascript">
     // ------------------------------------------------------
 
 //https://stackoverflow.com/questions/29214470/owl-carousel-2-drag-direction/43338253
  // ------------------------------------------------------
   
   // ------------------------------------------------------ 
   $('.owl_carousel_slider_product_new_two ').owlCarousel({
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
            autoplayTimeout: 3000,
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
                    items: 1,
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
   // ------------------------------------------------------ 
   $('.owl_carousel_slider_product_new_one ').owlCarousel({
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
            autoplayTimeout: 3000,
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
                    items: 1,
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
    // ------------------------------------------------------ 
   $('.owl_carousel_slider_product_new_three ').owlCarousel({
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
 