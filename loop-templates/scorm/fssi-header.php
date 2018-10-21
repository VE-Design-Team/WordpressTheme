<?php  //get_template_part('header');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>FSSI-SCORM-page-3-responsive-new</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
    crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

  <style>
    :root {
      font-size: 16px;
    }

    @font-face {
      font-family: "Trade Gothic LT Std";
      src: url("<?php echo get_stylesheet_directory_uri(); ?>/fssi/fonts/TradeGothicLTStd-Cn18.woff2") format("woff2"), url("<?php echo get_stylesheet_directory_uri(); ?>/fssi/fonts/TradeGothicLTStd-Cn18.woff") format("woff");
      font-weight: 500;
      font-style: normal;
    }

    @font-face {
      font-family: "Trade Gothic LT Pro Cn";
      src: url("<?php echo get_stylesheet_directory_uri(); ?>/fssi/fonts/TradeGothicLTPro-BdCn20.woff2") format("woff2"), url("<?php echo get_stylesheet_directory_uri(); ?>/fssi/fonts/TradeGothicLTPro-BdCn20.woff") format("woff");
      font-weight: bold;
      font-style: normal;
    }

    @font-face {
      font-family: "Trade Gothic LT Std";
      src: url("<?php echo get_stylesheet_directory_uri(); ?>/fssi/fonts/TradeGothicLTStd-Light.woff2") format("woff2"), url("TradeGothicLTStd-Light.woff") format("woff");
      font-weight: 300;
      font-style: normal;
    }

    body {
      font-family: "Trade Gothic LT Std";
      font-weight: 300;
      font-style: normal;
    }

    .thin {
      font-family: "Trade Gothic LT Std";
      font-weight: 500;
      font-style: normal;
      font-size: 0.9rem;
    }

    @media (max-width: 820px) {
      .thin {
        font-size: .8rem;
      }
    }

    .nav-list {
      font-family: "Trade Gothic LT Std";
      font-weight: 500;
      font-style: normal;
      font-size: 0.8rem;
    }

    @media (max-width: 820px) {
      .nav-list {
        font-size: .6rem;
      }
    }

    .thick {
      font-family: "Trade Gothic LT Pro Cn";
      font-weight: bold;
      font-style: normal;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h5,
    h6 {
      font-family: "Trade Gothic LT Pro Cn";
      font-weight: bold;
      font-style: normal;
    }

    p {
      font-family: "Arial";
      font-weight: regular;
      font-style: normal;
      font-size: 1rem;
    }

    .header {
      height: 4rem;
    }

    header .headingbar {
      background: #fff;
      height: 3.8rem;
      width: 100%;
      display: none;
    }

    header .header-image {
      background: url("<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/nav_header_bg.png") no-repeat;
      background-size: 100%;
      height: 3.6rem;
    }

    header .brand {
      width: 10rem;
      height: 3.8rem;
      background: #fff;
      display: inline-block;
    }

    header .module {
      height: 2rem;
      background: white;
      float: right;
      display: inline-block;
      padding: 0rem .8rem;
      text-transform: uppercase;
      color: #055918;
      margin-top: .8rem;
      font-family: "Trade Gothic LT Pro Cn";
      font-weight: bold;
      font-style: normal;
      font-size: 1.4rem;
      margin-right: .8rem;
    }

 /*
@media (min-width: 1200px) {
  display: block;
}
*/
    header .menubar {
      height: 3rem;
      background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/canvas_banner.png');
      color: white;
      display: flex;
    }

    header .brand-menubar {
      height: 3rem;
      background: white;
      width: 8rem;
      display: flex;
      float: left;
    }

    ol.breadcrumb {
      background-color: inherit;
      padding: 0;
      margin: 1rem 0rem 0rem 1.5rem;
      margin-left: 1.5rem;
      color: white;
    }

    ol.breadcrumb a {
      color: #fff;
    }

    .breadcrumb-item+.breadcrumb-item::before {
      font-family: "fontAwesome";
      content: "\f0da" !important;
      color: #fff;
    }

    .fullscreen {
      float: right;
      position: absolute;
      right: 0;
      width: 100px;
      display: inline-block;
      padding-top: 10px;
    }

    .exit-course {
      display: inline-block;
      background-size: cover;
      color: white;
      font-size: 2rem;
      text-align: center;
      border: none;
      cursor: pointer;
      height: 2.875rem;
      width: 3.875rem;
      float: right;
      right: 0;
      margin-top: 0px;
      position: fixed;
    }

    .fullscreenbtn {
      display: inline-block;
      background-size: cover;
      color: white;
      font-size: 1.2rem;
      text-align: center;
      border: none;
      cursor: pointer;
      border-radius: 2px;
      height: 1.875rem;
      width: 1.875rem;
    }

    #show_hide {
      background-size: cover;
      display: inline-block;
      color: white;
      border-radius: 2px;
      font-size: 1.2rem;
      border: none;
      cursor: pointer;
      height: 1.875rem;
      width: 1.875rem;
      text-align: center;
    }

    .show {
      display: none;
    }



    @media only screen and (max-width: 1200px) {
      .show {
        display: block !important;
      }
    }

    #footer {
      background: #f5f6f5;
      height: 3rem;
      position: fixed;
      bottom: 0;
      flex-shrink: 0;
      z-index: 2000;
    }

    #footer .copyright {
      text-align: center;
      padding: 1rem;
      font-size: 0.688rem;
      font-family: Verdana, "Segoe UI", sans-serif, "Open Sans";
    }

    #footer .logos {
      position: absolute;
      right: 0;
      height: 100%;
    }

    #footer .logos .rmit {
      background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/vcoss_rmit.png");
      display: inline-block;
      padding-top: 0px;
      height: 3.125rem;
      width: 8.5rem;
      float: right;
      right: 0;
      background-color: white;
    }

    #accordion-move {
      width: 240px;
      z-index: 1000;
      position: absolute;
      right: 0;
      background-color: #111;
      padding: 0;
    }

    #accordion-move .show {
      display: block;
    }

    #accordion-move .hide {
      display: hide;
    }

    @media (min-width: 1200px) {
      #accordion-move {
        left: 0;
        display: visible;
        min-height: 100%;
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 757px) {
      #accordion-move {
        position: fixed;
      }
    }

    #accordion-move .visibility {
      display: none;
    }

    @media only screen and (min-width: 1200px) {
      #accordion-move .visibility {
        padding-left: 0px;
        display: block;
      }
    }

    .accordion {
      width: 240px;
    }

    .accordion .card-header {
      background-color: #111;
      border-bottom: 1px solid #055918;
    }

    .accordion .card-header .card-title {
      color: #fff;
      padding-left: 20px;
    }

    .accordion .card-header:after {
      font-family: 'FontAwesome';
      content: "\f056";
      float: left;
      color: #fff;
    }

    .accordion .card-header.collapsed:after {
      /* symbol for "collapsed" panels */
      content: "\f055";
      color: #055918;
    }

    .accordion-footer {
      color: #055918;
      padding: 20px 120px;
    }

    .card,
    .card-header,
    .card-body {
      border: 0;
      width: 240px;
      padding-top: 0;
      padding-bottom: 0;
      background-color: #111;
      margin: 0 !important;
      border-bottom: 0.5px solid #055918;
    }

    .card-body ul {
      list-style: none;
      position: relative;
      padding: 0;
    }

    .card-body ul:before {
      content: '';
      margin-left: 25px;
      position: absolute;
      top: 0;
      bottom: 0px;
      left: 0;
      width: 1px;
      height: 100%;
      background: #055918;
    }

    .card-body ul li {
      padding: 10px 20px;
      margin-left: 25px;
      color: #fff;
    }

    .card-body ul li.selected span {
      font-size: 7px;
      left: -3px;
      color: #fff;
    }

    .card-body ul li span {
      color: #055918;
      position: absolute;
      left: -2.5px;
      margin-left: 25px;
      font-size: 6px;
      background-color: #111;
    }

    .card {
      box-shadow: none;
    }

    .card-header {
      border-radius: 0;
      width: 240px;
      background-color: #111;
      border-bottom: 0.5px solid #055918;
      outline: none;
      text-align: left;
      padding: 15px 10px;
      font-family: "Trade Gothic LT Std";
      color: #fff;
      cursor: pointer;
      transition: background-color 0.2s linear;
      margin: 0px;
    }

    .card-title a {
      text-decoration: none;
      padding: 1em 0;
      font-weight: 300;
      font-style: normal;
      font-size: rem;
    }

    .card-title :hover:after,
    .card-title :after {
      content: "\f056";
      color: #fff;
      font-family: "fontawesome";
      font-size: 14px;
      float: left;
      margin-right: 30px;
    }

    .card .card-header:hover:after {
      content: "\f056";
      color: #fff;
    }

    .card-header:not(.collapsed) {
      background: #055918;
    }

    .card-header:hover {
      background-color: #055918;
    }

    .accordion_footer {
      height: 83px;
      width: 240px;
      background-color: #111;
    }

    #header-accordion {
      height: 75px;
      background-color: #fff;
      background-size: 100%;
      width: 240px;
      border-top: 2px solid white;
    }

    .image {
      height: 250px;
      background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/course_welcome_banner.png");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    #banner-image {
      padding-left: 0px;
      position: absolute;
      z-index: auto;
      margin: 0 auto;
      float: right;
      display: inline-block;
      width: 100%;
      padding-right: 0px;
    }

    @media (min-width: 1200px) {
      #banner-image {
        padding-left: 240px;
      }
    }

    #green_image {
      background-color: #055918;
      opacity: 0.8;
      position: absolute;
      z-index: 0;
      margin-top: -14vh;
      height: 8vh;
      width: 40vh;
      float: right;
      right: 0;
    }

    @media only screen and (max-width: 600px) {
      #green_image {
        margin-top: -10vh;
        width: 30vh;
      }
    }

    @media only screen and (max-width: 414px) {
      #green_image {
        margin-top: -7vh;
        width: 30vh;
        height: 6vh;
      }

      #green_image h2 {
        font-size: 2rem;
      }

      #green_image .banner-tag {
        color: #fff;
        text-align: center;
        margin-top: .7vh;
      }
    }

    .banner-tag {
      color: #fff;
      text-align: center;
      margin-top: 1.5vh;
    }

    @media only screen and (max-width: 225px) {
      #green_image {
        margin-top: -5vh;
        width: 30vh;
        height: 6vh;
      }

      #green_image h2 {
        font-size: 2rem;
      }

      #green_image .banner-tag {
        color: #fff;
        text-align: center;
        margin-top: .7vh;
      }
    }

    #header-accordion {
      height: auto;
      background-color: #055918;
      background-size: 100%;
      width: 240px;
    }

    .icons {
      display: inline-block;
      float: center;
      height: 70px;
      width: 90px;
      cursor: pointer;
      font-family: "Trade Gothic LT Std";
      font-weight: 500;
      font-style: normal;
      font-size: 0.9rem;
      margin-right: 30px;
    }

    #assesment {
      padding-left: 0px;
      position: absolute;
      z-index: 0;
      margin: 0 auto;
      float: right;
      display: inline-block;
      width: 100%;
      padding-right: 0px;
    }

    @media (min-width: 1200px) {
      #assesment {
        padding-left: 240px;
      }
    }
  </style>

</head>

<body>

  <header>
    <div class="headingbar d-none d-xl-block">
      <div class="header-image">
        <div class="brand">
          <img class="img-responsive" 
          src="<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/FSSI_LOGOwhite_space.png"
            alt="lorem" height: "56.7px">
        </div>
        <!--       brand -->


    <?php 
     
     $current = $post->ID;
      
     $parent = $post->post_parent;
      
     $grandparent_get = get_post($parent);
      
     $grandparent = $grandparent_get->post_parent;
      
     ?>
      
 

        <div class="module"><span>     <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>

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
          <li class="breadcrumb-item"><a class="thin" href="#">COURSE<!-- Module --></a></li>

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