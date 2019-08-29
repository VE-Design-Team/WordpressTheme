<head>
<!-- Our Custom CSS -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    	<script src="wp-content/themes/page-builder/js/modernizr.custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body class="cbp-spmenu-push">
<div id="showRightPush" class=""><span></span>
<span></span>
<span></span></div>

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
