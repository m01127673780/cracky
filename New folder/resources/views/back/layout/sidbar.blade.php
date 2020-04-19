
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="{{aurl('')}}" class="brand-link">
      <img src="{{url('public/storage').Storage::url(setting()->logo)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{trans('admin.cracky')}}</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel content_preview_img_logo mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="{{url('public/storage').Storage::url(setting()->logo)}}" class="img_preview_img_logo" alt="User Image" >
         </div>
         <div class="info">
            {{--            <a href="#" class="d-block">{{admin()->user()->name}}</a>--}}
         </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="{{aurl('')}}" class="nav-link active btn-default" style="">

                  <p>
                     {{trans('admin.dashboard')}}
                     <i class="right fa  fa-external-link "></i>
                  </p>
               </a>
            </li>
            <li class="nav-item    btn-danger ">
               <a href="{{url('relodpage')}}" class="nav-link  active   bg-danger " >
                  <p>{{trans('admin.refresh')}} <i class="  fas fa-sync"></i>
                  </p>
               </a>
            </li>
            {{-------------------------------------------------------------------------------------------}}
            <li class="nav-item admin has-treeview {{active_menu('frontends')[0]}}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-cogs"></i><p>{{trans('admin.frontends')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" style="{{active_menu('admin')[1]}}">
                  <li class="nav-item">

                     <button   class="nav-link btn btn-info       btn_crete_new_row_frontends">
                        <i class="fa fa-cog fa-spin  nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.frontends')}}</p>
                     </button>
                     <a href="{{aurl('frontends')}}"  class="nav-link btn btn-success btn-create-new-row  ">
                        <i class="fa fa-cogs nav-icon icon-btn-create-new-row"></i><p class="">  <i class="fa fa-scroll"></i>  {{trans('admin.page_frontends')}}</p>
                     </a>
                  </li>
               </ul>
            </li><!--nav-item frontends---------->
            <li class="nav-item admin has-treeview {{active_menu('settings')[0]}}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-cogs"></i><p>{{trans('admin.settings')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" style="{{active_menu('admin')[1]}}">
                  <li class="nav-item">

                     <button   class="nav-link btn btn-info    btn_crete_new_row_settings">
                        <i class="fa fa-cog fa-spin  nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.settings')}}</p>
                     </button>
                     <a href="{{aurl('settings')}}"  class="nav-link btn btn-success btn-create-new-row  ">
                        <i class="fa fa-cogs nav-icon icon-btn-create-new-row"></i><p class="">  <i class="fa fa-scroll"></i>  {{trans('admin.page_settings')}}</p>
                     </a>
                  </li>
               </ul>
            </li><!--nav-item settings---------->
            <li class="nav-item admin has-treeview {{active_menu('admin')[0]}}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users-cog"></i><p>{{trans('admin.adminacount')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" style="{{active_menu('admin')[1]}}">
                  <li class="nav-item">
                     <a href="{{aurl('admin')}}" class="nav-link">
                        <i class="fa fa-users-cog nav-icon"></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.admin')}}</p>
                     </a>
                     <button   class="nav-link btn btn-info btn-create-new-row  btn_crete_new_row_admin">
                        <i class="fa fa-user-cog nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create-admin')}}</p>
                     </button>
                     <a href="{{aurl('admin/create')}}"  class="nav-link btn btn-success btn-create-new-row  ">
                        <i class="fa fa-user-cog nav-icon icon-btn-create-new-row"></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page-create-admin')}}</p>
                     </a>
                  </li>
               </ul>
            </li><!--nav-item admin---------->


            <li class="nav-item admin has-treeview {{active_menu('products')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-cubes nav-icon"></i><p>{{trans('admin.products')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('products')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('products')}}" class="nav-link">
                        <i class="fa fa-cubes nav-icon"></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.products')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row  btn_crete_new_row_products">
                        <i class="fas fa-cube  nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_products')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('products/create')}}"  class="">
                           <i class="fas fa-cube nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_product')}}</p>
                        </a>
                     </button>
                  </li>
                  <li class="nav-item">
                     <a href="{{aurl('products')}}?department_id=19" class="nav-link"><i class="  btn-danger fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_0')}}</p></a>
                     <a class="nav-link"><i class="btn-info fas fa-plus nav-icon"></i><p>{{trans('admin.add')}}</p></a>
                  </li>
                  <li class="nav-item"> <a href="{{aurl('products')}}?department_id=13" class="nav-link"><i class="  btn-info fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_1')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('products')}}?department_id=14" class="nav-link"><i class="  btn-success fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_2')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('products')}}?department_id=15" class="nav-link"><i class="  btn-warning fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_3')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('products')}}?department_id=20" class="nav-link"><i class="  btn-danger fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_5')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('products')}}?department_id=21" class="nav-link"><i class="  btn-primary fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_6')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('products')}}?department_id=16" class="nav-link"><i class="  btn-dark fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_7')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('products')}}?department_id=18" class="nav-link"><i class="  btn-secondary fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_8')}}</p></a></li>
               </ul>
            </li><!--End  products---------->
            {{-------------------------------------------------------------------------------------------}}



            <li class="nav-item admin has-treeview {{active_menu('departments')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-list nav-icon"></i><p>{{trans('admin.departments')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('departments')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('departments')}}" class="nav-link">
                        <i class="fa fa-list nav-icon"></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.departments')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row  btn_crete_new_row_departments">
                        <i class="fas fa-th nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_departments')}}</p>
                     </button>
                  </li>

                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('departments/create')}}"  class="">
                           <i class="fas fa-th nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_departments')}}</p>
                        </a>
                     </button>
                  </li>
                  <li class="nav-item"> <a href="{{aurl('departments')}}?id=19" class="nav-link"><i class="  btn-danger fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_0')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('departments')}}?id=13" class="nav-link"><i class="  btn-info fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_1')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('departments')}}?id=14" class="nav-link"><i class="  btn-success fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_2')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('departments')}}?id=15" class="nav-link"><i class="  btn-warning fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_3')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('departments')}}?id=20" class="nav-link"><i class="  btn-danger fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_5')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('departments')}}?id=21" class="nav-link"><i class="  btn-primary fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_6')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('departments')}}?id=16" class="nav-link"><i class="  btn-dark fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_7')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('departments')}}?id=18" class="nav-link"><i class="  btn-secondary fas fa-cube nav-icon"></i><p>{{trans('admin.dpe_8')}}</p></a></li>
               </ul>
            </li><!--End  departments---------->
            <!-- start sliders ---------->

            <li class="nav-item admin has-treeview {{active_menu('sliders')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-flag-checkered nav-icon"></i><p>{{trans('admin.sliders')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('sliders')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('sliders')}}" class="nav-link">
                        <i class="fa fa-flag-checkered nav-icon"></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.sliders')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row  btn_crete_new_row_sliders">
                        <i class="fa fa-flag-usa nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_sliders')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('sliders/create')}}"  class="">
                           <i class="fa fa-flag-usa nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_sliders')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li><!--End  departments---------->
            <!-- start users ---------->
            <li class="nav-item admin has-treeview {{active_menu('users')[0]}}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users-cog"></i><p>{{trans('admin.usersacount')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('users')[1]}}">
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row  btn_crete_new_row_users">
                        <i class="fa fa-user-plus nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_user')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('users/create')}}"  class="">
                           <i class="fa fa-user-cog nav-icon icon-btn-create-new-row"></i><i class="fa fa-file-alt"></i> <p class="">{{trans('admin.page_create_users')}}</p>
                        </a>
                     </button>
                  </li>
                  <li class="nav-item"> <a href="{{aurl('users')}}" class="nav-link"><i class="fas btn-secondary fa-users nav-icon"></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.usersacount')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('users')}}?level=user" class="nav-link"><i class="  btn-dark fas fa-user-tie nav-icon"></i><p>{{trans('admin.user')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('users')}}?level=vendor" class="nav-link"><i class="  btn-success fas fa-project-diagram nav-icon"></i><p>{{trans('admin.vendor')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('users')}}?level=company" class="nav-link"><i class="   btn-primary  fas icon_company fa-place-of-worship nav-icon"></i><p>{{trans('admin.company')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('users')}}?level=labor_Office" class="nav-link"><i class="  btn-warning fas fa-building nav-icon"></i><p>{{trans('admin.labor_Office')}}</p></a></li>
                  <li class="nav-item"> <a href="{{aurl('users')}}?level=corporation" class="nav-link"><i class="  btn-danger fas fa-archway nav-icon"></i><p>{{trans('admin.corporation')}}</p></a></li>

                  <li class="nav-item"> <a href="{{aurl('users')}}?level=store" class="nav-link"><i class="   btn-info fas fa-shopping-cart nav-icon"></i><p>{{trans('admin.store')}}</p></a></li>

               </ul>
            </li>
            <!-- End  users---------->
            <li class="nav-item admin has-treeview {{active_menu('countreis')[0]}}">
               <a href="#" class="nav-link">
                  <i class="fa fa-flag-checkered nav-icon"></i><p>{{trans('admin.countreis')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview content_W_20px_h_20px" style="{{active_menu('countreis')[1]}}">

                  <li class="nav-item"> <a href="{{aurl('countreis')}}" class="nav-link">
                        <i class="fa fa-flag-checkered nav-icon"></i><p> <i class="fa fa-file-signature"></i> {{trans('admin.countreis')}}</p>
                     </a></li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-info btn-create-new-row  btn_crete_new_row_countreis">
                        <i class="fa fa-flag-usa nav-icon icon-btn-create-new-row"></i><p class="">{{trans('admin.create_new_countreis')}}</p>
                     </button>
                  </li>
                  <li class="nav-item">
                     <button   class="nav-link btn btn-success btn-create-new-row     ">
                        <a href="{{aurl('countreis/create')}}"  class="">
                           <i class="fa fa-flag-usa nav-icon  "></i><i class="fa fa-scroll"></i> <p class="">{{trans('admin.page_create_countreis')}}</p>
                        </a>
                     </button>
                  </li>
               </ul>
            </li><!--End  departments---------->
            {{-------------------------------------------------------------------------------------------}}
            {{---------------------start emoji------------------------------------------}}
            <li class="nav-item admin has-treeview {{active_menu('my_tools')[0]}}">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users-cog"></i><p>{{trans('admin.my_tools')}}<i class="fas fa-angle-left right"></i></p>
               </a>
               <ul class="nav nav-treeview" style="{{active_menu('my_tools')[1]}}">
                  <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                  {{--*****************************--}}

                  <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                     <a href="#" class="nav-link">
                        <i class=" ">😊 </i><p> 👩‍ 👩‍👩‍👧‍👧   🦸‍♀ 👈 👉 👆 👇️<i class="fas fa-angle-left right"></i></p>
                     </a>
                     <ul class="nav nav-treeview" style="{{active_menu('my_tools')[1]}}">
                        <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                        {{--*****************************--}}
                        <li class="nav-item">
                           <a href="https://getemoji.com/"  class="nav-link btn    btn_hover  " target="_blank">
                              <i class=" nav-icon icon-btn-create-new-row"> 😊 </i><p class="">  getemoji.com </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://coolsymbol.com/emojis/emoji-for-copy-and-paste.html" target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"> 😊  2</i><p class="">  emoji-copy-and-paste </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://textfac.es/" target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"> </i><p class="">  textfac.es ༼ つ ͡° ͜ʖ ͡° ༽つ</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://www.lennyfaces.net/" target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"></i><p class=""> lennyfaces.net( ° ͜ʖ °)</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://xn--i-7iq.ws/#page-top"  target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"> 😊 </i><p class=""> xn--i-7iq.ws</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://xn--i-7iq.ws/emojidomain/%E2%98%BA%F0%9F%98%81%F0%9F%98%82%F0%9F%98%83%F0%9F%98%84%F0%9F%98%85%F0%9F%98%86%F0%9F%98%89%F0%9F%98%8A%F0%9F%98%8B%F0%9F%98%8E%F0%9F%98%8D%F0%9F%98%98%F0%9F%92%A4%F0%9F%98%99%F0%9F%98%9A%E2%98%BA%F0%9F%99%82%F0%9F%A4%97%F0%9F%90%B9%F0%9F%A4%94%F0%9F%98%90%F0%9F%98%A4%F0%9F%98%B6%F0%9F%99%84%F0%9F%98%8F%F0%9F%98%A3%F0%9F%98%A5%F0%9F%98%AE%F0%9F%98%82"  target="_blank" class="nav-link btn    btn_hover  ">
                              <i class=" nav-icon icon-btn-create-new-row"> 😊 </i><p class=""> xn--i-7iq.ws</p>
                           </a>
                        </li>
                        {{--*****************************--}}
                        </li>
                     </ul>
                  </li><!--nav-item emoji---------->
                  <!--start fontawesome---------->
                  <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                     <a href="#" class="nav-link">
                        <p>
                           <i class=" fas fa-cogs "></i>
                           <i class=" fas fa-laptop-code"></i>
                           <i class=" fab fa-fort-awesome "></i>
                           <i class=" fas fa-comment-dots"></i>
                           <i class=" fas fa-toilet-paper "></i>
                           <i class=" fas fa-road "></i>
                           <i class=" fas fa-images "></i>
                           <i class=" fas fa-map-marked-alt "></i>
                           <i class=" fas fa-spinner fa-spin "></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview" style="{{active_menu('my_tools')[1]}}">
                        <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                        {{--*****************************--}}
                        <li class="nav-item">
                           <a href="https://fontawesome.com/icons?d=gallery&m=free" class="nav-link btn btn_hover" target="_blank">
                              <i class=" fas fa-id-card nav-icon icon-btn-create-new-row"></i><p class=" fas fa-chart-line"> fontawesome.com </p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="https://themes-pixeden.com/font-demos/7-stroke/" class="nav-link btn btn_hover" target="_blank">
                              <i class="  pe-7s-car nav-icon icon-btn-create-new-row"></i><p class="pe-7s-film"> themes-pixeden.com </p>
                           </a>
                        </li>
                        {{--*****************************--}}
                        </li>
                     </ul>
                  </li><!-- End nav-item fontawesome---------->
                  {{--*****************************--}}
                  {{--*****************************--}}
                  <li class="nav-item my_tools has-treeview {{active_menu('my_tools_programing')[0]}}">
                     <a href="#" class="nav-link">
                        <i class="fas fa-laptop-code ">  </i><p> {{trans('admin.my_tools_programing')}}
                           👇️
                           <i class="fas fa-keyboard">  </i>
                           <i class="fas fa-file-code">  </i>
                           {{--                           <i class="fab fa-free-code-camp">  </i>--}}
                           <i class="fas fa-angle-left right"></i></p>
                     </a>
                     <ul class="nav nav-treeview" style="{{active_menu('my_tools')[1]}}">
                        <li class="nav-item my_tools has-treeview {{active_menu('my_tools')[0]}}">
                        {{--*****************************--}}
                        <li class="nav-item">
                           <a href="{{url('view')}}"  class="nav-link btn    btn_hover  " target="_blank">
                              <i class=" fas fa-code nav-icon icon-btn-create-new-row">   </i> <p class=""> {{trans('admin.clear_view')}}</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('cache')}}"  class="nav-link btn    btn_hover  " target="_blank">
                              <i class="  fas fa-server nav-icon icon-btn-create-new-row"> </i><p class=""> {{trans('admin.clear_cache')}}</p>
                           </a>
                        </li>

                        {{--*****************************--}}
                        </li>
                     </ul>
                  </li><!--nav-item emoji---------->
                  {{--*****************************--}}
                  </li>
               </ul>
            </li><!--nav-item my_tools---------->
            {{---------------------End   my tols------------------------------------------}}
             <li class=" d-none nav-item has-treeview">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                     Layout Options
                     <i class="fas fa-angle-left right"></i>
                     <span class="badge badge-info right">6</span>
                  </p>
               </a>
               <ul class="nav nav-treeview">

                  {{-- ----------------------- mu tools --}}
                  <li class="nav-item">
                     <a href="https://www.google.com/search?q=hgljv%5Bl&oq=hgljv%5Bl&aqs=chrome..69i57j0l7.3188j1j9&sourceid=chrome&ie=UTF-8" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>google transl.com</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=cracky" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>php my admin</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="https://www.youtube.com/watch?v=4vwlDuqrUm4" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>youtube سوره البقره</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="http://localhost/pixel-eg/badry2020/last/laravel-last-badry2019/public/admin" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>badry2020</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="https://mailtrap.io/inboxes/519360/messages/1600394067" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> mailtrap.io <img src="https://mailtrap.io/assets/favicon-15d3458e7eba645015c84931d94c127fee554ac9214f5d11d112a7536d071412.ico"> </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="https://fontawesome.com/icons?d=gallery" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>fontawesome.com/</p>
                     </a>
                  </li>

                  <li class="d-none nav-item">
                     <a href="https://getbootstrap.com/docs/4.0/components/alerts/" target="_blank" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>bootstrap.com</p>
                     </a>
                  </li>
                  {{-- ----------------------- mu tools --}}









                  <li class="nav-item">
                     <a href="pages/layout/top-nav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Top Navigation</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Top Navigation + Sidebar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/boxed.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Boxed</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Sidebar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/fixed-topnav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Navbar</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/fixed-footer.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Footer</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Collapsed Sidebar</p>
                     </a>
                  </li>

                  {{------------------------------------------------------------}}
                  <li class="nav-item  ">
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                           Charts
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/charts/chartjs.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>ChartJS</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/charts/flot.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Flot</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/charts/inline.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Inline</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                           UI Elements
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/UI/general.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>General</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/icons.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Icons</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/buttons.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Buttons</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/sliders.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Sliders</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/modals.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Modals & Alerts</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/navbar.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Navbar & Tabs</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/timeline.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Timeline</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/UI/ribbons.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Ribbons</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                           Forms
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/forms/general.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>General Elements</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/forms/advanced.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Advanced Elements</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/forms/editors.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Editors</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/forms/validation.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Validation</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                           Tables
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/tables/simple.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Simple Tables</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/tables/data.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>DataTables</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/tables/jsgrid.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>jsGrid</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-header">EXAMPLES</li>
                  <li class="nav-item">
                     <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                           Calendar
                           <span class="badge badge-info right">2</span>
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                           Gallery
                        </p>
                     </a>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                           Mailbox
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/mailbox/mailbox.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Inbox</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/mailbox/compose.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Compose</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/mailbox/read-mail.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Read</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                           Pages
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/examples/invoice.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Invoice</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/profile.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Profile</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/e-commerce.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>E-commerce</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/projects.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Projects</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/project-add.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Project Add</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/project-edit.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Project Edit</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/project-detail.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Project Detail</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/contacts.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Contacts</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                           Extras
                           <i class="fas fa-angle-left right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="pages/examples/login.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Login</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/register.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Register</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/forgot-password.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Forgot Password</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/recover-password.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Recover Password</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/lockscreen.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Lockscreen</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Legacy User Menu</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/language-menu.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Language Menu</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/404.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Error 404</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/500.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Error 500</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/pace.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Pace</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/examples/blank.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Blank Page</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="starter.html" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Starter Page</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-header">MISCELLANEOUS</li>
                  <li class="nav-item">
                     <a href="https://adminlte.io/docs/3.0" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                     </a>
                  </li>
                  <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                     </a>
                  </li>
                  <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                           Level 1
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Level 2</p>
                           </a>
                        </li>
                        <li class="nav-item has-treeview">
                           <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>
                                 Level 2
                                 <i class="right fas fa-angle-left"></i>
                              </p>
                           </a>
                           <ul class="nav nav-treeview">
                              <li class="nav-item">
                                 <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Level 3</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Level 3</p>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Level 3</p>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Level 2</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                     </a>
                  </li>
                  <li class="nav-header">LABELS</li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                     </a>
                   </li><!-- /.nav-item-->
                  {{------------------------------------------------------------}}

               </ul>
            </li>


         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>
