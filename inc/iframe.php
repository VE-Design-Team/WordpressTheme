<?php
function general_admin_notice(){
    global $pagenow;
    if ( $pagenow == 'post.php' ) {
         echo '
         <div class="notice notice-warning is-dismissible">
                      <h2>Embed this page in canvas by pasting this code</h2>
&lt;iframe src="'.get_home_url().'/?p='.get_the_ID().'" style="border:0px #ffffff none;" name="Richcontent" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="600px" width="800px" allowfullscreen&gt;&lt;/iframe&gt;
                  </div>

         ';
    }
}
add_action('admin_notices', 'general_admin_notice');
