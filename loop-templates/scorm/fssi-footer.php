
</div><!-- row-->


</div><!-- #fssi -->



<?php if ( has_post_thumbnail($post->ID) ): ?>
  <!--

<div style="clear:both;"></div>
<div id="footer" class="col-12 p-0 m-0">
  <div class="partner-logos"></div>
  <p clas="text-middle">Copyright <i class="fa fa-copyright"></i> 2018 Future Social Service Institute. All rights
    reserved.</p>

</div>
-->
<?php else: {?>
  <div style="clear:both;"></div>
<div id="footer-page" class="col-12 p-0 m-0">
<div id="next-prev">
<?php if( get_field('field_5bdf9ede4ef3a') ): ?>
<a title="Previous page" href="<?php the_field('field_5bdf9ede4ef3a'); ?>"  class="col-1 btn-prev float-left">
</a>

<?php endif; ?>
<?php if( get_field('field_5bdf9ea04ef39') ): ?>
<a title="Next page" href="<?php the_field('field_5bdf9ea04ef39'); ?>"  class="col-1 btn-next float-right"></a>
<?php endif; ?>
</div>
</div><!--footer -->

<?php } endif; ?>


<script>
  //nave menu
  $("button#navtoggle").click(function () {
    $('.visibility').toggleClass('navshow');
  });
  //fullscreen
  //invokes browser's fullscreen mode
  function fullscreen() {
    var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
        (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
        (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
        (document.msFullscreenElement && document.msFullscreenElement !== null);

    var docElm = document.documentElement;
    if (!isInFullScreen) {
        if (docElm.requestFullscreen) {
            docElm.requestFullscreen();
        } else if (docElm.mozRequestFullScreen) {
            docElm.mozRequestFullScreen();
        } else if (docElm.webkitRequestFullScreen) {
            docElm.webkitRequestFullScreen();
        } else if (docElm.msRequestFullscreen) {
            docElm.msRequestFullscreen();
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    }
}
</script>

<?php  get_template_part('footer');?>
