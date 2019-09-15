
<?php

// check if the repeater field has rows of data
if( have_rows('field_5d788e3e4ccf0') ):

 	// loop through the rows of data
    while ( have_rows('field_5d788e3e4ccf0') ) : the_row();
?>

      <?php   the_sub_field('field_5d7893394e623');?>
          <?php echo "<br>";?>
      <?php   the_sub_field('field_5d7893d64e436');?>
          <?php echo "<br>";?>
      <?php   the_sub_field('field_5d7894124e437');?>
          <?php echo "<br>";?>

    <?php  endwhile; ?>

  <?php else : ?>


  <?php endif; ?>

<br><br><br>
<?php

// check if the repeater field has rows of data
if( have_rows('field_5d786c0bf2dfa') ):

 	// loop through the rows of data
    while ( have_rows('field_5d786c0bf2dfa') ) : the_row();
?>
 <?php echo '<div class="col-sm-12 col-md-6  col-lg-3 card shadow">'; ?>
 <?php echo '<div class="" style="background-color: #01A19A; color: white;">'; ?>
        <?php the_sub_field('field_5d786c0bf2dfb'); ?>
        <?php echo "<br>";?>
        <?php the_sub_field('field_5d786c0bf2dfc');?>
        <?php echo "<br>";?>
        <?php the_sub_field('field_5d786c0bf2dfd');?>
        <?php echo "<br>";?>
        <?php echo "<br>";?>
<?php echo '</div>'; ?>
        <?php if( have_rows('field_5d786cb288b0c') ):

         	// loop through the rows of data
            while ( have_rows('field_5d786cb288b0c') ) : the_row();
?>
              <?php   the_sub_field('field_5d786d972529f'); ?>
              <?php echo "<br>";?>
              <?php   the_sub_field('field_5d786db3252a0'); ?>
              <?php echo "<br>";?>
              <?php   the_sub_field('field_5d786dc0252a1'); ?>
              <?php echo "<br>";?>
              <?php echo "<br>";?>
<?php echo '</div>'; ?>
  <?php echo "<br>";?>
          <?php   endwhile; ?>

      <?php    else : ?>



        <?php endif; ?>


    <?php  endwhile; ?>

<?php else : ?>


<?php endif; ?>
