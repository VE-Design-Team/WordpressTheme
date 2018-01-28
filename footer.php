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
<?php if (get_field('field_5a13c5a7ec802') == 'Tooltip Textstrings'): ?>
  <!-- fix this tooltip conflict -->
<?php else: {} ?>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tooltip.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.glossarize.js"></script>
<?php endif;?>

  <script>
  $(function(){
    $('.glossarize').glossarizer({
      <?php if (WP_DEBUG === true) {
    echo "//dev environment
    ";
    echo "sourceURL: '".get_site_url()."/glossarydata/',";
} else {
    echo "//live environment
   ";
    echo "sourceURL: '".get_site_url()."/index.php/glossarydata/',";
} ?>
      //sourceURL: '<?php echo get_stylesheet_directory_uri(); ?>/glossary.json',
      callback: function(){
        new tooltip();
      }
    });
  });
  </script>
</body>
</html>