<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>



<!-- get custom fields -->
<?php if( get_field('field_5a13c5a7ec802') == 'Accordion' ): ?>
	<!-- Accordion start -->
	<div id="accordion<?php echo get_the_ID();?>" role="tablist" aria-multiselectable="true">
	<?php

	// check if the accordian field has  data
	if( have_rows('field_5a13c61e91a66') ):

	 	// loop through the  data
	    while ( have_rows('field_5a13c61e91a66') ) : the_row();?>

					<?php //apply the accordion header ?>

					<a data-toggle="collapse" data-parent="#accordion<?php echo get_the_ID();?>" href="#collapse<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" aria-expanded="true" aria-controls="collapseOne">
						 <h3><span class='text-dark'>+ </span><?php echo the_sub_field('field_5a13c67d91a67'); ?></h3>
					</a>
					<?php // display the accordion collapsed content ?>
					<div id="collapse<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>" class="collapse pl-4" role="tabpanel" aria-labelledby="heading<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">
					<?php echo the_sub_field('field_5a13c6ac91a68'); ?>
					</div>
					<?php  //close the accordion footer ?>

	   <?php endwhile;

	else : ?>


<?php endif; ?>
	</div>

	<!-- Accordion end -->
<?php elseif( get_field('field_5a13c5a7ec802') == 'Tabbed sections' ): ?>
	<!-- Tabs start -->
	<?php

// check if the repeater field has rows of data
if( have_rows('field_5a13c7fda9110') ):

// loop through the rows of data
	while ( have_rows('field_5a13c7fda9110') ) : the_row();

			// tab title
			echo the_sub_field('field_5a13c84ca9111');
			// tab image
			echo the_sub_field('field_5a13c89da9112');
			// tab body
			echo the_sub_field('field_5a13c905a9114');

	endwhile;

else :

	// no rows found

endif;

?>
	<!-- tabs end -->
<?php elseif( get_field('field_5a13c5a7ec802') == 'Cards' ): ?>
	<!-- Cards start -->
	<p>Cards Selected</p>
	<!-- cards end -->
<?php endif; ?>



<!-- end get custom fields -->

<!-- example content -->


<!-- example content -->



	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
