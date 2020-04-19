@include('front.layout._include.dropdown_1')
@php
    if (empty (session('lingfront')))
    {
    $lang ='ar';
    }else{
    $lang = session('lingfront');
    }
@endphp
<!--Start hs Mega Menu-->
<header class="hs-menubar">
    <div class="brand-logo">
        <a href="{{url('/')}}">
            <img src="{{url('public/storage').Storage::url(frontend()->section_footer_img_about)}}" title="Your logo will be here" alt="hs Mega Menu" class="img_world_flag"> </a>
    </div>
    <div class="menu-trigger"> <i class="zmdi zmdi-menu"></i></div>
    <div class="d-none">
        <div class="search-trigger"> <i class="zmdi zmdi-search"></i></div>
        <div class="search-box">
            <form action="#">
                <input type="text" name="search">
                <!--<button type="submit" class="search-submit" disabled>Search</button>-->
            </form>
        </div>

    </div>


    <div class="grid-trigger toggle" data-reveal=".grid-items" style="right: ">

        @if(!empty(frontend()->section_footer_img_about))
            <div class="">
                <img   src="{{url('default')}}/world_flag.gif" class="img_world_flag">
            </div>
        @else
            <div class=" ">
                <img   src="{{url('default')}}/section_footer_img_about.png" style="width: 20px;height: 20px;">
            </div>
        @endif
    </div>
    <div class="more-trigger sm_none toggle" data-reveal=".user-penal"> <i class="zmdi zmdi-more-vert"></i></div>
</header>



<!--End hs Mega Menu       en-->


