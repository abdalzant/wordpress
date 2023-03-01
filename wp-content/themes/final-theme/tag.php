<?php get_header() ?>

<div class="breadcrumbs">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6 col-12">
        <div class="breadcrumbs-content">
          <h1 class="page-title">Blog Grid Sidebar</h1>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <ul class="breadcrumb-nav">
          <li><a href="index.html">Home</a></li>
          <li>Blog Grid Sidebar</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<section class="section blog-grid-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-12">
        <div class="row">
          <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

              <div class="col-lg-6 col-md-6 col-12">
                <div class="single-blog-grid">
                  <div class="blog-img">
                    <a href="blog-single.html">
                      <?php the_post_thumbnail(array(300, 180)) ?>
                      <!-- <img src="assets/images/blog/blog-1.jpg" alt="#" /> -->
                    </a>
                  </div>
                  <div class="blog-content">
                    <a class="category" href="javascript:void(0)"><?php the_category(",") ?></a>
                    <h4>
                      <a href="blog-single.html"><?php the_title() ?></a>
                    </h4>
                    <p>
                      <?php the_excerpt(5) ?>
                    </p>
                    <a href="<?php the_permalink() ?>" class="more-btn">Read Blog <i class="lni lni-arrow-right"></i></a>
                  </div>
                </div>
              </div>
          <?php
            endwhile;
          endif ?>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="client-logo">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-3 col-12 text-center">
        <div class="single-logo">
          <img src="<?php echo get_theme_file_uri('assets/images/client-logo/graygrids-logo.svg') ?>" alt="#">
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-12 text-center">
        <div class="single-logo">
          <img src="<?php echo get_theme_file_uri('assets/images/client-logo/lineicons-logo.svg') ?>" alt="#">
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-12 text-center">
        <div class="single-logo">
          <img src="<?php echo get_theme_file_uri('assets/images/client-logo/pagebulb-logo.svg') ?>" alt="#">
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-12 text-center">
        <div class="single-logo">
          <img src="<?php echo get_theme_file_uri('assets/images/client-logo/uideck-logo.svg') ?>" alt="#">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>
