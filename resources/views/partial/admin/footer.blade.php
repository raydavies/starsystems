<div class="footer text-left">
    <div class="container">
        <div class="row clearfix text-center">
            <p class="col-sm-12"><a href="mailto:jordanmand@gmail.com">Click here to email Jordan if something is broken</a></p>
        </div>

        <div id="form_wrapper" class="row hidden">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                {!! Form::open(array('method' => 'post', 'id' => 'contact_form', 'novalidate' => 'novalidate')) !!}
                <div class="form-group has-feedback">
                    {!! Form::label('subject', 'Subject', array('class' => 'control-label')) !!}
                    <div class="control-input">
                        {!! Form::text('subject', 'Something Is Broken!', array('required', 'id' => 'subject', 'class' => 'form-control', 'aria-describedby' => 'subject_status')) !!}
                        <i class="fa form-control-feedback hidden" aria-hidden="true"></i>
                        <span id="subject_status" class="sr-only hidden"></span>
                    </div>
                    <div class="control-message">
                        <span class="errormsg">{{ $errors->first('subject') }}</span>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    {!! Form::label('message', 'Message', array('class' => 'control-label')) !!}
                    <div class="">
                        {!! Form::textarea('message', null, array('required', 'id' => 'message', 'class' => 'form-control', 'aria-describedby' => 'message_status')) !!}
                        <i class="fa form-control-feedback hidden" aria-hidden="true"></i>
                        <span id="message_status" class="sr-only hidden"></span>
                    </div>
                    <div class="control-message">
                        <span class="errormsg">{{ $errors->first('message') }}</span>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>

