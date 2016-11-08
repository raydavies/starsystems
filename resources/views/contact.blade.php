@extends('layout.page')

@section('title', 'Contact Us')

@section('headscripts')
	@parent
	<script>
        $(document).ready(function() {
            var form = new FormManager($('#contact_form'));
            form.init();
        });
    </script>
@stop

@section('page_content')
	<div class="text-center">
		<header class="header header-xl">Contact Us</header>
		<p class="font-plus">For more information, or to leave a comment, please call us or fill out the form below!</p>
		<address class="contact_address">
			<strong>Star Learning Systems</strong><br>
			14007 S Bell Rd &bull; Homer Glen, IL 60491<br>
			(708) 675-7640<br>
			Toll Free (866) 923-6729
		</address>
	</div>

	<div id="form_wrapper" class="row">
		<p class="text-center"><em>All fields are required.</em></p>

		{!! Form::open(array('route' => 'contact', 'method' => 'post', 'id' => 'contact_form', 'class' => 'form-horizontal text-center', 'data-validate-on-start' => !empty($errors->all()), 'novalidate' => 'novalidate')) !!}
			<div class="form-group has-feedback">
				{!! Form::label('firstname', 'First Name', array('class' => 'col-md-3 col-xs-12 control-label')) !!}
				<div class="col-md-6 col-xs-10 col-xs-offset-1">
					{!! Form::text('first_name', null, array('required', 'id' => 'firstname', 'class' => 'form-control', 'aria-describedby' => 'firstname_status')) !!}
					<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
					<span id="firstname_status" class="sr-only hidden"></span>
				</div>
				<div class="col-md-3 col-xs-10 col-xs-offset-1 control-message">
					<span class="errormsg">{{ $errors->first('first_name') }}</span>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('lastname', 'Last Name', array('class' => 'col-md-3 col-xs-12 control-label')) !!}
				<div class="col-md-6 col-xs-10 col-xs-offset-1">
					{!! Form::text('last_name', null, array('required', 'id' => 'lastname', 'class' => 'form-control', 'aria-describedby' => 'lastname_status')) !!}
					<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
					<span id="lastname_status" class="sr-only hidden"></span>
				</div>
				<div class="col-md-3 col-xs-10 col-xs-offset-1 control-message">
					<span class="errormsg">{{ $errors->first('last_name') }}</span>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('email', 'Email', array('class' => 'col-md-3 col-xs-12 control-label')) !!}
				<div class="col-md-6 col-xs-10 col-xs-offset-1">
					{!! Form::email('email', null, array('required', 'id' => 'email', 'class' => 'form-control', 'placeholder' => 'e.g. john.smith@example.com', 'aria-describedby' => 'email_status')) !!}
					<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
					<span id="email_status" class="sr-only hidden"></span>
				</div>
				<div class="col-md-3 col-xs-10 col-xs-offset-1 control-message">
					<span class="errormsg">{{ $errors->first('email') }}</span>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('subject', 'Subject', array('class' => 'col-md-3 col-xs-12 control-label')) !!}
				<div class="col-md-6 col-xs-10 col-xs-offset-1">
					{!! Form::text('subject', null, array('required', 'id' => 'subject', 'class' => 'form-control', 'aria-describedby' => 'subject_status')) !!}
					<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
					<span id="subject_status" class="sr-only hidden"></span>
				</div>
				<div class="col-md-3 col-xs-10 col-xs-offset-1 control-message">
					<span class="errormsg">{{ $errors->first('subject') }}</span>
				</div>
			</div>

			<div class="form-group has-feedback">
				{!! Form::label('message', 'Message', array('class' => 'col-md-3 col-xs-12 control-label')) !!}
				<div class="col-md-6 col-xs-10 col-xs-offset-1">
					{!! Form::textarea('message', null, array('required', 'id' => 'message', 'class' => 'form-control', 'aria-describedby' => 'message_status')) !!}
					<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
					<span id="message_status" class="sr-only hidden"></span>
				</div>
				<div class="col-md-3 col-xs-10 col-xs-offset-1 control-message">
					<span class="errormsg">{{ $errors->first('message') }}</span>
				</div>
			</div>

			<button type="submit" class="btn btn-success btn-lg">Send</button>
		{!! Form::close() !!}
	</div>
@stop
