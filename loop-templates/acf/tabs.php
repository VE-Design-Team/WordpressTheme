<!-- Tabs start -->


<?php if( have_rows('field_5a13c7fda9110') ): ?>


<!-- setup layout -->
  <?php if( get_field('field_5a13c748a910f') == 'top' ):?>
    <!-- tabs on top-->
    <ul class="nav nav-tabs col-12" id="Tab<?php echo get_the_ID();?>" role="tablist">



  <?php elseif( get_field('field_5a13c748a910f') == 'left' ): ?>
    <!-- tabs on left-->
<div class="col-12">
            <div class="row">
              <ul class="nav flex-column col-4" id="v-tab<?php echo get_the_ID();?>" role="tablist" aria-orientation="vertical">
  <?php elseif( get_field('field_5a13c748a910f') == 'image' ): ?>
    <!-- image tabs on left -->
    <div class="row">
          <div class="nav flex-column col-3 col-sm-2 col-md-2 col-lg-1 " id="v-tab<?php echo get_the_ID();?>" role="tablist" aria-orientation="vertical">
  <?php endif; //end opening layout ?>

<?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>

<?php if( get_field('field_5a13c748a910f') == 'top' ):?>
  <li class="nav-item">



    <a class="nav-link" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab" data-toggle="tab" href="#<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" aria-selected="true"><?php echo the_sub_field('field_5a14fdfcc7bba');?>
    <img src="<?php echo the_sub_field('field_5a14fe2ac18c8');?>">
    </a>
  </li>
<?php elseif( get_field('field_5a13c748a910f') == 'left' ): ?>
  <a class="nav-link" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab" data-toggle="pill" href="#<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="Sight-impairment" aria-selected="false">
                  <li class="h6"><?php echo the_sub_field('field_5a14fdfcc7bba');?></li></a>
  
<?php elseif( get_field('field_5a13c748a910f') == 'image' ): ?>
<!-- tab style-->

<a class="nav-link" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab" data-toggle="pill" href="#<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" aria-selected="false"> <img class="img-fluid desaturate" src="<?php echo the_sub_field('field_5a14fe2ac18c8');?>"  title=" Resident-Manager" alt="c1inta-2"></a>

<?php endif; ?>



<?php endwhile;?>
</ul>

<?php if( get_field('field_5a13c748a910f') == 'top' ):?>
  <div class="tab-content" id="TabContent<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">
<?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>
    <div class="tab-pane fade show p-3" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tabpanel" aria-labelledby="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab"><?php echo the_sub_field('field_5a14fdab64ad0');?></div>
<?php endwhile;?>
</div>
<?php elseif( get_field('field_5a13c748a910f') == 'left' ): ?>

 <div class="tab-content col-8 pt-2" id="v-pills-tab<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">
<?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>
    <div class="tab-pane fade" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tabpanel" aria-labelledby="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab">
<?php echo the_sub_field('field_5a14fdab64ad0');?>

</div>
<?php endwhile;?>
</div></div>
<?php elseif( get_field('field_5a13c748a910f') == 'image' ): ?>
</div>
<div class="tab-content col-9 col-sm-9 col-md-6 pt-2" id="v-pills-tabContent<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">


<?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>
  <div class="tab-pane fade" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tabpanel" aria-labelledby="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab"> <img class="img-fluid" src="<?php echo the_sub_field('field_5a14fe2ac18c8');?>" title="Resident-Manager" alt="c1inta-2">
                  <p><?php echo the_sub_field('field_5a14fdab64ad0');?></p>
                </div>

<?php endwhile;?>
</div>
<?php endif; ?>



<?php else : ?>

<?php endif; ?>
<!-- tabs end -->
