<?php
// this function outputs Iframe embed code information on relvant pages
function iframe_admin_notice()
{
    global $pagenow;
    if ($pagenow == 'post.php') {
        $iframe_title = get_field("field_5a2604a30cdd2");
        echo '
         <div class="notice notice-warning is-dismissible">
                      <h2>Embed this page in Canvas by pasting this code <span onclick="copyClipboard()" title="Click here to copy to clipboard" class="dashicons dashicons-paperclip" style="cursor: pointer; color: #0073aa;"></span></h2>  <div id="divClipboard">


&lt;iframe src="' . get_home_url() . '/?p=' . get_the_ID() . '" title="' . $iframe_title . '" style="border:0px #ffffff none;" id="C3319iframe"   width="1200" height="400" name="Richcontent" scrolling="no" frameborder="0" onload="resizeIframe(this)" allowfullscreen="allowfullscreen" onload="iFrameResize()" &gt;&lt;/iframe&gt;
                  </div>      </div>
         ';
    }
}
add_action('admin_notices', 'iframe_admin_notice');
