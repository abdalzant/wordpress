<!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweet Section End-->



   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">
      
           
            <?php
            wp_nav_menu([
                'theme_location'=> 'footer-nav',
                'container'=>'',
                'menu_class'=>'footer-nav',
                'depth'=>1,

            ])
            ?>
			
               <?php
                wp_nav_menu([
                    'theme_location'=> 'footer-social-nav',
                    'container'=>'',
                    'menu_class'=>'footer-social',
                    'depth'=>1,
    
                ])
                ?>
         

            <ul class="copyright">
               <li>Copyright &copy; <?php echo date('Y')?> <?php bloginfo('title')?></li> 
               <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>               
            </ul>

         </div>

         <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script>window.jQuery || document.write('<script src="<?php echo get_theme_file_uri('js/jquery-1.10.2.min.js')?>"><\/script>')</script>
   <script type="text/javascript" src="<?php echo get_theme_file_uri('js/jquery-migrate-1.2.1.min.js')?>"></script>
    <script>
       $ =jQuery; 
    </script>
   <script src="<?php echo get_theme_file_uri('js/jquery.flexslider.js') ?>"></script>
   <script src="<?php echo get_theme_file_uri('js/doubletaptogo.js') ?>"></script>
   <script src="<?php echo get_theme_file_uri('js/init.js') ?>"></script>

</body>

</html>