<?php $__env->startSection('breadcrumb'); ?>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>

        </ol>
  <?php $__env->stopSection(); ?>  
<?php $__env->startSection('content'); ?>
		<!-- begin #content -->
		<div id="content" class="content">

			<div class="row">
			    <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            Event Register
                            <div class="box-btn pull-right">
                                
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
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script>
            $(function() {
                $('#data-table').DataTable( {
                    processing: true,
                    serverSide: true,

                    ajax: '<?php echo e(URL::to("event-register/create")); ?>',
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
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/events/even-register.blade.php ENDPATH**/ ?>