<div id="carousel" class="carousel mt-1" >
  <div class="container-fluid navs">
    <div class="row top-nav ">
      <div class="col-1 scrollers">
  
      </div>
      <div class="col-12">
        <div class="row justify-content-center carousel-indicators indicators">
        <div class="col-1 scrollers left-right">
        <a href="#carousel" role="button" data-slide="prev">
          <i class="fa fa-chevron-circle-left fa-3x"></i>
        </a>
      </div>
          <?php
$i = 1;

while (have_rows('field_5a55a5855861a')):
 the_row(); //get carousel indicators
  ?>

          <div class="col-1 col-auto carousel-indicator <?php
 if ($i == " 1 ") {
  echo "active ";
 } ?>" data-target="#carousel" data-slide-to="<?php
 echo $i - 1; ?>">

            <?php
 if (get_sub_field('field_5a55a5d15861b')): ?>
            <?php
  $image = get_sub_field('field_5a55a5d15861b');
  $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
  if ($image) {
   echo wp_get_attachment_image($image, $size);
  }

?>

              <?php
 else: { ?>

              <img src="<?php
   echo get_stylesheet_directory_uri(); ?>/img/carousel/<?php
   echo " " . $i + 1; ?>.png" alt="View this slide"
                class="img-fluid">

              <?php
  }

 endif; ?>

              <div class="triangle">
                <div class="empty"></div>
              </div>
          </div>

          <?php
 $i++;
endwhile; //noe get right indicator
 ?>
<div class="col-1 scrollers left-right">
        <a class="right" href="#carousel" role="button" data-slide="next">
          <i class="fa fa-chevron-circle-right fa-3x "></i>
        </a>
      </div>
        </div>
      </div>
      <div class="col-1 scrollers">

      </div>
    </div>

  </div>

  <?php

if (get_field('field_5ad936e5e0fdd') == 'fullwidth'): ?>
  <div class="carousel container-fluid">
    <?php
else: { ?>
    <div class="carousel container-fluid">
      <?php
 }

endif; ?>

      <div class="carousel row">

        <div class="col-1 hidden-md-down"></div>
        <div class="carousel-inner bordered col-12 col-md-12">

          <?php

// check if the repeater field has rows of data

if (have_rows('field_5a55a5855861a')):

 // loop through the rows of data

 $e = 0;
 while (have_rows('field_5a55a5855861a')):
  the_row(); ?>
            <div class="carousel-item <?php
  if ($e == " 0 ") {
   echo "active ";
  } ?>">
              <?php
  get_template_part('loop-templates/acf/carousel-content'); ?>
            </div>
            <?php
  $e++;
 endwhile;
else:

 // no rows found

endif;
?>

        </div>
        <div class="col-1 hidden-lg-down"></div>
      </div>
    </div>
  </div>
  <script>

    // $('.carousel-indicator:first').addClass('active');
    // $('.carousel-item:first').addClass('active');

  </script>