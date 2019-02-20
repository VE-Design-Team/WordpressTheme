<?php if (get_field('field_5ade80680cd32')): ?>
				<div class="instruction mr-1"><i class="fa fa-info-circle mr-1 fa-lg"></i>
	  <?php echo the_field('field_5ade80680cd32'); ?>
	</div>
	<?php endif;?>
<?php if (have_rows('field_5a2094f978d32')): ?>
    <div id="BranchingScenario">
    <?php 
        $row_count = 1;
        while (have_rows('field_5a2094f978d32')): the_row();
        // vars
        $title = get_sub_field('field_5a209938a0dce');
        $image = get_sub_field('field_5a20996ca0dd0');
        $content = get_sub_field('field_5a20995da0dcf');
        ?>
<div class="parent col-xs-12 col-lg-8 offset-lg-2">
    <div class="collapse parent " id="collapse<?php echo $row_count; ?>">
<div class="card ">
<?php if (get_sub_field('field_5a20996ca0dd0')): ?>
      <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>">
<?php endif; ?>
    <div class="card-body">
    <h3 class="h4"><?php echo $title; ?></h3><p class="card-text"><?php echo $content; ?></p>
<!-- Card <?php echo $row_count; ?>-->
<!-- get button data -->

<?php if (get_field('field_5a20e2a468c91') == 'link'): ?>
<p><ul class=" pt-1">
<?php elseif (get_field('field_5a20e2a468c91') == 'button'): ?>
<p><ul class="button-list pl-0 pt-1">
<?php endif; ?>


<?php if (have_rows('field_5a2099c5a0dd1')): ?>
    <?php while (have_rows('field_5a2099c5a0dd1')): the_row();
        // vars
        $button_title = get_sub_field('field_5a209a18a0dd2');
        $button_location = get_sub_field('field_5a20b601dd5a4');
        ?>
<?php if (get_field('field_5a20e2a468c91') == 'button'): ?>
        <li class="button"><a class="border mb-2 btn btn-default" href="#<?php echo $button_location ?>"
data-toggle="collapse" data-parent="#BranchingScenario" data-target="#collapse<?php echo $button_location ?>" aria-expanded="false" aria-controls="collapse<?php echo $button_location ?> " ">
            <?php echo $button_title; ?>
        </a></li>
<?php endif; ?>
<?php if (get_field('field_5a20e2a468c91') == 'link'): ?>
    <li><a href="#<?php echo $button_location ?>"
data-toggle="collapse" data-parent="#BranchingScenario" data-target="#collapse<?php echo $button_location ?>" aria-expanded="false" aria-controls="collapse<?php echo $button_location ?> " ">
            <?php echo $button_title; ?>
        </a></li>
<?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
</ul>
</p>
<!-- end get button data -->
      </div><!--card-body-->
</div><!--card-->
 <div class="progress mt-2 mr-1 ml-1">
    <?php 
    $total_row_count = count(get_field('field_5a2094f978d32'));
  $percent_completed =(($row_count / $total_row_count) * 100);
$progress_colour = "bg-danger";
if ($percent_completed > "95") {
    $progress_colour = "bg-success";
} elseif ($percent_completed > "40") {
    $progress_colour = "bg-warning";
}
     ?>
  <div class="progress-bar <?php echo $progress_colour; ?> progress-bar-striped progress-bar-animated" role="progressbar" title="You're <?php echo $percent_completed; ?>% through this scenario" style="width: <?php echo $percent_completed; ?>%" aria-valuenow="<?php echo $percent_completed; ?>" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div><!--collapse-->
</div><!--parent-->
    <?php 
$row_count++;
    endwhile; ?>
</div><!--BranchingScenario-->
<?php endif; ?>
<script>
// Make first card show on loadding, rest hidden by default 
$('.collapse:first').addClass('show');
</script>   