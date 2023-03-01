<?php get_header( ) ?>
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
<body style="background-color: #f4f7fa;">
  
<?php if (have_posts()) :
    the_post();
?>



                                <?php the_content() ?>.
   
            

           
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
                



<?php endif; ?>
</body>

<?php get_footer() ?>
