<?php

function sparrow_setup() {
    register_nav_menus([
        'primary-nav' =>'Primary Menu',
        'footer-nav' =>'Footer Menu',
        'footer-social-nav' =>'Footer Social Menu',
    ]);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('archive-image',640,246,true);
    add_theme_support('custom-logo',[
        'width'=>226,
        'height' => 48,
        'flex-height'=>true,
        'flex-width'=>true,
        'unlink-homepage-logo'=>false, 
        

    ]);
}
add_action('after_setup_theme','sparrow_setup');
function sparrow_sidebars(){
    register_sidebar([
        'id' =>'home-middle-sidebar',
        'name'=>'Home Middle Sidebar',
        'before_widget'=>'<div id="%1$s" class="columns %2$s ">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="$2%s">',
        'after_title'=>'</h2>',

    ]);
    register_sidebar([
        'id'=>'right-sidebar',
        'name'=>'Right Sidebar',
        'before_widget'=>'<div id="%1$s" class="widget %2$s ">',
        'after_widget'=>'</div>',
        'before_title'=>'<h5 class="widget-title $2%s">',
        'after_title'=>'</h5>',
    ]);
}
add_action('widgets_init','sparrow_sidebars');





?>