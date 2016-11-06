@extends('layout.page')

@section('title', '500')

@section('page_content')
    <div class="container">
        <div class="row clearfix">
            <h1 class="header header-xl">500 Server Error</h1>
            <p class="col-md-6 text-center font-lrg">Looks like something went wrong! Please feel free to report a bug to our support team <a href="{{ route('contact') }}">here</a>.</p>
        </div>
    </div>
@stop
