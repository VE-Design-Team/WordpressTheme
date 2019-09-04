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
<ul>
    <?php
    global $id;
    wp_list_pages( array(
        'title_li'    => '',
        'child_of'    => $id,
        //'show_date'   => 'modified',
        //'date_format' => $date_format
    ) );
    ?>
</ul>

<?php 
$variable = get_field('field_5b8cd3c52f308', 'option');
if ($variable  == 'fssi') { 
    
    echo "<h2>SCORM Content</h2><ul>";
    $args = array(


        'post_type' => 'scorm',
        'title_li'    => '',
        'child_of'    => $id,
       
    );
    wp_list_pages( $args ); 
    echo "</ul>";
}
elseif ($variable  == 'cde') {  
    echo "<h2>SCORM Content</h2><ul>";

    $args = array(
        'post_type' => 'scorm',
        'title_li'    => '',
        'child_of'    => $id,
       
    );
    wp_list_pages( $args ); 
    echo "</ul>";

}else{
    echo "No pages";
};
?>


