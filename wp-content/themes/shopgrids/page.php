<?php get_header()?>
<?php
    if(have_posts()):
      while(have_posts()):
         the_post();
    
    
    ?>



<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title"><?php the_title()?></h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html"><i class="lni lni-home"></i> <?php _e('Home')?></a></li>
                    <li><?php the_title()?></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2><?php the_title()?></h2>
                            
                                
                            
                    </div>
                </div>
            </div>
           
        </div>
        <?php the_content()?>
    </div>
</section>
<?php
      endwhile;
      endif;
      ?>
<?php  get_footer()?>