( function( $ ) {
$( document ).ready(function() {
// main-nav
$('#main-nav').prepend('<div id="menu-button">Menu</div>');
	$('#main-nav #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
});
} )( jQuery );
( function( $ ) {
$( document ).ready(function() {
	// menu-database
	$('#menu-database li.active').addClass('open').children('ul').show();
		$('#menu-database li.has-sub>a').on('click', function(){
			$(this).removeAttr('href');
			var element = $(this).parent('li');
			if (element.hasClass('open')) {
				element.removeClass('open');
				element.find('li').removeClass('open');
				element.find('ul').slideUp(200);
			}
			else {
				element.addClass('open');
				element.children('ul').slideDown(200);
				element.siblings('li').children('ul').slideUp(200);
				element.siblings('li').removeClass('open');
				element.siblings('li').find('li').removeClass('open');
				element.siblings('li').find('ul').slideUp(200);
			}
		});
});
} )( jQuery );
