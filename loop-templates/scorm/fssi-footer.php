
</div><!-- row-->


</div><!-- #fssi -->



<?php if ( has_post_thumbnail($post->ID) && get_field('field_5be47786ed504') == 'home-page'): ?>
  <!--

<div style="clear:both;"></div>
<div id="footer" class="col-12 p-0 m-0">
  <div class="partner-logos"></div>
  <p clas="text-middle">Copyright <i class="fa fa-copyright"></i> 2018 Future Social Service Institute. All rights
    reserved.</p>

</div>
-->
<?php else: {?>

<?php //previous next variables 
 $prevlink = the_field('field_5bdf9ede4ef3a');
 $nextlink = the_field('field_5bdf9ea04ef39');
 if ($prevlink == "" AND $nextlink == ""):
    {
        //no footer links;   
    }

else:{ 
      //get footer links
      ?>
  <div style="clear:both;"></div>
<div id="footer-page" class="p-0 m-0">
    <div id="next-prev" class="d-flex justify-content-center ">
        <?php if( get_field('field_5bdf9ede4ef3a') ): ?>
        <a title="Previous page" target="_self" href="<?php echo $prevlink; ?>" class="btn-prev">
        </a>
        <?php else: {
    echo "<div class='pn-helper'>Next</div> ";
};?>
        <?php endif; ?>
        <?php if( get_field('field_5bdf9ea04ef39') ): ?>
        <a title="Next page" target="_self" href="<?php echo $nextlink; ?>" class=" btn-next"></a>

        <?php else: {
    echo "<div class='pn-helper'>Prev</div>";
};?>
        <?php endif; ?>

    </div>
    <!--footer -->

    <?php } endif; ?>
</div>
  <?php }
endif;
?>









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
//remove scroll to fullscreen view
$("#fullscreen").click(function(){
  $("#content").toggleClass("scorm");
});
</script>

<?php  get_template_part('footer');?>
