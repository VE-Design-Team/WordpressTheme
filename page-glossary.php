<?php
/*
Template Name: Glossary
*/
?>

<?php if( have_rows('field_5a1b4e5ebab7b', $services) ): ?>
  <?php echo "[{";?>
	<?php $rowCount = count( get_field('field_5a1b4e5ebab7b', $services) ); //GET THE COUNT ?>
	<?php $i = 1; ?>
	<?php while( have_rows('field_5a1b4e5ebab7b', $services) ): the_row(); ?>
		<?php // vars
			$title = get_sub_field('field_5a1b4e9abab7c');
			$description = get_sub_field('field_5a1b51d28610a');
		?>
		"term":"<?php echo $title; ?>",
    "description":"<?php echo $description; ?>"
		<?php if($i < $rowCount): ?>
			  <?php echo "},{";?>
		<?php endif; ?>
		<?php $i++; ?>
	<?php endwhile; ?>
  <?php echo "}]";?>
<?php endif; ?>
