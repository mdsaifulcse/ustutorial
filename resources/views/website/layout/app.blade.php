<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    <title> @yield('title')  </title>
    @include('website.include.header')
</head>

<body class="home page-template page-template-page-full-width page-template-page-full-width-php page page-id-28 kingcomposer kc-css-system woocommerce-no-js wide-layout-active header-default-style-one">


<div id="page" class="site site-wrapper wide-layout">
    <div id="educat">


        @include('website.include.menu')


        @yield('page-title')



        <div id="content" class="site-content">
            <div class="page-wrapper clear">
                <div class="kc_clfw">

                </div>


                @yield('content')


            </div><!-- #primary -->

        </div><!-- #content -->




        <footer class="default-footer-wrapper">

            <!--Newsletter Area Start-->



            <!--End of Newsletter Area-->
            <!--Footer Widget Area Start-->
            @include('website.include.footer-top')

        </footer>
        <div id="back-to-top"><i class="fa fa-angle-up"></i></div>
    </div><!-- #page -->
</div>

@include('website.include.footer')

@yield('script')

</body>
</html>