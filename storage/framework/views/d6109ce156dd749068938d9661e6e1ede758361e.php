<?php $__env->startSection('title'); ?>
    Edit Program Data
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo e(url('sub-course')); ?>"> Program create</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- begin #content -->
    <div id="content" class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Program <u><?php echo e($course->name); ?></u></h3>
                        <div class="box-btn pull-right">

                            <a href="<?php echo e(URL::to('courses')); ?>"  class="btn btn-primary btn-xs pull-right" title="click here to view all Program"> <i class="fa fa-list"></i> All Program </a>
                            
                        </div>
                    </div>

                    <div class="view_uom_set">
                        <!-- #modal-dialog -->

                        
                        <div class="box-body">
                            <?php echo Form::open(array('route' =>['courses.update',$course->id],'method'=>'PUT','class'=>'form-vertical','files'=>true)); ?>



                            <div class="row">
                                <div class="col-md-5 col-lg-5">
                                    <div class="form-group ">
                                        <label class="control-label">Program Name:</label>

                                        <?php echo e(Form::text('name', $value=$course->name,['class'=>'form-control','placeholder'=>'Program name','required'=>true])); ?>


                                    </div>
                                </div>

                                <div class="col-md-2 col-lg-2">
                                    <div class="form-group ">
                                        <label class="control-label">Popular Program ?</label>

                                        <?php echo e(Form::select('show_at_home', ['0'=>'No Popular Program','1'=>'Include to Popular Program'],$course->show_at_home,['class'=>'form-control','placeholder'=>'-Select one-','required'=>true])); ?>


                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2">
                                    <div class="form-group ">
                                        <label class="control-label">Program Status</label>

                                        <?php echo e(Form::select('status', ['1'=>'Active','0'=>'Inactive'],$course->status,['class'=>'form-control','required'=>true])); ?>


                                    </div>
                                </div>

                                <div class="col-md-1 col-lg-1">
                                    <div class="form-group ">
                                        <label class="control-label">serial</label>

                                        <?php echo e(Form::number('serial', $value=$course->serial,['class'=>'form-control','required'=>true])); ?>


                                    </div>
                                </div>

                            </div> <!--end row-->


                            <div class="row">
                                <div class="col-md-12 col-lg-10">
                                    <div class="form-group ">
                                        <label class="control-label">Short Overview</label>

                                        <textarea class="form-control " name="overview" placeholder="Enter overview here" rows="5"  ><?php echo $course->overview;?></textarea>

                                    </div>
                                </div>


                            </div><!--end row-->


                            <div class="row">

                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group ">
                                        <label class="control-label">Program Price:</label>

                                        <?php echo e(Form::number('price', $value=$course->price,['step'=>'any','class'=>'form-control','placeholder'=>'Program Price','required'=>false])); ?>


                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group ">
                                        <label class="control-label">Discount Price :</label>

                                        <?php echo e(Form::number('discount', $value=$course->discount,['step'=>'any','class'=>'form-control','placeholder'=>'discount amount','required'=>false])); ?>


                                    </div>
                                </div>

                                
                                    
                                        

                                        

                                    
                                

                            </div><!--end row-->

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                <div class="form-group ">
                                    <label for="file" class="slide_upload profile-image"> Photo
                                        <!--  -->
                                        <?php if($course->image!=''): ?>
                                            <img id="image_load" src="<?php echo e(asset($course->image)); ?>">

                                        <?php else: ?>

                                            <img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>">
                                        <?php endif; ?>

                                    </label>

                                        <?php echo e(Form::file('image',array('id'=>'file','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))); ?>


                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group">
                                        <label class=" control-label">&nbsp; &nbsp;</label>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>



                            <?php echo Form::close(); ?>

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

        $('#categoryId').on('change',function () {
            var categoryId=$(this).val()
            $('#loadSubCategory').load('<?php echo e(URL::to("/sub-category-data")); ?>'+'/'+categoryId)
        })

        function photoLoad(input,image_load) {
            var target_image='#'+$('#'+image_load).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/courses/edit.blade.php ENDPATH**/ ?>