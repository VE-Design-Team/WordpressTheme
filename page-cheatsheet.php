<?php
get_header();
?>
<style>
pre{

	border: 1px solid #ccc;
	background: #eee;
	padding: 1rem;
		border-radius: 0.5rem;
}

</style>

<div class="container">
	<div id="content" tabindex="-1"	>
			<h1>Cheatsheet</h1>

			<div class="pt-2 pb-2 content-area" id="primary">
			<main class="site-main" id="main">
			<?php if (get_field('field_5a98cf8733d10')): ?>

<?php endif;?>
<?php while (have_posts()): the_post();?>
<?php  get_template_part('loop-templates/content', 'page');?>
<?php endwhile; // end of the loop.?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- Container end -->
</div><!-- Wrapper end -->
<?php get_footer();?>
<script>
(function() {
  const headings = document.querySelectorAll('h2');
  
  Array.prototype.forEach.call(headings, h => {
    let btn = h.querySelector('button');
    let target = h.nextElementSibling;
    
    btn.onclick = () => {
      let expanded = btn.getAttribute('aria-expanded') === 'true';
      
      btn.setAttribute('aria-expanded', !expanded);
      target.hidden = expanded;  
    }
  });
})()
</script>