<style>

</style>

<div id="aim" class="aim glossarize">


<div class="col-12">
  <div class="row">
    <div class="col-xs-12 col-sm-6 order-sm-12 background-image ">
      <img src="<?php
the_field('field_5a5443ce64623');?>" alt="<?php
the_field('field_5a53f3ef29cd8');?>" height="400" />
      <!-- get images -->

      <?php
// check if the repeater field has rows of data
if (have_rows('field_5a541f36eef91')):
    // ouput backgrounds
    $i = 1;
    while (have_rows('field_5a541f36eef91')):
        the_row();?>
        <?php
        $image = get_sub_field('field_5a5423847dc95');
        if (!empty($image)): ?>
          <img src="<?php echo $image['url']; ?>" id="collapse<?php echo str_replace(str_split('\\/:*?" &()<>,.| '), '', get_sub_field('field_5a541fbfeef92')); ?>" class="img-fluid collapse multi-collapse aim-<?php echo $i; ?>" height="400" alt="<?php echo $image['alt']; ?>"/>
            <?php endif;?>
            <?php
    $i++;
endwhile;
else:
endif;
?>
              <!-- end get images -->
    </div>

    <div class="col-xs-12 col-sm-6 col-sm-1 pl-0 accordion">

      <?php if (have_rows('field_5a541f36eef91')): ?>
      <?php if( get_field('field_5bc4d38bc5b36') == 'single' ): ?>
<div id="accordion">
<?php endif; ?>
        <div id="cards" class="expand">
        <?php if( get_field('field_5bc4d38bc5b36') == 'toggle' ): ?>
<div id="accordion">
<?php endif; ?>
          <!-- get text accordion -->
          <?php while (have_rows('field_5a541f36eef91')): the_row();?>
          <div class="card" >
            <div class="card-header collapsed pl-2" tabindex="0" id="heading<?php echo str_replace(' ', '', get_sub_field('field_5a541fbfeef92')); ?>"
              role="button" data-toggle="collapse" data-target="#collapse<?php echo str_replace(str_split('\\/:*?" &()<>,.| '), '', get_sub_field('field_5a541fbfeef92')); ?>  " aria-expanded="true" aria-controls="collapse   <?php echo str_replace(str_split('\\/:*()?"<>,.| '), '', get_sub_field('field_5a541fbfeef92')); ?>">
              <i class="fa fa-plus mr-1"></i>
              <i class="fa fa-minus mr-1 mr-1"></i>
              <?php echo get_sub_field('field_5a541fbfeef92'); ?>
            </div>
            <?php if (get_sub_field('field_5a541fc6eef93')): ?>
            <div id="collapse<?php echo str_replace(str_split('\\/:()*?"&<>,.| '), '', get_sub_field('field_5a541fbfeef92')); ?>" class="collapse" aria-labelledby="heading
              <?php echo str_replace(' ', '', get_sub_field('field_5a541fbfeef92')); ?>" data-parent="#accordion">
              <div class="card-body glossarize multi-collapse aim-<?php
    echo $i; ?>">
                <?php
    the_sub_field('field_5a541fc6eef93');?>
              </div>

            </div>
            <?php endif;?>
          </div>
          <?php endwhile;?>
          <!-- end get text accordion -->
        </div>
      </div>
      <?php else: ?>
      <?php endif;?>

    </div>
  </div>
</div>
</div>
<script>
$(function(){
  $('.card').keypress(function(e){
    if(e.which == 13) {
     // $.children().collapse('toggle');
	  $(this).find('.collapse').collapse('toggle');

    }
  })
})
$('accordion').collapse({
  toggle: true
})
</script>
