@extends('layouts.master')
@section('content')

<h1 class="page_head_gray">Design Portfolio</h1>

<div class="full_width">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<img class="thumb img-responsive" src="/img/livingston_portfolio.jpg" alt="Livingston Lures site">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
				<p class="lead"><span class="strong">Livingston Lures</span> sells more than just fishing lures; they sell a lifestyle. As an innovator in the fishing industry, Livingston needed a site design well-suited for what the company is really about.<a class="see_project" href="{{ action('PortfolioController@livingston') }}" alt="Livingston Lures Website Redesign">&nbsp;&nbsp;see project</a></p>
				<hr>
				<p class="categories_small">adobe photoshop, layout, rebrand, responsive design, web design</p>
			</div>
		</div>
	</div>
</div>
<div class="white_bg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<img class="img-responsive" alt="Good Housekeeping Magazine Redesign Project" src="/img/ghmag_cover.jpg">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-lg-offset-1 col-xl-offset-1">
				<p class="lead marginTop20">For a school project, I put together a new concept for <span class="strong">Good Housekeeping</span> magazine including a refresh of the masthead, color scheme and typography.<a class="see_project" href="{{ action('PortfolioController@goodHousekeeping') }}" alt="Good Housekeeping Magazine Redesign Project">&nbsp;&nbsp;see project</a></p>
				<hr>
				<p class="categories_small">adobe indesign, adobe photoshop</p>
			</div>
		</div>
	</div>
</div>

@stop