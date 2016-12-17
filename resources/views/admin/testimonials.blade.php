@extends('layout.dashboard')

@section('title', 'Testimonials Manager')

@section('content')
    <header class="header header-xl">Testimonials Manager</header>
    <div class="alert alert-info" role="alert">Use this widget to activate/deactivate testimonials submitted on the site. Coming soon: sort functionality!</div>

    <div id="testimonial_manager">
        <ul id="testimonial_filters" class="nav nav-pills" role="tablist">
            <li role="presentation" class="active"><a href="#" role="tab" data-toggle="tab" data-status="">All</a></li>
            <li role="presentation"><a href="#" role="tab" data-toggle="tab" data-status="1">Active</a></li>
            <li role="presentation"><a href="#" role="tab" data-toggle="tab" data-status="0">Inactive</a></li>
        </ul>

        <section id="testimonial_list" class="outer-wrapper text-left">
            <div class="inner-wrapper row clearfix">
                @foreach ($testimonials as $index => $testimonial)
                    <article class="testimonial-wrapper col-md-6">
                        <div id="testimonial-{{ $testimonial->id }}" class="testimonial panel @if ($testimonial->flag_active) panel-success @else panel-danger @endif">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title text-left pull-left">{{ $testimonial->name or 'Anonymous' }} in @if ($testimonial->city){{ $testimonial->city }}, @endif{{ $testimonial->state_province }}</h3>
                                <div class="activation-toggle pull-right">
                                    @if ($testimonial->flag_active)
                                        <i class="fa fa-fw fa-times"></i><strong>Deactivate</strong>
                                    @else
                                        <i class="fa fa-fw fa-check"></i><strong>Activate</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="comment panel-body">{{ $testimonial->comment }}</div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </div>
@stop
