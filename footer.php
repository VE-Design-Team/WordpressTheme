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

</style>
<?php
$glossary_url = get_field('field_5c75d39e68af3', 'option');

if( $glossary_url ): ?>

<script>


  $(function(){
    $('.glossary-show').glossarizer({
      sourceURL: '<?php echo $glossary_url ?>',
      callback: function(){
        new ToolTip();
      }
    });
  });
  </script>

<?php endif; ?>

</body>

</html>
