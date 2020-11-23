<?php $__env->startSection('content'); ?>

	<div id="content" class="content">

		<div class="row">
			<div class="col-lg-12">
				<div class="box box-danger">

					<div class="box-header with-border bg-gray-active">
						<h4 class="box-title">Create New  Testimonial</h4>
						
					</div>

					<div class="box-body ">
						<?php echo Form::open(array('route' => 'testimonial.store','method'=>'POST','class'=>'form-horizontal','files'=>true)); ?>


						<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
							<?php echo e(Form::label('Name', ' Review Person', array('class' => 'col-md-2 control-label'))); ?>

							<div class="col-md-6">
								<?php echo e(Form::text('name',$value=old('name'),array('class'=>'form-control','placeholder'=>'Who\'s give review','required','autofocus'))); ?>

								<?php if($errors->has('name')): ?>
								<span class="help-block">
                        				<strong class="text-danger"><?php echo e($errors->first('name')); ?></strong>
                    			</span>
								<?php endif; ?>
							</div>
							<div class="col-md-2">
								<?php echo e(Form::select('status', array('1' => 'Active', '2' => 'Inactive'), '1', ['class' => 'form-control'])); ?>

							</div>
						</div>

						<div class="form-group">
							<?php echo e(Form::label('Content', ' Content', array('class' => 'col-md-2 control-label'))); ?>

							<div class=" col-md-8 col-lg-8 ">
								<label class="control-label"></label>

								<textarea class="form-control textarea" name="content" placeholder="Enter Content Here" rows="5" value="" ></textarea>

							</div>
						</div>


						<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
							<?php echo e(Form::label('Name', ' Review Program Name', array('class' => 'col-md-2 control-label'))); ?>

							<div class="col-md-6">
								<?php echo e(Form::text('course_name',$value=old('course_name'),array('class'=>'form-control','placeholder'=>'Review Course Name','required','autofocus'))); ?>

								<?php if($errors->has('course_name')): ?>
									<span class="help-block">
                        				<strong class="text-danger"><?php echo e($errors->first('course_name')); ?></strong>
                    			</span>
								<?php endif; ?>
							</div>
							<?php echo e(Form::label('Name', ' Review Rating', array('class' => 'col-md-1 control-label'))); ?>

							<div class="col-md-2">
								<?php echo e(Form::select('rating', array('1' => '1 Start', '2' => '2 Start', '3' => '3 Start', '4' => '4 Start', '5' => '5 Start'), '', ['required','class' => 'form-control'])); ?>

							</div>
						</div>


						<div class="form-group <?php echo e($errors->has('icon_photo') ? 'has-error' : ''); ?>">
							<?php echo e(Form::label('icon_photo', 'Photo', array('class' => 'col-md-2 control-label'))); ?>

							<div class="col-md-2">
								<label class="upload_photo upload icon_upload" for="file">
									<!--  -->
									<img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>" style="max-width: 120px;border: 2px dashed #2783bb; cursor: pointer">
									
								</label>
								<input type="file" id="file" style="display: none;" name="image" onchange="photoLoad(this, this.id)" />
								<?php if($errors->has('icon_photo')): ?>
									<span class="help-block" style="display:block">
                            <strong><?php echo e($errors->first('icon_photo')); ?></strong>
                        </span>
								<?php endif; ?>
							</div>
							
								
							
							
								
								
							
                            <?php $max=$max_serial+1; ?>
							<div class="col-md-2">
								<?php echo e(Form::number('serial_num',$max, ['min'=>'1','max'=>$max,'class' => 'form-control','required'])); ?>

								<span>Serial</span>
							</div>
						</div>

						
							
							
								
							


							
							
								
							
						

						<div class="form-group">
							<div class="col-md-10 col-md-offset-2">
								<?php echo e(Form::submit('Submit',array('class'=>'btn btn-lg btn-info'))); ?>

							</div>
						</div>

						<?php echo Form::close(); ?>



					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="box box-danger">

					<div class="box-header with-border bg-gray-active">
						<h4 class="box-title">All Testimonials
						</h4>

					</div>

					<div class="box-body table-responsive">

						<table class="table table-striped table-hover table-bordered center_table" id="my_table">
							<thead>
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Photo</th>
								<th>Status</th>
								<th colspan="2">Action</th>
							</tr>
							</thead>
							<tbody>
                            <?php $i=1; ?>
							<?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($i++); ?></td>
									<td><?php echo e($data->name); ?></td>
									<td><?php if($data->image!=null): ?>
											<img width="40px" class="img-responsive" src='<?php echo e(asset("$data->image")); ?>' alt="<?php echo e($data->name); ?>">
										<?php endif; ?>
									</td>
									<td>
										<?php if($data->status==1): ?>
											<i class="fa fa-check btn btn-success btn-xs"> Active</i>
										<?php else: ?>
											<i class="fa fa-warning btn btn-warning btn-xs"> Inactive</i>
										<?php endif; ?>

									</td>
									<td>
										<?php echo Form::open(array('route' => ['testimonial.destroy',$data->id],'method'=>'DELETE','id'=>"deleteForm$data->id")); ?>


										<a href='<?php echo e(URL::to("testimonial/$data->id").'/edit'); ?>' title="Edit Testimonial information" class="btn btn-warning btn-sm">
											<i class="fa fa-pencil-square"></i>
										</a>
										<button type="button" class="btn btn-sm btn-danger" onclick='return deleteConfirm("deleteForm<?php echo e($data->id); ?>")'><i class="fa fa-trash"></i></button>
										<?php echo Form::close(); ?>


									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						<div class="pull-right">
							<?php echo e($allData->render()); ?>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div> <!--end content-->



<?php $__env->stopSection(); ?>


<script>
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

<script type="text/javascript">

    function deleteConfirm(){
        var con= confirm("Do you want to delete?");
        if(con){
            return true;
        }else
            return false;
    }
</script>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/testimonial/index.blade.php ENDPATH**/ ?>