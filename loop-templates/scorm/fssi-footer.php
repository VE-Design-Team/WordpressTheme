<div id="footer" class="col-12 p-0 m-0">
  <div class="partner-logos"></div>
  <p clas="text-middle">Copyright <i class="fa fa-copyright"></i> 2018 Future Social Service Institute. All rights
    reserved.</p>


</div>
</div><!-- row-->

</div><!-- #fssi -->

<script>
  //nave menu
  $("button#navtoggle").click(function () {
    $('.visibility').toggleClass('navshow');
  });
  //fullscreen
  //invokes browser's fullscreen mode
  function toggleFullScreen(elem) {
    if (!document.mozFullScreen && !document.webkitFullScreen) {
      if (elem.mozRequestFullScreen) {
        elem.mozRequestFullScreen();
      } else {
        elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
      }
    } else {
      if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else {
        document.webkitCancelFullScreen();
      }
    }
  }

  //Transition to fullscreen on button click
  $("#fullscreen")[0].addEventListener(
    "click",
    function () {
      toggleFullScreen($("#fssi")[0]);
    },
    false
  );
</script>

<?php  get_template_part('footer');?>