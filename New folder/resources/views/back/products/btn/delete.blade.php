
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del_products{{$id}}">
    <i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="del_products{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('admin.delete')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route'=>['products.destroy',$id],'method'=>'delete']) !!}
            <div class="modal-body">
                <p> {{trans('admin.delete_this',['name'=>session('lang')== 'ar'?$product_name_ar:$product_name_en])}}</p>
              @if(empty($photo))
                     <img src="{{url('')}}/default/product.png" class="img_120px">
                    @endif 
                     @if(!empty($photo))
                        <div> <img src="{{url('public/storage').Storage::url($photo)}}" class="img_100px  "></div>
                    @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{trans('admin.close')}}</button>
                  {!! Form::submit(trans('admin.yes'),['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
             </div>
        </div>
    </div>
</div>