//document push and pull
$(document).ready(function(){
	
	$('#showRightPush').click(function(){
		$(this).toggleClass('open');
	});
});
//sidebar itself push and pull
  var
    menuRight = document.getElementById( 'sidebar' ),
    showRightPush = document.getElementById( 'showRightPush' ),
    body = document.body;

  showRightPush.onclick = function() {
    classie.toggle( this, 'active' );
    classie.toggle( body, 'cbp-spmenu-push-toleft' );
    classie.toggle( menuRight, 'cbp-spmenu-open' );
  };

//scrollbar for menu

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
