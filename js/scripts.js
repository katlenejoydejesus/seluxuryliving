(function () {
    var app = {
        initAos: function () {
            setTimeout(function () {
                AOS.init();
            }, 1000);
        },

        initNavigation: function () {
            var $nav = jQuery("#nav, #nav2");
            if ($nav.length > 0) $nav.navTabDoubleTap();
        },

        initDetectScroll: function () {
            if (jQuery(window).width() > 991 && jQuery(window).scrollTop() > 56) {
                jQuery("header.header").addClass("show-fixed");
            } else {
                jQuery("header.header").removeClass("show-fixed");
            }
        },

        initSlideshow: function () {
            //code here
        },

        initListings: function () {
            //code here

            var sectionSlick = ".listings-slick";
            $(sectionSlick).slick({
                slidesToShow: 1,
                slideToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: false,
                autoplaySpeed: 7000,
                speed: 1000,
                arrows: false,
                rows: 1,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 1 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } },
                ],
            });
            var isSliding = false;
            jQuery(sectionSlick).on("beforeChange", function () {
                isSliding = true;
            });
            jQuery(sectionSlick).on("afterChange", function () {
                isSliding = false;
            });
            jQuery(".listings-image img").click(function (e) {
                if (isSliding) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
            });
        },

        initQuickSearch: function () {
            //code here
        },

        initWelcome: function () {
            //code here
        },

        initTeam: function () {
            //code here

            var sectionSlick = ".team-slick";
            $(sectionSlick).slick({
                slidesToShow: 5,
                slideToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: false,
                autoplaySpeed: 7000,
                speed: 1000,
                arrows: false,
                rows: 1,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 2 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } },
                ],
            });
            var isSliding = false;
            jQuery(sectionSlick).on("beforeChange", function () {
                isSliding = true;
            });
            jQuery(sectionSlick).on("afterChange", function () {
                isSliding = false;
            });
            jQuery(".team-image img").click(function (e) {
                if (isSliding) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
            });
        },

        initJoinTeam: function () {
            //code here
        },

        initProperties: function () {
            //code here
        },

        initSocial: function () {
            //code here
        },

        initContact: function () {
            //code here
        },
    };

    jQuery(document).ready(function () {
        app.initAos();
        app.initNavigation();

        app.initSlideshow();

        app.initListings();

        app.initQuickSearch();

        app.initWelcome();

        app.initTeam();

        app.initJoinTeam();

        app.initProperties();

        app.initSocial();

        app.initContact();
    });

    jQuery(window).on("scroll", function () {
        app.initDetectScroll();
    });

    jQuery(window).on("load", function () { });

    jQuery(window).on("resize", function () { });
})();
