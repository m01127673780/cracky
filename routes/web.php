<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//

Route::group(['middleware'=>'Maintenance'],function (){


Route::get('/','Hompagefrontend@index');
Route::get('show/product/{id}','Hompagefrontend@show');
Route::get('show/department/{id}','Hompagefrontend@show_department');
Route::get('show/all/products','Hompagefrontend@show_all_products_page');

Route::get('lang_front_ar','Hompagefrontend@lang_front_ar');
Route::get('lang_front_en','Hompagefrontend@lang_front_en');

	 


 });//Maintenance


Route::get('maintenance', function () {
//    return dd(setting()->status);
    if (setting()->status == 'open')
    {
        return redirect('/');
    }
     return view('front.maintenance');
 });



Route::get('storageLink', function () {
//    return php artisan storage:link;
     Artisan::call('storage:link');
          return back();
 });
Route::get('config', function () {
//    return  php artisan config:clear ;
     Artisan::call('config:clear');
          return back();
 });
 Route::get('view', function () {
//    return php artisan view:clear ;
     Artisan::call('view:clear');
          return back();
 }); 
 Route::get('cache', function () {
//    return php artisan cache:clear ;
     Artisan::call('cache:clear');
          return back();
 }); 





Route::get('/createStorage', function () {
    Artisan::call('storage:link');
});



Route::get('relodpage', function () {
       return Redirect::back()->with('message',' success');

});
 
