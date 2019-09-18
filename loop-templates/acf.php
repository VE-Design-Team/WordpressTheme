<!-- acf.php -->
<?php if (get_field('field_5a13c5a7ec802') == 'Accordion'): ?>
<?php get_template_part('loop-templates/acf/accordion');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Org chart'): ?>
<?php get_template_part('loop-templates/acf/org-chart');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Org chart'): ?>
<?php get_template_part('loop-templates/acf/org-chart');?>
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
<?php elseif (get_field('field_5a13c5a7ec802') == 'Chart'): ?>
<?php get_template_part('loop-templates/acf/chart');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Cluster banner'): ?>
<?php get_template_part('loop-templates/acf/banner-generator');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Quiz'): ?>
<?php get_template_part('loop-templates/acf/quiz');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Quadrant reveal'): ?>
<?php get_template_part('loop-templates/acf/quadrant-reveal');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Image title reveal'): ?>
<?php get_template_part('loop-templates/acf/image-title-reveal');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Imagemap'): ?>
<?php get_template_part('loop-templates/acf/imagemap');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Accordion with image'): ?>
<?php get_template_part('loop-templates/acf/accordion-with-image');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Quick Link Card'): ?>
<?php get_template_part('loop-templates/acf/quick-link-card');?>
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
<?php elseif (get_field('field_5a13c5a7ec802') == '3D .stl model'): ?>
<?php get_template_part('loop-templates/acf/3d_viewer');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Virtual Workplace'): ?>
<?php get_template_part('loop-templates/acf/virtual-workplace');?>
<?php elseif (get_field('field_5a13c5a7ec802') == 'Branching scenario'): ?>
<?php get_template_part('loop-templates/acf/branching_scenario');?>
<?php elseif(!empty(get_the_content())): { ?>

<?php if( get_post_type() == 'scorm' ) {
    //don't get the content as it's already called
} else {
   the_content();
}
?>
<?php } else: { echo '<div class="card">
  <div class="card-body">
    <h4 class="card-title">This content is currently being built</h4>
	<p class="card-text">Please check back later</p>';
	edit_post_link('Update this content', '<p>', '</p>');
   echo '</div></div>'; };?>
<?php endif;?>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

<?php the_field('field_5b2849e6b9d0d'); ?>
</script>
<!-- end acf.php -->
