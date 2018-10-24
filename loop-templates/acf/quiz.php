<div class="container-fluid" id="quiz">
  <div class="row rich-background">
    <div class="container">
      <div class="checkpage row glossarize">
        <!-- carousel for pages -->
        <div id="questions" class="carousel col-12" data-ride="carousel" data-interval="false">

          <?php

// check if there are questions
if (have_rows('field_5bb2038203e86')):
    $q = 1;
    // Get each of the questions
    while (have_rows('field_5bb2038203e86')): the_row();?>

          <div class="question<?php echo $q; ?> carousel-item <?php if ($q == " 1 ") {echo " active ";}?>">

            <div class="row">
              <div class="col-12">
                <h3 class="card-title text-center">Question
                  <?php echo $q; ?>
                </h3>
              </div>

<?php 
// no image in quiz fallback
if( get_sub_field('field_5bb20bd5e1178') ): ?>
<div class="col-12 col-sm-6 col-md-4">
                <img src="<?php the_sub_field('field_5bb20bd5e1178');?>" class="img-fluid mx-auto d-flex justify-content-center flex-wrap">
              </div>
              <div class="col-12 col-sm-6 col-md-8 mt-3">
<?php else: ?>
<div class="col-12 col-sm-6 offset-sm-3 col-md-8 offset-md-2 mt-3">
<?php endif; ?>

  
            
                <div class="questions">

                  <p class="h4">
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

                      <input class="with-gap" name="group<?php echo $q; ?>" type="radio" id="testq<?php echo $q; ?>a<? echo $a; ?>" />
                      <label for="testq<? echo $a; ?>a<? echo $a; ?>">
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
                    <button id="question<?php echo $q; ?>" class="btn btn-primary btn-sm btn-quiz">Check answer</button>
                  </div>
                </div>
              </div>

              <!-- get results-->

              <div class="results col-12 mt-3 mb-2">

                <?php
        // check if there are answers
        if (have_rows('field_5bb20a29cf3f6')):
            $r = 1;
            // get each of the answers
            while (have_rows('field_5bb20a29cf3f6')): the_row();?>
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

                    <p><?php // Feedback for this snaswer
                the_sub_field('field_5bb20ad9cf3f9');?></p>

               

                </div>

                <?php $r++;endwhile;

        else:

            // No answers

        endif;?>

                <!-- end get results-->
              </div>
      
            </div>
          </div>

          <?php $q++;endwhile;

else:

    // There are no questions

endif;

?>
          <div class="controls row mt-2">
            <div class="col"><a class="carousel-control-prev" href="#questions" data-slide="prev"> <i class="fa fa-chevron-circle-left fa-2x"></i></a></div>

            <?php
// get progress indicators
if (have_rows('field_5bb2038203e86')): ?>
            <?php $p = 0;?>

            <?php // Get each of the questions
while (have_rows('field_5bb2038203e86')): the_row();?>

            <div data-target="#questions" data-slide-to="<?php echo $p; ?>" class="col"><span class="numborder"><span
                  class="num">
                  <?php echo $p + 1; ?></span></span></div>

            <?php $p++;endwhile;?>

            <?php else:

    // There are no questions

endif;

?>
            <!-- right control -->

            <div class="col"> <a class="carousel-control-next" href="#questions" data-slide="next"><i class="fa fa-chevron-circle-right fa-2x"></i></a></div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
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
  //disable radios after click
  $(":radio").click(function () {
    var radioName = $(this).attr("name"); //Get radio name
    $(":radio[name='" + radioName + "']").attr("disabled", true); //Disable all with the same name
  });
</script>