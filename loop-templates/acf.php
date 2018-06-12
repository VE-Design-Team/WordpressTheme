<!-- acf.php -->
<?php if (get_field('field_5a13c5a7ec802') == 'Accordion'): ?>
<?php get_template_part('loop-templates/acf/accordion');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Checklist'): ?>
<?php get_template_part('loop-templates/acf/checklist');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Tabbed sections'): ?>
<?php get_template_part('loop-templates/acf/tabs');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Cards'): ?>
<?php get_template_part('loop-templates/acf/cards');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Tooltip Textstrings'): ?>
<?php get_template_part('loop-templates/acf/tooltip');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Sample Document'): ?>
<?php get_template_part('loop-templates/acf/sample-document');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Cluster banner'): ?>
<?php get_template_part('loop-templates/acf/cluster-banner');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Quadrant reveal'): ?>
<?php get_template_part('loop-templates/acf/quadrant-reveal');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Image title reveal'): ?>
<?php get_template_part('loop-templates/acf/image-title-reveal');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Accordion with image'): ?>
<?php get_template_part('loop-templates/acf/accordion-with-image');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Carousel'): ?>
<?php get_template_part('loop-templates/acf/carousel');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Introduction page'): ?>
<?php get_template_part('loop-templates/acf/intro_page');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Custom HTML'): ?>
<?php get_template_part('loop-templates/acf/custom-html');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Custom HTML or table'): ?>
<?php get_template_part('loop-templates/acf/custom-html');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Hotspots'): ?>
<?php get_template_part('loop-templates/acf/hotspots');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Horizontal cards'): ?>
<?php get_template_part('loop-templates/acf/horizontal-cards');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Flip cards'): ?>
<?php get_template_part('loop-templates/acf/flip-cards');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Example content table'): ?>
<?php get_template_part('loop-templates/acf/example-content-table');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Roadmap'): ?>
<?php get_template_part('loop-templates/acf/roadmap');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Animation'): ?>
<?php get_template_part('loop-templates/acf/animation');?>
<?php elseif(!empty(get_the_content())): { ?>
<?php the_content(); ?>
<?php } else: { echo '<div class="card">
  <div class="card-body">
    <h4 class="card-title">This content is currently being built</h4>
	<p class="card-text">Please check back later</p>';	
	edit_post_link('Update this content', '<p>', '</p>');
   echo '</div></div>'; };?> 
<?php endif;?>
<style>
#nav-tab .tab-content
{
	border: none;
}
</style>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
<!-- end acf.php -->
