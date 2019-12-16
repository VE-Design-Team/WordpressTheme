<head>
<!-- Our Custom CSS -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/sass/theme/whm_introjs.css">

    <script src="<?php echo get_stylesheet_directory_uri();?>/js/modernizr.custom.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/introjs.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.min.js"></script>
</head>
<body onload="introJs().start();" class="cbp-spmenu-push page-scroll" >
  <div id="showRightPush" class="" data-intro="quo inventore harum ex magni">
    <span></span>
    <span></span>
    <span></span>
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
    <header>
  <div class="container">
    <div>
      <a href="">TRY ME</a>
    </div>
  </div>
</header>



      <div class="container">
            <div class="row">
             </div>
            <div class="text-center">
                <div class="col-md-4" data-intro="quo inventore harum ex magni">
                    <span>

                    </span>
                    <h4>Content 1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4" data-intro="Minima maxime quam architecto quo">
                    <h4>Content 2</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4" data-intro="Lorem ipsum dolor sit amet">

                    <h4>Content 3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    <div class="fixed-bottom b-0 container">
      <?php get_template_part( 'loop-templates/scorm/whm', 'bottom_navigation' ); ?>
    </div>
  </div>

</body>

<script>
$(document).ready(function(){
	$('#showRightPush').click(function(){
		$(this).toggleClass('open');
	});
});
</script>

<script src="wp-content/themes/bagwan_health/js/classie.js">
</script>

<script>
var
  menuRight = document.getElementById( 'sidebar' ),
  showRightPush = document.getElementById( 'showRightPush' ),
  body = document.body;

showRightPush.onclick = function() {
  classie.toggle( this, 'active' );
  classie.toggle( body, 'cbp-spmenu-push-toleft' );
  classie.toggle( menuRight, 'cbp-spmenu-open' );
};
</script>
<!-- content ----------------------------------->
<?php get_template_part( 'loop-templates/scorm/whm', 'footer' ); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>


<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
