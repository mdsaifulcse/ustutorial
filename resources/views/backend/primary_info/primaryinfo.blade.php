@extends('backend.app')

@section('breadcrumb')
        <ol class="breadcrumb">
            <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('primary-info')}}">Primary Info</a></li>
            <li class="active">Edit</li>
        </ol>
  
@endsection

@section('content')

<div class="content">
    <div class="row">
            <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Primary Information</h3>

            </div>




            <div class="col-md-8 col-md-offset-2">
                <div class="row">



                    {!! Form::open(array('route' =>['primary-info.update',$data->id],'method'=>'PUT','class'=>'form-horizontals','files'=>true)) !!}

                    <div class="box-body">

                        <div class="form-group row">
                            <label for="username3" class="col-sm-2 col-form-label">Organization Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$data->company_name}}" name="company_name" placeholder="company_name">
                            </div>
                        </div>


                        <input type="hidden" value="{{$data->id}}" name="id"/>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">

                                <textarea class="form-control" name="address" placeholder="address" ><?php echo $data->address;?></textarea>

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="mobile_no" placeholder="mobile_no" value="{{$data->mobile_no}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control"  name="email" placeholder="email" value="{{$data->email}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-2 col-form-label">Why {{$data->company_name}} ?</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control " name="why_us" rows="7" placeholder="Company Overview"><?php echo $data->why_us;?>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control textarea" name="description" placeholder="description" value="" ><?php echo $data->description;?>
                                </textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPasswdford4" class="col-sm-2 col-form-label">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="meta_description" placeholder="meta Description" value="" >
                                    <?php echo $data->meta_description;?>
                                </textarea>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="slide_photo" class="col-md-2 control-label">Logo</label>
                            <div class="col-md-4">
                                <label class="slide_upload" for="file">
                                    <!--  -->

                                    @if($data->logo!=null)
                                        <img id="image_load" src='{{asset("$data->logo")}}' class="img-responsive" style="    width: 200px;height: 80px;">
                                    @else
                                        <img id="image_load" src="{{asset('images/default/photo.png')}}" style="    width: 200px;height: 80px;">
                                    @endif

                                </label>

                                {{Form::file('logo',array('id'=>'file','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))}}

                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="slide_photo" class="col-md-2 control-label">Favicon</label>
                            <div class="col-md-4">
                                <label class="slide_upload" for="file2">
                                    <!--  -->

                                    @if($data->logo!=null)
                                        <img id="image_load2" src='{{asset("$data->favicon")}}' class="img-responsive" style="    width: 70px;height: 120px;">
                                    @else
                                        <img id="image_load2" src="{{asset('images/default/photo.png')}}" style="    width: 200px;height: 150px;">
                                    @endif

                                </label>

                                {{Form::file('favicon',array('id'=>'file2','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))}}

                            </div>
                        </div>


                     {{--<div class="form-group  {{ $errors->has('map_embed') ? 'has-error' : '' }}">--}}
                        {{--{{Form::label('map_embed', 'Google Map Embed Code', array('class' => 'col-md-3 control-label'))}}--}}
                        {{--<div class="col-md-8">--}}
                            {{--{{Form::textArea('map_embed',$data->map_embed,array('class'=>'form-control','placeholder'=>'Google Map Embed Code','rows'=>'5'))}}--}}
                            {{--@if ($errors->has('map_embed'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('map_embed') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--{{Form::label('Google Map', 'Google Map', array('class' => 'col-md-3 control-label'))}}--}}
                        {{--<div class="col-md-8">--}}
                            {{--<iframe src="{{$data->map_embed}}" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>

                    </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

    </div>
</div>

@endsection

@section('script')

    <script type="text/javascript">


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

        function photoLoad(input,image_load2) {
            var target_image='#'+$('#'+image_load2).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function photoLoad(input,image_load3) {
            var target_image='#'+$('#'+image_load3).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }




    </script>


@endsection