<h1>Stats</h1>
<h2>Theme</h2>
<?php
$theme = wp_get_theme( );
// Theme name
echo "<b>Theme name:</b> ".$theme->name; 

// Theme title
echo "<br><b>Theme title:</b>".$theme->title;

// Theme version
echo "<br><b>Theme Version: </b>".$theme->version;

// Get the path to the template directory
echo "<br><b>Theme Directory: </b>".$theme->template_dir;

// Get the path to the stylesheet
echo "<br><b>Stylesheet directory: </b>".$theme->stylesheet_dir;

// Get the template directory name
echo "<br><b>raw location: </b>".$theme->template;

?>
<h2>Content</h2>
<b>Number of pages:</b>
<?php
$count_pages = wp_count_posts('page');
?>