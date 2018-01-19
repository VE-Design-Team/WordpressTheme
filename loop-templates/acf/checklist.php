 <ul class="list-unstyled lead">
<?php
if( have_rows('field_5a1dfb52cb056') ):
$i = 1;
$last = count( get_field('field_5a1dfb52cb056') );
while(has_sub_field('field_5a1dfb52cb056')):
?>
      <?php if ($i == 1){echo "<div>";}else{
echo "<div class='collapse' id='collapse".$i."' aria-expanded='false'>";
      }?>
          <li data-toggle="collapse" data-target="#collapse<?php echo $i+1; ?>">
<?php if ($i == $last){echo '<i class="fa fa-check-square-o" aria-hidden="true"></i>';} else {echo ' <i class="fa fa-square-o" aria-hidden="true"></i><i class="fa fa-check-square-o" aria-hidden="true"></i>';}?> <?php echo get_sub_field("field_5a1e03efcb057")?>
            </li>
          </div>
<?php
$i++;
endwhile;
else :
    // no rows found
endif;
?>
</ul>
<script>
//reveal next item
$('#collapse2,#collapse3,#collapse4,#collapse5,#collapse6,#collapse7,#collapse8,#collapse9,#collapse10,#collapse11,#collapse12').on('hide.bs.collapse', function (e) {
  preventDefault(e);
})
$("li:nth-last-child(1)").click(function(){
    $(this).addClass("checked");
});
</script>
<style>
li > i.fa-check-square-o
{
display: none
}
li.checked > i.fa-square-o
{
display: none;
}
li.checked > i.fa-check-square-o
{
display: inline;
margin-right: -0.18rem;
}
#collapse<?php echo $last;?> > li > i.fa-check-square-o
{
display: inline !important;
margin-right: -0.2rem;
}
</style>
     