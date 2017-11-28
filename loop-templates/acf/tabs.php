<!-- Tabs start -->


<?php if( have_rows('field_5a13c7fda9110') ): ?>
  <div class="row">

<!-- setup layout -->
  <?php if( get_field('field_5a13c748a910f') == 'Tabs on top' ):?>
    <ul class="nav nav-tabs" id="Tab<?php echo get_the_ID();?>" role="tablist">



  <?php elseif( get_field('field_5a13c748a910f') == 'Tabs on left' ): ?>
    <ul class="nav nav-tabs" id="Tab<?php echo get_the_ID();?>" role="tablist">

  <?php elseif( get_field('field_5a13c748a910f') == 'Image tabs on left' ): ?>

          <div class="nav flex-column col-3 col-sm-2 col-md-1" id="v-tab<?php echo get_the_ID();?>" role="tablist" aria-orientation="vertical">

  <?php endif; ?>



<?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>

<?php if( get_field('field_5a13c748a910f') == 'Tabs on top' ):?>
  <li class="nav-item">



    <a class="nav-link" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab" data-toggle="tab" href="#<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" aria-selected="true"><?php echo the_sub_field('field_5a14fdfcc7bba');?>
    <img src="<?php echo the_sub_field('field_5a14fe2ac18c8');?>">
    </a>
  </li>
<?php elseif( get_field('field_5a13c748a910f') == 'Tabs on left' ): ?>
  <li class="nav-item">



    <a class="nav-link" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab" data-toggle="tab" href="#<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" aria-selected="true"><?php echo the_sub_field('field_5a14fdfcc7bba');?>
    <img src="<?php echo the_sub_field('field_5a14fe2ac18c8');?>">
    </a>
  </li>
<?php elseif( get_field('field_5a13c748a910f') == 'Image tabs on left' ): ?>
<!-- tab style-->

<a class="nav-link" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab" data-toggle="pill" href="#<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tab" aria-controls="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" aria-selected="false"> <img class="img-fluid desaturate" src="<?php echo the_sub_field('field_5a14fe2ac18c8');?>"  title=" Resident-Manager" alt="c1inta-2"></a>

<?php endif; ?>



<?php endwhile;?>
</ul>
<?php if( get_field('field_5a13c748a910f') == 'Tabs on top' ):?>
  <div class="tab-content" id="TabContent<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">
<?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>
    <div class="tab-pane fade show" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tabpanel" aria-labelledby="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab"><?php echo the_sub_field('field_5a14fdab64ad0');?></div>
<?php endwhile;?>
</div>
<?php elseif( get_field('field_5a13c748a910f') == 'Tabs on left' ): ?>
  <div class="tab-content" id="TabContent<?php echo str_replace(' ', '', get_sub_field('field_5a13c67d91a67')); ?>">
<?php while ( have_rows('field_5a13c7fda9110') ) : the_row();?>
    <div class="tab-pane fade show" id="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>" role="tabpanel" aria-labelledby="<?php echo str_replace(' ', '', get_sub_field('field_5a14fdfcc7bba')); ?>-tab"><?php echo the_sub_field('field_5a14fdab64ad0');?></div>
<?php endwhile;?>
</div>
<?php elseif( get_field('field_5a13c748a910f') == 'Image tabs on left' ): ?>
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
</div>
<?php endif; ?>
<!-- tabs end -->
