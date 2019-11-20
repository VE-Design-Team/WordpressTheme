
<script src="/wordpress481/wp-content/themes/bagwan_health/js/cards.js"></script>
<script src="/wordpress481/wp-content/themes/bagwan_health/js/masonry.pkgd.js"></script>
<script src="/wordpress481/wp-content/themes/bagwan_health/js/imagesloaded.pkgd.min.js"></script>


<div class="grid">
		<div class="grid-sizer col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>

<?php if( have_rows('field_5d81a64d2b322') ): ?>
<?php while( have_rows('field_5d81a64d2b322') ): the_row();

		// vars
		$qimage = get_sub_field('field_5d81aeb75f8fc');
		$content = get_sub_field('field_5d81a7ebde03f');
		$post_object = get_sub_field('field_5d81a7b8de03e');
    $cta = get_sub_field('field_5d81b4fc0d499');
    if( $post_object ):

    	// override $post
    	$post = $post_object;
    	setup_postdata( $post );

    	?>
<div class="grid-item col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  mb-3 mt-3">
        <div class="card-1 shadow quick_link">
            <div class="quick_link_image"  style="background-image: url(<?php echo $qimage['url']; ?>);">
            </div>

								<a class="material-card quick_link_right p-4"  href="<?php the_permalink(); ?>">
									<div class=" ">
                    <div class="quick_link_title">
                      <h3><?php the_title(); ?></h3>
                    </div>
                  <?php if( $post_object ): ?>
                  <?php endif; ?>
                    <div class="quick_link_content">
                      <?php echo $content; ?>
                    </div>
                  <div class="quick_link_cta">
                    <span><?php the_sub_field('field_5d81b4fc0d499'); ?></span>
                  </div>
                </div>
								</a>
          </div>

</div>
 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>



	<?php endwhile; ?>

</div>


<?php endif; ?>
<script>
MaterialRipple.set(['.material-card']);
</script>
<script src="/wordpress481/wp-content/themes/bagwan_health/js/masonry.js"></script>
