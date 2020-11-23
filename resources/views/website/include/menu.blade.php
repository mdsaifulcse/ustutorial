<header  class="header-default main-header clearfix ">

    <div class="header-logo-menu  header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <div class="logo">
                        <!-- Start Logo Wrapper  -->
                        <div class="site-title">

                            <a href="{{URL::to('/')}}" title="Educat" rel="home" >


                                <img src="{{asset($info->logo)}}" alt="Educat">

                            </a>

                        </div>
                        <!-- End Logo Wrapper -->
                    </div>
                </div>
                <div class="col-md-9 d-none d-lg-block">
                    <div class="mainmenu-area">
                        <div class="mainmenu">
                            <nav>
                                <ul id="menu-main-menu" class="menu">
                                    {{--<li id="menu-item-244" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-28 current_page_item menu-item-has-children menu-item-244">--}}
                                        {{--<a href="{{URL::to('/')}}">Home</a>--}}
                                        {{--<ul class="sub-menu">--}}
                                            {{--<li id="menu-item-278" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-278"><a href="{{URL::to('/')}}">Home Two</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    <li id="menu-item-279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279"><a href="{{URL::to('/courses.html')}}">PROGRAMS</a></li>
                                    <li id="menu-item-294" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-294"><a href="{{URL::to('/contact-us.html')}}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!--Search Form-->
                        {{--<div class="search-form-area">--}}
                            {{--<div class="search-form">--}}
                                {{--<form id="search-form" action="../educat_13.html" method="GET">--}}
                                    {{--<input type="search" placeholder="Search here..." name="s" />--}}
                                    {{--<button type="submit">--}}
                                        {{--<span><i class="fa fa-search"></i></span>--}}
                                    {{--</button>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!--End of Search Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu"></div>

</header>