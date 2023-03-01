 <?php get_header()?>
 <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1><?php the_archive_title() ?><span>.</span></h1>

           </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">
             <?php
             if(have_posts()) :
                while(have_posts()) :
                    the_post();
             
             ?>
            <article class="post">

               <div class="entry-header cf">

                  <h1><a href="<?php the_permalink()?>" title=""><?php the_title()?></a></h1>

                  <p class="post-meta">

                     <time class="date" datetime="<?php echo get_the_date('Y-m-d\TH:i')?>"><?php echo get_the_date('')?></time>
                     /
                     <span class="categories">
                       <?php
                       the_category(' / ')
                       ?>
                     </span>

                  </p>

               </div>
               <?php
               if(has_post_thumbnail()) : ?>
               <div class="post-thumb">
                  <a href="<?php the_permalink()?>" title=""><?php the_post_thumbnail('medium')?></a>
               </div>
                <?php
                
                endif;
                
                ?>
               <div class="post-content">

                 <?php the_excerpt() ?>
               </div>

            </article> <!-- post end -->
            <?php
             endwhile;
             endif;            
            ?>
           <?php
           the_posts_pagination()
           
           ?>
           
            <!-- Pagination -->
            

         </div> <!-- Primary End-->

         <?php  get_sidebar()?>
      </div>

   </div> <!-- Content End-->
   <?php get_footer()?>