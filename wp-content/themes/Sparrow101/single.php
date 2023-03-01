<?php get_header()?>
   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Blog<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">
           <?php
            if(have_posts()):
               while(have_posts()):
                  the_post();
            ?>
           
           
            <article class="post">

               <div class="entry-header cf">

                  <h1><?php the_title()?></h1>

                  <p class="post-meta">

                     <time class="date" datetime="<?php echo the_date('Y-m-d\TH:i')?>"><?php echo the_date()?></time>
                     /
                     <span class="categories">
                         <?php the_category(' / ')?>
                     </span>

                  </p>

               </div>

               <div class="post-thumb">
                    <?php  the_post_thumbnail('large') ?>
               </div>


               <div class="post-content">

                  <?php the_content() ?>
                  <p class="tags">
  			            <span>Tagged in </span>:
                      <?php the_tags()?>
                  </p>

                  <div class="bio cf">

                     <div class="gravatar">
                        <img src="images/author-img.png" alt="">
                     </div>
                     <div class="about">
                     <h5><a title="Posts by <?php the_author()?>" href=""><?php the_author()?></a></h5>

                     <p><?php echo get_the_author_meta()?>
                          
                        <a href="#">cursus</a> a sit <a href="#">amet mauris</a>. Morbi elit consequat ipsum.</p>
                     </div>

                  </div>
                   
                  <ul class="post-nav cf">
  			            <li class="prev"><a rel="prev" href="#"><?php previous_post_link('%link','<strong>Previous Article</strong> %title') ?></a></li>
  				         <li class="next"><a rel="next" href="#"><?php next_post_link('%link','<strong>Next Article</strong>  %title')?></a></li>
  			         </ul>

               </div>

            </article> <!-- post end -->
              <?php
                endwhile;
               endif;
              ?>
              
              <?php comments_template() ?>
            <!-- Comments
            ================================================== -->
          
         </div>

       <?php get_sidebar()?>
      </div>

   </div> <!-- Content End-->

   <?php get_footer()?>