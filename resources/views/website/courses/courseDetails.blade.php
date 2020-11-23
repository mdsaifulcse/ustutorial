@extends('website.layout.app')

@section('title')
    US Tutorial | US Tutorial
@endsection

@section('page-title')
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
                                    <li><a href="{{URL::to('/')}}">Home</a></li><li><i class="zmdi zmdi-chevron-right"></i></li><li>Program Details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')

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
                                                                    <a href="javascript:void(0)" itemprop="image" class="learn-press-single-thumbnail" title="{{$course->name}}">
                                                                        <img width="397" height="397" src="{{asset($course->image)}}" class="attachment-single_course size-single_course wp-post-image" alt="{{$course->name}}" title="{{$course->name}}" >
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="single-item-text ">
                                                                    <h4>{{$course->name}}</h4>
                                                                    <div class="single-item-text-info">

                                                                    </div>
                                                                    <div class="course-text-content">
                                                                        <p>
                                                                            {{$course->overview}}
                                                                        </p>
                                                                    </div>
                                                                    <div class="price_student_count">
                                                                        <div class="course-price">
                                                                            <span class="price">{{$course->price!=''? '$'.$course->price:''}} </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="time_preogress">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h5> <i class="fa fa-phone-volume btn btn-warning"></i> {{$primaryInfo->mobile_no}} </h5>
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
                                                                @if(!empty($courseDetails))
                                                                <div class="course-tab-panel-overview course-tab-panel active" id="tab-overview">
                                                                    <div class="course-description">


                                                                        <div class="panel-group" id="accordionGroupOpenO" role="tablist" aria-multiselectable="true">

                                                                            <?php $i=0;?>
                                                                            @foreach($courseDetails as $key=>$overview)
                                                                                @if($overview->detail_type==1)
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading" role="tab" id="headingOneO{{$i}}">
                                                                                    <h4 class="panel-title">
                                                                                        <a role="button" data-toggle="collapse" data-parent="#accordionGroupOpenO" href="#collapseOpenOneO{{$i}}" @if($i!=0) class="collapsed" @endif aria-expanded="true" aria-controls="collapseOpenOneO{{$i}}">
                                                                                            {{$overview->title}}
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="collapseOpenOneO{{$i}}" class="panel-collapse collapse  @if($i==0)in show @endif" role="tabpanel" aria-labelledby="headingOneO{{$i}}">
                                                                                    <div class="panel-body">

                                                                                        <?php echo $overview->details;?>

                                                                                            <hr>
                                                                                            @if(!empty($overview->photo))
                                                                                                <img src="{{asset($overview->photo)}}" class="img img-responsive" alt="{{$overview->title}}" title="{{$overview->title}}" />
                                                                                            @endif

                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- end panel-default -->
                                                                                        <?php $i+=1;?>
                                                                                @endif

                                                                                @endforeach

                                                                        </div><!--  end panel-group  -->
                                                                    </div>
                                                                </div><!-- end tab-overview -->

                                                                <div class="course-tab-panel-overview course-tab-panel" id="tab-curriculum">
                                                                    <div class="course-description">

                                                                        <div class="panel-group" id="accordionGroupOpenC" role="tablist" aria-multiselectable="true">

                                                                            <?php $ci=0;?>
                                                                        @foreach($courseDetails as $ckey=>$curriculum)

                                                                                @if($curriculum->detail_type==2)

                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading" role="tab" id="headingOneC{{$ci}}">
                                                                                            <h4 class="panel-title">
                                                                                                <a role="button" data-toggle="collapse" data-parent="#accordionGroupOpenC" href="#collapseOpenOneC{{$ci}}" @if($ci!=1) class="collapsed" @endif aria-expanded="true" aria-controls="collapseOpenOneC{{$ci}}">
                                                                                                    {{$curriculum->title}}
                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div id="collapseOpenOneC{{$ci}}" class="panel-collapse collapse  @if($ci==0)in show @endif" role="tabpanel" aria-labelledby="headingOneC{{$ci}}">
                                                                                            <div class="panel-body">

                                                                                                <?php echo $curriculum->details;?>
                                                                                                    <hr>
                                                                                                    @if(!empty($curriculum->photo))
                                                                                                        <img src="{{asset($curriculum->photo)}}" class="img img-responsive" alt="{{$curriculum->title}}" title="{{$curriculum->title}}" />
                                                                                                    @endif

                                                                                            </div>
                                                                                        </div>
                                                                                    </div><!-- end panel-default -->
                                                                                        <?php $ci+=1;?>
                                                                                @endif

                                                                            @endforeach


                                                                        </div><!--  end panel-group  -->
                                                                    </div>

                                                                </div><!-- end tab-curriculum -->

                                                                <div class="course-tab-panel-overview course-tab-panel" id="tab-eligibility">
                                                                    <div class="course-description">

                                                                        <div class="panel-group" id="accordionGroupOpenFA" role="tablist" aria-multiselectable="true">
                                                                            <?php $fi=0;?>
                                                                            @foreach($courseDetails as $fkey=>$faq)
                                                                                @if($faq->detail_type==4)
                                                                                    <div class="panel panel-default">
                                                                                        <div class="panel-heading" role="tab" id="headingOneFA{{$fi}}">
                                                                                            <h4 class="panel-title">
                                                                                                <a role="button" data-toggle="collapse" data-parent="#accordionGroupOpenFA" href="#collapseOpenOneFA{{$fi}}" @if($fi!=0) class="collapsed" @endif aria-expanded="true" aria-controls="collapseOpenOneFA{{$fi}}">
                                                                                                    {{$faq->title}}
                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div id="collapseOpenOneFA{{$fi}}" class="panel-collapse collapse  @if($fi==0)in show @endif" role="tabpanel" aria-labelledby="headingOneFA{{$fi}}">
                                                                                            <div class="panel-body">

                                                                                                <?php echo $faq->details;?>
                                                                                                <hr>
                                                                                                @if(!empty($faq->photo))
                                                                                                    <img src="{{asset($faq->photo)}}" class="img img-responsive" alt="{{$faq->title}}" title="{{$faq->title}}" />
                                                                                                @endif

                                                                                            </div>
                                                                                        </div>
                                                                                    </div><!-- end panel-default -->
                                                                                        <?php $fi+=1;?>
                                                                                @endif
                                                                            @endforeach

                                                                        </div><!--  end panel-group  -->


                                                                    </div>
                                                                </div><!-- end tab-eligibility -->
                                                                @endif
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
                                                        {{--<div class="tution-wrapper">--}}
                                                            {{--<div class="tutor-image">--}}
                                                                {{--<img alt="User Avatar" src="http://0.gravatar.com/avatar/c69c192ed037f0ecb74348a2bd06bdda?s=96&amp;d=mm&amp;r=g" class="avatar avatar-96 photo" height="96" width="96"></div>--}}
                                                            {{--<div class="single-teacher-text">--}}
                                                                {{--<h3><a href="http://demo.wphash.com/educat/profile/educat/">Zenaul Islam</a></h3>--}}
                                                                {{--<h4 class="degignation">Professor</h4>--}}
                                                                {{--<p>There are mvarians of sages of Lorem Ipsum available, but the mrity a have suffealteration in soe orm, by injected</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    </div>
                                                    {{--<div class="single-sidebar-widget">--}}
                                                        {{--<h4 class="title">Course Tags</h4>--}}
                                                        {{--<ul class="tags">--}}
                                                            {{--<li><a href="http://demo.wphash.com/educat/course-tag/develop/" rel="tag">Develop</a></li><li><a href="http://demo.wphash.com/educat/course-tag/development/" rel="tag">Development</a></li><li><a href="http://demo.wphash.com/educat/course-tag/learn/" rel="tag">Learn</a></li>	                            </ul>--}}
                                                    {{--</div>--}}

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


@endsection