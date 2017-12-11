<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<style>
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
  background-color: rgba(137, 137, 137, 0.5);
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
  background-size: cover;
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1534167/roadmap.png");
  font-weight: 800;
  color: white;
  padding: 20px 20px 20px 0;
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
}
@media (min-width: 576px) {
  .results {
    font-size: 0.4rem;
  }
}
@media (min-width: 768px) {
  .results {
    font-size: .70rem;
  }
}
@media (min-width: 992px) {
  .results {
    font-size: 0.9rem;
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
    <div class="container text-center">
      <ul id="quiz" class="list-group">
      </ul>
    </div>
    <div class="container hide results embed-responsive-4by3 ">
      <div class="embed-responsive-item">
        <div class="col-6 offset-5 pt-5 pl-5">
          <h3 class="font-weight-bold  text-center"><u>Your Learning Roadmap</u></h3>
         
          <p id="results"></p>
          <p class="small text-center">* Optional modules that may be of assistance</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center bottom">
    <button id="submit-btn" class="btn btn-primary btn-lg mt-4">Submit</button>
  </div>

  </div>
<script>

var prompts = [
  {
    prompt:
      "I find it very easy to read and understand English on a computer screen.",
    weight: -1,
    class: "group0"
  },
  {
    prompt:
      "I often upload photos and videos to digital social media like Facebook, Instagram or online messenging services.",
    weight: -1,
    class: "group1"
  },
  {
    prompt:
      "I know a lot about the different support services available in the aged care sector.",
    weight: -1,
    class: "group2"
  },
  {
    prompt:
      "I find it easy to explain my culture and cultural practices to people from different cultures to mine.",
    weight: -1,
    class: "group3"
  },
  {
    prompt:
      "I find filling out forms easy and rarely need to ask for help to complete them.",
    weight: -1,
    class: "group4"
  },
  {
    prompt:
      "I understand what duty of care is and know how to apply it in a residential aged care facility.",
    weight: -1,
    class: "group5"
  },
  {
    prompt: "I know how to safely use a lifting machine to move a resident.",
    weight: 1,
    class: "group6"
  },
  {
    prompt:
      "If I see a liquid spilt on the ground at work, I know the steps to take before cleaning it up.",
    weight: 1,
    class: "group8"
  },
  {
    prompt:
      "I have participted in continuous improvement activities in a residential aged care facility.",
    weight: 1,
    class: "group9"
  }
];

var prompt_values = [
  {
    value: "Strongly Agree",
    class: "btn-default btn-strongly-agree",
    weight: 5
  },
  {
    value: "Agree",
    class: "btn-default btn-agree",
    weight: 3
  },
  {
    value: "Neutral",
    class: "btn-default",
    weight: 0
  },
  {
    value: "Disagree",
    class: "btn-default btn-disagree",
    weight: -3
  },
  {
    value: "Strongly Disagree",
    class: "btn-default btn-strongly-disagree",
    weight: -5
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

$("#submit-btn").click(function() {

  $(".results").removeClass("hide");
  $(".results").addClass("show");

  if (total < 0) {

    document.getElementById("results").innerHTML =
      "<ul>    <li><b>1)</b> Continuous improvement</li>    <li><b>2)</b> Legal and ethical requirements</li>    <li><b>3)</b> Diversity in aged care</li>    <li><b>4)</b> Safety Hazards and risk management</li>    <li><b>5)</b> Communicating and working with others</li>    <li><b>6)</b> Introduction to aged care</li>    <li><b>7)</b> RMIT learning Lab*</li>    <li><b>8)</b> RMIT study support*</li>    <li><b>9)</b> Canvas in this course*</li></ul>";
  } else if (total > 0) {
    document.getElementById("results").innerHTML =
      "<ul>    <li><b>1)</b> RMIT learning Lab*</li>    <li><b>2)</b> RMIT study support*</li>    <li><b>3)</b> Canvas in this course*</li>    <li><b>4)</b> Introduction to aged care</li>    <li><b>5)</b> Diversity in aged care</li>    <li><b>6)</b> Communicating and working with others</li>    <li><b>7)</b> Legal and ethical requirements</li>    <li><b>8)</b> Safety Hazards and risk management</li>    <li><b>9)</b> Continuous improvement</li></ul>";
  } else {
    //neutral answers
    document.getElementById("results").innerHTML =
      "<ul><li><b>1)</b> RMIT learning Lab*</li>    <li><b>2)</b> Canvas in this course*</li>    <li><b>3)</b> Introduction to aged care</li>    <li><b>4)</b> Diversity in aged care</li>    <li><b>5)</b> RMIT study support*</li>    <li><b>6)</b> Continuous improvement</li>    <li><b>7)</b> Communicating and working with others</li>    <li><b>8)</b> Legal and ethical requirements</li>    <li><b>9)</b> Safety Hazards and risk management</li></ul>";
  }

  // Hide the quiz after they submit their results
  $("#quiz").addClass("hide");
  $("#submit-btn").addClass("hide");
  $("#retake-btn").removeClass("hide");
});

// Refresh the screen to show a new quiz if they click the retake quiz button
$("#retake-btn").click(function() {
  $("#quiz").removeClass("hide");
  $("#submit-btn").removeClass("hide");
  $("#retake-btn").addClass("hide");

  $(".results").addClass("hide");
  $(".results").removeClass("show");
});

</script>
	</div><!-- .entry-content -->



</article><!-- #post-## -->
