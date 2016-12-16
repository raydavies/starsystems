@extends('layout.page')

@section('title', 'Login')

@section('page_content')
    <div class="row clearfix">
        <div class="col-md-6 col-md-offset-3">
            @include('partial.alert_box')

            {!! Form::open(array('route' => 'login', 'method' => 'post', 'id' => 'login_form', 'novalidate' => 'novalidate')) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email', array('class' => 'control-label')) !!}
                    <div class="control-input">
                        {!! Form::email('email', null, ['required', 'id' => 'email', 'class' => 'form-control', 'aria-describedby' => 'email_status']) !!}
                        <span id="email_status" class="sr-only hidden"></span>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password', array('class' => 'control-label')) !!}
                    <div class="control-input">
                        {!! Form::password('password', ['required', 'id' => 'password', 'class' => 'form-control', 'aria-describedby' => 'password_status']) !!}
                        <span id="password_status" class="sr-only hidden"></span>
                    </div>
                </div>

                <div class="text-center">
                    <label class="font-normal">
                        {!! Form::checkbox('remember') !!} Remember Me
                    </label>
                </div>

                <div class="text-center margin-top-15">
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
