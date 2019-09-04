<?php
/*
Template Name: Glossarydata
*/
?>
<?php if (have_rows('field_5a1b4e5ebab7b')): ?>
  <?php echo "[<br>{<br>";?>
	<?php $rowCount = count(get_field('field_5a1b4e5ebab7b'));  ?>
	<?php $i = 1; ?>
	<?php while (have_rows('field_5a1b4e5ebab7b')): the_row(); ?>
		<?php // vars
            $title = ucwords(get_sub_field('field_5a1b4e9abab7c'));
						$description = get_sub_field('field_5a1b51d28610a');
						$otherterms = get_sub_field('field_5a81179b7173a');
        ?>
		"term" : "<?php echo htmlentities($title); ?>",<br>
		"description" : "<?php if( get_sub_field('field_5a81179b7173a') ): ?><b><?php echo htmlentities($title); ?>, <?php echo htmlentities($otherterms); ?></b> - <?php endif; ?><?php echo htmlentities($description); ?>"
		<?php if ($i < $rowCount): ?>
			  <?php echo "},{";?>
		<?php endif; ?>
		<?php $i++; ?>
	<?php endwhile; ?>
  <?php echo "}]";?>
<?php endif; ?>


