<?php if( have_rows('field_5a1b72e2b4a86') ): ?>

<div class="row">  

  <?php while( have_rows('field_5a1b72e2b4a86') ): the_row();?>
    <?php
          // vars
          $card_image = get_sub_field('field_5a1b730bb4a87');
          $field = get_sub_field_object('field_5a1b730bb4a87');
          $value = get_sub_field('field_5a1b730bb4a87');
          $card_title = $field['choices'][ $value ];
          $card_content = get_sub_field('field_5a1b865eaeaab');
          $card_text_title = get_sub_field_object('field_5a1b95a1a6dc8');
          $card_header_image = get_sub_field_object('field_5a1b9656a6dc9');
          ?>
        
 <?php if( get_row_index() % 2 == 0 ){ ?>

<div class="col">
<?php } else { ?>
<div class="col-12 col-xs8-6 mb-5">
<?php } ?>
  <div class="card">
    <div class="card-header">

<?php 
  if(get_sub_field('field_5a1b730bb4a87') != "custom"): ?>
   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $card_image ?>.png" alt="<?php echo $card_title; ?>" class="float-left" width="50" height="50" />
   <h3 class="float-left ml-2 mt-2"><?php echo $card_title; ?>
    
   <?php else:{ ?>
     <h3 class="float-left ml-2 mt-2">   <?php echo get_sub_field('field_5a1b95a1a6dc8'); ?></h3>

    <?php };?>
    <?php endif; ?>
          
    </div>
    <div class="card-body">

      <p class="card-text"><?php echo $card_content ?></p>

    </div>
  </div>
</div>

  <?php endwhile; ?>

</div>
<?php endif; ?>
<!-- cards end -->
