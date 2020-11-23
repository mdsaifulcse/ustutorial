    
  <?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Slider</a></li>

    </ol>
  <?php $__env->stopSection(); ?>
   

<?php $__env->startSection('content'); ?>
<div class="content">
        <!-- general form elements --> 
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Slider</h3>

                <h3 class="pull-right box-title">
                    <a href="<?php echo e(URL::to('slider-admin')); ?>"><button type="button" class="btn btn-block btn-success btn-sm">All Slider</button></a>
                </h3>
            </div>


            <div class="box-body">
                <div class="col-md-12 " style="margin-top: 20px;">
                    <div class="row">
                        <?php echo Form::open(['route'=>'slider-admin.store','method'=>'POST','role'=>'form','data-toggle'=>'validator','class'=>'form-horizontal','files'=>'true']); ?>

                        <div class="form-group row">
                            <label for="text" class="col-md-2 control-label"><?php echo e(__('Caption')); ?></label>

                            <div class="col-md-8" >
                                <textarea id="text" type="text" class="form-control" name="caption" value="" required placeholder="Slider caption"></textarea>

                                <?php if($errors->has('caption')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('caption')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="text" class="col-md-2 control-label"><?php echo e(__('Overview')); ?></label>

                            <div class="col-md-8">
                                <textarea id="text" type="text" class="form-control" name="overview" value="" rows="5" required placeholder="Slider overview"></textarea>

                                <?php if($errors->has('overview')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('overview')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="slide_photo" class="col-md-2 control-label">Photo min size(1300 X 700) </label>
                            <div class="col-md-2">
                                <label class="slide_upload" for="file">

                                    <img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>" class="img img-responsive img-thumbnail">

                                </label>

                                <input id="file" style="display:none" required="" name="image" type="file" onchange="photoLoad(this,this.id)">
                            </div>

                            <?php echo e(Form::label('serial', 'Serial', array('class' => 'col-md-1 control-label'))); ?>

                            <div class="col-md-1">
                                <?php echo e(Form::number('serial',$value=$max,array('class'=>'form-control','placeholder'=>'Serial Number','max'=>"",'min'=>'0'))); ?>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="slide_photo" class="col-md-1 control-label"></label>

                            <?php echo e(Form::label('serial', 'Link', array('class' => 'col-md-1 control-label'))); ?>

                            <div class="col-md-4">
                                <?php echo e(Form::text('url',$value=old('url'),array('class'=>'form-control','placeholder'=>'Enter link','required'=>true))); ?>

                            </div>

                            <?php echo e(Form::label('Button Text', 'Button Text', array('class' => 'col-md-1 control-label'))); ?>

                            <div class="col-md-2">
                                <?php echo e(Form::text('button_text',$value=old('button_text'),array('class'=>'form-control','placeholder'=>'Button Text','required'=>false))); ?>

                            </div>
                        </div>


                        <div class="form-group" style="text-align: center;">
                            <div class="col-md-4 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <?php echo e(Form::close()); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script type="text/javascript">


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
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/slider/create.blade.php ENDPATH**/ ?>