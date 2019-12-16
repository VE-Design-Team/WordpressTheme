<head>
<!-- Our Custom CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/sass/theme/vwp_introjs.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/jquery.mCustomScrollbar.min.css">
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/classie.js"></script>
</head>

<body class="cbp-spmenu-push cbp-spmenu-push" >

<!--
<button type="button" id="restapi-btn">RESTAPI TEST</button>
<div id="restapi-container">

</div>
<br>
<div class="admin-quick-add">
  <h3>Modifying the JSON file</h3>
  <input type="number" id="title" placeholder="RotateX">
  <input type="number" id="content" placeholder="RotateY">

  <button id="quick-add-button">Create Post</button>
</div>
-->



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
      <!--<div class="sidebar"><?php get_template_part( 'loop-templates/scorm/vwp-scorm', 'nav' ); ?> </div> -->

      <div class="menu"><ul><a href="https://emedia.rmit.edu.au/bagwanhealth/index.php/scorm/intranet/">
     <img style="margin-top:40%;margin-left:30%;" src="<?php echo get_stylesheet_directory_uri();?>/vwp/img/home_icon.png" alt="home icon" height="42" width="42"></a>

    

  

  <?php
//get menu assigned to this page
 $menu = get_field('field_5bc317e313d41');
// and place in the page
  wp_nav_menu(array(
  'menu' => $menu,
'container_id' => 'cssmenu',
'walker' => new CSS_Menu_Maker_Walker()
));
?>

</div>
<!--<img style="margin-top:40%;margin-left:40%;" src="<?php echo get_stylesheet_directory_uri();?>/vwp/img/search_button.png" alt="Search icon" height="42" width="42">-->


    </div>
    <br>
    <br><br>
    <br>
    <br>
    <a href="index.html" onclick="" class="go-back">Return to the virtual hospital</a>
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

<!--<div class="bagwanfooter">
    <h5 style="margin-left:16%;color: #000054;"><u>Acknowledgement of Country</u></h5>
    <p style="margin-left:16%;color: #000054;">Bagwan Health acknowledges the people of the Woi wurrung and Boon wurrung language groups of the eastern Kulin
      Nation on whose unceded lands we conduct the business of the University. Bagwan Health respectfully acknowledges
      their Ancestors and Elders, past and present. Bagwan Health also acknowledges the Traditional Custodians and their
      Ancestors of the lands and waters across Australia where we conduct our business.</p>
</div>-->

<!-- content ----------------------------------->
<?php get_template_part( 'loop-templates/scorm/vwp', 'footer' ); ?>

<script src="<?php echo get_stylesheet_directory_uri();?>/js/menu.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/introjs.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/modernizr.custom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
