@extends('layouts.master')
@section('content')

<h1 class="pageHeadGray text-center">Contact</h1>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xl-offset-2">
				<form action="" method="POST">
					<div class="form-group">
						<label class="control-label" for="name">name</label>
						<input id="name" name="name" type="text" placeholder="First Last" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="email">email address</label>
						<input id="email" name="email" type="text" placeholder="you@example.com" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="message">message</label>
						<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
					</div>
					<div class="form-group">
						<div class="col-sm-12 col-md-12 col-lg-12 text-right">
							<button type="submit" class="btn btn-default btn-lg">submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- .container -->
@stop