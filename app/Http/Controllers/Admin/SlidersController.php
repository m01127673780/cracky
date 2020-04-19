<?php

namespace App\Http\Controllers\Admin;
use App\Slider;
use App\DataTables\SlidersDatatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SlidersDatatable $sliders)
    {
        $sliders_all = Slider::orderBy('created_at','DESC')->paginate(6);
        // Slider::orderBy('id', 'desc');


       return $sliders->render('back.sliders.index',['title'=>trans('admin.sliders'),'sliders_all'=>$sliders_all]);
    }

    public function getAddEditRemoveColumn()
    {
        return view('datatables.eloquent.add-edit-remove-column');
    }

    public function getAddEditRemoveColumnData()
    {
        $sliders = Slider::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($sliders)
            ->addColumn('action', function ($sliders) {
                return '<a href="#edit-'.$sliders->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
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
       return view('back.sliders.create',['title'=>trans('admin.create-sliders')]);

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
            'head_ar'                  =>'sometimes|nullable',
            'head_en'                  =>'sometimes|nullable',
            'title_ar'                 =>'sometimes|nullable',
            'title_en'                 =>'sometimes|nullable',
            'text1_ar'                 =>'sometimes|nullable',
            'text1_en'                 =>'sometimes|nullable',
            'text2_ar'                 =>'sometimes|nullable',
            'text2_en'                 =>'sometimes|nullable',
            'text3_ar'                 =>'sometimes|nullable',
            'text3_en'                 =>'sometimes|nullable',
            'link'                     =>'sometimes|nullable',
            'photo'                    =>'required|'.v_image(),
         ],[
            'head_ar'                  =>trans('admin.head_ar'),
            'head_en'                  =>trans('admin.head_en'),
            'title_ar'                 =>trans('admin.title_ar'),
            'title_en'                 =>trans('admin.title_en'),
            'text1_ar'                 =>trans('admin.text1_ar'),
            'text1_en'                 =>trans('admin.text1_en'),
            'text2_ar'                 =>trans('admin.text2_ar'),
            'text2_en'                 =>trans('admin.text2_en'),
            'text3_ar'                 =>trans('admin.text3_ar'),
            'text3_en'                 =>trans('admin.text3_en'),
            'link'                     =>trans('admin.link'),
            'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'sliders',
                        'upload_type' =>'single',
                        'delete_file' =>'',
                     ]);
                }
        Slider::Create($data);
        session()->flash('success', trans('admin.record_added') );
         return redirect('admin/sliders');

    }
    public function quick_store(Request $request)
    {
              $data =$this->validate(request(),[
            'head_ar'                  =>'sometimes|nullable',
            'head_en'                  =>'sometimes|nullable',
            'title_ar'                 =>'sometimes|nullable',
            'title_en'                 =>'sometimes|nullable',
            'text1_ar'                 =>'sometimes|nullable',
            'text1_en'                 =>'sometimes|nullable',
            'text2_ar'                 =>'sometimes|nullable',
            'text2_en'                 =>'sometimes|nullable',
            'text3_ar'                 =>'sometimes|nullable',
            'text3_en'                 =>'sometimes|nullable',
            'link'                     =>'sometimes|nullable',
            'photo'                    =>'required|'.v_image(),
         ],[
            'head_ar'                  =>trans('admin.head_ar'),
            'head_en'                  =>trans('admin.head_en'),
            'title_ar'                 =>trans('admin.title_ar'),
            'title_en'                 =>trans('admin.title_en'),
            'text1_ar'                 =>trans('admin.text1_ar'),
            'text1_en'                 =>trans('admin.text1_en'),
            'text2_ar'                 =>trans('admin.text2_ar'),
            'text2_en'                 =>trans('admin.text2_en'),
            'text3_ar'                 =>trans('admin.text3_ar'),
            'text3_en'                 =>trans('admin.text3_en'),
            'link'                     =>trans('admin.link'),
            'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'sliders',
                        'upload_type' =>'single',
                        'delete_file' =>'',

                     ]);
                }
        Slider::Create($data);
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

        $sliders = Slider::find($id);
        $title = trans('admin.edit');
         return view('back.sliders.edit',compact('sliders','title'));
    }
        public function show($id)
    {
        $sliders = Slider::find($id);
       return dd ($sliders);
        $title = trans('admin.show');
         return view('back.sliders.edit',compact('sliders','title'));
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
            'head_ar'                  =>'sometimes|nullable',
            'head_en'                  =>'sometimes|nullable',
            'title_ar'                 =>'sometimes|nullable',
            'title_en'                 =>'sometimes|nullable',
            'text1_ar'                 =>'sometimes|nullable',
            'text1_en'                 =>'sometimes|nullable',
            'text2_ar'                 =>'sometimes|nullable',
            'text2_en'                 =>'sometimes|nullable',
            'text3_ar'                 =>'sometimes|nullable',
            'text3_en'                 =>'sometimes|nullable',
            'link'                     =>'sometimes|nullable',
            'photo'                    =>'sometimes|nullable|'.v_image(),
         ],[
            'head_ar'                  =>trans('admin.head_ar'),
            'head_en'                  =>trans('admin.head_en'),
            'title_ar'                 =>trans('admin.title_ar'),
            'title_en'                 =>trans('admin.title_en'),
            'text1_ar'                 =>trans('admin.text1_ar'),
            'text1_en'                 =>trans('admin.text1_en'),
            'text2_ar'                 =>trans('admin.text2_ar'),
            'text2_en'                 =>trans('admin.text2_en'),
            'text3_ar'                 =>trans('admin.text3_ar'),
            'text3_en'                 =>trans('admin.text3_en'),
            'link'                     =>trans('admin.link'),
            'photo'                    =>trans('admin.photo'),
        ],[ 
        ]);
        if(request()->hasFile('photo')){
                    $data['photo']  = Up()->Upload([
                        'file'        =>'photo',
                        'path'        =>'sliders',
                        'upload_type' =>'single',
                        'delete_file' =>Slider::find($id)->photo,
                    ]);
                }
 
        Slider::where('id',$id)->update($data);
        session()->flash('success', trans('admin.updated_record') );
        return redirect('admin/sliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Slider::find($id)->delete();
         $sliders =  Slider::find($id);
         Storage::delete($sliders->photo);
         $sliders->delete();
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/sliders');
    }

    public function multi_delete()
    {
        if(is_array(request('item'))){
            // Slider::destroy(request('item'));
            foreach (request('item') as $id) 
            {
                $sliders =  Slider::find($id);
                Storage::delete($sliders->photo);
                $sliders->delete();
            }

        }/*if*/ else{
            // Slider::find(request('item'))->delete();
              $sliders =  Slider::find(request('item'));
                Storage::delete($sliders->photo);
                $sliders->delete();
        }
        session()->flash('success', trans('admin.deleted_record') );
        return redirect('admin/sliders');
    }
}
