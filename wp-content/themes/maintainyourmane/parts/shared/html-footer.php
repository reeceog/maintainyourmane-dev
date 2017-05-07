
	    <?php wp_footer(); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/js/unslider-min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {

                $('.banners').unslider({
                    autoplay: true,
                    delay: 8000
                });

                $('.testimonials').unslider({
                    autoplay: true,
                    delay: 8000
                });

//                jQuery('#right-slider').unslider({
//                    autoplay: true,
//                    delay: 8000
//                });

                jQuery(window).scroll(function(){
                    $(".text-out").css("opacity", 1 - $(window).scrollTop() / 750);
                });

                jQuery("#info div:nth-child(3)").addClass("margin-top");
                jQuery("select").addClass("form-control");
                jQuery("input").addClass("form-control");
                jQuery("textarea").addClass("form-control");

            });

            jQuery(window).scroll(function() {

                var scroll = jQuery(window).scrollTop();

                if (scroll >= 500) {
                    jQuery(".custom-nav").addClass("nav-scroll");
                }
            });

        </script>
	</body>
</html>