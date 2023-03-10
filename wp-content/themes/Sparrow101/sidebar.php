<div id="secondary" class="four columns end">

<aside id="sidebar">
   <?php if(is_active_sidebar('right-sidebar')):
      dynamic_sidebar('right-sidebar');
   else :
    ?>
   <div class="widget widget_search">
      <h5>Search</h5>
      <?php
      get_search_form()
      ?>
   </div>

   <div class="widget widget_text">
      <h5 class="widget-title">Text Widget</h5>
      <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
      Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
      nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
      a sit amet mauris. Morbi accumsan ipsum velit. </div>
     </div>

   <div class="widget widget_categories">
      <h5 class="widget-title">Categories</h5>
      <ul class="link-list cf">
         <li><a href="#">Designs</a></li>
         <li><a href="#">Internet</a></li>
         <li><a href="#">Typography</a></li>
         <li><a href="#">Photography</a></li>
         <li><a href="#">Web Development</a></li>
         <li><a href="#">Projects</a></li>
         <li><a href="#">Other Stuff</a></li>
      </ul>
   </div>

   <div class="widget widget_tag_cloud">
      <h5 class="widget-title">Tags</h5>
      <div class="tagcloud cf">
         <a href="#">drupal</a>
         <a href="#">joomla</a>
         <a href="#">ghost</a>
         <a href="#">wordpress</a>
      </div>
   </div>

   <div class="widget widget_photostream">
      <h5>Photostream</h5>
      <ul class="photostream cf">
         <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
         <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
         <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
         <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
         <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
         <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
         <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
         <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
      </ul>
    </div>
<?php
endif;
?>
</aside> <!-- Sidebar End -->

</div> <!-- Comments End -->
