<?php $__env->startSection('title'); ?>
    Contact with US Tutorial
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
                        <?php if(Session::has('success')): ?>
                            <h3 style="text-align: center;color: #86bc42;"><i class="fa fa-check-circle"></i> <?php echo session('success'); ?></h3>
                        <?php endif; ?>

                        <!-- Start Enable Title -->
                        <h2 class="page-title">  Contact Us</h2>
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->

                        <div class="breadcrumbs_wrap breadcrumb-bottom">

                            <nav class="learn-press-breadcrumb">	<ul>
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                                    <li>Contact Us</li>
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
    <section class="kc-elm kc-css-817869 kc_row">
        <div class="kc-row-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-791875 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-132479 ">

                            <!-- Google Map Start -->
                            <div class="google-map-area">
                                <!--  Map Section -->
                                <div id="contacts" class="map-area">
                                    <div id="googleMap-930507" style="width:100%;">

                                    </div>
                                </div>
                            </div>
                            <!-- Google Map End -->

                        </div>


                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.693751878496!2d-73.90413788473145!3d40.74676377932813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f1cc31296bd%3A0x511771f5336b33ee!2s39-06%2062nd%20St%2C%20Flushing%2C%20NY%2011377!5e0!3m2!1sen!2sus!4v1592971036221!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <script>

                            $disable_mouse_scroll = false;

                            function init() {
                                var mapOptions = {
                                    zoom: 12,
                                    scrollwheel: $disable_mouse_scroll,
                                    center: new google.maps.LatLng(40.6700, -73.9400),
                                    styles: [
                                        {
                                            "featureType": "water",
                                            "elementType": "geometry",
                                            "stylers": [
                                                {
                                                    "color": "#e9e9e9"
                                                },
                                                {
                                                    "lightness": 17
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "landscape",
                                            "elementType": "geometry",
                                            "stylers": [
                                                {
                                                    "color": "#f5f5f5"
                                                },
                                                {
                                                    "lightness": 20
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "road.highway",
                                            "elementType": "geometry.fill",
                                            "stylers": [
                                                {
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 17
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "road.highway",
                                            "elementType": "geometry.stroke",
                                            "stylers": [
                                                {
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 29
                                                },
                                                {
                                                    "weight": 0.2
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "road.arterial",
                                            "elementType": "geometry",
                                            "stylers": [
                                                {
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 18
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "road.local",
                                            "elementType": "geometry",
                                            "stylers": [
                                                {
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 16
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "poi",
                                            "elementType": "geometry",
                                            "stylers": [
                                                {
                                                    "color": "#f5f5f5"
                                                },
                                                {
                                                    "lightness": 21
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "poi.park",
                                            "elementType": "geometry",
                                            "stylers": [
                                                {
                                                    "color": "#dedede"
                                                },
                                                {
                                                    "lightness": 21
                                                }
                                            ]
                                        },
                                        {
                                            "elementType": "labels.text.stroke",
                                            "stylers": [
                                                {
                                                    "visibility": "on"
                                                },
                                                {
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 16
                                                }
                                            ]
                                        },
                                        {
                                            "elementType": "labels.text.fill",
                                            "stylers": [
                                                {
                                                    "saturation": 36
                                                },
                                                {
                                                    "color": "#333333"
                                                },
                                                {
                                                    "lightness": 40
                                                }
                                            ]
                                        },
                                        {
                                            "elementType": "labels.icon",
                                            "stylers": [
                                                {
                                                    "visibility": "off"
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "transit",
                                            "elementType": "geometry",
                                            "stylers": [
                                                {
                                                    "color": "#f2f2f2"
                                                },
                                                {
                                                    "lightness": 19
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "administrative",
                                            "elementType": "geometry.fill",
                                            "stylers": [
                                                {
                                                    "color": "#fefefe"
                                                },
                                                {
                                                    "lightness": 20
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "administrative",
                                            "elementType": "geometry.stroke",
                                            "stylers": [
                                                {
                                                    "color": "#fefefe"
                                                },
                                                {
                                                    "lightness": 17
                                                },
                                                {
                                                    "weight": 1.2
                                                }
                                            ]
                                        }
                                    ]            };
                                var mapElement = document.getElementById('googleMap-930507');
                                var map = new google.maps.Map(mapElement, mapOptions);
                                var marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(40.6700, -73.9400),
                                    map: map,
                                    title: 'Snazzy!'
                                });
                            }
                            google.maps.event.addDomListener(window, 'load', init);
                        </script>



                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="kc-elm kc-css-833853 kc_row contact-form-area section-padding">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-452400 kc_col-sm-5 kc_column kc_col-sm-5">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-599262 ">

                            <h4 class="contact-title">Contact info</h4>                <!-- Post Block Body Start -->
                            <div class="contact-text">
                                <p>
                                    <span class="c-icon"><i class="zmdi-phone"></i></span>
                                    <span class="c-text"><?php echo e($info->mobile_no); ?></span>
                                </p>
                                <p>
                                    <span class="c-icon"><i class="zmdi-email"></i></span>
                                    <span class="c-text"><?php echo e($info->email); ?></span>
                                </p>
                                <p>
                                    <span class="c-icon"><i class="zmdi-pin"></i></span>
                                    <span class="c-text">
                                        <?php echo nl2br($info->address)?>
                                    </span>
                                </p>
                            </div>

                        </div>
                        <div class="kc-elm kc-css-79772 ">

                            <h4 class="contact-title">social media</h4>                <!-- Post Block Body Start -->
                            <div class="link-social">

                                <?php if(count($socialIcons)>0): ?>
                                    <?php $__currentLoopData = $socialIcons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(URL::to($icon->url)); ?>"><i class="<?php echo e($icon->icon_name); ?>"></i></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <span>No Social Icon</span>
                                <?php endif; ?>

                            </div>

                        </div>
                    </div></div><div class="kc-elm kc-css-214283 kc_col-sm-7 kc_column kc_col-sm-7">
                    <div class="kc-col-container">
                        <div class="kc-contact-form7 kc-elm kc-css-743521">
                            <h2>send your massage</h2>
                                <div class="screen-reader-response">

                                </div>
                                <?php echo Form::open(array('url' => 'user-feedback','class'=>'form-horizontal','method'=>'POST')); ?>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="wpcf7-form-control-wrap text-48">
                                                <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Name" required />
                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="wpcf7-form-control-wrap email-966">
                                                <input type="email" name="email" value="" size="40" required class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" />
                                            </span>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="">
                                                <textarea name="message" cols="40" rows="10" class="" placeholder="Message" required></textarea>
                                            </span>
                                            <input type="submit" value="SUBMIT" />
                                        </div>
                                    </div>

                                <?php echo Form::close();; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\ustutorial\resources\views/website/contact/contact-us.blade.php ENDPATH**/ ?>