<!-- cards.php start -->
<style>
.card-header > img
{
  image-rendering: crisp-edges;
  image-rendering: -webkit-optimize-contrast;
}

</style>
<?php if (have_rows('field_5a1b72e2b4a86')): ?>


<div class='card-deck glossarize m-0'>
<?php $numrows = count(get_field('field_5a1b72e2b4a86'));
          ?>
  <?php $x=1; while (have_rows('field_5a1b72e2b4a86')): the_row();?>
    <?php
          // set variables
          $card_image = get_sub_field('field_5a1b730bb4a87');
          $field = get_sub_field_object('field_5a1b730bb4a87');
          $value = get_sub_field('field_5a1b730bb4a87');
          $card_title = $field['choices'][ $value ];
          $card_content = get_sub_field('field_5a1b865eaeaab');
          $card_text_title = get_sub_field_object('field_5a1b95a1a6dc8');
          $card_header_image = get_sub_field_object('field_5a1b9656a6dc9');
          $numrows = count(get_sub_field('field_5a1b72e2b4a86'));
          
    ?>


  <div class="card <?php if ($x=1) echo "ml-0";?> <?php if ($x!==$numrows) echo "mr-0";?> ">
    
    <div class="card-header">
<?php 
  if (get_sub_field('field_5a1b730bb4a87') != "custom"): ?>
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $card_image ?>.png" alt="<?php echo $card_title; ?>" class="float-left" width="35" height="35" />
   <h3 class="float-left ml-2 mt-2 h5"><?php echo $card_title; ?>
   <?php else:{ ?>
     <h3 class="float-left ml-2 mt-2 h5">   <?php echo get_sub_field('field_5a1b95a1a6dc8'); ?></h3>
    <?php };?>
    <?php endif; ?>
   </div>
    <div class="card-body ">
      <?php echo $card_content ?>
    </div>
</div>

  <?php $x++; endwhile; ?>


<?php endif; ?>
<!-- cards.php end -->