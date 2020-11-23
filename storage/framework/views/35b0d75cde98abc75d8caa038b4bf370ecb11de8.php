<?php $__env->startSection('breadcrumb'); ?>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
  <?php $__env->stopSection(); ?>  
<?php $__env->startSection('content'); ?>
		<!-- begin #content -->
		<div id="content" class="content">

			<div class="row">
			    <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            Subscribers
                            <div class="box-btn pull-right">
                                
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
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script>
            $(function() {
                $('#data-table').DataTable( {
                    processing: true,
                    serverSide: true,

                    ajax: '<?php echo e(URL::to("subscriber/create")); ?>',
                    columns: [
                        { data: 'DT_Row_Index',orderable:false},
                        { data: 'email',name:'subscriptions.email'},
                        { data: 'action'}
                    ]
                });

            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/subscriber/index.blade.php ENDPATH**/ ?>