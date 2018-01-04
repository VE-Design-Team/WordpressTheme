<?php if( have_rows( 'field_5a4d9d0dc74ab') ): $i=1 ;?>

<div id="quadrant-reveal">
    <div class="container">
        <div class="row justify-content-center">
            <?php while ( have_rows( 'field_5a4d9d0dc74ab') ) : the_row();?>
            <div class="col-5 col-md-4 col-lg-3  square-<?php echo $i; ?>">
                <h3 class="heading text-dark "><?php echo the_sub_field('field_5a4d9ddac74ac'); ?></h3>
                <p>
                    <?php echo the_sub_field( 'field_5a4d9de3c74ad'); ?>
                </p>
            </div>
            <?php if ($i=='2' ) { ?>
        </div>
        <div class="row justify-content-center">

            <?php } $i++; ?>

            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php else : endif; ?>