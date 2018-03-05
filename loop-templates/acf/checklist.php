<?php
if (have_rows('field_5a1dfb52cb056')):
$i = 0;
$last = count(get_field('field_5a1dfb52cb056')); ?>
<div class="container-fluid" id="checklist">

<?php if (get_field('field_5a98cf8733d10')) : ?>
<div id="instruction"><i class="fa fa-info-circle mr-1 fa-lg"></i>
  <?php echo the_field('field_5a98cf8733d10'); ?>
</div>
<?php endif; ?>

  <div class="darkgrey">
    <div class="container">
      <div class="checkpage">
        <ul class="list-unstyled lead">
          <div>
<?php while (has_sub_field('field_5a1dfb52cb056')): ?>
    
<div>
            <li tabindex="<?php echo $i; ?>" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>"><i class="fa fa-square" aria-hidden="true"></i><i class="fa fa-check-square" aria-hidden="true"></i><span aria-hidden="true"><?php echo get_sub_field("field_5a1e03efcb057")?></span></li>
          </div>



          
<?php
$i++;
endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php else :
    // no rows found
endif;
?>


<script>
//reveal next item
$('#collapse1,#collapse2,#collapse3,#collapse4,#collapse5,#collapse6,#collapse7,#collapse8,#collapse9,#collapse10,#collapse11,#collapse12').on('hide.bs.collapse', function (e) {
  preventDefault(e);
})
$("li:nth-last-child(1)").click(function(){
    $(this).addClass("checked");
});
</script>