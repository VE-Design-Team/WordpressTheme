<head>
<!-- Our Custom CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/sass/theme/vwp_introjs.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/jquery.mCustomScrollbar.min.css">
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/classie.js"></script>
</head>

<body class="cbp-spmenu-push" >

  <div id="showRightPush" class="">
    <span></span>
    <span></span>
    <span></span>
    <div class="text-right w-100 fscreen">
    </div>
  </div>

  <nav id="sidebar" class="navbar cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" >
    <div>
      <div class="sidebar"><?php get_template_part( 'loop-templates/scorm/vwp-scorm', 'nav' ); ?> </div>
    </div>
  </nav>

  <div id="content" class="cbp-spmenu-push-toleft">
     <?php get_template_part( 'loop-templates/scorm/vwp', 'header' ); ?>
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'loop-templates/scorm/vwp-scorm', 'content' ); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
    <div class="b-0 container">
      <?php get_template_part( 'loop-templates/scorm/vwp', 'bottom_navigation' ); ?>
    </div>
  </div>
</body>


<?php get_template_part( 'loop-templates/scorm/vwp', 'footer' ); ?>

<script src="<?php echo get_stylesheet_directory_uri();?>/js/menu.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/introjs.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/modernizr.custom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
