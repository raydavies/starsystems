@extends('layout.dashboard')

@section('title', 'Change Password')

@section('content')
    <div class="row clearfix">
        <div class="col-md-6 col-md-offset-3">
            <header class="header header-xl">Change Password</header>
            <div class="alert alert-info" role="alert">Use this widget to create a new password for your user account. All fields are required.</div>
            @include('partial.alert_box')

            {!! Form::open(array('route' => 'admin.password.change', 'method' => 'post', 'id' => 'change_password_form', 'novalidate' => 'novalidate')) !!}
            <div class="form-group">
                {!! Form::label('old_password', 'Current Password', array('class' => 'control-label')) !!}
                <div class="control-input">
                    {!! Form::password('old_password', ['required', 'id' => 'old_password', 'class' => 'form-control', 'aria-describedby' => 'old_password_status']) !!}
                    <span id="old_password_status" class="sr-only hidden"></span>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('password', 'New Password', array('class' => 'control-label')) !!}
                <div class="control-input">
                    {!! Form::password('password', ['required', 'id' => 'password', 'class' => 'form-control', 'aria-describedby' => 'password_status']) !!}
                    <span id="password_status" class="sr-only hidden"></span>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirm New Password', array('class' => 'control-label')) !!}
                <div class="control-input">
                    {!! Form::password('password_confirmation', ['required', 'id' => 'password_confirmation', 'class' => 'form-control', 'aria-describedby' => 'password_confirmation_status']) !!}
                    <span id="password_confirmation_status" class="sr-only hidden"></span>
                </div>
            </div>

            <div class="text-center margin-top-15">
                <button type="submit" class="btn btn-primary btn-lg">Change Password</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
