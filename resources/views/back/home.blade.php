@extends('back.index')
@section('content')

    <!-- Content Wrapper content_wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-11">
                        <center><h1 class="titele_home_dashbord  text-dark title">{{trans('admin.home')}}</h1></center>
                        <center><h1 class="titele_home_dashbord  text-dark title">
                            
                            
                            
                            
                         
                        
                        
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
</h1></center>
                        
                        
  
                        
                        

                        
                        
                        
                        
                        
                        
                        
                        
                        <center class="d-none">  
                        


<!-------------------- start Save to face book --------------------------->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v6.0"></script>

                <!-- start btn like --------------------->
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>

  <!-- Your like button code -->
  <div class="fb-like" 
    data-href="http://cracky-eg.com" 
    data-layout="standard" 
    data-action="like" 
    data-show-faces="true">
  </div>
<!-- End  btn like --------------------->
               
               <!-- start btn like --------------------->
   <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="http://cracky-eg.com" 
    data-layout="button_count">
  </div>
<!-- End  btn like --------------------->
     

<!-------------------- start Save to face book --------------------------->

<!-------------------- start Save to face book --------------------------->
                      
            <!-------------------- start sharethis    --------------------------->
 <!-------------------- End   sharethis    --------------------------->
 
            
<!-------------------- start Save to face book --------------------------->

 

