<?php
add_theme_support('post-thumbnails');

include __DIR__ . '/inc/customizer.php';

function wpb_custom_new_menu() {
    register_nav_menu('main-menu',__( 'Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
  
function add_custom_li_class( $classes, $item, $args ) {
    $classes[] = 'custom-li-class';
    return $classes;
  }
  add_filter( 'nav_menu_css_class', 'add_custom_li_class', 10, 3 );
  

function theme_excerpt_length($length){
    return 20;
}
add_filter( 'excerpt_length', 'theme_excerpt_length',10  );



function theme_title($title){
    if(is_admin()) {
        return $title;
    }  
    if(str_word_count($title) > 6) {
        $result = implode(' ', array_slice(str_word_count($title, 2), 0, 6));
        return $result . '[…]';

    }

    return $title ;
}
add_filter( 'the_title', 'theme_title' );


// function theme_title($title){
//     return "<h1 style='color:red;'>".$title."</h1>";
// }
// add_filter( 'the_title', 'theme_title' );

?>