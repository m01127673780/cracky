
<!-- Navbar -->
<nav class="main-header  navbar navbar-expand navbar-white navbar-light navbar_icon_navbar_arrows">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{aurl('')}}" class="nav-link">{{trans('admin.home')}}</a>

        </li>
        <li class="nav-item d-none d-sm-inline-block">
            {{--            <a href="#" class="nav-link">Contact</a>--}}
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3 d-none">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav  content_all_li_navbar content_icon_navbar_arrows">
 
                  <!-- Messages Dropdown Menu -->
            
      
                 <!-- Messages Dropdown Menu -->
                         <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#"> <i class="fas fa-globe-europe"></i></a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="{{aurl('lang/ar')}}" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                           <img src="{{url('default')}}/ar.png" alt="ar.png" class="w_h_20px  mr-3 img-circle">
                        <div class="media-body"> <h3 class="dropdown-item-title">   عربى</h3> </div>
                    </div>
                    <!-- Message End -->
                </a>
                <a href="{{aurl('lang/en')}}" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{url('default')}}/en.png" alt="en.png" class="w_h_20px  mr-3  img-circle">
                        <div class="media-body"><h3 class="dropdown-item-title">English</h3></div>
                    </div>
                    <!-- Message End -->
                </a>
                <a href="#" class="dropdown-item"> </a>
            </div>
        </li>
                 <!-- Messages Dropdown Menu -->
               <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#"> <i class="fas fa-user-lock"></i></a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="{{url('/')}}" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{url('default')}}/show_website.gif" alt="ar.png" class="w_h_20px  mr-3 img-circle">
                        <div class="media-body"> <h3 class="dropdown-item-title">  {{trans('admin.view_website')}}</h3> </div>
                    </div>
                    <!-- Message End -->
                </a>
                <a href="{{aurl('logout')}}" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{url('default')}}/logout.png" alt="en.png" class="w_h_20px  mr-3  img-circle">
                        <div class="media-body"><h3 class="dropdown-item-title"> {{trans('admin.logout')}} </h3></div></div>
                    <!-- Message End -->
                </a>
                <a href="#" class="dropdown-item"> </a>
            </div>
        </li> 
               <li class="nav-item dropdown"><a href="#" class="dropdown-item">  <a href="{{url('/')}}" class="color_fff "><i class="fas fa-eye"></i>                             </a></li>
              <!-- <li class="nav-item dropdown"> <a href="#" class="dropdown-item">  <a href="{{aurl('')}}" class=" color_fff"><i class="fas fa-house-damage"></i>                 </a></li> 
               <li class="nav-item dropdown"><a href="#" class="dropdown-item">  <a href="{{ URL::current() }}" class="color_fff "><i class="fas fa-sync "></i>                   </a></li>-->   <!--refresh by laravel  -->  
              <li class="nav-item dropdown cursor_pointer"><a href="#" class="dropdown-item">  <a   onclick="refresh()" class="color_fff "><i class="fas fa-sync "></i>               </a></li>  <!--refresh by javaScript  -->
               <li class="nav-item dropdown cursor_pointer"><a href="#" class="dropdown-item">  <a  onclick="goBack()"   class="color_fff "><i class="fas fa-arrow-left"> </i>    </a></li> 
               <li class="nav-item dropdown sm_none"><a href="#" class="dropdown-item">  <a href="{{URL::previous()}}" class="color_fff "><i class="fas fa-retweet  ">  </i>      </a></li>
               
               


            <!--<li>-->
            <!--    <a href="#" class="dropdown-item">  <a href="{{url('relodpage')}}" class="color_fff "><i class="fas fa-sync"></i></a>-->
            <!--</li>  -->
            
            <!--<li>-->
            <!--    <a href="#" class="dropdown-item">  <a href="{{URL::previous() }}" class="color_fff "><i class="fas fa-edit"></i> back laravel </a>-->
            <!--</li>    -->
            
 
        
    </ul>
</nav>
<!-- /.navbar -->