<!-- --------------------------------------- start session ar---------------------------------------- -->
<section class="box-model">
    <ul class="user-penal">
        <li class=" ">
            <nav id="mysidebarmenu" class="amazonmenu">
                <ul>
                    @foreach($departments as $department)

                        {{--  start dep id 13----------------------------------------------}}
                        @if($department->id  == '13')
                            <li>
                                <a href="{{url('show/department/13')}}">
                                {{trans('admin.Latest_product')}}
                                <!--................-->
                                    @if(!empty($department->icon))
                                        <img src="{{url('public/storage').'/'.$department->icon}} {{$department->photo}}"class="img_dpe_amazing_menue">
                                    @else
                                        <img class=""  src="{{url('default')}}/dep.png" class="img_dpe_amazing_menue"  >
                                @endif  <!--End  if department->icon-->
                                    <!--................-->

                                </a>
                                <ul>
                                    <li>
                                        <a href="show/department/19">
                                    @foreach($products as $product)
                                        @if($department->id  == $product->department_id)
                                            <li>
                                                <a href="{{url('show/product/'.$product->id)}}">
                                                    <span>{{$product['product_name_'.$lang]}}</span>
                                                    <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product->photo}}">

                                                </a>
                                            </li>
                                    @endif
                                @endforeach <!--  End products -->
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        @endif  <!--End  if department->id 13 -->
                        {{--  End   dep id 13----------------------------------------------}}
                        {{--  start dep id 18----------------------------------------------}}
                        @if($department->id  == '18')
                            <li>
                                <a href="{{url('show/department/18')}}">
                                {{trans('admin.featured_products')}}
                                <!--................-->
                                    @if(!empty($department->icon))
                                        <img src="{{url('public/storage').'/'.$department->icon}} {{$department->photo}}"class="img_dpe_amazing_menue">
                                    @else
                                        <img class=""  src="{{url('default')}}/dep.png" class="img_dpe_amazing_menue"  >
                                @endif  <!--End  if department->icon-->
                                    <!--................-->

                                </a>
                                <ul>
                                    <li>
                                        <a href="show/department/18">
                                    @foreach($products as $product)
                                        @if($department->id  == $product->department_id)
                                            <li>
                                                <a href="{{url('show/product/'.$product->id)}}">
                                                    <span>{{$product['product_name_'.$lang]}}</span>
                                                    <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product->photo}}">
                                                </a>
                                            </li>
                                    @endif
                                @endforeach <!--  End products -->
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        @endif  <!--End  if department->id 18 -->
                        {{--  End   dep id 18----------------------------------------------}}
                        {{--  start dep id 19----------------------------------------------}}
                        @if($department->id  == '19')
                            <li>
                                <a href="{{url('show/department/19')}}">
                                {{trans('admin.the_most_wanted')}}
                                <!--................-->
                                    @if(!empty($department->icon))
                                        <img src="{{url('public/storage').'/'.$department->icon}} {{$department->photo}}"class="img_dpe_amazing_menue">
                                    @else
                                        <img class=""  src="{{url('default')}}/dep.png" class="img_dpe_amazing_menue"  >
                                @endif  <!--End  if department->icon-->
                                    <!--................-->

                                </a>
                                <ul>
                                    <li>
                                        <a href="show/department/19">
                                    @foreach($products as $product)
                                        @if($department->id  == $product->department_id)
                                            <li>
                                                <a href="{{url('show/product/'.$product->id)}}">
                                                    <span>{{$product['product_name_'.$lang]}}</span>
                                                    <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product->photo}}">
                                                 </a>
                                            </li>
                                    @endif
                                @endforeach <!--  End products -->
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        @endif  <!--End  if department->id 19 -->
                        {{--  End   dep id 19----------------------------------------------}}
                        {{--  start dep id 20----------------------------------------------}}
                        @if($department->id  == '20')
                            <li>
                                <a href="{{url('show/department/20')}}">
                                {{trans('admin.special_offers')}}
                                <!--................-->
                                    @if(!empty($department->icon))
                                        <img src="{{url('public/storage').'/'.$department->icon}} {{$department->photo}}"class="img_dpe_amazing_menue">
                                    @else
                                        <img class=""  src="{{url('default')}}/dep.png" class="img_dpe_amazing_menue"  >
                                @endif  <!--End  if department->icon-->
                                    <!--................-->

                                </a>
                                <ul>
                                    <li>
                                        <a href="show/department/20">
                                    @foreach($products as $product)
                                        @if($department->id  == $product->department_id)
                                            <li>
                                                <a href="{{url('show/product/'.$product->id)}}">
                                                    <span>{{$product['product_name_'.$lang]}}</span>
                                                    <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product->photo}}">

                                                </a>
                                            </li>
                                    @endif
                                @endforeach <!--  End products -->
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        @endif  <!--End  if department->id 20 -->
                        {{--  End   dep id 20----------------------------------------------}}
                        {{--  start dep id 21----------------------------------------------}}
                        @if($department->id  == '21')
                            <li>
                                <a href="{{url('show/department/21')}}">
                                {{trans('admin.best_seller')}}
                                <!--................-->
                                    @if(!empty($department->icon))
                                        <img src="{{url('public/storage').'/'.$department->icon}} {{$department->photo}}"class="img_dpe_amazing_menue">
                                    @else
                                        <img class=""  src="{{url('default')}}/dep.png" class="img_dpe_amazing_menue"  >
                                @endif  <!--End  if department->icon-->
                                    <!--................-->

                                </a>
                                <ul>
                                    <li>
                                        <a href="show/department/21">
                                    @foreach($products as $product)
                                        @if($department->id  == $product->department_id)
                                            <li>
                                                <a href="{{url('show/product/'.$product->id)}}">
                                                   <span> {{$product['product_name_'.$lang]}}</span>
                                                  <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product->photo}}">
                                                </a>
                                            </li>
                                    @endif
                                @endforeach <!--  End products -->
                                    </a>
                                    </li>
                                </ul>
                            </li>
                    @endif  <!--End  if department->id 21 -->
                    {{--  End   dep id 21----------------------------------------------}}

                @endforeach  <!-- End departments-->





                </ul>
            </nav>

            {{-- ---------------------------------------------}}
        </li  >
        <div class="d-none">
            <li >
                <a href="{{aurl('')}}"><i class="fas fa-eye"></i> admin  </a>
            </li  >
            @foreach($departments as $department)
                @if($department->id  == '18')
                    <li> <a href="#1" >
                            <!--................-->
                            @if(!empty($department->photo))
                                <img src="{{url('storage').'/'.$department->icon}} {{$department->photo}}"class="img_dpe_amazing_menue">
                            @else
                                <img class=""  src="{{url('default')}}/dep.png" class="w_h_px" style="width: 20px;height: 20px;" >
                        @endif
                        <!--................-->
                    {{trans('admin.featured_products')}}
                @endif

                @if($department->id  == '19')
                    <li> <a href="#1" >
                            <!--................-->
                            @if(!empty($department->photo))
                                <img src="{{url('storage').'/'.$department->icon}} {{$department->photo}}"style="width: 20px;height: 20px;">
                            @else
                                <img class=""  src="{{url('default')}}/dep.png" class="w_h_px" style="width: 20px;height: 20px;" >
                        @endif
                        <!--................-->
                    {{trans('admin.the_most_wanted')}}
                @endif

                @if($department->id  == '20')
                    <li> <a href="#1" >

                            <!--................-->
                            @if(!empty($department->photo))
                                <img src="{{url('storage').'/'.$department->icon}} {{$department->photo}}"style="width: 20px;height: 20px;">
                            @else
                                <img class=""  src="{{url('default')}}/dep.png" class="w_h_px" style="width: 20px;height: 20px;" >
                        @endif
                        <!--................-->
                    {{trans('admin.special_offers')}}
                @endif
                @if($department->id  == '21')
                    <li> <a href="#1" >
                            <!--................-->
                            @if(!empty($department->photo))
                                <img src="{{url('storage').'/'.$department->icon}} {{$department->photo}}"style="width: 20px;height: 20px;">
                            @else
                                <img class=""  src="{{url('default')}}/dep.png" class="w_h_px" style="width: 20px;height: 20px;" >
                            @endif
                        <!--................-->
                            {{trans('admin.best_seller')}}
                            @endif
                        </a> </li>
                    @endforeach
        </div>

    </ul>

