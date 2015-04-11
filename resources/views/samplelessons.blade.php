@extends('layout.master')

@section('title', 'Lessons Taught')

@section('content')
	<p id="lesson_text"><strong>The Interactive Curriculum</strong> has over 2700 Teaching and Study Lessons designed to help students excel. Take a peek at what your child will be learning!</p>

	<img id="blackboardchild" src="{{ asset('/img/blackboard.jpg') }}" alt="Child at blackboard" title="">

	<div id="lesson_catalog">
		<span>Curious about the curriculum? Just pick a subject below!</span>
		<form action="{{ URL::current() }}" method="get">

			<label for="level_select">Choose a level:</label>
			<select id="level_select" name="level">
				@foreach ($levels as $level)
					<option value="{{ $level->level_id}}">{{ $level->name }} ({{ $level->grade_range }})</option>
				@endforeach
			</select>

			<label for="subject_select">Choose a subject:</label>
			<select id="subject_select" name="subject">
				@foreach ($subjects as $subject)
					<option value="{{ $subject->subject_id }}">{{ $subject->subject }}</option>
				@endforeach
			</select>
			<input type="submit" value="Go!">
		</form>
	</div>

	<div id="lesson_library">
		<h2>{{ $current_level->name }}: {{ $current_subject->name }}</h2>
		@if (count($lessons))
			<div class="row clearfix">
				@foreach ($lessons as $lesson)
					<div class="col-md-4">{{ $lesson->title }}</div>
				@endforeach
			</div>
		@else
			<div class="empty_list">No Lessons Found</div>
		@endif
	</div>
@stop
