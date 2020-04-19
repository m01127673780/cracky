<?php
              Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {

              Config::set('auth.defines','admin');
              Route::get('login', 'AdminAuth@login');
              Route::get('register', 'AdminAuth@register');
              Route::get('forgot/password', 'AdminAuth@forgot_password');
              Route::post('forgot/password', 'AdminAuth@forgot_password_post');
              Route::get('reset/password/{token}', 'AdminAuth@reset_password');
              Route::post('reset/password/{token}', 'AdminAuth@reset_password_final');
              Route::any('logout', 'AdminAuth@logout');
              Route::post('login', 'AdminAuth@dologin');

              Route::group(['middleware' => 'admin:admin'],function (){


                // start Admin Route
                  // Route::any('admin/custmedit', 'AdminController@custom_edit');
                  // Route::any('admin/custmedit', 'AdminController@test');
                  Route::delete('admin/destroy/all', 'AdminController@multi_delete');
                  Route::resource('admin', 'AdminController');
                   Route::post('admin/create_quick', 'AdminController@quick_store');

                // start users Route
                  // Route::any('users/custmedit', 'UsersController@custom_edit');
                  // Route::any('users/custmedit', 'UsersController@test');
                  Route::delete('users/destroy/all', 'UsersController@multi_delete');
                  Route::resource('users', 'UsersController');
                  Route::post('users/create_quick', 'UsersController@quick_store');

                  // start users Route
                  Route::delete('countreis/destroy/all', 'CountreisController@multi_delete');
                  Route::resource('countreis', 'CountreisController');
                  Route::post('countreis/create_quick', 'CountreisController@quick_store');


                  // start departments Route
                  Route::delete('departments/destroy/all', 'DepartmentsController@multi_delete');
                  Route::resource('departments', 'DepartmentsController');
                  Route::post('departments/create_quick', 'DepartmentsController@quick_store');
 
                  // start products Route
                  Route::delete('products/destroy/all', 'ProductsController@multi_delete');
                  Route::resource('products', 'ProductsController');
                  Route::post('products/create_quick', 'ProductsController@quick_store');




                  // start setting Route
                  Route::get('settings', 'SettingsController@setting');
                  Route::post('settings', 'SettingsController@setting_save');
                  Route::post('settings', 'SettingsController@setting_save_in_page');


                  // // start frontends Route
                  Route::get('frontends',  'FrontendsController@frontend');
                  Route::post('frontends', 'FrontendsController@frontend_save');
                  Route::post('frontends', 'FrontendsController@frontend_save_in_page');

                  // start users Route
                  Route::delete('sliders/destroy/all', 'SlidersController@multi_delete');
                  Route::resource('sliders', 'SlidersController');
                  Route::post('sliders/create_quick', 'SlidersController@quick_store');














                  Route::get('/', function () {return view('back.home');});

                  

          });//middleware


          

                  Route::get('lang/{lang}',function($lang){
                      session()->has('lang')?session()->forget('lang'):'';
                      $lang == 'ar'? session()->put('lang','ar'):session()->put('lang','en');
                      return back();
                  });

      });

