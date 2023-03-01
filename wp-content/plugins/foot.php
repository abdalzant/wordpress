<?php
/**
 * Plugin Name: auther
 * Plugin URI:  https://wordpress.org
 * Description: Enables the WordPress classic editor and the old-style Edit Post screen with TinyMCE, Meta Boxes, etc. Supports the older plugins that extend this screen.
 * Version:     1.6.2
 * Author:      abdalzant
 * Text Domain: wpdocs_textdomain
 * Domain Path : /languages/
 */






add_action('add_meta_boxes',function(){
    add_meta_box('sing',__('add auter name'),'auter',array('post'));
});



function auter($post){
    $auter_name = get_post_meta($post->ID,'autername',true);
    $auter_date = get_post_meta($post->ID,'auterdate',true);
    $auter_num = get_post_meta($post->ID,'auternum',true);
    $auter_link = get_post_meta($post->ID,'auterurl',true);


    ?>
        <label for="atuh_name"><?php _e('auter name');?></label>
        <input 
        type="text" name="atuh_name" id="atuh_name" 
        value="<?php esc_attr_e($auter_name);?>"
        >
        <label for="atuh_date"><?php _e('auter date');?></label>
        <input 
        type="date" name="atuh_date" id="atuh_date" 
        value="<?php esc_attr_e($auter_date);?>"
        >
        <label for="atuh_num"><?php _e('auter num');?></label>
        <input 
        type="number" name="atuh_num" id="atuh_num" 
        value="<?php esc_attr_e($auter_num);?>"
        >
        <label for="atuh_link"><?php _e('auter link');?></label>
        <input 
        type="url" name="atuh_link" id="atuh_link" 
        value="<?php esc_attr_e($auter_link);?>"
        >
    <?php
}


add_action('save_post_post','save_auter',2,99999);
function save_auter($post_id){
    if(isset($_POST['atuh_name'])){
        update_post_meta($post_id,'autername',$_POST['atuh_name']);
    }
    
    if(isset($_POST['atuh_date'])){
        update_post_meta($post_id,'auterdate',$_POST['atuh_date']);
    }
    if(isset($_POST['atuh_num'])){
        update_post_meta($post_id,'auternum',$_POST['atuh_num']);
    }
    if(isset($_POST['atuh_link'])){
        update_post_meta($post_id,'auterurl',$_POST['atuh_link']);
    }
   
}