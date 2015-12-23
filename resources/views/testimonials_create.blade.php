@extends('layout.page')

@section('title', 'Create A Testimonial')

@section('headscripts')
    @parent
    <script src="{{ asset('/js/form-validator.js') }}"></script>
    <script>
        $(document).ready(function() {
            var form = new FormManager($('#testimonial_form'), {
                'name': 'validName',
                'city': 'validAlphaNum',
                'state_province': 'validStateAbbr',
                'comment': 'validInput'
            });
            form.init();
        });
    </script>
@stop

@section('page_content')
    <section id="testimonial_creator" class="row">
        <div class="info-text text-center"><span class="lead">Submit a testimonial to let us know what you think of the Interactive Curriculum. We love to hear your thoughts!</span><br>All fields marked with an asterisk (*) are required.</div>

        {!! Form::model($testimonial, array('route' => 'testimonials.create', 'method' => 'post', 'id' => 'testimonial_form', 'novalidate' => 'novalidate')) !!}
        <div class="row clearfix">
            <div class="form-group col-md-6 col-md-offset-3 has-feedback">
                {!! Form::label('name', 'Name', array('class' => 'control-label')) !!}
                {!! Form::text('name', null, array('required', 'id' => 'name', 'class' => 'form-control', 'aria-describedby' => 'name_status')) !!}
                <i class="fa form-control-feedback hidden" aria-hidden="true"></i>
                <span id="name_status" class="sr-only hidden"></span>
                <div>
                    <span class="errormsg">{{ $errors->first('name') }}</span>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="form-group col-md-4 col-md-offset-3 has-feedback">
                {!! Form::label('city', 'City*', array('class' => 'control-label')) !!}
                {!! Form::text('city', null, array('required', 'id' => 'city', 'class' => 'form-control', 'aria-describedby' => 'city_status')) !!}
                <i class="fa form-control-feedback hidden" aria-hidden="true"></i>
                <span id="city_status" class="sr-only hidden"></span>
                <div>
                    <span class="errormsg">{{ $errors->first('city') }}</span>
                </div>
            </div>
            <div class="form-group col-md-2 has-feedback">
                {!! Form::label('state_province', 'State*', array('class' => 'control-label')) !!}
                {!! Form::select('state_province', $stateList, null, array('required', 'id' => 'state_province', 'class' => 'form-control', 'aria-describedby' => 'state_province_status')) !!}
                <span id="state_province_status" class="sr-only hidden"></span>
                <div>
                    <span class="errormsg">{{ $errors->first('state_province') }}</span>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="form-group col-md-6 col-md-offset-3 has-feedback">
                {!! Form::label('comment', 'Comments*', array('class' => 'control-label')) !!}
                {!! Form::textarea('comment', null, array('required', 'id' => 'comment', 'class' => 'form-control', 'aria-describedby' => 'comment_status')) !!}
                <i class="fa form-control-feedback hidden" aria-hidden="true"></i>
                <span id="comment_status" class="sr-only hidden"></span>
                <div>
                    <span class="errormsg">{{ $errors->first('comment') }}</span>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success btn-lg center-block">Submit Testimonial</button>
        {!! Form::close() !!}
    </section>
@stop