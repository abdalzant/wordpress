
   <?php 
   get_header()
   ?>
   <!-- Intro Section
   ================================================== -->
   <section id="intro">

      <!-- Flexslider Start-->
	   <div id="intro-slider" class="flexslider">

		   <ul class="slides">

			   <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Free amazing site template<span>.</span></h1>
							   <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit.</p>
						   </div>
                     <div class="slider-image">
                        <img src="<?php echo get_theme_file_uri('images/sliders/home-slider-image-01.png')?>" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

            <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Responsive + HTML5 + CSS3<span>.</span></h1>
							   <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti eos et accusamus. amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis.
                        Aenean condimentum, lacus sit amet luctus.</p>
						   </div>
                     <div class="slider-image">
                        <img src="<?php echo get_theme_file_uri('images/sliders/home-slider-image-02.png')?>" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

		   </ul>

	   </div> <!-- Flexslider End-->

   </section> <!-- Intro Section End-->

   <!-- Info Section
   ================================================== -->
   <section id="info">

      <div class="row">

         <div class="bgrid-quarters s-bgrid-halves">
           <?php dynamic_sidebar('home-middle-sidebar')?>
          

           </div>

      </div>

   </section> <!-- Info Section End-->

   <!-- Works Section
   ================================================== -->
   <section id="works">

      <div class="row">

         <div class="twelve columns align-center">
            <h1>Some of our recent works.</h1>
         </div>

         <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">
               <?php
                $portfolio =new WP_Query([
                     'post_type'=>'portfolio',
                     'post_per_page'=>4,

                ]);
                if($portfolio->have_posts()):
                  while($portfolio->have_posts()):
                     $portfolio->the_post();
               ?>
    		   <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="<?php the_permalink()?>">
                     <?php the_post_thumbnail('large')?>
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="<?php the_permalink() ?>"><?php the_title()?></a></h5>
                        
    					</div>
               </div>
    			</div>
               <?php
                 endwhile;
               endif;

               ?>
         

         </div>

      </div>

   </section> <!-- Works Section End-->

   <!-- Journal Section
   ================================================== -->
   <section id="journal">

      <div class="row">
         <div class="twelve columns align-center">
            <h1>Our latest posts and rants.</h1>
         </div>
      </div>

      <div class="blog-entries">
           <?php
           $blog =new WP_Query([
            'posts_per_page'=>3,
            'ignore_stick'=>true,
           ]);
           if($blog->have_posts()):
            while($blog->have_posts()):
               $blog->the_post();
           ?>
         <!-- Entry -->
         <article class="row entry">

            <div class="entry-header">

               <div class="permalink">
                  <a href="<?php the_permalink()?>"><i class="fa fa-link"></i></a>
               </div>

               <div class="ten columns entry-title pull-right">
                  <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
               </div>

               <div class="two columns post-meta end">
                  <p>
                  <time datetime="2014-01-31" class="post-date" pubdate=""><?php echo  get_the_date()?></time>
                  <span class="dauthor"><?php the_author()?></span>
                  </p>
               </div>

            </div>

            <div class="ten columns offset-2 post-content">
               <p><?php the_excerpt()?>
               <a class="more-link" href="<?php the_permalink()?>">Read More<i class="fa fa-arrow-circle-o-right"></i></a></p>
            </div>

         </article> <!-- Entry End -->
         <?php
           endwhile;
         endif;
         ?>
         
      </div> <!-- Entries End -->

   </section> <!-- Journal Section End-->

   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="eight columns offset-1">

            <h1><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h1>
            <p>Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
					Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>. 
					<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. --></p>

         </div>

         <div class="three columns action">

            <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>

         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->
   <?php 
   get_footer()
   ?>