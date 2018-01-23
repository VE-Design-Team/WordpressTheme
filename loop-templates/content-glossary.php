<!-- content-glossary.php -->
<?php $query = new WP_Query(array( 'pagename' => 'glossarydata' ));
        while ($query->have_posts()) {
            $query->the_post(); ?>
<div class="container-fluid">
	<div class="row">
	<div class="col-12 content">
<?php if (have_rows('field_5a1b4e5ebab7b')): ?>
  <?php //start of loop?>
	<?php $rowCount = count(get_field('field_5a1b4e5ebab7b')); ?>
	<?php $i = 1; ?>
	<?php while (have_rows('field_5a1b4e5ebab7b')): the_row(); ?>
		<?php // vars
            $title = get_sub_field('field_5a1b4e9abab7c');
            $description = get_sub_field('field_5a1b51d28610a'); ?>
		<h3><?php echo $title; ?></h3>
    <p><?php echo $description; ?></p>
		<?php if ($i < $rowCount): ?>
			  <?php // between loops?>
		<?php endif; ?>
		<?php $i++; ?>
	<?php endwhile; ?>
  <?php //endof loop?>
<?php endif; ?>
</div>
</div>
       <?php
        }
    wp_reset_postdata(); ?>
<!-- content-glossary.php end-->