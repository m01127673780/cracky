
 <link href=" {{url('front')}}/layout/dropdown_1/dropdown_1.css" rel="stylesheet" />
 <script src="{{url('front')}}/layout/dropdown_1/dropdown_1.js"></script>
 <nav class="nav_drop">
  <ul>
  @php
  if (empty (session('lingfront')))
  {
  $lang ='ar';
  }else{
  $lang = session('lingfront');
  }
  @endphp
    <!-- --------------------------------------- start session ar----------  -->
                                                      <a href="{{url('show/department/13')}} " class=" d-inline-block"><span>   {{trans('admin.login')}}</a>

                @foreach($departments_paginate as $department_paginate)
                    <li>

                        @if($department_paginate->id  == '16')

                          <a href="{{url('show/department/13')}} " class=" d-inline-block"><span>   {{trans('admin.Latest_product')}}</a>
                            
                          @endif
                            @if($department_paginate->id  == '18')
                            
                           <a href="{{url('show/department/18')}} " class=" d-inline-block"><span>  {{trans('admin.featured_products')}}</a>
                            @endif
                               
                            @if($department_paginate->id  == '19')
                           <a href="{{url('show/department/19')}} " class=" d-inline-block"><span>  {{trans('admin.the_most_wanted')}}</a>
                            @endif
                            @if($department_paginate->id  == '20')
                           <a href="{{url('show/department/20')}} " class=" d-inline-block"><span>  {{trans('admin.special_offers')}}</a>
                            @endif 
                            @if($department_paginate->id  == '21')
                           <a href="{{url('show/department/21')}} " class=" d-inline-block"><span>  {{trans('admin.best_seller')}}</a>
                            @endif

                        </span></a>
                        <ul class="hidden">
                        @foreach($products as $product)
                        
                        @if($department_paginate->id  == $product->department_id)
                        <li><a href="{{url('show/product/'.$product->id)}}">
                            <span class"span_drop_down_menu">{{$product['product_name_'.$lang]}} </span><span> <img  class="w_30_hpx_20px" src="{{url('public/storage').'/'.$product->photo}}"> </span>  
                            <span>
                                <img  src="" >
                                </span>
                        </a>
                    </li>      
                @endif
                @endforeach
<!--             @foreach($products as $product)<li><a href="#"><span>{{$product['product_name_'. $lang]}}</span></a></li> @endforeach
 -->
          </ul>
        </li>
    @endforeach 
                <li><a  href="{{url('/')}}" class="btn btn-info"> {{trans('admin.home')}}</a></li> 
           
   <!-- --------------------------------------- End session ar Mega Menu  ---------------------------------------- -->
     

  </ul>
</nav>
<footer>
 </footer>
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
    <style type="text/css">

         .nav_drop{
      display: flex;
    justify-content: center;
    top: -47px;
    position: absolute;
    z-index: 9999;
    margin: auto;
     position: fixed;
        left:  10%;

         }

         @media (max-width: 1330px){.nav_drop{display: none;}}
         .search-box {
 display: block;
    top: 53px;
    background: #2d3f56;
    background: #0d106b;
}

.nav_drop a {
     background-color: #0d106b;
  }
  .hs-menubar.sticky {
 
    background: #0d106b;
}
      </style>
