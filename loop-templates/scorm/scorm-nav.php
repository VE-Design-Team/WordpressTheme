<div class="col-3">
<?php 
//Get menu as selectyed in page
 $menu = get_field('field_5bc317e313d41');
 wp_nav_menu( array(
    'menu' => '$menu'
 ) );
?>
</div>