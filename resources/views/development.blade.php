@extends('layouts.master')
@section('content')

<h1 class="page_head_gray">Development Portfolio</h1>

<div class="full_width">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<a href="{{ action('PortfolioController@membersPortal') }}" alt="Members Portal">
					<img src="/img/mp_home.jpg" alt="Members Portal Home" class="img-responsive thumb">
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
				<p class="lead"><span class="strong">Members Portal</span> is a portal for members of a city organization such as a chamber of commerce to make professional connections with other members and have an invaluable resource for staffing (per-project or permanent) needs.<a class="see_project" href="{{ action('PortfolioController@membersPortal') }}" alt="Members Portal">&nbsp;&nbsp;see project </a></p>
				<hr>
				<p class="categories_small">php, laravel, html, css, bootstrap, javascript, jquery, twitter api, google maps api</p>
			</div>
		</div>
	</div>
</div>
<div class="white_bg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<a href="http://cruddit.randimariedesigns.com" target="_blank" alt="Cruddit">
					<img src="/img/cruddit_home.jpg" alt="Cruddit Home" class="img-responsive thumb">
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
				<p class="lead"><span class="strong">Cruddit</span> is a Reddit-inspired site to read about the crud of the internet. A source for all things no one cares about, Cruddit is your one stop shop for not-really-news.<a class="see_project" href="http://cruddit.randimariedesigns.com" target="_blank" alt="Cruddit">&nbsp;&nbsp;see project </a></p>
				<hr>
				<p class="categories_small">php, laravel, html, css, bootstrap</p>
			</div>
		</div>
	</div>
</div>
<div class="full_width">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<a href="{{ action('PortfolioController@jsCalculator') }}" alt="JavaScript Calculator">
					<img class="img-responsive calculator" alt="JavaScript calculator" src="/img/js_calculator.png">
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
				<p class="lead">Behold, a <span class="strong">JavaScript calculator!</span> Custom CSS and JavaScript make this simple beauty a handy tool around the office.<a class="see_project" href="{{ action('PortfolioController@jsCalculator') }}" alt="JavaScript Calculator">&nbsp;&nbsp;see project</a></p>
				<hr>
				<p class="categories_small">javascript, jquery, html, css, bootstrap</p>
			</div>
		</div>
	</div>
</div>
<div class="white_bg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<a href="{{ action('PortfolioController@weatherMap') }}" alt="Weather Map">
					<img class="img-responsive weather" alt="Weather Map" src="/img/weathermap.png">
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
				<p class="lead">Using the Open Weather Map API and Google Maps API, I created this simple <span class="strong">Weather Map</span> application to show the 3-day weather forecast and a close-up of a location from a user search.<a class="see_project" href="{{ action('PortfolioController@weatherMap') }}" alt="Weather Map">&nbsp;&nbsp;see project</a></p>
				<hr>
				<p class="categories_small">javascript, jquery, html, css, bootstrap</p>
			</div>
		</div>
	</div>
</div>
<div class="full_width">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<a href="{{ action('PortfolioController@simpleArcher') }}" alt="Simple Archer">
					<img class="img-responsive" alt="JavaScript calculator" src="/img/archer.png">
				</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
				<p class="lead">A fangirl's dream and a spin on the classic Simple Simon, <span class="strong">Simple Archer</span> brings your favorite Archer characters to life while challenging your memory.<a class="see_project" href="{{ action('PortfolioController@simpleArcher') }}" alt="JavaScript Calculator">&nbsp;&nbsp;see project</a></p><p>I claim no rights to any Archer characters, images, or anything related to the show. This was just for a fun school project.</p>
				<hr>
				<p class="categories_small">javascript, jquery, html, css</p>
			</div>
		</div>
	</div>
</div>

@stop