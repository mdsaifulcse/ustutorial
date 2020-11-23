
@if(count($subCategories)>0)
<label class="control-label">Sub-Category (Optional):</label>

{{Form::select('sub_category_id', $subCategories,[],['class'=>'form-control','placeholder'=>'-Select Category First-','required'=>false])}}

@else
    <label class="control-label">Sub-Category (Optional):</label>
    {{Form::select('sub_category_id', [],[],['class'=>'form-control','placeholder'=>'No sub-category data Found-','required'=>false])}}
@endif
