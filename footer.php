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
<?php wp_footer(); ?>
<?php
//turn on glossary
$glossary = get_field('field_5c748dc886533', 'option');
if ($glossary === "glossary") {
    echo '<script src="'.get_stylesheet_directory_uri() . '/js/glossary-tooltip.js"></script>';
    echo '<script src="'.get_stylesheet_directory_uri() . '/js/jquery.glossarize.js"></script>';
} elseif ($glossary === "disabled") {
	// no loading of glossary
};
?>
<style>

[data-title] {
  position: relative;
  cursor: help;
}

[data-title]:hover::before {
  content: attr(data-title);
  position: absolute;
  bottom: 1.5rem;
  display: inline-block;
  padding: 1rem;
  border-radius: 0.5rem;
  background: rgba(0,0,0,0.8);
  color: #fff;
  font-size: 12px;
  font-family: sans-serif;
  white-space: nowrap;
  z-index: 2000;
}
[data-title]:hover::after {

}
</style>
<script>
  $(function(){
    $('.entry-content').glossarizer({
      sourceURL: '<?php echo get_stylesheet_directory_uri();?>/scorm/glossary.json',
      callback: function(){
        new ToolTip();
      }
    });
  });
  </script>
</body>

</html>

