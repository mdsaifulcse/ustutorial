@extends('website.layout.app')

@section('title')
    {{$singleEvent->title}} | Tekblock
@endsection

@section('page-title')

    <section class="page__title__wrapper text-center default-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page__title__inner">
                        <!-- Start Enable Title -->
                        <h2 class="page-title">  Event Details</h2>
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->
                        <div class="breadcrumbs_wrap breadcrumb-bottom">
                            <nav class="learn-press-breadcrumb">	<ul>
                                    <li><a href="{{URL::to('/')}}">Home</a></li><li><i class="zmdi zmdi-chevron-right"></i></li><li>Event</li>	</ul>
                            </nav>						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <div id="content" class="site-content">
        <div class="event-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="event-details-content">
                            @if(Session::has('success'))
                            <h5 class="text-success text-center"><i class="fa fa-check"></i> Your Application Successfully Submit</h5>
                                @elseif(Session::has('evenExists'))
                                <h5 class="text-warning text-center"><i class="fa fa-warning"></i> Your event application already submited </h5>
                            @endif
                            <h5 class="text-center"><a href="javascript:void(0)" class="btn btn-danger btn-md" data-toggle="modal" data-target="#eventModal"> Apply Now </a></h5>
                            <div class="single-event-item">
                                <div class="single-event-image">
                                    <a href="{{URL::to('/event/'.$singleEvent->url)}}">
                                        @if(!empty($singleEvent->image))
                                            <img src="{{asset($singleEvent->image)}}" class="img-responsive " alt="{{$singleEvent->title}}"
                                                 title="{{$singleEvent->title}}" />
                                        @else
                                            <img src="{{asset('/images/default/photo.png')}}" class="img-responsive " alt="{{$singleEvent->title}}"
                                                 title="{{$singleEvent->title}}" />
                                        @endif
                                        <span>
                                            <span>
                                                {{date('d',strtotime($singleEvent->start_date))}}
                                            </span>
                                            {{date('M',strtotime($singleEvent->start_date))}}
                                        </span>
                                    </a>
                                </div>
                                <div class="single-event-text">
                                    <h3>{{$singleEvent->title}}</h3>

                                    @if($singleEvent->end_date!='')
                                        <div class="single-item-comment-view">
                                            <span><i class="fa fa-calendar  fa-3x" aria-hidden="true"></i> {{date('d-M-Y',strtotime($singleEvent->start_date))}}</span> To &nbsp; &nbsp;<span>  {{date('d-M-Y',strtotime($singleEvent->end_date))}} </span>
                                        </div> <br>
                                    @endif

                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-time"></i> {{$singleEvent->event_time}}</span>
                                        <span><i class="zmdi zmdi-pin"></i>{{$singleEvent->address}}</span>
                                    </div>

                                    <div class="event_description">
                                        <?php echo $singleEvent->overview?>
                                    </div>
                                    <hr>
                                    <div class="event_description">
                                        <?php echo $singleEvent->description?>
                                    </div>
                                </div>
                            </div>

                            {{--<div class="comments">--}}
                                {{--<div id="comments" class="comments-area">--}}
                                    {{--<div class="leave-comment-form margin_none">--}}
                                        {{--<div id="respond" class="comment-respond">--}}
                                            {{--<h4 class="comment-title title comment-reply-title">Leave a Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/educat/educat_event/there-are-many-variaons/#respond" style="display:none;">Cancel reply</a></small></h4><form action="http://demo.wphash.com/educat/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate=""><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><textarea id="comment" name="comment" placeholder="Comment *" required="required"></textarea><div class="input_half left"><input id="author" name="author" type="text" placeholder=" Your Name * " value="" required="required"></div>--}}
                                                {{--<div class="input_half right"><input id="email" name="email" class="input_half" placeholder=" Your Email * " type="text" value="" required="required"></div>--}}
                                                {{--<input id="url" name="url" placeholder=" Your Website " type="text" value="">--}}
                                                {{--<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>--}}
                                                {{--<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit Comment"> <input type="hidden" name="comment_post_ID" value="125" id="comment_post_ID">--}}
                                                    {{--<input type="hidden" name="comment_parent" id="comment_parent" value="0">--}}
                                                {{--</p></form>	</div><!-- #respond -->--}}
                                    {{--</div>--}}
                                {{--</div><!-- .comments-area -->--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div id="secondary" class="event-sidebar sidebar-widget">
                            <div id="tag_cloud-2" class="single-sidebar-widget widget_tag_cloud">
                                <h4 class="title">All Tags</h4>
                                <div class="tagcloud">
                                    @if(count($eventTags)>0)
                                        @foreach($eventTags as $key=>$tag)
                                            <a href="{{URL::to('/event/'.$singleEvent->url)}}" class="" style="font-size: 8pt;">
                                                {{$tag}}
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!--Event Application Modal-->
    <div class="modal" id="eventModal" style="z-index: 9999999">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title text-center"> Event Application - {{$singleEvent->title}}<br>
                        <span style="text-align: center;font-size: 20px;">Have a question? <span class="text-primary"> Please call us to ( {{$primaryInfo->mobile_no}} ) </span></span>
                    </h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                {!! Form::open(['url'=>'event-application','method'=>'POST','class'=>'']) !!}
                <div class="modal-body" style="color: #ffffff;background-color: #085eac;">

                    <h6 class="text-warning">Personal Information</h6>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="first_name">First Name <span class="required text-danger">*</span></label>
                            {{Form::text('first_name',$value=old('first_name'),['maxlength'=>45,'class'=>'form-control','required'=>true,'placeholder'=>'Your First name'])}}

                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="last_name">Last Name <span class="required text-danger">*</span></label>
                            {{Form::text('last_name',$value=old('last_name'),['maxlength'=>45,'class'=>'form-control','required'=>true,'placeholder'=>'Your last name'])}}

                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="mobile">Mobile <span class="required text-danger">*</span></label>
                            {{Form::text('mobile',$value=old('mobile'),['maxlength'=>30,'class'=>'form-control','required'=>true,'placeholder'=>'Your mobile'])}}

                            @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email <span class="required text-danger">*</span></label>
                            {{Form::email('email',$value=old('email'),['maxlength'=>80,'class'=>'form-control','required'=>true,'placeholder'=>'Your email address'])}}

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <h6 class="text-warning">Academic & Work Information</h6>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="academic_qualification">Academic Qualification <span class="required text-danger">*</span></label>
                            {{Form::text('academic_qualification',$value=old('academic_qualification'),['maxlength'=>120,'class'=>'form-control','required'=>true,'placeholder'=>'Last Academy Qualification'])}}

                            @if ($errors->has('academic_qualification'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('academic_qualification') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="work_experience">Work Experience <span class="required text-danger">*</span></label>
                            {{Form::number('work_experience',$value=old('work_experience'),['min'=>0,'max'=>30,'step'=>'any','class'=>'form-control','required'=>true,'placeholder'=>'Number of Work Experience'])}}

                            @if ($errors->has('work_experience'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('work_experience') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="field_of_work">Field of Work </label>
                            {{Form::text('field_of_work',$value=old('field_of_work'),['maxlength'=>120,'class'=>'form-control','required'=>false,'placeholder'=>'What\'s your working field'])}}

                            @if ($errors->has('field_of_work'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('field_of_work') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="country_of_work">Country of Work </label>
                            {{Form::text('country_of_work',$value=old('work_experience'),['maxlength'=>50,'class'=>'form-control','required'=>false,'placeholder'=>'Current working country'])}}

                            @if ($errors->has('country_of_work'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('country_of_work') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                </div>

            <!-- Modal footer -->
                <div class="modal-footer" style="display: flow-root">
                    <a href="javascript:void(0)" class="btn btn-danger pull-left" data-dismiss="modal">Close</a>
                    <input type="hidden" name="event_id" value="{{$singleEvent->id}}">
                    <button class="btn btn-success pull-right" type="submit">Submit</button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <!-- The Modal -->

@endsection
<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
@section('script')
@if(count($errors)>0)
    <script>
        $(window).load(function () {
            $('#eventModal').attr('style', 'display:block','z-index:9999992');
            $('#eventModal').addClass('modal show');
        })
    </script>
@endif
    @endsection

