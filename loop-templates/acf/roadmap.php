
<style>
















</style>

<form>




 

      <?php 

      // check for rows (sub repeater)
      if( have_rows('field_5a68162825811') ): ?>
       <ol class="survey" id="survey1">
        <?php 

        // loop through rows (sub repeater)
        while( have_rows('field_5a68162825811') ): the_row();

          // display each item as a list - with a class of completed ( if completed )
          ?>
          <li class="question" title="<?php the_sub_field('field_5a681ec374a40'); ?>"><?php the_sub_field('field_5a6816c125812'); ?></li>
         
        <?php endwhile; ?>
        </ol>
      <?php endif; //if( get_sub_field('items') ): ?>
 


</form>
 


<script>
//
localStorage.clear();
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
        lowOpinionAnswer: 'Strongly agree',
        highOpinionAnswer: 'Strongly disagree'
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
  'lowOpinionAnswer' : 'Strongly agree',
  'highOpinionAnswer' : 'Strongly disagree'
});


</script>

