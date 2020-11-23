@extends('website.layout.app')

@section('title')
    US Tutorial Programs List | US Tutorial
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
                        <h2 class="page-title">  Programs</h2>
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->
                        <div class="breadcrumbs_wrap breadcrumb-bottom">
                            <nav class="learn-press-breadcrumb">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
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

@endsection

@section('content')

            <div class="container" style="padding-top: 80px">
                <div class="row">
                    <div class="col-md-12">
                        <article id="post-0" class="post-0 post type-post status-publish format-standard hentry page type-page">
                            <div class="entry-content">
                                <div id="lp-archive-courses" class="lp-archive-courses">
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 col-md-12 ml-auto mr-auto">--}}
                                            {{--<form method="get" name="search-course" class="learn-press-search-course-form" action="">--}}
                                                {{--<div class="form-container">--}}
                                                    {{--<div class="box-select">--}}
                                                        {{--<div class="row">--}}

                                                            {{--<div class="col-md-3 col-lg-3">--}}
                                                                {{--{{Form::select('category_id',$categories,isset($request->category_id)?$request->category_id:'',['id'=>'categoryId','class'=>'form-control','placeholder'=>'All Course'])}}--}}
                                                            {{--</div>--}}

                                                            {{--<div class="col-md-3 col-lg-3" id="loadSubCategory">--}}
                                                                {{--{{Form::select('sub_category_id',[],[],['class'=>'form-control','placeholder'=>'-Sub Category-'])}}--}}
                                                            {{--</div>--}}

                                                            {{--<div class="col-md-3 col-lg-4">--}}
                                                                {{--<input type="text" name="user_play" class="form-control" value="{{isset($request->user_play)?$request->user_play:''}}" placeholder="What do you want to learn today?">--}}
                                                            {{--</div>--}}

                                                            {{--<div class="col-md-2 col-lg-2">--}}
                                                                {{--<button type="submit" style="padding: 2px 10px">Search Course </button>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}

                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    @if(count($courses)>0)
                                    <div class="course-area section-padding course-page">

                                        <div class="learn-press-courses row">
                                            @foreach($courses as $key=>$course)
                                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 form-group">

                                                    <div class="single-item course_single_area">

                                                        <div class="single-item-image overlay-effect">
                                                            <a href="{{URL::to('/course/'.$course->name)}}" title="{{$course->name}}">
                                                                @if(!empty($course->image_small))
                                                                    <img style="width: 290px;height: auto;" src="{{asset($course->image_small)}}" class="img img-responsive" alt="{{$course->name}}" title="{{$course->name}}" />
                                                                @else
                                                                    <img style="width: 290px;height: auto;" class="img img-responsive" alt="{{$course->name}}" title="{{$course->name}}" />
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="single-item-text">
                                                            <h4><a href="{{URL::to('/course/'.$course->name)}}" title="{{$course->name}}">{{substr($course->name,0,25)}}</a></h4>
                                                            <div class="single-item-text-info">

                                                <span class="course-time">

                                                </span>
                                                            </div>

                                                            <div class="course-introduce">
                                                                <p>
                                                                    {{substr($course->overview,0,160)}}
                                                                </p>
                                                            </div>
                                                            <div class="price_student_count">

                                                <span class="course-price">

                                                <span class="price"></span>
                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="button-bottom">
                                                            <a href="{{URL::to('/course/'.$course->name)}}" class="button-default" title="{{$course->name}}">Program Details</a>
                                                        </div>
                                                    </div>

                                                </div><!--end col-md -->
                                            @endforeach

                                        </div>

                                    </div>
                                    @endif
                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </div>
                </div>
            </div><!-- #primary -->


@endsection

@section('script')
    <script type="text/javascript" src="{{asset('/public/js/jquery.min.js')}}">  </script>
    <script>
        $('#categoryId').on('change',function () {
            var categoryId=$(this).val()
            if(categoryId.length>0){
                $('#loadSubCategory').load('{{URL::to("/load-sub-category-data")}}'+'/'+categoryId)
            }else{
                $('#loadSubCategory').load('{{URL::to("/load-sub-category-data")}}'+'/'+0)
            }
        })
    </script>
    @endsection