</section>


<nav class="hs-navigation    " style="top: 0px; overflow: auto;">
    <ul class="nav-links">

        <li class="has-child">
                 <span class="its-parent home_link">
                               <a  href="{{url('/')}}" class="d-inline-block">   <span class=" "> <i class="fas fa-house-damage"></i> {{trans('admin.home')}}</i></a>
                </span>
        </li>
        <li class="has-child">
            <span class=" home_link">          <a  href="{{url('relodpage')}}" class="d-inline-block ">   <span class=" "><i class="fas fa-sync"></i> {{trans('admin.refresh')}}</i></a> </span>
        </li>
        <li class="has-child">
            <span class=" home_link">          <a  href="{{url('show/all/products')}}" class="d-inline-block ">   <span class=" "><i class="fas fa-th"></i> {{trans('admin.show_all_products')}}</i></a> </span>
        </li>
        @foreach($departments as $department)
            <li class="has-child">

                @if($department->id  == '13')

                    <span class="its-parent">
                                 <span class="icon"> <i class="zmdi zmdi-device-hub"></i>
                           <a href="{{url('show/department/13')}} " class=" d-inline-block"> {{trans('admin.Latest_product')}}</a>
                             </span>
                        </a>
                            @endif

                        @if($department->id  == '18')

                            <span class="its-parent">
                                 <span class="icon"> <i class="zmdi zmdi-device-hub"></i>
                           <a href="{{url('show/department/18')}} " class=" d-inline-block"> {{trans('admin.featured_products')}}</a>
                             </span>
                                </a>

                            @endif

                                @if($department->id  == '19')
                                    <span class="its-parent">
                                 <span class="icon"> <i class="zmdi zmdi-device-hub"></i>
                            </span>
                            <a href="{{url('show/department/19')}} " class=" d-inline-block"> {{trans('admin.the_most_wanted')}}</a>
                            @endif
                                        @if($department->id  == '20')
                                            <span class="its-parent">
                                 <span class="icon"> <i class="zmdi zmdi-device-hub"></i>
                            </span>
                           <a href="{{url('show/department/20')}} " class=" d-inline-block">  {{trans('admin.special_offers')}}</a>
                            @endif
                                                @if($department->id  == '21')
                                                    <span class="its-parent">
                                 <span class="icon"> <i class="zmdi zmdi-device-hub"></i>
                            </span>
                           <a href="{{url('show/department/21')}} " class=" d-inline-block">  {{trans('admin.best_seller')}}</a>
                            @endif
                            </span>

                                                    <ul class="its-children">
                   @foreach($products as $product)
                                                            @if($department->id  == $product->department_id)
                                                                <li>
                             <a href="{{url('show/product/'.$product->id)}}">
                                 <img  class="w_30_hpx_20px " src="{{url('public/storage').'/'.$product->photo}}"> </span> <span>{{$product['product_name_'.$lang]}}
                         <span>
                         </span></a></li>

            @endif
        @endforeach
    </ul>
    </li>
@endforeach

<!--//has-child-->
    </ul>
</nav>
<!--End hs Mega Menu       en-->

<!-- --------------------------------------- End session ar Mega Menu  ---------------------------------------- -->



<ul class="grid-items" >
<!-- <li class="grid"><a href="{{aurl('')}}"><i class="fas fa-eye"></i> admin  </a> </li> -->
    <a href="{{url('lang_front_ar')}}" class="dropdown-item">
        <!-- Message Start -->
        <div class="media">
            <img src="{{url('default')}}/ar.png" alt="ar.png" class="img_lang">
            <div class="media-body"> <h6 class="dropdown-item-title">عربى  </h6></div>
        </div>
        <!-- Message End -->
    </a>

    <a href="{{url('lang_front_en')}}" class="dropdown-item">
        <!-- Message Start -->
        <div class="media">
            <img src="{{url('default')}}/en.png" alt="en.png"  class="img_lang">
            <div class="media-body"><h6 class="dropdown-item-title">English </h6> </div></div>
        <!-- Message End -->
    </a>
    <!-- <li class="more-btn"><a href="#1"> More</a></li> -->
</ul>








<style type="text/css">
    .img_lang {
        width: 25px;
        height: 25px;
        border-radius: 50%;
    }
    .nav-controls {
        height: 36px;
        line-height: 36px;
        background: rgba(0,0,0,0.12);
        text-align: right;
        margin-right: 77px;
        margin-bottom:14px;
    }
    .nav-controls {
        height: 36px;
        line-height: 36px;
        background: rgba(0,0,0,0.12);
        text-align: right;
        margin-right: 129px;
        text-align: center;
    }
    /*#0d106b*/
    .hs-s, .hs-navigation.open {
        transition: .6s;
        -webkit-transition: .6s;
        -moz-transition: .6s;
        background-color: #0d106b;
    }
    .img_world_flag{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-top: -7px;
    }
    .brand-logo {
        display: block;
        text-align: center;
        background-color: #0d106b;
    }
</style>