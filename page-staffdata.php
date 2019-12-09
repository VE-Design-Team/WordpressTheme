<?php
/* template name: Staffdata */
?>

<style>
    .staff_container {
        display: flex;
        flex-direction: row;    
        flex-wrap: wrap;
    }
    .staff_card {
        width: 220px;
        min-width: 220px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06), 0 1px 2px rgba(0, 0, 0, 0.24);
        margin: 10px;
    }
    .staff_title {
        text-align: center;
        background-color: #000053;
        color: #FFF;
        padding: 10px;
        font-weight: bold;
    }
    .staff_info {
        height: 80px;
        padding: 5px;
    }
    .staff_image img {
        border-radius: 100px;
        width: 70px;
    }
    .staff_image {
        float: left;
        width: 30%;
    }
    .staff_name_container {
        padding-top: 15px;
        float: right;
        width: 60%;
    }
    .staff_name_label {
        color: #000053;
        font-size: 22px;
    }
    .staff_name {
    }
</style>




<!-- New code for the template -->

<head>
<!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/sass/theme/vwp_introjs.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/jquery.mCustomScrollbar.min.css">
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

      <div class="menu"><ul>
      <img style="margin-top:40%;margin-left:30%;" src="<?php echo get_stylesheet_directory_uri();?>/vwp/img/home_icon.png" alt="home icon" height="42" width="42">

      <div style="height:200px;"></div>
<ul class="bagwan-nav" id="menu-item-108"><a><span style="color:white;">Our community</span></a></ul>
<br>
<ul class="bagwan-nav" id="menu-item-2"><a><span style="color:white;">Documents</span></a></ul>
<br>
<ul class="bagwan-nav" id="menu-item-2"><a><span style="color:white;">Emergencies</span></a></ul>
<br>
<ul class="bagwan-nav" id="menu-item-2"><a><span style="color:white;">Departments</span></a></ul>
<br>
<ul class="bagwan-nav" id="menu-item-2"><a><span style="color:white;">On call</span></a></ul>

</ul></div>
<img style="margin-top:40%;margin-left:40%;" src="<?php echo get_stylesheet_directory_uri();?>/vwp/img/search_button.png" alt="home icon" height="42" width="42">


    </div>
    <br>
    <br><br>
    <br>
    <br>
    <a href="#" onclick="#" class="go-back">Return to the virtual hospital</a>
  </nav>

  <div id="content" class="cbp-spmenu-push-toleft">
     <?php get_template_part( 'loop-templates/scorm/vwp', 'header' ); ?>
    <div class="container">
      
<!-- Staff card displayed here -->

<?php if( have_rows('staff_profile') ): ?>
    <div class="staff_container">    
        <?php while ( have_rows('staff_profile') ) : the_row(); ?>
            <div class="staff_card">
                <div class="staff_title">
                    <?php the_sub_field('staff_title');?>
                </div>
                <div class="staff_info">
                    <?php $image = get_sub_field('staff_img'); ?>
                    <?php if( !empty($image) ): ?>
                        <div class="staff_image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>" class="card-img-top" />
                        </div>
                    <?php endif; ?>
                    <div class="staff_name_container">
                        <div class="staff_name_label">Name</div>
                        <div class="staff_name">
                            <?php the_sub_field('staff_name');?>
                        </div>
                    </div>    
                </div>
            </div>
        <?php endwhile; ?>    
    </div>
<?php endif; ?>
                        
          
    </div>
    
  </div>


</body>


<footer>
<div class="bagwanfooter">
    <h5 style="margin-left:16%;color: #000054;"><u>Acknowledgement of Country</u></h5>
    <p style="margin-left:16%;color: #000054;">Bagwan Health acknowledges the people of the Woi wurrung and Boon wurrung language groups of the eastern Kulin
      Nation on whose unceded lands we conduct the business of the University. Bagwan Health respectfully acknowledges
      their Ancestors and Elders, past and present. Bagwan Health also acknowledges the Traditional Custodians and their
      Ancestors of the lands and waters across Australia where we conduct our business.</p>
</div>
</footer>

<!-- content ----------------------------------->
<?php get_template_part( 'loop-templates/scorm/vwp', 'footer' ); ?>

<script src="<?php echo get_stylesheet_directory_uri();?>/js/menu.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/introjs.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/modernizr.custom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>









