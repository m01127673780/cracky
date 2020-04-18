<!----------start title -->
<center>
    <div class="flag">
	<h2>{{trans('admin.the_most')}} <span>{{trans('admin.wanted')}} </span></h2>
	<div class="triangle-left"></div>
</div>
</center>
<!----------start title -->

 <style type="text/css">
      .card_banner 
      {
         border:none;
      }   
      .card_banner .card-body
      {
        padding:0;
        border:none;
      }
      .card-title{
    background: red;
    color: #fff;
    text-align: center;
    padding: 0;
    margin: 0;
    /* position: absolute; */
    width: 100%;
    left: 0;
    bottom: 16px;
    padding-bottom: 9px;
}
 .p_25_0 
        {
       padding: 25px 0;
    
        }

 </style>
  @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp
<!-- start section banner ======================================================================================-->
<section class="content_banner p_25_0 wow  fadeInUp   "   data-wow-duration="1s">
       <div class=" container_owl_carousel container-fluid">
         <div class="row"> 
         <!-- ------------------------------>
          <div class="owl-carousel owl-theme owl_carousel_banner">
               @foreach($products as $product)
                     @if(($product->department_id) == '19')
                        <div class="item">  
                           
                                 <div class="card card_banner zoom" >
                                     
                                                  <img class="card-img-top h_200px" src="{{url('public/storage').'/'.$product->photo}}" alt="Card image cap">
                                                  <div class="card-body">
                                                        <a href="show/product/{{$product->id}}">
                                                            <h5 class="card-title">
                                                               {{$product['product_name_'. $lang]}}
                                                           </h5> 
                                                        </a>
                                                </div>  <!--card-body--> 
                                          
                                     </div> <!-- card_banner --> 
                               
                            </div><!--/. item--> 
                           
                    @endif<!--/. $department->id) == '13' -->
                   @endforeach
         <!--------------------------------->
                      
            </div><!--owl-carousel owl_carousel_banner-->
             <!-- --------------------------------------------------------------- -->
      </div><!--row-->
    </div><!--container-->
  </div><!--content_banner-->
  <!-- -------------------------------------------------------------------------- -->
</section><!--content-banner--> 
<!-- End section banner ================================================================================================= -->
  <script type="text/javascript">
   // ------------------------------------------------------
$('.owl_carousel_banner').owlCarousel({
             loop: true,
            margin: 10,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                 '<i class="fa fa-angle-right"></i>'
            ],            
            dots: true,
            autoWidth: false,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed:3000,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                568: {
                    items: 2,
                    autoWidth: false,
                    margin:0,
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
                    items:6,
                    autoWidth: false
                }
            }
});

 </script>