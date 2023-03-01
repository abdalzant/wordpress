<?php get_header() ?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Blog Single Sidebar</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Blog Single Sidebar</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php if (have_posts()) :
    the_post();
?>



<section class="section blog-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="single-inner">
                    <div class="post-details">
                        <div class="main-content-head">
                            <div class="meta-information">
                                <h2 class="post-title">
                                <?php the_title() ?>.
                                </h2>

                                <ul class="meta-info">
                                    <li>
                                        <a href="javascript:void(0)">By <?php the_author() ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><?php the_date() ?></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Marketing</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-thumbnils">
                            <?php the_post_thumbnail('full') ?>
                            </div>
                            <div class="detail-inner">
                                <p>
                                <?php the_content( ) ?>                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            

           
            </div>
            <aside class="col-lg-4 col-md-12 col-12">
                <div class="sidebar">



                    <div class="widget categories-widget">
                        <h5 class="widget-title">Categories</h5>
                        <?php the_category() ?>
                        <!-- <ul class="custom">
                            <li>
                                <a href="javascript:void(0)">Web Design</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Branding</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Graphic Design</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Marketing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Wireframing</a>
                            </li>
                        </ul> -->
                    </div>

                    <div class="widget popular-tag-widget">
                        <h5 class="widget-title">Popular Tags</h5>
                        <div class="tags">
                        <?php the_tags() ?>

                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php endif; ?>



<?php get_footer() ?>