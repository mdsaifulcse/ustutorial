@extends('backend.app')

@section('breadcrumb')

    <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('sub-course')}}">Sub Course</a></li>
    </ol>
@endsection

@section('content')


    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header ">
                        Sub Course List of {{$course->name}}
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
                                    {!! Form::open(array('route' => 'sub-course.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Sub Course of {{$course->name}} for all branch</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Sub Course</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="hidden" name="course_id" value="{{$course->id}}" id="courseId">
                                                <input type="text" class="form-control" name="sub_course" value="{{old('sub_course')}}" required placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Sub Courser Fee</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="number" step="any" class="form-control" name="amount" value="{{old('amount')}}" required placeholder="Fee amount">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3" title="Payment Milestone 1 ">Payment MS 1</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="number" step="any" class="form-control" name="first_payment"  value="{{old('first_payment')}}" placeholder="Minimum amount for first payment">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3" title="Payment Milestone 1 ">Amount</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="number" step="any" class="form-control" name="student_amount"  value="{{old('student_amount')}}" placeholder="Minimum amount for make regular student">
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
                                    <th>Course</th>
                                    <th>Sub Course</th>
                                    <th>Fee Amount</th>
                                    <th>Batch</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php $i=1?>
                                    @foreach($alldata as $data)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$data->courseInSubCourse->name}}</td>
                                    <td>{{$data->sub_course}}</td>
                                    <td>{{$data->amount}}</td>
                                    <td>
                                        <a  href="{{URL::to('/batches/'.$data->id)}}" class="btn btn-primary btn-xs" title="Click here to create batch under the  of  {{$data->sub_course}} " > <i class="fa fa-pencil"></i> Create Batch</a>
                                    </td>

                                    <td>
                                        <a  href="{{URL::to('/subjects/'.$data->id)}}" class="btn btn-primary btn-xs" title="Click here to create batch under the  of  {{$data->sub_course}} " > <i class="fa fa-pencil"></i> Create Subject</a>
                                    </td>

                                    <td>
                                        <span class="text-success">@if($data->status==1)<span>Active</span>
                                            @else <span class="text-danger">Inactive</span> @endif</span>
                                    </td>
                                    <td>
                                        {{Form::open(array('route'=>['sub-course.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id",'class'=>'deleteForm'))}}
                                        <a  href="#" class="btn btn-warning btn-xs" onclick="editSubCourse({{$data->id}})" > <i class="fa fa-pencil-square"></i></a>
                                        <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$data->id}}')"><i class="fa fa-trash"></i></button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                                @else
                                    <h3 class="text-center">No Data Available here</h3>
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
                ajax: "{{url('/sub-course/create?courseId='.$courseId)}}",
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
                    $('#studentAmount').val(data.subCourse.student_amount);
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
