<?php get_header() ?>

<main class="container" >
    <?php 
        if( have_posts() ):
            the_post(); ?>

<div class="card" style="width: 18rem;">
  <?php the_post_thumbnail('medium',["class"=> "card-img-top "]) ?>
    <h5 class="card-title"> <?php the_title( ); ?> </h5>
    <p class="card-text"> <?php the_content( ); ?> </p>
    <p class="card-text"><small class="text-muted"> <?php the_date('Y-m-d h-i-s'); ?> </small></p>
    <a href="<?php echo site_url() ?>">more</a>
  </div>
</div>


    <?php 
        endif ?>
</main>

<?php get_footer() ?>

 
