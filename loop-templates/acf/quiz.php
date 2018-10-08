<div class="container-fluid" id="quiz">
				  <div class="row rich-background">
				    <div class="container">
				      <div class="checkpage col-12 col-md-8 offset-md-2  glossarize">
<!-- carousel for pages -->
<div id="questions" class="carousel " data-ride="carousel" data-interval="false">


<!-- loop -->
<?php

// check if there are questions
if( have_rows('field_5bb2038203e86') ):  ?>
<?php $q = 0; ?>
  <div class="carousel-inner row">
 	<?php // Get each of the questions
    while ( have_rows('field_5bb2038203e86') ) : the_row(); ?>
    
<div class="col-12 carousel-item <?php if ($q == " 0 ") {echo "active ";}?>">
     
   
   
       <h3 class="text-center"><?php the_sub_field('field_5bb2039703e87'); ?></h3>
       
       <!--<?php the_sub_field('field_5bb20bd5e1178'); ?>-->

<form name="quiz" method="post" name="buttons" id="quiz" onsubmit="return false">




 <?php if( have_rows('field_5bb20a29cf3f6') ): ?>

 <?php $a = 0; ?>
    <?php while ( have_rows('field_5bb20a29cf3f6') ) : the_row(); ?>

        
<div class="form-check">
  <input class="form-check-input" type="radio" name="QuizRadios<?php echo $q;?>" id="QuizRadios<?php echo $a; ?>" value="option<?php echo $a; ?>" checked>
  <label class="form-check-label" for="QuizRadios<?php echo $a; ?>">
  <? // display an answer
       the_sub_field('field_5bb20a3acf3f7'); ?><span class="pl-2 correct<?php the_sub_field('field_5bb20a41cf3f8'); ?>"><?php   // Feedback for this snaswer
       the_sub_field('field_5bb20ad9cf3f9'); ?>  </span>
  </label>
</div>


     
     <!--  
       -->



    <?php $a++; endwhile; ?>

<?php else :

    // No answers

endif; ?>
<form>

        </div> 

   <?php $q++; endwhile; ?>
</div>
<div class="form-row text-center">
<button class="btn btn-sm btn-default mx-auto">Check answer</button>
</div>
<?php else :

    // There are no questions

endif;

?>
<!--loop -->

  <!-- The slideshow -->

   
  

  <!-- Left and right controls -->
  <div class="controls row">
  <a class="carousel-control-prev" href="#questions" data-slide="prev">
    <i class="fa fa-chevron-circle-left fa-2x"></i>
  </a>
  <a class="carousel-control-next" href="#questions" data-slide="next">
  <i class="fa fa-chevron-circle-right fa-2x"></i>
</a>
</div>

  <!-- Indicators -->
  <!--<ul class="carousel-indicators">
    <li><a data-target="#demo" data-slide-to="0" class="active">1</a></li>
    <li><a data-target="#demo" data-slide-to="1">2</a></li>
    <li><a data-target="#demo" data-slide-to="2">3</a></li>
  </ul>-->



</div>

                      </div></div></div></div>


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

<script>

function handleClick()
      {         
var amountCorrect = 0;          
for(var i = 1; i <= 45; i++) {
  var radios = document.getElementsByName('QuizRadios'+i);
  for(var j = 0; j < radios.length; j++) {
    var radio = radios[j];
    if(radio.value == "correct1" && radio.checked) {
      amountCorrect++;
    }
  }
}                   
        alert("Correct Responses: " + amountCorrect);
      }

    </script>