<?php get_template_part( 'header' ); ?>
<?php
if ( has_post_thumbnail() ) {
    $image = get_the_post_thumbnail_url(get_the_ID(),'full');
}
else {
    $image = get_bloginfo( 'stylesheet_directory' ) . '/cde/img/c4de/splash.jpg';
}
?>
<style>
html {
  background: url(<?php echo $image; ?>) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  display: grid;
  height: 100vh;
  margin: 0;
  place-items: center center;
}
body
{
    text-align: center;
    text-rendering: optimizeLegibility;
    background-color: rgba(0, 0, 0, 0);
}
</style>
<div id="splash-info">

  <div  id="banner-splash" class="" style="z-index:1;">
    <div id="ws" class="mb-5">
      <div class="whm-logo"></div>
    </div>
</div>
<div class="mt-5">
<?php if( get_field('field_5bdf9ea04ef39') ): ?>

  <?php if ( 'yes' == get_field('field_5df1c474d1e60') ): ?>
<div class=" ">

  <div class="float-left"><a class="btn btn-splash ripple-card" title="Start here" href="<?php the_field('field_5bdf9ede4ef3a'); ?>">Take the tour</a></div>
  <div class="float-right"><a class="btn btn-splash ripple-card" title="Start here" href="<?php the_field('field_5bdf9ea04ef39'); ?>">Start here</a></div>
</div>
  <?php else: ?>
    <form class="text-center" action="">
      <input class="form-control" type="text" name="firstname" value="User"><br>
      <input class="form-control" type="text" name="lastname" value="******"><br>
    </form>
  <div class="">  <a class="btn btn-splash ripple-card" title="Start here" href="<?php the_field('field_5bdf9ea04ef39'); ?>">Login</a></div>
  <?php endif; ?>

<?php endif; ?>
</div>

  <div class='d-inline-block' style=' margin-top:5rem; ' >
    <p class="small text-white">
      <?php
          $my_theme = wp_get_theme();
          echo "© Women's Health Victoria ".$my_theme->get( 'Version' ).", released ".date('F')." ".date('Y');
        ?>
  </p>

          <div class="whm-cc"></div>

    <!-- images of partner logos
    <img src="http://image.com" class="logo-partner">
    -->
  </div>
</div>
