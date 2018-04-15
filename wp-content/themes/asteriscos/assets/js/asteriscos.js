/*
	***Asteriscos
*/

(function($) {
	var setCurrentPage = function() {
		var navbar = $('#wrapper #nav .links > li.menu-item');
		var currentTab = navbar.find('a[href="' +  window.location.href +'"]');

		currentTab.parent().addClass('active');

	};

	var removeSocialIconText = function() {
		$('li.icon a').text('');
	};

	var homeNoticiasCarousel = function () {
        var clickEvent = false;

        $('#myCarousel').hover(function(e) {
            $(".list-group li.active").toggleClass('hover');
        });

        $('#myCarousel').on('click', '.list-group li', function() {
            clickEvent = true;
            $('.list-group li').removeClass('active').addClass('hover');
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

    /**
     * Get rid annoying woocommerce bread crumbs
     */
    var removeBreadCrumbs = function() {
        // GO!
        $('.woocommerce-breadcrumb').remove();
        // AWAY!
    };

    /**
     * Set Featured Icon for woocommerce products
     */
	var setFeaturedIcon = function() {
        var featuredIcon = '<span class="featured"><img src="/wp-content/themes/asteriscos/assets/images/novidade.png"></span>',
            featuredProducts = $('.woocommerce ul.products li.product.featured .wp-post-image');

        featuredProducts.parent().prepend(featuredIcon);

    };

	var initOwlCarousel = function() {
        $('.owl-carousel').owlCarousel({
            center: false,
            items: 6,
            loop: false,
            margin: 10,
            nav: false,
            mouseDrag: false,
        });
    };

	var wooCommerceTweaks = function() {
        removeBreadCrumbs();
        setFeaturedIcon();
    };

    $(document).ready(function() {
    	setCurrentPage();
        removeSocialIconText();
        homeNoticiasCarousel();
        initOwlCarousel();
        wooCommerceTweaks();
    });
})(jQuery);