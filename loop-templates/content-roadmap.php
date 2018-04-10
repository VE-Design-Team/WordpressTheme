<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<style>
.survey-wrapper
{
  position: relative;
  display: table;
  width: 100%; /*height: 500px;*/
  max-width: 640px;
  border-collapse: separate !important;
  border-spacing: 1px !important;
}

ol.survey
{
  list-style: decimal; /*margin-top: 160px;*/
  list-style-position: inside;
}

ol.survey > li:last-child
{
  border-bottom: 1px solid #CDCDCD;
}

ol.survey li
{
  padding-left: -20px;
  border-top: 1px solid #CDCDCD;
  border-right: 1px solid #CDCDCD;
  border-left: 1px solid #CDCDCD;
}

ol.survey li.alt, ol.survey li:nth-child(even)
{
  background-color: #E8E8E4;
}

.scores > div
{
  background: #E8E8E4;
}



ol.survey li .opinion-question
{
  margin-bottom: 0.5em;
  font-weight: bold;
}

ol.survey li
{
  padding-top: 6px;
  padding-bottom: 1px;
  padding-left: 12px;
}

ol.survey li .opinion-responses
{
  display: table;
  width: 100%;
  margin-bottom: 1.0em;
}

ol.survey li .opinion-responses .bipolar-adjective
{
  display: table-cell;
  width: 25%;
  text-align: center;
  vertical-align: middle;
  font-style: italic;
}

ol.survey li .opinion-responses .response-choice
{
  display: table-cell;
  width: 10px;
  text-align: center;
  vertical-align: middle;
}

ol.survey li .opinion-responses .response-choice input[type=radio], ol.survey li .opinion-responses .response-choice input.radio
{
}












    .box 
    {
      position: relative;
      width: 60%;
      background: #ddd;
      -moz-border-radius: 4px;
      border-radius: 4px;
      padding: 2em 1.5em;
      color: rgba(0,0,0, .8);
      text-shadow: 0 1px 0 #fff;
      line-height: 1.5;
      margin: 60px auto;
    }


    
 




</style>
<form>
  <ol class="survey" id="survey1">
    <li class="question" title="Prophecy">When a situation needs to be corrected I feel a burden to speak up about it in order to correct it.</li>
    <li class="question" title="Shepherd">I feel a special concern for less mature Christians and feel compelled to care for them spiritually.</li>
    <li class="question" title="Random">RandomI find it easy and enjoyable to spend time in intensive Bible study.</li>
    <li class="question" title="Encouraging">I am able to help others identify problems and offer solutions.</li>
    <li class="question" title="Giving">I don't understand why others don't give as much and as freely as I do.</li>
    <li class="question" title="Mercy">I am comfortable visiting people who are sick and disabled.</li>
    <li class="question" title="Evangelism">I have greater desire than most to witness to non-Christians.</li>
    <li class="question" title="Administration">If there is no leadership in a group I will step up and take charge.</li>
    <li class="question" title="Serving">I enjoy being called upon to do special jobs around the church.</li>
    <li class="question" title="Something">When issues are being dealt with in a group, I speak up rather than just listening.</li>
    <li class="question" title="Shepherd">I find myself especially concerned that newer Christians will be influenced by false teachers and be harmed in their spiritual growth as a result.</li>
    <li class="question" title="Teaching">Others sometimes accuse me of being too technical or detail-oriented. </li>
    <li class="question" title="Encouraging">I would rather talk personally with someone rather than refer them elsewhere. </li>
    <li class="question" title="Another">I find myself looking for opportunities to give my money without being asked to give.</li>
    <li class="question" title="Mercy">I have a tendency to think about things for a while before making a decision. </li>
    <li class="question" title="Evangelism">Witnessing to non-Christians comes easily to me. </li>
    <li class="question" title="Administration">I enjoy handling the details of organizing ideas, people, resources, and time in order to have more effective ministry.</li>
    <li class="question" title="Serving">I feel that I am not specifically skilled, but I enjoy doing what needs to be done around the church.</li>
  </ol>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>

//

