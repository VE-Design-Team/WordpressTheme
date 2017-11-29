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
//Make first tab load open
$('.nav-item a.nav-link:first').addClass('active');
$('.ResidentialManager-tab').addClass('active');
$('#ResidentialManager-tab').addClass('active');
$('#ResidentialManager-tab').removeClass('fade');
$('.nav-link:first').addClass('active');
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
<a class="nav-link active" id="ResidentialManager-tab" data-toggle="pill" href="#ResidentialManager" role="tab" aria-controls="ResidentialManager" aria-selected="false">
	<a class="nav-link active" id="ResidentialManager-tab" data-toggle="pill" href="#ResidentialManager" role="tab" aria-controls="ResidentialManager" aria-selected="true">

		<a class="nav-link active" id="ResidentialManager-tab" data-toggle="pill" href="#ResidentialManager" role="tab" aria-controls="ResidentialManager" aria-selected="true"