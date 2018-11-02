<?php  get_template_part('header');?>
<div id="fssi"><!--closing in footer-->
<header id="titles">
  <div class="headingbar d-none d-xl-block">
    <div class="header-image">
      <div class="brand">
        <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/FSSI_LOGOwhite_space.png"
          alt="lorem" height: "56.7px">
      </div>
      <!--       brand -->

      <?php 
     
     $current = $post->ID;
      
     $parent = $post->post_parent;
      
     $grandparent_get = get_post($parent);
      
     $grandparent = $grandparent_get->post_parent;
      
     ?>

      <div class="module"><span>
          <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>

        </span></div>
      <!--  module -->
    </div>
    <!--     header-image -->
  </div>
  <!--   headingbar -->
  <div class="menubar">
    <div class="brand-menubar d-xl-none">
      <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/FSSI_LOGOwhite_space.png"
        alt="lorem" height: "56.7px">
    </div>
    <!--     logo -->

    <nav aria-label="breadcrumb" id="breadcrumb-1">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="thin" href="#">Course Title
            <!-- Module --></a></li>

        <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo '<li class="breadcrumb-item d-none d-xs-none d-md-block"><a class="thin" href="#">'.get_the_title($grandparent).'</a> </li> <li class="breadcrumb-item d-none d-sm-none d-md-block"><a href="#" class="thin">'.get_the_title($parent).'</a></li>'; }else {echo '<li class="breadcrumb-item d-none d-sm-none d-md-block"><a href="#" class="thin">'.get_the_title($parent).'</a></li>'; }?>

        <!-- <li class="breadcrumb-item" aria-current="page"><a class="thin">INTRODUCTION TO THE MODULE</a></li> -->
      </ol>
      <!-- breadcrumb -->
    </nav>
    <!-- breadcrumb navigation -->
    <div onclick="closeFullscreen()" class="exit-course d-none d-xl-block"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/exit_course_icon.png"
        alt="lorem" style=""></div>
    <div class="fullscreen d-xl-none ">
      <div class="container">

        <a onclick="openFullscreen()" class="fullscreenbtn"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/full_screen_icon.svg"
            alt="lorem">
        </a>
        <!--   button -->
        <a id="show_hide" onclick="myFunction()">
          <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/hamburger.svg" alt="lorem">
        </a>
        <!-- show-accordion -->

      </div>
      <!--   container -->
    </div>
    <!-- fullscreen -->

  </div>
  <!-- menubar -->
</header>