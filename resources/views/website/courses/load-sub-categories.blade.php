
@if(count($subCategories)>0)

{{Form::select('sub_category_id', $subCategories,[],['class'=>'form-control','placeholder'=>'-Select Category First-','required'=>false])}}

@else
    {{Form::select('sub_category_id', [],[],['class'=>'form-control','placeholder'=>'No Data -','required'=>false])}}
@endif
