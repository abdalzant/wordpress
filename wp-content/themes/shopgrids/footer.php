
    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-3 col-md-4 col-12">
                <div class="footer-logo">
                  <a href="index.html">
                    <img src="<?php echo get_theme_file_uri('assets/images/logo/white-logo.svg')?>" alt="#" />
                  </a>
                </div>
              </div>
              <div class="col-lg-9 col-md-8 col-12">
                <div class="footer-newsletter">
                  <h4 class="title">
                    <?php _e('Subscribe to our Newsletter')?>
                    <span
                      ><?php _e('Get all the latest information, Sales and Offers.')?></span
                    >
                  </h4>
                  <div class="newsletter-form-head">
                    <form
                      action="#"
                      method="get"
                      target="_blank"
                      class="newsletter-form"
                    >
                      <input
                        name="EMAIL"
                        placeholder="Email address here..."
                        type="email"
                      />
                      <div class="button">
                        <button class="btn">
                          <?php _e('Subscribe')?><span class="dir-part"></span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-middle">
        <div class="container">
          <div class="bottom-inner">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer f-contact">
                  <h3><?php _e('Get In Touch With Us')?></h3>
                  <p class="phone"><?php _e('Phone: +1 (900) 33 169 7720')?></p>
                  <ul>
                    <li><span><?php _e('Monday-Friday:')?> </span> <?php ('9.00 am - 8.00 pm')?></li>
                    <li><span><?php _e('Saturday: ')?></span> <?php ('10.00 am - 6.00 pm')?></li>
                  </ul>
                  <p class="mail">
                    <a
                      href="/cdn-cgi/l/email-protection#e794929797889593a7948f889780958e8394c984888a"
                      ><span
                        class="__cf_email__"
                        data-cfemail="eb989e9b9b84999fab9883849b8c99828f98c5888486"
                        ><?php _e('[email&#160;protected]')?></span
                      ></a
                    >
                  </p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer our-app">
                  <h3><?php _e('Our Mobile App')?></h3>
                  <ul class="app-btn">
                    <li>
                      <a href="javascript:void(0)">
                        <i class="lni lni-apple"></i>
                        <span class="small-title"><?php _e('Download on the')?></span>
                        <span class="big-title"><?php _e('App Store')?></span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">
                        <i class="lni lni-play-store"></i>
                        <span class="small-title"><?php _e('Download on the')?></span>
                        <span class="big-title"><?php _e('Google Play')?></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer f-link">
                  <h3><?php _e('Information')?></h3>
                  <?php
                  wp_nav_menu([
                      'theme_location'=> 'footer-nav',
                      'container'=>'',
                      'menu_class'=>'footer-nav',
                      'depth'=>1,

                  ])
                  ?>  
                  
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer f-link">
                  <h3><?php _e('Shop Departments')?></h3>
                  <ul>
                  <?php
                    wp_nav_menu([
                        'theme_location'=> 'navbar-nav',
                        
                    ])
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="inner-content">
            <div class="row align-items-center">
              <div class="col-lg-4 col-12">
                <div class="payment-gateway">
                  <span><?php _e('We Accept:')?></span>
                  <img
                    src="<?php echo get_theme_file_uri('assets/images/footer/credit-cards-footer.png')?>"
                    alt="#"
                  />
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <div class="copyright">
                  <p>
                   <?php _e(' Designed and Developed by')?><a
                      href="https://graygrids.com/"
                      rel="nofollow"
                      target="_blank"
                      ><?php the_author()?></a
                    >
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <ul class="socila">
                  <li>
                    <span><?php _e('Follow Us On:')?></span>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="lni lni-facebook-filled"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="lni lni-twitter-original"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="lni lni-instagram"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"
                      ><i class="lni lni-google"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
    </a>

   
    <script type="text/javascript">
      //========= Hero Slider
      tns({
        container: ".hero-slider",
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: [
          '<i class="lni lni-chevron-left"></i>',
          '<i class="lni lni-chevron-right"></i>',
        ],
      });

      //======== Brand Slider
      tns({
        container: ".brands-logo-carousel",
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
          0: {
            items: 1,
          },
          540: {
            items: 3,
          },
          768: {
            items: 5,
          },
          992: {
            items: 6,
          },
        },
      });
    </script>
    <script>
      const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

      const timer = () => {
        const now = new Date().getTime();
        let diff = finaleDate - now;
        if (diff < 0) {
          document.querySelector(".alert").style.display = "block";
          document.querySelector(".container").style.display = "none";
        }

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor(
          (diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((diff % (1000 * 60)) / 1000);

        days <= 99 ? (days = `0${days}`) : days;
        days <= 9 ? (days = `00${days}`) : days;
        hours <= 9 ? (hours = `0${hours}`) : hours;
        minutes <= 9 ? (minutes = `0${minutes}`) : minutes;
        seconds <= 9 ? (seconds = `0${seconds}`) : seconds;

        document.querySelector("#days").textContent = days;
        document.querySelector("#hours").textContent = hours;
        document.querySelector("#minutes").textContent = minutes;
        document.querySelector("#seconds").textContent = seconds;
      };
      timer();
      setInterval(timer, 1000);
    </script>
    <?php wp_footer() ?>
  </body>
</html>
