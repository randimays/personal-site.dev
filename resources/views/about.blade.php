@extends('layouts.master')
@section('content')

<h1 class="pageHeadGray text-center">About Me</h1>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<img src="/img/randi.jpg" class="img-responsive center-block randi" alt="Randi Mays">
			</div>		
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 about">
				<p class="lead">I am a graphic designer and full stack developer. I've spent over 6 years using Adobe design software and I'm attending Codeup, a full stack development bootcamp in San Antonio.</p>
				<p>Like anyone, my bacon-bringing profession doesn’t describe a singular skill set. I possess some handy dandy administrative skills and I’ve achieved guru status as a customer service rep. In a pinch, I’ve been known to dazzle a client with marketing copy.</p>
				<p>I am a persistent, problem-solving, challenge-loving, hyper organized designer/developer who enjoys work in fast-paced, dynamic companies. In my spare time I pick up engaging freelance work with one goal in mind: to make everyone involved look good.</p>
			</div>
		</div>

		<div class="row">
			<div class="text-center marginTop20">
				<a class="btn btn-default btn-lg" href="/contact.php" role="button">Let's Work Together</a>
			</div>
		</div>

		<a id="peacock"></a>
		<h1 class="pageHeadGray text-center">The Peacock</h1>

		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<img class="img-responsive peacock" src="/img/peacock.jpg">
			</div>
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-sm-offset-1  col-md-offset-1 col-lg-offset-1">
				<p class="lead">The peacock is a visual representation of career progression and my brand mascot.</p>
				<p>A marching band member in high school, I had to tie my hair up so it would fit in my plume-adorned helmet for shows. A good friend called my bun the 'Randi Peacock' because my hair would stick up from the back of my head. Around the same time, I lived in a house in front of a large pasture filled with rattlesnakes and my dad purchased a pair of peacocks to keep them at bay.</p>
				<p>I admired the beauty of the birds and eventually likened the male's beautiful display of tail feathers to my growth as a graphic designer and later a developer. It takes time and patience, but eventually (and in this case, with a lot of hard work and practice), a hopeful young techie will develop and hone skills. These skills will someday become an impressive arsenal tools for visual and technical execution of an incredible idea.</p>
			</div>
		</div>

	</div> <!-- container -->

@stop