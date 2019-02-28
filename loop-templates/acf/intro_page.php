<style>
  .tab-content {
    padding: 0;
  }

  .icon>img {
    max-width: 100px;
  }
</style>
<div id="introtabs">
<div id="tabs">
  <ul class="nav nav-tabs" role="tablist">
    <?php while (have_rows('field_5a67bc57f0b60')) : the_row();?>

    <li class="nav-item">
      <a class="nav-link" tabindex="0"  id="<?php echo str_replace(' ', '', get_sub_field('field_5a67bc81f0b61')); ?>-tab" data-toggle="tab"
      data-target="#<?php echo str_replace(str_split('\\/:*()?" <>,.| '), '', get_sub_field('field_5a67bc81f0b61')); ?>" role="tab" aria-controls="
        <?php echo str_replace(' ', '', get_sub_field('field_5a67bc81f0b61')); ?>" aria-selected="true">
        <div class="title">
          <?php echo the_sub_field('field_5a67bc81f0b61');?>
          <i class="fa fa-chevron-down fa-sm"></i>
        </div>
      </a>
    </li>

    <?php endwhile;?>
  </ul>
  <div class="tab-content glossarize" id="myTabContent<?php echo str_replace(str_split('\\/:*?" <>,.| '), '', get_sub_field('field_5a13c67d91a67')); ?>">
    <?php while (have_rows('field_5a67bc57f0b60')) : the_row();?>
    <div class="tab-pane fade show" id="<?php echo str_replace(str_split('\\()/:*?" <>,.| '), '', get_sub_field('field_5a67bc81f0b61')); ?>" role="tabpanel" aria-labelledby="
      <?php echo str_replace(str_split('\\/:*?()"<>,.| '), '', get_sub_field('field_5a67bc81f0b61')); ?>-tab">
      <div class="row align-items-center <?php echo $background;?>">
        <div class="p-3 bg-white">     
          <?php echo the_sub_field('field_5a67c80324ecd');?>
        </div>
        <!--<div class="col-3 col-sm-2 text-center icon">
	<img src="<?php echo get_stylesheet_directory_uri();?>\img\<?php echo $icon; ?>" alt="<?php echo the_sub_field('field_5a67bc81f0b61');?> " class=" aligncenter img-fluid" >
</div>-->
      </div>
    </div>

    <?php endwhile;?>
  </div>
</div>
</div>

<script>
  //Make first tab active- top tabs
  $('.nav-item .nav-link:first').addClass('active');
  //Make first tab active- left tabs
  $('.nav-link:first').addClass('active');
  $('.tab-pane:first').addClass('active show');
</script>