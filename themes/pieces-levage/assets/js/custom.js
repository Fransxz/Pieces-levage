jQuery(function($) {

	if ($('.header-top #search_widget form > input[type=text]').val()) {
		$('.header-top #search_widget form > input[type=text]').addClass('fullwidth');
	}
	$('.header-top #search_widget form > i.search').click(function() {
		$('.header-top #search_widget form > input[type=text]').toggleClass('fullwidth');
	});

	$( "#accordion" ).accordion({
		heightStyle: "content" 
	});

	$('.ohmfiltercategory > button').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('activee');
		$('.ohmfiltercategory .dropdown-menuwrapper').toggle();
	});

	$('.ohmfiltercategory .form-group input').change(function() {
		var $this = $(this);
		$('body#category .p-listing-styled').fadeOut();
		$('body#category .p-listing-styled').each(function(e) {
			var x = $(this).data('idcategory');
			console.log(x);
			if (x.indexOf(parseInt($this.data('id')))) {
				console.log('found');
				$(this).fadeIn();
			}
			console.log(parseInt($this.data('id')));
		});



	});
});