function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("scores-survey1");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("LI");
    //Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*check if the next item should
      switch place with the current item:*/
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /*if next item is alphabetically
        lower than current item, mark as a switch
        and break the loop:*/
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark the switch as done:*/
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
};
(function ($) {
  "use strict";
  $.fn.extend({
    numericScale: function (options) {
      var defaults, scores, key, disciplines, aHighVals;
      defaults = {
        responseRange: 5,
        topNumber: 3,
        lowOpinionAnswer: 'Least like me',
        highOpinionAnswer: 'Most like me'
      };

      scores = []; // Creates an empty scores array.
      disciplines = [];
      aHighVals = [];

      options = $.extend({}, defaults, options);

      // Act on every target of the plugin.
      return this.each(function () {
        var $list = $(this);
        key = $list.attr('id') + "_key";

        function createScore(oItem, d, qName) {
          var score = {};
          score.question = qName;
          score.value = oItem.val();
          score.discipline = d;
          scores.push(score);
        }

        function addScoresToPage(score) {
          $('input:radio[name=' + score.question + '][value=' + score.value + ']')
            .attr('checked', 'checked');
        }

        function loadScores() {
          var jsonScores, i;
          jsonScores = localStorage.getItem(key);
          if (jsonScores !== null) {
            scores = JSON.parse(jsonScores);
            for (i = 0; i < scores.length; i += 1) {
              addScoresToPage(scores[i]);
            }
          }
        }

        function storeScores() {
          var jsonScores = JSON.stringify(scores);
          localStorage.setItem(key, jsonScores);
        }

        function createQuestion(oList, oItem, index) {
          var title, qName, question, i;
          // Add the 'title' of the list item to the 'KWMAPP.oSurvey.disciplines' object.
          title = oItem.attr('title');
          qName = "q" + (index + 1);

          // Create score items in scores Array.
          createScore(oItem, title, qName);

          question = "<div class='opinion-question'>"
            + oItem.text()
            + "</div>"
            + "<div class='opinion-responses'>"
            + "<span class='bipolar-adjective'>"
            + options.lowOpinionAnswer
            + "</span>";
          // Create a radio button group for each question.
          for (i = 1; i <= options.responseRange; i += 1) {
            question += "<span class='response-choice'><input type='radio' " 
              + "name='" + qName 
              + "' value='" + i 
              + "' class='radio'";
 

     

            // Add required attribute to first radio button in group to allow 
            // validation with the jquery.validate.js plugin.
            if (i === 1) {
              question += " validate='required:true'";
            }

            question += " />" + i + "</span>";
          }
          question += "<span class='bipolar-adjective'>" 
            + options.highOpinionAnswer 
            + "</span>" 
            + "</div>";
          oItem.empty()
            .prepend(question).attr('data-discipline', oItem.attr('title'))
            .removeAttr('title');
        }


        // Replace each child element (li) in this list with survey controls.
        $($list).children().each(function (index) {
          createQuestion($list, $(this), index);
        }).filter(':odd').addClass('alt'); // End of function for each 
                                           // child of target element.

        // Set up actions based on the disciplines. 
        $list.wrap('<div id="wrap-' 
          + $list.attr('id') 
          + '" class="survey-wrapper"></div>');
        $list.after('<div id="scores-' 
          + $list.attr('id') 
          + '" class="scores"></div>');
        $list.after('<input type="button" id="submitBtn" class="button btnStyle" ' 
          + 'value="Show My Gifts" />');

        $('#scores-' + $list.attr('id')).hide();

        loadScores();
        
        // ====================
        // Handler://
        // ====================
        $('input[type="radio"]').change(function (e) {
          var discipline, qNum;
          // Get the discipline of the question that is being rated.
          discipline = $(e.target)
            .closest('li[class~="question"]')
            .attr('data-discipline');
          qNum = $(e.target).attr('name').substr(1) - 1;

          // Replace the question's object property 'value' in 
          // the Scores array with the new selection
          scores[qNum].value = $(e.target).val();
          storeScores();
          //setSubmitBtnState();
        });

        function tallyDiscipline(discipline) {
          
          var total, i;
          total = 0;
          for (i = 0; i < scores.length; i += 1) {
            if (scores[i].discipline === discipline) {
              total += parseInt(scores[i].value, 10);
            }
            
          }
          return total;
     
        }

        function mySorting(a, b) {
          a = a[0];
          b = b[0];
          return b === a ? 0 : (b < a ? -1 : 1);
        }

        function getHighestValues() {
          var i, ii;
          for (i = 0; i < disciplines.length; i += 1) {
            aHighVals[i] = [disciplines[i].value, disciplines[i].name];
          }
          aHighVals.sort(mySorting);
          aHighVals.splice(options.topNumber, aHighVals.length - options.topNumber);

          for (ii = 0; ii < aHighVals.length; ii += 1) {
            $('#' + aHighVals[ii][1]).addClass('selected');
            $('input[id*="hdnSelectedVals"]')
              .val($('input[id*="hdnSelectedVals"]')
              .val() + aHighVals[ii][1]);
            if (aHighVals.length - 1 > ii) {
              $('input[id*="hdnSelectedVals"]')
                .val($('input[id*="hdnSelectedVals"]')
                .val() + ", ");
             
            }
         
          }
        }

        function submitSurvey() {
          var surveyId, dNumber, dWidth,  
              barHeight, tallBarHeight, i, ii, dScore, discipline;
          // Create visual elements for scores.
          surveyId = 'div#scores-' + $list.attr('id');
          dNumber = 0;
    
          tallBarHeight = 0;
          $(surveyId).empty();
          for (i = 0; i < scores.length; i += 1) {
            if ($('div#' + scores[i].discipline).length === 0) {
              dScore = tallyDiscipline(scores[i].discipline);
              dNumber += 1;

              discipline = {};
              discipline.name = scores[i].discipline;
              discipline.value = dScore;

              disciplines.push(discipline);

              $(surveyId).append("<li id='" 
                + scores[i].discipline 
                + "' value='"+ dScore + "' class='"+ dScore + "'><span class='discipline-total'>" 
                + dScore + "</span><span class='discipline-name'>" 
                + scores[i].discipline 
                + "</span></li>");
              
               
        //
              
              if (dScore > tallBarHeight) {
                tallBarHeight = dScore;
              }
              
            }

            $(surveyId).show('fast');
          
          }

          dWidth = 100 / dNumber;
          for (ii = 0; ii < dNumber; ii += 1) {
           
            $('.scores .discipline'); 
            
            //.addClass('box');
          }

          getHighestValues();

          $list.hide();
          $('#submitBtn').hide();

          $('[id*="btnSaveGifts"]').show();
    
          sortList();
        }

        // ====================
        // Handler:
        // ====================
        $("#submitBtn").click(function () {
          if (!window.localStorage) {
            alert("The Web Storage API is not supported in your browser. " 
              + "You may still submit the form, but your answers will not " 
              + "be saved to your browser.");
          } else {
            submitSurvey();
            $('html, body').animate({
              scrollTop: $("html, body").offset().top
            }, 1000);
          }
        });

      });
    }
  });
})(jQuery);


var disciplines = $('#survey1').numericScale({
  'responseRange' : 5,
  'lowOpinionAnswer' : 'Least like me',
  'highOpinionAnswer' : 'Most like me'
});



</script>