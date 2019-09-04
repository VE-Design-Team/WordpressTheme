<div id="nav">
  <div id="reveal" class="visibility p-0">
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
  </div>
</div>
