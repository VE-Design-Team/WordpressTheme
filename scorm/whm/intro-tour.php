<head>
<!-- Our Custom CSS -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/wordpress481/wp-content/themes/page-builder/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/wordpress481/wp-content/themes/page-builder/sass/theme/whm_introjs.css">

    <script src="/wordpress481/wp-content/themes/page-builder/js/modernizr.custom.js"></script>
    <script src="/wordpress481/wp-content/themes/page-builder/js/introjs.js"></script>
    <script src="/wordpress481/wp-content/themes/page-builder/js/jquery.min.js"></script>
</head>
<body onload="introJs().start();" class="cbp-spmenu-push page-scroll" >
  <div id="showRightPush" class="" data-intro="Select to close the menu.">
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
      <a class="btn border-0 rounded-0 ripple-card"  data-intro="Select to download written transcripts of videos and interactivities." href="">DOWNLOAD TRANSCRIPT</a>
    </div>
  </div>
</header>
      <div class="container mt-5 mb-5">
            <div class="row">
             </div>
            <div class="text-center">
                <div class="col-md-4 material-card quick_link_right p-4" data-intro="quo inventore harum ex magni">
                    <span>

                    </span>
                    <h4>Content 1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4 material-card quick_link_right p-4" data-intro="Minima maxime quam architecto quo">
                    <h4>Content 2</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4 material-card quick_link_right p-4" data-intro="Lorem ipsum dolor sit amet">

                    <h4>Content 3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
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

<script src="wp-content/themes/page-builder/js/classie.js">
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


<script src="/wordpress481/wp-content/themes/page-builder/js/jquery.mCustomScrollbar.concat.min.js"></script>
