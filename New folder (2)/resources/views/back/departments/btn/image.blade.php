
@if(empty ($icon))
 <img  src="{{ asset( 'default/dep.png')}} "  class="img_50px" >
@else
 <div> <img src="{{url('public/storage').Storage::url($icon)}}" class="img_50px  "></div>
@endif


