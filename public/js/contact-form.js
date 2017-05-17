var $contactForm = $('#contact-form');
$contactForm.submit(function(e) {
	e.preventDefault();
	$.ajax({
		url: '//formspree.io/randimays1024@gmail.com',
		method: 'POST',
		data: $(this).serialize(),
		dataType: 'json',
		beforeSend: function() {
			$('.alert--loading').fadeIn(1000, 'linear');
		},
		success: function(data) {
			$contactForm.find('.alert--loading').hide();
			$('.form-control').val('');
			$('.alert--loading').css({ "display": "none"});
			$('.alert--success').fadeIn(1000, 'linear');
			setTimeout(function(){
				$('.alert--success').css({ "display": "none"});
			}, 1000);
		},
		error: function(err) {
			$contactForm.find('.alert--loading').hide();
			$contactForm.append('<div class="alert alert--error">Oops, there was an error.</div>');
			$('.alert--error').show(1000).fadeIn('linear');
			$('.alert--error').fadeOut();
		}
	});
});