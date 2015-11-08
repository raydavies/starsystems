@extends('layout.master')

@section('headscripts')
	@parent
@stop

@section('content')
	<section class="billboard">
		<div class="container">
			<div class="row">
				<div class="blackboard col-md-7 text-center">
					<h1 class="tagline">The Interactive Curriculum<small>Preparing Students for the Future</small></h1>
					<button class="btn btn-lg btn-default">Take The Tour</button>
				</div>
			</div>
		</div>
	</section>
	<section class="container features">
		<header class="text-center">A Four Step Approach to Learning</header>
		<div class="row clearfix">
			<article class="feature col-md-3">
				<i class="fa fa-fw fa-lg fa-book"></i><span>Study</span> Interactive lessons are your child's first step toward mastering the curriculum and improving in school. Use the study mode for homework help any time, day or night.
			</article>
			<article class="feature col-md-3">
				<i class="fa fa-fw fa-lg fa-lightbulb-o"></i><span>Practice</span> Just like with a "live" teacher, your child is given instant feedback. Get hands-on with the same material needed for school and standardized tests.
			</article>
			<article class="feature col-md-3">
				<i class="fa fa-fw fa-lg fa-graduation-cap"></i><span>Test</span> Prepare your child <strong><em>before</em></strong> she takes the test in school! Grades are written to the Progress Report for you to review.
			</article>
			<article class="feature col-md-3">
				<i class="fa fa-fw fa-lg fa-pencil"></i><span>Essay</span> Help develop writing ability and research skills while your student exercises his creativity.
			</article>
			<article class="feature col-md-12 text-center">
				<a href="{{ route('curriculum') }}">
					<button class="btn btn-info btn-lg" type="button">Learn More<i class="fa fa-long-arrow-right fa-fw"></i></button>
				</a>
				<a href="{{ route('lessons') }}">
					<button class="btn btn-primary btn-lg" type="button">View Sample Lessons<i class="fa fa-long-arrow-right fa-fw"></i></button>
				</a>
			</article>
		</div>
	</section>
	<section class="slideshow">
		<div class="container">
			<div id="slideshow" class="col-md-6 col-md-offset-6">
				<div class="levels">
					<p>Available in 4 levels:</p>
					<p class="levels-grades">
						K - 3<sup>rd</sup> grade<br>
						4<sup>th</sup> - 6<sup>th</sup> grade<br>
						7<sup>th</sup> - 9<sup>th</sup> grade<br>
						10<sup>th</sup> - 12<sup>th</sup> grade<br>
					</p>
					<p>Each level contains more than <em>800 lessons</em> on 6 CDs!</p>
				</div>
				<!--
				<iframe width="853" height="480" src="https://www.youtube.com/embed/videoseries?list=PL09vPPCUB2vCqsPuGIBbHwgw8p7OO_mKA" frameborder="0" allowfullscreen></iframe>
				-->
			</div>
		</div>
	</section>
	<section class="information">
		<div class="container">
			<div class="row">
				<article class="col-md-4 circle-text">
					<header>One-On-One Interaction</header>
					<p class="hidden">Owning the Interactive Curriculum Program is like having a full-time teacher working with your child! The program uses a combination of graphics, audio, and animation to <strong>make schoolwork fun and easy</strong>. The interactive lessons engage and guide your child while dynamic quizzes and a variety of writing exercises reinforce what she is learning.</p>
				</article>
				<article class="col-md-4 circle-text">
					<header>Succeed At Home</header>
					<p class="hidden">Studies show that children succeed in school when learning takes place at home. <strong>The Home makes a difference</strong>. The Interactive Curriculum was designed by educators to teach and review everything students are learning in the classroom. Your child will find the tools he needs to master the school curriculum, improve test scores, develop strong study skills, and help with homework!</p>
				</article>
				<article class="col-md-4 circle-text">
					<header>Comprehensive Coverage</header>
					<p class="hidden">The Interactive Curriculum Software Program covers everything your child needs to know for success in school: <strong><em>Reading, Vocabulary, Grammar and Writing, Math, Science, and Social Studies</em></strong>. Lessons, examples, and exercises build a solid foundation for students and allow them to develop at an accelerated pace.</p>
				</article>
			</div>
		</div>
	</section>
@stop
