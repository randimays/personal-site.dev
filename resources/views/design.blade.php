@extends('layouts.master')
@section('content')

<h1 class="pageHeadGray text-center">Design Portfolio</h1>

	<div class="row livFullSize">
		<div class="interiorContainer">
			<img class="livThumb img-responsive col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" src="/img/livingston_portfolio.png" alt="Livingston Lures site">
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
				<p class="lead">Livingston Lures sells more than just fishing lures; they sell a lifestyle. As an innovator in the fishing industry, Livingston needed a site design well-suited for what the company is really about.<a class="seeProjectLink" href="{{ action('PortfolioController@livingston') }}" alt="Livingston Lures Website Redesign">&nbsp;&nbsp;see project ></a></p>
				<hr>
				<p class="categoriesSmallGray">adobe photoshop, layout, rebrand, responsive design, web design</p>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row portfolioSectionWhiteBg">
			<div class="col-sm-7 col-md-7 col-lg-7">
				<p class="lead marginTop20">For a school project, I put together a new concept for Good Housekeeping magazine including a refresh of the masthead, color scheme and typography.<a class="seeProjectLink" href="{{ action('PortfolioController@goodHousekeeping') }}" alt="Good Housekeeping Magazine Redesign Project">&nbsp;&nbsp;see project ></a></p>
				<hr>
				<p class="categoriesSmallGray">adobe indesign, adobe photoshop</p>
			</div>

			<div class="col-sm-5 col-md-5 col-lg-5">
				<img class="img-responsive" alt="Good Housekeeping Magazine Redesign Project" src="/img/ghmag_cover.jpg">
			</div>

		</div>
	</div>

@stop