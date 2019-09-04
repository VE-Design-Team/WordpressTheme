<?php
  if ( get_field('field_5be47786ed504') == 'home-page') { ?>
 <?php get_template_part( '/scorm/whm/splash' ); ?>
<?php }
  else { ?>
   <?php get_template_part( '/scorm/whm/page' ); ?>
<?php } ?>
