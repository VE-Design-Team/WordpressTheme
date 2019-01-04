<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	<!-- ensure iframe links are opened in a new tab in the parent uless this is a scorm page builder -->
	<?php
	//CSS and js cache buster
	$my_theme = wp_get_theme();
	$ver = $my_theme->get( 'Version' );


$variable = get_field('field_5b8cd3c52f308', 'option');
if ($variable  == 'iframe') {
	//open all new links outside the iframe
	$basefiles = get_stylesheet_directory_uri();
	echo '<base target="_blank">';
	echo '<!-- Iframe -->';
	echo '<link rel="stylesheet" id="understrap-styles-css" href="'.get_stylesheet_directory_uri() . '/css/theme.min.css?ver='.$ver.'"type="text/css" media="">';

}
elseif ($variable  == 'fssi') { 
	//open all new links outside the iframe
	$basefiles = get_stylesheet_directory_uri()."/fssi";
	echo '<base target="_blank">';
	echo '<!-- FSSI -->';
	echo '<link rel="stylesheet" id="understrap-styles-css" href="'.get_stylesheet_directory_uri() . '/css/fssi.css'.'"type="text/css" media="">';


}
elseif ($variable  == 'cde') { 
	//open all new links outside the iframe
	$basefiles = get_stylesheet_directory_uri()."/cde";
	echo '<base target="_blank">';
	echo '<!-- CDE -->';
	echo '<link rel="stylesheet" id="understrap-styles-css" href="'.get_stylesheet_directory_uri() . '/css/cde.css'.'"type="text/css" media="">';


}
elseif ($variable  == 'embed') { 
	//open all new links outside the iframe
	$basefiles = get_stylesheet_directory_uri()."/embed";
	echo '<base target="_blank">';
	echo '<!-- embed -->';
	echo '<link rel="stylesheet" id="understrap-styles-css" href="'.get_stylesheet_directory_uri() . '/css/embed.css'.'"type="text/css" media="">';


}
else{
	echo '<!-- No setting -->';
		$basefiles = get_stylesheet_directory_uri();
		echo '<link rel="stylesheet" id="understrap-styles-css" href="'.get_stylesheet_directory_uri() . '/css/theme.min.css'.'"type="text/css" media="">';

};
?>
	
	<?php wp_head(); ?>
	<?php 
$variable = get_field('field_5b8cd3c52f308', 'option');
if ($variable  == 'iframe') {
    $basefiles = get_stylesheet_directory_uri();
	echo '<script src="'.$basefiles.'/js/jquery.min.js"></script>';
	echo '<script src="'.get_stylesheet_directory_uri() . '/js/theme.min.js"></script>';
}
elseif ($variable  == 'fssi') { 
	$basefiles = get_stylesheet_directory_uri()."/fssi";
		echo '<script src="'.$basefiles.'/js/jquery.min.js"></script>';
	echo '<script src="'.get_stylesheet_directory_uri() . '/fssi/js/theme.min.js"></script>';

}
elseif ($variable  == 'cde') { 
    $basefiles = get_stylesheet_directory_uri()."/cde";
	echo '<script src="'.$basefiles.'/js/jquery.min.js"></script>';
	echo '<script src="'.get_stylesheet_directory_uri() . '/cde/js/theme.min.js"></script>';

}
elseif ($variable  == 'embed') { 
    $basefiles = get_stylesheet_directory_uri()."/embed";
	echo '<script src="'.$basefiles.'/js/jquery.min.js"></script>';
	echo '<script src="'.get_stylesheet_directory_uri() . '/embed/js/theme.min.js"></script>';

}
else{
    echo '<!-- No setting -->';
    $basefiles = get_stylesheet_directory_uri();
	echo '<script src="'.$basefiles.'/js/jquery.min.js"></script>';
	echo '<script src="'.get_stylesheet_directory_uri() . '/js/theme.min.js"></script>';
};
?>
	<!--
 __      ________   _____            _               _______                   
 \ \    / /  ____| |  __ \          (_)             |__   __|                  
  \ \  / /| |__    | |  | | ___  ___ _  __ _ _ __      | | ___  __ _ _ __ ___  
   \ \/ / |  __|   | |  | |/ _ \/ __| |/ _` | '_ \     | |/ _ \/ _` | '_ ` _ \ 
    \  /  | |____  | |__| |  __/\__ \ | (_| | | | |    | |  __/ (_| | | | | | |
     \/   |______| |_____/ \___||___/_|\__, |_| |_|    |_|\___|\__,_|_| |_| |_|
                                        __/ |                                  
                                       |___/                                   
This custom content was generated by a custom Wordpress theme built by the VE Design team - https://emedia.rmit.edu.au/oedvedesign/ 								   
-->
	<?php if( get_field('field_5b18789895a17', 'option') == 'tag_manager' ): ?>
	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', '<?php the_field('
			field_5b1879dde566f ', '
			option '); ?>');
	</script>
	<!-- End Google Tag Manager -->
	<?php endif; ?>
	<?php if( get_field('field_5b18789895a17', 'option') == 'analytics' ): ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php the_field('field_5b1879dde566f', 'option'); ?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', '<?php the_field('
			field_5b1879dde566f ', '
			option '); ?>');
	</script>
	<?php endif; ?>

</head>

<body <?php body_class(); ?>>
	<?php if( get_field('field_5b18789895a17', 'option') == 'tag_manager' ): ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php the_field('field_5b1879dde566f', 'option'); ?>"
		 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="hfeed site" id="page">
		<?php endif; ?>