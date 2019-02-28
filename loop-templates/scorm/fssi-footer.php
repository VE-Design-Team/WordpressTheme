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
    $("#fullscreen").click(function () {
        $("#content").toggleClass("scorm");
    });
</script>

<?php  get_template_part('footer');?>
<?php edit_post_link('Edit', '<div title="Only logged in administrators see this">', '</div>');?>
<style>
#fssi
{
    height: 100vh;
    <!--[if IE]>
	width: 100vh;
    <![endif]-->
}
.single-scorm
{
    border: none;

}
#fssi  .scorm
{
    height: inherit;
    overflow-y: hidden;
}
#fssi #nav #reveal {
    height: 100%;
     overflow-y: hidden; */
}
</style>    
