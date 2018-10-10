

<style>
#virtual-workplace_<?php echo get_the_ID(); ?> {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  position: absolute;
  left: 0;
  width: 100%;
  /* min-height: 100px; */
}

#scroller_<?php echo get_the_ID(); ?> {
  width: 100vw;
  height: 42vw;
  background-repeat: no-repeat;
  background-size: cover;
  overflow: auto;
}
button.close
{

    height: 3rem;
    width: 3rem;
    background: rgba(255,255,255,0.8);
    position: absolute;
    top: 1rem;
    right: 1rem;
    padding: 0.5rem;
    cursor: pointer;
}


/*Virtual lab*/
.vlab {

}
.vlab ul,
.vlab li {
  list-style-type: none;
  margin: 0;
  padding: 0;
}



.vlab button, .vlab a {
  height: auto;
  position: absolute;
  margin: 0;
  padding: 0;
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.vlab button:hover, .vlab button:focus {
  outline: none;
  box-shadow: none;
}

ul.office-folder li a:hover{
  outline: none;
  box-shadow: none;
}

.vlab button:hover img, .vlab button:focus img {
  animation-play-state: paused;
  -webkit-filter: drop-shadow(1px 3px 7px #00cfff);
}

ul.office-folder li a:hover img {
  animation-play-state: paused;
  -webkit-filter: drop-shadow(1px 3px 7px #00cfff);
}




.vlab button img {
  -webkit-animation: pulse 3s infinite;
}

/*pulse animation of icons*/
@-webkit-keyframes pulse {
  0%,
  100% {
    -webkit-filter: drop-shadow(0px 0px 0px none);
  }
  50% {
    -webkit-filter: drop-shadow(1px 3px 7px #000054);
  }
}
.face:hover {
  animation: shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
  animation: shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}

/*Overides BS4 modal values*/
.modal
{
    height: 80%;

    margin-top: 20px;
    width: inherit;
    margin: auto;
}
.modal-dialog, .modal-content
{
    max-width: 100% ;
    margin: 0;
}

</style>
<style>
#scroller_<?php echo get_the_ID(); ?>
{
background-image: url("<?php the_field('field_5b90fe1b76959');?>");
}
</style>
<div id="virtual-workplace container-fluid">
<div id="scroller_<?php echo get_the_ID(); ?>" class="vlab">



<?php if (have_rows('field_5b90ffc7a119f')): ?>

<ul>

<?php while (have_rows('field_5b90ffc7a119f')): the_row();

    // vars
    $position_x = get_sub_field('field_5b9100f05c920');
    $position_y = get_sub_field('field_5b9100de5c91f');
    $name = get_sub_field('field_5b910484bfb97');
    $cleaname = str_replace(str_split('\\/():*?" <>,.| '), '', get_sub_field('field_5b910484bfb97'));
    $size_x = get_sub_field('field_5b91017c6a19d');
    $image = get_sub_field('field_5b9101956a19e');
    $url_download = get_sub_field('field_5b910908311a0');
    ?>


		<style>
		button#<?php echo $cleaname ?>, a#<?php echo $cleaname ?> {
		  width: <?php echo $size_x ?>%;
		  top: <?php echo $position_x ?>%;
		  left: <?php echo $position_y ?>%;
		}
		</style>

		       <?php if (get_sub_field('field_5b9104a8bfb98') == 'download'): ?>

		  <li><a id="<?php echo $cleaname ?>" type="button" class="btn" title="<?php echo $cleaname ?>" href="<?php echo $url_download ?>" download="<?php echo $url_download ?>" download><img alt="<?php echo $cleaname ?>" src="<?php echo $image; ?>"></a></li>
		<?php else: ?>
<li><button  id="<?php echo $cleaname ?>" type="button" class="btn" title="<?php echo $cleaname ?>"
   data-toggle="modal" data-target=".<?php echo $cleaname ?>"><img alt="<?php echo $cleaname ?>" src="<?php echo $image; ?>"></button></li>

<?php endif;?>











<?php endwhile;?>


<?php endif;?>



  </ul>
  </div>


<!-- get modals -->
<?php if (have_rows('field_5b90ffc7a119f')): ?>



<?php while (have_rows('field_5b90ffc7a119f')): the_row();

    // vars

    $cleaname = str_replace(str_split('\\/():*?" <>,.| '), '', get_sub_field('field_5b910484bfb97'));

    ?>


		   <?php if (get_sub_field('field_5b9104a8bfb98') == 'newpage'): ?>


		   <div class="modal fade <?php echo $cleaname ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $cleaname ?>" aria-hidden="true">

		 <div class="modal-dialog" role="document">

		 <div class="modal-content">

		   <button type="button" class="close" data-dismiss="modal"  data-toggle="modal" data-target="<?php echo $cleaname ?>" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		        </div>
		        </div>

		    <?php

    $post_object = get_sub_field('field_5b9194600ccd5');

    if ($post_object):
        // override $post
        $post = $post_object;
        setup_postdata($post);
        ?>
				    <div>

				        <?php get_template_part('loop-templates/acf/virtual-workplace');?>
				    </div>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif;?>






		</div>


		<?php endif;?>











<?php endwhile;?>


<?php endif;?>

<!-- end get modals -->









  </div>

</div>

</div>

</body>




