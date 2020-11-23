<?php $__env->startSection('title'); ?>
    US Tutorial | US Tutorial
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <style>
        section.page__title__wrapper:before {
            background: #ef8230d1 none repeat scroll 0 0;
        }
    </style>

    <section class="page__title__wrapper text-center default-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page__title__inner">
                        <!-- Start Enable Title -->
                        <h2 class="page-title">  Program</h2>
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->
                        <div class="breadcrumbs_wrap breadcrumb-bottom">
                            <nav class="learn-press-breadcrumb">
                                <ul>
                                    <li><a href="<?php echo e(URL::to('/')); ?>">Home</a></li><li><i class="zmdi zmdi-chevron-right"></i></li><li>Program Details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-wrapper clear">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <article id="post-93" class="post-93 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-development course_tag-develop course_tag-development course_tag-learn course">
                        <div class="entry-content">
                            <div id="lp-single-course" class="lp-single-course">
                                <div id="learn-press-course" class="course-summary">
                                    <div class="course-details-area">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="course-details-content">
                                                    <div class="single-course-details">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="overlay-effect">
                                                                    <a href="javascript:void(0)" itemprop="image" class="learn-press-single-thumbnail" title="<?php echo e($course->name); ?>">
                                                                        <img width="397" height="397" src="<?php echo e(asset($course->image)); ?>" class="attachment-single_course size-single_course wp-post-image" alt="<?php echo e($course->name); ?>" title="<?php echo e($course->name); ?>" >
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-item-text ">
                                                                    <h4><?php echo e($course->name); ?></h4>
                                                                    <div class="single-item-text-info">

                                                                    </div>
                                                                    <div class="course-text-content">
                                                                        <p>
                                                                            <?php echo e($course->overview); ?>

                                                                        </p>
                                                                    </div>
                                                                    <div class="price_student_count">
                                                                        <div class="course-price">
                                                                            <span class="price"><?php echo e($course->price!=''? '$'.$course->price:''); ?> </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="time_preogress">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5> <i class="fa fa-phone-volume btn btn-warning"></i> <?php echo e($primaryInfo->mobile_no); ?> </h5>
                                                    </div>

                                                    <div class="course-duration">
                                                        <div id="learn-press-course-tabs" class="course-tabs">
                                                            <ul class="learn-press-nav-tabs course-nav-tabs">
                                                                <li class="course-nav course-nav-tab-overview active default">
                                                                    <a href="?tab=tab-overview" data-tab="#tab-overview">Overview</a>
                                                                </li>
                                                                <li class="course-nav course-nav-tab-curriculum">
                                                                    <a href="?tab=tab-curriculum" data-tab="#tab-curriculum">Curriculum</a>
                                                                </li>

                                                                <li class="course-nav course-nav-tab-reviews">
                                                                    <a href="?tab=tab-eligibility" data-tab="#tab-eligibility">FAQs</a>
                                                                </li>
                                                            </ul>

                                                            <div class="tab-content-area">
                                                                <?php if(!empty($courseDetails)): ?>
                                                                <div class="course-tab-panel-overview course-tab-panel active" id="tab-overview">
                                                                    <div class="course-description">


                                                                        <div class="panel-group" id="accordionGroupOpenO" role="tablist" aria-multiselectable="true">

                                                                            <?php $i=0;?>
                                                                            <?php $__currentLoopData = $courseDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$overview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if($overview->detail_type==1): ?>
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading" role="tab" id="headingOneO<?php echo e($i); ?>">
                                                                                    <h4 class="panel-title">
                                                                                        <a role="button" data-toggle="collapse" data-parent="#accordionGroupOpenO" href="#collapseOpenOneO<?php echo e($i); ?>" <?php if($i!=0): ?> class="collapsed" <?php endif; ?> aria-expanded="true" aria-controls="collapseOpenOneO<?php echo e($i); ?>">
                                                                                            <?php echo e($overview->title); ?>

                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="collapseOpenOneO<?php echo e($i); ?>" class="panel-collapse collapse  <?php if($i==0): ?>in show <?php endif; ?>" role="tabpanel" aria-labelledby="headingOneO<?php echo e($i); ?>">
                                                                                    <div class="panel-body">

                                                                                        <?php echo $overview->details;?>

                                                                                            <hr>
                                                                                            <?php if(!empty($overview->photo)): ?>
                                                                                                <img src="<?php echo e(asset($overview->photo)); ?>" class="img img-responsive" alt="<?php echo e($overview->title); ?>" title="<?php echo e($overview->title); ?>" />
                                                                                            <?php endif; ?>

                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- end panel-default -->
                                                                                        <?php $i+=1;?>
                                                                                <?php endif; ?>

                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                        </div><!--  end panel-group  -->
                                                                    </div>
                                                                </div><!-- end tab-overview -->

                                                                <div class="course-tab-panel-overview course-tab-panel" id="tab-curriculum">
                                                                    <div class="course-description">

                                                                        <div class="panel-group" id="accordionGroupOpenC" role="tablist" aria-multiselectable="true">

                                                                            <?php $ci=0;?>
                                                                        <?php $__currentLoopData = $courseDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ckey=>$curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                <?php if($curriculum->detail_type==2): ?>

                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading" role="tab" id="headingOneC<?php echo e($ci); ?>">
                                                                                            <h4 class="panel-title">
                                                                                                <a role="button" data-toggle="collapse" data-parent="#accordionGroupOpenC" href="#collapseOpenOneC<?php echo e($ci); ?>" <?php if($ci!=1): ?> class="collapsed" <?php endif; ?> aria-expanded="true" aria-controls="collapseOpenOneC<?php echo e($ci); ?>">
                                                                                                    <?php echo e($curriculum->title); ?>

                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div id="collapseOpenOneC<?php echo e($ci); ?>" class="panel-collapse collapse  <?php if($ci==0): ?>in show <?php endif; ?>" role="tabpanel" aria-labelledby="headingOneC<?php echo e($ci); ?>">
                                                                                            <div class="panel-body">

                                                                                                <?php echo $curriculum->details;?>
                                                                                                    <hr>
                                                                                                    <?php if(!empty($curriculum->photo)): ?>
                                                                                                        <img src="<?php echo e(asset($curriculum->photo)); ?>" class="img img-responsive" alt="<?php echo e($curriculum->title); ?>" title="<?php echo e($curriculum->title); ?>" />
                                                                                                    <?php endif; ?>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div><!-- end panel-default -->
                                                                                        <?php $ci+=1;?>
                                                                                <?php endif; ?>

                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                                        </div><!--  end panel-group  -->
                                                                    </div>

                                                                </div><!-- end tab-curriculum -->

                                                                <div class="course-tab-panel-overview course-tab-panel" id="tab-eligibility">
                                                                    <div class="course-description">

                                                                        <div class="panel-group" id="accordionGroupOpenFA" role="tablist" aria-multiselectable="true">
                                                                            <?php $fi=0;?>
                                                                            <?php $__currentLoopData = $courseDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey=>$faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if($faq->detail_type==4): ?>
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading" role="tab" id="headingOneFA<?php echo e($fi); ?>">
                                                                                            <h4 class="panel-title">
                                                                                                <a role="button" data-toggle="collapse" data-parent="#accordionGroupOpenFA" href="#collapseOpenOneFA<?php echo e($fi); ?>" <?php if($fi!=0): ?> class="collapsed" <?php endif; ?> aria-expanded="true" aria-controls="collapseOpenOneFA<?php echo e($fi); ?>">
                                                                                                    <?php echo e($faq->title); ?>

                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div id="collapseOpenOneFA<?php echo e($fi); ?>" class="panel-collapse collapse  <?php if($fi==0): ?>in show <?php endif; ?>" role="tabpanel" aria-labelledby="headingOneFA<?php echo e($fi); ?>">
                                                                                            <div class="panel-body">

                                                                                                <?php echo $faq->details;?>
                                                                                                <hr>
                                                                                                <?php if(!empty($faq->photo)): ?>
                                                                                                    <img src="<?php echo e(asset($faq->photo)); ?>" class="img img-responsive" alt="<?php echo e($faq->title); ?>" title="<?php echo e($faq->title); ?>" />
                                                                                                <?php endif; ?>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div><!-- end panel-default -->
                                                                                        <?php $fi+=1;?>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                        </div><!--  end panel-group  -->


                                                                    </div>
                                                                </div><!-- end tab-eligibility -->
                                                                <?php endif; ?>
                                                            </div><!-- end content-area -->

                                                        </div>
                                                    </div>

                                                    <div class="course_comment_area">
                                                        <div id="comments" class="comments-area">
                                                            <div class="leave-comment-form ">

                                                            </div>
                                                        </div><!-- .comments-area -->
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <div class="sidebar-widget-course">
                                                    <div class="single-sidebar-widget">
                                                        
                                                            
                                                                
                                                            
                                                                
                                                                
                                                                
                                                            
                                                        
                                                    </div>
                                                    
                                                        
                                                        
                                                            
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->
                </div>
            </div>
        </div><!-- #primary -->
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/website/courses/courseDetails.blade.php ENDPATH**/ ?>