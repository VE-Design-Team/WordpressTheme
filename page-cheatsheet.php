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
body {
  background: #eee;
  padding: 20px;
}

article {
  max-width: 50em;
  background: white;
  padding: 2em;
  margin: 1em auto;
}

.table-of-contents {
 
  
  background: #eee;
  font-size: 0.8em;
  padding: 1em 2em;
  margin: 0 0 0.5em 0.5em;
}
.table-of-contents ul {
  padding: 1rem;
}
.table-of-contents li {
  margin: 0 0 0.25em 0;
}
.table-of-contents a {
  text-decoration: none;
}
.table-of-contents a:hover,
.table-of-contents a:active {
  text-decoration: underline;
}

h3:target {
  animation: highlight 1s ease;
}

@keyframes highlight {
  from { background: yellow; }
  to { background: white; }
}
</style>

<div class="container">
	<div id="content" tabindex="-1"	>
			<h1 class="text-center">Cheatsheet</h1>

	<article>
 
   <div class="cheats">
  
  <?php while (have_posts()): the_post();?>
<?php  get_template_part('loop-templates/content', 'page');?>
<?php endwhile; // end of the loop.?>
  </div>
  
</article>

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- Container end -->
</div><!-- Wrapper end -->
<?php get_footer();?>
<script>
//Make Table of contents
var ToC =
  "<nav role='navigation' class='table-of-contents'>" +
    "<h3>On this page:</h3>" +
    "<ul>";

var newLine, el, title, link;

$("article h2").each(function() {

  el = $(this);
  title = el.text();
  link = "#" + el.attr("id");

  newLine =
    "<li>" +
      "<a href='" + link + "'>" +
        title +
      "</a>" +
    "</li>";

  ToC += newLine;

});

ToC +=
   "</ul>" +
  "</nav>";

$(".cheats").prepend(ToC);

</script>