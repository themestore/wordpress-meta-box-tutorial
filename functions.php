<?php

function themestore_get_all_menus() {
  $menu_obj = get_terms( 'nav_menu' );
  return $menu_obj;
}
 
function themestore_generate_menu_from_items($items) {
  if(count($items)>0):
    $menu_list = '<ul id="menu-' . $menu_to_use . '">';
      foreach ( (array) $items as $key => $menu_item ) {
        $title = $menu_item->title;
        $url = $menu_item->url;
        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
      }
    $menu_list .= '</ul>';
    return $menu_list;
  endif;
}

?>