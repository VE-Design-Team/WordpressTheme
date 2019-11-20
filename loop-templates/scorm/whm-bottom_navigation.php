<div class="">
          <div id="bottom_navigation" class="">
            <div id="next-prev">

<?php

// vars
$prev = get_field('field_5bdf9ede4ef3a', false, false);

// check
if( $prev ): ?>
<a class="float-left" title="Previous page" href="<?php echo get_the_permalink($prev); ?>">Previous page: <strong><?php echo get_the_title($prev); ?></strong></a>

<?php endif; ?>
<?php

// vars
$next = get_field('field_5bdf9ea04ef39', false, false);

// check
if( $next ): ?>
<a class="float-right" title="Next page" href="<?php echo get_the_permalink($next); ?>">Next page: <strong><?php echo get_the_title($next); ?></strong></a>

<?php endif; ?>

            </div>
          </div>
  </div>

</div>
