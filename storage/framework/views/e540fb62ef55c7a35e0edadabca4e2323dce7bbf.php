<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    <title> <?php echo $__env->yieldContent('title'); ?>  </title>
    <?php echo $__env->make('website.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="home page-template page-template-page-full-width page-template-page-full-width-php page page-id-28 kingcomposer kc-css-system woocommerce-no-js wide-layout-active header-default-style-one">


<div id="page" class="site site-wrapper wide-layout">
    <div id="educat">


        <?php echo $__env->make('website.include.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <?php echo $__env->yieldContent('page-title'); ?>



        <div id="content" class="site-content">
            <div class="page-wrapper clear">
                <div class="kc_clfw">

                </div>


                <?php echo $__env->yieldContent('content'); ?>


            </div><!-- #primary -->

        </div><!-- #content -->




        <footer class="default-footer-wrapper">

            <!--Newsletter Area Start-->



            <!--End of Newsletter Area-->
            <!--Footer Widget Area Start-->
            <?php echo $__env->make('website.include.footer-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </footer>
        <div id="back-to-top"><i class="fa fa-angle-up"></i></div>
    </div><!-- #page -->
</div>

<?php echo $__env->make('website.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('script'); ?>

</body>
</html><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/website/layout/app.blade.php ENDPATH**/ ?>