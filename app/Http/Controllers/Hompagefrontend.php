<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Frontend;
use App\Model\Department;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
class Hompagefrontend extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // ...................................
    // $products_last_record = DB::table('products')->orderBy('id', 'DESC')->first();
         $products_last_record            = Product::orderBy('created_at','DESC')->paginate(10);
         $products_first_record           = Product::orderBy('created_at','ASC')->paginate(10);
         $products_paginate               = Product::paginate(30);
         $products                        = Product::all();
         
         $products_paginate_footer_one        = Product::orderBy('created_at','DESC')->paginate(12);
           $products_paginate_footer_two      = Product::orderBy('created_at','ASC')->paginate(12);
          
       // ...................................
        $products                         = Product::all();
        $frontends                        = Frontend::all();
        $sliders_all                      = Slider::orderBy('created_at','DESC')->paginate(6);
        $departments                      = Department::all();
        $departments_paginate             = Department::orderBy('created_at','DESC')->paginate(5);
        // session()->forget('lingfront'); 
          return view('front.index',[
            'departments'                 =>$departments,
            'sliders_all'                 =>$sliders_all,
            'products'                    =>$products,
            'products_last_record'        =>$products_last_record,
            'products_first_record'       =>$products_first_record,
            'frontends'                   =>$frontends,
            'products_paginate'           =>$products_paginate,
            'departments_paginate'        =>$departments_paginate,
            'products_paginate_footer_one'          =>$products_paginate_footer_one,
            'products_paginate_footer_two'          =>$products_paginate_footer_two,

         ]);


    }
 

    public function lang_front_ar()
    {  
         session()->forget('lang');
         session()->put('lang','ar');
        return back();
         
    }

    public function lang_front_en()
    {  
         session()->forget('lang');
        session()->put('lang','en');
        return back();
    }

     /* Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
// -----------  start show 
    public function show(Product $productfind, $id)
    {
         $productfind            = Product::find($id);
         $products               = Product::all();
          $products_paginate      = Product::orderBy('created_at','DESC')->paginate(20); 
          $products_paginate_footer_one      = Product::orderBy('created_at','DESC')->paginate(13);
           $products_paginate_footer_two      = Product::orderBy('created_at','ASC')->paginate(13);
          
          
         $all_products           = Product::orderBy('created_at','DESC')->paginate(30);
         $products               = Product::orderBy('created_at','DESC')->paginate(16);
         $frontends              = Frontend::all();
          $sliders_all            = Slider::orderBy('created_at','DESC')->paginate(6);
         $departments            = Department::all();
         $departments_paginate    = Department::orderBy('created_at','DESC')->paginate(5);

        // $productfind   = Product::where('id',$productfind->id)->first();
        return view('front.show',[
            'productfind'=>$productfind,
// ----------------
             'departments'             =>$departments,
             'departments_paginate'     =>$departments_paginate,
             'sliders_all'               =>$sliders_all,
            'products'                   =>$products,
            'all_products'               =>$all_products,
            'products'                    =>$products,
            'frontends'                  =>$frontends,
            'products_paginate'          =>$products_paginate,
            'products_paginate'          =>$products_paginate,
            'products_paginate_footer_one'          =>$products_paginate_footer_one,
            'products_paginate_footer_two'          =>$products_paginate_footer_two,


        ]);

            
           // 'productfind_modal'=>$productfinds_modal,


         
    }

// ----------- End start show
// -----------  start show 
    public function show_department(Department $departmentfind, $id)
    {
         $departmentfind            = Department::find($id);
         $products               = Product::all();
          $products_paginate      = Product::orderBy('created_at','DESC')->paginate(20); 
          $products_paginate_footer_one      = Product::orderBy('created_at','DESC')->paginate(13);
           $products_paginate_footer_two      = Product::orderBy('created_at','ASC')->paginate(13);
          
         $all_products           = Product::orderBy('created_at','DESC')->paginate(30);
         $products               = Product::orderBy('created_at','DESC')->paginate(16);
         $frontends              = Frontend::all();
          $sliders_all            = Slider::orderBy('created_at','DESC')->paginate(6);
         $departments            = Department::all();
         $departments_paginate    = Department::orderBy('created_at','DESC')->paginate(5);

         return view('front.show_product_in_department',[
            'departmentfind'=>$departmentfind,
// ----------------
             'departments'             =>$departments,
             'departments_paginate'     =>$departments_paginate,
             'sliders_all'               =>$sliders_all,
            'products'                   =>$products,
            'all_products'               =>$all_products,
            'products'                    =>$products,
            'frontends'                  =>$frontends,
            'products_paginate'          =>$products_paginate,
            'products_paginate'          =>$products_paginate,
            'products_paginate_footer_one'          =>$products_paginate_footer_one,
            'products_paginate_footer_two'          =>$products_paginate_footer_two,


        ]);

            
           // 'productfind_modal'=>$productfinds_modal,


         
    }

// ----------- End start show_department 
// -----------  start show 
    public function show_all_products_page ()
    {
         $products               = Product::all();
          $products_paginate      = Product::orderBy('created_at','DESC')->paginate(20); 
          $products_paginate_show_all_product      = Product::orderBy('created_at','DESC')->paginate(70); 
          $products_paginate_footer_one      = Product::orderBy('created_at','DESC')->paginate(13);
           $products_paginate_footer_two      = Product::orderBy('created_at','ASC')->paginate(13);
          
          
         $all_products           = Product::orderBy('created_at','DESC')->paginate(30);
         $products               = Product::orderBy('created_at','DESC')->paginate(16);
         $frontends              = Frontend::all();
          $sliders_all            = Slider::orderBy('created_at','DESC')->paginate(6);
         $departments            = Department::all();
         $departments_paginate    = Department::orderBy('created_at','DESC')->paginate(5);

         return view('front.page_show_all_products',[
// ----------------
             'departments'             =>$departments,
             'departments_paginate'     =>$departments_paginate,
             'sliders_all'               =>$sliders_all,
            'products'                   =>$products,
            'all_products'               =>$all_products,
            'products'                    =>$products,
            'frontends'                  =>$frontends,
            'products_paginate'          =>$products_paginate,
            'products_paginate_show_all_product'          =>$products_paginate_show_all_product,
            'products_paginate_footer_one'          =>$products_paginate_footer_one,
            'products_paginate_footer_two'          =>$products_paginate_footer_two,


        ]);

            
           // 'productfind_modal'=>$productfinds_modal,


         
    }

// ----------- End start show 


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
