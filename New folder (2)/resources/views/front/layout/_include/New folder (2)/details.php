
<!-- -------------------------- Start Zoom Img  -->
   <script src='layout/zoom/jquery.zoom.js'></script>
   <script>
    $(document).ready(function(){
      $('.zoom').zoom();
      $('#ex2').zoom({ on:'grab' });
      $('#ex3').zoom({ on:'click' });      
      $('#ex4').zoom({ on:'toggle' });
    });
  </script> 


 <style type="text/css">



    /* styles unrelated to zoom */
    

    /* these styles are for the demo, but are not required for the plugin */
    .zoom {
      display:inline-block;
      position: relative;
    }
    
    /* magnifying glass icon */
    .zoom:after {
      content:'';
      display:block; 
      width:33px; 
      height:33px; 
      position:absolute; 
      top:0;
      right:0;
      background:url(icon.png);
    }

    .zoom img {
      display: block;
    }

    .zoom img::selection { background-color: transparent; }

    #ex2 img:hover { cursor: url(grab.cur), default; }
    #ex2 img:active { cursor: url(grabbed.cur), default; }
 </style>
<!-- --------------------------End    Zoom Img  -->
<style type="text/css">
   
     /*-------------------------------------------------- start Public */
     section{
      overflow: hidden;
     }
      .overflow_vis{
      overflow: visible;
     }
        .overflow_hid{
      overflow: hidden;
     }
     .owl-theme .owl-nav {
    margin-top: 0;
}
     .none{
      display: none!important;
     }
     
/*----------------------------public   properties*/

/*---------------------------------*/

    .border_none {
    border: none;
    }
    .price_through  {
    color: #999;
    font-size: 11px;
    font-weight: bold;
    text-decoration: line-through;
    }
    .price {
    color: blue;
    font-size: 14px;
    font-weight: bold;
    color: #383838;
    } 
    .text_r { text-align: right!important;}
    .text_l { text-align: left!important;}
    .text_c { text-align: center!important;}

    .bg_none{
    background: none!important;
    }
    .border_l{border-left:1px solid #aaa;}
    .border_r{border-right:1px solid #aaa;}
    .border_t{border-top:1px solid #aaa;}
    .border_b{border-bottom:1px solid #aaa;}
    .border{border:1px solid #aaa;}
    .color_star {color:#ffcc00;}
    .p_0_0{padding: 0;}
    .p_0{padding: 0;}
    .bg_ffcc00{background:#ffcc00;}
    .bg_eee{background:#eee;}
    .bg_f9f9f9;{background:#f9f9f9;;}
        /*-----------------------------------------------------------End public property*/
          

 
    



  




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
margin-top: 31px;

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


.m_t_30px{
  margin-top: 30px;
}
  
</style>
<!-- start section discount =============================================================-->
   
   <?php include'_include/show_product.php'; ?>
        <!-- ============================================================End section larg_img_Dep -->
          <!-- --------------------------------------------------------------- -->
          <div class="text-right border_left_sm">
          <div class="border_right"><span class="#" style="color: transparent;">RELATED ITEMS</span></div>
          <div class="border_left"></div>
          </div><!--text-right--> 
 
          <!-- --------------------------------------------------------------- -->
                </div><!--col-md-2 further_info-->
               <?php include'_include/sidbar_cat.php'; ?> 
              <!-- ..............-->
         </div><!--row-->
     </div><!--container-fluid-->
</section><!--content-new_product--> 
  <!-- ============================================================End section new_product -->
<br>
</section>

 
