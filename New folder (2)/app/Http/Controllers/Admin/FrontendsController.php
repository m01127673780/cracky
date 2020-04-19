<?php

namespace App\Http\Controllers\Admin;
 use App\Frontend;
 use Session;
 use Storage;
// use Up;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class FrontendsController extends Controller
{



    public function frontend()
    {
         $title = trans('admin.frontends');
        return view('back.frontends.index',compact('title'));
    }
    

  
    public function frontend_save_in_page()
    {
      $data = $this->validate(request(),
            [
                'logo'                                      =>v_image(),
                'icon'                                      =>v_image(),
                'img_larg'                                  =>v_image(),
                'img_insid'                                 =>v_image(),
                'section_three_img_one'                     =>v_image(),
                'section_three_img_two'                     =>v_image(),
                'section_three_img_three'                   =>v_image(),
                'section_tow_img_one'                       =>v_image(),
                'section_tow_img_two'                       =>v_image(),
                'section_footer_img_about'                  =>v_image(),
                'section_footer_img_payment_methods'        =>v_image(),
                'section_footer_payment_methods'            =>v_image(),

                'section_footer_about_ar'                   =>'',
                'section_footer_about_en'                   =>'',
                'section_footer_address_ar'                 =>'',
                'section_footer_address_en'                 =>'',
                'section_footer_phone'                      =>'',
                'section_footer_email'                      =>'',
                'section_footer_sen_message'                =>'',
                'section_footer_sen_email'                  =>'',
                'facebook'                                  =>'',
                'twitter'                                   =>'',
                'instagram'                                 =>'',
                'gmail'                                     =>'',
                

            ],[
            ],[
                'logo'                                      =>trans('admin.logo'),
                'icon'                                      =>trans('admin.icon'),
                'img_larg'                                  =>trans('admin.img_larg'),
                'img_insid'                                 =>trans('admin.img_insid'),
                'section_three_img_one'                     =>trans('admin.section_three_img_one'),
                'section_three_img_two'                     =>trans('admin.section_three_img_two'),
                'section_three_img_three'                   =>trans('admin.section_three_img_three'),
                'section_tow_img_one'                       =>trans('admin.section_tow_img_one'),
                'section_tow_img_two'                       =>trans('admin.section_tow_img_two'),
                'section_footer_img_about'                  =>trans('admin.section_footer_img_about'),
                'section_footer_img_payment_methods'        =>trans('admin.section_footer_img_payment_methods'),
                'section_footer_payment_methods'            =>trans('admin.section_footer_payment_methods'),

                'section_footer_about_ar'                   =>trans('admin.section_footer_about_ar'),
                'section_footer_about_en'                   =>trans('admin.section_footer_about_en'),
                'section_footer_address_ar'                 =>trans('admin.section_footer_address_ar'),
                'section_footer_address_en'                 =>trans('admin.section_footer_address_en'),
                'section_footer_phone'                      =>trans('admin.section_footer_phone'),
                'section_footer_email'                      =>trans('admin.section_footer_email'),
                'section_footer_sen_message'                =>trans('admin.section_footer_sen_message'),
                'section_footer_sen_email'                  =>trans('admin.section_footer_sen_email'),

            ]);


        // -----------------------------------------start request logo 
            if(request()->hasFile('logo')){
            $data['logo']  = Up()->Upload([
            'file'        =>'logo',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->logo,
            ]);
            } //logo
        // -----------------------------------------End   request logo 
        // -----------------------------------------start request icon 
            if(request()->hasFile('icon')){
            $data['icon']  = Up()->Upload([
            'file'        =>'icon',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->icon,
            ]);
            } //icon
        // -----------------------------------------End   request icon 
        // -----------------------------------------start request img_larg 
            if(request()->hasFile('img_larg')){
            $data['img_larg']  = Up()->Upload([
            'file'        =>'img_larg',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->img_larg,
            ]);
            } //img_larg
        // -----------------------------------------End   request img_larg 
        // -----------------------------------------start request img_insid 
            if(request()->hasFile('img_insid')){
            $data['img_insid']  = Up()->Upload([
            'file'        =>'img_insid',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->img_insid,
            ]);
            } //img_insid
        // -----------------------------------------End   request img_insid 
        // -----------------------------------------start request section_three_img_one 
            if(request()->hasFile('section_three_img_one')){
            $data['section_three_img_one']  = Up()->Upload([
            'file'        =>'section_three_img_one',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_three_img_one,
            ]);
            } //section_three_img_one
        // -----------------------------------------End   request section_three_img_one 
        // -----------------------------------------start request section_three_img_two 
            if(request()->hasFile('section_three_img_two')){
            $data['section_three_img_two']  = Up()->Upload([
            'file'        =>'section_three_img_two',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_three_img_two,
            ]);
            } //section_three_img_two
        // -----------------------------------------End   request section_three_img_two 
        // -----------------------------------------start request section_three_img_three 
            if(request()->hasFile('section_three_img_three')){
            $data['section_three_img_three']  = Up()->Upload([
            'file'        =>'section_three_img_three',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_three_img_three,
            ]);
            } //section_three_img_three
        // -----------------------------------------End   request section_three_img_three 
        // -----------------------------------------start request section_tow_img_one 
            if(request()->hasFile('section_tow_img_one')){
            $data['section_tow_img_one']  = Up()->Upload([
            'file'        =>'section_tow_img_one',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_tow_img_one,
            ]);
            } //section_tow_img_one
        // -----------------------------------------End   request section_tow_img_one 
        // -----------------------------------------start request section_tow_img_two 
            if(request()->hasFile('section_tow_img_two')){
            $data['section_tow_img_two']  = Up()->Upload([
            'file'        =>'section_tow_img_two',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_tow_img_two,
            ]);
            } //section_tow_img_two
        // -----------------------------------------End   request section_tow_img_two 
        // -----------------------------------------start request section_footer_img_payment_methods 
            if(request()->hasFile('section_footer_img_payment_methods')){
            $data['section_footer_img_payment_methods']  = Up()->Upload([
            'file'        =>'section_footer_img_payment_methods',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_footer_img_payment_methods,
            ]);
            } //section_footer_img_payment_methods
        // -----------------------------------------End   request section_footer_img_payment_methods 
        // -----------------------------------------start request section_footer_payment_methods 
            if(request()->hasFile('section_footer_payment_methods')){
            $data['section_footer_payment_methods']  = Up()->Upload([
            'file'        =>'section_footer_payment_methods',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_footer_payment_methods,
            ]);
            } //section_footer_payment_methods
        // -----------------------------------------End   request section_footer_payment_methods 
        // -----------------------------------------start request section_footer_img_about 
            if(request()->hasFile('section_footer_img_about')){
            $data['section_footer_img_about']  = Up()->Upload([
            'file'        =>'section_footer_img_about',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_footer_img_about,
            ]);
            } //section_footer_img_about
        // -----------------------------------------End   request section_footer_img_about 
         Frontend::orderBy('id','desc')->update($data);
        session()->flash('success', trans('admin.success_frontends') );
         return back();
    }




    public function frontend_save()
    {
        $data = $this->validate(request(),
            [
                'logo'                                      =>v_image(),
                'icon'                                      =>v_image(),
                'img_larg'                                  =>v_image(),
                'img_insid'                                 =>v_image(),
                'section_three_img_one'                     =>v_image(),
                'section_three_img_two'                     =>v_image(),
                'section_three_img_three'                   =>v_image(),
                'section_tow_img_one'                       =>v_image(),
                'section_tow_img_two'                       =>v_image(),
                'section_footer_img_about'                  =>v_image(),
                'section_footer_img_payment_methods'        =>v_image(),
                'section_footer_payment_methods'            =>v_image(),

                'section_footer_about_ar'                   =>'',
                'section_footer_about_en'                   =>'',
                'section_footer_address_ar'                 =>'',
                'section_footer_address_en'                 =>'',
                'section_footer_phone'                      =>'',
                'section_footer_email'                      =>'',
                'section_footer_sen_message'                =>'',
                'section_footer_sen_email'                  =>'',
                'facebook'                                  =>'',
                'twitter'                                   =>'',
                'instagram'                                 =>'',
                'gmail'                                     =>'',
                

            ],[
            ],[
                'logo'                                      =>trans('admin.logo'),
                'icon'                                      =>trans('admin.icon'),
                'img_larg'                                  =>trans('admin.img_larg'),
                'img_insid'                                 =>trans('admin.img_insid'),
                'section_three_img_one'                     =>trans('admin.section_three_img_one'),
                'section_three_img_two'                     =>trans('admin.section_three_img_two'),
                'section_three_img_three'                   =>trans('admin.section_three_img_three'),
                'section_tow_img_one'                       =>trans('admin.section_tow_img_one'),
                'section_tow_img_two'                       =>trans('admin.section_tow_img_two'),
                'section_footer_img_about'                  =>trans('admin.section_footer_img_about'),
                'section_footer_img_payment_methods'        =>trans('admin.section_footer_img_payment_methods'),
                'section_footer_payment_methods'            =>trans('admin.section_footer_payment_methods'),

                'section_footer_about_ar'                   =>trans('admin.section_footer_about_ar'),
                'section_footer_about_en'                   =>trans('admin.section_footer_about_en'),
                'section_footer_address_ar'                 =>trans('admin.section_footer_address_ar'),
                'section_footer_address_en'                 =>trans('admin.section_footer_address_en'),
                'section_footer_phone'                      =>trans('admin.section_footer_phone'),
                'section_footer_email'                      =>trans('admin.section_footer_email'),
                'section_footer_sen_message'                =>trans('admin.section_footer_sen_message'),
                'section_footer_sen_email'                  =>trans('admin.section_footer_sen_email'),

            ]);

        // -----------------------------------------start request logo 
            if(request()->hasFile('logo')){
            $data['logo']  = Up()->Upload([
            'file'        =>'logo',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->logo,
            ]);
            } //logo
        // -----------------------------------------End   request logo 
        // -----------------------------------------start request icon 
            if(request()->hasFile('icon')){
            $data['icon']  = Up()->Upload([
            'file'        =>'icon',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->icon,
            ]);
            } //icon
        // -----------------------------------------End   request icon 
        // -----------------------------------------start request img_larg 
            if(request()->hasFile('img_larg')){
            $data['img_larg']  = Up()->Upload([
            'file'        =>'img_larg',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->img_larg,
            ]);
            } //img_larg
        // -----------------------------------------End   request img_larg 
        // -----------------------------------------start request img_insid 
            if(request()->hasFile('img_insid')){
            $data['img_insid']  = Up()->Upload([
            'file'        =>'img_insid',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->img_insid,
            ]);
            } //img_insid
        // -----------------------------------------End   request img_insid 
        // -----------------------------------------start request section_three_img_one 
            if(request()->hasFile('section_three_img_one')){
            $data['section_three_img_one']  = Up()->Upload([
            'file'        =>'section_three_img_one',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_three_img_one,
            ]);
            } //section_three_img_one
        // -----------------------------------------End   request section_three_img_one 
        // -----------------------------------------start request section_three_img_two 
            if(request()->hasFile('section_three_img_two')){
            $data['section_three_img_two']  = Up()->Upload([
            'file'        =>'section_three_img_two',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_three_img_two,
            ]);
            } //section_three_img_two
        // -----------------------------------------End   request section_three_img_two 
        // -----------------------------------------start request section_three_img_three 
            if(request()->hasFile('section_three_img_three')){
            $data['section_three_img_three']  = Up()->Upload([
            'file'        =>'section_three_img_three',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_three_img_three,
            ]);
            } //section_three_img_three
        // -----------------------------------------End   request section_three_img_three 
        // -----------------------------------------start request section_tow_img_one 
            if(request()->hasFile('section_tow_img_one')){
            $data['section_tow_img_one']  = Up()->Upload([
            'file'        =>'section_tow_img_one',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_tow_img_one,
            ]);
            } //section_tow_img_one
        // -----------------------------------------End   request section_tow_img_one 
        // -----------------------------------------start request section_tow_img_two 
            if(request()->hasFile('section_tow_img_two')){
            $data['section_tow_img_two']  = Up()->Upload([
            'file'        =>'section_tow_img_two',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_tow_img_two,
            ]);
            } //section_tow_img_two
        // -----------------------------------------End   request section_tow_img_two 
        // -----------------------------------------start request section_footer_img_payment_methods 
            if(request()->hasFile('section_footer_img_payment_methods')){
            $data['section_footer_img_payment_methods']  = Up()->Upload([
            'file'        =>'section_footer_img_payment_methods',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_footer_img_payment_methods,
            ]);
            } //section_footer_img_payment_methods
        // -----------------------------------------End   request section_footer_img_payment_methods 
        // -----------------------------------------start request section_footer_payment_methods 
            if(request()->hasFile('section_footer_payment_methods')){
            $data['section_footer_payment_methods']  = Up()->Upload([
            'file'        =>'section_footer_payment_methods',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_footer_payment_methods,
            ]);
            } //section_footer_payment_methods
        // -----------------------------------------End   request section_footer_payment_methods 
        // -----------------------------------------start request section_footer_img_about 
            if(request()->hasFile('section_footer_img_about')){
            $data['section_footer_img_about']  = Up()->Upload([
            'file'        =>'section_footer_img_about',
            'path'        =>'frontends',
            'upload_type' =>'single',
            'delete_file' =>frontend()->section_footer_img_about,
            ]);
            } //section_footer_img_about
        // -----------------------------------------End   request section_footer_img_about 
         Frontend::orderBy('id','desc')->update($data);
        session()->flash('success_frontends', trans('admin.success_frontends') );
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
     * @param  \App\frontends  $frontends
     * @return \Illuminate\Http\Response
     */
    public function show(frontends $frontends)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\frontends  $frontends
     * @return \Illuminate\Http\Response
     */
    public function edit(frontends $frontends)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\frontends  $frontends
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, frontends $frontends)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\frontends  $frontends
     * @return \Illuminate\Http\Response
     */
    public function destroy(frontends $frontends)
    {
        //
    }
}
