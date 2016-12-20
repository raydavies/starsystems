@extends('layout.page')

@section('title', 'Forgot Password')

@section('page_content')
    <div class="row clearfix">
        <div class="col-md-6 col-md-offset-3">
            @include('partial.alert_box')

            {!! Form::open(array('route' => 'password-reset-email', 'method' => 'post', 'id' => 'send_reset_email_form', 'novalidate' => 'novalidate')) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email', array('class' => 'control-label')) !!}
                    <div class="control-input">
                        {!! Form::email('email', null, ['required', 'id' => 'email', 'class' => 'form-control', 'aria-describedby' => 'email_status']) !!}
                        <span id="email_status" class="sr-only hidden"></span>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Send Password Reset Link</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
