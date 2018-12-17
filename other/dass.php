

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Embodied Sense of Self Scale</title>
<style type="text/css">

.ans_button
{
	border:2px solid #DEB887;
	background-color:#FFF8DC;
	max-width:500px;display:
	block;padding:5px;
	
	
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently */
}

.ans_button:hover
{
	background-color:#EFE8CC;
}

.redo_button
{
	border:2px solid #556B2F;
	background-color:#F0FFF0;
	max-width:500px;
	padding:2px;
	
	
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently */
}

.redo_button
{
	border:2px solid #556B2F;
	background-color:#F0FFF0;
	max-width:500px;
	padding:2px;
	cursor:pointer;
}

.redo_button:hover
{
	background-color:#E0EFE0;
}

.noselect
{
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently */
}

</style>
<script type="text/javascript">

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}


var basetime = new Date();

var items = 
[
"Q1","Q2","Q3","Q4","Q5","Q6","Q7","Q8","Q9","Q10","Q11","Q12","Q13","Q14","Q15","Q16","Q17","Q18","Q19","Q20","Q21","Q22","Q23","Q24","Q25","Q26","Q27","Q28","Q29","Q30","Q31","Q32","Q33","Q34","Q35","Q36","Q37","Q38","Q39","Q40","Q41","Q42"
];

var itemtext = 
{
"Q1" : "I found myself getting upset by quite trivial things.",
"Q2" : "I was aware of dryness of my mouth.",
"Q3" : "I couldn&#39;t seem to experience any positive feeling at all.",
"Q4" : "I experienced breathing difficulty (eg, excessively rapid breathing, breathlessness in the absence of physical exertion).",
"Q5" : "I just couldn&#39;t seem to get going.",
"Q6" : "I tended to over-react to situations.",
"Q7" : "I had a feeling of shakiness (eg, legs going to give way).",
"Q8" : "I found it difficult to relax.",
"Q9" : "I found myself in situations that made me so anxious I was most relieved when they ended.",
"Q10" : "I felt that I had nothing to look forward to.",
"Q11" : "I found myself getting upset rather easily.",
"Q12" : "I felt that I was using a lot of nervous energy.",
"Q13" : "I felt sad and depressed.",
"Q14" : "I found myself getting impatient when I was delayed in any way (eg, elevators, traffic lights, being kept waiting).",
"Q15" : "I had a feeling of faintness.",
"Q16" : "I felt that I had lost interest in just about everything.",
"Q17" : "I felt I wasn&#39;t worth much as a person.",
"Q18" : "I felt that I was rather touchy.",
"Q19" : "I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion.",
"Q20" : "I felt scared without any good reason.",
"Q21" : "I felt that life wasn&#39;t worthwhile.",
"Q22" : "I found it hard to wind down.",
"Q23" : "I had difficulty in swallowing.",
"Q24" : "I couldn&#39;t seem to get any enjoyment out of the things I did.",
"Q25" : "I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat).",
"Q26" : "I felt down-hearted and blue.",
"Q27" : "I found that I was very irritable.",
"Q28" : "I felt I was close to panic.",
"Q29" : "I found it hard to calm down after something upset me.",
"Q30" : "I feared that I would be &quot;thrown&quot; by some trivial but unfamiliar task.",
"Q31" : "I was unable to become enthusiastic about anything.",
"Q32" : "I found it difficult to tolerate interruptions to what I was doing.",
"Q33" : "I was in a state of nervous tension.",
"Q34" : "I felt I was pretty worthless.",
"Q35" : "I was intolerant of anything that kept me from getting on with what I was doing.",
"Q36" : "I felt terrified.",
"Q37" : "I could see nothing in the future to be hopeful about.",
"Q38" : "I felt that life was meaningless.",
"Q39" : "I found myself getting agitated.",
"Q40" : "I was worried about situations in which I might panic and make a fool of myself.",
"Q41" : "I experienced trembling (eg, in the hands).",
"Q42" : "I found it difficult to work up the initiative to do things."

};

var curindex = 0;
var curitem = "";

