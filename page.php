<?php 
get_header();
$sidebar_pos = get_theme_mod('understrap_sidebar_position');
?>
<div class="wrapper" id="page-wrapper">
	<div id="content" tabindex="-1">
				<!-- Do the left sidebar check -->
			<div class="pt-2 pb-2 content-area" id="primary">
			<main class="site-main" id="main">
			<?php if (get_field('field_5a98cf8733d10')) : ?>
			<div class="instruction mr-1"><i class="fa fa-info-circle mr-1 fa-lg"></i>
  <?php echo the_field('field_5a98cf8733d10'); ?>
</div>
<?php endif; ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('loop-templates/content', 'page'); ?>
				<?php endwhile; // end of the loop.?>
			</main><!-- #main -->
		</div><!-- #primary -->
</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>