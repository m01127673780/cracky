
<div class="btn btn_level
    {{$level == 'user'        ?'btn-dark':''}}
    {{$level == 'vendor'      ?'btn-success':''}}
    {{$level == 'company'     ?'btn-primary':''}}
    {{$level == 'labor_Office'?'btn-warning':''}}
    {{$level == 'corporation' ?'btn-danger':''}}
    {{$level == 'store'       ?'btn-info':''}}
    ">

<span class="fas     icon_level_users
    {{$level == 'user'        ?'fa-user-tie':''}}
    {{$level == 'vendor'      ?'fa-project-diagram':''}}
    {{$level == 'company'     ?' icon_company fa-place-of-worship':''}}
    {{$level == 'labor_Office'?'fas fa-building':''}}
    {{$level == 'corporation' ?'fa-archway':''}}
    {{$level == 'store'       ?'fa-shopping-cart':''}}
    "></span>
  <span>{{trans('admin.'.$level)}}</span>
  <span class="section_btn_shoe_user_by_btn_level   ">@include('back.users.btn.show')</span>
</div>




