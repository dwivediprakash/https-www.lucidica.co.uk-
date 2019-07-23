$(document).ready(function() {
	//Попап менеджер FancyBox
	//Документация: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	$(".icon_item").fancybox();

	$(".popup_form .file").fancybox();

	$(".fill_out_button").fancybox();
	//Кнопка "Наверх"
	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	$("#top").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});


	$('.button_join_us, .button_avalible_positions, .button_back_to_top, .button_next').click(function(){
		var el = $(this).attr('href');
		$('html,body').animate({
			scrollTop: $(el).offset().top}, 700);
		return false; 
	});



	$('.back_to_top_button, .button_next').click(function(){
		var el = $(this).attr('href');
		$('html,body').animate({
			scrollTop: $(el).offset().top}, 700);
		return false; 
	});


	if ($('*').is(".form1 .work_item")) {
		$("input[name=position]").attr('value', $(".work_item").text() );
	}
	
});