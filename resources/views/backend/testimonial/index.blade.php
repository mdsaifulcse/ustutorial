@extends('backend.app')
@section('content')

	<div id="content" class="content">

		<div class="row">
			<div class="col-lg-12">
				<div class="box box-danger">

					<div class="box-header with-border bg-gray-active">
						<h4 class="box-title">Create New  Testimonial</h4>
						{{--<a href="" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-plus"></i> Add new </a>--}}
					</div>

					<div class="box-body ">
						{!! Form::open(array('route' => 'testimonial.store','method'=>'POST','class'=>'form-horizontal','files'=>true)) !!}

						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							{{Form::label('Name', ' Review Person', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-6">
								{{Form::text('name',$value=old('name'),array('class'=>'form-control','placeholder'=>'Who\'s give review','required','autofocus'))}}
								@if ($errors->has('name'))
								<span class="help-block">
                        				<strong class="text-danger">{{ $errors->first('name') }}</strong>
                    			</span>
								@endif
							</div>
							<div class="col-md-2">
								{{Form::select('status', array('1' => 'Active', '2' => 'Inactive'), '1', ['class' => 'form-control'])}}
							</div>
						</div>

						<div class="form-group">
							{{Form::label('Content', ' Content', array('class' => 'col-md-2 control-label'))}}
							<div class=" col-md-8 col-lg-8 ">
								<label class="control-label"></label>

								<textarea class="form-control textarea" name="content" placeholder="Enter Content Here" rows="5" value="" ></textarea>

							</div>
						</div>


						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							{{Form::label('Name', ' Review Program Name', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-6">
								{{Form::text('course_name',$value=old('course_name'),array('class'=>'form-control','placeholder'=>'Review Course Name','required','autofocus'))}}
								@if ($errors->has('course_name'))
									<span class="help-block">
                        				<strong class="text-danger">{{ $errors->first('course_name') }}</strong>
                    			</span>
								@endif
							</div>
							{{Form::label('Name', ' Review Rating', array('class' => 'col-md-1 control-label'))}}
							<div class="col-md-2">
								{{Form::select('rating', array('1' => '1 Start', '2' => '2 Start', '3' => '3 Start', '4' => '4 Start', '5' => '5 Start'), '', ['required','class' => 'form-control'])}}
							</div>
						</div>


						<div class="form-group {{ $errors->has('icon_photo') ? 'has-error' : '' }}">
							{{Form::label('icon_photo', 'Photo', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-2">
								<label class="upload_photo upload icon_upload" for="file">
									<!--  -->
									<img id="image_load" src="{{asset('images/default/photo.png')}}" style="max-width: 120px;border: 2px dashed #2783bb; cursor: pointer">
									{{--<i class="upload_hover ion ion-ios-camera-outline"></i>--}}
								</label>
								<input type="file" id="file" style="display: none;" name="image" onchange="photoLoad(this, this.id)" />
								@if ($errors->has('icon_photo'))
									<span class="help-block" style="display:block">
                            <strong>{{ $errors->first('icon_photo') }}</strong>
                        </span>
								@endif
							</div>
							{{--<div class="col-md-1">--}}
								{{--<b>OR</b>--}}
							{{--</div>--}}
							{{--<div class="col-md-5">--}}
								{{--{{Form::text('icon_class','',array('class'=>'form-control','placeholder'=>'Ex: fa fa-facebook, ion-gear-a'))}}--}}
								{{--<span>Use : <a class="btn btn-link" href="http://fontawesome.io/icons/">Font Awesome</a>, <a class="btn btn-link" href="http://ionicons.com/">ion icons</a></span>--}}
							{{--</div>--}}
                            <?php $max=$max_serial+1; ?>
							<div class="col-md-2">
								{{Form::number('serial_num',$max, ['min'=>'1','max'=>$max,'class' => 'form-control','required'])}}
								<span>Serial</span>
							</div>
						</div>

						{{--<div class="form-group">--}}
							{{--{{Form::label('post_type', 'Category Type', array('class' => 'col-md-2 control-label'))}}--}}
							{{--<div class="col-md-3">--}}
								{{--{{Form::select('post_type', array('1' => 'Normal Category', '2' => 'Special/Blog'), '1', ['class' => 'form-control'])}}--}}
							{{--</div>--}}


							{{--{{Form::label('post_type', 'Ad view type', array('class' => 'col-md-2 control-label'))}}--}}
							{{--<div class="col-md-3">--}}
								{{--{{Form::select('ad_view_type', array('1' => 'Grid View', '2' => 'List View'), '1', ['class' => 'form-control'])}}--}}
							{{--</div>--}}
						{{--</div>--}}

						<div class="form-group">
							<div class="col-md-10 col-md-offset-2">
								{{Form::submit('Submit',array('class'=>'btn btn-lg btn-info'))}}
							</div>
						</div>

						{!! Form::close() !!}


					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="box box-danger">

					<div class="box-header with-border bg-gray-active">
						<h4 class="box-title">All Testimonials
						</h4>

					</div>

					<div class="box-body table-responsive">

						<table class="table table-striped table-hover table-bordered center_table" id="my_table">
							<thead>
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Photo</th>
								<th>Status</th>
								<th colspan="2">Action</th>
							</tr>
							</thead>
							<tbody>
                            <?php $i=1; ?>
							@foreach($allData as $data)
								<tr>
									<td>{{$i++}}</td>
									<td>{{$data->name}}</td>
									<td>@if($data->image!=null)
											<img width="40px" class="img-responsive" src='{{asset("$data->image")}}' alt="{{$data->name}}">
										@endif
									</td>
									<td>
										@if($data->status==1)
											<i class="fa fa-check btn btn-success btn-xs"> Active</i>
										@else
											<i class="fa fa-warning btn btn-warning btn-xs"> Inactive</i>
										@endif

									</td>
									<td>
										{!! Form::open(array('route' => ['testimonial.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id")) !!}

										<a href='{{URL::to("testimonial/$data->id").'/edit'}}' title="Edit Testimonial information" class="btn btn-warning btn-sm">
											<i class="fa fa-pencil-square"></i>
										</a>
										<button type="button" class="btn btn-sm btn-danger" onclick='return deleteConfirm("deleteForm{{$data->id}}")'><i class="fa fa-trash"></i></button>
										{!! Form::close() !!}

									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
						<div class="pull-right">
							{{$allData->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>

	</div> <!--end content-->



@endsection


<script>
    function photoLoad(input,image_load) {
        var target_image='#'+$('#'+image_load).prev().children().attr('id');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(target_image).attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script type="text/javascript">

    function deleteConfirm(){
        var con= confirm("Do you want to delete?");
        if(con){
            return true;
        }else
            return false;
    }
</script>