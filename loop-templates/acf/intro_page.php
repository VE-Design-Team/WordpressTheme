<style>
.tab-content
{
	padding: 0;
}
.icon > img
{
	max-width: 100px;
}
</style><div class="row intro_page">
<ul class="nav nav-tabs col-12" id="Tab<?php echo get_the_ID();?>" role="tablist">
<?php while (have_rows('field_5a67bc57f0b60')) : the_row();?>

<li class="nav-item ">
    <a class="nav-link" id="<?php echo str_replace(' ', '', get_sub_field('field_5a67bc81f0b61')); ?>-tab" data-toggle="tab" href="#<?php echo str_replace(str_split('\\/:*?"<>,.| '), '', get_sub_field('field_5a67bc81f0b61')); ?>" role="tab" aria-controls="<?php echo str_replace(str_split('\\/:*?"<>,.| '), '', get_sub_field('field_5a67bc81f0b61')); ?>" aria-selected="true"><?php echo the_sub_field('field_5a67bc81f0b61');?> 
    </a>
  </li>
<?php endwhile;?>
</ul>
<div class="tab-content col-12 mb-1" id="TabContent<?php echo str_replace(str_split('\\/:*?"<>,.| '), '', get_sub_field('field_5a13c67d91a67')); ?>">
<?php while (have_rows('field_5a67bc57f0b60')) : the_row();?>
	<?php //icon mapping
$title = get_sub_field('field_5a67bc81f0b61');
if ($title == "Learning objectives") {
    $icon = "licensing_accreditation.png";
    $background = "bg-success";
} elseif ($title == "Key activities") {
    $icon = "learning_activity.png";
    $background = "bg-warning";
} elseif ($title == "Assessments") {
    $icon = "assignment.png";
    $background = "bg-info";
}
?>
      <div class="tab-pane fade show  col-12" id="<?php echo str_replace(str_split('\\/:*?"<>,.| '), '', get_sub_field('field_5a67bc81f0b61')); ?>" role="tabpanel" aria-labelledby="<?php echo str_replace(str_split('\\/:*?"<>,.| '), '', get_sub_field('field_5a67bc81f0b61')); ?>-tab">
      	<div class="row align-items-center <?php echo $background;?>">
      		   	<div class="col-9 col-sm-10 p-3 bg-white">
      	<h3 class="text-dark"><?php echo the_sub_field('field_5a67bc81f0b61');?> </h3>
      	<?php echo the_sub_field('field_5a67c80324ecd');?>
      </div>
<div class="col-3 col-sm-2 text-center icon">
	<img src="<?php echo get_stylesheet_directory_uri();?>\img\<?php echo $icon; ?>" alt="<?php echo the_sub_field('field_5a67bc81f0b61');?> " class=" aligncenter img-fluid" >
</div>
      	</div>
      </div> 
<?php endwhile;?>
</div></div>
<script>
//Make first tab active- top tabs
$('.nav-item a.nav-link:first').addClass('active');
//Make first tab active- left tabs
$('.nav-link:first').addClass('active');
$('.tab-pane:first').addClass('active show');
</script>