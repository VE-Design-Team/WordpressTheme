<div id="tabs">
  <ul class="nav nav-tabs" role="tablist">
    <?php while (have_rows('field_5a13c7fda9110')) : the_row();?>

    <li class="nav-item">
      <a class="nav-link" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab" data-toggle="tab"
        href="#<?php echo str_replace(str_split('\\()/:*?" <>,.| '), '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="
        <?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" aria-selected="true">
        <div class="title">
          <?php echo the_sub_field('field_5a14fdfcc7bba');?>
          <i class="fa fa-chevron-down fa-sm"></i>
        </div>
      </a>
    </li>


    <?php endwhile;?>
  </ul>
  <div class="tab-content glossarize" id="myTabContent<?php echo str_replace(str_split('\\/:*?" <>,.| '), '', get_sub_field('field_5a13c67d91a67')); ?>">
    <?php while (have_rows('field_5a13c7fda9110')) : the_row();?>
    <div class="tab-pane fade show" id="<?php echo str_replace(str_split('\\/:*?" <>,.| '), '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tabpanel" aria-labelledby="
      <?php echo str_replace(str_split('\\()/:*?"<>,.| '), '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab">
      <?php echo the_sub_field('field_5a14fdab64ad0');?>
    </div>

    <?php endwhile;?>
  </div>
</div>



<script>
  //Make first tab active- top tabs
  $('.nav-item a.nav-link:first').addClass('active');
  //Make first tab active- left tabs
  $('.nav-link:first').addClass('active');
  $('.tab-pane:first').addClass('active show');
</script>