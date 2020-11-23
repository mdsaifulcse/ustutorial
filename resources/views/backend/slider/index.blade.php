@extends('backend.app')

@section('breadcrumb')

      <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="{{URL::to('slider-admin')}}">Slider</li>
      </ol>

@endsection


@section('content')



<div class="content">
        <div class="box">
        <div class="box-header">
            <h3 class="box-title">View All Slider</h3>

            <h3 class="pull-right box-title"><a href="{{URL::to('slider-admin/create')}}">
                    <button type="button" class="btn btn-success">Create Slider</button>
                </a></h3>

        </div>

        <div class="box-body table-responsive">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Caption</th>
                    <th>image</th>
                    <th>Link</th>
                    <th>Serial</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php $i=1; ?>
                @foreach($alldata as $data)

                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$data->caption}}</td>
                    <td>
                        <img src="{{$data->image}}" style="width: 100px;
    height: 100px;"/></td>

                    <td> <a href="{{$data->url}}" target="_blank"> Link</a> </td>
                    <td>{{$data->serial}}</td>
                    <td>{{date('d-M-Y',strtotime($data->created_at))}}</td>

                    <td>
                        @if($data->status==1)
                            <i class="fa fa-check btn btn-success btn-xs"> Active</i>
                        @else
                            <i class="fa fa-warning btn btn-warning btn-xs"> Inactive</i>
                        @endif

                    </td>
                    <td>
                        {{Form::open(array('route'=>['slider-admin.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id"))}}

                        <a href='{{URL::to("slider-admin/$data->id/edit")}}' title="Edit User" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil-square"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm{{$data->id}}')">
                            <i class="fa fa-trash"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>

                    @endforeach





                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
         {{$alldata->render()}}
        </div>
    </div>
</div>
    <!-- /.box -->




@endsection
