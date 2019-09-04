
<div id="hotspots">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="image">
        <div class="contain" style="background-image: url(<?php if( get_field('field_5a7ba039caa05')): ?><?php the_field('field_5a7ba039caa05');
    ?><?php endif;
    ?>);">

          <?php

// check if there are hotspots
if( have_rows('field_5a7b7e0ddb57c') ): ?>

            <ul class="list-unstyled">
              <?php  
  $i = 0;
  while ( have_rows('field_5a7b7e0ddb57c') ) : the_row();
        // set variables
       $title = get_sub_field('field_5a7b7e35db57d');
       $description = get_sub_field('field_5a7b7e45db57e');
       $xaxis = get_sub_field('field_5a7b7fa2d4c97');
       $yaxis = get_sub_field('field_5a7b7ff2d4c98'); ?>
              <li>
                <a class="hotspot" data-left="<?php echo $xaxis; ?>" data-top="<?php echo $yaxis; ?>" data-toggle="tooltip"
                  data-placement="top" tabindex="<?php echo $i; ?>" title="<?php echo $title; ?>">
                  <span class="sr-only">
                    <?php echo $title; ?>:
                    <?php echo $description; ?>
                  </span>
                </a>
              </li>
              <?php 
  $i++;
  endwhile; ?>
            </ul>
            <?php else :

    // no hotspots

endif;

?>

            <div class="hotspots-label"></div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<script>
  $('.hotspot').each(function () {

    var $this = $(this),
      top = $this.data('top'),
      left = $this.data('left');

    $this.css({
        top: top + "%",
        left: left + "%"
      })
      .addClass('is-visible');

  });

  $(".hotspots-label").on('click', function (e) {
    $(this).removeClass('is-visible');
    $(this).parents('.image').find('.hotspot').removeClass('is-active');
    e.preventDefault();
  });




  $('.hotspot').on('click', function (e) {

    var text = $(this).data('text');

    if (!$(this).hasClass('is-active')) {
      $(this).parents('.image').find('.hotspot').removeClass('is-active');
      $(this).addClass('is-active');
      $(this).parents('.image').find('.hotspots-label').html('<strong>' + $(this).text() +
        '</strong> <span></span>').addClass('is-visible');
    } else {
      $(this).removeClass('is-active');
      $(this).parents('.image').find('.hotspots-label').html('<strong>' + $(this).text() + '</strong> <span>' +
        text + '</span>').removeClass('is-visible');
    }

    e.preventDefault();
  });
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>