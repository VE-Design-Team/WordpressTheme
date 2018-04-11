<?php
// check if the repeater field has rows of data
if (have_rows('field_5a68162825811')):
  echo "<!--";
    while (have_rows('field_5a68162825811')) : the_row();
?>
     // Questions 
      <?php   if (have_rows('field_5a6816c125812')):
  // loop through the rows of data
      $q = 1;
    while (have_rows('field_5a6816c125812')) : the_row();
        echo "Question: ";
        the_sub_field('field_5a681fb7a5cc0');
        echo ", Weight: ";
        the_sub_field('field_5a693948b85bf');
        echo "<br>";
        $q++;
    endwhile;
else :
    // no rows found
endif;?>  
         // Outcomes 
    <?php   if (have_rows('field_5a681ec374a40')):
  // loop through the rows of data
    while (have_rows('field_5a681ec374a40')) : the_row();
              
        // Lower unit
        the_sub_field('field_5a681f3774a42');
        echo " < ";
        the_sub_field('field_5a681ed574a41');
        echo " > ";
        the_sub_field('field_5a682049db3af');
        echo ", Outcome text: ";
        the_sub_field('field_5a693992b85c0');
        echo "<br>";
    endwhile;
    echo "-->";
else :
    // no rows found
endif;?> 
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:700');
.prompt {
  display: block;
}
.btn {
  /*margin: 0 20px 0 20px;*/
}
.btn-smbtn-default.active,
.btn-smbtn-default:active,
.btn-smbtn-default:focus,
.btn-smbtn-default:active:focus,
.btn-smbtn-default.active:focus,
.btn-smbtn-default:hover {
  background-color: rgba(137, 137, 137, 0.8);
}
.btn-strongly-agree.active,
.btn-strongly-agree:active,
.btn-strongly-agree:focus,
.btn-strongly-agree:active:focus,
.btn-strongly-agree.active:focus,
.btn-strongly-agree:hover {
  background-color: #89d298;
}
.btn-agree.active,
.btn-agree:active,
.btn-agree:focus,
.btn-agree:active:focus,
.btn-agree.active:focus,
.btn-agree:hover {
  background-color: rgba(137, 210, 152, 0.5);
}
.btn-disagree.active,
.btn-disagree:active,
.btn-disagree:focus,
.btn-disagree:active:focus,
.btn-disagree.active:focus,
.btn-disagree:hover {
  background-color: rgba(226, 129, 129, 0.5);
}
.btn-strongly-disagree.active,
.btn-strongly-disagree:active,
.btn-strongly-disagree:focus,
.btn-strongly-disagree:active:focus,
.btn-strongly-disagree.active:focus,
.btn-strongly-disagree:hover {
  background-color: #e28181;
}
.bottom {
  margin-bottom: 100px;
}
.hide {
  display: none;
}
.show {
  display: block;
}
/* RESULTS */
.results {
  font-family: "Montserrat", sans-serif;
  background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/roadmap-mobile.png");
  font-weight:700;
  color: white;
  padding: 20px 20px 20px 0; 
  background-size: cover;
  min-height: 400px;
}
@media (min-width: 768px) {
 .results
 {
  background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/roadmap.png");
 }
  }
.results h3
{
  color: white;
  font-family: "Montserrat", sans-serif;
  text-decoration: none;
  font-size: 2rem;
  height:auto;
}
.results .nC {
  width: 120px;
  line-height: 120px;
  border-radius: 50%;
  text-align: center;
  font-size: 32px;
  border: 2px solid #666;
}
.results ul {
  list-style: none;
  line-height: 1.6rem;
}
 .btn
  {
    font-size: 0.7rem;
        padding: .2rem .5rem;
  }
@media (min-width: 576px) {
  .results {
    font-size: 0.8rem;
        padding: .375rem .75rem;
  }
 .btn
  {
    font-size: 0.8rem;
  }
}
@media (min-width: 768px) {
  .results {
    font-size: .70rem;
  }
  .btn
  {
    font-size: 0.9rem;
  }
}
@media (min-width: 992px) {
  .results {
    font-size: 0.9rem;
  }
  .btn
  {
    font-size: 1rem;
  }
}
@media (min-width: 1200px) {
  .results {
    font-size: 1.4rem;
  }
}
</style>
  <div class="entry-content">
 <div id="roadmap">
    <div class="container-fluid text-center">
      <ul id="quiz" class="list-group">
      </ul>
    </div>
    <div class="container hide results">
    <div class="outside">
      <div class="inside">
        <div class="col-12 col-md-6 offset-md-6 offset-lg-5">
          <h3 class="font-weight-bold text-center mt-5">Your Learning Roadmap</h3>
          <p id="results"></p>
            <div class="container text-center ">
          <button class="btn btn-sm btn-light mb-1" onclick="PrintMap()">Print this page for your reference</button>
          </div>
          <p class="small text-center bottom">* Optional modules that may be of assistance</p>
        </div>
      </div>
    </div>
  </div>
   </div>
  <div class="container text-center bottom">
    <button id="submit-btn" class="btn btn-primary btn-lg mt-4">Submit</button>
  </div>
  </div>
<script>
  //Generate questions, apply weighting
      <?php   if (have_rows('field_5a6816c125812')): ?>
