<!-- row-->
</div><!-- #cde -->
 <script>
 ( function( $ ) {
 $( document ).ready(function() {
     //raises and lowers menu sub items
 $('#cssmenu li.has-sub>a').on('click', function(){
 		$(this).removeAttr('href');
 		var element = $(this).parent('li');
 		if (element.hasClass('open')) {
 			element.removeClass('open');
 			element.find('li').removeClass('open');
 			element.find('ul').slideUp();
 		}
 		else {
 			element.addClass('open');
 			element.children('ul').slideDown();
 			element.siblings('li').children('ul').slideUp();
 			element.siblings('li').removeClass('open');
 			element.siblings('li').find('li').removeClass('open');
 			element.siblings('li').find('ul').slideUp();
 		}
 	});

 	$('#cssmenu>ul>li.has-sub>a').append('<span class="holder"></span>');
  //ensure nav loads closed
  $('#reveal').addClass('navshow').removeClass('test2');
  //ensure the nav is always open for the current page
  $("li.menu-item" ).children('ul').css({ display: "block" });
  //$('li.active').closest('ul').addClass('open').css({ display: "block" })
 });
 } )( jQuery );
 </script>



 <script>
    $(document).ready(function(){
        $("#cssmenu>ul>li").parent().addClass("dropdown");
      //  $("#cssmenu>ul").addClass("dropdown-menu");
        $("#cssmenu>ul>li.has-sub>a").addClass("dropdown-toggle");
        $("ul.has-sub li a").removeClass("dropdown-toggle");
        $('.navbar .dropdown-toggle').append('<b class="caret"></b>');
        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');
    });
</script>

<script>
   //nave menu
   $(document).ready(function () {
       $('#sidebarCollapse').on('click', function () {
         $('#sidebar').toggleClass('active');
       });
   });
   //fullscreen
   //invokes browser's fullscreen mode
   function fullscreen() {
     var isInFullScreen = (document.fullscreenElement && document.fullscreenElement  !== null) ||
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
