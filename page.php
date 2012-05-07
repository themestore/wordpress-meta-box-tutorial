<div class="column">
 
<?php
  $id = get_the_ID();
 
  /*
  * Grab the saved menu name that we saved with our Meta Box
  */
  $menu_to_use = get_post_meta($id, 'themestore-meta-menu-name', 1);
 
  /*
  * Get the menu item elements for this out menu
  */
  $items = wp_get_nav_menu_items( $menu_to_use );   
 
  /*
  * Print the html
  */
  echo themestore_generate_menu_from_items( $items );
?>
 
</div>