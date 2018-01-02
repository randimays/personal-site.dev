import React from 'react';

const Contact = () => {
	return (
		<div className="container">
			<h1>Contact</h1>
			<form id="contact-form" action="//formspree.io/randimays1024@gmail.com" method="POST">
				<div className="form-group">
					<label className="control-label" for="name">name</label>
					<input id="name" name="name" type="text" placeholder="First Last" required />
				</div>
				<div className="form-group">
					<label className="control-label" for="email">email address</label>
					<input id="email" name="_replyto" type="email" placeholder="you@example.com" required />
				</div>
				<div className="form-group">
					<label className="control-label" for="message">message</label>
					<textarea id="message_form" name="message" placeholder="Please enter your message here..." rows="5" required></textarea>
				</div>
				<input type="hidden" name="_subject" value="Randimariedesigns.com Submission" />
				<div className="form-group">
					<div className="col-sm-12 col-md-12 col-lg-12 text-right">
						<button type="submit" className="button">submit</button>
					</div>
				</div>
			</form>
			<div className="messages">
				<p className="alert alert--loading">Sending message...</p>
				<p className="alert alert--success">Message sent!</p>
				<p className="alert alert--error">Error. Please try again.</p>
			</div>
		</div>
	);
};

export default Contact;