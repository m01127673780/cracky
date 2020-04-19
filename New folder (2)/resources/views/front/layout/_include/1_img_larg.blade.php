<style type="text/css">
        /*-------------start section   1  larg  Images ------------------*/
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
        /*-------------End   section   1  larg  Images ------------------*/
</style>
 
<!-- ============================================================start section banner_img -->
<section class="p_25_0  wow  tada   "   data-wow-duration="2s">        
  <div class="container">
      <div class="row content_banner_img content_banner_img">
               <div class="col-md-12">
                  <a href="#">
                        @if(!empty(frontend()->img_larg))
                              <img  class=" h_300_px w_100_100"src="{{url('public/storage').Storage::url(frontend()->img_larg)}}">
                          @else
                               <img class=" h_300_px w_100_100"  src="{{url('default')}}/img_larg.png" >
                          @endif
                 </a>
               </div><!--/.col-md-6-->
       </div><!--End row-->
  </div><!--End container-->
</section><!--End section-->
<!-- ============================================================End section banner_img -->
