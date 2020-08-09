$(document).ready(function() {
	$('.togglepass').click(function(event) {
		if($('input[name="password"]').attr('type') ==="password")
			$('input[name="password"]').attr('type','text')
		else $('input[name="password"]').attr('type','password')
	});
	$('.check').keyup(function(event) {
		username = $('input[name="username"]').val()
		password = $('input[name="password"]').val()
		if(username!=''&&password!=''&&username.length>4&&password.length>7){
			$('input[type="submit"]').removeAttr('disabled');
			$('input[type="submit"]').hover(function() {
				$('input[type="submit"]').css({
				'cursor': 'pointer',
				'color': '#000',
				'background' : 'rgba(254,215,0,1)',
				'border' : '1px solid #fed700'
				});
			}, function() {
				$('input[type="submit"]').css({
				'cursor': 'auto',
				'color': '#000',
				'background' : '#00a88a',
				'border' : '1px solid #00a88a'
				});
			});
		}
		else{
			$('input[type="submit"]').css('cursor', 'not-allowed');
			$('input[type="submit"]').attr('disabled','disable');
		}
	});
	if ($('input[name="password"]').val()!=' '){
		$('input[type="submit"]').removeAttr('disabled');
			$('input[type="submit"]').hover(function() {
				$('input[type="submit"]').css({
				'cursor': 'pointer',
				'color': '#000',
				'background' : 'rgba(254,215,0,1)',
				'border' : '1px solid #fed700'
				});
			}, function() {
				$('input[type="submit"]').css({
				'cursor': 'auto',
				'color': '#000',
				'background' : '#00a88a',
				'border' : '1px solid #00a88a'
			});
		});
	}
	if ($('.error').html()!=' ') {
		$('.check').keyup(function(event) {
			$('.error').html('')
		})
	}
});