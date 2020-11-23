@extends('backend.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    </ol>
@endsection

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Program</h3>
                        <div class="card-btn pull-right">


                            <a href="{{URL::to('courses/create')}}"  class="btn btn-primary btn-xs pull-right" title="click here to create new course"> <i class="fa fa-plus-circle"></i> add New </a>
                            {{--<a href="{{URL::to('/branches')}}" class="btn btn-primary btn-xs pull-right" title="Back to branch"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> Branches</a>--}}
                        </div>
                    </div>

                    <div class="box-body view_uom_set">
                            <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th scope="col" width="3%">Sl</th>
                                    <th scope="col">Program</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="6%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                @foreach($courses as $data)
                                    <?php $i++; ?>
                                    <tr>
                                        <td data-label="Sl">{{$i}}</td>
                                        <td data-label="Course">{{$data->name}}</td>
                                        <td data-label="Day Limit">{{$data->course_duration}}</td>
                                        <td data-label="Day Limit">{{$data->price}}</td>
                                        <td data-label="Day Limit">{{$data->serial}}</td>
                                        <td data-label="Status">
                                        @if($data->status==1)
                                                <span class="text-success"> <i class="fa fa-check-circle-o"></i> Active </span>
                                            @else
                                                <span class="text-danger"> <i class="fa fa-exclamation-triangle"></i> Inactive </span>
                                            @endif
                                        </td>
                                        <td data-label="Action">
                                            {{Form::open(array('route'=>['courses.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id",'class'=>'deleteForm'))}}
                                            <a  href="{{URL::to('course-details/'.$data->id)}}" class="btn btn-info btn-xs" > Set Details</a>
                                            <a  href="{{URL::to('courses/'.$data->id.'/edit')}}" class="btn btn-warning btn-xs" > <i class="fa fa-pencil-square"></i></a>
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
