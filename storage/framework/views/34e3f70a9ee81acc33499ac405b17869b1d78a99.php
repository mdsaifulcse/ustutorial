<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo e(url('courses')); ?>"> Course</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Course Details for <?php echo e($course->name); ?></h3>
                        <div class="card-btn pull-right">


                            <a href="#modal-dialog"  data-toggle="modal"  class="btn btn-primary btn-xs pull-right" title="click here to create new One"> <i class="fa fa-plus-circle"></i> add New </a>
                            
                        </div>
                    </div>



                    <div class="modal fade" id="modal-dialog" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <?php echo Form::open(array('route' => 'course-details.store','class'=>'form-horizontal','method'=>'POST','files'=>true)); ?>

                                <div class="modal-header">
                                    <h4 class="modal-title">Add New</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">

                                    <div class="form-group row">

                                        <div class="col-md-4 no-padding">
                                            <label class="col-md-12"> Details Type <sup class="text-danger">*</sup></label>
                                            <div class="col-md-12">
                                                <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>" />

                                                <?php echo e(Form::select('detail_type',['1'=>'Overview','2'=>'Curriculum','3'=>'Feature','4'=>'FAQS'],[],['class'=>'form-control','required'=>true,'placeholder'=>'-Select one-'])); ?>

                                            </div>
                                        </div>

                                        <div class="col-md-4 no-padding">
                                            <label class="col-md-12"> Serial <sup class="text-danger">*</sup></label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="serial" value="<?php echo e($serial+1); ?>" required placeholder="Serial no.">
                                            </div>
                                        </div>
                                        <div class="col-md-4 no-padding">
                                            <label class="col-md-12"> Status <sup class="text-danger">*</sup></label>
                                            <div class="col-md-12">
                                                <?php echo e(Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control'])); ?>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12"> Title <sup class="text-danger">*</sup>:</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" required placeholder="Title">
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
                                                <img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>" style="width: 200px;">
                                            </label>
                                            <input id="file" style="display:none" name="photo" type="file" onchange="photoLoad(this,this.id)">
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger pull-left" data-dismiss="modal">Close</a>
                                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                </div>
                                <?php echo Form::close();; ?>

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
                                <?php $__currentLoopData = $courseDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $i++; ?>
                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        <td><?php echo e($data->name); ?></td>
                                        <td><?php echo e($data->title); ?></td>
                                        <td>
                                            <?php if($data->detail_type==1): ?>
                                                <span class="text-success"> Overview </span>
                                            <?php elseif($data->detail_type==2): ?>
                                                <span class="text-danger"> Curriculum </span>
                                            <?php elseif($data->detail_type==3): ?>
                                                <span class="text-danger"> Features </span>
                                            <?php elseif($data->detail_type==4): ?>
                                                <span class="text-danger"> FAQS </span>

                                            <?php endif; ?>
                                        </td>

                                        <td><?php echo e($data->serial); ?></td>
                                        <td>
                                        <?php if($data->status==1): ?>
                                                <span class="text-success"> <i class="fa fa-check-circle-o"></i> Active </span>
                                            <?php else: ?>
                                                <span class="text-danger"> <i class="fa fa-exclamation-triangle"></i> Inactive </span>
                                            <?php endif; ?>
                                        </td>
                                        <td data-label="Action">
                                            <?php echo e(Form::open(array('route'=>['course-details.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id",'class'=>'deleteForm'))); ?>

                                            <a  href="#modal-dialog<?php echo e($i); ?>"  data-toggle="modal" class="btn btn-warning btn-xs" > <i class="fa fa-pencil-square"></i></a>
                                            <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm<?php echo e($data->id); ?>')"><i class="fa fa-trash"></i></button>
                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>


                                    <div class="modal fade" id="modal-dialog<?php echo e($i); ?>" data-backdrop="static" data-keyboard="false">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <?php echo Form::open(array('route' => ['course-details.update',$data->id],'class'=>'form-horizontal','method'=>'PUT','files'=>true)); ?>

                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add New</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="form-group row">

                                                        <div class="col-md-4 no-padding">
                                                            <label class="col-md-12"> Details Type <sup class="text-danger">*</sup></label>
                                                            <div class="col-md-12">
                                                                <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>" />

                                                                <?php echo e(Form::select('detail_type',['1'=>'Overview','2'=>'Curriculum','3'=>'Feature','4'=>'FAQS'],$data->detail_type,['class'=>'form-control','required'=>true,'placeholder'=>'-Select one-'])); ?>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 no-padding">
                                                            <label class="col-md-12"> Serial <sup class="text-danger">*</sup></label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control" name="serial" value="<?php echo e($data->serial); ?>" required placeholder="Serial no.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 no-padding">
                                                            <label class="col-md-12"> Status <sup class="text-danger">*</sup></label>
                                                            <div class="col-md-12">
                                                                <?php echo e(Form::select('status',['1'=>'Active','0'=>'Inactive'],$data->status,['class'=>'form-control'])); ?>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-12"> Title <sup class="text-danger">*</sup>:</label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" name="title" value="<?php echo e($data->title); ?>" required placeholder="Title">
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
                                                            <label class="slide_upload profile-image" for="file<?php echo e($i); ?>">

                                                                <?php if(!empty($data->photo)): ?>

                                                                    <img id="image_load<?php echo e($i); ?>" src="<?php echo e(asset($data->photo)); ?>" style="width: 200px;">
                                                                <?php else: ?>
                                                                    <img id="image_load<?php echo e($i); ?>" src="<?php echo e(asset('images/default/photo.png')); ?>" style="width: 200px;">
                                                                <?php endif; ?>

                                                            </label>
                                                            <input id="file<?php echo e($i); ?>" style="display:none" name="photo" type="file" onchange="photoLoad(this,this.id)">
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger pull-left" data-dismiss="modal">Close</a>
                                                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                                </div>
                                                <?php echo Form::close();; ?>

                                            </div>
                                        </div>
                                    </div>



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

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/courses-details/index.blade.php ENDPATH**/ ?>