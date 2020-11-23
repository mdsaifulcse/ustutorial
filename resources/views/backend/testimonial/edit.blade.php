@extends('backend.app')
@section('content')

<div id="content" class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-danger">

                <div class="box-header with-border bg-gray-active">
                    <h4 class="box-title">Edit Testimonial
                    </h4>
                    <a href="{{route('testimonial.index')}}" class="btn btn-success btn-sm pull-right"> <i class="fa fa-angle-double-left"></i> All Testimonials </a>

                </div>

                <div class="box-body ">
                    {!! Form::open(array('route' => ['testimonial.update',$testimonial->id],'method'=>'PUT','class'=>'form-horizontal','files'=>true)) !!}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {{Form::label('Name', ' Review Person', array('class' => 'col-md-2 control-label'))}}
                        <div class="col-md-8">
                            {{Form::text('name',$testimonial->name,array('class'=>'form-control','placeholder'=>'Who\'s give review','required','autofocus'))}}
                            @if ($errors->has('name'))
                                <span class="help-block">
                        				<strong class="text-danger">{{ $errors->first('name') }}</strong>
                    			</span>
                            @endif
                        </div>
                        <div class="col-md-2">
                            {{Form::select('status', array('1' => 'Active', '2' => 'Inactive'), $testimonial->status, ['class' => 'form-control'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        {{Form::label('Content', ' Content', array('class' => 'col-md-2 control-label'))}}
                        <div class=" col-md-8 col-lg-8 ">
                            <label class="control-label"></label>

                            <textarea class="form-control textarea" name="content" placeholder="Enter Content Here" rows="5"><?php echo $testimonial->content;?></textarea>

                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {{Form::label('Name', ' Review Program Name', array('class' => 'col-md-2 control-label'))}}
                        <div class="col-md-6">
                            {{Form::text('course_name',$value=$testimonial->course_name,array('class'=>'form-control','placeholder'=>'Review Course Name','required','autofocus'))}}
                            @if ($errors->has('course_name'))
                                <span class="help-block">
                        				<strong class="text-danger">{{ $errors->first('course_name') }}</strong>
                    			</span>
                            @endif
                        </div>
                        {{Form::label('Rating', ' Review Rating', array('class' => 'col-md-1 control-label'))}}
                        <div class="col-md-2">
                            {{Form::select('rating', array('1' => '1 Start', '2' => '2 Start', '3' => '3 Start', '4' => '4 Start', '5' => '5 Start'), $testimonial->rating, ['required'=>true,'class' => 'form-control'])}}
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has('icon_photo') ? 'has-error' : '' }}">
                        {{Form::label('icon_photo', 'Photo', array('class' => 'col-md-2 control-label'))}}
                        <div class="col-md-2">
                            <label class="upload_photo upload icon_upload" for="file">
                                @if(!empty($testimonial->image))
                                    <img id="image_load" src="{{asset($testimonial->image)}}" style="max-width: 120px;border: 2px dashed #2783bb; cursor: pointer">
                                    @else
                                    <img id="image_load" src="{{asset('images/default/photo.png')}}" style="max-width: 120px;border: 2px dashed #2783bb; cursor: pointer">
                                    @endif

                                {{--<i class="upload_hover ion ion-ios-camera-outline"></i>--}}
                            </label>
                            <input type="file" id="file" style="display: none;" name="image" onchange="photoLoad(this, this.id)" />
                            @if ($errors->has('icon_photo'))
                                <span class="help-block" style="display:block">
                            <strong>{{ $errors->first('icon_photo') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            {{Form::submit('Submit',array('class'=>'btn btn-md btn-warning'))}}
                        </div>
                    </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>



</div> <!--end content-->


@endsection

