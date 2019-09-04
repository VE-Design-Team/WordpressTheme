<div class="row">
    <?php if( get_field('field_5a4ec7a12d3c2') == 'horizontal' ): ?>


    <?php //Get titles ?>
    <?php

// check if the repeater field has rows of data
if( have_rows('field_5a4ec33a28284') ): ?>

        <div id="myTabContent">
            <?php while ( have_rows('field_5a4ec33a28284') ) : the_row(); ?>

            <h3 class="h4 text-muted ">
                <?php the_sub_field('field_5a4ec6eb28286'); ?>
            </h3>

            <?php endwhile; ?>
        </div>

        <?php else : ?>



        <?php endif; ?>
        <?php //Get images ?>

        <?php

// check if the repeater field has rows of data
if( have_rows('field_5a4ec33a28284') ):

    // loop through the rows of data
    while ( have_rows('field_5a4ec33a28284') ) : the_row();

        // display a sub field value
        the_sub_field('field_5a4ec68b28285');

    endwhile;

else :

    // no rows found

endif;

?>




            <?php else: ?> See your developer
            <?php endif; ?>
</div>
