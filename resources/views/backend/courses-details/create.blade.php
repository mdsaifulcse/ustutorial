@extends('backend.app')
@section('title')
    Create New Course
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('sub-course')}}"> Course create</a></li>
    </ol>
@endsection

@section('content')

    <!-- begin #content -->
    <div id="content" class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Course Creation</h3>
                        <div class="box-btn pull-right">

                            <a href="{{URL::to('courses')}}"  class="btn btn-primary btn-xs pull-right" title="click here to view all course"> <i class="fa fa-list"></i> All Courses </a>
                            {{--<a href="{{URL::to('/branches')}}" class="btn btn-primary btn-xs pull-right" title="Back to branch"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> Branches</a>--}}
                        </div>
                    </div>

                    <div class="view_uom_set">
                        <!-- #modal-dialog -->

                        {{-- End of Modal --}}
                        <div class="box-body">
                            {!! Form::open(array('route' =>'courses.store','method'=>'POST','class'=>'form-vertical','files'=>true)) !!}

                            <div class="row">

                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group ">
                                        <label class="control-label">Course Category <sup class="text-danger">*</sup> :</label>
                                        {{Form::select('category_id', $categories,[],['id'=>'categoryId','class'=>'form-control','placeholder'=>'-Select one-','required'=>true])}}
                                    </div>
                                </div>

                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group " id="loadSubCategory">
                                        <label class="control-label">Sub-Category (Optional):</label>

                                        {{Form::select('sub_category_id', [],[],['class'=>'form-control','placeholder'=>'-Select Category First-','required'=>false])}}
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group ">
                                        <label class="control-label">Course Duration:</label>

                                        {{Form::text('course_duration',$value=old('course_duration'),['class'=>'form-control','placeholder'=>'Course Duration( Ex: 7Weeks)','required'=>false])}}
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-5 col-lg-5">
                                    <div class="form-group ">
                                        <label class="control-label">Course Name:</label>

                                        {{Form::text('name', $value=old('name'),['class'=>'form-control','placeholder'=>'Course name','required'=>true])}}

                                    </div>
                                </div>

                                <div class="col-md-2 col-lg-2">
                                    <div class="form-group ">
                                        <label class="control-label">Start Date:</label>

                                        {{Form::text('start_date', $value=old('start_date'),['class'=>'singleDatePicker form-control','placeholder'=>'Course start date','required'=>true])}}

                                    </div>
                                </div>

                                <div class="col-md-2 col-lg-2">
                                    <div class="form-group ">
                                        <label class="control-label">Popular Course ?</label>

                                        {{Form::select('show_at_home', ['0'=>'No Popular Course','1'=>'Include to Popular Course'],[],['class'=>'form-control','placeholder'=>'-Select one-','required'=>true])}}

                                    </div>
                                </div>

                                <div class="col-md-2 col-lg-2">
                                    <div class="form-group ">
                                        <label class="control-label">Course Status</label>

                                        {{Form::select('status', ['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])}}

                                    </div>
                                </div>

                                <div class="col-md-1 col-lg-1">
                                    <div class="form-group ">
                                        <label class="control-label">serial</label>

                                        {{Form::number('serial', $value=$serial,['class'=>'form-control','required'=>true])}}

                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group ">
                                        <label class="control-label">Course Overview</label>

                                        <textarea class="form-control " name="overview" placeholder="Enter overview here" rows="5" value="" ></textarea>

                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group ">
                                        <label class="control-label">Course Curriculum</label>

                                        <textarea class="form-control textarea" name="curriculum" placeholder="Enter curriculum here" rows="5" value="" ></textarea>

                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group ">
                                        <label class="control-label">Features</label>

                                        <textarea class="form-control textarea" name="program_structure" placeholder="Enter program structure" rows="5" value="" ></textarea>

                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group ">
                                        <label class="control-label">FAQs</label>

                                        <textarea class="form-control textarea" name="eligibility" placeholder="Eligibility for enroll course" rows="5" value="" ></textarea>

                                    </div>
                                </div>
                            </div><!--end row-->


                            <div class="row">

                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group ">
                                        <label class="control-label">Course Price:</label>

                                        {{Form::number('price', $value=old('price'),['step'=>'any','class'=>'form-control','placeholder'=>'Course Price','required'=>false])}}

                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group ">
                                        <label class="control-label">Discount Price :</label>

                                        {{Form::number('discount', $value=old('discount'),['step'=>'any','class'=>'form-control','placeholder'=>'discount amount','required'=>false])}}

                                    </div>
                                </div>

                                {{--<div class="col-md-6 col-lg-6">--}}
                                    {{--<div class="form-group ">--}}
                                        {{--<label class="control-label">Instructors</label>--}}

                                        {{--{{Form::select('instructor[]', $instructors,[],['class'=>'form-control select2','multiple','required'=>true])}}--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                            </div><!--end row-->

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                <div class="form-group ">
                                    <label for="file" class="slide_upload profile-image"> Photo
                                        <!--  -->
                                        <img id="image_load" src="{{asset('images/default/photo.png')}}">

                                    </label>

                                        {{Form::file('image',array('id'=>'file','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))}}

                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group">
                                        <label class=" control-label">&nbsp; &nbsp;</label>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>



                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end #content -->
@endsection

@section('script')
    <script>

        $('#categoryId').on('change',function () {
            var categoryId=$(this).val()
            $('#loadSubCategory').load('{{URL::to("/sub-category-data")}}'+'/'+categoryId)
        })


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
    @endsection
