<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\DataTables\UsersDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\New_;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDatatable $users)
    {
       return $users->render('back.users.index',['title'=>trans('admin.users')]);


    }


    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.users.create',['title'=>trans('admin.create-users')]);

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
            'email'        =>'required|email|unique:users',
            'password'     =>'required|min:6',
            'level'        =>'required|in:user,vendor,company,labor_Office,corporation,store',
        ],[
            'name'         =>trans('admin.name'),
            'email'        =>trans('admin.email'),
            'password'     =>trans('admin.password'),
            'level'     =>trans('admin.level'),
        ],[

        ]);

        $data['password'] = bcrypt(request('password'));
        User::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/users');

    }
    public function quick_store(Request $request)
    {
        $data =$this->validate(request(),[
            'name'         =>'required',
            'email'        =>'required|email|unique:users',
            'password'     =>'required|min:6',
            'level'        =>'required|in:user,vendor,company,labor_Office,corporation,store',
        ],[
            'name'         =>trans('admin.name'),
            'email'        =>trans('admin.email'),
            'password'     =>trans('admin.password'),
            'level'     =>trans('admin.level'),
        ],[

        ]);

        $data['password'] = bcrypt(request('password'));
        User::Create($data);

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
        $users = User::find($id);
        $title = trans('admin.edit');
         return view('back.users.edit',compact('users','title'));
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
            'email'        =>'required|email|unique:users,email,'.$id,
            'password'     =>'sometimes|nullable|min:6',
            'level'        =>'sometimes|nullable|in:user,vendor,company,labor_Office,corporation,store',
        ],[
            'name'         =>trans('admin.name'),
            'email'        =>trans('admin.email'),
            'password'     =>trans('admin.password'),
            'level'        =>trans('admin.level'),
        ],[

        ]);
        if (request()->has('password'))
    {
         $data['password'] = bcrypt(request('password'));
        session()->flash('change', trans('admin.change_password') );

    }
        User::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          User::find($id)->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/users');
    }

    public function multi_delete()
    {
//        return request();

        if(is_array(request('item'))){
            User::destroy(request('item'));

        }/*if*/ else{
            User::find(request('item'))->delete();

        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/users');
    }
}
