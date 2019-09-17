    <script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
    <?php
      // check if the repeater field has rows of data
      if( have_rows('field_5d788e3e4ccf0') ):
      // loop through the rows of data
      while ( have_rows('field_5d788e3e4ccf0') ) : the_row();
    ?>
       <?php echo "<div class='level0'>"; ?>
        <?php   the_sub_field('field_5d7893394e623');?>
        <?php   the_sub_field('field_5d7893d64e436');?>
        <?php   the_sub_field('field_5d7894124e437');?>
       <?php echo "</div>"; ?>
    <?php  endwhile; ?>
    <?php else : ?>
    <?php endif; ?>

    <?php echo '<div class="container box grid">'; ?>

<?php
// check if the repeater field has rows of data for Managers
  if( have_rows('field_5d786c0bf2dfa') ):
// loop through the rows of data
  while ( have_rows('field_5d786c0bf2dfa') ) : the_row();?>

<?php echo '<div class="grid-item shadow col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 ">'; ?>
<?php echo '<div class="card level0">'; ?>
           <?php echo "<div class='level1'>"; ?>
            <?php the_sub_field('field_5d786c0bf2dfc');?>
             <?php echo "</div>"; ?>
              <?php
              // check if the repeater field has rows of data for Staffs
                if( have_rows('field_5d786cb288b0c') ):
                  while ( have_rows('field_5d786cb288b0c') ) : the_row();
               ?>
                        <?php echo "<div class='level2'>"; ?>
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
<script>
  $('.grid').masonry({
  itemSelector: '.grid-item',
});

</script>
