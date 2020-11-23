<?php $__env->startSection('breadcrumb'); ?>

      <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="<?php echo e(URL::to('slider-admin')); ?>">Slider</li>
      </ol>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>



<div class="content">
        <div class="box">
        <div class="box-header">
            <h3 class="box-title">View All Slider</h3>

            <h3 class="pull-right box-title"><a href="<?php echo e(URL::to('slider-admin/create')); ?>">
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
                <?php $__currentLoopData = $alldata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($data->caption); ?></td>
                    <td>
                        <img src="<?php echo e($data->image); ?>" style="width: 100px;
    height: 100px;"/></td>

                    <td> <a href="<?php echo e($data->url); ?>" target="_blank"> Link</a> </td>
                    <td><?php echo e($data->serial); ?></td>
                    <td><?php echo e(date('d-M-Y',strtotime($data->created_at))); ?></td>

                    <td>
                        <?php if($data->status==1): ?>
                            <i class="fa fa-check btn btn-success btn-xs"> Active</i>
                        <?php else: ?>
                            <i class="fa fa-warning btn btn-warning btn-xs"> Inactive</i>
                        <?php endif; ?>

                    </td>
                    <td>
                        <?php echo e(Form::open(array('route'=>['slider-admin.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id"))); ?>


                        <a href='<?php echo e(URL::to("slider-admin/$data->id/edit")); ?>' title="Edit User" class="btn btn-info btn-xs">
                            <i class="fa fa-pencil-square"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm<?php echo e($data->id); ?>')">
                            <i class="fa fa-trash"></i>
                        </button>
                        <?php echo Form::close(); ?>

                    </td>
                </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
         <?php echo e($alldata->render()); ?>

        </div>
    </div>
</div>
    <!-- /.box -->




<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/slider/index.blade.php ENDPATH**/ ?>