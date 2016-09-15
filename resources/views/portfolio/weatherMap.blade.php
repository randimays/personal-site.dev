@extends('layouts.master')
@section('content')

<div id="weather">
	<h2 class="text-center">Weather for<span id="cityname" class="location"></span></h2>
	<div id="customData" class="text-center">
		<label for="location">Location:</label><input type="text" id="location" name="location" placeholder="San Antonio, TX">
		<button type="submit" id="submitLocation">Check Weather</button>
	</div>
	<div class="row"></div>
	<div id="map"></div>
</div>

@stop