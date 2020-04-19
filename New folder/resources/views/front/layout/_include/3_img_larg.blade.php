   
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
        /*-------------End   section    3  larg  Images ------------------*/
</style>

  


 
              <!-- ======================================================= start section img_discount -->
    <section class="section_img_discount m_20_0" style=" /*   margin-top:762px;*/">        
      <div class="container-fluid">
          <div class="row content_img_discount">
                   <div class="col-md-4  wow  rotateInDownLeft  "   data-wow-duration=" ">
                        <a href="#"> 
                            @if(!empty(frontend()->section_three_img_one))
                                <img  class=" h_300_px w_100_100"src="{{url('public/storage').Storage::url(frontend()->section_three_img_one)}}">
                            @else
                                 <img class=" h_300_px w_100_100"  src="{{url('default')}}/section_three_img_one.png" >
                            @endif 
                         </a>    
                   </div><!--/.col-md-4-->
                 <!--------------------------------->
                  <div class="col-md-4  wow  bounceIn  "   data-wow-duration=" ">            
                        <a href="#"> 
                            @if(!empty(frontend()->section_three_img_two))
                                <img  class=" h_300_px w_100_100"src="{{url('public/storage').Storage::url(frontend()->section_three_img_two)}}">
                            @else
                                 <img class=" h_300_px w_100_100"  src="{{url('default')}}/section_three_img_two.png" >
                            @endif 
                         </a>                  </div><!--/.col-md-4-->
                 <!--------------------------------->
                  <div class="col-md-4  wow  rotateInDownRight  "   data-wow-duration=" ">
                         <a href="#"> 
                            @if(!empty(frontend()->section_three_img_three))
                                <img  class=" h_300_px w_100_100"src="{{url('public/storage').Storage::url(frontend()->section_three_img_three)}}">
                            @else
                                 <img class=" h_300_px w_100_100"  src="{{url('default')}}/section_three_img_three.png" >
                            @endif 
                         </a>                  </div><!--/.col-md-4-->
                 <!--------------------------------->
          </div><!--End row-->
       </div><!--End container-->
  </section><!--End section_img_discount-->
  <!-- ============================================================End section img_discount -->
   