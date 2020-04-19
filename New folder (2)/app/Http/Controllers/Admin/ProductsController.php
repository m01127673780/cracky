<?php

namespace App\Http\Controllers\Admin;
use App\Model\Product;
use App\DataTables\ProductsDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductsDatatable $products)
    {
       return $products->render('back.products.index',['title'=>trans('admin.products')]);
    }


    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        // $products = Product::select(['id', 'product_name_ar', 'product_name_en', 'description_ar', 'description_en']);

        return Datatables::of($products)
            ->addColumn('action', function ($products) {
                return '<a href="#edit-'.$products->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('back.products.create',['title'=>trans('admin.create-product')]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$this->validate(request(),[
            'product_name_ar'          =>'required',
            'product_name_en'          =>'required',
            'description_ar'           =>'required',
            'description_en'           =>'required',
            'department_id'            =>'required',
            'add_by_ar'                =>'sometimes|nullable',
            'add_by_en'                =>'sometimes|nullable',
            'discount'                 =>'sometimes|nullable',
            'price_offer'              =>'sometimes|nullable',
            'price_old'                =>'sometimes|nullable',
            'price'                    =>'sometimes|nullable',
            'add_by_photo'             =>'sometimes|nullable|'.v_image(),
            'photo'                    =>'required|'.v_image(),


         ],[
            'product_name_ar'          =>trans('admin.product_name_ar'),
            'product_name_en'          =>trans('admin.product_name_en'),
            'description_ar'           =>trans('admin.description_ar'),
            'description_en'           =>trans('admin.description_en'),
            'department_id'            =>trans('admin.department_id'),
            'add_by_ar'                =>trans('admin.add_by_ar'),
            'add_by_en'                =>trans('admin.add_by_en'),
            'add_by_photo'             =>trans('admin.add_by_photo'),
            'discount'                 =>trans('admin.discount'),
            'price_offer'              =>trans('admin.price_offer'),
            'price_old'                =>trans('admin.price_old'),
            'price'                    =>trans('admin.price'),
            'photo'                    =>trans('admin.photo'),
     
        ],[

        ]);
        if(request()->hasFile('photo')){
                        $data['photo']    = Up()->Upload([
                        'file'            =>'photo',
                        'path'            =>'products',
                        'upload_type'     =>'single',
                        'delete_file'     =>'',
                     ]);
                }
                  if(request()->hasFile('add_by_photo')){
                        $data['add_by_photo']  = Up()->Upload([
                        'file'                 =>'add_by_photo',
                        'path'                 =>'products',
                        'upload_type'          =>'single',
                        'delete_file'          =>'',
                     ]);
                }
        Product::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/products');

    }
    public function quick_store(Request $request)
    {
              $data =$this->validate(request(),[
            'product_name_ar'          =>'required',
            'product_name_en'          =>'required',
            'description_ar'           =>'required',
            'description_en'           =>'required',
            'department_id'            =>'required',
            'add_by_ar'                =>'sometimes|nullable',
            'add_by_en'                =>'sometimes|nullable',
            'discount'                 =>'sometimes|nullable',
            'price_offer'              =>'sometimes|nullable',
            'price_old'                =>'sometimes|nullable',
            'price'                    =>'sometimes|nullable',
            'add_by_photo'             =>'sometimes|nullable|'.v_image(),
            'photo'                    =>'required|'.v_image(),


         ],[
            'product_name_ar'          =>trans('admin.product_name_ar'),
            'product_name_en'          =>trans('admin.product_name_en'),
            'description_ar'           =>trans('admin.description_ar'),
            'description_en'           =>trans('admin.description_en'),
            'department_id'            =>trans('admin.department_id'),
            'add_by_ar'                =>trans('admin.add_by_ar'),
            'add_by_en'                =>trans('admin.add_by_en'),
            'add_by_photo'             =>trans('admin.add_by_photo'),
            'discount'                 =>trans('admin.discount'),
            'price_offer'              =>trans('admin.price_offer'),
            'price_old'                =>trans('admin.price_old'),
            'price'                    =>trans('admin.price'),
            'photo'                    =>trans('admin.photo'),
     
        ],[

        ]);
        if(request()->hasFile('photo')){
                        $data['photo']    = Up()->Upload([
                        'file'            =>'photo',
                        'path'            =>'products',
                        'upload_type'     =>'single',
                        'delete_file'          =>'',

                     ]);
                }
                  if(request()->hasFile('add_by_photo')){
                        $data['add_by_photo']  = Up()->Upload([
                        'file'                 =>'add_by_photo',
                        'path'                 =>'products',
                        'upload_type'          =>'single',
                        'delete_file'          =>'',

                     ]);
                }
        Product::Create($data);
        session()->flash('successhome', trans('admin.record_added') );
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $products = Product::find($id);
        $title = trans('admin.edit');
         return view('back.products.edit',compact('products','title'));
    }
        public function show($id)
    {
        $products = Product::find($id);
       return dd ($products);
        $title = trans('admin.show');
         return view('back.products.edit',compact('products','title'));
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
             $data =$this->validate(request(),[
            'product_name_ar'          =>'required',
            'product_name_en'          =>'required',
            'description_ar'           =>'required',
            'description_en'           =>'required',
            'department_id'            =>'sometimes|nullable',
            'add_by_ar'                =>'sometimes|nullable',
            'add_by_en'                =>'sometimes|nullable',
            'discount'                 =>'sometimes|nullable',
            'price_offer'              =>'sometimes|nullable',
            'price_old'                =>'sometimes|nullable',
            'price'                    =>'sometimes|nullable',
            'add_by_photo'             =>'sometimes|nullable|'.v_image(),
            'photo'                    =>'sometimes|nullable|'.v_image(),
         ],[
            'product_name_ar'          =>trans('admin.product_name_ar'),
            'product_name_en'          =>trans('admin.product_name_en'),
            'description_ar'           =>trans('admin.description_ar'),
            'description_en'           =>trans('admin.description_en'),
            'department_id'            =>trans('admin.department_id'),
            'add_by_ar'                =>trans('admin.add_by_ar'),
            'add_by_en'                =>trans('admin.add_by_en'),
            'add_by_photo'             =>trans('admin.add_by_photo'),
            'discount'                 =>trans('admin.discount'),
            'price_offer'              =>trans('admin.price_offer'),
            'price_old'                =>trans('admin.price_old'),
            'price'                    =>trans('admin.price'),
            'photo'                    =>trans('admin.photo'),
     
        ],[
        ]);
        if(request()->hasFile('photo')){
                        $data['photo']    = Up()->Upload([
                        'file'            =>'photo',
                        'path'            =>'products',
                        'upload_type'     =>'single',
                        'delete_file'     =>Product::find($id)->photo,
                     ]);
                }
                  if(request()->hasFile('add_by_photo')){
                        $data['add_by_photo']  = Up()->Upload([
                        'file'                 =>'add_by_photo',
                        'path'                 =>'products',
                        'upload_type'          =>'single',
                        'delete_file' =>Product::find($id)->add_by_photo,
                     ]);
                }
         Product::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/products');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $products =  Product::find($id);
         Storage::delete($products->logo);
         $products->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/products');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Product::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $products =  Product::find($id);
                Storage::delete($products->logo);
                $products->delete();
            }

        }/*if*/ else{
               $products =  Product::find(request('item'));
                Storage::delete($products->logo);
                $products->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/products');
    }
}
