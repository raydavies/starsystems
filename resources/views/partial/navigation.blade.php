<ul class="nav-bar">
	<li class="nav-link"><a href="{{ route('home') }}">Home</a></li>
	<li class="nav-link"><a href="{{ route('about') }}">About Us</a></li>
	<li class="nav-link drop-down"><a href="{{ route('curriculum') }}">Our Product</a>
		<ul class="sub-menu hidden">
			<img class="nav-arrow" src="{{ asset('/img/nav/nav-arrow.png') }}">
			<li class="sub-link nav-link"><a href="{{ route('curriculum') }}">The Interactive Curriculum</a></li>
			<li class="sub-link nav-link"><a href="{{ route('lessons') }}">Lessons Taught</a></li>
			<li class="sub-link nav-link"><a href="{{ route('benefits') }}">Benefits</a></li>
		</ul>
	</li>
	<li class="nav-link"><a href="{{ route('faq') }}">FAQ</a></li>
	<li class="nav-link"><a href="{{ route('contact') }}">Contact Us</a></li>
</ul>
