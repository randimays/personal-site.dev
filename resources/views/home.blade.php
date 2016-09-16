@extends('layouts.master')
@section('content')

<a class="thePeacockLink" href="{{ action('HomeController@about') }}#peacock">story of the peacock&nbsp;&nbsp;&nbsp;></a>

	<div id="peacockIllustration" class="center-block">
		<object>
			<embed src="/img/peacock_illustration.svg">
		</object>
	</div>

@stop