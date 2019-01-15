<div class="container-fluid" id="quiz">
  <div class="row rich-background">
    <div class="container">
      <div class="checkpage row glossarize">
        <!-- carousel for pages -->
        <div id="questions" class="carousel col-12 p-0" data-ride="carousel" data-interval="false">
          <?php
// check if there are questions
if (have_rows('field_5bb2038203e86')):
    $q = 1;
    $count = count(get_field('field_5bb2038203e86'));
    // Get each of the questions
    while (have_rows('field_5bb2038203e86')): the_row();?>

          <div class="question<?php echo $q; ?> carousel-item <?php if ($q == " 1 ") {echo " active ";}?>">

            <div class="row no-gutters">

              <?php 
// no image in quiz fallback
if( get_sub_field('field_5bb20bd5e1178') ): ?>
              <div class="col-12 col-sm-6 col-md-4 p-0">
                <img src="<?php the_sub_field('field_5bb20bd5e1178');?>" class="img-fluid d-flex justify-content-center flex-wrap">
              </div>
              <div class="col-12 col-sm-6 col-md-8 mt-3">
                <?php else: ?>
                <div class="col-12 col-md-8 offset-md-2 mt-3 ">
                  <?php endif; ?>

                  <div class="questions pl-3 mb-0">
                    <h3 class="h2">Question
                      <?php echo $q; ?> of
                      <?php echo $count; ?>
                    </h3>
                    <?php 
                     $qtype = get_sub_field('field_5c188bc3b0b84');

                           ?>



                    <p class="lead">
                      <?php // Display the question
        the_sub_field('field_5bb2039703e87');?>
                    </p>
                    <form action="#">
                      <!-- get answers -->
                      <p>
                        <?php if (have_rows('field_5bb20a29cf3f6')):
            $a = 1;
// get each of the answers
            while (have_rows('field_5bb20a29cf3f6')): the_row();?>

                        <input class="with-gap" name="group<?php echo $q; ?>" type="<?php echo $qtype; ?>" id="testq<?php echo $q; ?>a<?php echo $a; ?>"
                          class="radio" />
                        <label for="testq<?php echo $q; ?>a<?php echo $a; ?>">
                          <?php the_sub_field('field_5bb20a3acf3f7');?></label>
                        <br>

                        <?php $a++;endwhile;

        else:

// No answers

        endif;?>
                        <!-- end get answers-->

                      </p>

                    </form>
                  </div>
                  <div class="answers">
                    <div class="card-action">
                      <button id="question<?php echo $q; ?>" name="group<?php echo $q; ?>" class="h4  btn btn-sm btn-default btn-quiz">Submit</button>
                    </div>
                  </div>
                </div>

                <!-- get results-->
                <hr>
                <div class="q-footer col-12 col-md-8 mt-3 mb-2 offset-md-2">

                  <?php
        // check if there are answers
        if (have_rows('field_5bb20a29cf3f6')):
            $r = 1;
            // get each of the answers
            while (have_rows('field_5bb20a29cf3f6')): the_row();?>
               <?php $f = get_sub_field('field_5bb20a41cf3f8');
                //this variable not used
               ?>   
                  <div id="q<?php echo $q; ?>a<?php echo $r; ?>" class="hidden card card-body col correct<?php the_sub_field('field_5bb20a41cf3f8');?> ">

                    <h4>




                      <?php
$t = get_sub_field('field_5bb20a41cf3f8');
if ($t == "1") {
    echo "Correct";
} else {
    echo "Incorrect";
}
?>
                    </h4>

                  

                    <p>
                      <?php // Feedback for this snaswer
                the_sub_field('field_5bb20ad9cf3f9');?>
                    </p>
                    <div class="col-2 next-prev">

                      <a class="carousel-control-next " href="#questions" data-slide="next" title="Next question"></a>
                      <a class="carousel-control-prev mr-1" href="#questions" data-slide="prev" title=" Previous question">
                      </a>
                    </div>
                  </div>

                  <?php $r++;endwhile;

        else:

            // No answers

        endif;?>

                </div>

              </div>

            </div>

            <?php $q++;endwhile;

else:

    // There are no questions

endif;

?>

          </div>

        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    <?php

// check if there are questions
if (have_rows('field_5bb2038203e86')):
    $q = 1;
    
    // Get each of the questions
    while (have_rows('field_5bb2038203e86')): the_row();?>

    $('#question<?php echo $q; ?>').click(function () {
      if (1 > 5) { // do nothing of course
      }

      <?php if (have_rows('field_5bb20a29cf3f6')):
            $a = 1;
// get each of the answers
            while (have_rows('field_5bb20a29cf3f6')): the_row();?>

      else if ($('#testq<?php echo $q; ?>a<?php echo $a; ?>').is(':checked')) {
        $('#q<?php echo $q; ?>a<?php echo $a; ?>').removeClass("hidden");
      }

      <?php $a++;

            endwhile;

        else:

// No answers

        endif;?>

    });

    <?php $q++;
    endwhile;

else:

    // There are no questions

endif;

?>
    //disable submit until radio selected
  







    //disable radios after click

    $("button").click(function () {
      var radioName = $(this).attr("name"); //Get radio name
      $("input:radio[name='" + radioName + "']:not(:checked)").attr("disabled", true); //Disable all unchecked radios with the same name
    });
  </script>