<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/default.css') ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/layout.css')?>">
   <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'css/media-queries.css')?>">

   <!-- Script
   ================================================== -->
	<script src="<?php echo get_theme_file_uri('js/modernizr.js')?>"></script>

<?php wp_head() ?>
</head>

<body>

   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
               <?php the_custom_logo() ?>
            </div>
           
            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
                  
                <?php
                wp_nav_menu([
                    'theme_location'=> 'primary-nav',
                    'menu_id'=>'nav',
                    'menu_class'=>'nav',
                ])
                ?>

             

            </nav> 
            <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->
