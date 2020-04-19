<?php

namespace App\Http\Controllers\Admin;
use App\Admin;
use App\Model\Product;
use App\DataTables\AdminDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\New_;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminDatatable $admin)
    {
       return $admin->render('back.admins.index',['title'=>trans('admin.admincontrol')]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('back.admins.create',['title'=>trans('admin.create-admin')]);

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
            'name'         =>'required',
            'email'        =>'required|email|unique:admins',
            'password'     =>'required|min:6',
        ],[
            'name'         =>trans('admin.name'),
            'email'        =>trans('admin.email'),
            'password'     =>trans('admin.password'),
        ],[

        ]);

        $data['password'] = bcrypt(request('password'));
        Admin::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/admin');

    }
    public function quick_store(Request $request)
    {
        $data =$this->validate(request(),[
            'name'         =>'required',
            'email'        =>'required|email|unique:admins',
            'password'     =>'required|min:6',
        ],[
            'name'         =>trans('admin.name'),
            'email'        =>trans('admin.email'),
            'password'     =>trans('admin.password'),
        ],[

        ]);

        $data['password'] = bcrypt(request('password'));
        Admin::Create($data);

        session()->flash('successhome', trans('admin.record_added') );
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        $title = trans('admin.edit');
         return view('back.admins.edit',compact('admin','title'));
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
            'name'         =>'required',
            'email'        =>'required|email|unique:admins,email,'.$id,
            'password'     =>'sometimes|nullable|min:6',
        ],[
            'name'         =>trans('admin.name'),
            'email'        =>trans('admin.email'),
            'password'     =>trans('admin.password'),
        ],[

        ]);
        if (request()->has('password'))
    {
         $data['password'] = bcrypt(request('password'));
        session()->flash('change', trans('admin.change_password') );

    }
        Admin::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Admin::find($id)->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/admin');
    }

    public function multi_delete()
    {
//        return request();

        if(is_array(request('item'))){
            Admin::destroy(request('item'));

        }/*if*/ else{
            Admin::find(request('item'))->delete();

        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/admin');
    }
}