function setNextItem()
{
	curitem = items[curindex];
	var itext = itemtext[curitem];

	document.getElementById("itext").innerHTML = itext;
	document.getElementById("countersign").innerHTML = (1+curindex);
	
	basetime = new Date();
	
	if(curindex > 0)
	{
		document.getElementById("undobutton").style.display = "inline";
	}
	else
	{
		document.getElementById("undobutton").style.display = "none";
	}

}

var waiting = false;

function ans_select(ans)
{
	if(!waiting)
	{
		waiting = true;
		setTimeout(function()
		{
			document.getElementById("A"+ans).checked = false;
			document.getElementById(curitem+"A").value = ans;
			document.getElementById(curitem+"I").value = (1+curindex);
			document.getElementById(curitem+"E").value = new Date() - basetime;
			
			if(curindex<41)
			{
				curindex++;			
				setNextItem();
				waiting = false;
			}
			else
			{
				document.getElementById("test").style.display = "none";
				document.getElementById("formdata").submit();
			}
			
		},
		175);
	}
}

function undo()
{
	if(!waiting)
	{
		waiting = true;
		setTimeout(function()
		{
			curindex--;			
			setNextItem();
			waiting = false;
		},
		75);
	}
}

function setup()
{
	shuffle(items);
	setNextItem();
}

window.onload = setup;

</script>
</head>
<body>









<table id="test" style="max-width:500px; width:100%;margin:0 auto;">
<tr>
<td colspan="2">
<big>In the past week...</big>
</td>
</tr>
<tr>
<td width="10px"></td>
<td>
<div id="itext" style="height: 5em;width:100%;max-width:500px;">I felt that I had nothing to look forward to.</div>
</td>
</tr>
<tr><tr>
<td colspan="2">
	<label class="ans_button" onclick="ans_select(1);"> <input type="radio" name="Q" id="A1">&nbsp;Did not apply to me at all </label>
</td>
</tr>
<tr>
<td colspan="2">
	<label class="ans_button" onclick="ans_select(2);"> <input type="radio" name="Q" id="A2">&nbsp;Applied to me to some degree, or some of the time </label>
</td>
</tr>
<tr>
<td colspan="2">
	<label class="ans_button" onclick="ans_select(3);"> <input type="radio"name="Q" id="A3">&nbsp;Applied to me to a considerable degree, or a good part of time </label>
</td>
</tr>
<tr>
<td colspan="2">
	<label class="ans_button" onclick="ans_select(4);"> <input type="radio" name="Q" id="A4">&nbsp;Applied to me very much, or most of the time </label>
</td>
</tr>
<tr>
<td align="right" colspan="2" class="noselect">

<br/>

<span style="display:none;" class="redo_button" onclick="undo();" id="undobutton"> &nbsp;&#8635; redo last question&nbsp; </span> &nbsp;&nbsp;
<span id="countersign"></span> / 42</td>
</tr>
</table>

<form method="POST" action="2.php" id="formdata">

