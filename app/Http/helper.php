<?php

if (!function_exists('aurl')){
 function  aurl($url=null){
     return url('admin/'.$url);
 }
}//aurl

if (!function_exists('setting')){
 function  setting(){
     return \App\Settings::orderBy('id','desc')->first();
 }
}//aurl

if (!function_exists('frontend')){
 function  frontend(){
     return \App\Frontend::orderBy('id','desc')->first();
 }
}//aurl

if (!function_exists('load_dep')){
    function  load_dep($select = null,$dep_hide = null){
         $departments = \App\Model\Department::selectRaw('dep_name_'.session('lang').' as text')
         ->selectRaw('id as id')
         ->selectRaw('parent as parent')
         ->selectRaw('icon as icon')
         ->get(['text','parent','id','icon']);
     $dep_arr =[];
      foreach ($departments as $department)
       {
           $list_arr =[];
           $list_arr['icon']     = '';
           $list_arr['li_attr']  = '';
           $list_arr['a_attr']   = '';
           $list_arr['children'] = [];

           if ($select !== null and $select == $department->id)
              {
                $list_arr['state']    = [
                'opened'   =>true,
                'selected' =>true,
                'disabled' =>false,
           ];
             } //$select
           if ($dep_hide !== null and $dep_hide == $department->id)
              {
                $list_arr['state']    = [
                'opened'   =>false,
                'selected' =>false,
                'disabled' =>true,
                'hidden'   =>true,
           ];
             } //$dep_hide
           $list_arr ['id'] = $department->id;
           $list_arr ['parent'] = $department->parent !== null?$department->parent:'#';
           $list_arr ['text'] = $department->text;
           $list_arr ['icon'] = $department->icon;
           array_push($dep_arr,$list_arr);
         }//foreach
        return json_encode($dep_arr,JSON_UNESCAPED_UNICODE);

    }//load_dep
   }// function_exists load_dep

if (!function_exists('up')){
 function  up(){
     return  new App\Http\Controllers\Upload;
 }
}//aurl
if (!function_exists('admin')){
 function  admin (){
     return auth()->guard('admin');
 }
}//admin

if (!function_exists('active_menu')){
    function  active_menu ($link){
        if (preg_match('/'.$link.'/i',Request::segment(2))){
            return['menu-open','display:block'];
        }else{
            return ['',''];
        }
    }
}//  = active_menu   // {{active_menu('segment2   like admin or users or plplp')[0]}}

     if (!function_exists('lang'))
       {
            function lang()
            {
                if(session()->has('lang'))
                {
                    return session('lang');
                }else{
                    session()->put('lang',setting()->main_lang);
                    return setting()->main_lang;
                }//else
            }//function lang
        }//if
// This is meaning  if exists  session lang  return  this session  .... else  return 'en' session

    if (!function_exists('direction'))
    {
            function direction()
            {
                if(session()->has('lang'))
                {
                      if (session('lang') == 'ar')
                      {
                          return 'rtl';
                      }else {
                          return 'ltr';
                            }
                } /*if*/else{
                            return 'ltr';
                            }//else
            }//function direction
    }//if
// This is meaning  if exists  session lang  ..... if session lang == ar  return rtl else return  ltr  if session not =  Any thing    !=not ar or en  return default ltr


    if (!function_exists('datatable_lang'))
    {
            function datatable_lang()
            {
                return [
                    'sProcessing' => trans('admin.sProcessing'),
                    'sLengthMenu'        => trans('admin.sLengthMenu'),
                    'sZeroRecords'       => trans('admin.sZeroRecords'),
                    'sEmptyTable'        => trans('admin.sEmptyTable'),
                    'sInfo'              => trans('admin.sInfo'),
                    'sInfoEmpty'         => trans('admin.sInfoEmpty'),
                    'sInfoFiltered'      => trans('admin.sInfoFiltered'),
                    'sInfoPostFix'       => trans('admin.sInfoPostFix'),
                    'sSearch'            => trans('admin.sSearch'),
                    'sUrl'               => trans('admin.sUrl'),
                    'sInfoThousands'     => trans('admin.sInfoThousands'),
                    'sLoadingRecords'    => trans('admin.sLoadingRecords'),

                    'oPaginate'      =>
                        [
                            'sFirst'            => trans('admin.sFirst'),
                            'sLast'             => trans('admin.sLast'),
                            'sNext'             => trans('admin.sNext'),
                            'sPrevious'         => trans('admin.sPrevious'),
                        ],//oPaginate
                    'oAria'              =>
                        [
                            'sSortAscending'  => trans('admin.sSortAscending'),
                            'sSortDescending' => trans('admin.sSortDescending'),
                        ],//oAria
                ]; //$langJson//return
            }//functiondatatable_lang
    }//if





if (!function_exists('v_image')){
    function  v_image($ext=null){
        if ($ext === null){
            return'image|mimes:jpg,jpeg,png,gif,bmp';
        }else{
            return'image|mimes:'.$ext;
        }
    }
}//v_image ...... =  validate_image for  validate image



/*

JPG
PNG
GIF
WEBP
TIFF
PSD
RAW
BMP
HEIF
INDD
JPEG 2000
*/













//This is the icon abbreviation OR fore short
    if (!function_exists('datatable_buttons_include'))
    {
            function datatable_buttons_include()
            {
                return [
                    [ 'extend'=>'print','className'=>'btn btn-dark','text'=>'        <i class="fa fa-print"></i> '       .trans('admin.print')],
                    [ 'extend'=>'pdf','className'=>'btn btn-success','text'=>'       <i class="far fa-file-pdf "></i> '  .trans('admin.pdf')],
                    [ 'extend'=>'excel','className'=>'btn btn-warning','text'=>'     <i class="far fa-file-excel "></i> '.trans('admin.excel')],
                    [ 'extend'=>'csv','className'=>'btn btn-success','text'=>'        <i class="fas fa-file-csv "></i> '.trans('admin.csv')],
                    [ 'extend'=>'columnToggle','className'=>'btn btn-danger','text'=>'<i class="fa fa-th-list "></i> '   .trans('admin.column-toggle')],
                    [ 'extend'=>'copy','className'=>'btn btn-warning','text'=>'       <i class="fa fa-copy "></i>  '.trans('admin.copy')],
                    [ 'extend'=>'colvis','className'=>'btn btn-info','text'=>'        <i class="fa fa-tasks"></i>  '.trans('admin.choose-field')],
                    [ 'extend'=>'pageLength','className'=>'btn btn-info','text'=>'    <i class="fa fa-sort-numeric-up"></i> '.trans('admin.page-length')],
                    [ 'extend'=>'selectAll','className'=>'btn btn-success','text'=>'  <i class="fa fa-clipboard-list"></i>'.trans('admin.select-all')],
                    [ 'extend'=>'selectNone','className'=>'btn btn-danger','text'=>'  <i class="fa fa-clipboard"></i>'.trans('admin.select-none')],

                ]; //buttons//return
            }//functiondatatable_lang
    }//if

//This is the icon abbreviation OR fore short code datatable_buttons_include


