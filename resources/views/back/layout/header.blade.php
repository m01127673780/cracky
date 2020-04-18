<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{!empty($title)?$title:trans('admin.adminpanel')}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
    
    
    
    
    
    
    
    
    
      <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
    
      <!--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0"></script>-->

     
 
    
     <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e7d3c9b10594cb9"></script>
 
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       <!--<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e7d3a6c92f54300123e5998&product=sticky-share-buttons&cms=website' async='async'></script>-->
                       
                       
                       
                       
                       
    
    
    <!-- dataTables -->
<link rel="icon" href="{{url('storage').Storage::url(setting()->icon)}}" type="image/png" sizes="16x16">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

<meta charset="utf-8" type="icon"> 
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.20/b-1.6.1/b-print-1.6.1/r-2.2.3/sl-1.3.1/datatables.min.css"/>

  <!--    <link rel="stylesheet" href="https:////cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> --> <!--  //dataTables style -->

    <!-- dataTables -->
    <!-- Font Awesome -->
<!--     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
 -->    <link rel="stylesheet" href="{{url('design/adminlte')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{url('design/adminlte')}}/my_fonts_pliugins/pe-icon-7-stroke.min.css">
    <!-- Ionicons -->
{{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
    <!-- Tempusdominus Bbootstrap 4 -->
{{--    <link rel="stylesheet" href="{{url('design/adminlte')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">--}}
    <!-- iCheck -->
{{--    <link rel="stylesheet" href="{{url('design/adminlte')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">--}}

    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('design/adminlte')}}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="{{url('design/adminlte')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{url('design/adminlte')}}/dist/css/style-custom.css">
    <link rel="stylesheet" href="{{url('design/adminlte')}}/dist/css/style-dark.css">
    <!-- =-----start jstree-->
    <link rel="stylesheet" href="{{url('design/adminlte')}}/jstree/dist/themes/default/style.min.css">
    <link rel="stylesheet" href="{{url('design/adminlte')}}/jstree/dist/themes/default-dark/style.min.css">
    <link rel="stylesheet" href="{{url('design/adminlte')}}/jstree/dist/jstree.checkbox.css">
{{--    <link rel="stylesheet" href="{{url('design/adminlte')}}/jstree/dist/jstree.checkbox.css">--}}
{{--    <link rel="stylesheet" href="{{url('design/adminlte')}}/jstree/dist/jstree.wholerow.css">--}}



       

     <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('design/adminlte')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('design/adminlte')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('design/adminlte')}}/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <link rel="stylesheet" href="{{url('design/adminlte')}}/dist/css/style-ltr.css">
 @if(direction()=='ltr')
        {{--Any files style Here --}}
        @else
        <!-- start style rtl  -->
        <link rel="stylesheet" href="{{url('design/adminlte')}}/dist/css/rtl/bootstrap.css">
        <link rel="stylesheet" href="{{url('design/adminlte')}}/dist/css/rtl/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{url('design/adminlte')}}/dist/css/rtl/style-rtl.css">
            <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<style>
html,body ,h1,h2,h3,h4,h5,h6{font-family: 'Cairo', sans-serif;}/*// if you want  this font for Eelments specific  */
*{font-family: 'Cairo' ;}/*// if you want specific  this font for All Eelments   */
</style>
        <!-- End   style rtl  -->
        @endif
    <style>
{{-- style data table --}}
       #example2_length{display: none!important;}
div.dataTables_wrapper div.dataTables_filter{display: inline-block}
.content_wrapper_datatable {
    padding: 0;
    margin: 0;
    overflow: hidden;
}
/*div.dataTables_wrapper div.dataTables_filter {*/
/*     display: block;*/
/*    top: 10px;*/
/*    margin-top: -35px!important;*/
/*}*/
div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: 211px;
    margin-top: 15px;
 }
div.dataTables_wrapper div.dataTables_filter label {
    font-weight: normal;
    white-space: nowrap;
    text-align: left;
    font-weight: bold;
}
.btn-group>.btn-group:not(:last-child)>.btn, .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {

    margin-right: 3px;
    border-radius: 4px;
}
#example2_processing{
         margin-top: 48px!important;
     margin-right: -48px;
}
/*{{-- style data table --}}*/
/*{{--  start public Style  --}}*/
.w_h_20px{
    width: 20px;
    height: 20px;
}
/*{{--  End  public Style  --}}*/

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" style="">

      <style>
/*start section navbar */
 @media(max-width:786px){
   .sm_none,.none_sm{
        display:none!important;
   }
}
.cursor_pointer{
    cursor:pointer
}
/*End   section navbar */


            </style>

<script>
function goBack() {
window.history.back();
}

function refresh() {

    setTimeout(function () {
        location.reload()
    }, 100);
}







FB.ui({
  method: 'send',
  link: 'http://www.nytimes.com/interactive/2015/04/15/travel/europe-favorite-streets.html',
});
</script>

















