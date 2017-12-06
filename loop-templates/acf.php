<!-- get custom fields -->
<?php if( get_field('field_5a13c5a7ec802') == 'Accordion' ): ?>
<!-- get accordion -->
<?php get_template_part('loop-templates/acf/accordion');?>

<?php elseif( get_field('field_5a13c5a7ec802') == 'Tabbed sections' ): ?>
	<!-- get tabs -->
<?php get_template_part('loop-templates/acf/tabs');?>

<?php elseif( get_field('field_5a13c5a7ec802') == 'Cards' ): ?>
	<!-- get cards-->
<?php get_template_part('loop-templates/acf/cards');?>
<?php elseif( get_field('field_5a13c5a7ec802') == 'Checklist' ): ?>
	<!-- get checklist-->
<?php get_template_part('loop-templates/acf/checklist');?>
<?php endif; ?>

<script>
//Make first tab active- top tabs
$('.nav-item a.nav-link:first').addClass('active');
//Make first tab active- left tabs
$('.nav-link:first').addClass('active');
$('.tab-pane:first').addClass('active show');
</script>
<style>
.desaturate
{
 -webkit-filter: grayscale(1);
 filter: grayscale(1);
}
.active > img
{
 -webkit-filter: grayscale(0);
 filter: grayscale(0);
}
#nav-tab .tab-content
{
	border: none;
}
</style>
<!-- end get custom fields -->
