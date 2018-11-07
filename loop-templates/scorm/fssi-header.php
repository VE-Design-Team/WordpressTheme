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
     <a><div class="fssi-logo"></div></a>
     <div class="module-title"><h1>          <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>
</h1></div>
    </div>
    <div class="col-12" id="breadcrumbs">
      <ul class="thin-text">
        <li>Certificate III</li>
    <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo '<li >'.get_the_title($grandparent).'</li> <li >'.get_the_title($parent).'</li>'; }else {echo '<li>'.get_the_title($parent).'</li>'; }?>
    <li><?php wp_title(''); ?></li>
</ul>
    <button id="navtoggle" class="btn btn-primary btn-menu"></button>
    <button id="fullscreen" class="btn btn-primary btn-fs"></button>
    </div>
