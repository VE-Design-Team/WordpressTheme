<div class="container-fluid" id="quiz">
				  <div class="row rich-background">
				    <div class="container">
				      <div class="checkpage row glossarize">
<!-- carousel for pages -->
<div id="questions" class="carousel col-12" data-ride="carousel" data-interval="false">

<!-- loop -->
<?php
// check if there are questions
if( have_rows('field_5bb2038203e86') ):  ?>
<?php $i = 1; ?>
  <div class="carousel-inner row">
 	<?php // Get each of the questions
    while ( have_rows('field_5bb2038203e86') ) : the_row(); ?>
    
<div class="col-12 carousel-item <?php if ($i == " 1 ") {echo "active ";}?>">
     

      <h3><?php  // Display the question
        the_sub_field('field_5bb2039703e87'); ?></h3>
       <?php // Display the question image
        // the_sub_field('field_5bb20bd5e1178'); ?>


  


 <?php if( have_rows('field_5bb20a29cf3f6') ):

 	// get each of the answers
    while ( have_rows('field_5bb20a29cf3f6') ) : the_row(); ?>
<div class="row form">
<div class="radio col-12 col-md-6">
  <label><input type="radio" name="optradio<?php echo $i; ?>" checked><?php the_sub_field('field_5bb20a3acf3f7'); ?><div class="feedback<?php the_sub_field('field_5bb20a41cf3f8'); ?>"><?php the_sub_field('field_5bb20ad9cf3f9'); ?></div> </label>
</div>



   
   

 </div>

  <?php  endwhile;

else :

    // No answers

endif; ?> 
<a class="btn btn-sm float-right btn-primary">check</a>

        </div> 

   <?php $i++; endwhile; ?>
</div>
<?php else :

    // There are no questions

endif;

?>
<!--loop -->

  <!-- The slideshow -->

     <!-- Left controls -->
  
<div class="controls row">
<div class="col"><a class="carousel-control-prev" href="#questions" data-slide="prev"> <i class="fa fa-chevron-circle-left fa-2x"></i></a></div>





<?php
// get progress indicators
if( have_rows('field_5bb2038203e86') ):  ?>
<?php $p = 0; ?>
 
 	<?php // Get each of the questions
    while ( have_rows('field_5bb2038203e86') ) : the_row(); ?>

<div data-target="#questions" data-slide-to="<?php echo $p; ?>" class="col"><span class="numborder"><span class="num"><?php echo $p+1; ?></span></span></div>

   <?php $p++; endwhile; ?>

<?php else :

    // There are no questions

endif;

?>
<!-- right control -->

<div class="col">  <a class="carousel-control-next" href="#questions" data-slide="next"><i class="fa fa-chevron-circle-right fa-2x"></i></a></div>
</div>



  <!-- Indicators -->
  <!--<ul class="carousel-indicators">
    <li><a data-target="#demo" data-slide-to="0" class="active">1</a></li>
    <li><a data-target="#demo" data-slide-to="1">2</a></li>
    <li><a data-target="#demo" data-slide-to="2">3</a></li>
  </ul>-->



</div>

                      </div></div></div></div>

<!--- Data Dump
<?php

// check if there are questions
if( have_rows('field_5bb2038203e86') ):

 	// Get each of the questions
    while ( have_rows('field_5bb2038203e86') ) : the_row();

        // Display the question
        the_sub_field('field_5bb2039703e87');
        // Display the question image
        the_sub_field('field_5bb20bd5e1178');
        // Display the answers

  

// check if there are answers
if( have_rows('field_5bb20a29cf3f6') ):

 	// get each of the answers
    while ( have_rows('field_5bb20a29cf3f6') ) : the_row();

        // display an asnwer
        the_sub_field('field_5bb20a3acf3f7');
        // is this a correct asnwer?
        the_sub_field('field_5bb20a41cf3f8');
          // Feedback for this snaswer
          the_sub_field('field_5bb20ad9cf3f9');



    endwhile;

else :

    // No answers

endif;


        

    endwhile;

else :

    // There are no questions

endif;

?>
-->
<script>
$('label').click( function() {
  $(this).children().toggleClass('btn-primary').siblings().toggleClass('show');
});




</script>