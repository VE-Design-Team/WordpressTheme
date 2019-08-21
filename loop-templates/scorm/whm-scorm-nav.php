<?php
//get menu assigned to this page
 $menu = get_field('field_5bc317e313d41');
// and place in the page
wp_nav_menu(array(
  'menu' => $menu,
'container_id' => 'cssmenu',
'walker' => new CSS_Menu_Maker_Walker()
));
?>