<input type="hidden" name="Q1A" id="Q1A" value="-1" />
<input type="hidden" name="Q1E" id="Q1E" value="-1" />
<input type="hidden" name="Q1I" id="Q1I" value="-1" />
<input type="hidden" name="Q2A" id="Q2A" value="-1" />
<input type="hidden" name="Q2E" id="Q2E" value="-1" />
<input type="hidden" name="Q2I" id="Q2I" value="-1" />
<input type="hidden" name="Q3A" id="Q3A" value="-1" />
<input type="hidden" name="Q3E" id="Q3E" value="-1" />
<input type="hidden" name="Q3I" id="Q3I" value="-1" />
<input type="hidden" name="Q4A" id="Q4A" value="-1" />
<input type="hidden" name="Q4E" id="Q4E" value="-1" />
<input type="hidden" name="Q4I" id="Q4I" value="-1" />
<input type="hidden" name="Q5A" id="Q5A" value="-1" />
<input type="hidden" name="Q5E" id="Q5E" value="-1" />
<input type="hidden" name="Q5I" id="Q5I" value="-1" />
<input type="hidden" name="Q6A" id="Q6A" value="-1" />
<input type="hidden" name="Q6E" id="Q6E" value="-1" />
<input type="hidden" name="Q6I" id="Q6I" value="-1" />
<input type="hidden" name="Q7A" id="Q7A" value="-1" />
<input type="hidden" name="Q7E" id="Q7E" value="-1" />
<input type="hidden" name="Q7I" id="Q7I" value="-1" />
<input type="hidden" name="Q8A" id="Q8A" value="-1" />
<input type="hidden" name="Q8E" id="Q8E" value="-1" />
<input type="hidden" name="Q8I" id="Q8I" value="-1" />
<input type="hidden" name="Q9A" id="Q9A" value="-1" />
<input type="hidden" name="Q9E" id="Q9E" value="-1" />
<input type="hidden" name="Q9I" id="Q9I" value="-1" />
<input type="hidden" name="Q10A" id="Q10A" value="-1" />
<input type="hidden" name="Q10E" id="Q10E" value="-1" />
<input type="hidden" name="Q10I" id="Q10I" value="-1" />
<input type="hidden" name="Q11A" id="Q11A" value="-1" />
<input type="hidden" name="Q11E" id="Q11E" value="-1" />
<input type="hidden" name="Q11I" id="Q11I" value="-1" />
<input type="hidden" name="Q12A" id="Q12A" value="-1" />
<input type="hidden" name="Q12E" id="Q12E" value="-1" />
<input type="hidden" name="Q12I" id="Q12I" value="-1" />
<input type="hidden" name="Q13A" id="Q13A" value="-1" />
<input type="hidden" name="Q13E" id="Q13E" value="-1" />
<input type="hidden" name="Q13I" id="Q13I" value="-1" />
<input type="hidden" name="Q14A" id="Q14A" value="-1" />
<input type="hidden" name="Q14E" id="Q14E" value="-1" />
<input type="hidden" name="Q14I" id="Q14I" value="-1" />
<input type="hidden" name="Q15A" id="Q15A" value="-1" />
<input type="hidden" name="Q15E" id="Q15E" value="-1" />
<input type="hidden" name="Q15I" id="Q15I" value="-1" />
<input type="hidden" name="Q16A" id="Q16A" value="-1" />
<input type="hidden" name="Q16E" id="Q16E" value="-1" />
<input type="hidden" name="Q16I" id="Q16I" value="-1" />
<input type="hidden" name="Q17A" id="Q17A" value="-1" />
<input type="hidden" name="Q17E" id="Q17E" value="-1" />
<input type="hidden" name="Q17I" id="Q17I" value="-1" />
<input type="hidden" name="Q18A" id="Q18A" value="-1" />
<input type="hidden" name="Q18E" id="Q18E" value="-1" />
<input type="hidden" name="Q18I" id="Q18I" value="-1" />
<input type="hidden" name="Q19A" id="Q19A" value="-1" />
<input type="hidden" name="Q19E" id="Q19E" value="-1" />
<input type="hidden" name="Q19I" id="Q19I" value="-1" />
<input type="hidden" name="Q20A" id="Q20A" value="-1" />
<input type="hidden" name="Q20E" id="Q20E" value="-1" />
<input type="hidden" name="Q20I" id="Q20I" value="-1" />
<input type="hidden" name="Q21A" id="Q21A" value="-1" />
<input type="hidden" name="Q21E" id="Q21E" value="-1" />
<input type="hidden" name="Q21I" id="Q21I" value="-1" />
<input type="hidden" name="Q22A" id="Q22A" value="-1" />
<input type="hidden" name="Q22E" id="Q22E" value="-1" />
<input type="hidden" name="Q22I" id="Q22I" value="-1" />
<input type="hidden" name="Q23A" id="Q23A" value="-1" />
<input type="hidden" name="Q23E" id="Q23E" value="-1" />
<input type="hidden" name="Q23I" id="Q23I" value="-1" />
<input type="hidden" name="Q24A" id="Q24A" value="-1" />
<input type="hidden" name="Q24E" id="Q24E" value="-1" />
<input type="hidden" name="Q24I" id="Q24I" value="-1" />
<input type="hidden" name="Q25A" id="Q25A" value="-1" />
<input type="hidden" name="Q25E" id="Q25E" value="-1" />
<input type="hidden" name="Q25I" id="Q25I" value="-1" />
<input type="hidden" name="Q26A" id="Q26A" value="-1" />
<input type="hidden" name="Q26E" id="Q26E" value="-1" />
<input type="hidden" name="Q26I" id="Q26I" value="-1" />
<input type="hidden" name="Q27A" id="Q27A" value="-1" />
<input type="hidden" name="Q27E" id="Q27E" value="-1" />
<input type="hidden" name="Q27I" id="Q27I" value="-1" />
<input type="hidden" name="Q28A" id="Q28A" value="-1" />
<input type="hidden" name="Q28E" id="Q28E" value="-1" />
<input type="hidden" name="Q28I" id="Q28I" value="-1" />
<input type="hidden" name="Q29A" id="Q29A" value="-1" />
<input type="hidden" name="Q29E" id="Q29E" value="-1" />
<input type="hidden" name="Q29I" id="Q29I" value="-1" />
<input type="hidden" name="Q30A" id="Q30A" value="-1" />
<input type="hidden" name="Q30E" id="Q30E" value="-1" />
<input type="hidden" name="Q30I" id="Q30I" value="-1" />
<input type="hidden" name="Q31A" id="Q31A" value="-1" />
<input type="hidden" name="Q31E" id="Q31E" value="-1" />
<input type="hidden" name="Q31I" id="Q31I" value="-1" />
<input type="hidden" name="Q32A" id="Q32A" value="-1" />
<input type="hidden" name="Q32E" id="Q32E" value="-1" />
<input type="hidden" name="Q32I" id="Q32I" value="-1" />
<input type="hidden" name="Q33A" id="Q33A" value="-1" />
<input type="hidden" name="Q33E" id="Q33E" value="-1" />
<input type="hidden" name="Q33I" id="Q33I" value="-1" />
<input type="hidden" name="Q34A" id="Q34A" value="-1" />
<input type="hidden" name="Q34E" id="Q34E" value="-1" />
<input type="hidden" name="Q34I" id="Q34I" value="-1" />
<input type="hidden" name="Q35A" id="Q35A" value="-1" />
<input type="hidden" name="Q35E" id="Q35E" value="-1" />
<input type="hidden" name="Q35I" id="Q35I" value="-1" />
<input type="hidden" name="Q36A" id="Q36A" value="-1" />
<input type="hidden" name="Q36E" id="Q36E" value="-1" />
<input type="hidden" name="Q36I" id="Q36I" value="-1" />
<input type="hidden" name="Q37A" id="Q37A" value="-1" />
<input type="hidden" name="Q37E" id="Q37E" value="-1" />
<input type="hidden" name="Q37I" id="Q37I" value="-1" />
<input type="hidden" name="Q38A" id="Q38A" value="-1" />
<input type="hidden" name="Q38E" id="Q38E" value="-1" />
<input type="hidden" name="Q38I" id="Q38I" value="-1" />
<input type="hidden" name="Q39A" id="Q39A" value="-1" />
<input type="hidden" name="Q39E" id="Q39E" value="-1" />
<input type="hidden" name="Q39I" id="Q39I" value="-1" />
<input type="hidden" name="Q40A" id="Q40A" value="-1" />
<input type="hidden" name="Q40E" id="Q40E" value="-1" />
<input type="hidden" name="Q40I" id="Q40I" value="-1" />
<input type="hidden" name="Q41A" id="Q41A" value="-1" />
<input type="hidden" name="Q41E" id="Q41E" value="-1" />
<input type="hidden" name="Q41I" id="Q41I" value="-1" />
<input type="hidden" name="Q42A" id="Q42A" value="-1" />
<input type="hidden" name="Q42E" id="Q42E" value="-1" />
<input type="hidden" name="Q42I" id="Q42I" value="-1" />

<input type="hidden" name="unqid" value="5bbe491fb4c87" />
<input type="hidden" name="seconds" value="1539197329" />
</form>












</body>
</html>