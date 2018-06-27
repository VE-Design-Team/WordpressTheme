<?php 
get_header();
?>
<style>
	html, body{
  height: 100%;
}
body { 
			background-image: url(<?php echo get_stylesheet_directory_uri();?>/img/home_background.jpg) ;
			background-position: center center;
			background-repeat:  no-repeat;
			background-attachment: fixed;
			background-size:  cover;
			background-color: #999;
  
}

div, body{
  margin: 0;
  padding: 0;

  
}
.wrapper {
  height: 100%; 
  width: 100%; 
}

.message {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%; 
  height:65%;
  bottom: 0; 
  display: block;
  position: absolute;
  background-color: rgba(0,0,0,0.6);
  color: #fff;
  padding: 0.5em;
}
.credit > a
{
	color: white;
	position: absolute;
	font-size: 10px;
	float: right;
	right: 5px;
	bottom: 5px;
}
hr
{
	color: white;
	border-top: 1px dashed #8c8b8b;
	border-bottom: 1px dashed #fff;
}

	</style>


<div class="wrapper">
  <div class="message">
  <p class="h1 text-center align-middle text-white pt-5"><?php echo get_bloginfo( 'name' ); ?></p>
  <p class="h2 text-center align-middle text-white pt-3"><?php echo get_bloginfo( 'description' ); ?></p>
<hr>
  
<!--<a href="https://vedesign.team">VE Design team</a>-->
<p class="h4 text-white text-center small">
For more information related to the content in this course, contact
<p class="text-center"> 
<?php 

if (have_rows('field_5aaa08f0cbf4d', 'option')):

  while (have_rows('field_5aaa08f0cbf4d', 'option')):

      the_row();

      
      echo the_sub_field('field_5aaa0948cbf4f') . ', ';
      echo the_sub_field('field_5aaa092bcbf4e') . ' : ';
      the_sub_field('field_5aaa09a5cbf50');
      echo '<br>';
  endwhile;

endif;
?>
<br>
<a class="btn btn-sm btn-outline-light" href="<?php echo esc_url( wp_login_url() ); ?>" alt="<?php esc_attr_e( 'Login', 'textdomain' ); ?>">
    <?php _e( 'Admin login', 'textdomain' );?>
</a>
</p>

<p class="text-center align-middle text-white pt-5">The rich content of this course was developed in partnership with the <a href="https://emedia.rmit.edu.au/oedvedesign/" target"_blank" class="text-white">VE Design team</a><br></p>

<p class="credit"><a href="https://www.flickr.com/photos/charlot17/6971678288/in/photolist-bC4F4N-a8HshS-S7ryvv-ZKQzzN-eMg9wC-akEGXm-9ms7yC-VVYp72-36hvWV-obN2uo-bU1yNg-S3QG5N-ZHQWsA-eM4KWz-YKq2g7-nyo4Zh-eMg7GW-9c6Fxt-ZMm1fL-7wAR9z-cP3r5f-xDgbW-dmFr4b-Xj2zTr-YKq2o1-QXkVLt-guvKfg-9pytrL-coRkEL-ZMkWJC-S7rzp4-bDn8WB-3xnLH-ggaWTT-dgNxe9-fhzUvm-ZMnn8q-9ms6zC-hDvDVs-eM4J9g-eMg7xm-SckHk6-CJ6G7b-dM2dze-VHnFM9-eM4JLc-VzsXhR-XfmW8S-dREL3-VMd3D4" target="_blank">Image credit:  Charlievdb</a></p>
  </div>
</div>
<?php get_footer(); ?>