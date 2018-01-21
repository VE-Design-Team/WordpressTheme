 <!-- Setup tabs on left-->
    <div class="row">
<div class="nav flex-column col-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <!-- end setup tabs on left-->

  <?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>

  <a class=" nav-link text-right  " id="v-pills-home-tab" data-toggle="pill" href="#<?php echo str_replace(str_split('\\()/:*?"<>,.| '), '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><h3 class="h5"><?php echo the_sub_field('field_5a14fdfcc7bba');?></h3></a>
  
<?php endwhile;?>
</div>

<div class="tab-content border-0 col-8" id="v-pills-tabContent">

  <?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>

  <div class="tab-pane fade " id="<?php echo str_replace(str_split('\\/():*?"<>,.| '), '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><?php echo the_sub_field('field_5a14fdab64ad0');?></div>
  
<?php endwhile;?>  
</div>

</div>
<style>

a.nav-link > .h5 {
	color: black;
}
a.nav-link.active > .h5
{
color: red;

}
</style>
<script>
//Make first tab active- top tabs
$('.nav-item a.nav-link:first').addClass('active');
//Make first tab active- left tabs
$('.nav-link:first').addClass('active');
$('.tab-pane:first').addClass('active show');
</script>
