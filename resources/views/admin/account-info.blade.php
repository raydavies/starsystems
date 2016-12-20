@extends('layout.dashboard')

@section('title', 'Account Information')

@section('content')
    <div class="row clearfix">
        <div class="col-md-6 col-md-offset-3">
            <header class="header header-xl">Account Information</header>
            <div class="form-group">
                {!! Form::label('name', 'Name', array('class' => 'control-label')) !!}
                <div class="input-group control-input">
                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                    {!! Form::text('name', $user->first_name . ' ' . $user->last_name, ['disabled', 'id' => 'name', 'class' => 'form-control', 'aria-describedby' => 'name_status']) !!}
                    <span id="name_status" class="sr-only hidden"></span>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email', array('class' => 'control-label')) !!}
                <div class="input-group control-input">
                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                    {!! Form::email('email', $user->email, ['disabled', 'id' => 'email', 'class' => 'form-control', 'aria-describedby' => 'email_status']) !!}
                    <span id="email_status" class="sr-only hidden"></span>
                </div>
            </div>
        </div>
    </div>
@stop
