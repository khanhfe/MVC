$(document).ready(function(){
	$('ul.wrap-suggestion').css('display','none');
	$('#search-keyword').keyup(function(event) {
		if($(this).val().length>=2){
			key = $(this).val();
<<<<<<< HEAD
			$.post('ajax/search', {'key': key}, function(data) {
=======
			$.post('/imobile/ajax/search', {'key': key}, function(data) {
>>>>>>> a56ac73c8cfd7d0e47602378f899c53955797a14
				$('ul.wrap-suggestion').html(data);
				$('ul.wrap-suggestion').css('display','block');
			});
		}else{
			$('ul.wrap-suggestion').css('display','none')
		}
	});
});
