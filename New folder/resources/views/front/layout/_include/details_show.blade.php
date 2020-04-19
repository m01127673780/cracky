  @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp 

<style type="text/css">

/*---------------------------------*/
.content_icons_stars{border-bottom: 1px solid #ffe1e1; padding-bottom: 10px; }
.discrption_product_details{
font-size: 14px;
text-align: right;
color: #666;
}

.p_disc_deatils{
margin: 10px 0;
padding-bottom: 10px;
}

.title_product_deatils{
font-size: 15px;
color: #999;
}

.col_content_disc_deatils .content_disc_deatils{
border-radius: 3px;

}
/*------*/
.col_content_img_deatils{
padding: 20px 25px 25px 0;
}
.col_content_img_deatils .content_img_deatils{
border: 1px solid #ffe1e1;
border-radius: 3px;
}


.content_img_deatils  {
}
.card_disc_deatils{
padding: 0px 0;
}
.sectin_details_product_disc{
border: 2px solid #d9bebe;
background: #fff;
border-bottom: none;
}

.border_left_sm{
border-left: 2px dashed #d9bebe;

}

.border_right{
width: 20%;
border-bottom: 3px solid #d9bebe;
margin-bottom: -4px;
border-right: 2px dashed #d9bebe;

display: inline-block;
padding: 3px 5px 5px 0;
}
.border_right_none{
border-right: none!important;
}
.further_info{
margin-top: 0px;

}
.border_left{
width: 79%;
border-bottom: 3px solid #d9bebe;
margin: 0;
padding-bottom: 0;
}  
.owl_carousel_slider_product_details .owl-nav button i:hover{
/*background: none*/
}
.owl_carousel_slider_product_details .owl-nav button .fa-angle-right
{
margin-left: 45px;
}
.owl_carousel_slider_product_details .owl-nav button i{
background: #ffcc00;
width: 25px;
height: 20px;
padding-top: 2px;
border-radius: 50%;


position: absolute;
left: 0;
}
 
 
.dorder_none
{
border:none;
}
.m_b_20
{
margin-bottom: 20px;
}
/*----------------*/
.content_product_owl_carsoul_col_2 .card-header
{
background: red: 20px;
}
.col_p_detils_special_offers{
padding: 3px;
text-align: right;
}   
.col_p_detils_special_offers span{
color: #999;
font-size: 13px;

}
.link_product{
}

.img_add_by_company{

height:  100px!important;
width: 100px!important;
}
 

 .row_content_img_details img 
{
height: 400px;
width: 100%;
} 


@media (max-width: 768px){
.none_sm{
display: none;
} 

.col-md-4,.col-md-6{
margin-bottom: 20px;
} 
}
section{
overflow: hidden;
}

.row_content_disc_deatils{
  border: 2px solid #d9bebe;
    background: #fff;
    border-bottom: none;
}
 </style>  

<style type="text/css">
 .h_275px {
    height: 275px!important;
  }
</style>
<!-- ============================================================start section larg_img_Dep -->
     <section class="m_t_32   sectin_details_product_disc wow fadeInLeft  ">        
            <div class="container  p_0_0">
                <div class="row row_content_img_details">

      <div class="col-md-7 col-xs-6 col_content_disc_deatils">
          <div class="content_disc_deatils text-right">
             <div class="content_slider_product_discount    ">
           <div class="card card_disc_deatils border_none  ">
              <div class="card-body">
                <span class="card-text  title_product_deatils">
                    {{$department_paginate['dep_name_'. $lang]}}
                    {{$productfind['description_'. $lang]}}
                    
                    <span>.</span>
                </span>
                  <p class=" text_r content_icons_stars "> 
                  <i class="fa fa-star color_star font_s_9" aria-hidden="true"></i>
                  <i class="fa fa-star color_star font_s_9" aria-hidden="true"></i>
                  <i class="fa fa-star color_star font_s_9" aria-hidden="true"></i>
                  <i class="fa fa-star-o color_star font_s_9" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o color_star font_s_9" aria-hidden="true"></i> 
                  </p><!--/. content_icons_stars--> 
                  <!-- --------------- -->
                  <p class="text_r">
                  <span class="price ">  لأقسام  :  </span>
                  <a href="#">مشروبا ت </a><a href="#">  مقرمشات </a>
                  </p>
                  <!-- --------------- -->
                   @if(!empty($product->add_by_photo))
                   <p>
                  <a href="#">
                   <img style="    height: 75px;width: 100px;" src="{{url('public/storage').'/'.$productfind->add_by_photo}}" alt="Card image cap">
                
                  </a> 
                  <span class="price ">:  من قبل    </span>
                  </p> 
                    @endif
                  <!-- --------------- -->
                  <p>
                   <span class="price ">: {{trans('admin.description_ar_front')}}</span>
                   </p>
                   <article class="discrption_product_details">
                     {{$productfind->phdescription_aroto}}
                  </article>
                   <p></p><!--/--> 
                  <!-- --------------- -->
                <p class="text-right"> <span class="price_min "><span>  {{trans('admin.egy')}}</span>{{$productfind->price}} </span>
                                  <span class="  price_through">
                                  @if(!empty($productfind->price_old))
                                  <span>{{trans('admin.egy')}}</span>
                                   </span>
              </p>
                                  @endif
                  <!-- --------------- -->
                  </div><!--/. card-body--> 
              </div><!--/. card--> 
           </div><!--End content_slider_product_1-->
          <!-- ********************************************hover -->
              <aside class="posi_abs content_hover_product d-block">
          <!--     <button class="btn btn-danger btn_eey_product"  data-toggle="modal" data-target=".bd-example-modal-lg"> <i class="pe-7s-look"></i></button> -->
              </aside> 
              <div class=" posi_a--  --d-block d-none  ">
              <button class="btn  d-none  btn-outline-danger "> <i class="pe-7s-share"></i></button>
              <button class="btn d-none   btn-outline-danger "> <i class="pe-7s-like"></i></button>
              <button class="btn  d-none  btn-warning ">  <span>اضف الى السله </span><i class="pe-7s-cart"></i></button>
              </div>
          <!-- ********************************************hover -->
          </div><!--./content_disc_deatils -->                
      </div><!--/.col-md-6-->
       <div class="col-md-5 col-xs-6 col_content_img_deatils">
                              <div class="content_img_deatils zoom" id="zoom" style="position: relative; overflow: hidden;">
                                <img class="h_275px" src="{{url('public/storage').'/'.$productfind->photo}}">
                              <img role="presentation" alt="" src="https://3attar.com/wp-content/uploads/2019/08/New-Project-106.jpg" class="zoomImg" style="position: absolute; top: -26.5075px; left: -0.534883px; opacity: 0; width: 450px; height: 550px; border: none; max-width: none; max-height: none;"></div><!--./content_img_deatils -->
                        </div><!--/.col-md-6--> 

                 </div><!--End row-->
            </div><!--End container-->
        </section>
        <div class="text-right border_left_sm">
          <div class="border_right"><span class="#" style="color:  ;">
              
              
                        
                        <!--........................-->
                        <div class="flag m_b_50px font_15px ">
                        <div  class"">{{trans('admin.similar_products')}} <span>{{trans('admin.similar')}} </span></div>
                        <div class="triangle-left"></div>
                        </div>
                        <i class="btn btn-danger icon_pontr_bottom" style="
                        float: right;
                        margin-right: 96px;
                        position: absolute!important;
                        right: 0!important;
                        height: 41px;
                        width: 41px;
                        z-index: 99;
                        background: #fbba00!important;
                        border: none;
                        border-top-left-radius: 0;
                        border-top-right-radius: 0;
                        /* line-height: 17; */
                        /* bottom: -78px; */
                        margin-top: 61px;
                        ">
                        <i class="fas fa-hand-point-down" aria-hidden="true"></i> 
                        </i>
                        <!--........................-->
              </span></div>
          <div class="border_left"></div>
          </div>
  <!-- ============================================================End section new_product -->