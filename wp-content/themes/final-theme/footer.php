

<footer class="footer section">

<div class="footer-top">
<div class="container">
<div class="inner-content">
<div class="row">
<div class="col-lg-4 col-md-6 col-12">

<div class="single-footer f-about">
<div class="logo">
<a href="index.html">
<img src="<?php echo get_theme_file_uri('assets/images/logo/logo.svg') ?>" alt="#">
</a>
</div>
<p>Making the world a better place through constructing elegant hierarchies.</p> 
<p class="copyright-text"><span style="color:<?php echo get_theme_mod('color_font','') ?>"><?php echo get_theme_mod( 'copy_right' ) ?>.</span>Designed and Developed by <a href="#" rel="nofollow" target="_blank">Yahya</a>
</p>
</div>

</div>
<div class="col-lg-2 col-md-6 col-12">

<div class="single-footer f-link">
<h3>Solutions</h3>
<ul>
<li><a href="javascript:void(0)">Marketing</a></li>
<li><a href="javascript:void(0)">Analytics</a></li>
<li><a href="javascript:void(0)">Commerce</a></li>
<li><a href="javascript:void(0)">Insights</a></li>
</ul>
</div>

</div>
<div class="col-lg-2 col-md-6 col-12">

<div class="single-footer f-link">
<h3>Support</h3>
<ul>
<li><a href="javascript:void(0)">Pricing</a></li>
<li><a href="javascript:void(0)">Documentation</a></li>
<li><a href="javascript:void(0)">Guides</a></li>
<li><a href="javascript:void(0)">API Status</a></li>
</ul>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-footer newsletter">
<h3>Subscribe</h3>
<p>Subscribe to our newsletter for the latest updates</p>
<form action="#" method="get" target="_blank" class="newsletter-form">
<input name="EMAIL" placeholder="Email address" required="required" type="email">
<div class="button">
<button class="sub-btn"><i class="lni lni-envelope"></i>
</button>
</div>
</form>
</div>

</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="scroll-top">
<i class="lni lni-chevron-up"></i>
</a>

<script src="<?php echo get_theme_file_uri('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('assets/js/wow.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('assets/js/tiny-slider.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('assets/js/glightbox.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('assets/js/count-up.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('assets/js/main.js') ?>"></script>
<script>
        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
                1170: {
                    items: 2,
                }
            }
        });

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
    <?php wp_footer() ?>

</body>
</html>