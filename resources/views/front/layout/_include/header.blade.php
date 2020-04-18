    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
        <link rel="icon" href="{{url('public/storage').Storage::url(setting()->icon)}}" type="image/png" sizes="16x16">

        <!-- ---------------------------------------------------------------- -->
        
             <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e7d3c9b10594cb9"></script>

        <!-- ---------------------------------------------------------------- -->
    <script src="{{url('front')}}/layout/js/jquery.min.js"></script>

   <!-- ----------------------------------------------------------------------------------------- -->
 <link rel="stylesheet" href="{{url('front')}}/layout/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{url('front')}}/layout/css/owl.theme.default.min.css">
 <!-- ----------------------------------------------------------------------------------------- -->
{{--    <link rel="stylesheet" href="{{url('front')}}/layout/css/bootstrap.min.css"> --}}
    <script src="{{url('front')}}/layout/js/bootstrap.min.js"></script>
    <!-- ................ font Awesome -->
    <link rel="stylesheet" href="{{url('front')}}/layout/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{url('front')}}/layout/css/helper.css">
    <script src= "https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="{{url('front')}}/layout/css/font-awesome.min.css">
    <!-- ................ font Awesome -->

  <!-- ----------------------------------------------------------------------------------------- -->
{{--        RTL--}}
    @if(lang() == 'ar')
     @endif
        <link rel="stylesheet" href="{{url('front')}}/layout/css/rtl/bootstrap.css">

        <!-- ----------------------------------------------------------------------------------------- -->
  <!-- Optional - banner useful class to manipulate icon font display -->
    <link rel="stylesheet" href="{{url('front')}}/layout/css/style_slider_top.css">

  <!-- ----------------------------------------------------------------------------------------- -->
  <!-- ---------------------------------slider top  -->
 <link rel="stylesheet" href="{{url('front')}}/layout/css/style_slider_top.css">
 <!-- ---------------------------------slider top  -->
    <link rel="stylesheet" href="layout/css/style_slider_top.css">


    <!-- ----------------------------------------------------------------start menu -->
    <script src="{{url('front')}}/layout/menu/js/jquery.hsmenu.min.js"></script>
    <link rel="stylesheet" href="{{url('front')}}/layout/menu/css/hs-menu.min.css"/>
    <!--Material Design Iconic Font-->
    <link rel="stylesheet" href="{{url('front')}}/layout/menu/material-design/css/material-design-iconic-font.css" />
    <script> $(document).ready(function () {$(".hs-menubar").hsMenu(); });</script>
    <!-- -----------------------------------------------------------------End menu -->
    <!-- ===============================  WOW JS-->
    <link rel="stylesheet" href="{{url('front')}}/layout/wow-js/css/libs/animate.css">
    <!-- <link rel="stylesheet" href="{{url('front')}}/layout/wow-js/css/site.css">
    -->

        <link rel="stylesheet" href="{{url('front')}}/layout/css/style-custom-front.css">

         <style>
    .wow:first-child {
    visibility: hidden;
    }
    </style>
    <script src="{{url('front')}}/layout/wow-js/dist/wow.js"></script>
    <script>
    wow = new WOW(
    {
    animateClass: 'animated',
    offset:       100,

    callback:     function(box) {
    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
    }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
    var section = document.createElement('section');
    section.className = 'section--purple wow fadeInDown';
    this.parentNode.insertBefore(section, this);
    };
    </script>
    <!-- =============================== WOW JS -->
    <!-- ===============================   scrol_to_top JS -->


<link href="{{url('front')}}/layout/btn_to_top/dist/jquery-backToTop.min.css" rel="stylesheet" type="text/css">
  <script src="{{url('front')}}/layout/btn_to_top/jquery-backToTop.js"></script>

    <!-- ===============================   scrol_to_top JS -->



   <!--start menue Amazang ---------------------------------------------------- -->
        <link rel="stylesheet" type="text/css" href="{{url('front')}}/layout/Amazon-Side-Bar-Menu-Multi-Level-Mega/amazonmenu.css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->

        <script src="{{url('front')}}/layout/Amazon-Side-Bar-Menu-Multi-Level-Mega/amazonmenu.js">
            /* =====================================
            ** Amazon Side Bar Menu- by JavaScript Kit (www.javascriptkit.com)
            ** Visit JavaScript Kit at # for full source code
           ===================================== */

        </script>


        <script>

            jQuery(function(){
                amazonmenu.init({
                    menuid: 'mysidebarmenu'
                })
            })

        </script>

                    <script type="text/javascript">
                        <!--
                        google_ad_client = "ca-pub-2783044520727903";
                        /* jQuery_demo */
                        google_ad_slot = "2780937993";
                        google_ad_width = 728;
                        google_ad_height = 90;
                        //-->
                    </script>
                    <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>


        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
<style>
    .user-penal {
        width: 14%;
        box-shadow: 2px 2px 6px rgba(0,0,0,0.33);
        background: #33292900;
        list-style: none;
        position: fixed;
        display: none;
        top: 51px;
        right: 0;
        line-height: 1.5;
        z-index: 100;
    }
    .amazonmenu > ul li.hassub > a::after {
        border: 5px solid transparent;
        border-left-color: gray;
        content: '';
        height: 0;
        position: absolute;
        left: 4px;
        top: 35%;
        width: 0;
        transform: rotate(180deg);
    }
    .amazonmenu ul li {
        position: static;
        text-align: right;
        margin-right: 10px;

    }

    .amazonmenu ul li > ul {
        background: white;
        border: 1px solid gray;
        border-radius: 0 8px 8px 0;
        box-shadow: 2px 2px 2px grey;
        display: none;
        font-weight: normal;
        width: 199px;
        height: 400px;
        padding: 10px;
        position: absolute;
        top: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        z-index: 1000;
        left: -103% !important;
        /*display: block!important;*/
    }
    .amazonmenu ul li > div {
        background: red!important;
        border: 1px solid gray;
        border-radius: 0 8px 8px 0;
        box-shadow: 2px 2px 2px grey;
        display: block;
        font-weight: normal;
        width: 200px;
        height: 400px;
         padding: 10px;
        position: absolute;
        top: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        z-index: 1000;
        left: -152% !important;
    }
    .img_dpe_amazing_menue{
        width: 40px;
        height: 20px;
    }
    @media(max-width: 1500px){

    .user-penal{
        right: 2%;
    }
    }
    @media(max-width: 1265px){

        .user-penal{
            right: 4%;
        }
    }
    @media(max-width: 1150px){

        .user-penal{
            right: 6%;
        }
    }
    @media(max-width: 1000px){

        .user-penal{
            right: 8%;
        }
    }
    @media(max-width: 930px){

        .user-penal{
            right: 10%;
        }
    }
    @media(max-width: 850px){

        .user-penal{
            right: 12%;
        }
    }
    @media(max-width: 790px){

        .user-penal{
            right: 14%;
        }
    }
    @media(max-width: 750px){

        .user-penal{
            right: 16%;
        }
    }
    @media(max-width: 690px){

        .user-penal{
            right: 18%;
        }
    }
    @media(max-width: 630px){

        .user-penal{
            right: 20%;
        }
    }
    @media(max-width: 610px){

        .user-penal{
            right: 25%;
        }
    }
    @media(max-width: 550px){

        .user-penal{
            right: 35%;
        }
    }
    @media(max-width: 510px){


        .user-penal{
            right: 43%;
        }
        .amazonmenu ul li {

            margin-right: 2px!important;
        }

        .amazonmenu ul {
            width: 150px!important;
             left: 80% !important;
        }

        .amazonmenu ul li > ul {
             left: -124% !important;
                    top: 0px;
                    width: 179px!important;

        }


    }/*for remove scroll*/
    #aswift_0_expand {
        display: inline-table;

        display: none !important;
    }

