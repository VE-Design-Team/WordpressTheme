<div id="flipcards" class="container-fluid">
  <div class="grid-container d-flex align-content-center justify-content-center">

    <!-- if have cards -->
    <?php if (have_rows('field_5a865a7a9f82f')): ?>

    <!-- Build card-->
    <?php while (have_rows('field_5a865a7a9f82f')): the_row();?>

    <div class="card-grid ">
      <!-- front content -->
      <div class="front card">
        <!-- if have an image -->

        <div class="card-body scroll-box ">
          <?php if (get_sub_field('field_5a8663981362e')): ?>
          <img class="card-img-top img-fluid" src="<?php the_sub_field('field_5a8663981362e');?>" alt="Card image cap">
          <?php endif;?>
          <!--      <h5 class="card-title">Card title</h5> -->
          <!-- font card size-->
          <p class="card-text <?php the_field('field_5b3c038bf73ee');?>">
            <?php the_sub_field('field_5a865a8c9f830');?>
          </p>
          <div class="middler">
            <button class="flip-btn btn btn-primary  btn-sm">Click to flip</button></div>
        </div>
      </div>

      <!-- end front-->

      <!-- back content -->
      <div class="back card">

        <div class="card-body scroll-box">
          <?php if (get_sub_field('field_5a8664851362f')): ?>
          <img class="card-img-top" src="  <?php the_sub_field('field_5a8664851362f');?>" alt="Card image cap">
          <?php endif;?>

          <p class="card-text <?php the_field('field_5b3c03c1f73ef');?>">
            <?php the_sub_field('field_5a86650b13630');?>
          </p>
          <div class="middler">
            <button class="unflip-btn btn btn-primary btn-sm ">Click to flip</button>
          </div>
        </div>
      </div>
    </div>

    <?php

endwhile;?>
  </div>
  <?php else:

// no cards here, move along....

endif;

?>

</div>
<script src='<?php echo get_stylesheet_directory_uri(); ?>/src/js/jquery.flip.min.js'></script>

<script>
  $(".card-grid").flip({
    trigger: "manual"
  });

  $(".flip-btn").click(function () {
    $(this)
      .closest(".card-grid")
      .flip(true);
  });

  $(".unflip-btn").click(function () {
    $(this)
      .closest(".card-grid")
      .flip(false);
  });
</script>