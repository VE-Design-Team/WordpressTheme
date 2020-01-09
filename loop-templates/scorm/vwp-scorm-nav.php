<div id="nav">
  <div id="reveal" class="visibility p-0">
<div><a href="https://emedia.rmit.edu.au/bagwanhealth/scorm/intranet/">
     <img style="margin-top:20%;margin-left:45%;" src="<?php echo get_stylesheet_directory_uri();?>/vwp/img/home_icon.png" alt="home icon" height="42" width="42"></a></div>
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
