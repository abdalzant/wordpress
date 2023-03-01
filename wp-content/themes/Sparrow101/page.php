    <?php get_header()?> 
    <?php
    if(have_posts()):
      while(have_posts()):
         the_post();
    
    
    ?>
   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1><?php the_title()?><span>.</span></h1>

            <p><?php the_excerpt()?></p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row page">

         <div id="primary" class="eight columns">

           <?php the_content()?>
         </div> <!-- primary end -->

         <?php get_sidebar()?>
      </div> <!-- page-content End-->

   </div> <!-- Content End-->
      <?php
      endwhile;
      endif;
      ?>
  <?php  get_footer()?>