<?php if (have_rows('field_5a30b394101e4')):
    $colorhover = 0;
    echo "<style>";
    while (have_rows('field_5a30b394101e4')): the_row();
        if (get_sub_field('field_5a30b4531abcd')) {
            $colorhover++;
        }

        echo "#hover" . $colorhover . ":hover";
        echo "{color: " . get_sub_field('field_5a30b4531abcd') . ";}";
    endwhile;
    $tCount = $colorhover;
    echo "</style>";
endif;?>

<div id="tooltip-textstring">
<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="top-trim mb-5 mt-5">
        <div id="tooltips mb-2 mt-2">
          <?php if (have_rows('field_5a30b394101e4')): $colorhovercount = 0;?>
		          <p class="display-2 text-center pt-4 pb-4 mb-5">
		            <?php while (have_rows('field_5a30b394101e4')): the_row();?>
				            <?php get_template_part('loop-templates/acf/tooltip-prepend');?>
				            <?php if (get_sub_field('field_5a30b4531abcd')) {
            $colorhovercount++; } ?>
				            <span title="<?php echo the_sub_field('field_5a30b4461abcc'); ?>" data-toggle="tooltip" data-placement="top" id="hover<?php echo $colorhovercount; ?>"
				              class="<?php echo str_replace(' ', '', get_sub_field('field_5a30b4461abcc')); ?> ">
				              <?php the_sub_field('field_5a30b40b1abc9')?>
				            </span>
				            <?php get_template_part('loop-templates/acf/tooltip-append');?>
				            <?php endwhile;?>
		          </p>
		          <?php endif;?>
        </div>
      </div>
    </div>
      </div>
</div>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <!-- Tooltip end -->