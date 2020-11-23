<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Program</h3>
                        <div class="card-btn pull-right">


                            <a href="<?php echo e(URL::to('courses/create')); ?>"  class="btn btn-primary btn-xs pull-right" title="click here to create new course"> <i class="fa fa-plus-circle"></i> add New </a>
                            
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
                                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $i++; ?>
                                    <tr>
                                        <td data-label="Sl"><?php echo e($i); ?></td>
                                        <td data-label="Course"><?php echo e($data->name); ?></td>
                                        <td data-label="Day Limit"><?php echo e($data->course_duration); ?></td>
                                        <td data-label="Day Limit"><?php echo e($data->price); ?></td>
                                        <td data-label="Day Limit"><?php echo e($data->serial); ?></td>
                                        <td data-label="Status">
                                        <?php if($data->status==1): ?>
                                                <span class="text-success"> <i class="fa fa-check-circle-o"></i> Active </span>
                                            <?php else: ?>
                                                <span class="text-danger"> <i class="fa fa-exclamation-triangle"></i> Inactive </span>
                                            <?php endif; ?>
                                        </td>
                                        <td data-label="Action">
                                            <?php echo e(Form::open(array('route'=>['courses.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id",'class'=>'deleteForm'))); ?>

                                            <a  href="<?php echo e(URL::to('course-details/'.$data->id)); ?>" class="btn btn-info btn-xs" > Set Details</a>
                                            <a  href="<?php echo e(URL::to('courses/'.$data->id.'/edit')); ?>" class="btn btn-warning btn-xs" > <i class="fa fa-pencil-square"></i></a>
                                            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm<?php echo e($data->id); ?>')"><i class="fa fa-trash"></i></button>
                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/courses/index.blade.php ENDPATH**/ ?>