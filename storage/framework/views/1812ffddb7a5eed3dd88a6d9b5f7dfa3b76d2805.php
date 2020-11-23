<?php $__env->startSection('title'); ?>
    US Tutorial Programs List | US Tutorial
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
                        <h2 class="page-title">  Programs</h2>
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->
                        <div class="breadcrumbs_wrap breadcrumb-bottom">
                            <nav class="learn-press-breadcrumb">
                                <ul>
                                    <li><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
                                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                                    <li>Programs</li>
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

            <div class="container" style="padding-top: 80px">
                <div class="row">
                    <div class="col-md-12">
                        <article id="post-0" class="post-0 post type-post status-publish format-standard hentry page type-page">
                            <div class="entry-content">
                                <div id="lp-archive-courses" class="lp-archive-courses">
                                    
                                        
                                            
                                                
                                                    
                                                        

                                                            
                                                                
                                                            

                                                            
                                                                
                                                            

                                                            
                                                                
                                                            

                                                            
                                                                
                                                            
                                                        

                                                    
                                                
                                            
                                        
                                    

                                    <?php if(count($courses)>0): ?>
                                    <div class="course-area section-padding course-page">

                                        <div class="learn-press-courses row">
                                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 form-group">

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

                                        </div>

                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </div>
                </div>
            </div><!-- #primary -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('/public/js/jquery.min.js')); ?>">  </script>
    <script>
        $('#categoryId').on('change',function () {
            var categoryId=$(this).val()
            if(categoryId.length>0){
                $('#loadSubCategory').load('<?php echo e(URL::to("/load-sub-category-data")); ?>'+'/'+categoryId)
            }else{
                $('#loadSubCategory').load('<?php echo e(URL::to("/load-sub-category-data")); ?>'+'/'+0)
            }
        })
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/website/courses/course.blade.php ENDPATH**/ ?>