</style>
<!--ُEnd -----------------------amazonmenu ----------------------------------------- -->
   <!-- ----------------start Zoom-->

 <link rel="stylesheet" href="{{url('front')}}/layout/zoom/zoomy.css">


    <style>

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


.zoomImg{

       width: 800px!important;
    height: 800px!important;
}
 .card_banner.zoom .zoomImg{

       width: 300px!important;
    height: 300px!important;
    cursor:pointer;
}
.img_stat_slider.zoom .zoomImg{

       width: 300px!important;
    height: 300px!important;
}
.content_img_special_offers.zoom .zoomImg{
       width: 150px!important;
    height: 150px!important;
}


    .zoom img {
      display: block;
    }

    .zoom img::selection { background-color: transparent; }

    #ex2 img:hover { cursor: url(grab.cur), default; }
    #ex2 img:active { cursor: url(grabbed.cur), default; }
  </style>

  <script src='{{url('front')}}/layout/zoom/jquery.zoom.js'></script>
  <script>
    $(document).ready(function(){
      $('.zoom').zoom();
      $('#ex2').zoom({ on:'grab' });
      $('#ex3').zoom({ on:'click' });
      $('#ex4').zoom({ on:'toggle' });
    });
  </script>
<!-- --------------------------End    Zoom Img  -->

   <!-- ----------------------------------------------------------- -->























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

  <script src="{{url('front')}}/layout/js/owl.carousel.min.js"></script>
 <!-- ----------------------------------- -->

    <link rel="stylesheet" href="{{url('front')}}/layout/css/style.css">

   <!-- -----------------------------------------------Start public style -->
   <style type="text/css">
