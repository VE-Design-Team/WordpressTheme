<?php if( have_rows('field_5a1b72e2b4a86') ): ?>



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
<div class="row">          
<div class="col-8">
  <div class="card">
    <div class="card-header">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $card_image ?>.png" alt="<?php echo $card_title; ?>" class="float-left" width="50" height="50" />
      <h3 class="float-left ml-2 mt-2"><?php echo $card_title; ?></h3>
    </div>
    <div class="card-body">

      <p class="card-text"><?php echo $card_content ?></p>

    </div>
  </div>
</div>

</div>

      <?php if( $link ): ?>
        <a href="<?php echo $link; ?>">
      <?php endif; ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

      <?php if( $link ): ?>
        </a>
      <?php endif; ?>

        <?php echo $content; ?>



  <?php endwhile; ?>


<?php endif; ?>
<!-- cards end -->
