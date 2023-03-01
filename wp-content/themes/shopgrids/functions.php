<?php





function style_custom(){
    wp_enqueue_style('custom_style',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('custom_style1',get_template_directory_uri().'/assets/css/LineIcons.3.0.css');
    wp_enqueue_style('custom_style2',get_template_directory_uri().'/assets/css/tiny-slider.css');
    wp_enqueue_style('custom_style3',get_template_directory_uri().'/assets/css/glightbox.min.css');
    wp_enqueue_style('custom_style4',get_template_directory_uri().'/assets/css/main.css');
    wp_enqueue_style('custom_style5',get_template_directory_uri().'/assets/images/favicon.svg');
    wp_enqueue_script('custom_script6',get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_enqueue_script('custom_script7',get_template_directory_uri().'/assets/js/tiny-slider.js');
    wp_enqueue_script('custom_script8',get_template_directory_uri().'/assets/js/glightbox.min.js');
    wp_enqueue_script('custom_script9',get_template_directory_uri().'/assets/js/main.js');

}
add_action('wp_enqueue_scripts','style_custom');

function sparrow_setup() {
    register_nav_menus([
        'primary-nav' =>'Primary Menu',
        'navbar-nav' =>'navbar Menu',        
        'footer-nav' =>'Footer Menu',
        'footer-social-nav' =>'Footer Social Menu',
    ]);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('archive-image',640,246,true);
    add_theme_support('custom-logo',[
        'width'=>25,
        'height' => 25,
        
        

    ]);
    
}
add_action('after_setup_theme','sparrow_setup');
   

   function image_size_custom(){
        add_image_size('blog-img',320,185);
   }
   
   add_action('init','image_size_custom');


   function cate_size_custom(){
    add_image_size('blog-cate',201,204);
    }
    add_action('init','cate_size_custom');

    function post_size_custom(){
        add_image_size('blog-post',400,231);
        }
        add_action('init','post_size_custom');
    
        function rated_size_custom(){
            add_image_size('single-list',48,48);
            }
            add_action('init','rated_size_custom');




?>
