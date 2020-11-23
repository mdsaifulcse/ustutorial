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
                        Sub Course List
                        <div class="box-btn pull-right">
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" > <i class="fa fa-plus"></i> Add New</a>

                        </div>

                    </div>

                    <div class="view_uom_set">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('route' => 'sub-course.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Sub Course</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Course</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::select('course_id',$courses,[],['class'=>'form-control','placeholder'=>'-Select Course-','required'=>true])}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Sub Course</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" class="form-control" name="sub_course" value="" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Courser Fee</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="number" step="any" class="form-control" name="amount" value="" placeholder="Fee amount">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Status</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])}}
                                            </div>
                                        </div>

                                        {{--<div class="form-group row">--}}
                                            {{--<label class="control-label col-md-3 col-sm-3"> For Branch</label>--}}
                                            {{--<div class="col-md-8 col-sm-8">--}}
                                                {{--@if(count($branches)>0)--}}
                                                    {{--@foreach($branches as $branch)--}}
                                                {{--<label><input type="checkbox" name="branch_id" value="{{$branch->id}}" >{{$branch->name}}</label>--}}
                                                    {{--@endforeach--}}
                                                {{--@endif--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

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
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="20%">Course</th>
                                    <th width="20%">Sub Course</th>
                                    <th width="20%">Fee Amount</th>
                                    <th width="15%">Status</th>
                                    <th width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                @foreach($alldata as $data)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$data->courseName->name}}</td>
                                        <td>{{$data->sub_course}}</td>
                                        <td>{{$data->amount}}</td>
                                        <td>
                                        @if($data->status==1)
                                                <span class="text-success"> <i class="fa fa-check-circle-o"></i> Active </span>
                                            @else
                                                <span class="text-danger"> <i class="fa fa-exclamation-triangle"></i> Inactive </span>
                                            @endif

                                        </td>
                                        <td>

                                            <!-- #roleModal -->
                                            <div class="modal fade" id="subCourseModal" data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        {!! Form::open(array('route' => ['sub-course.update',1],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Sub Course</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Course</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    {{Form::select('course_id',[],$data->course_id,['class'=>'form-control','placeholder'=>'-Select Course-','required'=>true])}}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Sub Course</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <input type="text" class="form-control" name="sub_course" value={{$data->sub_course}} placeholder="Name">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Courser Fee</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <input type="number" step="any" class="form-control" name="amount" value="{{$data->amount}}" placeholder="Fee amount">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Status</label>
                                                                <div class="col-md-8 col-sm-8">
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
                                            {{Form::open(array('route'=>['sub-course.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id",'class'=>'deleteForm'))}}
                                            <a  href="#subCourseModal{{$data->id}}" class="btn btn-warning btn-xs" data-toggle="modal" > <i class="fa fa-pencil-square"></i></a>
                                            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$data->id}}')"><i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end #content -->
@endsection
