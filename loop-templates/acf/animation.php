<figure id="lottie" style="width:100%;height:inherit"></figure>
  <script src='<?php echo get_stylesheet_directory_uri(); ?>/js/bodymovin.js'></script>
   <script>
   var animData = {
        wrapper: document.getElementById('lottie'),
        animType: 'svg',
        loop: <?php the_field('field_5b1f326f775ae');?>,
        autoplay: true,
        path: '<?php the_field('field_5b1f1f55c2402');?>'
    };
    var anim = bodymovin.loadAnimation(animData);
    bodymovin.setSubframeRendering(true);
</script>

