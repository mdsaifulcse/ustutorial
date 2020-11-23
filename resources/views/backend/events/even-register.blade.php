@extends('backend.app')


@section('breadcrumb')
        <ol class="breadcrumb">
            <li><a href="{{URL::to('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>

        </ol>
  @endsection  
@section('content')
		<!-- begin #content -->
		<div id="content" class="content">

			<div class="row">
			    <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            Event Register
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
	                                        <th width="2%">Sl</th>
	                                        <th>Event</th>
	                                        <th>First Name</th>
	                                        <th>Last Name</th>
	                                        <th>Mobile</th>
	                                        <th>Email</th>
	                                        <th>Academic Qualification</th>
	                                        <th>Action</th>
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

                    ajax: '{{ URL::to("event-register/create") }}',
                    columns: [
                        { data: 'DT_RowIndex',orderable:true},
                        { data: 'title',name:'events.title'},
                        { data: 'first_name',name:'event_booked.first_name'},
                        { data: 'last_name',name:'event_booked.last_name'},
                        { data: 'mobile',name:'event_booked.mobile'},
                        { data: 'email',name:'event_booked.email'},
                        { data: 'academic_qualification',name:'event_booked.academic_qualification'},
                        { data: 'action'}
                    ]
                });

            });
        </script>
    @endsection
