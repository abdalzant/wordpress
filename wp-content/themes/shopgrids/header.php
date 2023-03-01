<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head() ?>
    
  </head>
  <body <?php body_class('test') ?>>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-icon">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>

    <header class="header navbar-area">
      <div class="topbar">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="top-left">
                <ul class="menu-top-link">
                  <li>
                    <div class="select-position">
                      <select id="select4">
                        <option value="0" selected><?php _e('$ USD')?></option>
                        <option value="1"><?php _e('€ EURO')?></option>
                        <option value="2"><?php _e('$ CAD')?></option>
                        <option value="3"><?php _e('₹ INR')?></option>
                        <option value="4"><?php _e('¥ CNY')?></option>
                        <option value="5"><?php _e('৳ BDT')?></option>
                      </select>
                    </div>
                  </li>
                  <li>
                    <div class="select-position">
                      <select id="select5">
                        <option value="0" selected><?php _e('English')?></option>
                        <option value="1"><?php _e('Español')?></option>
                        <option value="2"><?php _e('Filipino')?></option>
                        <option value="3"><?php _e('Français')?></option>
                        <option value="4"><?php _e('العربية')?></option>
                        <option value="5"><?php _e('हिन्दी')?></option>
                        <option value="6"><?php _e('বাংলা')?></option>
                      </select>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="top-middle">
               
                <?php
                wp_nav_menu([
                    'theme_location'=> 'primary-nav',
                    'menu_id'=>'nav',
                    'menu_class'=>'useful-links',
                ])
                ?>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <div class="top-end">
                <div class="user">
                  <i class="lni lni-user"></i>
                  <?php _e('Hello')?>
                </div>
                <ul class="user-login">
                  <li>
                    <a href="login.html"><?php _e('Sign In')?></a>
                  </li>
                  <li>
                    <a href="register.html"><?php _e('Register')?></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="header-middle">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-3 col-7">
              <a class="navbar-brand" href="index.html">
              <?php the_custom_logo() ?>
              </a>
            </div>
            <div class="col-lg-5 col-md-7 d-xs-none">
              <div class="main-menu-search">
                <div class="navbar-search search-style-5">
                  <div class="search-select">
             
                  </div>
                 
                  <div class="search-input">
                    <form action="<?php home_url();?>" method="get">
                    <input type="text" placeholder="Search" name="s" />
                  </div>
                  <div class="search-btn">
                    <button type="submit"><i class="lni lni-search-alt"></i></button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-2 col-5">
              <div class="middle-right-area">
                <div class="nav-hotline">
                  <i class="lni lni-phone"></i>
                  <h3>
                  <?php _e('Hotline:')?>
                    <span><?php _e('(+100) 123 456 7890')?></span>
                  </h3>
                </div>
                <div class="navbar-cart">
                  <div class="wishlist">
                    <a href="javascript:void(0)">
                      <i class="lni lni-heart"></i>
                      <span class="total-items"><?php _e('0')?></span>
                    </a>
                  </div>
                  <div class="cart-items">
                    <a href="javascript:void(0)" class="main-btn">
                      <i class="lni lni-cart"></i>
                      <span class="total-items">2</span>
                    </a>

                    <div class="shopping-item">
                      
                      <div class="button w-100">
                          <a href="http://localhost/wordpress/checkout/" class="btn animate"
                            ><?php _e('View Cart')?></a
                          >
                        </div>
                      <div class="bottom">
                        
                        <div class="button">
                          <a href="http://localhost/wordpress/checkout/" class="btn animate"
                            ><?php _e('Checkout')?></a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </header>