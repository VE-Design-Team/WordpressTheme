<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

<style>
.legal-pyramid { 
<?php if( get_field('image') ): ?>

	<img src="<?php the_field('image'); ?>" />
background-image: url('<?php the_field('image'); ?>'); 
<?php endif; ?>

  
  background-size: contain; 
  background-repeat: no-repeat; 
  background-position: center; 
  height: 520px;} 
.act{ 
  background-color: $rmit-red; 
  border-color:$rmit-red; 
  color:$white; 
} 
.regulation{ 
  background-color: $rmit-blue; 
  border-color:$rmit-blue; 
  color:$white; 
} 
 
.practice{ 
  background-color: $rmit-teal; 
  border-color:$rmit-teal; 
  color:$black; 
} 
 
.guidance{ 
  background-color: $rmit-yellow; 
  border-color:$rmit-yellow; 
  color:$black; 
} 
} 
</style>

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

<div class="row ethical-pyramid">
  <div class="col-12 col-md-9 col-lg-6 text-center mb-2">
    <div class="btn-group">
      <button type="button" data-toggle="collapse" data-target="#act-information" aria-expanded="false" aria-controls="act-information" class="btn btn-primary btn-sm act">
        1. Act
      </button>
      <button type="button" data-toggle="collapse" data-target="#regulation-information" aria-expanded="false" aria-controls="regulation-information" class="btn btn-primary btn-sm regulation">
        2. Regulation
      </button>
      <button type="button" data-toggle="collapse" data-target="#practice-information" aria-expanded="false" aria-controls="practice-information" class="btn btn-primary btn-sm practice">
        3. Codes of practice
      </button>
      <button type="button" data-toggle="collapse" data-target="#guidance-information" aria-expanded="false" aria-controls="guidance-information" class="btn btn-primary btn-sm guidance">
        4. Guidance material
      </button>
    </div>
  </div>
</div>
<div class="row ethical-pyramid">
  <div class="col-12 col-md-9 col-lg-6 text-center">
    <div class="legal-pyramid">         </div>
  </div>
  <div class="col-12 col-lg-5">
    <div id="act-information" class="collapse">
      <div class="card-body mt-1 act">
        Laws made by parliament are ‘statutes’, ‘acts’ or ‘legislation’. Laws set the rules you follow. An example is the Aged Care Act.
      </div>
    </div>
    <div id="regulation-information" class="collapse">
      <div class="card-body mt-1 regulation">
        Regulations support laws. They outline specific requirements and explain how to follow the law.  An example is the Occupational health and safety regulations.
      </div>
    </div>
    <div id="practice-information" class="collapse">
      <div class="card-body mt-1 practice">
        Regulations support laws. They outline specific requirements and explain how to follow the law.  An example is the Occupational health and safety regulations.
      </div>
    </div>
    <div id="guidance-information" class="collapse">
      <div class="card-body mt-1 guidance">
        Regulations support laws. They outline specific requirements and explain how to follow the law.  An example is the Occupational health and safety regulations.
      </div>
    </div>
  </div>
</div>

	</div><!-- .entry-content -->



</article><!-- #post-## -->
