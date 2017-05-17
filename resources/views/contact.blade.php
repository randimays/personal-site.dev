@extends('layouts.master')
@section('content')

<h1 class="page_head_gray">Contact</h1>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xl-offset-2">
				<form id="contact-form" action="//formspree.io/randimays1024@gmail.com" method="POST">
					<div class="form-group">
						<label class="control-label" for="name">name</label>
						<input id="name" name="name" type="text" placeholder="First Last" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="email">email address</label>
						<input id="email" name="_replyto" type="email" placeholder="you@example.com" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="message">message</label>
						<textarea class="form-control" id="message_form" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
					</div>
					<input type="hidden" name="_subject" value="Randimariedesigns.com Submission" />
					<div class="form-group">
						<div class="col-sm-12 col-md-12 col-lg-12 text-right">
							<button type="submit" class="btn btn-default btn-lg">submit</button>
						</div>
					</div>
				</form>
				<div class="messages">
					<p class="alert alert--loading">Sending message...</p>
					<p class="alert alert--success">Message sent!</p>
					<p class="alert alert--error">Error. Please try again.</p>
				</div>
			</div>
		</div>
	</div> <!-- .container -->
@stop