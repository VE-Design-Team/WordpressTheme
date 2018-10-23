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

(function($) {
	
	/*
	* We need to turn it into a function.
	* To apply the changes both on document ready and when we resize the browser.
	*/
	
	function mediaSize() { 
		/* Set the matchMedia */
		if (window.matchMedia('(min-width: 1200px)').matches) {
		/* Changes when we reach the min-width  */
	$('.visibility').css('display', 'block');
			
		} 
	};
	
	/* Call the function */
  mediaSize();
  /* Attach the function to the resize event listener */
	window.addEventListener('resize', mediaSize, false);  
	
})(jQuery);
// function myFunction() {
//     var x = document.getElementById("#visibility");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }
// }

// accordions
// var accordions = document.getElementsByClassName("accordion");

// for (var i = 0; i < accordions.length; i++) {
//   accordions[i].onclick = function() {
//     this.classList.toggle("is-open");

//     var content = this.nextElementSibling;
//     if (content.style.maxHeight) {
//       // accordion is currently open, so close it
//       content.style.maxHeight = null;
//     } else {
//       // accordion is currently closed, so open it
//       content.style.maxHeight = content.scrollHeight + "px";
//     }
//   };
// }

// Close the dropdown if the user clicks outside of it
// function uzcho_acc(xid){
//    var aC = document.getElementsByClassName("accordion");
//    var i;
//       for(i = 0; i < aC.length; i++){
//          var OaC = aC[i];
//             if(aC[i] != document.getElementById("panel-" + xid)){
//                OaC.classList.remove("show_Content")
//             }
//       }
//    document.getElementById("panel-" + xid).classList.toggle("show_Content")
// }


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
// var accordions = document.getElementsByClassName("accordion");

// for (var i = 0; i < accordions.length; i++) {
//   accordions[i].onclick = function() {
//     this.classList.toggle("is-open");

//     var content = this.nextElementSibling;
//     if (content.style.maxHeight) {
//       // accordion is currently open, so close it
//       content.style.maxHeight = null;
//     } else {
//       // accordion is currently closed, so open it
//       content.style.maxHeight = content.scrollHeight + "px";
//     }
//   };
// }

  </script>




</body>

</html>

<?php // get_template_part('footer');?>
