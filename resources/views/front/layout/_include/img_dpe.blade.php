<!-- ============================================================start section larg_img_Dep -->
 @php
$lang = session('lingfront');
@endphp            

   <!-- ============================================================start section larg_img_Dep -->
<section class="m_20_0  wow     fadeInLeft  " data-wow-duration="3s" data-wow-delay="1s" data-wow-iteration="1" style=" ">        
    <div class="container-fluid p_0_0" style="padding: 0;">
        <div class="row content_larg_img">
          <div class="col-md-12" style="height: 300px!important;">
                @foreach($products as $product)
                      @foreach($departments_paginate as $department_paginate)
                           @if(($productfind->department_id) === $department_paginate->id)
                             @if(!empty($department_paginate->icon))
                                      <a href="#">
                                            <img class="w_100_100  h_300_px  img_larg_dep" src="{{url('public/storage').'/'.$department_paginate->icon}}">
                                      </a>
                     @else
                                     <a href="#">
                                                                                    <div class="content_img_dpe_larg" ></div>

                                         <img class=""  src="{{url('default')}}/dep.png" class="w_h_px" style="width: 20px;height: 20px;" >
                                     </a>
                     @endif 
                   
                           @else<!--/. $department->id) == '15' -->
                            <a href="#">
                                         <img class="w_100_100  h_300_px  img_larg_dep" src="http://cracky-eg.com/public/storage/frontends/sYeWdukW8uUQzfBTSgASED1FbqfobtuiIFQsgwtF.png">
                                         <!--<img class=""  src="{{url('default')}}/dep.png" class="w_h_px" style="width: 20px;height: 20px;" >-->
                                     </a>
                           @endif<!--/. $department->id) == '15' -->
                      @endforeach <!-- /End departments_paginate -->
                @endforeach <!-- /End product -->
          </div><!--/.col-md-12-->
        </div><!--End row--> 
    </div><!--End container-->
</section><!--End section-->

 <style type="text/css">
  .img_larg_dep{
     margin-top: 32px;
  }
  .m_20_0{
    margin: 20px 0;
  }
  .w_100_100{
      
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
 
  <section class="m_20_0  wow   fadeInLeft   d-none" data-wow-duration="3s" data-wow-delay="1s" data-wow-iteration="1" style=" ">        
      <div class="container-fluid p_0_0" style="padding: 0;">
          <div class="row content_larg_img">
                   <div class="col-md-12"  >
 <video width="100%" controls>
  <source src="https://video-hbe1-1.xx.fbcdn.net/v/t39.24130-2/79681124_154996395854650_1674800446408459124_n.mp4?_nc_cat=106&efg=eyJ2ZW5jb2RlX3RhZyI6Im9lcF9oZCJ9&_nc_ohc=kIMhle6Ec38AX81NA2z&_nc_ht=video-hbe1-1.xx&oh=1a8e2c15178a0ae98e024de331b2aa21&oe=5EDA4567" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
 </video>
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
  }
</style>
  <!-- ============================================================End section larg_img_Dep -->
 