/*   .row_content_img_details img {*/
/*    height: 400px!important;;*/

/*    width: 400px!important;;*/
/*}*/

   .owl-carousel{
       height:650px;
   }
   .owl-carousel.owl_carousel_banner{

       height:230px!important;
   }
   .owl_carousel_slider_product_new
   {
              height:400px!important;

   }
  .btn-warning {
    color:#fff;
  }
  .m_t_100px {
     margin-top:100px;
  }
  .m_t_b30px {
     margin:30px 0;
  }
  .m_r_l_30px {
     margin-left: 30px ;
     margin-right: 30px ;
  }
  .zoom img {
    display: block;
    cursor: zoom-in;
        cursor:pointer;

}
  .its-parent.home_link:after{
          content: "";
  }
  .its-parent.home_link {
          text-align: center;
              background: rgba(0,0,0,0.2);
  }
  .content_img_deatils img {
     width: 400px;
    height: 400px;
    background: #fff;
    padding: 20px;
}
.content_img_dpe_larg{
  background-image: url(http://cracky-eg.com/public/storage/frontends/sYeWdukW8uUQzfBTSgASED1FbqfobtuiIFQsgwtF.png);
    margin-top: 20px;
    height: 250px;
    background-repeat: no-repeat;
    background-size: contain;
}
   .w_30_hpx_20px{
       width:30px;
       height:20px;
   }
   .m_t_50px{
       margin-top:50px;
   }
   .m_t_60px{
       margin-top:75px;
   }   .m_t_75px{
       margin-top:75px;
   }
   .m_t_b_75px{
       margin:75px 0;
   }
   .owl-carousel .owl-item img{
       height:400px!important;
   }
   .owl-carousel .owl-item img.h_200px
   {
       height:200px!important;
   }
       img.h_400px
   {
       height:400px!important;
   }       img.h_300px
   {
       height:300px!important;
   }
      .carousel_similar.owl-carousel .owl-item img
   {
       height:200px!important;
       margin-top:10px;
   }
   .card_content_product_min {
       height:365px!important;
   }

     .carousel_similar.owl-carousel .owl-item .card_content_product_min:hover .content_3_icon_hover_product
  {
      top:0px;
      left:39%;
  }

.font_15px {
  font-size: 15px;
}
     .container_fluid_modal {
    width: 125%!important;
      }
  @media (max-width:1100px){
            .content_img_deatils img {

    width: 100%!important;
}
  }
  @media (max-width: 768px)
  {
      .none_sm{
      display: none;
      }




      .card_body_detils_special_offers {
    height: auto!important;
 }

      .row_content_special_offers {
   margin: 20px 0!important;
 }


      .container_fluid_modal-fluid.container-fluid {
    width: 100%!important;
      }

      .col-md-4,.col-md-6{
      margin-bottom: 20px;
      }
      .container_fluid_modal {
    width: 100%!important;
      }
      }/*End media */
      section{
      overflow: hidden!important;
      }

   </style>
      <style type="text/css">


.card_content_product_min {
  width: 100%;
  height: 500px;

}
.p_disc {
    font-size: 13px;
    margin-bottom: 0;
    color: #999;
}
.color_star{
    color: #ffcc00;
    font-size: 12px;
}
.price_min{
    color: #000;
    font-weight: 700;
    font-size: 15px;
    letter-spacing: -1px;
}
.price_through{
    color: #999;
    font-weight: 700;
    font-size: 10px;
    letter-spacing: -1px;
    text-decoration: line-through;
}


.content_3_icon_hover_product{
transition: all 0.55s ease-in-out;
    opacity: 0;
    position: absolute;
    right:37%;
     text-align:center;
   bottom: -100px;
}
.card_content_product_min:hover .content_3_icon_hover_product{
       opacity: 1;
position: absolute;
    text-align:center;
       bottom: 100px;

}
.icon_eey_product{
transition: all 0.55s ease-in-out;
    opacity:0;
    position: absolute;
    right:43%;
    top: 0px;
    z-index: 99;

}


.card_content_product_min:hover .icon_eey_product{
       /*display: block;*/
      opacity: 1;
      top: 100px;
    text-align:center;

/*position: absolute;
     bottom: 200px;*/

}








.carousel_similar.owl-carousel .owl-item  .icon_eey_product {
     opacity: .5;
    top: 100px;
}
.carousel_similar .content_3_icon_hover_product {
     bottom: 50px;
    opacity: 1;
}



/*------------start   similar icon ----------*/

.carousel_similar.owl-carousel .owl-item  .icon_eey_product {
     opacity: .5;
    top: 100px;
}
.carousel_similar .content_3_icon_hover_product {
     bottom: 50px;
    opacity: 1;
}


/*------------End similar icon ----------*/

.owl-carousel .owl-stage:after{
    padding: 100px 0!important;
}
.jquery-back-to-top-theme-fawesome i {
    display: inline-block;
    line-height: 2!important;
}

.fa-angle-double-right:before {
    content: "\f101";
    position: absolute;
    left: 22px;
    top: 10px;
}
.list-group-item.li_link_footer {
      padding: 2px;
      border: none;
}
.list-group-item.li_link_footer img {
         position: absolute;
    right: 1px;
}
.list-group-item.li_link_footer:hover {
    color: blue;
    padding-left: 30px;
     background: #ffcc00;
        -webkit-transition:all .5s ease-in-out;
  -moz-transition:all .5s ease-in-out;
  -o-transition:all .5s ease-in-out;
  transition:all .5s ease-in-out;
}
   <!-- ----------------------------------start icon ponter  public  -->
   .icon_pontr_bottom
   {
float: right;
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
   }
    .icon_pontr_bottom i
{
       font-size:30px;
   }
   <!-- ----------------------------------End   icon ponter  public  -->

   <!-- -----------------------------------------------start title  public  -->
   <!-- -----------------------------------------------start title  public  -->
   body {
  font-family: 'Roboto', sans-serif;
}


h1 {
  margin-bottom: 20px;
}

* {
  padding: 0;
  margin: 0;
}
     .h_300px {
    height: 300px;
}
.h_0px {
    height: 0px!important;
}
     .icon_pontr_bottom {
     /* float: right; */
                margin-right: 119px;
                /* position: absolute!important; */
                right: 0!important;
                height: 40px;
                width: 48px;
                z-index: 99;
                background: #fbba00!important;
                border: none;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                /* line-height: 17; */
                /* bottom: -78px; */
                margin-top: 2px;
}

.content_flag {

  margin: 20px 0;
}
.flag {
  display: inline-block;
  background: #fbba00;
  padding: 10px 40px;
  /*text-transform: uppercase;*/
  color: white;
  position: relative;
  margin: 20px 0;
}
.flag.m_nono {
    margin:0!important;
}
.flag h2 {
   font-size:20px;
}
.flag.m_b_50px {
margin-bottom: 65px;


}
.flag span {
  color: black;
}

.triangle-left {
  width: 0;
  height: 0;
  border-top: 25px solid transparent;
  border-right: 25px solid white;
  border-bottom: 25px solid transparent;
  position: absolute;
  right: 0;
  top: 0;
}
/*model -------------------Start show And zoom*/
@media (max-width:768px){
 .btn_modal_close {

    left: 0;
}
}
 .col_content_disc_deatils{
         border: 1px solid #eee;
}
.container_fluid_modal
{
   width: 130%;
}
 /*model -------------------End   show And zoom*/
   <!-- -----------------------------------------------End   title  public  -->
    </style>

   <!-- -----------------------------------------------custom style  Of All Elments   style -->
   <style type="text/css">
     .brand-logo {
    display: block;
    text-align: center;
    background-color: #2d3f56;
}
.hs-navigation, .hs-navigation.open {
    transition: .6s;
    -webkit-transition: .6s;
    -moz-transition: .6s;
    background-color: #2d3f56;
}

   </style>
   <!-- -----------------------------------------------custom style  Of All Elments  style -->

   <!-- -----------------------------------------------  start ditels show  -->
   <style type="text/css">


   </style>
   <!-- -----------------------------------------------  End  ditels show  -->


 <style type="text/css">
        /*-------------start section slider_top------------------*/
        .slider_top_img
        {
        height: 100%
        }
        .content_card_img_slider_top .card img {
        height: 100%;
        background: transparent;
        }
        .content_card_img_slider_top .card
        {
        width: 49%;
        margin: 0;
        padding: 0;
        display: inline-block;
        height: 134px;
        background: transparent;
        }
        @media(max-width: 768px){
        .row_slider_top_img{
        min-height: 800px;
        }
        .row_slider_top_img .col_slider_top{
        min-height: 400px;
        margin-bottom: 20px;
        }
        }
        .m_t_51px{
          margin-top: 55px;
        }
      </style>
        <!-- /*-------------End   section slider_top------------------*/ -->


















   <!-- -----------------------------------------------start session lang -->


        @if(session('lingfront') == 'en')


 <style type="text/css">
   .content_owl_carousel_new_product_sidbar_special_offers
    {
      display: flex;
    }
    .content_owl_carousel_new_product_sidbar_special_offers .section_box_special_offers_one
    {
      order: 2;

    }
      .content_owl_carousel_new_product_sidbar_special_offers .section_box_special_offers_two
   {
          order:1;
    }

        .content_flex
    {
      display: flex;
    }
    .content_flex .box_one
    {
      order: 2;

    }
     .content_flex .box_two
   {
          order:1
    }

        .content_flex_four_section
    {
      display: flex;
    }
             .content_flex_four_section .box_one {order:4;}
              .content_flex_four_section .box_two {order:2;border-left: 1px solid #777!important;}
              .content_flex_four_section .box_three {order:3;}
              .content_flex_four_section .box_four {  order:1; }





    .content_footer .col {
border-right: 1px solid #aaa;
}

.more-trigger {
    right: 50px!important;
}
    .menu-trigger {
    right: 10px!important;
}
.hs-navigation {
    width: 270px;
    height: 100vh;
    background: #666;
    position: fixed;
    top: 50px;
    right: -320px!important;
    z-index: 999;
    overflow: hidden;
    box-shadow: 1px 2px 4px rgba(0,0,0,0.3);
}
.hs-navigation.open {
    right: 0!important;
}
.hs-navigation.open {
    right: 0;
}
     </style>

 @endif


 <!--------------- start castom fire style ------------>
 <style>
     content_similar_product .content_3_icon_hover_product
 {
 bottom:50px!important;
 top:26%!important;
 }
      .carousel_similar.owl-carousel .owl-item .card_content_product_min:hover .content_3_icon_hover_product
  {
      bottom:50px!important;
 top:26%!important;

  }

 </style>

 <!--------------- End   castom fire style ------------>
 <!--------------- start style page show all products 3    ------------>
 <style>

 .content_sidbar_name_products{
     margin-top: 130px;
    padding: 5px;
    padding-top: 0;
    }
 </style>
 <!--------------- End   style page show all products 3    ------------>


<div class="content_tawk">
     <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e7a8e1969e9320caabca328/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!----------start whatsapp right-->
 <!--<script async data-id="36841" src="https://cdn.widgetwhats.com/script.min.js"></script>-->
 <script async data-id="36841" src="https://cdn.widgetwhats.com/script.min.js"></script>
<!----------End  whatsapp-->
 <style>
.font-lato.gallery img
{
    display:none!important;
}

    .jquery-back-to-top.jquery-back-to-top-theme-fawesome.jquery-back-to-top-status-on.jquery-back-to-top-effect-spin-on {
    bottom: 83px!important;
    right: 21px!important;
    }

</style>
<!--End of Tawk.to Script-->

</div>