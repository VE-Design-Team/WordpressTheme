
<style>

html {
  box-sizing: border-box;
}

*, *::after, *::before {
  box-sizing: inherit;
}

.hotspot:before {
  content: "\f055";
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  display: block;
  
  width: 2rem;
  height: 2rem;
  border-radius: 1rem;  
 
  position: absolute;
  left: 5px;
  top: 5px;
  font-size: 2rem;
  background-size: 75%;
  background-position: 53%;
  background-repeat: no-repeat;
}

.hotspots-label {
  color: white;
  background: rgba(0, 0, 0, 0.7);
  position: absolute;
  bottom: 0px;
  left: 50%;
  padding: 15px;
  text-align: center;
  color: #fff;
  font-size: 16px;
  transform: translateX(-50%);
  -webkit-font-smoothing: antialiased;
  opacity: 0;
  visibility: hidden;
  transition: opacity 350ms cubic-bezier(0.2, 0.5, 0.34, 1);
  width: 100%;
  cursor: pointer;
}
@media screen and (max-width: 580px) {
  .hotspots-label {
    width: 100%;
    height: 100%;
    padding: 50px 40px;
    background-color: rgba(0, 0, 0, 0.7);
  }
  .hotspots-label strong {
    display: block;
    margin-bottom: 10px;
  }
  .hotspots-label span {
    display: none;
  }
  .hotspots-label:before {
    display: block;
    top: 25px;
    left: auto;
    right: 4px;
    transform: rotate(45deg);
    cursor: pointer;
  }
}
.hotspots-label.is-visible {
  opacity: 1;
  visibility: visible;
}

.hotspot {
 
  padding: 20px;
  height: 2rem;
  box-sizing: border-box;
  /* background-color: rgba(0, 0, 0, 0.45); */
  color: #E60028;
  -webkit-font-smoothing: antialiased;
  position: absolute;
  line-height: 40px;
 
  font-size: 2rem;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  cursor: pointer;
  opacity: 0;
  width: 0;
  transition: opacity 650ms ease-in, width 350ms linear;
  text-shadow: 0px 0px 15px rgba(255, 255, 255, 1);
  user-select: none;
}
.hotspot:hover
{

  text-decoration: none;
  font-size: 2.2rem;
  color: #fff;
  text-shadow: 0px 0px 15px rgba(0, 0, 0, 1);
 
}

.hotspot.is-visible {
  opacity: 1;
}
.hotspot.is-active {

  text-indent: 0;
  width: auto;
  color: #fff;
  text-shadow: 0px 0px 15px rgba(0, 0, 0, 1);
}
.hotspot.is-active > a > span
{
  display: none;
}
.hotspot.is-active:before {
color: #fff;

}
.hotspot:before {
  transition: transform 150ms cubic-bezier(0.2, 0.5, 0.34, 1);
}
@media screen and (max-width: 960px) {
  .hotspot {
    height: 30px;
    line-height: 30px;
    font-size: 13px;
    padding: 15px;
  }
  .hotspot.is-active {
    text-indent: 0;
    width: auto;
  }
  .hotspot:before {
    top: 2px;
    left: 2px;
    width: 25px;
    height: 25px;
  }
}
@media screen and (max-width: 580px) {
  .hotspot {
    padding: 12px;
    height: 25px;
    line-height: 25px;
    font-size: 12px;
  }
  .hotspot.is-active {
    padding: 0 10px 0 30px;
    text-indent: 0;
    width: auto;
  }
  .hotspot:before {
    width: 20px;
    height: 20px;
  }
}

.image {
  width: 100%;
  display: block;
  position: relative;
  overflow: hidden;
}
.image:before {
  content: "";
  display: block;
  width: 100%;
  padding-top: 70%;
}
.image .contain {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background-image: url(<?php if( get_field('field_5a7ba039caa05') ): ?><?php the_field('field_5a7ba039caa05'); ?><?php endif; ?>);
  background-size: cover;
}

</style>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="image">
        <div class="contain">

        <?php

// check if there are hotspots
if( have_rows('field_5a7b7e0ddb57c') ): ?>

<ul class="list-unstyled">
  <?php  while ( have_rows('field_5a7b7e0ddb57c') ) : the_row();
        // set variables
       $title = get_sub_field('field_5a7b7e35db57d');
       $description = get_sub_field('field_5a7b7e45db57e');
       $xaxis = get_sub_field('field_5a7b7fa2d4c97');
       $yaxis = get_sub_field('field_5a7b7ff2d4c98'); ?>
<li><a class="hotspot" data-left="<?php echo $xaxis; ?>" data-top="<?php echo $yaxis; ?>" data-toggle="tooltip" data-placement="top"  tabindex="0" title="<?php echo $title; ?>"><span class="sr-only"><?php echo $title; ?> : <?php echo $description; ?></span></a></li>
    <?php endwhile; ?>
</ul>
<?php else :

    // no hotspots

endif;

?>

          <div class="hotspots-label"></div>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
$('.hotspot').each(function(){
	
	var $this = $(this),
			top = $this.data('top'),
			left = $this.data('left');
	
	$this.css({
		top: top + "%",
		left: left + "%"
	})
	.addClass('is-visible');
	
});

$(".hotspots-label").on('click', function(e){
	$(this).removeClass('is-visible');
	$(this).parents('.image').find('.hotspot').removeClass('is-active');
	e.preventDefault();
});




$('.hotspot').on('click', function(e){
	
	var text = $(this).data('text');
	
	if(!$(this).hasClass('is-active'))
	{
		$(this).parents('.image').find('.hotspot').removeClass('is-active');
		$(this).addClass('is-active');
		$(this).parents('.image').find('.hotspots-label').html( '<strong>' + $(this).text() + '</strong> <span></span>' ).addClass('is-visible');
	}
	else
	{
		$(this).removeClass('is-active');
		$(this).parents('.image').find('.hotspots-label').html( '<strong>' + $(this).text() + '</strong> <span>' + text + '</span>' ).removeClass('is-visible');	
	}
	
	e.preventDefault();
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>	