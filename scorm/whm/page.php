<head>
<!-- Our Custom CSS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154715485-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
_gaq.push(['_setDomainName', 'none']);
  gtag('config', 'UA-154715485-1');
</script>

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/sass/theme/whm_introjs.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/jquery.mCustomScrollbar.min.css">
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/classie.js"></script>
</head>
<?php if ( 'yes' == get_field('field_5df03c463c0f1') ): ?>
  <body onload="introJs().start();" class="cbp-spmenu-push page-scroll" >
<?php else: ?>
    <body class="cbp-spmenu-push cbp-spmenu-push" >
<?php endif; ?>


  <div id="showRightPush" class="" >
    <div >
    <div><span></span>
    <span></span>
    <span></span>
  </div></div>
    <div class="text-right w-100 fscreen" >
      <div id="fullscreen" >
      <a class="full-screen" data-intro="Select to enter or exit full screen mode" onclick="fullscreen()" id="fullscreen" href="#" ></a>
    </div>
      <div id="help"  >
        <a href="javascript:void(0)" data-intro="Select for information on how to navigate the GCBH website" onclick="introJs().start();" class="help-tip page-scroll" ></a>
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

<script src="<?php echo get_stylesheet_directory_uri();?>/js/menu.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/introjs.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/modernizr.custom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
