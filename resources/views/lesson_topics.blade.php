@extends('layout.page')

@section('title', 'Lessons Taught')

@section('headscripts')
	@parent
@stop

@section('page_content')
	<div class="row clearfix">
        <div class="lesson_picker_container col-md-8">
            <p class="lesson_text font-plus"><span class="font-bold font-lrg">The Interactive Curriculum</span> has over 2700 Teaching and Study Lessons designed to help students excel. Take a peek at what your child will be learning!</p>
            <img id="blackboard_child" class="img-responsive center-block hidden-xs" src="{{ asset('/img/content/girl-at-blackboard.jpg') }}" alt="Girl at blackboard" title="Girl at blackboard">

            <div class="lesson_picker bg-info">
                <header class="text-info font-plus font-bold">Curious about the curriculum?</header>
                {!! Form::open(array('route' => 'lessons', 'method' => 'get', 'id' => 'lesson_select_form')) !!}
                    <div class="form-group">
                        {!! Form::label('level_select', 'Choose a level', array('class' => 'control-label')) !!}
                        {!! Form::select('level', $levelOptions, $current_level->id, array('required', 'id' => 'level_select', 'class' => 'form-control', 'aria-describedby' => 'level_select_status')) !!}
                        <span id="level_select_status" class="sr-only hidden"></span>
                    </div>

                    <div class="form-group">
                        {!! Form::label('subject_select', 'Choose a subject', array('class' => 'control-label')) !!}
                        {!! Form::select('subject', $subjectOptions, $current_subject->id, array('required', 'id' => 'subject_select', 'class' => 'form-control', 'aria-describedby' => 'subject_select_status')) !!}
                        <span id="subject_select_status" class="sr-only hidden"></span>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">View Lessons</button>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="lesson_catalog text-center col-md-4">
            @if (isset($current_level, $current_subject))
                <h2>{{ $current_level->name }}: {{ $current_subject->name }}</h2>
                @if (count($lessons))
                    <ul class="lesson_list text-left list-group">
                        @foreach ($lessons as $lesson)
                            <li class="lesson-title list-group-item">{{ $lesson->title }}</li>
                        @endforeach
                    </ul>
                @else
                    <div class="empty_list">No lessons found for this subject</div>
                @endif
            @endif
        </div>
	</div>
@stop
