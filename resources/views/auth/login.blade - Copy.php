
@extends('client.app')
@section('content')
<div class="container">
<div class="row" style="display: block">
<Style>
    .form-area .pb_form_v1 {
        background: #fab729;
    }
</Style>
    <?php
        if(!isset($mobile)){
            $mobile = '';
        }
    ?>
    <div class="col-md-5 relative form-area pull-right">

        <form action="{{URL::to('/custom-login')}}" method="post" class="pb_form_v1 login-form">
            {{ csrf_field() }}
            <h2 class="mb-4 mt-0 text-center online-booking font-15"> <b> Login Here </b></h2>

            <div class="form-group  {{ $errors->has('mobile_no') ? 'has-error' : '' }}">
                <input type="{{($mobile!='')?'hidden':'number'}}" id="{{($mobile!='')?'':'full_name'}}" value="{{($mobile!='')?$mobile:''}}" name="mobile_no" required min="0" class="form-control pb_height-50 reverse mobile_number" placeholder="Mobile Number">
                 @if ($errors->has('mobile_no'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mobile_no') }}</strong>
                    </span>
                @endif
                <span class="help-block" id="mobile_error_text" style="display:none">
                    <strong class="text-danger"> Mobile number is required! </strong>
                </span>
            </div>
            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                <input type="text" id="{{($mobile!='')?'full_name':''}}" name="password" required class="form-control pb_height-50 reverse" placeholder="Your Code">
                 @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group row">
                <div class="col-md-9">

                    <h6 class="font-15"> {{($mobile!='')?'Resend':'Forgot'}} your code? <button class="btn btn-link text-primary" type="button" id="forgot-btn"><b><strong> Click here </strong></b> </button> </h6>

                </div>
                <div class="col-md-3 no-padding">

                    <button class="btn btn-primary btn-login" type="submit"> <b> Login </b></button>
                </div>
                <div class="col-md-12">

                     <h5 class="text-center back-to-reg font-15" style="color: #000"><b> Back to <a href="{{URL::to('/')}}" class="text-primary"> <strong> Online Booking</strong> </a> </b></h5>
                </div>

            </div>
             <div class="sub-heading">

            </div>
        </form>
    </div>
    <div class="col-md-7 pull-left">
        <div class="row">

            <div class="col-md-10">
                @include('client.includes.carousel')
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
</div>
<form action="{{URL::to('/forget-code')}}" method="post" id="forgot-form">
    {{ csrf_field() }}
    <input type="hidden" name="mobile_no" id="forgot_mobile">
</form>
@endsection
@section('script')
<script>

    $('#forgot-btn').click(function(){
        var mobile = $('.mobile_number').val();
        if(mobile===''){
            $('#mobile_error_text').show();
        }else{
            $('#mobile_error_text').hide();
            $('#forgot_mobile').val(mobile);
            $('#forgot-form').submit();
        }

        console.log(mobile);
    })

</script>
@endsection

