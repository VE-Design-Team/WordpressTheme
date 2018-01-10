
<style>
#awm
{
  display:inline-block;
  min-height: 400px;
}
<?php

// Get colours

if (have_rows('field_5a541f36eef91')):
  $i = 1;
  while (have_rows('field_5a541f36eef91')):
    the_row(); ?>

.aim .card-<?php
    echo $i; ?> {
  border-color: <?php
    the_sub_field('field_5a542031eef94'); ?>;
}
.aim .card-<?php
    echo $i; ?> .card-header {
  background: <?php
    the_sub_field('field_5a542031eef94'); ?>;
}
.aim .card-<?php
    echo $i; ?>:hover {
  border-color: <?php
    the_sub_field('field_5a542031eef94'); ?>;
}
.aim .card-<?php
    echo $i; ?>:hover .card-header {
  background: <?php
    the_sub_field('field_5a542031eef94'); ?>;
}
.card-header
{
  cursor: pointer;
}
<?php
    $i++;
  endwhile;
else:
endif;
?>
.background-image img
{
position: absolute;
}
[data-toggle="collapse"][aria-expanded="true"] > h6 > .ac-plus {
    display: inline-block;
    -ms-transform: rotate(45deg);

    /* IE 9 */
    -webkit-transform: rotate(45deg);

    /* Safari 3-8 */
    transform: rotate(45deg);
}

img.collapsing {
    -webkit-transition: none;
    transition: none;
    display: none;
}

</style>

<div id="awm" class="container aim">
  <div class="row">
    <div class="col-12 text-center">
      <h3><?php
the_field('field_5a53f3ef29cd8'); ?></h3>
    </div>


    <div class="col-8 background-image"><img src="<?php
the_field('field_5a5443ce64623'); ?>" alt="<?php
the_field('field_5a53f3ef29cd8'); ?>" />

<?php

// check if the repeater field has rows of data

if (have_rows('field_5a541f36eef91')):

  // ouput backgrounds

  $i = 1;
  while (have_rows('field_5a541f36eef91')):
    the_row(); ?>

<?php 

$image = get_sub_field('field_5a5423847dc95');

if( !empty($image) ): ?>

  <img src="<?php echo $image['url']; ?>" class="img-fluid collapse multi-collapse aim-<?php
    echo $i; ?>" />

<?php endif; ?>
        
<?php
    $i++;
  endwhile;
else:
endif;
?>

    </div>


    <div class="col-4 accordion-area">

<?php

if (have_rows('field_5a541f36eef91')):

  // output cards and card bodies

  $i = 1;
  while (have_rows('field_5a541f36eef91')):
    the_row(); ?>
     <div class="card card-<?php
    echo $i; ?> mb-1">
        <div data-toggle="collapse"  data-target=".aim-<?php
    echo $i; ?>" role="button" aria-expanded="false" aria-controls="aim-<?php
    echo $i; ?>" class="card-header text-white h6">

     <span class="ac-plus">+  </span> <?php
    the_sub_field('field_5a541fbfeef92'); ?></div>
        
<?php if( get_sub_field('field_5a541fc6eef93') ): ?>
 <div class="aim-<?php
    echo $i; ?> card-body collapse multi-collapse small"><?php
    the_sub_field('field_5a541fc6eef93'); ?></div>
<?php endif; ?>

      </div>     
<?php
    $i++;
  endwhile;
else:
endif;
?>

    </div>
  </div>
</div>

 

 

