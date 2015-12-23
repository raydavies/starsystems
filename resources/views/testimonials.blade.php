@extends('layout.page')

@section('title', 'Customer Testimonials')

@section('page_content')
    <section id="testimonial_header" class="row">
        <h1 class="col-md-6"><strong>Customer Testimonials</strong><br><small>See what people are saying about us!</small></h1>
        <div class="col-md-6 text-right">
            <a href="{{ route('testimonials.create') }}" role="button" class="btn btn-primary btn-lg testimonial_create_button">Create a testimonial</a>
        </div>
    </section>

    <section id="testimonial_list" class="row text-left">
        @foreach ($testimonials as $testimonial)
            <article class="col-md-6">
                <div class="testimonial panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-left">{{ $testimonial->name or 'Anonymous' }} in {{ $testimonial->city }}, {{ $testimonial->state_province }}</h3>
                    </div>
                    <div id="answer-{{ $testimonial->id  }}" class="comment panel-body">{{ $testimonial->comment }}</div>
                </div>
            </article>
        @endforeach
    </section>
@stop
