<style>

  .hidden
{
  display: none;
  position: absolute;
}

    </style>


</head>



<div class="container-fluid" id="quiz">
  <div class="row rich-background">
    <div class="container">
      <div class="checkpage row glossarize">
        <!-- carousel for pages -->
        <div id="questions" class="carousel col-12" data-ride="carousel" data-interval="false">


          <?php

// check if there are questions
if (have_rows('field_5bb2038203e86')):
    $i = 1;
    // Get each of the questions
    while (have_rows('field_5bb2038203e86')): the_row();?>

          <div class="question<?php echo $i; ?> carousel-item <?php if ($i == " 1 ") {echo " active ";}?>">

            <div class="row">
              <div class="col-12">
                <h3 class="card-title">Question
                  <?php echo $i; ?>
                </h3>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php the_sub_field('field_5bb20bd5e1178');?>" class="img-fluid mx-auto d-flex justify-content-center flex-wrap">
              </div>
              <div class="col-6 col-sm-6 col-md-8">
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




                      <input class="with-gap" name="group<?php echo $i; ?>" type="radio" id="test<? echo $a; ?>" />
                      <label for="test<? echo $a; ?>">
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
                    <button id="question1" class="btn btn-primary btn-sm">Submit</span>
                  </div>
                </div>
              </div>

<!-- get results-->

              <div class="results mt-5 col-12 ">

<?php
  // check if there are answers
        if (have_rows('field_5bb20a29cf3f6')):
          $r = 1;
            // get each of the answers
            while (have_rows('field_5bb20a29cf3f6')): the_row(); ?>
    <div id="q<?php echo $i; ?>a<?php echo $r;?>" class="hidden">
                  <div class="card card-body">

                <h4><?php 
                // is this a correct asnwer?
                the_sub_field('field_5bb20a41cf3f8'); ?></h4>
                <?php // Feedback for this snaswer
                the_sub_field('field_5bb20ad9cf3f9'); ?>

                    </div>

</div>
                
           <?php $r++; endwhile;

        else:

            // No answers

        endif; ?>

                 <!-- end get results-->
              </div>
            </div>
          </div>




          <?php $i++;endwhile;

else:

    // There are no questions

endif;

?>
          <div class="controls row">
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
  $('#question1').click(function () {
    if ($('#test2').is(':checked')) {
      $('#q1a1').toggleClass("hidden");
    } else {
      $('#q1a2').toggleClass("hidden");
    }
  });


</script>