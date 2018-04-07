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

	var homeCarousel = function () {
        var clickEvent = false;
        $('#myCarousel').on('click', '.list-group li', function() {
            clickEvent = true;
            $('.list-group li').removeClass('active');
            $(this).addClass('active');
        }).on('slid.bs.carousel', function(e) {
            if(!clickEvent) {
                var count = $('.list-group').children().length -1;
                var current = $('.list-group li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if(count == id) {
                    $('.list-group li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    };

    $(document).ready(function() {
    	setCurrentPage();
    	removeWooCommerceBreadCrumbs();
        removeSocialIconText();
        homeCarousel();
    });
})(jQuery);