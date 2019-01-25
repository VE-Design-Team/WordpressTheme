	<?php 
$variable = get_field('field_5b8cd3c52f308', 'option');
if ($variable  == 'fssi') { 

  get_template_part( 'fssi' );
}
elseif ($variable  == 'cde') { 
  get_template_part( 'cde' );
};
?>
<style>
#nav-tab .tab-content
{
	border: none;
}
<?php the_field('field_5b2849d5b9d0c'); ?>

</style>