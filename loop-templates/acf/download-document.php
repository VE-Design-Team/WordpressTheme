<script src="/wordpress481/wp-content/themes/page-builder/js/masonry.pkgd.js"></script>
<script src="/wordpress481/wp-content/themes/page-builder/js/imagesloaded.pkgd.min.js"></script>
<div class="grid">
		<div class="grid-sizer col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>

<?php if( have_rows('field_5dddd7b6961f9') ): ?>
<?php while( have_rows('field_5dddd7b6961f9') ): the_row();

		// vars
		$qimage = get_sub_field('field_5dddd7b6961fc');

		$content = get_sub_field('field_5dddd7b6961fb');
		$file = get_sub_field('field_5dddd7b6961fa');
    $cta = get_sub_field('field_5dddd7b6961fd');
    if( $file ):

    	// override $post
    	$post = $file;
    	setup_postdata( $post );

    	?>
<div class="grid-item col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  mb-3 mt-3">
        <div class="card-1 shadow quick_link">
            <div class="quick_link_image"  style="background-image: url(<?php echo $qimage['url']; ?>);">
            </div>

								<a class="material-card quick_link_right p-4"  href="<?php echo $file['url']; ?>" target="_blank" download>
									<div class=" ">
                    <div class="quick_link_title">
                      <h3><?php echo $file['title']; ?></h3>
                    </div>
                  <?php if( $file ): ?>
                  <?php endif; ?>
                    <div class="quick_link_content">
                      <?php echo $content; ?>
                    </div>
                  <div class="quick_link_cta">
                    <span><strong><?php the_sub_field('field_5dddd7b6961fd'); ?></strong></span>
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

<script src="/wordpress481/wp-content/themes/page-builder/js/masonry.js"></script>
