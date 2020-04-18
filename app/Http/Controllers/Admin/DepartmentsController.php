<?php
namespace App\Http\Controllers\Admin;
use App\Model\Department;
use App\DataTables\DepartmentsDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DepartmentsDatatable $department)
    {
       return $department->render('back.departments.index_departments',['title'=>trans('admin.departments')]);
//        return view('back.departments.index',['title'=>trans('admin.create-departments')]);

    }
    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }
    public function getAddEditRemoveColumnData()
    {
        $department = Department::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);
        return Datatables::of($department)
            ->addColumn('action', function ($department) {
                return '<a href="#edit-'.$department->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.departments.create',['title'=>trans('admin.create-departments')]);

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
            'dep_name_ar'         =>'required',
            'dep_name_en'         =>'required',
            'description'         =>'sometimes|nullable',
            'keyword'             =>'sometimes|nullable',
            'parent'           =>'sometimes|nullable|numeric',
            'icon'                =>'sometimes|nullable|'.v_image(),
         ],[
             'dep_name_ar'         =>trans('admin.dep_name_ar'),
             'dep_name_en'         =>trans('admin.dep_name_en'),
             'description'         =>trans('admin.description'),
             'keyword'             =>trans('admin.keyword'),
             'parent'           =>trans('admin.parent'),
             'icon'                =>trans('admin.icon'),
         ],[
        ]);
        if(request()->hasFile('icon')){
                    $data['icon']  = Up()->Upload([
                        'file'        =>'icon',
                        'path'        =>'departments',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        Department::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/departments');

    }
    // -------------------------------------------
    public function quick_store(Request $request)
    {
              $data =$this->validate(request(),[
            'dep_name_ar'         =>'required',
            'dep_name_en'         =>'required',
            'description'         =>'sometimes|nullable',
            'keyword'             =>'sometimes|nullable',
            'parent'           =>'sometimes|nullable|numeric',
            'icon'                =>'sometimes|nullable|'.v_image(),
         ],[
             'dep_name_ar'         =>trans('admin.dep_name_ar'),
             'dep_name_en'         =>trans('admin.dep_name_en'),
             'description'         =>trans('admin.description'),
             'keyword'             =>trans('admin.keyword'),
             'parent'           =>trans('admin.parent'),
             'icon'                =>trans('admin.icon'),
         ],[
        ]);
        if(request()->hasFile('icon')){
                    $data['icon']  = Up()->Upload([
                        'file'        =>'icon',
                        'path'        =>'departments',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        Department::Create($data);

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

        $department = Department::find($id);
        $title = trans('admin.edit');
         return view('back.departments.edit',compact('department','title'));
    }
        public function show($id)
    {
        $department = Department::find($id);
       return dd ($department);
        $title = trans('admin.show');
         return view('back.departments.edit',compact('departments','title'));
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
            'dep_name_ar'         =>'required',
            'dep_name_en'         =>'required',
            'description'         =>'sometimes|nullable',
            'keyword'             =>'sometimes|nullable',
            'parent'           =>'sometimes|nullable|numeric',
            'icon'                =>'sometimes|nullable|'.v_image(),
         ],[
             'dep_name_ar'         =>trans('admin.dep_name_ar'),
             'dep_name_en'         =>trans('admin.dep_name_en'),
             'description'         =>trans('admin.description'),
             'keyword'             =>trans('admin.keyword'),
             'parent'           =>trans('admin.parent'),
             'icon'                =>trans('admin.icon'),
         ],[
        ]);
        if(request()->hasFile('icon')){
                    $data['icon']  = Up()->Upload([
                        'file'        =>'icon',
                        'path'        =>'departments',
                        'upload_type' =>'single',
                        'delete_file' =>Department::find($id)->icon,
                     ]);
                }

        Department::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function delete_parent($id)
    {
        $department_parent = Department::where('parent',$id)->get();
        foreach ($department_parent as $sub)
        {
            self::delete_parent($sub->id);
            if ( !empty($sub->icon))
            {
                Storage::has($sub->icon)?Storage::delete($sub->icon):'';
            }

            $subdepartment = Department::find($sub->id);
            if (!empty($subdepartment))
            {
                $subdepartment->delete();
            }
        }
        $dep =  Department::find($id);
        if ( !empty($dep->icon))
        {
            Storage::has($dep->icon)?Storage::delete($dep->icon):'';
        }
        $dep->delete();
    }
    public function destroy($id)
    {
        self::delete_parent($id);

        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/departments');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Department::destroy(request('item'));
            foreach (request('item') as $id)
            {
                $department =  Department::find($id);
                Storage::delete($department->logo);
                $department->delete();
            }

        }/*if*/ else{
            // Department::find(request('item'))->delete();
            self::delete_parent($id);

        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/departments');
    }
}
