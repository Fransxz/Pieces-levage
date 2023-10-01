jQuery(function($) {

	if ($('.header-top #search_widget form > input[type=text]').val()) {
		$('.header-top #search_widget form > input[type=text]').addClass('fullwidth');
	}
	$('.header-top #search_widget form > i.search').click(function() {
		$('.header-top #search_widget form > input[type=text]').toggleClass('fullwidth');
	});

});