var prompts = [
    <?php $q = 0;
    while (have_rows('field_5a6816c125812')) : the_row(); ?>
    {
       prompt:"<?php the_sub_field('field_5a681fb7a5cc0'); ?>",
       weight:"<?php the_sub_field('field_5a693948b85bf'); ?>",
       class: "group<?php echo $q; ?>",
        // number
     },   
        <?php $q++ ?>
   <?php endwhile;
else : ?>
<?php endif;?>  
];
</script>
<script>
var prompt_values = [
  {
    value: "Strongly Agree",
    class: "btn-default btn-strongly-agree",
    weight: 2
  },
  {
    value: "Agree",
    class: "btn-default btn-agree",
    weight: 1
  },
  {
    value: "Neutral",
    class: "btn-default",
    weight: 0
  },
  {
    value: "Disagree",
    class: "btn-default btn-disagree",
    weight: -1
  },
  {
    value: "Strongly Disagree",
    class: "btn-default btn-strongly-disagree",
    weight: -2
  }
];
function createPromptItems() {
  for (var i = 0; i < prompts.length; i++) {
    var prompt_li = document.createElement("li");
    var prompt_p = document.createElement("p");
    var prompt_text = document.createTextNode(prompts[i].prompt);
    prompt_li.setAttribute("class", "list-group-item prompt");
    prompt_p.appendChild(prompt_text);
    prompt_li.appendChild(prompt_p);
    document.getElementById("quiz").appendChild(prompt_li);
  }
}
function createValueButtons() {
  for (var li_index = 0; li_index < prompts.length; li_index++) {
    var group = document.createElement("div");
    group.className = "btn-group btn-group-justified";
    for (var i = 0; i < prompt_values.length; i++) {
      var btn_group = document.createElement("div");
      btn_group.className = "btn-group";
      var button = document.createElement("button");
      var button_text = document.createTextNode(prompt_values[i].value);
      button.className =
        "group" + li_index + " value-btn btn btn-sm" + prompt_values[i].class;
      button.appendChild(button_text);
      btn_group.appendChild(button);
      group.appendChild(btn_group);
      document.getElementsByClassName("prompt")[li_index].appendChild(group);
    }
  }
}
createPromptItems();
createValueButtons();
var total = 0;
function findPromptWeight(prompts, group) {
  var weight = 0;
  for (var i = 0; i < prompts.length; i++) {
    if (prompts[i].class === group) {
      weight = prompts[i].weight;
    }
  }
  return weight;
}
// Get the weight associated to the value
function findValueWeight(values, value) {
  var weight = 0;
  for (var i = 0; i < values.length; i++) {
    if (values[i].value === value) {
      weight = values[i].weight;
    }
  }
  return weight;
}
$(".value-btn").mousedown(function() {
  var classList = $(this).attr("class");
  var classArr = classList.split(" ");
  var this_group = classArr[0];
  if ($(this).hasClass("active")) {
    $(this).removeClass("active");
    total -=
      findPromptWeight(prompts, this_group) *
      findValueWeight(prompt_values, $(this).text());
  } else {
    total -=
      findPromptWeight(prompts, this_group) *
      findValueWeight(prompt_values, $("." + this_group + ".active").text());
    $("." + this_group).removeClass("active");
    $(this).addClass("active");
    total +=
      findPromptWeight(prompts, this_group) *
      findValueWeight(prompt_values, $(this).text());
  }
  console.log(total);
});
</script>

 <script>
$("#submit-btn").click(function() {
  $(".results").removeClass("hide");
  $(".results").addClass("show");
  if (total > 99999) {
    //Confident
    document.getElementById("results").innerHTML =
     total;

  }
 <?php   if (have_rows('field_5a681ec374a40')):
  // loop through the rows of data
    while (have_rows('field_5a681ec374a40')) : the_row();
        $upper = get_sub_field('field_5a682049db3af');
        $lower = get_sub_field('field_5a681f3774a42');
        $outcome_text = get_sub_field('field_5a693992b85c0');

     echo 'else if (total <= '.$upper.' && total >= '.$lower.') {  
      document.getElementById("results").innerHTML =
       "'.$outcome_text.'";
     }';
    endwhile;

else :
    // no rows found
endif;?> 
  else {
    //neutral answers
    document.getElementById("results").innerHTML =
      "We were not able to suggest a roadmap for the answers you have given.";
  }

  // Hide the quiz after they submit their results
  $("#quiz").addClass("hide");
  $("#submit-btn").addClass("hide");
  $("#retake-btn").removeClass("hide");
});
</script>
<script>
// Refresh the screen to show a new quiz if they click the retake quiz button
$("#retake-btn").click(function() {
  $("#quiz").removeClass("hide");
  $("#submit-btn").removeClass("hide");
  $("#retake-btn").addClass("hide");
  $(".results").addClass("hide");
  $(".results").removeClass("show");
});
//Setup the print dialogue
function PrintMap() {
    window.print();
}
</script>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
<?php 
    endwhile;
else :
    // no rows found
endif;
?>


	<?php 

// check for rows (parent repeater)
if( have_rows('to-do_lists') ): ?>
  <div id="to-do-lists">
  <?php 

  // loop through rows (parent repeater)
  while( have_rows('to-do_lists') ): the_row(); ?>
    <div>
      <h3><?php the_sub_field('title'); ?></h3>
      <?php 

      // check for rows (sub repeater)
      if( have_rows('items') ): ?>
        <ul>
        <?php 

        // loop through rows (sub repeater)
        while( have_rows('items') ): the_row();

          // display each item as a list - with a class of completed ( if completed )
          ?>
          <li <?php if( get_sub_field('completed') ){ echo 'class="completed"'; } ?>><?php the_sub_field('name'); ?></li>
        <?php endwhile; ?>
        </ul>
      <?php endif; //if( get_sub_field('items') ): ?>
    </div>	

  <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
  </div>
<?php endif; // if( get_field('to-do_lists') ): ?>