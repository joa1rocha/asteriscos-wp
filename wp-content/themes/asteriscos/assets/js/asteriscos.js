/*
	***Asteriscos
*/

(function($) {
	var setCurrentPage = function() {
		var navbar = $('#wrapper #nav .links > li.tab');
		var currentTab = navbar.find('a[href$="' +  window.location.pathname +'"]');

		currentTab.parent().addClass('active');

	};

	var removeWooCommerceBreadCrumbs = function () {
        // GO!
		$('.woocommerce-breadcrumb').remove();
        // AWAY!
    };

    $( document ).ready(function() {
    	setCurrentPage();
    	removeWooCommerceBreadCrumbs();
    });
})(jQuery);