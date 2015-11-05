@extends('layout.master')

@section('title', 'About Us')

@section('headscripts')
	@parent
	<script src="{{ asset('/js/timeline.js') }}" async></script>
@stop

@section('content')
	<p id="bio"><span class="sls">Star Learning Systems</span> has been committed to bringing parents and students the highest caliber of learning products for over 3 decades. Even before computers were commonplace in the classroom or at home, Star was at the forefront of technology in education. While our business has changed over the years, one thing has stayed the same: our dedication to your child's success in school.</p>
	<div id="timeline_wrapper">
		<div id="timeline">
			<div id="inner_timeline">
				<div class="history hidden"><h3>1980s</h3>
				Star Learning Systems formed in 1982 as a distributor of early childhood educational products, with a focus on reading comprehension and grammar. The Phonics Reading Program and volumes such as the Encyclopedia Americana and the Grolier New Book of Knowledge formed the core of Star's educational curriculum.
				</div>
				<div class="history hidden"><h3>1990s</h3>
				As computers became increasingly present both at home and in schools, Star moved into the burgeoning field of technology to better provide their educational programs for a modern classroom. Distributing a variety of educational software and computer systems, Star helped a new generation of tech-savvy students learn in a fun and innovative way.
				</div>
				<div class="history hidden"><h3>2000s & beyond</h3>
				With an endless amount of information available online, having exactly what you need in one quick, easy place becomes extremely important. This is what Star believed in 2000 when we became the exclusive distributor of the Interactive Curriculum, a program that pulls together everything students K-12 are expected to know for success in school. Star continues to look to the future, and we want to help children everywhere do the same.
				</div>
			</div>
			<img id="nav_left" src="{{ asset('/img/nav/arrow_l.png') }}">
			<img id="nav_right" src="{{ asset('/img/nav/arrow_r.png') }}">
		</div>
		<img id="timelinepics" src="{{ asset('/img/history/1.jpg') }}" alt="">
	</div>
	<h3>Star Learning Systems<br>Celebrating more than 30 years in Education!</h3>
@stop
