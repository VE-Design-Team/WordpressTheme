<!-- get custom fields -->
<?php if( get_field('field_5a13c5a7ec802') == 'Accordion' ): ?>
<?php get_template_part('loop-templates/acf/accordion');?>


<?php elseif( get_field('field_5a13c5a7ec802') == 'Tabbed sections' ): ?>
<?php get_template_part('loop-templates/acf/tabs');?>

<?php elseif( get_field('field_5a13c5a7ec802') == 'Cards' ): ?>
<?php get_template_part('loop-templates/acf/cards');?>
<?php endif; ?>

<script>
$('.nav-item a.nav-link:first').addClass('active');
$('.tab-content .tab-pane:first').addClass('active');
</script>
<style>
.desaturate
{
	-webkit-filter: grayscale(1);
 filter: grayscale(1);
}
</style>
<!-- end get custom fields -->
