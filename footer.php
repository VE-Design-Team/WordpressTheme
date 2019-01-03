<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
$the_theme = wp_get_theme();
?>
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
<?php wp_footer(); ?>
</body>
</html>