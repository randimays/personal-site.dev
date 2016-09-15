@extends('layouts.master')
@section('content')

<h1 class="pageHeadGray marginBottom60 text-center">JavaScript Calculator</h1>

	<div id="calculator">
		<div id="container">
			<div class="row">
				<div id="inputs" class="text-center">
					<input id="leftBox" maxlength="11" readonly>
					<input id="centerBox" maxlength="1" readonly>
					<input id="rightBox" maxlength="11" readonly>
				</div>
			</div>
			<div id="groupBtns">
				<div class="row text-center">
					<input id="clearbtn" class="clearColor" value="C" readonly>
					<input id="exponentbtn" class="operator-btn" value="^" readonly disabled>
					<input id="sqrtbtn" value="&radic;" readonly disabled>
					<input id="dividebtn" class="operator-btn colorOperators" value="/" readonly disabled>
				</div>
				<div class="row text-center">
					<input class="number-btn" value="7" readonly>
					<input class="number-btn" value="8" readonly>
					<input class="number-btn" value="9" readonly>
					<input id="multiplybtn" class="operator-btn colorOperators" value="*" readonly disabled>
				</div>
				<div class="row text-center">
					<input class="number-btn" value="4" readonly>
					<input class="number-btn" value="5" readonly>
					<input class="number-btn" value="6" readonly>
					<input id="minusbtn" class="operator-btn colorOperators" value="-" readonly disabled>
				</div>
				<div class="row text-center">
					<input class="number-btn" value="1" readonly>
					<input class="number-btn" value="2" readonly>
					<input class="number-btn" value="3" readonly>
					<input id="plusbtn" class="operator-btn colorOperators" value="+" readonly disabled>
				</div>
				<div class="row text-center">
					<input id="posnegbtn" class="posnegColor" value="+/-" readonly>
					<input class="number-btn" value="0" readonly>
					<input id="decimalbtn" value="." readonly>
					<input id="equalsbtn" class="equalsColor" value="=" readonly>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row portfolioSection">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<p class="marginTop60">I created this JavaScript calculator as a project for Codeup. Initially the project utilized vanilla JavaScript, and I later went back and slimmed the code down a bit using jQuery.</p>
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