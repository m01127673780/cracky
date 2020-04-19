   
<style type="text/css">
   /*-------------start section    3  larg  Images ------------------*/
        .section_img_discount img 
        {
        height: 400px;
        width: 100%;
        }
        .content_larg_img img 
        {
        height: 400px;
        width: 100%;
        } 
        .content_banner_img img 
        {
        height: 250px;
        width: 100%;
        }
         .p_25_0 
        {
       padding: 25px 0;
        }
        /*-------------End   section    3  larg  Images ------------------*/
</style>

   <!-- ============================================================start section larg_img -->
  <section class="p_25_0">        
      <div class="container-fluid">
          <div class="row content_larg_img">
                   <div class="col-md-6 wow  bounceIn  "   data-wow-duration="2s">
                    <a href="#">
                        @if(!empty(frontend()->section_tow_img_one))
                              <img  class=" h_300_px w_100_100"src="{{url('public/storage').Storage::url(frontend()->section_tow_img_one)}}">
                          @else
                               <img class=" h_300_px w_100_100"  src="{{url('default')}}/section_tow_img_one.png" >
                          @endif
                 </a>
                   </div><!--/.col-md-6-->
                  <div class="col-md-6  wow bounceIn  "   data-wow-duration="2s"> 
                      <a href="#">
                        @if(!empty(frontend()->section_tow_img_two))
                              <img  class=" h_300_px w_100_100"src="{{url('public/storage').Storage::url(frontend()->section_tow_img_two)}}">
                          @else
                               <img class=" h_300_px w_100_100"  src="{{url('default')}}/section_tow_img_two.png" >
                          @endif
                 </a>
                 </div><!--/.col-md-6-->
           </div><!--End row-->
      </div><!--End container-->
  </section><!--End section-->
  <!-- ============================================================End section larg_img -->
