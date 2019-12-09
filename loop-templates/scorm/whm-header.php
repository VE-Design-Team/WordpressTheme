<?php  get_template_part('header');?>
<?php
     $current = $post->ID;
     $parent = $post->post_parent;
     $grandparent_get = get_post($parent);
     $grandparent = $grandparent_get->post_parent;
         ?>
<div class="container-fluid" id="whm">
<div class="row">

    <div  id="banner" class="col-12" style="z-index:1;">
      <div id="ws">
        <div class="whm-logo"></div>
      </div>

    </div>

    <?php
  if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page') { //no breadcrumbs ?>
<?php } else { ?>

<?php } ?>

<!-- breadcrumbs -->
<div class="container">
    <div class="" style="margin-top: 6rem;" id="breadcrumbs">

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
