@extends('backend.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('courses')}}"> Course</a></li>
    </ol>
@endsection

@section('content')
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Course Details for {{$course->name}}</h3>
                        <div class="card-btn pull-right">


                            <a href="#modal-dialog"  data-toggle="modal"  class="btn btn-primary btn-xs pull-right" title="click here to create new One"> <i class="fa fa-plus-circle"></i> add New </a>
                            {{--<a href="{{URL::to('/branches')}}" class="btn btn-primary btn-xs pull-right" title="Back to branch"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> Branches</a>--}}
                        </div>
                    </div>



                    <div class="modal fade" id="modal-dialog" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                {!! Form::open(array('route' => 'course-details.store','class'=>'form-horizontal','method'=>'POST','files'=>true)) !!}
                                <div class="modal-header">
                                    <h4 class="modal-title">Add New</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group row">

                                        <div class="col-md-4 no-padding">
                                            <label class="col-md-12"> Details Type <sup class="text-danger">*</sup></label>
                                            <div class="col-md-12">
                                                <input type="hidden" name="course_id" value="{{$course->id}}" />

                                                {{Form::select('detail_type',['1'=>'Overview','2'=>'Curriculum','3'=>'Feature','4'=>'FAQS'],[],['class'=>'form-control','required'=>true,'placeholder'=>'-Select one-'])}}
                                            </div>
                                        </div>

                                        <div class="col-md-4 no-padding">
                                            <label class="col-md-12"> Serial <sup class="text-danger">*</sup></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="serial" value="{{$serial+1}}" required placeholder="Serial no.">
                                            </div>
                                        </div>
                                        <div class="col-md-4 no-padding">
                                            <label class="col-md-12"> Status <sup class="text-danger">*</sup></label>
                                            <div class="col-md-12">
                                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control'])}}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12"> Title <sup class="text-danger">*</sup>:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="title" value="{{old('title')}}" required placeholder="Title">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-12"> Details :</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control textarea" rows="8" name="details" placeholder="Description"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="slide_photo" class="col-md-12 "> Photo  (optional, photo size at most 1000 X 1000 & not more than 5MB)</label>
                                            <label class="slide_upload profile-image" for="file">
                                                <img id="image_load" src="{{asset('images/default/photo.png')}}" style="width: 200px;">
                                            </label>
                                            <input id="file" style="display:none" name="photo" type="file" onchange="photoLoad(this,this.id)">
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger pull-left" data-dismiss="modal">Close</a>
                                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                </div>
                                {!! Form::close(); !!}
                            </div>
                        </div>
                    </div><!-- end modal -->



                    <div class="box-body view_uom_set">
                            <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th scope="col" width="3%">Sl</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Details Type</th>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="6%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                @foreach($courseDetails as $data)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>
                                            @if($data->detail_type==1)
                                                <span class="text-success"> Overview </span>
                                            @elseif($data->detail_type==2)
                                                <span class="text-danger"> Curriculum </span>
                                            @elseif($data->detail_type==3)
                                                <span class="text-danger"> Features </span>
                                            @elseif($data->detail_type==4)
                                                <span class="text-danger"> FAQS </span>

                                            @endif
                                        </td>

                                        <td>{{$data->serial}}</td>
                                        <td>
                                        @if($data->status==1)
                                                <span class="text-success"> <i class="fa fa-check-circle-o"></i> Active </span>
                                            @else
                                                <span class="text-danger"> <i class="fa fa-exclamation-triangle"></i> Inactive </span>
                                            @endif
                                        </td>
                                        <td data-label="Action">
                                            {{Form::open(array('route'=>['course-details.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id",'class'=>'deleteForm'))}}
                                            <a  href="#modal-dialog{{$i}}"  data-toggle="modal" class="btn btn-warning btn-xs" > <i class="fa fa-pencil-square"></i></a>
                                            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$data->id}}')"><i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>


                                    <div class="modal fade" id="modal-dialog{{$i}}" data-backdrop="static" data-keyboard="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                {!! Form::open(array('route' => ['course-details.update',$data->id],'class'=>'form-horizontal','method'=>'PUT','files'=>true)) !!}
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add New</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="form-group row">

                                                        <div class="col-md-4 no-padding">
                                                            <label class="col-md-12"> Details Type <sup class="text-danger">*</sup></label>
                                                            <div class="col-md-12">
                                                                <input type="hidden" name="course_id" value="{{$course->id}}" />

                                                                {{Form::select('detail_type',['1'=>'Overview','2'=>'Curriculum','3'=>'Feature','4'=>'FAQS'],$data->detail_type,['class'=>'form-control','required'=>true,'placeholder'=>'-Select one-'])}}
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 no-padding">
                                                            <label class="col-md-12"> Serial <sup class="text-danger">*</sup></label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control" name="serial" value="{{$data->serial}}" required placeholder="Serial no.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 no-padding">
                                                            <label class="col-md-12"> Status <sup class="text-danger">*</sup></label>
                                                            <div class="col-md-12">
                                                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],$data->status,['class'=>'form-control'])}}
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-12"> Title <sup class="text-danger">*</sup>:</label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" name="title" value="{{$data->title}}" required placeholder="Title">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-12"> Details :</label>
                                                        <div class="col-md-12">
                                                            <textarea class="form-control textarea" rows="8" name="details" placeholder="Description"><?php echo $data->details;?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <label for="slide_photo" class="col-md-12 "> Photo  (optional, photo size at most 1000 X 1000 & not more than 5MB)</label>
                                                            <label class="slide_upload profile-image" for="file{{$i}}">

                                                                @if(!empty($data->photo))

                                                                    <img id="image_load{{$i}}" src="{{asset($data->photo)}}" style="width: 200px;">
                                                                @else
                                                                    <img id="image_load{{$i}}" src="{{asset('images/default/photo.png')}}" style="width: 200px;">
                                                                @endif

                                                            </label>
                                                            <input id="file{{$i}}" style="display:none" name="photo" type="file" onchange="photoLoad(this,this.id)">
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger pull-left" data-dismiss="modal">Close</a>
                                                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                                </div>
                                                {!! Form::close(); !!}
                                            </div>
                                        </div>
                                    </div>



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
