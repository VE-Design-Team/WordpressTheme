Hello

<?php if( get_field('field_5aeff956c7c3a') ): ?>

<a href="<?php the_field('field_5aeff956c7c3a'); ?>" >Download File</a>

<?php endif; ?>



<?php
rename( the_field('field_5aeff956c7c3a') , "dog.txt");
?>

<a href="<?php the_field('field_5aeff956c7c3a'); ?>" >Download renamed  File</a>