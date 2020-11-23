@extends('backend.app')

@section('breadcrumb')

    <ol class="breadcrumb">
        <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('branches')}}">Branches</a></li>
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
                        All Branch List
                        <div class="box-btn pull-right">
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" > <i class="fa fa-plus"></i> Add New</a>
                        </div>

                    </div>

                    <div class="view_uom_set">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('route' => 'branches.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Branch</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Name</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Branch name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Contact</label>
                                            <div class="col-md-8 col-sm-8">
                                                <input type="text" class="form-control" name="contact" value="{{old('contact')}}" placeholder="Contact number" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Address</label>
                                            <div class="col-md-8 col-sm-8">
                                            <textarea class="form-control" name="address" rows="3" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Status</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control','required'=>true])}}
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
                            <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr class="bg-black">
                                    <th scope="col"  width="3%">Sl</th>
                                    <th scope="col" >Name</th>
                                    <th scope="col" >Branch Id</th>
                                    <th scope="col" >Contact</th>
                                    <th scope="col" width="33%">Address</th>
                                    <th scope="col" >Status</th>

                                    <th scope="col"  width="6%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                @foreach($branches as $data)
                                    <?php $i++; ?>
                                    <tr>
                                        <td data-label="SL" >{{$i}}</td>
                                        <td data-label="Name" >{{$data->name}}</td>
                                        <td data-label="Branch Id" >{{$data->branch_id}}</td>
                                        <td data-label="Contact" >{{$data->contact}}</td>
                                        <td data-label="Address" >{{$data->address}}</td>
                                        <td data-label="Status" >
                                        @if($data->status==1)
                                                <span class="text-success"> <i class="fa fa-check-circle-o"></i> Active </span>
                                            @else
                                                <span class="text-danger"> <i class="fa fa-exclamation-triangle"></i> Inactive </span>
                                            @endif
                                        </td>

                                        <td data-label="Action">

                                            <!-- #roleModal -->
                                            <div class="modal fade" id="subCourseModal{{$data->id}}" data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        {!! Form::open(array('route' => ['branches.update',$data->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Branch</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Name</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Branch name" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Contact</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <input type="text" class="form-control" name="contact" value="{{$data->contact}}" placeholder="Contact number" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Address</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <textarea class="form-control" name="address" rows="3" required><?php echo $data->address?></textarea>
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
                                            {{Form::open(array('route'=>['branches.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id",'class'=>'deleteForm'))}}
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
    </div>
    <!-- end #content -->
@endsection
