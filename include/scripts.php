

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- script for testimonials -->
<script>
    $(document).ready( () => {
        $('.owl-testimonial').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                items: 1,
                nav: false
                },
                480: {
                items: 1,
                nav: false
                },
                667: {
                items: 1,
                nav: true
                },
                1000: {
                items: 1,
                nav: true
                }
            }
        })
    })
</script>
<!-- //script for testimonials -->

<script src="assets/js/theme-change.js"></script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
    $(document).ready( () => {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                items: 1,
                nav: false
                },
                480: {
                items: 1,
                nav: false
                },
                667: {
                items: 1,
                nav: true
                },
                1000: {
                items: 1,
                nav: true
                }
            }
        })
    })
</script>
<!-- //script -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click( () => {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
    $(window).on("scroll", () => {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", () => {
        $("header").toggleClass("active");
    });
    $(document).on("ready", () => {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", () => {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>