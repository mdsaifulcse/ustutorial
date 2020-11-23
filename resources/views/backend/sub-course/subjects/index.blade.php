@extends('backend.app')

@section('breadcrumb')

    <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('#')}}">Subjects</a></li>
    </ol>
@endsection

@section('content')


    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header ">
                        Subject List of {{$subCourse->sub_course.' '.$subCourse->courseInSubCourse->name}}
                        <div class="box-btn pull-right">

                    <a href="{{URL::to('/courses')}}" class="btn btn-primary btn-sm"> <i class="fa fa-angle-double-left"></i> Go Courses</a>

                    <a href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" > <i class="fa fa-plus"></i> Add New</a>

                        </div>

                    </div>

                    <div class="view_uom_set">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('route' => 'subjects.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Subject</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Subject</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" class="form-control" name="subject_name" value="{{old('subject_name')}}" required placeholder="Enter Subject Name">
                                                <input type="hidden" name="sub_course_id" value="{{$subCourse->id}}" id="courseId">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Short Name </label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" class="form-control" name="short_name" value="{{old('short_name')}}" required placeholder="Enter Subject Short Name">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Status</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])}}
                                                <input type="hidden" name="for_branch" value="1">

                                            </div>
                                        </div>

                                        {{--<div class="form-group row">--}}
                                            {{--<label class="control-label col-md-3 col-sm-3"> For Branch</label>--}}
                                            {{--<div class="col-md-8 col-sm-8">--}}
                                                {{--{{Form::select('for_branch',['1'=>'All Branch','2'=>'By Choice'],[],['id'=>'for_branch','class'=>'form-control','placeholder'=>'-Select one-','required'=>true])}}--}}

                                                {{--@if ($errors->has('branch_id'))--}}
                                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>Please Choice Branch</strong>--}}
                                    {{--</span>--}}
                                                {{--@endif--}}

                                            {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">&nbsp;</label>
                                            <div class="col-md-9 col-sm-9" id="branches"></div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                    </div>
                                    {!! Form::close(); !!}
                                </div>
                            </div>
                        </div>
                        {{-- End of Modal --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($alldata)>0)
                            <table id="subCourses" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Sub Course</th>
                                    <th>Subject</th>
                                    <th>Short Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php $i=1?>
                                    @foreach($alldata as $data)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$data->subCourserOfSubject->sub_course}}</td>
                                    <td>{{$data->subject_name}}</td>
                                    <td>{{$data->short_name}}</td>

                                    <td>
                                        <span class="text-success">@if($data->status==1)<span>Active</span>
                                            @else <span class="text-danger">Inactive</span> @endif</span>
                                    </td>
                                    <td>
                                        {{Form::open(array('route'=>['subjects.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id",'class'=>'deleteForm'))}}
                                        <a   href="#modal-dialog{{$data->id}}" class="btn btn-warning btn-xs" data-toggle="modal"  class="btn btn-warning btn-xs"> <i class="fa fa-pencil-square"></i></a>
                                        <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$data->id}}')"><i class="fa fa-trash"></i></button>
                                        {!! Form::close() !!}
                                    </td>





                                    <div class="modal fade"  id="modal-dialog{{$data->id}}" data-backdrop="static" data-keyboard="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                {!! Form::open(array('route' =>['subjects.update',$data->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Subject</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="form-group row">
                                                        <label class="control-label col-md-3 col-sm-3"> Subject</label>
                                                        <div class="col-md-8 col-sm-8">
                                                            <input type="text" class="form-control" name="subject_name" value="{{$data->subject_name}}" required placeholder="Enter Subject Name">
                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="control-label col-md-3 col-sm-3"> Short Name </label>
                                                        <div class="col-md-8 col-sm-8">
                                                            <input type="text" class="form-control" name="short_name" value="{{$data->short_name}}" required placeholder="Enter Subject Name">
                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="control-label col-md-3 col-sm-3"> Status</label>
                                                        <div class="col-md-8 col-sm-8">
                                                            {{Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])}}

                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="control-label col-md-3 col-sm-3">&nbsp;</label>
                                                        <div class="col-md-9 col-sm-9" id="branches"></div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                                </div>
                                                {!! Form::close(); !!}
                                            </div>
                                        </div>
                                    </div>




                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                                @else
                                    <h3 class="text-center">No Data Available Here</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.sub-course.edit')
    <!-- end #content -->
@endsection

@section('script')
    <script>
        $(function() {
            $('#subCourses1').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: "{{url('/sub-course/create')}}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    { data: 'branch_name',name:'branch.name'},
                    { data: 'courser_name',name:'courses.name'},
                    { data: 'sub_course',name:'sub_courses.sub_course'},
                    { data: 'amount',name:'sub_courses.amount'},
                    { data: 'first_payment',name:'sub_courses.first_payment'},
                    { data: 'student_amount',name:'sub_courses.student_amount'},
                    { data: 'Batch'},
                    { data: 'Status'},
                    { data: 'Action'},
                ]
            });
        });
    </script>

    <script>
        function editSubCourse($subCourserId) {
            event.preventDefault()

            $.ajax({
                url:"{{URL::to('/edit-sub-course')}}"+'/'+$subCourserId,
                type: 'GET',
                'dataType' : 'json',
                success: function(data) {
                    var htmlEle=''
//                    data.courses.forEach(function (course) {
//                        htmlEle+='<option value='+course.id+'>'+course.name+'</option>'
//                    })
//                    $('#course_id').empty().append(htmlEle);

                    $('#editId').val(data.subCourse.id);
                    $('#sub_course').val(data.subCourse.sub_course);
                    $('#amount').val(data.subCourse.amount);
                    $('#firstPayment').val(data.subCourse.first_payment);
                    $('#status').val(data.subCourse.status);
                    $('#subCourseModal').modal('show')
                    console.log(data)
                }

            })
        }
    </script>

    <script>
        $('#for_branch').on('change',function () {
           var courseId=$('#courseId').val()
            if ($('#for_branch').val()==='2'){
                $('#branches').load('{{URL::to("/branch-by-course")}}')
            }else {
                $('#branches').empty()
            }
        })

        // -- empty the branch -----------
        $('#courseId').on('change',function () {
            $('#branches').empty()
        })


        function goBack() {
            window.history.back();
        }

    </script>
    @endsection
