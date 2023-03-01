<?php
get_header()

?>
<section class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 custom-padding-right">
                
            
            
            <div class="slider-head">
                    <div class="hero-slider">
                    <?php
                $oferrs =new WP_Query([
                   
                    'post_type' => 'offer',
                    'posts_per_page'=> 2

                    
                ]);
                if($oferrs->have_posts()):
                  while($oferrs->have_posts()):
                     $oferrs->the_post();
               ?>
                     
                     <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            echo '<li  style="background: url('. $url.');background-repeat: no-repeat; " >'; ?>
                    <div class="single-slider" >
          
                            <div class="content">
                                <h2>
                                    <span> </span>
                                    <?php the_title()?>
                                </h2>
                                <p>
                                    <?php the_content()?>
                                </p>
                                <h3><span>Now Only</span> $320.99</h3>
                                <div class="button">
                                    <a href="<?php the_permalink()?>" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;endif;?>
                        
                    </div>
                </div>
               
            </div>


            <div class="col-lg-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12 md-custom-padding">

                    <?php
                $pro =new WP_Query([
                   
                    'post_type' => 'product',
                
                     'posts_per_page'=> 1
                     
                ]);
              
                if($pro->have_posts()):
                  while($pro->have_posts()):
                     $pro->the_post();
                    
               ?>
                <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            echo '<li  style="background: url('. $url.');background-repeat: no-repeat; " >'; ?>
                        <div class="hero-small-banner" >
                       
                            <div class="content">
                                <h2>
                                    <span><?php _e('New line required')?></span>
                                   <a href="<?php the_permalink()?>"> <?php the_title()?></a>
                                </h2>
                                <h3>$500</h3>
                            </div>
                        </div>
                   <?php  endwhile; endif?>     
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="hero-small-banner style2">
                            <div class="content">
                                <h2><?php _e('Weekly Sale!')?></h2>
                                <p>
                                   <?php _e('Saving up to 50% off all online store items this week.')?> 
                                </p>
                                <div class="button">
                                    <a class="btn" href="localhost/wordpress/shop/"><?php _e('Shop Now')?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-categories section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php _e('Featured Categories')?></h2>
                    <p>
                        <?php
                        _e('There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.
                        ')?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $cat =new WP_Query([
                   
                    'post_type' => 'product',
                    'posts_per_page'=> 6,
                    'offset' => 10,
                   
                    
                ]);
                if($cat->have_posts()):
                  while($cat->have_posts()):
                     $cat->the_post();
               ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-category">
                    <h3 class="heading"><?php the_title()?></h3>

                    <ul>
                        <?php
                    wp_nav_menu([
                        'theme_location'=> 'navbar-nav',
                        
                    ])
                    ?>

                    </ul>

                    <div class="images">
                        <?php the_post_thumbnail('blog-cate')?>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
        endif;
            ?>

        </div>
    </div>
</section>

