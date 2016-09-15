@extends('layouts.master')
@section('content')

<audio id="soundeffect1">
		<source src="/audio/Archer -Woo!-.mp3" type="audio/mpeg">Unsupported browser!
	</audio>
	<audio id="soundeffect2">
		<source src="/audio/Lana- Noooooope.mp3" type="audio/mpeg">Unsupported browser!
	</audio>
	<audio data-sound="0">
		<source src="/audio/Pickup_Coin.wav" type="audio/wav">Unsupported browser!
	</audio>
	<audio data-sound="1">
		<source src="/audio/Pickup_Coin2.wav" type="audio/wav">Unsupported browser!
	</audio>
	<audio data-sound="2">
		<source src="/audio/Pickup_Coin3.wav" type="audio/wav">Unsupported browser!
	</audio>
	<audio data-sound="3">
		<source src="/audio/Pickup_Coin4.wav" type="audio/wav">Unsupported browser!
	</audio>
	<audio data-sound="4">
		<source src="/audio/Pickup_Coin5.wav" type="audio/wav">Unsupported browser!
	</audio>
	<audio data-sound="5">
		<source src="/audio/Pickup_Coin6.wav" type="audio/wav">Unsupported browser!
	</audio>

	<div class="simplesimon">
		<img id="archerbanner" src="/img/archer_banner.jpg" alt="Archer Edition">
		<div id="gameConsole">
			<div id="stats">
				<p class="statstext">Level: 
					<span id="levelnumber">0</span>
					<span id="message">Click "Start Game" to begin.</span>
				</p>
			</div>
			<input type="submit" role="button" id="startGame" value="START GAME">
		</div>
		<div id="gameButtonGroup">
			<img src="/img/archer.jpg" data-value="0" alt="Sterling Archer">
			<img src="/img/lana.jpg" data-value="1" alt="Lana Kane">
			<img src="/img/cyril.jpg" data-value="2" alt="Cyril Figgis">
			<img src="/img/pam.jpg" data-value="3" alt="Pam Poovey">
			<img src="/img/krieger.jpg" data-value="4" alt="Algernop Krieger">
			<img src="/img/ray.jpg" data-value="5" alt="Ray Gillette">
		</div>
	</div>

	<div class="container">

		<h2 class="text-center portfolioHeadGray marginTop50">Simple Simon: Archer Edition</h2>

		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<p>I created this Simple Simon game using JavaScript and jQuery. I was inspired by characters from Archer for the game's design and sound effects.</p>
				<ul class="portfolioStats">
					<li class="projectInfo"><span class="projectInfoHead">skills: </span>HTML, CSS, JavaScript, jQuery, layout</li>
					<li class="projectInfo"><span class="projectInfoHead">role: </span>developer/designer</li>
					<li class="projectInfo"><span class="projectInfoHead">date: </span>06/16</li>
					<li class="projectInfo"><span class="projectInfoHead">category: </span>development</li>
				</ul>
			</div>
		</div>

	</div>

@stop