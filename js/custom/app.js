$(document).foundation();

$(document).ready(function(){
	$('.top-right-hamburger').click(function(){
		if( $(this).parents('.topbar').hasClass('collapsed') ){
			$(this).parents('.topbar').removeClass('collapsed');
			$(this).parents('.topbar').addClass('expanded');
		} else {
			$(this).parents('.topbar').removeClass('expanded');
			$(this).parents('.topbar').addClass('collapsed');
		}
		$('.hero').toggleClass('blurred');
	});
});