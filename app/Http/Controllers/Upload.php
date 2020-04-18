<?php

namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;
use Storage;

class Upload extends Controller
{
	/*      'name',
        'size',
        'file',
        'path',
        'full_file',
        'mime_type',
        'file_type',
        'relation_id',*/
//!empty(session()->icon) ? Storage::delete(session()->icon):'';
// $file,$path,$upload_type='single',$new_name= null,$crud_type=[]

//$new_name == $data['new_name '] === null?time():$data['new_name '];
    public   function upload($data = [])
    {
        if (in_array('new_name',$data)){
            $new_name = $data['new_name '] === null?time():$data['new_name '];
        }

          if (request()->hasFile($data['file']) && $data['upload_type'] =='single');  {
        Storage::has($data['delete_file']) && !empty($data['delete_file'])?Storage::delete($data['delete_file']):'';
          return  request()->file($data['file'])->store($data['path']);
         }// end if
    	 
    }//upload
}
