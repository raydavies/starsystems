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
		<div class="row">
			<address class="contact_address col-sm-6 col-sm-offset-3">
				<strong>Star Learning Systems</strong><br>
				14007 S Bell Rd &bull; Homer Glen, IL 60491<br>
				(708) 675-7640<br>
				Toll Free (866) 923-6729
			</address>
		</div>
	</div>

	<div id="form_wrapper" class="row">
		<div class="col-md-12">
			<p class="text-center"><em>All fields are required.</em></p>

			{!! Form::open(array('route' => 'contact', 'method' => 'post', 'id' => 'contact_form', 'data-validate-on-start' => !empty($errors->all()), 'novalidate' => 'novalidate')) !!}
			<div class="row clearfix">
				<div class="form-group col-md-3 col-md-offset-3 col-xs-12 has-feedback">
					{!! Form::label('firstname', 'First Name', array('class' => 'control-label')) !!}
					<div class="control-input">
						{!! Form::text('first_name', null, array('required', 'id' => 'firstname', 'class' => 'form-control', 'aria-describedby' => 'firstname_status')) !!}
						<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
						<span id="firstname_status" class="sr-only hidden"></span>
					</div>
					<div class="control-message">
						<span class="errormsg">{{ $errors->first('first_name') }}</span>
					</div>
				</div>
				<div class="form-group has-feedback col-md-3 col-xs-12">
					{!! Form::label('lastname', 'Last Name', array('class' => 'control-label')) !!}
					<div class="control-input">
						{!! Form::text('last_name', null, array('required', 'id' => 'lastname', 'class' => 'form-control', 'aria-describedby' => 'lastname_status')) !!}
						<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
						<span id="lastname_status" class="sr-only hidden"></span>
					</div>
					<div class="control-message">
						<span class="errormsg">{{ $errors->first('last_name') }}</span>
					</div>
				</div>
			</div>

			<div class="row clearfix">
				<div class="form-group col-md-6 col-md-offset-3 col-xs-12 has-feedback">
					{!! Form::label('email', 'Email', array('class' => 'control-label')) !!}
					<div class="control-input">
						{!! Form::email('email', null, array('required', 'id' => 'email', 'class' => 'form-control', 'placeholder' => 'e.g. john.smith@example.com', 'aria-describedby' => 'email_status')) !!}
						<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
						<span id="email_status" class="sr-only hidden"></span>
					</div>
					<div class="control-message">
						<span class="errormsg">{{ $errors->first('email') }}</span>
					</div>
				</div>
			</div>

			<div class="row clearfix">
				<div class="form-group col-md-6 col-md-offset-3 col-xs-12 has-feedback">
					{!! Form::label('subject', 'Subject', array('class' => 'control-label')) !!}
					<div class="control-input">
						{!! Form::text('subject', null, array('required', 'id' => 'subject', 'class' => 'form-control', 'aria-describedby' => 'subject_status')) !!}
						<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
						<span id="subject_status" class="sr-only hidden"></span>
					</div>
					<div class="control-message">
						<span class="errormsg">{{ $errors->first('subject') }}</span>
					</div>
				</div>
			</div>

			<div class="row clearfix">
				<div class="form-group col-md-6 col-md-offset-3 col-xs-12 has-feedback">
					{!! Form::label('message', 'Message', array('class' => 'control-label')) !!}
					<div class="control-input">
						{!! Form::textarea('message', null, array('required', 'id' => 'message', 'class' => 'form-control', 'aria-describedby' => 'message_status')) !!}
						<i class="fa form-control-feedback hidden" aria-hidden="true"></i>
						<span id="message_status" class="sr-only hidden"></span>
					</div>
					<div class="control-message">
						<span class="errormsg">{{ $errors->first('message') }}</span>
					</div>
				</div>
			</div>

			<div class="text-center">
				<button type="submit" class="btn btn-success btn-lg">Send</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
@stop
