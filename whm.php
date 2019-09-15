<?php
  if ( get_field('field_5be47786ed504') == 'home-page') { ?>
 <?php get_template_part( '/scorm/whm/splash' ); ?>
<?php }

elseif ( get_field('field_5be47786ed504') == 'tour') { ?>
<?php get_template_part( '/scorm/whm/intro-tour' ); ?>
<?php }

  else { ?>
   <?php get_template_part( '/scorm/whm/page' ); ?>
<?php } ?>
