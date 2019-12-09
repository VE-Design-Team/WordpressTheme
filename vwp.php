<?php
  if ( get_field('field_5be47786ed504') == 'home-page') { ?>
 <?php get_template_part( '/scorm/vwp/splash' ); ?>
<?php }

elseif ( get_field('field_5be47786ed504') == 'tour') { ?>
<?php get_template_part( '/scorm/vwp/intro-tour' ); ?>
<?php }

  else { ?>
   <?php get_template_part( '/scorm/vwp/page' ); ?>
<?php } ?>
