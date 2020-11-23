<?php $__env->startSection('breadcrumb'); ?>

	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Social Icon</a></li>

	</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


		<!-- begin #content -->
		<div id="content" class="content">
			
			<div class="row">
			    <div class="col-md-12  mx-auto">
                    <div class="card">
						<div class="card-header card-info">
							Social Icon
							<div class="card-btn pull-right">
								<a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" > <i class="fa fa-plus"></i> Add New</a>

							</div>

						</div>

                        <div class="view_uom_set">
							<!-- #modal-dialog -->
							<div class="modal fade" id="modal-dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<?php echo Form::open(array('route' => 'social-icon.store','class'=>'form-horizontal','method'=>'POST')); ?>

										<div class="modal-header">
											<h4 class="modal-title">Add New</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">

											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3"> Name *:</label>
												<div class="col-md-8 col-sm-8">
													<input type="text" class="form-control" name="name" value="" placeholder=" Name">
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3">Icon Class *:</label>
												<div class="col-md-8 col-sm-8">
													<input type="text" class="form-control" name="icon_name" value="" placeholder="fa fa-facebook">
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3 col-sm-3">Url *:</label>
												<div class="col-md-8 col-sm-8">
													<input type="text" class="form-control" name="url" value="" placeholder="Facebook.com">
												</div>
											</div>


										</div>
										<div class="modal-footer">
											<a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
											<button type="submit" class="btn btn-sm btn-success">Submit</button>
										</div>
										<?php echo Form::close();; ?>

									</div>
								</div>
							</div>
							
                        	<div class="card-body">
	                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
	                                <thead>
	                                    <tr>
	                                        <th width="5%">Sl</th>
	                                        <th width="40%">Name</th>
	                                        <th width="40%">Icon Class</th>
	                                        <th width="40%">Url</th>
											
											<th width="20%">Action</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                <?php $i=0; ?>
	                                <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                <?php $i++; ?>
	                                    <tr>
	                                        <td><?php echo e($i); ?></td>
	                                        <td><?php echo e($icon->name); ?></td>
	                                        <td><?php echo e($icon->icon_name); ?></td>
	                                        <td><?php echo e($icon->url); ?></td>
	                                       
	                                        
	                                        <td>

												<!-- #roleModal -->
												<div class="modal fade" id="roleModal<?php echo e($icon->id); ?>">
													<div class="modal-dialog">
														<div class="modal-content">
															<?php echo Form::open(array('route' => ['social-icon.update',$icon->id],'class'=>'form-horizontal','method'=>'PUT')); ?>

															<div class="modal-header">
																<h4 class="modal-title">Edit Icon</h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															</div>
															<div class="modal-body">

																<div class="form-group row">
																<label class="control-label col-md-3 col-sm-3"> Name *:</label>
																	<div class="col-md-8 col-sm-8">
																		<input type="text" class="form-control" name="name" value="<?php echo e($icon->name); ?>" placeholder="Name">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="control-label col-md-3 col-sm-3">Icon class *:</label>
																	<div class="col-md-8 col-sm-8">
																		<input type="text" class="form-control" name="icon_name" value="<?php echo e($icon->icon_name); ?>" placeholder="class name">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="control-label col-md-3 col-sm-3"> Url *:</label>
																	<div class="col-md-8 col-sm-8">
																		<input type="text" class="form-control" name="url" value="<?php echo e($icon->url); ?>" placeholder="facebook.com">
																	</div>
																</div>


															</div>

															<input type="hidden" value="<?php echo e($icon->id); ?>" name="id"/>
															<div class="modal-footer">
																<a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
																<button type="submit" class="btn btn-sm btn-success">Update</button>
															</div>
															<?php echo Form::close();; ?>

														</div>
													</div>
												</div>
												
											  <?php echo e(Form::open(array('route'=>['social-icon.destroy',$icon->id],'method'=>'DELETE','id'=>"deleteForm$icon->id"))); ?>

											
 

												<a  href="#roleModal<?php echo e($icon->id); ?>" class="btn btn-primary btn-xs" data-toggle="modal" > <i class="fa fa-pencil-square"></i></a>

												 <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm('deleteForm<?php echo e($icon->id); ?>')">
                                            <i class="fa fa-trash"></i>
                                        </button>

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

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/primary_info/social.blade.php ENDPATH**/ ?>