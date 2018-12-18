<?php  get_template_part('header');?>
<?php
//var

     $current = $post->ID;

     $parent = $post->post_parent;

     $grandparent_get = get_post($parent);

     $grandparent = $grandparent_get->post_parent;

     ?>

<div class="container-fluid" id="cde">
  <div class="row">
    <div  id="banner" class="col-12">
        <div
          class="cde-pixel-left">
        </div>
        <div class="module-title">
          <h1>
          <div class="dash"><?php echo "<br>"; ?>
           <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>
          </div>
        </h1>
        </div>
      <div class="cde-pixel-right"></div>
    </div>
