<?php  get_template_part('header');?>
<?php

     $current = $post->ID;
     $parent = $post->post_parent;
     $grandparent_get = get_post($parent);
     $grandparent = $grandparent_get->post_parent;
         ?>
<div class="container-fluid" id="vwp">
<div class="row">

    <div  id="banner" class="col-12" style="z-index:1;">
        <a href="../scorm/intranet/"><div id="ws">
      <div class="vwp-logo"></div>
      </div></a>

    </div>

    <?php
  if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page') { //no breadcrumbs ?>
<?php } else { ?>

<?php } ?>
<?php breadcrumbs(); ?><?php breadcrumbs($id); ?>
<!-- breadcrumbs commented out for VWP-->
<div class="container">
    <div class="" style="margin-top: 6rem; border-bottom: 1px solid #eeeeee; margin-bottom: 2rem;" id="breadcrumbs" data-intro="This is a location-based breadcrumb trail showing which page you are viewing and where it sits in the website’s hierarchy.">

    <?php
  if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page') { //no breadcrumbs or logo opn splash page?>
<?php } else { ?>

      <ul class="thin-text">
           <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo '<li class="d-lg-inline">'.get_the_title($grandparent).'</li> <li >'.get_the_title($parent).'</li>'; }else {echo '<li>'.get_the_title($parent).'</li>'; }?>
           <li style="color:#01A19A; font-weight: 500;"><?php wp_title(''); ?></li>
      </ul>
<?php } ?>
    </div>
    </div>
  </div>
</div>
