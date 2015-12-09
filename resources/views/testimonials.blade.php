@extends('layout.master')

@section('title', 'Customer Testimonials')

@section('content')
    <h1>Customer Testimonials</h1>

    @foreach ($testimonials as $testimonial)
        <div id="testimonial_list" class="text-left">
            <div class="testimonial panel">
                <div class="panel-heading panel-info" data-toggle="collapse" data-target="#answer-{{ $testimonial->id }}">
                    <h3 class="panel-title text-left">{{ $testimonial->name or 'Anonymous' }} in {{ $testimonial->city }}, {{ $testimonial->state_providence }}</h3>
                    <span class="caret active"></span>
                </div>
                <div id="answer-{{ $testimonial->id  }}" class="comment panel-body panel-collapse in">{{ $testimonial->comment }}</div>
            </div>
        </div>
    @endforeach
@stop
