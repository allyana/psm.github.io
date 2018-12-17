<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<title>Registration Page</title>
<link rel="stylesheet" href="Counselling/style.css">
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

.scores div.alt, .scores > div:nth-child(even)
{
  background-color: #E8E8E4;
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

.scores
{
  width: 100%;
  height: 400px;
  position: relative;
}

.scores .discipline
{
  display: block;
  position: absolute;
  bottom: 0;
  text-align: center;
  background: #E8E8E4 url(../images/gifts_orange.png) no-repeat 0 0;
  border: 1px solid #FFFFFF;
}

.scores .discipline .discipline-name
{
  text-align: center;
  position: relative;
  bottom: 24px;
  z-index: 200;
  font-family: "Futura Lt BT" , helvetica, sans-serif;
}

.scores .discipline .discipline-total
{
  text-align: center;
  display: block;
  font-weight: bold;
  font-size: 150%;
  font-family: "Futura Md BT" , helvetica, sans-serif;
  margin-top: 0px;
}

.scores .selected
{
  background: #1047a9 url(../images/gifts_blue.png) no-repeat 0 0 !important;
}

.scores .selected .discipline-total
{
  color: #FFFFFF !important;
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


    .box:before, .box:after 
    {
      z-index: -1; 
      position: absolute; 
      content: "";
      bottom: 15px;
      left: 10px;
      width: 50%; 
      top: 80%;
      max-width:300px;
      background: rgba(0, 0, 0, 0.7); 
      -webkit-box-shadow: 0 15px 10px rgba(0,0,0, 0.7);   
      -moz-box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
      box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
      -webkit-transform: rotate(-3deg);    
      -moz-transform: rotate(-3deg);   
      -o-transform: rotate(-3deg);
      -ms-transform: rotate(-3deg);
      transform: rotate(-3deg);
    }

    .box:after 
    {
      -webkit-transform: rotate(3deg);
      -moz-transform: rotate(3deg);
      -o-transform: rotate(3deg);
      -ms-transform: rotate(3deg);
      transform: rotate(3deg);
      right: 10px;
      left: auto;
    }

.rotate
{
  /* Safari */
  -webkit-transform: rotate(-90deg); /* Firefox */
  -moz-transform: rotate(-90deg); /* IE  -ms-transform: rotate(-90deg); */ /* Opera */
  -o-transform: rotate(-90deg);
}

</style>


<form>
    <ol id="survey1" class="survey">
  <li class="question" title="Prophecy">When a situation needs to be corrected I feel a burden to speak up about it in order to correct it.</li>
  <li class="question" title="Shepherd">I feel a special concern for less mature Christians and feel compelled to care for them spiritually.</li>
  <li class="question" title="Teaching">I find it easy and enjoyable to spend time in intensive Bible study.</li>
  <li class="question" title="Encouraging">I am able to help others identify problems and offer solutions.</li>
  <li class="question" title="Giving">I don't understand why others don't give as much and as freely as I do.</li>
  <li class="question" title="Mercy">I am comfortable visiting people who are sick and disabled.</li>
  <li class="question" title="Evangelism">I have greater desire than most to witness to non-Christians.</li>
  <li class="question" title="Administration">If there is no leadership in a group I will step up and take charge.</li>
  <li class="question" title="Serving">I enjoy being called upon to do special jobs around the church.</li>
  <li class="question" title="Prophecy">When issues are being dealt with in a group, I speak up rather than just listening.</li>
  <li class="question" title="Shepherd">I find myself especially concerned that newer Christians will be influenced by false teachers and be harmed in their spiritual growth as a result. </li>
  <li class="question" title="Teaching">Others sometimes accuse me of being too technical or detail-oriented. </li>
  <li class="question" title="Encouraging">I would rather talk personally with someone rather than refer them elsewhere. </li>
  <li class="question" title="Giving">I find myself looking for opportunities to give my money without being asked to give. </li>
  <li class="question" title="Mercy">I have a tendency to think about things for a while before making a decision. </li>
  <li class="question" title="Evangelism">Witnessing to non-Christians comes easily to me. </li>
  <li class="question" title="Administration">I enjoy handling the details of organizing ideas, people, resources, and time in order to have more effective ministry. </li>
  <li class="question" title="Serving">I feel that I am not specifically skilled, but I enjoy doing what needs to be done around the church. </li>
</ol>
</form>

<script>

/*global localStorage: false, console: false, document: false, window: false, alert: false, jQuery: false */
/*properties addClass, after, animate, append, appendChild, attr, change, childElementCount, children, click, closest, createElement, css, discipline, each, empty, eq, extend, filter, firstChild, floor, fn, getElementById, getItem, height, hide, highOpinionAnswer, innerHTML, insertBefore, left, length, localStorage, lowOpinionAnswer, name, numericScale, offset, parse, prepend, push, question, removeAttr, responseRange, scrollTop, setItem, show, sort, splice, stringify, substr, target, text, top, topNumber, val, value, width, wrap */
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
            // Create a LocalStorage item for each question.
            //check to see if the discipline's localstorage item is already set.
            if (localStorage.getItem(oList.attr('id') + "_" + qName)) {
              if (localStorage.getItem(oList.attr('id') + "_" + qName) === i) {
                question += " checked='checked'";
              }
            }

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
        // Handler:
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
          var surveyId, dNumber, dWidth, maxHeight, 
              barHeight, tallBarHeight, i, ii, dScore, discipline;
          // Create visual elements for scores.
          surveyId = 'div#scores-' + $list.attr('id');
          dNumber = 0;
          maxHeight = 350;
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

              $(surveyId).append("<div id='" 
                + scores[i].discipline 
                + "' class='discipline'><div class='discipline-name'>" 
                + scores[i].discipline 
                + "</div><div class='discipline-total'>" 
                + dScore + "</div>" + "</div>");
              if (dScore > tallBarHeight) {
                tallBarHeight = dScore;
              }
            }

            $(surveyId).show('fast');
          }

          dWidth = 100 / dNumber;
          for (ii = 0; ii < dNumber; ii += 1) {
            $('.scores .discipline').eq(ii).css({
              'left': Math.floor(dWidth) * ii + '%'
            });
            $('.scores .discipline').eq(ii).css({
              'width': (Math.floor(dWidth) - 1) + '%'
            });
            barHeight = Math.floor((disciplines[ii].value / tallBarHeight) * maxHeight);
            $('.scores .discipline').eq(ii).animate({
              height: barHeight
            }, 2000);
            $('.scores .discipline'); //.addClass('box');
          }

          getHighestValues();

          $list.hide();
          $('#submitBtn').hide();

          $('[id*="btnSaveGifts"]').show();
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

</head>
</html>