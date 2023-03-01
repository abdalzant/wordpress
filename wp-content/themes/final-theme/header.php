<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Blink - Startup & SaaS Bootstrap 5 Template.</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_theme_file_uri('assets/images/favicon.svg') ?>" />

<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/LineIcons.3.0.css') ?>" />
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/animate.css') ?>" />
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/tiny-slider.css') ?>" />
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/glightbox.min.css') ?>" />
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/main.css') ?>" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/js/all.min.js" integrity="sha512-yk7SvYYZqGS11tWcb6cyoKiwgrNBeCHC7RebrVa0QOySVjh6WjEjaBaBue+VvDBHEfAGa0Z8/b6+LhoGSeweaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
<?php wp_head() ?>

<body>
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<div class="preloader" style="opacity: 0; display: none;">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>
<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">

                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand me-md-5" href="<?php echo site_url() ?>">

                            <img src="<?php echo get_theme_file_uri('assets/images/logo/logo.svg') ?>" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <!-- style="margin-left: 199px;" -->
                        <div class="collapse navbar-collapse sub-menu-bar ms-md-5"  id="navbarSupportedContent">
                        <?php wp_nav_menu(['menu_id'=>'nav','menu_class'=>'navbar-nav ms-md-5','theme_location'=>'main-menu']) ?>

                        </div>
                        <div class="button">
                            <a href="http://localhost/wordpress" class="signin">Sign In</a>
                            <a href="http://localhost/wordpress" class="signup">Sign Up</a>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>
<!--  
<ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="dd-menu active collapsed" href="index.html" data-bs-toggle="collapse" data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Home</a>
                                     <ul class="sub-menu collapse" id="submenu-1-1">
                                        <li class="nav-item"><a href="index.html">Saas Homepage</a></li>
                                        <li class="nav-item active"><a href="index2.html">Startup Homepage</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                     <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                        <li class="nav-item"><a href="pricing.html">Our Pricing</a></li>
                                        <li class="nav-item"><a href="services.html">Our Services</a></li>
                                        <li class="nav-item"><a href="signin.html">Sign In</a></li>
                                        <li class="nav-item"><a href="signup.html">Sign Up</a></li>
                                        <li class="nav-item"><a href="reset-password.html">Reset Password</a></li>
                                        <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                        <li class="nav-item"><a href="404.html">404 Error</a></li>
                                    </ul> 
                                </li>
                                <li class="nav-item">
                                    <a href="services.html" aria-label="Toggle navigation">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                     <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a href="blog-grid.html">Blog Grid</a>
                                        </li>
                                        <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" aria-label="Toggle navigation">Contact</a>
                                </li>
                             </ul> -->