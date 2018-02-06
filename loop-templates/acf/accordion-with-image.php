<style>
#awm
{
  display:inline-block;
  min-height: 400px;
  width: 100%;
}
.background-image img
{
  min-height: 300px;
  max-height: 400px;
  position: absolute;
right: 0;
}
.background-image
{
   min-height: 400px;
  max-height: 600px;
  
}
.card-body
{
  padding: 0.5rem;
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
    echo $i; ?> .card-header {
<?php 
  if (get_sub_field('field_5a542031eef94') == "#e60028" || get_sub_field('field_5a542031eef94') == "#000054"): ?>
  color: #fff;
<?php else: {}; ?>
 color: #000;
    <?php endif; ?>
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
<div id="awm" class=" aim col-12 glossarize">
  <div class="row">
    <div class="col-12 text-center">
      <h3><?php
the_field('field_5a53f3ef29cd8'); ?></h3>
    </div>
    <div class="col-xs-12 col-sm-6  background-image "><img src="<?php
the_field('field_5a5443ce64623'); ?>" alt="<?php
the_field('field_5a53f3ef29cd8'); ?>" height="400" class="float-right"/>
<?php
// check if the repeater field has rows of data
if (have_rows('field_5a541f36eef91')):
  // ouput backgrounds
  $i = 1;
  while (have_rows('field_5a541f36eef91')):
    the_row(); ?>
<?php 
$image = get_sub_field('field_5a5423847dc95');
if (!empty($image)): ?>
  <img src="<?php echo $image['url']; ?>" class="img-fluid collapse multi-collapse aim-<?php
    echo $i; ?>" height="400"/>
<?php endif; ?>
<?php
    $i++;
  endwhile;
else:
endif;
?>
    </div>
    <div class="col-xs-12 col-sm-6 accordion-area">
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
    echo $i; ?>" class="card-header h6">
     <span class="ac-plus">+  </span> <?php
    the_sub_field('field_5a541fbfeef92'); ?></div>
<?php if (get_sub_field('field_5a541fc6eef93')): ?>
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
