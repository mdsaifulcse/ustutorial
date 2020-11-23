<?php $__env->startSection('title'); ?>
    US tutorial | Training Center
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


    <section data-kc-fullwidth="content" class="kc-elm kc-css-4597 kc_row">
        <div class="kc-row-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-810457 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-597833 ">

                            <div class="slider-area">
                                <div class="preview-2">
                                    <?php if(count($sliders)>0): ?>
                                        <div id="nivoslider" class="slides">
                                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <img src="<?php echo e(asset($slider->image)); ?>" alt="" title="#htmlcaption<?php echo e($key); ?>"/>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>

                                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div id="htmlcaption<?php echo e($key); ?>" class="nivo-html-caption nivo-caption">
                                                <div class="banner-content slider-1">
                                                    <section class="kc-elm kc-css-689865 kc_row">
                                                        <div class="kc-row-container  kc-container">
                                                            <div class="kc-wrap-columns">
                                                                <div class="kc-elm kc-css-482207 kc_column kc_col-sm-12">
                                                                    <div class="kc-col-container">

                                                                        <div class="kc-elm kc-css-155 ">

                                                                            <div class="text-content-wrapper">
                                                                                <div class="text-content">
                                                                                    <h1 class="title1 wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="0s"> <?php echo nl2br($data->caption)?> </h1>
                                                                                    <p class="sub-title wow fadeInUp hidden-sm hidden-xs" data-wow-duration="2900ms" data-wow-delay=".5s">
                                                                                        <?php echo nl2br($data->overview)?>
                                                                                    </p>
                                                                                    <div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
                                                                                        <a class="button-default" href="<?php echo e($data->url); ?>" target="_blank"><?php echo e($data->button_text); ?></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    <?php endif; ?>
                                </div> <!--End preview-2-->


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="demo-class">

            <div class="freedemo-box panel " style="">

                <?php if(Session::has('demo-class')): ?>
                <h5 class="text-success text-center" style="margin: 8px;margin-left: 0px;">
                    Your request has been successfully submitted, Thank you for your  Trial.
                </h5>
                <?php endif; ?>

                <h4 class="slider-text2 text-center" style="color: #fff;margin: 8px;margin-left: 0px;"> FREE TRIAL FORM</h4>
                <p class="cont2 dark" align="left" style="text-align: center;color: #fff;">Please enter GUARDIAN information to enroll kids</p>
                
                <?php echo Form::open(['url'=>'demo-class','method'=>'POST','class'=>'']); ?>

                    <fieldset>
                        <div class="form-group">
                            <?php echo e(Form::text('name',$value=old('name'),['maxlength'=>30,'class'=>'form-control','required'=>true,'autocomplete'=>'off','placeholder'=>'Name'])); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::email('email',$value=old('email'),['maxlength'=>30,'class'=>'form-control','required'=>true,'autocomplete'=>'off','placeholder'=>'Email ID'])); ?>


                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::text('phone',$value=old('phone'),['maxlength'=>30,'class'=>'form-control','required'=>true,'autocomplete'=>'off','placeholder'=>'Phone number'])); ?>


                            <?php if($errors->has('phone')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('phone')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo e(Form::select('course_id',$demoCourses,[],['class'=>'form-control','required'=>true,'autocomplete'=>'off','placeholder'=>'Program Interested In'])); ?>


                            <?php if($errors->has('course_id')): ?>
                                <span class="help-block">
                                    <strong class="text-danger">Please choose a Program</strong>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                        <button type="submit" class="button-default" style="width: 100%;background-color: #ffffff;color: #000;font-weight: 700;font-size: 20px;">JOIN FREE TRIAL</button>
                        </div>
                    </fieldset>
                <?php echo Form::close(); ?>

            </div>
        </div>

    </section>




<?php if(count($courses)>0): ?>
    <section class="kc-elm kc-css-166452 kc_row course-area section-padding space_zero">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-824480 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-552880 ">
                            <div class="section-title-wrapper text-center">
                                <div class="section-title">
                                    <h3>POPULAR PROGRAMS</h3>
                                </div>
                            </div>
                        </div>
                        
                            
                                
                            
                        
                        <div class="kc-elm kc-css-647363 ">
                            <div class="row">

                                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 form-group">

                                    <div class="single-item course_single_area">

                                        <div class="single-item-image overlay-effect">
                                            <a href="<?php echo e(URL::to('/course/'.$course->name)); ?>" title="<?php echo e($course->name); ?>">
                                                <?php if(!empty($course->image_small)): ?>
                                                    <img style="width: 290px;height: auto;" src="<?php echo e(asset($course->image_small)); ?>" class="img img-responsive" alt="<?php echo e($course->name); ?>" title="<?php echo e($course->name); ?>" />
                                                <?php else: ?>
                                                    <img style="width: 290px;height: auto;" class="img img-responsive" alt="<?php echo e($course->name); ?>" title="<?php echo e($course->name); ?>" />
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="single-item-text">
                                            <h4><a href="<?php echo e(URL::to('/course/'.$course->name)); ?>" title="<?php echo e($course->name); ?>"><?php echo e(substr($course->name,0,25)); ?></a></h4>
                                            <div class="single-item-text-info">

                                                <span class="course-time">

                                                </span>
                                            </div>

                                            <div class="course-introduce">
                                                <p>
                                                    <?php echo e(substr($course->overview,0,160)); ?>

                                                </p>
                                            </div>
                                            <div class="price_student_count">

                                                <span class="course-price">

                                                <span class="price"></span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="button-bottom">
                                            <a href="<?php echo e(URL::to('/course/'.$course->name)); ?>" class="button-default" title="<?php echo e($course->name); ?>">Program Details</a>
                                        </div>
                                    </div>

                                </div><!--end col-md -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <div class="col-md-12 col-sm-12 text-center">
                                    <a href="<?php echo e(URL::to('/courses.html')); ?>" class="button-default button-large">
                                        Browse All Programs<i class="zmdi zmdi-chevron-right"></i>
                                    </a>
                                </div>
                            </div><!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <section class="kc-elm kc-css-245965d kc_row fun-factor-area" style="padding: 0px;">
        <img src="<?php echo e(asset('images/default/flow-chart.jpg')); ?>" style="width: 100%;">

    </section>



    <?php if(count($testimonials)>0): ?>

    <section class="kc-elm kc-css-281108 kc_row testimonial-area">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-49547 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-193618 ">
                            <div class="row">
                                <div class="col-lg-12 col-md-10 col-sm-10 ml-auto mr-auto">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-8 ml-auto mr-auto">
                                            <div class="testimonial-image-slider text-center">
                                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="sin-testiImage">
                                                    <img src="<?php echo e(asset($testimonial->image)); ?>" alt="<?php echo e($testimonial->name); ?>" />
                                                </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-text-slider text-center">
                                        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="sin-testiText">
                                            <h2><?php echo e($data->name); ?></h2>

                                            <div class="course-rating">
                                                <div class="star-rating-review" style="">

                                                    <?php if($data->rating==1): ?>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <?php elseif($data->rating==2): ?>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <?php elseif($data->rating==3): ?>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <?php elseif($data->rating==4): ?>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <?php elseif($data->rating==5): ?>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <?php endif; ?>

                                                </div>
                                                <div class="course-rating-name">
                                                    <?php echo e($data->course_name); ?>

                                                </div>

                                            </div>


                                            <div class="review-content">
                                                <?php echo $data->content ;?>
                                            </div>

                                        </div>


                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/website/home/index.blade.php ENDPATH**/ ?>