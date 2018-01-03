 <ul class="list-unstyled">
<?php
if( have_rows('field_5a1dfb52cb056') ):
$i = 1;
$last = count( get_field('field_5a1dfb52cb056') );

while(has_sub_field('field_5a1dfb52cb056')):
?>
  		<?php if ($i == 1){echo "<div>";}else{
echo "<div class='collapse' id='collapse".$i."' aria-expanded='false'>";
  		}?>
  		    <li>
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="" data-toggle="collapse" data-target="#collapse<?php echo $i+1; ?>"  <?php if ($i == $last){echo "checked";}?><i></i> <?php echo get_sub_field("field_5a1e03efcb057")?>
              </label>
             
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
$('#collapse2,#collapse3,#collapse4,#collapse5,#collapse6,#collapse7,#collapse8,#collapse9,#collapse10,#collapse11,#collapse12').on('hide.bs.collapse', function (e) {
  preventDefault(e);
})
</script>


     