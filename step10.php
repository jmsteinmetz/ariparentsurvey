<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step9='1' WHERE KeyID = '" . $token . "'";
$retval = mysql_query( $sql, $conn );

$result = mysql_query("SELECT * FROM tblusers WHERE KeyID='" . $token ."'");
if(mysql_num_rows($result) > 0)
    while($show = mysql_fetch_array($result))
    {
		if ($show["step12"] == '1') { 
			header("Location: step13.php?token=" . $token);
		} elseif ($show["step11"] == '1') { 
			header("Location: step12.php?token=" . $token);
		} elseif ($show["step10"] == '1') { 
			header("Location: step11.php?token=" . $token);
		} else {
			//do nothing
		}
    }
else
   //header("Location: index.php");
mysql_close($conn);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Autism Research Institute : 2013 Parent Survey</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Admin Panel Template">
<!-- styles -->
<?php include("inc/stylesheets.html"); ?>
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie/ie7.css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie/ie8.css" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie/ie9.css" />
<![endif]-->
<!--fav and touch icons -->
<link rel="shortcut icon" href="ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<style>
#main-content {
	margin: 0 auto;
	width: 960px;
}
.white-box .form-actions { padding: 17px 20px 18px 0px }
</style>
<script language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
	$(function() {
		
		$('#arisurvey textarea').blur(function() {
				var fieldid = $(this).attr("name");
				var label = $(this).attr('data');
				var value = $(this).val();
				var token = "<?php echo $token ?>";
				$.ajax({
					url: 'submit.php',
					data: "label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token,
					success: function(response) {           
						console.log("label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token);
						console.log(response);
					}
				});
		});
		$('#arisurvey input[type=text]').blur(function() {
				var fieldid = $(this).attr("name");
				var label = $(this).attr('data');
				var value = $(this).val();
				var token = "<?php echo $token ?>";
				$.ajax({
					url: 'submit.php',
					data: "label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token,
					success: function(response) {           
						console.log("label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token);
						console.log(response);
					}
				});
		});
		$('#arisurvey input').change(function(){
				var fieldid = $(this).attr("name");
				var label = $(this).attr('data');
				var value = $(this).val();
				var token = "<?php echo $token ?>";
				$.ajax({
					url: 'submit.php',
					data: "label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token,
					success: function(response) {           
						console.log("label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token);
						console.log(response);
					}
				});
		});
    });
</script>
</head>
<body>
<div id="main-content">
<div class="container-fluid">
  <div class="page-header">
    <h1>The Autism Research Institute <small>2013 Parent Survey</small></h1>
  </div>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-block">
        <div class="widget-head">
          <h5>Questions 71-80</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
              	<div id="field71-container" class="field f_100 radio-group required">
                  <label for="field71"> 71. (Age 3-5) Does the child typically say "Yes" by repeating the same question he/she has been asked? (Example: You ask "Shall we go for a walk, Honey?" and he/she indicates he/she does want to by saying "Shall we go for a walk, Honey?" or "Shall we go for a walk?&quot;) </label>
                  <div class="option clearfix">
                    <input data="71. (Age 3-5) Does the child typically say "Yes" by repeating the same question he/she has been asked?" name="field71" id="field71a" value="Yes, definitely, does not say &quot;yes&quot; directly " type="radio">
                    <span class="option-title"> Yes, definitely, does not say "yes" directly </span> </div>
                  <div class="option clearfix">
                    <input data="71. (Age 3-5) Does the child typically say "Yes" by repeating the same question he/she has been asked?" name="field71" id="field71b" value="No, would say &quot;Yes&quot; or &quot;OK&quot; or similar answer" type="radio">
                    <span class="option-title"> No, would say "Yes" or "OK" or similar answer </span> </div>
                  <div class="option clearfix">
                    <input data="71. (Age 3-5) Does the child typically say "Yes" by repeating the same question he/she has been asked?" name="field71" id="field71c" value="Not sure " type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="71. (Age 3-5) Does the child typically say "Yes" by repeating the same question he/she has been asked?" name="field71" id="field71d" value="Too little speech to say" type="radio">
                    <span class="option-title"> Too little speech to say </span></div>
                </div>
                <div id="field72-container" class="field f_100 radio-group required">
                  <label for="field72"> 72. (Before age 5) Has the child asked for something by using the same sentence you would use when you offer it to him/her? (Example: The child wants milk, so he/she says: "Do you want some milk?" or "You want some milk?") </label>
                  <div class="option clearfix">
                    <input data=" 72. (Before age 5) Has the child asked for something by using the same sentence you would use when you offer it to him/her?" name="field72" id="field72a" value="Yes, definitely (uses &quot;You&quot; instead of &quot;I&quot;) " type="radio">
                    <span class="option-title"> Yes, definitely (uses "You" instead of "I") </span> </div>
                  <div class="option clearfix">
                    <input data=" 72. (Before age 5) Has the child asked for something by using the same sentence you would use when you offer it to him/her?" name="field72" id="field72b" value="No, would ask differently " type="radio">
                    <span class="option-title"> No, would ask differently </span> </div>
                  <div class="option clearfix">
                    <input data=" 72. (Before age 5) Has the child asked for something by using the same sentence you would use when you offer it to him/her?" name="field72" id="field72c" value="Not sure " type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data=" 72. (Before age 5) Has the child asked for something by using the same sentence you would use when you offer it to him/her?" name="field72" id="field72d" value="Not enough speech to tell " type="radio">
                    <span class="option-title"> Not enough speech to tell </span></div>
                </div>
                <div id="field73-container" class="field f_100 radio-group required">
                  <label for="field73"> 73. (Before age 5) Has the child used the word "I"? </label>
                  <div class="option clearfix">
                    <input data="73. (Before age 5) Has the child used the word "I"?" name="field73" id="field73a" value="Has used &quot;I&quot; fairly often and correctly " type="radio">
                    <span class="option-title"> Has used "I" fairly often and correctly </span> </div>
                  <div class="option clearfix">
                    <input data="73. (Before age 5) Has the child used the word "I"?" name="field73" id="field73b" value="Seldom has used &quot;I&quot;, but has used it correctly" type="radio">
                    <span class="option-title"> Seldom has used "I", but has used it correctly </span> </div>
                  <div class="option clearfix">
                    <input data="73. (Before age 5) Has the child used the word "I"?" name="field73" id="field73c" value="Has used sentences, but hasn't used the word &quot;I&quot; " type="radio">
                    <span class="option-title"> Has used sentences, but hasn't used the word "I" </span> </div>
                  <div class="option clearfix">
                    <input data="73. (Before age 5) Has the child used the word "I"?" name="field73" id="field73d" value="Has used a number of words or phrases, but hasn't used the word &quot;I&quot;" type="radio">
                    <span class="option-title"> Has used a number of words or phrases, but hasn't used the word "I" </span></div>
                  <div class="option clearfix">
                    <input data="73. (Before age 5) Has the child used the word "I"?" name="field73" id="field73e" value="Has used &quot;I&quot;, but only where word &quot;you&quot; belonged " type="radio">
                    <span class="option-title"> Has used "I", but only where word "you" belonged </span></div>
                  <div class="option clearfix">
                    <input data="73. (Before age 5) Has the child used the word "I"?" name="field73" id="field73f" value="Has no speech, or too little speech to tell " type="radio">
                    <span class="option-title"> Has no speech, or too little speech to tell </span> </div>
                </div>
                <div id="field74-container" class="field f_100 radio-group required">
                  <label for="field74-1"> 74.(Before age 5) How does the child usually say "No" or refuse something? </label>
                  <div class="option clearfix">
                    <input data="74.(Before age 5) How does the child usually say "No" or refuse something?" name="field74" id="field74a" value="He/she would just say &quot;No&quot; " type="radio">
                    <span class="option-title"> He/she would just say "No" </span> </div>
                  <div class="option clearfix">
                    <input data="74.(Before age 5) How does the child usually say "No" or refuse something?" name="field74" id="field74b" value="He/she would ignore you " type="radio">
                    <span class="option-title"> He/she would ignore you </span> </div>
                  <div class="option clearfix">
                    <input data="74.(Before age 5) How does the child usually say "No" or refuse something?" name="field74" id="field74c" value="He/she would grunt and wave his/her arms " type="radio">
                    <span class="option-title"> He/she would grunt and wave his/her arms </span> </div>
                  <div class="option clearfix">
                    <input data="74.(Before age 5) How does the child usually say "No" or refuse something?" name="field74" id="field74d" value="He/she would use some rigid meaningful phrase " type="radio">
                    <span class="option-title"> He/she would use some rigid meaningful phrase </span> (like &quot;Don't want it!&quot; or &quot;no milk!,&quot; &quot;No walk!&quot;)</div>
                  <div class="option clearfix">
                    <input data="74.(Before age 5) How does the child usually say "No" or refuse something?" name="field74" id="field74e" value="Would use phrase having only private meaning like &quot;Daddy go in car&quot; " type="radio">
                    <span class="option-title"> Would use phrase having only private meaning like "Daddy go in car" </span></div>
                  <div class="option clearfix">
                    <input data="74.(Before age 5) How does the child usually say "No" or refuse something?" name="field74" id="field74f" value="Other, or too little speech to tell " type="radio">
                    <span class="option-title"> Other, or too little speech to tell </span></div>
                </div>
                <div id="field75-container" class="field f_100 radio-group required">
                  <label for="field75"> 75. (Before age 5) Has the child used one word or idea as a substitute for another, for a prolonged period of time? (Example: always says "catsup" to mean "red," or uses "penny" for "drawer" after seeing pennies in a desk drawer) </label>
                  <div class="option clearfix">
                    <input data="75. (Before age 5) Has the child used one word or idea as a substitute for another, for a prolonged period of time?" name="field75" id="field75a" value="Yes, definitely" type="radio">
                    <span class="option-title"> Yes, definitely </span> </div>
                  <div class="option clearfix">
                    <input data="75. (Before age 5) Has the child used one word or idea as a substitute for another, for a prolonged period of time?" name="field75" id="field75b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="75. (Before age 5) Has the child used one word or idea as a substitute for another, for a prolonged period of time?" name="field75" id="field75c" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="75. (Before age 5) Has the child used one word or idea as a substitute for another, for a prolonged period of time?" name="field75" id="field75d" value="Too little speech to tell" type="radio">
                    <span class="option-title"> Too little speech to tell </span></div>
                </div>
                <div id="field76-container" class="field f_100 radio-group required">
                  <label for="field76"> 76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior? That is, when did detectable abnormal behavior actually begin? </label>
                  <div class="option clearfix">In first 3 months:
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76a" value="Might have noticed in first 3 months" type="radio">
                    <span class="option-title"> a. Might have noticed </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76a1" value="Actually noticed in first 3 months" type="radio">
                    <span class="option-title">b. Actually noticed</span></div>
                  <div class="option clearfix"> <span class="option-title">4-6 months: </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76b" value="Might have noticed 4-6 months" type="radio">
                    <span class="option-title"> a. Might have noticed </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76b1" value="Actually noticed 4-6 months" type="radio">
                    <span class="option-title"> b.Actually noticed </span></div>
                  <div class="option clearfix"> <span class="option-title"> 7-12 months: </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76c" value="Might have noticed 7-12 months" type="radio">
                    <span class="option-title"> a. Might have noticed</span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76c1" value="Actually noticed 7-12 months" type="radio">
                    <span class="option-title"> b. Actually noticed</span></div>
                  <div class="option clearfix"> <span class="option-title">13-24 months </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76d" value="Might have noticed 13-24 months " type="radio">
                    a. <span class="option-title"> Might have noticed
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76d1" value="Actually noticed 13-24 months " type="radio">
                    b. Actually noticed</span></div>
                  <div class="option clearfix"><span class="option-title">2 years-3 years </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76e" value="Might have noticed 2 years-3 years" type="radio">
                    <span class="option-title"> a. Might have noticed </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76e1" value="Actually noticed 2 years-3 years" type="radio">
                    <span class="option-title"> b. Actually noticed </span></div>
                  <div class="option clearfix"> <span class="option-title"> 3 years-4 years </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76f" value="Might have noticed 3 years-4 years" type="radio">
                    a. <span class="option-title"> Might have noticed</span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76f1" value="Actually noticed 3 years-4 years" type="radio">
                    b. <span class="option-title"> Actually noticed</span> </div>
                  <div class="option clearfix"> <span class="option-title">After 4th year </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76g" value="Might have noticed after 4th year" type="radio">
                    <span class="option-title"> a. Might have noticed </span>
                    <input data="76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?" name="field76" id="field76g1" value="Actually noticed after 4th year" type="radio">
                    <span class="option-title"> b. Actually noticed </span></div>
                  <div class="option clearfix"></div>
                </div>
                <div id="field77-container" class="field f_100 radio-group required">
                  <label for="field77"> 77. Father's highest educational level </label>
                  <div class="option clearfix">
                    <input data="77. Father's highest educational level " name="field77" id="field77a" value="Did not graduate high school " type="radio">
                    <span class="option-title"> Did not graduate high school </span> </div>
                  <div class="option clearfix">
                    <input data="77. Father's highest educational level " name="field77" id="field77b" value="High school graduate " type="radio">
                    <span class="option-title"> High school graduate </span> </div>
                  <div class="option clearfix">
                    <input data="77. Father's highest educational level " name="field77" id="field77c" value="Past high school tech. training " type="radio">
                    <span class="option-title"> Post high school tech. training </span> </div>
                  <div class="option clearfix">
                    <input data="77. Father's highest educational level " name="field77" id="field77d" value="Some college " type="radio">
                    <span class="option-title"> Some college </span></div>
                  <div class="option clearfix">
                    <input data="77. Father's highest educational level " name="field77" id="field77e" value="College graduate" type="radio">
                    <span class="option-title"> College graduate </span></div>
                  <div class="option clearfix">
                    <input data="77. Father's highest educational level " name="field77" id="field77f" value="Some graduate work " type="radio">
                    <span class="option-title"> Some graduate work </span></div>
                  <div class="option clearfix">
                    <input data="77. Father's highest educational level " name="field77" id="field77g" value="Graduate degree" type="radio">
                    <span class="option-title"> Graduate degree 
                    (
                    <input data="77. Father's highest educational level : degreee" type="text" name="field77g1" id="field77g1">
                    ) </span>
                  </div>
                </div>
                <div id="field105-container" class="field f_100 radio-group required">
                  <label for="field78-1"> 78. Mother's highest educational level </label>
                  <div class="option clearfix">
                    <input data="78. Mother's highest educational level" name="field78" id="field78a" value="Did not graduate high school" type="radio">
                    <span class="option-title"> Did not graduate high school </span> </div>
                  <div class="option clearfix">
                    <input data="78. Mother's highest educational level" name="field78" id="field78b" value="High school graduate" type="radio">
                    <span class="option-title"> High school graduate </span> </div>
                  <div class="option clearfix">
                    <input data="78. Mother's highest educational level" name="field78" id="field78c" value="Past high school tech. training" type="radio">
                    <span class="option-title"> Post high school tech. training </span> </div>
                  <div class="option clearfix">
                    <input data="78. Mother's highest educational level" name="field78" id="field78d" value="Some college" type="radio">
                    <span class="option-title"> Some college </span></div>
                  <div class="option clearfix">
                    <input data="78. Mother's highest educational level" name="field78" id="field78e" value="College graduate" type="radio">
                    <span class="option-title"> College graduate </span></div>
                  <div class="option clearfix">
                    <input data="78. Mother's highest educational level" name="field78" id="field78f" value="Some graduate work" type="radio">
                    <span class="option-title"> Some graduate work </span></div>
                  <div class="option clearfix">
                    <input data="78. Mother's highest educational level" name="field77" id="field77g" value="Graduate degree" type="radio">
                    <span class="option-title"> Graduate degree 
                    (
                    <input data="78. Mother's highest educational level: degree" type="text" name="field77g1" id="field77g1">
                    ) </span></div>
                </div>
                <div id="field79-container" class="field f_100 checkbox-group required">
                  <label for="field79"> 79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. Consider parents, siblings, grandparents, uncles and aunts. </label>
                  <div class="option clearfix">
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded : none" name="field79" id="field79a" value="true" type="checkbox">
                    <span class="option-title">If none, check here </span> </div>
                  <div class="option clearfix">
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : first" name="field79" id="field79b" value="true" type="checkbox">
                    <span class="option-title">a. Relationship:
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 1.relationship" name="field79" type="text" id="field79b1">
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 1.Schizophrenia" name="field79" id="field79b2" type="checkbox" value="true"> Schizophrenia
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 1.Depressive" name="field79" id="field79b3" type="checkbox" value="true"> Depressive;  
                    Other: <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 1.Other" name="field79" type="text" id="field79b4">
                    </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79c" value="relationship2" type="checkbox">
                    <span class="option-title">b. Relationship:
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 2.relationship" name="field79" type="text" id="field79b1">
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 2.Schizophrenia" name="field79" id="field79b2" type="checkbox" value="true"> Schizophrenia
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 2.Depressive" name="field79" id="field79b3" type="checkbox" value="true"> Depressive;  
                    Other: <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 2.Other" name="field79" type="text" id="field79b4">
                    </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79d" value="relationship3" type="checkbox">
                     <span class="option-title">c. Relationship:
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 3.relationship" name="field79" type="text" id="field79b1">
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 3.Schizophrenia" name="field79" id="field79b2" type="checkbox" value="true"> Schizophrenia
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 3.Depressive" name="field79" id="field79b3" type="checkbox" value="true"> Depressive;  
                    Other: <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 3.Other" name="field79" type="text" id="field79b4">
                    </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79e" value="relationship4" type="checkbox">
                   <span class="option-title">d. Relationship:
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 4.relationship" name="field79" type="text" id="field79b1">
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 4.Schizophrenia" name="field79" id="field79b2" type="checkbox" value="true"> Schizophrenia
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 4.Depressive" name="field79" id="field79b3" type="checkbox" value="true"> Depressive;  
                    Other: <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 4.Other" name="field79" type="text" id="field79b4">
                    </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79f" value="relationship5" type="checkbox">
                    <span class="option-title">e. Relationship:
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 5.relationship" name="field79" type="text" id="field79b1">
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 5.Schizophrenia" name="field79" id="field79b2" type="checkbox" value="true"> Schizophrenia
                    <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 5.Depressive" name="field79" id="field79b3" type="checkbox" value="true"> Depressive;  
                    Other: <input data="79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. : 5.Other" name="field79" type="text" id="field79b4">
                    </span> </div>
                </div>
                <div id="field80-container" class="field f_100 radio-group required">
                  <label for="field80"> 80. Before age 2, arched back and bent head back, when held </label>
                  <div class="option clearfix">
                    <input data="80. Before age 2, arched back and bent head back, when held" name="field80" id="field80a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="80. Before age 2, arched back and bent head back, when held" name="field80" id="field80b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="80. Before age 2, arched back and bent head back, when held" name="field80" id="field80c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step11.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
              </form> 
            <?php include("inc/note.php"); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- javascript update
================================================== --> 
<!-- Placed at the end of the document so the pages load faster -->
<?php include("inc/scripts.html"); ?>
<!-- html5.js for IE less than 9 --> 
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<!-- css3-mediaqueries.js for IE less than 9 --> 
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]--> 
<script src="js/ios-orientationchange-fix.js"></script>
</body>
</html>