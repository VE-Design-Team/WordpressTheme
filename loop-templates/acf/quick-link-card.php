<script src="https://masonry.desandro.com/masonry.pkgd.js"></script>

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
      <div class="grid-item col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
        <div class="card-1 shadow quick_link">
            <div class="quick_link_image" style="background-image: url(<?php echo $qimage['url']; ?>);">
            </div>
                <div class="quick_link_right p-4">
                    <div class="quick_link_title">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                  <?php if( $post_object ): ?>
                  <?php endif; ?>
                    <div class="quick_link_content">
                      <?php echo $content; ?>
                    </div>
                  <div class="quick_link_cta">
                    <span><a href="<?php the_permalink(); ?>"><?php the_sub_field('field_5d81b4fc0d499'); ?></a></span>
                  </div>
                </div>
          </div>
      </div>
 <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>



	<?php endwhile; ?>


<?php endif; ?>
<script>
  $('.grid').masonry({
  itemSelector: '.grid-item',
});

</script>
