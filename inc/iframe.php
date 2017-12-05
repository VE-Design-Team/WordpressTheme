<?php
// this function outputs Iframe embed code information on relvant pages



function iframe_admin_notice(){
    global $pagenow;
    if ( $pagenow == 'post.php' || 'page.php' ) {
    	$iframe_title = get_field( "field_5a2604a30cdd2" );
         echo '
         <div class="notice notice-warning is-dismissible">
                      <h2>Embed this page in canvas by pasting this code</h2>
&lt;iframe src="'.get_home_url().'/?p='.get_the_ID().'" title="'.$iframe_title.'" style="border:0px #ffffff none;" name="Richcontent" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" width="800px" onload="resizeIframe(this)"  allowfullscreen&gt;&lt;/iframe&gt;
                  </div>

         ';
    }
}
add_action('admin_notices', 'iframe_admin_notice');
