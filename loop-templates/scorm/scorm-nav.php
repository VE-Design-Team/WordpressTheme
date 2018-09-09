

<style>
.current
{
text-decoration: underline;
}
  </style>
<?php
//get current id
$current_id = $post->ID; 
//Query parent id

$direct_parent = $post->post_parent;
?>
<ul class="page-list col-2">
<?php 
//get children
query_posts(array('showposts' => 20, 
'post_parent' => $direct_parent, 
'post_type' => 'scorm',
'orderby'           => 'date',
    'order'             => 'ASC',
)); 
while (have_posts()) { the_post(); ?>
   <li>
       <?php
       //apply a class to current page link in menu
       $current_class = ( $current_id == $post->ID ) ? 'class="current"' : ''; ?>
       <a target="_self" <?php if ( $current_class ) echo $current_class; ?> href="<?php the_permalink() ?>">
          <?php 
          //get the link title
          the_title() ?>
       </a>
   </li>
<?php } ?>
<?php 
//reset navigation menu
wp_reset_query(); ?>
</ul>
