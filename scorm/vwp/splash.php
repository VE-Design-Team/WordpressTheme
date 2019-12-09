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
    padding: 0 2rem 2rem 2rem;
    text-align: center;
    text-rendering: optimizeLegibility;
    border-radius: 0.5rem;
    max-width: 70%;
}
h1
{

}
.heading-underline{
    height: 3px;
    width: 100%;
    background-color: #00DCB4;
    margin-bottom: 2rem;
}
.copyright
{

}
</style>
<div id="splash-info">
<h1 class="h3">
<?php
   echo get_the_title( $post->post_parent );
?>
</h1>
<h2 class="h1"><?php echo get_the_title(); ?></h2>
<div class="heading-underline" style=""></div>
<?php if( get_field('field_5bdf9ea04ef39') ): ?>
<a class="btn btn-splash" title="Start here" href="<?php the_field('field_5bdf9ea04ef39'); ?>">Start here</a>
<br>
<br>
<?php endif; ?>
<p class="small"><?php
 $my_theme = wp_get_theme();
    echo "© C4DE & RMIT University<br>V".$my_theme->get( 'Version' ).", released ".date('F')." ".date('Y')."</div>";


?></p>
<!-- images of partner logos
<img src="http://image.com" class="logo-partner">
-->
</div>
<?php get_template_part( 'footer' ); ?>