<!-------------------- End  Save to face book  --------------------------->


                        
                        </center>
                    </div><!-- /.col -->
                    <div class="col-sm-1">
                        <ol class="breadcrumb float-sm-right">
                            <!--<li class="breadcrumb-item"><a href="{{aurl('')}}" class=" btn-danger btn  color_fff ">{{trans('admin.home')}}</a></li>-->
                            {{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                @include('back.message')
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
{{--start count home----------------------------------------------------}}
                <div class="row  content_small_box_count">

                    {{--------------- start    small box products -----------------}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger row">

                            <div class="col-md-6 ">
                                <div class="inner"><h3>{{  $products = DB::table('products')->count()}}</h3><p>{{trans('admin.products')}}</p></div>
                                <div class="icon"> <i class="ion ion-person-add"></i></div>
                            </div> <!-- ./ col-md-6  -->
                            <div class="col-md-6 "><a href=" {{aurl('products')}}" class="color_fff">
                                    <i class="fas fa-cubes  icon_count_table"></i>
                                </a>
                            </div> <!-- ./ col-md-6  -->

                            <a class="small-box-footer btn_crete_new_row_products"> {{trans('admin.add')}} <i class="fas fa-arrow-circle-right"></i> </a>
                        </div>
                    </div> <!-- ./col -->
                    {{--------------- End    small box products -----------------}}
                    {{--------------- start    small box admins -----------------}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning row ">
                            <div class="col-md-6 ">
                                <div class="inner"><h3>{{  $admins = DB::table('admins')->count()}}</h3><p>{{trans('admin.admins')}}</p></div>
                                <div class="icon"> <i class="ion ion-person-add"></i></div>
                            </div> <!-- ./ col-md-6  -->
                            <div class="col-md-6 "><a href="{{aurl('admin')}}" class="color_fff">
                                    <i class="fas fa-user-tie  icon_count_table"></i>
                                </a></div> <!-- ./ col-md-6  -->
                            <a class="small-box-footer btn_crete_new_row_admin"> {{trans('admin.add')}} <i class="fas fa-arrow-circle-right"></i> </a>
                        </div>
                    </div> <!-- ./col -->
                    {{--------------- End    small box admins -----------------}}
                    {{--------------- start    small box users -----------------}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary row ">
                            <div class="col-md-6 ">
                                <div class="inner"><h3>{{  $users = DB::table('users')->count()}}</h3><p>{{trans('admin.users')}}</p></div>
                                <div class="icon"> <i class="ion ion-person-add"></i></div>
                            </div> <!-- ./ col-md-6  -->
                            <div class="col-md-6 "><a href="{{aurl('users')}}" class="color_fff">
                                    <i class="fas fa-users  icon_count_table"></i>
                                </a></div> <!-- ./ col-md-6  -->
                            <a class="small-box-footer btn_crete_new_row_users"> {{trans('admin.add')}} <i class="fas fa-arrow-circle-right"></i> </a>
                        </div>
                    </div> <!-- ./col -->
                    {{--------------- End    small box admins -----------------}}
                    {{--------------- start    small box departments -----------------}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-dark row ">
                            <div class="col-md-6 ">
                                <div class="inner"><h3>{{  $departments = DB::table('departments')->count()}}</h3><p>{{trans('admin.departments')}}</p></div>
                                <div class="icon"> <i class="ion ion-person-add"></i></div>
                            </div> <!-- ./ col-md-6  -->
                            <div class="col-md-6 "><a href="{{aurl('departments')}}" class="color_fff">
                                    <i class="fas fa-sitemap  icon_count_table"></i>
                                </a></div> <!-- ./ col-md-6  -->
                            <a href="{{aurl('departments')}}" class="small-box-footer"> {{trans('admin.go_to')}} <i class="fas fa-arrow-circle-right"></i> </a>
                        </div>
                    </div> <!-- ./col -->
                    {{--------------- End    small box departments -----------------}}

                    {{--------------- start    small box countreis -----------------}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary row ">
                            <div class="col-md-6 ">
                                <div class="inner"><h3>{{  $sliders = DB::table('sliders')->count()}}</h3><p>{{trans('admin.sliders')}}</p></div>
                                <div class="icon"> <i class="ion ion-person-add"></i></div>
                            </div> <!-- ./ col-md-6  -->
                            <div class="col-md-6 "><a href="{{aurl('sliders')}}" class="color_fff">
                                    <i class="fas fa-images  icon_count_table"></i>
                                </a></div> <!-- ./ col-md-6  -->
                            <a   class="small-box-footer btn_crete_new_row_sliders"> {{trans('admin.add')}} <i class="fas fa-arrow-circle-right"></i> </a>
                        </div>
                    </div> <!-- ./col -->
                    {{--------------- End    small box countreis -----------------}}



                    {{--------------- start    small box countreis -----------------}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info row ">
                            <div class="col-md-6 ">
                                <div class="inner"><h3>{{  $countreis  = DB::table('countreis')->count()}}</h3><p>{{trans('admin.countreis')}}</p></div>
                                <div class="icon"> <i class="ion ion-person-add"></i></div>
                            </div> <!-- ./ col-md-6  -->
                            <div class="col-md-6 "><a href="{{aurl('countreis')}}" class="color_fff">
                                    <i class="fas fa-flag-checkered  icon_count_table"></i>
                                </a></div> <!-- ./ col-md-6  -->
                            <a   class="small-box-footer btn_crete_new_row_countreis"> {{trans('admin.edit')}} <i class="fas fa-arrow-circle-right"></i> </a>
                        </div>
                    </div> <!-- ./col -->
                    {{--------------- End    small box countreis -----------------}}


                    {{--------------- start    small box frontends -----------------}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-dark row ">
                            <div class="col-md-6 ">
                                <div class="inner"><h3>{{  $frontends  = DB::table('countreis')->count()}}</h3><p>{{trans('admin.frontends_count')}}</p></div>
                                <div class="icon"> <i class="ion ion-person-add"></i></div>

                            </div> <!-- ./ col-md-6  -->
                            <div class="col-md-6 "> <a href="{{aurl('frontends')}}" class="color_fff">
                                    <i class="fas fa-user-cog  icon_count_table"></i>
                                </a></div> <!-- ./ col-md-6  -->
                            <a   class="small-box-footer btn_crete_new_row_frontends"> {{trans('admin.add')}} <i class="fas fa-arrow-circle-right"></i> </a>
                        </div>
                    </div> <!-- ./col -->
                    {{--------------- End    small box frontends -----------------}}
                    {{--------------- start    small box settings -----------------}}
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-secondary row ">
                            <div class="col-md-6 ">
                                <div class="inner"><h3>{{  $settings  = DB::table('settings')->count()}}</h3><p>{{trans('admin.settings')}}</p></div>
                                <div class="icon"> <i class="ion ion-person-add"></i></div>
                            </div> <!-- ./ col-md-6  -->
                            <div class="col-md-6 ">  <a href="{{aurl('settings')}}" class="color_fff">
                                    <i class="fas fa-cog  fa-spin icon_count_table"></i>
                                </a></div> <!-- ./ col-md-6  -->
                            <a   class="small-box-footer btn_crete_new_row_frontends"> {{trans('admin.edit')}} <i class="fas fa-arrow-circle-right"></i> </a>
                        </div>
                    </div> <!-- ./col -->
                    {{--------------- End    small box settings -----------------}}
                </div> <!-- /.row  content_small_box_count-->

            {{--End   count home----------------------------------------------------}}
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Sales
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    <!-- Morris chart - Sales -->
                                    <div class="chart tab-pane active" id="revenue-chart"
                                         style="position: relative; height: 300px;">
                                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                    </div>
                                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                        <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- DIRECT CHAT -->
                        <div class="card direct-chat direct-chat-primary">
                            <div class="card-header">
                                <h3 class="card-title">Direct Chat</h3>

                                <div class="card-tools">
                                    <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                                            data-widget="chat-pane-toggle">
                                        <i class="fas fa-comments"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="{{url('design/adminlte')}}/dist/img/user1-128x128.jpg" alt="message user image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            Is this template really for free? That's unbelievable!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="{{url('design/adminlte')}}/dist/img/user3-128x128.jpg" alt="message user image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            You better believe it!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                                            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="{{url('design/adminlte')}}/dist/img/user1-128x128.jpg" alt="message user image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            Working with AdminLTE on a great new app! Wanna join?
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                                            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="{{url('design/adminlte')}}/dist/img/user3-128x128.jpg" alt="message user image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            I would love to.
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                </div>
                                <!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="{{url('design/adminlte')}}/dist/img/user1-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="{{url('design/adminlte')}}/dist/img/user7-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">I will be waiting for...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="{{url('design/adminlte')}}/dist/img/user3-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">I'll call you back at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="{{url('design/adminlte')}}/dist/img/user5-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">Where is your new...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="{{url('design/adminlte')}}/dist/img/user6-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">Can I take a look at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="{{url('design/adminlte')}}/dist/img/user8-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">Never mind I found...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contacts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                        <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->

                        <!-- TO DO List -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="ion ion-clipboard mr-1"></i>
                                    To Do List
                                </h3>

                                <div class="card-tools">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <ul class="todo-list" data-widget="todo-list">
                                    <li>
                                        <!-- drag handle -->
                                        <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                        <!-- checkbox -->
                                        <div  class="icheck-primary d-inline ml-2">
                                            <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                            <label for="todoCheck1"></label>
                                        </div>
                                        <!-- todo text -->
                                        <span class="text">Design a nice theme</span>
                                        <!-- Emphasis label -->
                                        <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                                        <!-- General tools such as edit or delete-->
                                        <div class="tools">
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                        <div  class="icheck-primary d-inline ml-2">
                                            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                            <label for="todoCheck2"></label>
                                        </div>
                                        <span class="text">Make the theme responsive</span>
                                        <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                        <div class="tools">
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                        <div  class="icheck-primary d-inline ml-2">
                                            <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                            <label for="todoCheck3"></label>
                                        </div>
                                        <span class="text">Let theme shine like a star</span>
                                        <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                                        <div class="tools">
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                        <div  class="icheck-primary d-inline ml-2">
                                            <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                            <label for="todoCheck4"></label>
                                        </div>
                                        <span class="text">Let theme shine like a star</span>
                                        <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                                        <div class="tools">
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                        <div  class="icheck-primary d-inline ml-2">
                                            <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                            <label for="todoCheck5"></label>
                                        </div>
                                        <span class="text">Check your messages and notifications</span>
                                        <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                                        <div class="tools">
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                        <div  class="icheck-primary d-inline ml-2">
                                            <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                            <label for="todoCheck6"></label>
                                        </div>
                                        <span class="text">Let theme shine like a star</span>
                                        <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                                        <div class="tools">
                                            <i class="fas fa-edit"></i>
                                            <i class="fas fa-trash-o"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">

                        <!-- Map card -->
                        <div class="card bg-gradient-primary">
                            <div class="card-header border-0">
                                <h3 class="card-title">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    Visitors
                                </h3>
                                <!-- card tools -->
                                <div class="card-tools">
                                    <button type="button"
                                            class="btn btn-primary btn-sm daterange"
                                            data-toggle="tooltip"
                                            title="Date range">
                                        <i class="far fa-calendar-alt"></i>
                                    </button>
                                    <button type="button"
                                            class="btn btn-primary btn-sm"
                                            data-card-widget="collapse"
                                            data-toggle="tooltip"
                                            title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                                <div id="world-map" style="height: 250px; width: 100%;"></div>
                            </div>
                            <!-- /.card-body-->
                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div id="sparkline-1"></div>
                                        <div class="text-white">Visitors</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-4 text-center">
                                        <div id="sparkline-2"></div>
                                        <div class="text-white">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-4 text-center">
                                        <div id="sparkline-3"></div>
                                        <div class="text-white">Sales</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- solid sales graph -->
                        <div class="card bg-gradient-info">
                            <div class="card-header border-0">
                                <h3 class="card-title">
                                    <i class="fas fa-th mr-1"></i>
                                    Sales Graph
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                                               data-fgColor="#39CCCC">

                                        <div class="text-white">Mail-Orders</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-4 text-center">
                                        <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                                               data-fgColor="#39CCCC">

                                        <div class="text-white">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-4 text-center">
                                        <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                                               data-fgColor="#39CCCC">

                                        <div class="text-white">In-Store</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->

                        <!-- Calendar -->
                        <div class="card bg-gradient-success">
                            <div class="card-header border-0">

                                <h3 class="card-title">
                                    <i class="far fa-calendar-alt"></i>
                                    Calendar
                                </h3>
                                <!-- tools card -->
                                <div class="card-tools">
                                    <!-- button with a dropdown -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fas fa-bars"></i></button>
                                        <div class="dropdown-menu float-right" role="menu">
                                            <a href="#" class="dropdown-item">Add new event</a>
                                            <a href="#" class="dropdown-item">Clear events</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">View calendar</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pt-0">
                                <!--The calendar -->
                                <div id="calendar" style="width: 100%"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection