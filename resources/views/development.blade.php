@extends('layouts.master')
@section('content')

<h1 class="pageHeadGray text-center">Development Portfolio</h1>
		<div class="mpFullSize">
			<div class="interiorContainer">
				<div class="row membersPortal">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mpDiv">
						<a href="{{ action('PortfolioController@membersPortal') }}" alt="Members Portal">
							<img src="/img/mp_home.png" alt="Members Portal Home" class="img-responsive mp">
						</a>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
							<p class="lead">Members Portal is a portal for members of a city organization such as a chamber of commerce to make professional connections with other members and have an invaluable resource for staffing (per-project or permanent) needs.<a class="seeProjectLink" href="{{ action('PortfolioController@membersPortal') }}" alt="Members Portal">&nbsp;&nbsp;see project > </a></p>
							<hr>
							<p class="categoriesSmallGray">php, laravel, html, css, bootstrap, javascript, jquery, twitter api, google maps api</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="container">
		<div class="portfolioSectionWhiteBg">
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
					<p class="lead">Cruddit is a Reddit-inspired site to read about the crud of the internet. A source for all things no one cares about, Cruddit is your one stop shop for not-really-news.<a class="seeProjectLink" href="http://cruddit.randimariedesigns.com" target="_blank" alt="Cruddit">&nbsp;&nbsp;see project > </a></p>
					<hr>
					<p class="categoriesSmallGray">php, laravel, html, css, bootstrap</p>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-xl-7">
					<a href="http://cruddit.randimariedesigns.com" target="_blank" alt="Cruddit">
						<img src="/img/cruddit_home.png" alt="Cruddit Home" class="img-responsive cruddit">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row jsCalcSection">
		<div class="interiorContainer">
			<div class="col-sm-12 col-md-5 col-lg-5 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
				<a href="{{ action('PortfolioController@jsCalculator') }}" alt="JavaScript Calculator">
					<img class="img-responsive calculator" alt="JavaScript calculator" src="/img/js_calculator.png">
				</a>
			</div>
			<div class="col-sm-12 col-md-5 col-lg-5 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
				<p class="lead">Behold, an entirely JavaScript calculator! Custom CSS and JavaScript make this simple beauty a handy tool around the office.<a class="seeProjectLink" href="{{ action('PortfolioController@jsCalculator') }}" alt="JavaScript Calculator">&nbsp;&nbsp;see project ></a></p>
				<hr>
				<p class="categoriesSmallGray">javascript, jquery, html, css, bootstrap</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="portfolioSectionWhiteBg">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<p class="lead">Using the Open Weather Map API and Google Maps API, I created this simple application to show the 3-day weather forecast and a close-up of a location from a user search.<a class="seeProjectLink" href="{{ action('PortfolioController@weatherMap') }}" alt="Weather Map">&nbsp;&nbsp;see project ></a></p>
					<hr>
					<p class="categoriesSmallGray">javascript, jquery, html, css, bootstrap</p>
				</div>
				<div class="col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">
					<a href="{{ action('PortfolioController@weatherMap') }}" alt="Weather Map">
						<img class="img-responsive weather" alt="Weather Map" src="/img/weathermap.jpg">
					</a>
			</div>
			</div>
		</div>
	</div>

	<div class="row archerBackground">
		<div class="interiorContainer">
			<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
				<a href="{{ action('PortfolioController@simpleArcher') }}" alt="Simple Archer">
					<img class="img-responsive" alt="JavaScript calculator" src="/img/archer.jpg">
				</a>
			</div>
			<div class="col-sm-7 col-md-7 col-lg-7">
				<p class="lead">A fangirl's dream and a spin on the classic Simple Simon, Simple Archer brings your favorite Archer characters to life while challenging your memory.<a class="seeProjectLink" href="{{ action('PortfolioController@simpleArcher') }}" alt="JavaScript Calculator">&nbsp;&nbsp;see project ></a></p><p>I claim no rights to any Archer characters, images, or anything related to the show. This was just for a fun school project.</p>
				<hr>
				<p class="categoriesSmallGray">javascript, jquery, html, css</p>
			</div>
		</div>
	</div>

@stop