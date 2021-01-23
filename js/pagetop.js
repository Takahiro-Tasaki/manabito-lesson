$(function() {
	'use strict';
	$('#pageTop').on('click', function() {
		$('html, body').not(':animated').animate({scrollTop: 0}, 600);
	});
});
