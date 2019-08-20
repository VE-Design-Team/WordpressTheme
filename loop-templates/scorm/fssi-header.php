<?php  get_template_part('header');?>
<?php
     $current = $post->ID;
     $parent = $post->post_parent;
     $grandparent_get = get_post($parent);
     $grandparent = $grandparent_get->post_parent;
         ?>
<div class="container-fluid" id="fssi">
  <div class="row">
    <div  id="banner" class="col-12">
     <div id="ws"><div class="fssi-logo"></div></div>
     <div class="module-title"><h1>          <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($parent); }else {echo get_the_title($parent); }?>
</h1></div>
    </div>

    <?php
  if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page') { //no breadcrumbs ?>
<?php } else { ?>

<?php } ?>


    <div class="col-12" id="breadcrumbs">
    <div id="ws">
        <div class="fssi-logo"></div>
      </div>
    <?php
  if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page') { //no breadcrumbs or logo opn splash page?>
<?php } else { ?>

      <ul class="thin-text">
           <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo '<li class="d-md-none d-lg-inline">'.get_the_title($grandparent).'</li> <li >'.get_the_title($parent).'</li>'; }else {echo '<li>'.get_the_title($parent).'</li>'; }?>
           <li><?php wp_title(''); ?></li>
      </ul>
<?php } ?>
<div id="access">
    <button id="navtoggle" class="btn btn-primary btn-menu"></button>
    <button onclick="fullscreen()" id="fullscreen" class="btn btn-primary btn-fs"></button>
</div>
</div>
