<?php $__env->startSection('breadcrumb'); ?>

    <h1>
       

    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Events</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header card-info">
                        Events List
                        <div class="card-btn pull-right">
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" > <i class="fa fa-plus"></i> Add New</a>

                        </div>

                    </div>

                    <div class="view_uom_set">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog" data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <?php echo Form::open(array('route' => 'events.store','class'=>'form-horizontal','method'=>'POST','files'=>true)); ?>

                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Event</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="col-md-12"> Title <sup class="text-danger">*</sup>:</label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" required placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 no-padding">
                                                <label class="col-md-12"> Start Date <sup class="text-danger">*</sup>:</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control singleDatePicker" name="start_date" value="<?php echo e(old('start_date')); ?>" required placeholder="Start Date">
                                                </div>
                                            </div>
                                            <div class="col-md-6 no-padding">
                                                <label class="col-md-12"> End Date:</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control singleDatePicker" name="end_date" value="<?php echo e(old('end_date')); ?>" placeholder="End Date">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 no-padding">
                                                <label class="col-md-12"> Event Time <sup class="text-danger">*</sup>:</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control " name="event_time" required placeholder="Ex: 10:00 AM - 1:30 PM">
                                                </div>
                                            </div>
                                            <div class="col-md-6 no-padding">
                                                <label class="col-md-12"> Address <sup class="text-danger">*</sup>:</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control " name="address" value="<?php echo e(old('address')); ?>" required  placeholder="Address">
                                                </div>
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <label class="col-md-12"> Overview <sup class="text-danger">*</sup>:</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="3" name="overview" required placeholder="Event Overview within 150 character"><?php echo e(old('overview')); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-12"> Description :</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control textarea" rows="8" name="description" placeholder="Description"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-12"> Event Tag </label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="event_tag" value="<?php echo e(old('event_tag')); ?>" placeholder="Event tag separate by (,) comma. Ex: New event, Latest enven ">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="slide_photo" class="col-md-12 "> Photo min size (800 X 800)</label>
                                                <label class="slide_upload profile-image" for="file">
                                                    <img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>">
                                                </label>
                                                <input id="file" style="display:none" name="image" type="file" onchange="photoLoad(this,this.id)">
                                            </div>

                                            <div class="col-md-4 no-padding">
                                                <label class="col-md-12"> Event Type <sup class="text-danger">*</sup></label>
                                                <div class="col-md-12">
                                                    <?php echo e(Form::select('event_type',['1'=>'Event','2'=>'Upcoming'],[],['class'=>'form-control','required'=>true,'placeholder'=>'-Select one-'])); ?>

                                                </div>
                                            </div>
                                            <div class="col-md-4 no-padding">
                                                <label class="col-md-12"> Status <sup class="text-danger">*</sup></label>
                                                <div class="col-md-12">
                                                    <?php echo e(Form::select('status',['1'=>'Active','0'=>'Inactive'],[],['class'=>'form-control'])); ?>

                                                </div>
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
                        
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="data-table" style="text-align: center" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead >
                                    <tr >
                                        <th style="text-align: center">Sl</th>
                                        <th style="text-align: center">Title</th>
                                        <th style="text-align: center">Start Date</th>
                                        <th style="text-align: center">End Date</th>
                                        <th style="text-align: center">Time</th>
                                        <th style="text-align: center">Address</th>
                                        <th style="text-align: center">Status</th>
                                        <th style="text-align: center">Type</th>
                                        <th style="text-align: center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=0; ?>
                                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $i++; ?>
                                        <tr>
                                            <td><?php echo e($i); ?></td>
                                            <td><?php echo e($event->title); ?></td>
                                            <td><?php echo e(date('jS M, Y',strtotime($event->start_date))); ?></td>
                                            <td><?php echo e($event->end_date=='1970-01-01'?'':date('jS M, Y',strtotime($event->end_date))); ?></td>
                                            <td><?php echo e($event->event_time); ?></td>
                                            <td><?php echo e($event->address); ?></td>

                                            <td>
                                                <?php if($event->event_type==1): ?>
                                                    <i class="btn btn-info btn-xs"> Event </i>
                                                <?php elseif($event->event_type==2): ?>
                                                    <i class=" btn btn-success btn-xs"> Upcoming</i>
                                                <?php endif; ?>
                                            </td>

                                            <td>
                                                <?php if($event->status==1): ?>
                                                    <i class="fa fa-check btn btn-success btn-xs"> Active </i>
                                                    <?php else: ?>
                                                    <i class="fa fa-warning btn btn-warning btn-xs"> Inactive</i>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <!-- #corcemodel -->
                                                <div class="modal fade" id="corcemodel<?php echo e($event->id); ?>" data-backdrop="static" data-keyboard="false">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" style="text-align: left;">
                                                            <?php echo Form::open(array('route' => ['events.update',$event->id],'class'=>'form-horizontal','method'=>'PUT','files'=>true)); ?>

                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Event</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row">
                                                                    <label class="col-md-12"> Title <sup class="text-danger">*</sup>:</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" name="title" value="<?php echo e($event->title); ?>" required placeholder="Title">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <div class="col-md-6 no-padding">
                                                                        <label class="col-md-12"> Start Date *:</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control singleDatePicker"
                                                                                   value="<?php echo e(date('d-m-Y',strtotime($event->start_date))); ?>"
                                                                                   name="start_date" required placeholder="Start Date">
                                                                        </div>
                                                                    </div>
                                                                <div class="col-md-6 no-padding">
                                                                    <label class="col-md-12"> End Date *:</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control singleDatePicker"
                                                                               value="<?php echo e($event->end_date=='1970-01-01'?'':date('d-m-Y',strtotime($event->end_date))); ?>"
                                                                               name="end_date" placeholder="End Date">
                                                                    </div>
                                                                </div>
                                                                </div>


                                                                <div class="form-group row">
                                                                    <div class="col-md-6 no-padding">
                                                                        <label class="col-md-12"> Event Time <sup class="text-danger">*</sup>:</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control " name="event_time" value="<?php echo e($event->event_time); ?>" required placeholder="Ex: 10:00 AM - 1:30 PM">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 no-padding">
                                                                        <label class="col-md-12"> Address <sup class="text-danger">*</sup>:</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" class="form-control " name="address" value="<?php echo e($event->address); ?>" required  placeholder="Address">
                                                                        </div>
                                                                    </div>

                                                                </div>


                                                                <div class="form-group row">
                                                                    <label class="col-md-12"> Overview <sup class="text-danger">*</sup>:</label>
                                                                    <div class="col-md-12">
                                                                        <textarea class="form-control" rows="3" name="overview" required placeholder="Event Overview within 150 character"><?php echo e($event->overview); ?> </textarea>
                                                                    </div>
                                                                </div>


                                                                <div class="form-group row">
                                                                    <label class="col-md-12"> Description :</label>
                                                                    <div class="col-md-12">
                                                                        <textarea class="form-control textarea" rows="6" name="description" placeholder="Description"><?php echo e($event->description); ?></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-md-12"> Event Tag </label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" name="event_tag" value="<?php echo e($event->event_tag); ?>" placeholder="Event tag separate by (,) comma. Ex: New event, Latest enven ">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <label for="slide_photo" class="col-md-12 "> Photo min size (800 X 800)</label>
                                                                        <label class="slide_upload profile-image" for="file_<?php echo e($event->id); ?>">

                                                                            <?php if($event->image!=''): ?>
                                                                                <img id="image_load_<?php echo e($event->id); ?>" src="<?php echo e(asset($event->image)); ?>" class="img img-responsive img-thumbnail">
                                                                                <?php else: ?>
                                                                                <img id="image_load_<?php echo e($event->id); ?>" src="<?php echo e(asset('images/default/photo.png')); ?>" class="img img-responsive img-thumbnail">
                                                                             <?php endif; ?>

                                                                        </label>
                                                                        <input id="file_<?php echo e($event->id); ?>" style="display:none" name="image" type="file" onchange="photoLoad(this,this.id)">
                                                                    </div>

                                                                    <div class="col-md-4 no-padding">
                                                                        <label class="col-md-12"> Event Type</label>
                                                                        <div class="col-md-12">
                                                                            <?php echo e(Form::select('event_type',['1'=>'Event','2'=>'Upcoming'],$event->event_type,['class'=>'form-control','required'=>true,'placeholder'=>'-Select one-'])); ?>

                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4 no-padding">
                                                                        <label class="col-md-12"> Status</label>
                                                                        <div class="col-md-12">
                                                                            <?php echo e(Form::select('status',['1'=>'Active','0'=>'Inactive'],$event->status,['class'=>'form-control'])); ?>

                                                                        </div>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="javascript:;" class="btn btn-sm btn-danger pull-left"
                                                                   data-dismiss="modal">Close</a>
                                                                <button type="submit" class="btn btn-sm btn-success pull-right">Update</button>
                                                            </div>
                                                            <?php echo Form::close();; ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                

                                                <?php echo e(Form::open(array('route'=>['events.destroy',$event->id],'method'=>'DELETE','id'=>"deleteForm$event->id"))); ?>




                                                <a  href="#corcemodel<?php echo e($event->id); ?>" class="btn btn-primary btn-xs" data-toggle="modal" >
                                                    <i class="fa fa-pencil-square"></i></a>
                                                <button type="button" class="btn btn-danger btn-xs" onclick="return deleteConfirm
                                                        ('deleteForm<?php echo e($event->id); ?>')"><i class="fa fa-trash"></i></button>
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
    </div>
    <!-- end #content -->
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

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/backend/events/index.blade.php ENDPATH**/ ?>