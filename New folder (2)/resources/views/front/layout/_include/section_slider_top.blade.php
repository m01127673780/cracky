
 </style>
    <!-- ============================================================start section slider top And qoute product  ============================= -->
              <section class="m_t_51px content_flex">        
              <div class="container-fluid"  >
                  <div class="row row_slider_top_img  " >
                  <!------------------------------------------------------------------------------------ -->
                <div class="col-md-8   col_slider_top  wow  fadeInLeft   box_one"   data-wow-duration="0"  >
                      <!-- ....................................... start plugin  -->
                      <div id="slider" class="slider-top slider_top_img ">
                      @for ($i = 0; $i < 6; $i++)     
                      @foreach($sliders_all as $slider)
                      <div class="slider-top-item 0 "data-slide-to="{{ $i }}" style="background-image: url({{url('public/storage').'/'.$slider->photo}})"></div>

                      @endforeach
                      @endfor
                                <div class="slider-top-panel">
                                <div class="slider-top-panel__navigation">
                                    <i class="fas fa-circle indicator active" data-slide-to="0"></i>
                                    <i class="far fa-circle indicator" data-slide-to="1"></i>
                                    <i class="far fa-circle indicator" data-slide-to="2"></i>
                                    <i class="far fa-circle indicator" data-slide-to="3"></i>
                                    <i class="far fa-circle indicator" data-slide-to="4"></i>
                  
                                 </div>
                                <div class="slider-top-panel__controls">
                                    <i class="far fa-arrow-alt-circle-left" id="previous"></i>
                                    <i class="far fa-pause-circle" id="pause-play"></i>
                                    <i class="far fa-arrow-alt-circle-right" id="next"></i>
                                </div>  
                          </div>
                    </div>
                      <!-- ....................................... End plugin    -->
                 </div><!--/.col-md-8-->
                   <div class="col-md-4 box_two   content_card_img_slider_top wow  fadeInRight  "   data-wow-duration="0">
                    @foreach($sliders_all as $slider)
                          <div class="card  img_stat_slider zoom"><a href="#">
                            <img class="card-img-top " src="{{url('public/storage').'/'.$slider->photo}}" alt="Card image cap">

 <!--                             <img class="card-img-top " src="{{url('front')}}/layout/img/slider_top/1.jpeg" alt="Card image cap">
 -->                          </a></div> 
                    @endforeach
                     </div><!--/.col-md-4-->
              </div><!--End row-->
              </div><!--End container-->
            </section><!--End section-->
            <!-- =======================================End section slider top And qoute product ============================= -->