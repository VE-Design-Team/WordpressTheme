<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flip.min.js'></script>

<div id="flipcards" class="container-fluid">
  <div class="grid-container d-flex align-content-center justify-content-center">

    <!-- if have cards -->
    <?php if (have_rows('field_5a865a7a9f82f')): ?>

    <!-- Build card-->
    <?php while (have_rows('field_5a865a7a9f82f')): the_row();?>

    <div class="card-grid ">
      <!-- front content -->
      <div class="card front">
        <!-- if have an image -->

        <div class="card-body scroll-box ">
          <?php if (get_sub_field('field_5a8663981362e')): ?>

          <?php 

$image = get_sub_field('field_5a8663981362e');

if( !empty($image) ): ?>

	<img class="card-img-top img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>


         
          <div class="card-text <?php the_field('field_5b3c038bf73ee');?>">
            <?php the_sub_field('field_5a865a8c9f830');?>
          </div>
          <?php  else: ?>
          <table style="height: 100%" class="card-text">
            <tbody>
              <tr>

                <td class="card-text align-middle <?php the_field('field_5b3c038bf73ee');?>">

                  <?php the_sub_field('field_5a865a8c9f830');?>
                </td>

              </tr>
            </tbody>
          </table>
          <?php endif;?>
          <!--      <h5 class="card-title">Card title</h5> -->
          <!-- font card size-->

          <div class="middler">
            <button class="flip-btn btn btn-primary  btn-sm">Flip</button></div>
        </div>
      </div>

      <!-- end front-->

      <!-- back content -->
      <div class="card back">

        <div class="card-body scroll-box">
          <?php if (get_sub_field('field_5a8664851362f')): ?>
 

<?php 

$image2 = get_sub_field('field_5a8664851362f');

if( !empty($image2) ): ?>

<img class="card-img-top img-fluid" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />

<?php endif; ?>

         <div class="card-text  <?php the_field('field_5b3c03c1f73ef');?>">

            <?php the_sub_field('field_5a86650b13630');?>
          </div>

          <?php  else: ?>
          <table style="height: 100%" class="card-text" >
            <tbody>
              <tr>

                <td class="card-text align-middle <?php the_field('field_5b3c03c1f73ef');?>">

                  <?php the_sub_field('field_5a86650b13630');?>
                </td>

              </tr>
            </tbody>
          </table>
          <?php endif;?>

          <div class="middler">
            <button class="unflip-btn btn btn-primary btn-sm ">Flip</button>
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