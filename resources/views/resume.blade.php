@extends('layouts.master')
@section('content')

<h1 class="pageHeadGray text-center">Resume</h1>
	
	<div class="container">

		<!-- Summary -->
		<div class="row">
			<p class="lead col-sm-12 col-md-12 col-lg-12">Software developer with graphic design background pursuing a career as part of a development team. Resourceful problem-solver and quick learner with experience developing applications on the front and back end. Strong advocate of highly organized and reusable code.</p>
		</div>

		<!-- Skills -->

		<h2 class="resumeHeadGray">Skills</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<p><span class="skillCategory">Front End</span>HTML, CSS, Twitter Bootstrap, JavaScript, jQuery, AJAX and experience with APIs</p>
				<p><span class="skillCategory">Back End</span>PHP/Laravel, MySQL</p>
				<p><span class="skillCategory">CMS</span>WordPress, Drupal</p>
				<p><span class="skillCategory">Software</span>Adobe Creative Suite, Sublime Text, Slicy, Espresso, Sequel Pro</p>
			</div>
		</div>

		<!-- Work Experience -->

		<h2 class="resumeHeadGray">Work Experience</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg12">
				<h4 class="company">Toolbox Studios, <span class="title">Graphic Designer</span><span class="dates">[ 10/15 - 03/16 ]</span></h4>
				<ul>
					<li>Executed layout of a variety of brand-aligned print and digital pieces in collaboration with creative team</li>
					<li>Identified target demographics, conducted marketing research for new branding, created mood boards, and made stylistic and conceptual recommendations for collateral</li>
				</ul>

				<h4 class="company">SPFM, LP, <span class="title">Graphic Designer</span><span class="dates">[ 12/13- 10/15 ]</span></h4>
				<ul>
					<li>Designed digital and print projects for employer in keeping with brands; managed project flow and communications between departments</li>
					<li>Assisted Web Developer in front end web development using Drupal and Espresso for Mac and with basic back end database operations involved with product SKUs</li>
					<li>Organized and managed photo shoots and post production</li>
				</ul>

				<h4 class="company">Sweb Development, <span class="title">Graphic Design Intern</span><span class="dates">[ 09/12 - 12/13 ]</span></h4>
				<ul>
					<li>Collaborated with design team to design concepts for print and digital media as requested by clients</li>
					<li>Tested and reported bugs in mobile applications and websites</li>
					<li>Sliced mobile application design using Slicy for Mac</li>
				</ul>
			</div>
		</div>

		<!-- Education -->

		<h2 class="resumeHeadGray">Education</h2>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h4 class="school">Codeup, <span class="title">Certificate Pending</span><span class="dates">[ 05/16 - Present ]</span></h4>
				<ul>
					<li>16 week immersive full-stack web development course in San Antonio focused on LAMP+J languages and technologies</li>
					<li>600+ hours in and outside classroom learning and building projects such as interactive games/programs and API-driven widgets</li>
					<li>Worked extensively with Git and command line interface</li>
					<li>Recipient of <span class="number">&#36;</span>5,000 Women's Scholarship for tuition</li>
				</ul>				
			</div>
		</div>


		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h4 class="school">The Art Institute of San Antonio, <span class="title">Bachelor of Fine Arts - Graphic Design<span class="dates">[ 10/10 - 12/13 ]</span></h4>			
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h4 class="school">Temple College, <span class="title">Associate of Arts - General Studies<span class="dates">[ 08/06 - 12/09 ]</span></h4>				
			</div>
		</div>

	</div> <!-- .container -->

@stop