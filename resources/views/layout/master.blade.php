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
</head>
<body>
	<script type="text/javascript"><?php include_once('/js/analyticstracking.js'); ?></script>

	<a name="top"></a>
	<div class="head_wrapper">
		<div class="header">
			<h1 class="star_logo"><span>Star Learning Systems</span></h1>
			<ul id="header_social-btns">
				<li id="header-btn1" class="header-btn">
					<a href="https://www.facebook.com/pages/Star-Learning-Systems/412104522208607?ref=ts&fref=ts" target="_blank"></a>
				</li>
				<li id="header-btn2" class="header-btn">
					<a href="https://plus.google.com/110787110884089656450/about?hl=en" target="_blank"></a>
				</li>
				<li id="header-btn3" class="header-btn"><
					a href="#" target="_blank"></a>
				</li>
			</ul>
			@include('partial.navigation')
		</div>
	</div>
	<div class="main_wrapper">
		<div class="page_wrapper">
			<div class="page">
				<div class="content">@yield('content')</div>
				<a href="#top">
					<span class="scroll-text">Back to Top</span>
					<img class="scroll-btn" class="hidden" src="{{ asset('/img/nav/scrollbutton.png') }}">
				</a>
			</div>
		</div>
	</div>
	@include('partial.footer')
</body>
</html>
