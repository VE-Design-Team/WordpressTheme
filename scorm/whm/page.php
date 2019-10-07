<head>
<!-- Our Custom CSS -->
  <link rel="stylesheet" href="/wordpress481/wp-content/themes/page-builder/sass/theme/whm_introjs.css">
    <link rel="stylesheet" href="/wordpress481/wp-content/themes/page-builder/css/jquery.mCustomScrollbar.min.css">
    <script src="/wordpress481/wp-content/themes/page-builder/js/jquery.min.js"></script>
    <script src="/wordpress481/wp-content/themes/page-builder/js/classie.js"></script>
</head>

<body class="cbp-spmenu-push cbp-spmenu-push" >

  <div id="showRightPush" class="">
    <span></span>
    <span></span>
    <span></span>
    <div class="text-right w-100 fscreen">
      <div class="">
        <a class="full-screen" onclick="fullscreen()" id="fullscreen" href="#"></a>
      </div>
      <div class="">
        <a href="javascript:void(0)" onclick="introJs().start();" class="help-tip page-scroll"></a>
      </div>
    </div>
  </div>

  <nav id="sidebar" class="navbar cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" >
    <div>
      <div class="sidebar"><?php get_template_part( 'loop-templates/scorm/whm-scorm', 'nav' ); ?> </div>
    </div>
  </nav>

  <div id="content" class="cbp-spmenu-push-toleft">
      <?php get_template_part( 'loop-templates/scorm/whm', 'header' ); ?>
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'loop-templates/scorm/whm-scorm', 'content' ); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
    <div class="b-0 container">
      <?php get_template_part( 'loop-templates/scorm/whm', 'bottom_navigation' ); ?>
    </div>
  </div>

</body>


<!-- content ----------------------------------->
<?php get_template_part( 'loop-templates/scorm/whm', 'footer' ); ?>

<script src="/wordpress481/wp-content/themes/page-builder/js/menu.js"></script>
<script src="/wordpress481/wp-content/themes/page-builder/js/introjs.js"></script>
<script src="/wordpress481/wp-content/themes/page-builder/js/modernizr.custom.js"></script>
<script src="/wordpress481/wp-content/themes/page-builder/js/jquery.mCustomScrollbar.concat.min.js"></script>
