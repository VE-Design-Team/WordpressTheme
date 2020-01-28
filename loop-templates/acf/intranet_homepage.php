<!-- intranet home page -->
<!-- start get cards -->
<hr>
<div id="intranet" class="row">
<div class="col-12 col-lg-7">

<?php if( have_rows('field_5dddcb8593260') ): ?>
<h2>Latest news</h2>

<div class="row m-0">

<?php while( have_rows('field_5dddcb8593260') ): the_row();

    // vars
    $card_image = get_sub_field('field_5dddcbac93261');
    $card_title = get_sub_field('field_5dddcbba93262');
    $card_content = get_sub_field('field_5dddcbc593263');
    $card_link = get_sub_field('field_5dddd5c420d42');

    ?>

   <div id="latestnews" class="col-12 col-lg-4 mb-5 pl-0 pr-3">
    <?php if( $card_link ): ?>
            <a href="<?php echo $card_link; ?>">
        <?php endif; ?>

    <div class="card mb-3">
  <div class="row no-gutters single-news">
    <div class="col-5 col-lg-12">
    <img src="<?php echo $card_image['url']; ?>" class="card-img card-img-top" alt="<?php echo $card_image['alt'] ?>" />

    </div>
    <div class="col-7 col-lg-12">
      <div class="card-body">
        <h5 class="card-title">  <?php echo $card_title; ?></h5>
        <hr>
        <p class="card-text">        <?php echo $card_content; ?></p>
      </div>
    </div>
  </div>
  </a>
</div>
        </div><!-- end col-->
<?php endwhile; ?>
</div><!-- end row-->
<?php endif; ?>
<a class="btn btn-primary mb-5" href="../../scorm/intranet/news-feed/">Read more staff news</a>

<?php

// check if the repeater field has rows of data
if( have_rows('field_5e1e7ce9bb5ae') ):

 	// loop through the rows of data
    while ( have_rows('field_5e1e7ce9bb5ae') ) : the_row();

        // display a sub field value

        the_sub_field('field_5e1e836a9811e');

$postObject = get_sub_field('field_5e1e83469811d');
$postURL = get_permalink($postobject->ID);
echo $postURL;

    endwhile;

else :

    // no rows found

endif;

?>



</div>

<!-- end get cards-->

<div  class="col-8 col-lg-4 pr-0">
<h2>Quick Links</h2>
<div id="quicklinks">
<!-- start get buttons -->
<?php if( have_rows('field_5dddca8ee40a5') ): ?>

    <div class="row m-0">

<?php while( have_rows('field_5dddca8ee40a5') ): the_row();

    // vars
    $button_image = get_sub_field('field_5dddcb49e158f');
    $button_title = get_sub_field('field_5dddcb55e1590');
    $button_link = get_sub_field('field_5dddcb70e1591');

    ?>

<div class="col-4 border card">

        <?php if( $button_link ): ?>
            <a href="<?php echo $button_link; ?>">
        <?php endif; ?>

            <img class="mx-auto d-block
            " src="<?php echo $button_image['url']; ?>" alt="<?php echo $button_image['alt'] ?>" />



       <p> <?php echo $button_title; ?></p>
       <?php if( $button_link ): ?>
           </a>
       <?php endif; ?>
    </div><!-- end col-->

<?php endwhile; ?>

</div><!-- end row-->

<?php endif; ?>
        </div>
</div>
</div>

<!-- end get buttons -->
<!-- intranet home page end -->
