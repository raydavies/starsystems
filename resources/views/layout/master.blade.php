<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Interactive Curriculum Tutoring Software">
	<meta name="keywords" content="tutor,software,curriculum,school,interactive curriculum,math,reading,home school,homeschool curriculum,phonics,math,star systems,star learning systems,hippo,hippo software,hippo curriculum">
	<meta name="author" content="Star Learning Systems">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<title>Star Learning Systems | @yield('title', 'Home of the Interactive Curriculum')</title>

	@include('partial.headers')

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<a name="top"></a>
	<div class="head_wrapper">
		<div class="header">
			<h1 class="star_logo"><span class="text-hide">Star Learning Systems</span></h1>
			<div class="social-btn-group">
				<ul>
					<li id="facebook-btn" class="header-btn">
						<a href="https://www.facebook.com/pages/Star-Learning-Systems/412104522208607?ref=ts&fref=ts" target="_blank"></a>
					</li>
					<li id="google-btn" class="header-btn">
						<a href="https://plus.google.com/110787110884089656450/about?hl=en" target="_blank"></a>
					</li>
					<li id="linkedin-btn" class="header-btn">
						<a href="#"></a>
					</li>
				</ul>
			</div>
			@include('partial.navigation')
		</div>
	</div>
	<div class="main_wrapper">
		<div class="page_wrapper">
			<div class="page">
				@if (Session::has('alert'))
				<div class="alert-box">
					<div class="alert alert-{{ Session::get('alert')['status'] }}">
						{{ Session::get('alert')['message'] }}
					</div>
				</div>
				@endif
				<div id="primary-content" class="content center-block">@yield('content')</div>
				<a href="#top" class="text-center">
					<img class="scroll-btn hidden" alt="scroll to top button" title="Back to Top" src="{{ asset('/img/nav/scrollbutton.png') }}">
				</a>
			</div>
		</div>
	</div>
	@include('partial.footer')
</body>
</html>
