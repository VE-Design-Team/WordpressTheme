<head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/jquery.mCustomScrollbar.min.css">
  <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/js/classie.js"></script>
  <style>

  </style>
</head>
<body>
<input type="checkbox" class="main-nav-check" id="main-nav-check" />
<nav class="main-nav" id="main-nav">
  <div>
    <!--<div class="sidebar"><?php get_template_part( 'loop-templates/scorm/vwp-scorm', 'nav' ); ?> </div> -->

    <div class="menu"><ul><a href="https://emedia.rmit.edu.au/bagwanhealth/scorm/intranet/">
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
</nav>																		<div class="page-wrap">										<header>
<label for="main-nav-check" class="right-menu">
				  ☰
</label>
</header>
<div class="content">
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
