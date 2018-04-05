/*
	***Asteriscos
*/

(function($) {
	var setCurrentPage = function() {
		var navbar = $('#wrapper #nav .links > li.menu-item');
		var currentTab = navbar.find('a[href="' +  window.location.href +'"]');

		currentTab.parent().addClass('active');

	};

	var removeWooCommerceBreadCrumbs = function() {
        // GO!
		$('.woocommerce-breadcrumb').remove();
        // AWAY!
    };

	var removeSocialIconText = function() {
		$('li.icon a').text('');
	};

    $( document ).ready(function() {
    	setCurrentPage();
    	removeWooCommerceBreadCrumbs();
        removeSocialIconText();
    });
})(jQuery);