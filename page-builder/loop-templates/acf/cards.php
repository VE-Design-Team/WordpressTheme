<?php if (have_rows('field_5a1b72e2b4a86')): ?>
<div id="calloutcards" class="<?php if ($x = 1) {
    echo " ml-0 ";
}?> <?php if ($x !== $numrows) {
    echo "mr-0 ";
}?>">
  <?php $numrows = count(get_field('field_5a1b72e2b4a86'));
?>
  <?php $x = 1;while (have_rows('field_5a1b72e2b4a86')): the_row();?>
  <?php
    // set variables
    $card_image = get_sub_field('field_5a1b730bb4a87');
    $field = get_sub_field_object('field_5a1b730bb4a87');
    $value = get_sub_field('field_5a1b730bb4a87');
    $card_title = $field['choices'][$value];
    $card_content = get_sub_field('field_5a1b865eaeaab');
    $card_text_title = get_sub_field_object('field_5a1b95a1a6dc8');
    $card_header_image = get_sub_field_object('field_5a1b9656a6dc9');
    $custom_title = get_sub_field('field_5a1b95a1a6dc8');
    ?>

    <div class="card <?php if ($x = 1) {
        echo " ml-0 ";
    }?> <?php if ($x !== $numrows) {
        echo "mr-0 ";
    }?>">

      <div id="cardcontent">
        <div class="curve">
          <?php
    if (get_sub_field('field_5a1b730bb4a87') != "custom"): ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php echo $card_image ?>.png" alt="<?php echo $card_title; ?>"
              class="float-left" width="60" />

            <?php else:{};?>

            <?php endif;?>
        </div>

        <div class="card-header">
          <?php
if (get_sub_field('field_5a1b730bb4a87') != "custom"): ?>
            <h4><?php echo $card_title; ?></h4>

            <?php else:{};?>
            <h4><?php echo $custom_title; ?></h4>

            <?php endif;?>
        </div>

        <div class="card-body">
          <hr>
          <?php echo $card_content ?>
        </div>
      </div>

      <div class="pixel">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
          y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
          <style type="text/css">
            .st0 {
              fill: #00AAFF;
            }
          </style>-->
          <polygon class="pixel" points="10,20 10,10 20,10 20,0 30,0 30,30 0,30 0,20 10,20 " />
        </svg>
      </div>
    </div>

    <?php $x++;endwhile;?>
</div>

<?php endif;?>
