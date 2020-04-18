<?php

namespace App\Http\Controllers\Admin;
 use App\Settings;
 use Session;
 use Storage;
// use Up;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SettingsController extends Controller
{

    public function setting_save_in_page()
    {
        $data = $this->validate(request(),
            [
                'logo'                  =>v_image(),
                'icon'                  =>v_image(),
                'img_maintenance'       =>v_image(),
                'bg_maintenance'        =>v_image(),
                'main_lang'             => '',
                'sitename_ar'           => '',
                'sitename_en'           => '',
                'email'                 => '',
                'description'           => '',
                'keywords'              => '',
                'message_maintenance'   => '',
                'status'                => ''
            ],[
            ],[
                'logo'                  =>trans('admin.logo'),
                'icon'                  =>trans('admin.icon'),
                'img_maintenance'       =>trans('admin.img_maintenance'),
                'bg_maintenance'       =>trans('admin.bg_maintenance'),
                'status'                =>trans('admin.status'),
                'main_lang'             =>trans('admin.main_lang'),
                'sitename_ar'           =>trans('admin.sitename_ar'),
                'sitename_en'           =>trans('admin.sitename_en'),
                'email'                 =>trans('admin.email'),
                'description'           =>trans('admin.description'),
                'keywords'              =>trans('admin.keywords'),
                'message_maintenance '  =>trans('admin.message_maintenance'),
            ]);
        if(request()->hasFile('logo')){
            $data['logo']  = Up()->Upload([
                'file'        =>'logo',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->logo,
            ]);
        }
        if(request()->hasFile('icon')){
//            $data['icon']  = Up::Upload([
            $data['icon']  = Up()->Upload([
                'file'        =>'icon',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->icon,
            ]);
        }
        if(request()->hasFile('img_maintenance')){
             $data['img_maintenance']  = Up()->Upload([
                'file'        =>'img_maintenance',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->img_maintenance,
            ]);
        }
        if(request()->hasFile('bg_maintenance')){
             $data['bg_maintenance']  = Up()->Upload([
                'file'        =>'bg_maintenance',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->bg_maintenance,
            ]);
        }
         Settings::orderBy('id','desc')->update($data);
        session()->flash('success', trans('admin.success_settings') );
        //  return  $data;
        return back();
    }


    public function setting()
    {

         $title = trans('admin.settings');
        return view('back.settings.index',compact('title'));
    }
    public function setting_save()
    {
        $data = $this->validate(request(),
            [
                'logo'                  =>v_image(),
                'icon'                  =>v_image(),
                'img_maintenance'       =>v_image(),
                'bg_maintenance'        =>v_image(),
                'main_lang'             => '',
                'sitename_ar'           => '',
                'sitename_en'           => '',
                'email'                 => '',
                'description'           => '',
                'keywords'              => '',
                'message_maintenance'   => '',
                'status'                => ''
            ],[
            ],[
                'logo'                  =>trans('admin.logo'),
                'icon'                  =>trans('admin.icon'),
                'img_maintenance'       =>trans('admin.img_maintenance'),
                'bg_maintenance'       =>trans('admin.bg_maintenance'),
                'status'                =>trans('admin.status'),
                'main_lang'             =>trans('admin.main_lang'),
                'sitename_ar'           =>trans('admin.sitename_ar'),
                'sitename_en'           =>trans('admin.sitename_en'),
                'email'                 =>trans('admin.email'),
                'description'           =>trans('admin.description'),
                'keywords'              =>trans('admin.keywords'),
                'message_maintenance '  =>trans('admin.message_maintenance'),
            ]);
        if(request()->hasFile('logo')){
            $data['logo']  = Up()->Upload([
                'file'        =>'logo',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->logo,
            ]);
        }
        if(request()->hasFile('icon')){
//            $data['icon']  = Up::Upload([
            $data['icon']  = Up()->Upload([
                'file'        =>'icon',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->icon,
            ]);
        }
        if(request()->hasFile('img_maintenance')){
            $data['img_maintenance']  = Up()->Upload([
                'file'        =>'img_maintenance',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->img_maintenance,
            ]);
        }
        if(request()->hasFile('bg_maintenance')){
            $data['bg_maintenance']  = Up()->Upload([
                'file'        =>'bg_maintenance',
                'path'        =>'settings',
                'upload_type' =>'single',
                'delete_file' =>setting()->bg_maintenance,
            ]);
        }
        Settings::orderBy('id','desc')->update($data);
         session()->flash('success_settings', trans('admin.success_settings') );
        return back();
    }


















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
