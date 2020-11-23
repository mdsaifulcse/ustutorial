<?php $__env->startSection('content'); ?>

<div id="content" class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-danger">

                <div class="box-header with-border bg-gray-active">
                    <h4 class="box-title">Edit Testimonial
                    </h4>
                    <a href="<?php echo e(route('testimonial.index')); ?>" class="btn btn-success btn-sm pull-right"> <i class="fa fa-angle-double-left"></i> All Testimonials </a>

                </div>

                <div class="box-body ">
                    <?php echo Form::open(array('route' => ['testimonial.update',$testimonial->id],'method'=>'PUT','class'=>'form-horizontal','files'=>true)); ?>


                    <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                        <?php echo e(Form::label('Name', ' Review Person', array('class' => 'col-md-2 control-label'))); ?>

                        <div class="col-md-8">
                            <?php echo e(Form::text('name',$testimonial->name,array('class'=>'form-control','placeholder'=>'Who\'s give review','required','autofocus'))); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                        				<strong class="text-danger"><?php echo e($errors->first('name')); ?></strong>
                    			</span>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-2">
                            <?php echo e(Form::select('status', array('1' => 'Active', '2' => 'Inactive'), $testimonial->status, ['class' => 'form-control'])); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <?php echo e(Form::label('Content', ' Content', array('class' => 'col-md-2 control-label'))); ?>

                        <div class=" col-md-8 col-lg-8 ">
                            <label class="control-label"></label>

                            <textarea class="form-control textarea" name="content" placeholder="Enter Content Here" rows="5"><?php echo $testimonial->content;?></textarea>

                        </div>
                    </div>

                    <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                        <?php echo e(Form::label('Name', ' Review Program Name', array('class' => 'col-md-2 control-label'))); ?>

                        <div class="col-md-6">
                            <?php echo e(Form::text('course_name',$value=$testimonial->course_name,array('class'=>'form-control','placeholder'=>'Review Course Name','required','autofocus'))); ?>

                            <?php if($errors->has('course_name')): ?>
                                <span class="help-block">
                        				<strong class="text-danger"><?php echo e($errors->first('course_name')); ?></strong>
                    			</span>
                            <?php endif; ?>
                        </div>
                        <?php echo e(Form::label('Rating', ' Review Rating', array('class' => 'col-md-1 control-label'))); ?>

                        <div class="col-md-2">
                            <?php echo e(Form::select('rating', array('1' => '1 Start', '2' => '2 Start', '3' => '3 Start', '4' => '4 Start', '5' => '5 Start'), $testimonial->rating, ['required'=>true,'class' => 'form-control'])); ?>

                        </div>
                    </div>


                    <div class="form-group <?php echo e($errors->has('icon_photo') ? 'has-error' : ''); ?>">
                        <?php echo e(Form::label('icon_photo', 'Photo', array('class' => 'col-md-2 control-label'))); ?>

                        <div class="col-md-2">
                            <label class="upload_photo upload icon_upload" for="file">
                                <?php if(!empty($testimonial->image)): ?>
                                    <img id="image_load" src="<?php echo e(asset($testimonial->image)); ?>" style="max-width: 120px;border: 2px dashed #2783bb; cursor: pointer">
                                    <?php else: ?>
                                    <img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>" style="max-width: 120px;border: 2px dashed #2783bb; cursor: pointer">
                                    <?php endif; ?>

                                
                            </label>
                            <input type="file" id="file" style="display: none;" name="image" onchange="photoLoad(this, this.id)" />
                            <?php if($errors->has('icon_photo')): ?>
                                <span class="help-block" style="display:block">
                            <strong><?php echo e($errors->first('icon_photo')); ?></strong>
                        </span>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <?php echo e(Form::submit('Submit',array('class'=>'btn btn-md btn-warning'))); ?>

                        </div>
                    </div>

                    <?php echo Form::close(); ?>



                </div>
            </div>
        </div>
    </div>



</div> <!--end content-->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/testimonial/edit.blade.php ENDPATH**/ ?>