<section class="trending-product section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php _e('Trending Product')?></h2>
                    <p>
                        <?php _e('
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.')?>
                    
                        </p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
                $products =new WP_Query([
                   
                    'post_type' => 'product',
                     'offset' => 16,
                     'posts_per_page'=> 8
                    
                ]);
                if($products->have_posts()):
                  while($products->have_posts()):
                     $products->the_post();
               ?>



            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-product">
                    <div class="product-image">
                        <?php the_post_thumbnail('blog-img')?>
                        <div class="button">
                            <a href="<?php the_permalink()?>" class="btn"><i class="lni lni-cart"></i><?php _e('Add to Cart')?></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="category"><?php the_category()?></span>
                        <h4 class="title">
                            <a href="<?php the_permalink()?>"><?php the_title()?></a>
                        </h4>

                        <ul class="review">
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                            <li><span>4.0 Review(s)</span></li>
                        </ul>
                        <div class="price">
                            <span> </span>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            
           endwhile;
        endif;
        ?>
        </div>

    </div>

</section>

<section class="banner section">
    <div class="container">
        <div class="row">
            <?php
                $oferrs =new WP_Query([
                   
                    'post_type' => 'offer',
                    'offset'=>2,
                    'posts_per_page'=> 2
                    
                ]);
                if($oferrs->have_posts()):
                  while($oferrs->have_posts()):
                     $oferrs->the_post();
               ?>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner custom-responsive-margin">
                    <?php  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            echo '<li  style="background: url('. $url.'); " >';?>

                    <div class="content">
                        <h2><?php the_title()?></h2>
                        <p>
                            <?php the_content()?>
                        </p>
                        <div class="button">
                            <a href="<?php the_permalink()?>" class="btn"><?php _e('View Details')?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
          endwhile;
        endif;
        ?>
        </div>

    </div>
</section>



<section class="home-product-list section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                <h4 class="list-title"><?php _e('Best Sellers')?></h4>


                <?php
                $pro =new WP_Query([
                   
                    'post_type' => 'product',
                     'offset' => 7,
                     'posts_per_page'=> 3
                    
                ]);
                if($pro->have_posts()):
                  while($pro->have_posts()):
                     $pro->the_post();
               ?>
                <div class="single-list">
                    <div class="list-image">
                        <?php the_post_thumbnail('single-list')?>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="<?php the_permalink()?>"><?php the_title() ?></a>
                        </h3>
                        <span>$287.99</span>
                    </div>
                </div>
                <?php  endwhile;endif; ?>



            </div>

            <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                <h4 class="list-title"><?php _e('New Arrivals')?></h4>
                <?php
                $pro =new WP_Query([
                   
                    'post_type' => 'product',
                     'offset' => 4,
                     'posts_per_page'=> 3
                    
                ]);
                if($pro->have_posts()):
                  while($pro->have_posts()):
                     $pro->the_post();
               ?>
                <div class="single-list">
                    <div class="list-image">
                        <?php the_post_thumbnail('single-list')?>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="<?php the_permalink()?>"><?php the_title() ?></a>
                        </h3>
                        <span>$1150.00</span>
                    </div>
                </div>
                <?php endwhile; endif?>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <h4 class="list-title"><?php _e('Top Rated')?></h4>
                <?php
                $pro =new WP_Query([
                   
                    'post_type' => 'product',
                    'offset' => 1,
                     'posts_per_page'=> 3
                    
                ]);
                if($pro->have_posts()):
                  while($pro->have_posts()):
                     $pro->the_post();
               ?>
                <div class="single-list">
                    <div class="list-image">
                        <?php the_post_thumbnail('single-list')?>
                    </div>
                    <div class="list-info">
                        <h3>
                            <a href="<?php the_permalink()?>"><?php the_title() ?></a>
                        </h3>
                        <span>$68.00</span>
                    </div>
                </div>
                <?php endwhile; endif?>
            </div>
        </div>
    </div>
</section>


<div class="brands">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <h2 class="title"><?php _e('Popular Brands')?></h2>
            </div>
        </div>
        <div class="brands-logo-wrapper">
            <?php
                wp_nav_menu([
                    'theme_location'=> 'footer-social-nav',
                    'container'=>'',
                    'menu_class'=>'footer-social',
                    'depth'=>1,
    
                ])
                ?>
            <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                <div class="brand-logo">
                    <img src="<?php echo get_theme_file_uri('assets/images/brands/01.png')?>" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="<?php echo get_theme_file_uri('assets/images/brands/02.png')?>" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="<?php echo get_theme_file_uri('assets/images/brands/03.png')?>" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="<?php echo get_theme_file_uri('assets/images/brands/04.png')?>" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="<?php echo get_theme_file_uri('assets/images/brands/05.png')?>" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="<?php echo get_theme_file_uri('assets/images/brands/06.png')?>" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="<?php echo get_theme_file_uri('assets/images/brands/03.png')?>" alt="#" />
                </div>
                <div class="brand-logo">
                    <img src="<?php echo get_theme_file_uri('assets/images/brands/04.png')?>" alt="#" />
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php _e('Our Latest News')?></h2>
                    <p>
                       <?php _e(' There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.')?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $portfolio =new WP_Query([
                     'post_type'=>'post',

                     

                ]);
                if($portfolio->have_posts()):
                  while($portfolio->have_posts()):
                     $portfolio->the_post();
               ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="<?php the_permalink()?>">
                            <?php the_post_thumbnail('blog-post')?>
                        </a>
                    </div>
                    <div class="blog-content">
                        <a class="category" href="<?php the_permalink()?>"><?php the_title()?></a>
                        <h4>

                        </h4>

                        <div class="button">
                            <a href="<?php the_permalink()?>" class="btn"><?php _e('Read More')?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
               endif;
              ?>
        </div>

    </div>
</section>


<?php get_footer()?>