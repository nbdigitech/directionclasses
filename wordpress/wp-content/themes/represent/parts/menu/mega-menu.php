<?php
/* Add support for our built in mega menu system */
if (!function_exists('represent_add_mega_menu_support')):
  function represent_add_mega_menu_support()
  {
    add_filter('wp_setup_nav_menu_item', 'represent_add_custom_nav_fields');
    add_action('wp_update_nav_menu_item', 'represent_update_custom_nav_fields', 10, 3);
    add_filter('wp_edit_nav_menu_walker', 'represent_edit_menu_walker', 10, 2);
  }
endif;
add_action('init', 'represent_add_mega_menu_support');
/* Add custom fields to menu */
if (!function_exists('represent_add_custom_nav_fields')):
  function represent_add_custom_nav_fields($menu_item)
  {
    $menu_item->mega_menu = get_post_meta($menu_item->ID, '_represent_mega_menu', true) ? 1 : 0;
    return $menu_item;
  }
endif;
/* Save custom fiedls to menu */
if (!function_exists('represent_update_custom_nav_fields')):
  function represent_update_custom_nav_fields($menu_id, $menu_item_db_id, $args)
  {
    $value = isset($_REQUEST['menu-item-mega-menu'][$menu_item_db_id]) ? 1 : 0;
    update_post_meta($menu_item_db_id, '_represent_mega_menu', $value);
  }
endif;
/* Edit nav menu walker */
if (!function_exists('represent_edit_menu_walker')):
  function represent_edit_menu_walker($walker, $menu_id)
  {
    class represent_Walker_Nav_Menu_Edit extends Walker_Nav_Menu_Edit
    {
      public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
      {
        $temp_output = '';
        $mega_menu_html = '';
        $mega_menu_html .= '<p class="field-custom description description-wide">
		                <label for="edit-menu-item-mega-' . $item->db_id . '">
		        		<input type="checkbox" id="edit-menu-item-mega-' . $item->db_id . '" class="widefat code edit-menu-item-custom" name="menu-item-mega-menu[' . $item->db_id . ']" value="1" ' . checked($item->mega_menu, 1, false) . ' />
		                ' . esc_html__('Mega Menu (classic)', 'represent') . '
		            </label></p>';
        parent::start_el($temp_output, $item, $depth, $args, $id);
        $temp_output = preg_replace('/(?=<div.*submitbox)/', $mega_menu_html, $temp_output);
        $output .= $temp_output;
      }
    }

    return 'represent_Walker_Nav_Menu_Edit';

  }

endif;