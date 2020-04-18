<?php

namespace App\Http\Controllers\Admin;
use App\Countreis;
use App\DataTables\CountreisDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class CountreisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CountreisDatatable $countreis)
    {
       return $countreis->render('back.countreis.index',['title'=>trans('admin.countreis')]);
    }


    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        // $countreis = Countreis::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($countreis)
            ->addColumn('action', function ($countreis) {
                return '<a href="#edit-'.$countreis->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.countreis.create',['title'=>trans('admin.create-countreis')]);

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
            'country_name_ar'         =>'required',
            'country_name_en'         =>'required',
            'mob'                     =>'required',
            'code'                    =>'required',
            'logo'                  =>v_image(),

         ],[
            'country_name_ar'         =>trans('admin.country_name_ar'),
            'country_name_en'         =>trans('admin.country_name_en'),
            'mob'                     =>trans('admin.mob'),
            'code'                    =>trans('admin.code'),
            'logo'                    =>trans('admin.logo'),
        ],[

        ]);
        if(request()->hasFile('logo')){
                    $data['logo']  = Up()->Upload([
                        'file'        =>'logo',
                        'path'        =>'countreis',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        Countreis::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/countreis');

    }
    public function quick_store(Request $request)
    {
       $data =$this->validate(request(),[
            'country_name_ar'         =>'required',
            'country_name_en'         =>'required',
            'mob'                     =>'required',
            'code'                    =>'required',
            'logo'                    =>v_image(),

         ],[
            'country_name_ar'         =>trans('admin.country_name_ar'),
            'country_name_en'         =>trans('admin.country_name_en'),
            'mob'                     =>trans('admin.mob'),
            'code'                    =>trans('admin.code'),
            'logo'                    =>trans('admin.logo'),
        ],[

        ]);
        if(request()->hasFile('logo')){
                    $data['logo']  = Up()->Upload([
                        'file'        =>'logo',
                        'path'        =>'countreis',
                        'upload_type' =>'single',
                        'delete_file' =>'',

                     ]);
                }
        Countreis::Create($data);

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

        $countreis = Countreis::find($id);
        $title = trans('admin.edit');
         return view('back.countreis.edit',compact('countreis','title'));
    }
        public function show($id)
    {
        $countreis = Countreis::find($id);
       return dd ($countreis);
        $title = trans('admin.show');
         return view('back.countreis.edit',compact('countreis','title'));
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
            'country_name_ar'         =>'required',
            'country_name_en'         =>'required',
            'mob'                     =>'required',
            'code'                    =>'required',
            'logo'                    =>'sometimes|nullable|'.v_image(),

         ],[
            'country_name_ar'         =>trans('admin.country_name_ar'),
            'country_name_en'         =>trans('admin.country_name_en'),
            'mob'                     =>trans('admin.mob'),
            'code'                    =>trans('admin.code'),
            'logo'                    =>trans('admin.logo'),
        ],[

        ]);
        if(request()->hasFile('logo')){
                    $data['logo']  = Up()->Upload([
                        'file'        =>'logo',
                        'path'        =>'countreis',
                        'upload_type' =>'single',
                        'delete_file' =>Countreis::find($id)->logo,
                    ]);
                }
 
        Countreis::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/countreis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Countreis::find($id)->delete();
         $countreis =  Countreis::find($id);
         Storage::delete($countreis->logo);
         $countreis->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/countreis');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Countreis::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $countreis =  Countreis::find($id);
                Storage::delete($countreis->logo);
                $countreis->delete();
            }

        }/*if*/ else{
            // Countreis::find(request('item'))->delete();
              $countreis =  Countreis::find(request('item'));
                Storage::delete($countreis->logo);
                $countreis->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/countreis');
    }
}
