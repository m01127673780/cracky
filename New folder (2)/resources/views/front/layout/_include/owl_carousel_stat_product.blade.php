
                           <!--........................-->
                           <center>
                                <div class="flag  ">
                                <h2>{{trans('admin.Featured_products')}} <span>{{trans('admin.Featured')}} </span></h2>
                                <div class="triangle-left"></div>
                                </div>
                           </center>
                            <!--........................-->
<!-- start section discount =============================================================-->
<section class="content_discount m_b_20  overflow_vis m_t_b_100">
      <div class="container-fluid container_owl_carousel  ">
              <div class="row border_none"> 
                      <!--  <p class= "text-right">لتخفيضات تصل الى 55%</p>--> <br>
                        <div class="col-md-12 bg_page h_1000_px   "> 
                           <!-- ========================================================== سفشقف owl_carousel_one  -->
                            <div class="owl-carousel owl-theme owl_carousel_stat_product wow  fadeInRight "   data-wow-duration="2s">
                               @foreach($products as $product)
                                  @if(($product->department_id) == '18')
                                      @include('front.layout._include.item_product')
                                  @endif<!--/. $department->id) == '17' -->
                                @endforeach
                             <!-- ========================================================= -->
                            </div><!--owl-carousel owl_carousel_discount-->
                       <!-- ========================================================== End owl_carousel_one  --> 
                          <div class="owl-carousel owl-theme owl_carousel_stat_product wow  fadeInRight "   data-wow-duration="2s">
                               @foreach($products as $product)
                                  @if(($product->department_id) == '16')
                                      @include('front.layout._include.item_product')
                                  @endif<!--/. $department->id) == '17' -->
                                @endforeach
                             <!-- ========================================================= -->
                            </div><!--owl-carousel owl_carousel_discount-->
                       <!-- ========================================================== End owl_carousel_one  -->
                          </div><!--/. content_discount-->
                      </div><!--/. row-->
                   </section><!--/. container-fluid-->


 
 






<script type="text/javascript">
   // ------------------------------------------------------
  $('.owl_carousel_stat_product').owlCarousel({
            margin: 0,
            nav: true,
            autoWidth: false,
           loop: true,
           navText: [
                      '<i class="fa fa-angle-left"></i>',
                      '<i class="fa fa-angle-right"></i>'
                    ],            
          dots: true,
          smartSpeed:3000,
          autoplay: true,
          autoplayTimeout: 2000,
          autoplayHoverPause: true,
             responsive: {
                0: {
                    items: 1,
                 },
                568: {
                    items: 1,
                 },
                667: {
                    items: 2,
                 },
                768: {
                    items: 3,
                 },
                1000: {
                    items: 4,
                 },
                1200: {
                  items:5,
                   nav: false,
                   loop: false,
                  autoplay: false,
                }
            }
});
   // ------------------------------------------------------  
 
</script>



