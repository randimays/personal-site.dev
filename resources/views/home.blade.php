@extends('layouts.master')
@section('content')

<a class="the_peacock_link" href="{{ action('HomeController@about') }}#peacock">story of the peacock&nbsp;&nbsp;&nbsp;></a>

	<div id="peacock_illustration" class="center-block">
		<object>
			<embed src="/img/peacock_illustration.svg">
		</object>
	</div>

@stop