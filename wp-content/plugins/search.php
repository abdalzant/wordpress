<?php
/*
* Plugin Name:  shortcode
 * Plugin URI:  https://wordpress.org
 * Description: Enables the WordPress classic editor and the old-style Edit Post screen with TinyMCE, Meta Boxes, etc. Supports the older plugins that extend this screen.
 * Version:     1.6.2
 * Author:      abdalzant

*/



function mysearch_add_shortcode(){
    add_shortcode('search-form','mysearch_letter');
}
add_action('init','mysearch_add_shortcode');

function mysearch_letter(){

  $out ='
  
  <div class="search-input">
  <form action="<?php home_url();?>" method="get">
  <input type="text" placeholder="Search" name="s" />
</div>
<div class="search-btn">
  <button type="submit"><i class="lni lni-search-alt"></i></button>
</div>
</form>';
return $out;


}