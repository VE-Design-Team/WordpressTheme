<!-- intranet home page -->

<!-- start get cards -->
<?php if( have_rows('field_5dddcb8593260') ): ?>
The UX of this page is in development
<h2>Cards</h2>
<div class="row">

<?php while( have_rows('field_5dddcb8593260') ): the_row(); 

    // vars
    $card_image = get_sub_field('field_5dddcbac93261');
    $card_title = get_sub_field('field_5dddcbba93262');
    $card_content = get_sub_field('field_5dddcbc593263');
    $card_link = get_sub_field('field_5dddd5c420d42');

    ?>

    <div class="col-4">

        <?php if( $card_link ): ?>
            <a href="<?php echo $card_link; ?>">
        <?php endif; ?>

            <img src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt'] ?>" />

        <?php if( $card_link ): ?>
            </a>
        <?php endif; ?>
        <?php echo $card_title; ?>
        <?php echo $card_content; ?>

        </div><!-- end col-->

<?php endwhile; ?>

</div><!-- end row-->

<?php endif; ?>
<!-- end get cards-->
<h2>Buttons</h2>
<!-- start get buttons -->
<?php if( have_rows('field_5dddca8ee40a5') ): ?>

    <div class="row">

<?php while( have_rows('field_5dddca8ee40a5') ): the_row(); 

    // vars
    $button_image = get_sub_field('field_5dddcb49e158f');
    $button_title = get_sub_field('field_5dddcb55e1590');
    $button_link = get_sub_field('field_5dddcb70e1591');

    ?>

<div class="col-4">

        <?php if( $button_link ): ?>
            <a href="<?php echo $button_link; ?>">
        <?php endif; ?>

            <img src="<?php echo $button_image['url']; ?>" alt="<?php echo $button_image['alt'] ?>" />

        <?php if( $button_link ): ?>
            </a>
        <?php endif; ?>

        <?php echo $button_title; ?>

    </div><!-- end col-->

<?php endwhile; ?>

</div><!-- end row-->

<?php endif; ?>
<!-- end get buttons -->
<!-- intranet home page end -->
