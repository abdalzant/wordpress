<?php get_header()?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title"><?php _e('Single Product')?></h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i><?php _e(' Home')?></a></li>
                    <li><a href="index.html"><?php _e('Shop')?></a></li>
                    <li><?php _e('Single Product')?></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="item-details section">
    <div class="container">
        <?php
            if(have_posts()):
               while(have_posts()):
                  the_post();
            ?>
        <div class="main-content-head">
            <div class="post-thumbnils">
               <?php the_post_thumbnail()?>
            </div>
            <div class="meta-information">
                <h5 class="post-title">
                    <a href="<?php the_permalink()?>"><?php the_title()?></a>
               </h5>
               <p><?php the_content()?></p>   
               

            </div>
           
        </div>
       
        <?php
         endwhile;
         endif;
    ?>

    </div>
    
</section>


<?php get_footer()?>