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