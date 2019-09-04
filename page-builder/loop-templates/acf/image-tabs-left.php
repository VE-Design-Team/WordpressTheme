<!-- image tabs on left -->
<div class="col-12">
  <div class="row">
    <div class="nav flex-column col-2 " id=" v-tab<?php echo get_the_ID();?>" role="tablist" aria-orientation="vertical">
      <?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>
      <a class="nav-link" id="LeftTab <?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab" data-toggle="pill"
        href="#<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>"
        aria-selected="false">
        <img class="img-fluid desaturate" src="<?php echo the_sub_field('field_5a14fe2ac18c8');?>" title=" Resident-Manager"
          alt="c1inta-2">
      </a>
      <?php endwhile;?>
    </div>
    <div style="border: none;" id="v-pills-tabContent<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>"
      class="tab-content col-9 col-sm-9 col-md-6 pt-2">


      <?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>
      <div class="tab-pane fade" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tabpanel"
        aria-labelledby="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab">
        <img class="img-fluid" src="<?php echo the_sub_field('field_5a14fe2ac18c8');?>" title="Resident-Manager" alt="c1inta-2">
        <p>
          <?php echo the_sub_field('field_5a14fdab64ad0');?>
        </p>
      </div>
      <?php endwhile;?>
    </div>
  </div>
  <!-- end image tabs on  left-->
  <script>
    //Make first tab active- top tabs
    $('.nav-item a.nav-link:first').addClass('active');
    //Make first tab active- left tabs
    $('.nav-link:first').addClass('active');
    $('.tab-pane:first').addClass('active show');
  </script>