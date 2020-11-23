@extends('website.layout.app')


@section('title')
    US tutorial | Training Center
@endsection


@section('content')


    <section data-kc-fullwidth="content" class="kc-elm kc-css-4597 kc_row">
        <div class="kc-row-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-810457 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-597833 ">

                            <div class="slider-area">
                                <div class="preview-2">
                                    @if(count($sliders)>0)
                                        <div id="nivoslider" class="slides">
                                            @foreach($sliders as $key=>$slider)
                                                <img src="{{asset($slider->image)}}" alt="" title="#htmlcaption{{$key}}"/>
                                            @endforeach
                                        </div>

                                        @foreach($sliders as $key=>$data)
                                            <div id="htmlcaption{{$key}}" class="nivo-html-caption nivo-caption">
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
                                                                                        <a class="button-default" href="{{$data->url}}" target="_blank">{{$data->button_text}}</a>
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
                                        @endforeach


                                    @endif
                                </div> <!--End preview-2-->


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="demo-class">

            <div class="freedemo-box panel " style="">

                @if(Session::has('demo-class'))
                <h5 class="text-success text-center" style="margin: 8px;margin-left: 0px;">
                    Your request has been successfully submitted, Thank you for your  Trial.
                </h5>
                @endif

                <h4 class="slider-text2 text-center" style="color: #fff;margin: 8px;margin-left: 0px;"> FREE TRIAL FORM</h4>
                <p class="cont2 dark" align="left" style="text-align: center;color: #fff;">Please enter GUARDIAN information to enroll kids</p>
                {{--<form id="homepage_slider_form" role="form" action="" method="post" novalidate="novalidate">--}}
                {!! Form::open(['url'=>'demo-class','method'=>'POST','class'=>'']) !!}
                    <fieldset>
                        <div class="form-group">
                            {{Form::text('name',$value=old('name'),['maxlength'=>30,'class'=>'form-control','required'=>true,'autocomplete'=>'off','placeholder'=>'Name'])}}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::email('email',$value=old('email'),['maxlength'=>30,'class'=>'form-control','required'=>true,'autocomplete'=>'off','placeholder'=>'Email ID'])}}

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::text('phone',$value=old('phone'),['maxlength'=>30,'class'=>'form-control','required'=>true,'autocomplete'=>'off','placeholder'=>'Phone number'])}}

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::select('course_id',$demoCourses,[],['class'=>'form-control','required'=>true,'autocomplete'=>'off','placeholder'=>'Program Interested In'])}}

                            @if ($errors->has('course_id'))
                                <span class="help-block">
                                    <strong class="text-danger">Please choose a Program</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                        <button type="submit" class="button-default" style="width: 100%;background-color: #ffffff;color: #000;font-weight: 700;font-size: 20px;">JOIN FREE TRIAL</button>
                        </div>
                    </fieldset>
                {!! Form::close() !!}
            </div>
        </div>

    </section>




@if(count($courses)>0)
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
                        {{--<style>--}}
                            {{--.kc-elm.kc-css-552880 .section-title-wrapper::after {--}}
                                {{--background: rgba(0, 0, 0, 0) url("http://demo.wphash.com/educat/wp-content/uploads/2018/05/cap-dark.jpg") no-repeat scroll 0 0;--}}
                            {{--}--}}
                        {{--</style>--}}
                        <div class="kc-elm kc-css-647363 ">
                            <div class="row">

                                @foreach($courses as $key=>$course)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 form-group">

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


                                <div class="col-md-12 col-sm-12 text-center">
                                    <a href="{{URL::to('/courses.html')}}" class="button-default button-large">
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
    @endif


    <section class="kc-elm kc-css-245965d kc_row fun-factor-area" style="padding: 0px;">
        <img src="{{asset('images/default/flow-chart.jpg')}}" style="width: 100%;">

    </section>



    @if(count($testimonials)>0)

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
                                                @foreach($testimonials as $testimonial)
                                                <div class="sin-testiImage">
                                                    <img src="{{asset($testimonial->image)}}" alt="{{$testimonial->name}}" />
                                                </div>
                                                    @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-text-slider text-center">
                                        @foreach($testimonials as $data)
                                        <div class="sin-testiText">
                                            <h2>{{$data->name}}</h2>

                                            <div class="course-rating">
                                                <div class="star-rating-review" style="">

                                                    @if($data->rating==1)
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        @elseif($data->rating==2)
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        @elseif($data->rating==3)
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        @elseif($data->rating==4)
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        @elseif($data->rating==5)
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        <i class="fa fa-star rating-color" aria-hidden="true"></i>
                                                        @endif

                                                </div>
                                                <div class="course-rating-name">
                                                    {{$data->course_name}}
                                                </div>

                                            </div>


                                            <div class="review-content">
                                                <?php echo $data->content ;?>
                                            </div>

                                        </div>


                                            @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection


@section('script')

@endsection
