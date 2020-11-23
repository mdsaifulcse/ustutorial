@extends('website.layout.app')

@section('title')
    All Events | Tekblock
@endsection

@section('page-title')

    <style>
        .form-control{
            height: auto !important;
            padding: 10px !important;
            border-radius: 0px;
        }
    </style>


    <section class="page__title__wrapper text-center default-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page__title__inner">
                        <!-- Start Enable Title -->
                        <h2 class="page-title">  Events</h2>
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->
                        <div class="breadcrumbs_wrap breadcrumb-bottom">
                            <nav class="learn-press-breadcrumb">
                                <ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                                    <li>Events</li>
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

                                    <div class="course-area section-padding course-page">

                                        <div class="learn-press-courses row">
                                            @if(count($events)>0)
                                                @foreach($events as $key=>$event)
                                                    <div class="col-md-4 col-lg-4 col-sm-6">
                                                        <div class="single-event-item">
                                                            <div class="single-event-image">
                                                                <a href="{{URL::to('event/'.$event->url)}}">
                                                                    @if(!empty($event->image))
                                                                        <img src="{{asset($event->image)}}" class="img-responsive " alt="{{$event->title}}"
                                                                             title="{{$event->title}}" />
                                                                    @else
                                                                        <img  src="{{asset('/images/default/photo.png')}}" class="img-responsive " alt="{{$event->title}}"
                                                                             title="{{$event->title}}" />
                                                                    @endif
                                                                    <span>
                                                            <span>
                                                                {{date('d',strtotime($event->start_date))}}
                                                            </span>
                                                                        {{date('M',strtotime($event->start_date))}}
                                                        </span>
                                                                </a>
                                                            </div>
                                                            <div class="single-event-text">
                                                                <h3><a href="{{URL::to('event/'.$event->url)}}" title="{{$event->title}}">{{substr($event->title,0,22)}}</a></h3>
                                                                <div class="single-item-comment-view">
                                                                    <span><i class="zmdi zmdi-time"></i>{{$event->event_time}}</span><span><i class="zmdi zmdi-pin"></i>{{$event->address}}</span>
                                                                </div>
                                                                <p>{{substr($event->overview,0,125)}}</p>
                                                                <a class="button-default" href="{{URL::to('event/'.$event->url)}}">Learn Now</a>  </div>
                                                        </div>

                                                    </div> <!-- end col-md4-->
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