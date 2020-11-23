@extends('backend.app')


@section('breadcrumb')
        <ol class="breadcrumb">
            <li><a href="{{URL::to('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
  @endsection  
@section('content')
		<!-- begin #content -->
		<div id="content" class="content">

			<div class="row">
			    <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            Subscribers
                            <div class="box-btn pull-right">
                                {{--<a href="{{URL::to('acl-permission/roles')}}" class="btn btn-primary btn-sm">ACL Roles</a>--}}
                            </div>
                        </div>

                        <div class="box-body">
                        <!--  -->
                        <div class="table-responsive ">

	                            <table id="data-table" class="table table-striped table-bordered" width="100%">
	                                <thead>
	                                    <tr>
	                                        <th width="10%">Sl</th>
	                                        <th width="30%">Email</th>
	                                        <th width="25%">Action</th>
	                                    </tr>
	                                </thead>
                                    <tbody>


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
    @section('script')
        <script>
            $(function() {
                $('#data-table').DataTable( {
                    processing: true,
                    serverSide: true,

                    ajax: '{{ URL::to("subscriber/create") }}',
                    columns: [
                        { data: 'DT_Row_Index',orderable:false},
                        { data: 'email',name:'subscriptions.email'},
                        { data: 'action'}
                    ]
                });

            });
        </script>
    @endsection
