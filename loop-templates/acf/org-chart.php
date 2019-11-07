<script src="/wordpress481/wp-content/themes/page-builder/js/masonry.pkgd.js"></script>
<script src="/wordpress481/wp-content/themes/page-builder/js/imagesloaded.pkgd.min.js"></script>
<!--CEO Section -->
    <?php
      // check if the repeater field has rows of data
      if( have_rows('field_5d788e3e4ccf0') ):
      // loop through the rows of data
      while ( have_rows('field_5d788e3e4ccf0') ) : the_row();
    ?>
       <?php echo "<div class='level0'>"; ?>
         <?php the_sub_field('field_5d7893394e623');?>
      <h2 class="ripple-card level1 material-card  col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3 mt-3 mx-auto" style="font-size: 1.5rem;">  <?php   the_sub_field('field_5d7893d64e436');?> </h2>
         <p class="description pl-5 pr-5"><?php   the_sub_field('field_5d7894124e437');?></p>
       <?php echo "</div>"; ?>
              <?php echo "<div class='row ceo-sub'>"; ?>
       <?php echo '<span class="col-6 d-inline b-r"></span> <span class="col-6 d-inline b-l"></span>' ?>
              <?php echo "</div>"; ?>
       <?php echo "<div class='sublevel0'> </div>";?>
    <?php  endwhile; ?>
    <?php else : ?>
    <?php endif; ?>

<!--CEO Section ends -->

<?php echo '<div class="grid mb-3 mt-3">'; ?>
<div class="grid-sizer col-xs-12 col-sm-12 col-md-6 col-lg-4 "></div>

<!--Staff Section starts - e.g staff reporting directly to the CEO -->

<?php
// check if the repeater field has rows of data for Managers
  if( have_rows('field_5d786c0bf2dfa') ):
  // loop through the rows of data
  while ( have_rows('field_5d786c0bf2dfa') ) : the_row();?>

<?php echo '<div class="grid-item col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3 mt-3">'; ?>
  <?php echo '<div class="card-1 shadow">'; ?>
    <?php echo "<div class='ripple-card level1 material-card'>"; ?>
      <?php $image = get_sub_field('field_5d786c0bf2dfe'); if( !empty($image) ): ?>
        <div class="org_chart_profile">	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> </div>
      <?php endif; ?>
        <?php if (get_sub_field('field_5d786c0bf2dfb')) { ?>
          <?php  echo "<div class='org_name'>"; ?>
            <?php the_sub_field('field_5d786c0bf2dfb');?>
          <?php echo "</div>"; ?>
          <?php echo "<div class='sub_org '>"; ?>
          <?php echo "<span class='sub_org_name'></span>";?>
<?php  echo "</div>"; ?>
<?php } else { } ?>
  <?php echo "<div class='org_title'>"; ?>
    <?php the_sub_field('field_5d786c0bf2dfc');?>
  <?php echo "</div>"; ?>
  <?php
  if (get_sub_field('field_5d786c0bf2dfd')) {
  ?>
<!-- level managers - bio section -->
    <?php echo "<div class='bio'>"; ?>
      <?php the_sub_field('field_5d786c0bf2dfd');?>
      <?php
      if (get_sub_field('field_5d82c61c2ff3d')) {
      ?>
      <?php echo "<br><br><strong>Contact:</strong>"; ?>
      <?php the_sub_field('field_5d82c61c2ff3d');?>

  <?php
  } else {
  }
  ?>
    <?php echo "</div>"; ?>
  <?php
  } else {
  }
  ?>
<?php echo "</div>"; ?>

<!--Staff reporting to managers Starts here -->

  <?php
  // check if the repeater field has rows of data for Staffs
  if( have_rows('field_5d786cb288b0c') ):
  while ( have_rows('field_5d786cb288b0c') ) : the_row();
  ?>
    <?php echo "<div class='ripple-card level2 material-card'>"; ?>
      <?php the_sub_field('field_5d786db3252a0');?>
    <?php echo "</div>"; ?>

  <?php  endwhile; ?>
  <?php else : ?>
  <?php endif; ?>

      <?php echo '</div>'?>
    <?php echo '</div>'?>

  <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
<?php echo '</div>'; ?>

<!--Staff Section ends  -->

<script src="/wordpress481/wp-content/themes/page-builder/js/masonry.js"></script>
