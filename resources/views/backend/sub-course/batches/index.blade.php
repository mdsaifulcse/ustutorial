@extends('backend.app')

@section('breadcrumb')

    <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('batches')}}">Batch</a></li>
    </ol>
@endsection

@section('content')
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            line-height: 1.25;
        }

        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }

        table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .15em;
        }

        table th,
        table td {
            padding: .25em;
            text-align: left;
        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        @media screen and (max-width: 768px) {
            table {
                border: 0;
            }

            table caption {
                font-size: 1.3em;
            }

            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table td::before {
                /*
                * aria-label has no advantage, it won't be read inside a table
                content: attr(aria-label);
                */
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }
    </style>


    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header card-danger">
                        All Batches List  under the {{$subCourser->sub_course}} of {{$subCourser->courseInSubCourse->name}}

                        <div class="box-btn pull-right">
                            {{--<a  href="{{URL::to('/sub-course')}}" class="btn btn-primary btn-sm" > <i class="fa fa-angle-double-left"></i> Go to Back</a>--}}
                            @if($branchId!='')
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" > <i class="fa fa-plus"></i> Add New Batch</a>
                                @endif
                        </div>

                    </div>

                    <div class="view_uom_set">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('route' => 'batches.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Batch</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Batch number</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" class="form-control" name="batch_no" value="{{$batchNo}}" readonly placeholder="Enter Batch number" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Seat Capacity</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" class="form-control" name="student_capacity" value="{{old('student_capacity')}}" placeholder="Capacity of Student / Seat">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Class Start Date</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input type="text" class="form-control singleDatePicker" name="start_date" value="{{old('start_date')}}" autocomplete="off" placeholder="Class start date" >
                                            </div>


                                            <label class="control-label col-md-2 col-sm-3">  End Date</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input type="text" class="form-control singleDatePicker" name="end_date" value="{{old('end_date')}}" autocomplete="off" placeholder="Class End data" >
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Class Start Time</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input type="time" class="form-control" name="start_time" value="" placeholder="Class start date" >
                                            </div>


                                            <label class="control-label col-md-2 col-sm-3">  End Time</label>
                                            <div class="col-md-3 col-sm-3">
                                                <input type="time" class="form-control " name="end_time" value="" placeholder="Class End data" >
                                            </div>
                                        </div>


                                        {{--<div class="form-group row">--}}
                                            {{--<label class="control-label col-md-3 col-sm-3"> Batch Time</label>--}}
                                            {{--<div class="col-md-8 col-sm-8">--}}
                                                {{--<input type="text" class="form-control" name="batch_time" value="{{old('batch_time')}}" placeholder="Type class schedule Time" >--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Class Day</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" class="form-control" name="class_day" value="{{old('class_day')}}" placeholder="Type class day on a week" >
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Status</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])}}
                                                <input type="hidden" name="sub_course_id" value="{{$subCourseId}}" >
                                                <input type="hidden" name="branch_id" value="{{$branchId?$branchId:''}}" >
                                            </div>
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
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    {!! Form::open(array('url' => 'batches/'.$subCourser->id,'id'=>'branchForm','class'=>'form-horizontal','method'=>'GET')) !!}

                                    {{Form::select('branch_id',$branches,$branchId,['id'=>'branchId','class'=>'form-control','placeholder'=>'-All Branch-'])}}

                                    {!! Form::close() !!}
                                </div>
                            </div>


                            <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th scope="col" width="3%">Sl</th>
                                    <th scope="col">Branch</th>
                                    <th scope="col">Batch no</th>
                                    <th scope="col">Seat Capacity</th>
                                    <th scope="col">Class Day</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="6%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                @foreach($batches as $data)
                                    <?php $i++; ?>
                                    <tr>
                                        <td data-label="Sl" >{{$i}}</td>
                                        <td data-label="Branch" >{{$data->batchOfBranch->name}}</td>
                                        <td data-label="Batch no" >{{$data->batch_no}}</td>
                                        <td data-label="Seat Capacity" >{{$data->student_capacity}}</td>

                                        <td data-label="Class Day" >{{$data->class_day}}</td>
                                        <td data-label="Status" >
                                        @if($data->status==1)
                                                <span class="text-success"> <i class="fa fa-check-circle-o"></i> Active </span>
                                            @else
                                                <span class="text-danger"> <i class="fa fa-exclamation-triangle"></i> Inactive </span>
                                            @endif
                                        </td>

                                        <td data-label="Action" >

                                            <!-- #roleModal -->
                                            <div class="modal fade" id="batchModal{{$data->id}}" data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        {!! Form::open(array('route' => ['batches.update',$data->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Batch</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Batch number</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <input type="text" class="form-control" name="batch_no" value="{{$data->batch_no}}" placeholder="Enter Batch number" readonly required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Seat Capacity</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <input type="text" class="form-control" name="student_capacity" value="{{$data->student_capacity}}" placeholder="Capacity of Student / Seat">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Class Start Date</label>
                                                                <div class="col-md-3 col-sm-3">
                                                                    <input type="text" class="form-control singleDatePicker" name="start_date" value="{{$data->start_date?date('d-m-Y',strtotime($data->start_date)):''}}" autocomplete="off" placeholder="Class start date" >
                                                                </div>


                                                                <label class="control-label col-md-2 col-sm-3">  End Date</label>
                                                                <div class="col-md-3 col-sm-3">
                                                                    <input type="text" class="form-control singleDatePicker" name="end_date" value="{{ $data->end_date?date('d-m-Y',strtotime($data->end_date)):''}}" autocomplete="off" placeholder="Class End data" >
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Class Start Time</label>
                                                                <div class="col-md-3 col-sm-3">
                                                                    <input type="time" class="form-control " name="start_time" value="{{$data->start_time?$data->start_time:''}}" placeholder="Class start date" >
                                                                </div>


                                                                <label class="control-label col-md-2 col-sm-3">  End Time</label>
                                                                <div class="col-md-3 col-sm-3">
                                                                    <input type="time" class="form-control " name="end_time" value="{{ $data->end_time?$data->end_time:''}}" placeholder="Class End data" >
                                                                </div>
                                                            </div>


                                                            {{--<div class="form-group row">--}}
                                                                {{--<label class="control-label col-md-3 col-sm-3"> Batch Time</label>--}}
                                                                {{--<div class="col-md-8 col-sm-8">--}}
                                                                    {{--<input type="text" class="form-control" name="batch_time" value="{{$data->batch_time}}" placeholder="Type class schedule Time" >--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Class Day</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <input type="text" class="form-control" name="class_day" value="{{$data->class_day}}" placeholder="Type class day on a week" >
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Status</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <input type="hidden" name="id" value="{{$data->id}}" >
                                                                    {{Form::select('status',['1'=>'Active','0'=>'Inactive'],$data->status,['class'=>'form-control','required'=>true])}}
                                                                </div>
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
                                            {{Form::open(array('route'=>['batches.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id",'class'=>'deleteForm'))}}
                                            <a  href="#batchModal{{$data->id}}" class="btn btn-warning btn-xs" data-toggle="modal" > <i class="fa fa-pencil-square"></i></a>
                                            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$data->id}}')"><i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div>
                                {{$batches->render()}}
                            </div>
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
        $('#branchId').on('change',function () {

            $('#branchForm').submit()

            //$('#branches').load('{{URL::to("/branch-by-course")}}')

        })

    </script>

    <script>
//        $('#datePicker').daterangepicker({
//            singleDatePicker: true,
//            showDropdowns: true,
//            autoUpdateInput: false,
//            locale: {
//                format: 'DD-MM-YYYY',
//
//            }
//        })
//
//        $('#datePicker').on('apply.daterangepicker', function(ev, picker) {
//            $(this).val(picker.startDate.format('DD-MM-YYYY'));
//        });
    </script>
@endsection