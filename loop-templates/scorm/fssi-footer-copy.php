  <!-------------- footer ------------------->

  <div class="footer container-fluid" id="footer">
    <div class="vcoss-rmit"><a class="rmit" href="#"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/fssi/img/vcoss_rmit.png"
          alt="lorem" height: "60px"></a></div>
    <div class="p copyright text-center align-middle">Copyright <i class="far fa-copyright"></i> 2018 Future Social
      Service Institute. All rights reserved.</div>
  </div>




  <script>
  // $(document).ready(function(){
//     $(".visibility").hide();
// });

  $("#show_hide").click(function() {
    $(".visibility").toggle('show');
  });





var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
    window.location.reload();
  } else if (elem.mozRequestFullScreen) {
    /* Firefox */
    elem.mozRequestFullScreen();
    window.location.reload();
  } else if (elem.webkitRequestFullscreen) {
    /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
   window.location.reload();
  } else if (elem.msRequestFullscreen) {
    /* IE/Edge */
    elem.msRequestFullscreen();
    window.location.reload();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  }
}

  </script>


</div><!--div id#fssi -->


<?php  get_template_part('footer');?>
