<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step8='1' WHERE KeyID = '" . $token . "'";
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
		} elseif ($show["step9"] == '1') { 
			header("Location: step10.php?token=" . $token);
		} else {
			//do nothing
		}
    }
else
   //header("Location: index.php");
mysql_close($conn);?>
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
          <h5>Questions 61-70</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
              	<div id="field61-container" class="field f_100 radio-group required">
                  <label for="field61"> 61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more? </label>
                  <div class="option clearfix">
                    <input data="61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more?" name="field61" id="field61a" value="Yes, but later talked again" type="radio">
                    <span class="option-title"> Yes, but later talked again (age stopped
                    <input data="61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more? : Yes, but later talked again (age stopped)" name="field61a" type="text" class="numeral" id="field61a1">
                    , duration
                    <input data="61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more? : duration" name="field61a" type="text" id="field61a2">
                    ) </span> </div>
                  <div class="option clearfix">
                    <input data="61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more?" name="field61" id="field61b" value="Yes, still only whispers" type="radio">
                    <span class="option-title"> Yes, still only whispers (age stopped talking
                    <input data="61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more? Yes, still only whispers (age stopped talking)" name="field61b1" type="text" class="numeral" id="field61b1">
                    ) </span> </div>
                  <div class="option clearfix">
                    <input data="61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more?" name="field61" id="field61c" value="Now doesn't even whisper" type="radio">
                    <span class="option-title"> Now doesn't even whisper (stopped talk
                    <input data="61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more? Now doesn't even whisper (stopped talk)" name="field61c1" type="text" class="numeral" id="field61c1">
                    ; stopped whispering
                    <input data="61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more? stopped whispering" name="field61c2" type="text" class="numeral" id="field61c2">
                    ) </span> </div>
                  <div class="option clearfix">
                    <input data="61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more?" name="field61" id="field61d" value="No, continued to talk, or never began talking " type="radio">
                    <span class="option-title"> No, continued to talk, or never began talking </span> </div>
                </div>
                <div id="field62-container" class="field f_100 radio-group required">
                  <label for="field62"> 62. (Age 1-5) How well could the child pronounce his/her first words when learning to speak, and how well could he/she pronounce difficult words between 3 and 5? </label>
                  <div class="option clearfix">
                    <input data="62. (Age 1-5) How well could the child pronounce his/her first words when learning to speak, and how well could he/she pronounce difficult words between 3 and 5?" name="field62" id="field62a" value="Too little speech to tell, or other answer" type="radio">
                    <span class="option-title"> Too little speech to tell, or other answer </span> </div>
                  <div class="option clearfix">
                    <input data="62. (Age 1-5) How well could the child pronounce his/her first words when learning to speak, and how well could he/she pronounce difficult words between 3 and 5?" name="field62" id="field62b" value="Average or below average pronunciation of first words (&quot;wabbit,&quot; etc.) and also poor at 3 to 5" type="radio">
                    <span class="option-title"> Average or below average pronunciation of first words ("wabbit," etc.),
                    and also poor at 3 to 5 </span> </div>
                  <div class="option clearfix">
                    <input data="62. (Age 1-5) How well could the child pronounce his/her first words when learning to speak, and how well could he/she pronounce difficult words between 3 and 5?" name="field62" id="field62c" value="Average or below on first words, unusually good at 3-5" type="radio">
                    <span class="option-title"> Average or below on first words, unusually good at 3-5 </span> </div>
                  <div class="option clearfix">
                    <input data="62. (Age 1-5) How well could the child pronounce his/her first words when learning to speak, and how well could he/she pronounce difficult words between 3 and 5?" name="field62" id="field62d" value="Unusually good on first words, average or below at 3-5" type="radio">
                    <span class="option-title"> Unusually good on first words, average or below at 3-5 </span></div>
                  <div class="option clearfix">
                    <input data="62. (Age 1-5) How well could the child pronounce his/her first words when learning to speak, and how well could he/she pronounce difficult words between 3 and 5?" name="field62" id="field62e" value="Unusually good on first words, and also at 3-5" type="radio">
                    <span class="option-title"> Unusually good on first words, and also at 3-5 </span></div>
                </div>
                <div id="field63-container" class="field f_100 radio-group required">
                  <label for="field63"> 63. (Age 3-5) Is the child's vocabulary (the number of things he/she can name or point to accurately) greatly out of proportion to his/her ability to "communicate" (to answer questions or tell you something)? </label>
                  <div class="option clearfix">
                    <input data="63. (Age 3-5) Is the child's vocabulary (the number of things he/she can name or point to accurately) greatly out of proportion to his/her ability to "communicate" (to answer questions or tell you something)?" name="field63" id="field63a" value="He/she can point to many objects I name, but doesn't speak or &quot;communicate&quot;" type="radio">
                    <span class="option-title"> He/she can <em>point</em> to many objects I name, but doesn't speak or "communicate" </span> </div>
                  <div class="option clearfix">
                    <input data="63. (Age 3-5) Is the child's vocabulary (the number of things he/she can name or point to accurately) greatly out of proportion to his/her ability to "communicate" (to answer questions or tell you something)?" name="field63" id="field63b" value="He/she can correctly name many objects, but not &quot;communicate&quot;" type="radio">
                    <span class="option-title"> He/she can correctly <em>name</em> many objects, but not "communicate" </span> </div>
                  <div class="option clearfix">
                    <input data="63. (Age 3-5) Is the child's vocabulary (the number of things he/she can name or point to accurately) greatly out of proportion to his/her ability to "communicate" (to answer questions or tell you something)?" name="field63" id="field63c" value="Ability to &quot;communicate&quot; is pretty good -- about what you would expect from the number of words he/she knows" type="radio">
                    <span class="option-title"> Ability to "communicate" is pretty good -- about what you would expect from the number of words he/she knows </span> </div>
                  <div class="option clearfix">
                    <input data="63. (Age 3-5) Is the child's vocabulary (the number of things he/she can name or point to accurately) greatly out of proportion to his/her ability to "communicate" (to answer questions or tell you something)?" name="field63" id="field63d" value="Doesn't use or understand words " type="radio">
                    <span class="option-title"> Doesn't use or understand words </span> <br>
                  </div>
                </div>
                <div id="field64-container" class="field f_100 radio-group required">
                  <label for="field64"> 64. When the child spoke his/her first sentences; did he/she surprise you by using words he/she had not used individually before? </label>
                  <div class="option clearfix">
                    <input data="64. When the child spoke his/her first sentences; did he/she surprise you by using words he/she had not used individually before?" name="field64" id="field64a" value="Yes" type="radio">
                    <span class="option-title"> Yes (any examples?
                    <input data="64. When the child spoke his/her first sentences; did he/she surprise you by using words he/she had not used individually before? : Examples" name="field64a1" type="text" id="field64a1">
                    )</span> </div>
                  <div class="option clearfix">
                    <input data="64. When the child spoke his/her first sentences; did he/she surprise you by using words he/she had not used individually before?" name="field64" id="field64b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="64. When the child spoke his/her first sentences; did he/she surprise you by using words he/she had not used individually before?" name="field64" id="field64c" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="64. When the child spoke his/her first sentences; did he/she surprise you by using words he/she had not used individually before?" name="field64" id="field64d" value="Too little speech to tell" type="radio">
                    <span class="option-title"> Too little speech to tell </span></div>
                </div>
                <div id="field65-container" class="field f_100 radio-group required">
                  <label for="field65"> 65. How did child refer to <em>him/herself</em> on first learning to talk? </label>
                  <div class="option clearfix">
                    <input data="65. How did child refer to <em>him/herself</em> on first learning to talk?" name="field65" id="field65a" value="a. &quot;(John) fell down;&quot; or &quot;Baby (or Boy) fall down.&quot;" type="radio">
                    <span class="option-title"><em>1</em>. <em>&quot;(John)</em> fall down;" or <em>"Baby (or Boy)</em> fall down." </span></div>
                  <div class="option clearfix">
                    <input data="65. How did child refer to <em>him/herself</em> on first learning to talk?" name="field65" id="field65b" value="b. &quot;Me fall down;&quot; or &quot;I fall down.&quot;" type="radio">
                    <span class="option-title"><em>2. &quot;Me</em> fall down," or "<em>I</em> fall down" </span></div>
                  <div class="option clearfix">
                    <input data="65. How did child refer to <em>him/herself</em> on first learning to talk?" name="field65" id="field65c" value="c. &quot;(He; Him; She; or Her) fall down&quot;" type="radio">
                    <em>3<span class="option-title">.</span></em><span class="option-title"> &quot;<em>(He; Him; She; or Her)</em> fall down" </span></div>
                  <div class="option clearfix">
                    <input data="65. How did child refer to <em>him/herself</em> on first learning to talk?" name="field65" id="field65d" value="d. &quot;You fall down&quot;" type="radio">
                    <span class="option-title"> <em>4.</em> <em>&quot;You</em> fall down" </span></div>
                  <div class="option clearfix">
                    <input data="65. How did child refer to <em>him/herself</em> on first learning to talk?" name="field65" id="field65e" value="Any combination of a, b & c" type="radio">
                    <span class="option-title"> Any combination of<em> 1, 2, and/or 3</em></span></div>
                  <div class="option clearfix">
                    <input data="65. How did child refer to <em>him/herself</em> on first learning to talk?" name="field65" id="field65f" value="Any combination of a, b & c" type="radio">
                    <span class="option-title"> No speech or too little speech as yet</span> <br>
                  </div>
                </div>
                <div id="field66-container" class="field f_100 radio-group required">
                  <label for="field66"> 66. (Age 3-5) Does child repeat phrases or sentences that he/she has heard in the past (maybe using a hollow, parrot-like voice), what is said having little or no relation to the situation? </label>
                  <div class="option clearfix">
                    <input data="66. (Age 3-5) Does child repeat phrases or sentences that he/she has heard in the past (maybe using a hollow, parrot-like voice), what is said having little or no relation to the situation?" name="field66" id="field66a" value="Yes, definitely, except voice not hollow or parrot-like " type="radio">
                    <span class="option-title"> Yes, definitely, except voice not hollow or parrot-like </span> </div>
                  <div class="option clearfix">
                    <input data="66. (Age 3-5) Does child repeat phrases or sentences that he/she has heard in the past (maybe using a hollow, parrot-like voice), what is said having little or no relation to the situation?" name="field66" id="field66b" value="Yes, definitely, including peculiar voice tone " type="radio">
                    <span class="option-title"> Yes, definitely, including peculiar voice tone </span> </div>
                  <div class="option clearfix">
                    <input data="66. (Age 3-5) Does child repeat phrases or sentences that he/she has heard in the past (maybe using a hollow, parrot-like voice), what is said having little or no relation to the situation?" name="field66" id="field66c" value="Not sure " type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="66. (Age 3-5) Does child repeat phrases or sentences that he/she has heard in the past (maybe using a hollow, parrot-like voice), what is said having little or no relation to the situation?" name="field66" id="field66d" value="No" type="radio">
                    <span class="option-title"> No </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="66. (Age 3-5) Does child repeat phrases or sentences that he/she has heard in the past (maybe using a hollow, parrot-like voice), what is said having little or no relation to the situation?" name="field66" id="field66e" value="Too little speech to tell "  type="radio">
                    <span class="option-title"> Too little speech to tell </span> <br>
                  </div>
                </div>
                <div id="field94-container" class="field f_100 radio-group required">
                  <label for="field67"> 67. (Before age 5) Can the child answer a simple question like "What is your first name?" "Why did Mommy spank Billy?" </label>
                  <div class="option clearfix">
                    <input data="67. (Before age 5) Can the child answer a simple question like 'What is your first name?' 'Why did Mommy spank Billy?'" name="field67" id="field67a" value="Yes, can answer such questions adequately " type="radio">
                    <span class="option-title"> Yes, can answer such questions adequately </span> </div>
                  <div class="option clearfix">
                    <input data="67. (Before age 5) Can the child answer a simple question like 'What is your first name?' 'Why did Mommy spank Billy?'" name="field67" id="field67b" value="No, uses speech, but can't answer questions " type="radio">
                    <span class="option-title"> No, uses speech, but can't answer questions </span> </div>
                  <div class="option clearfix">
                    <input data="67. (Before age 5) Can the child answer a simple question like 'What is your first name?' 'Why did Mommy spank Billy?'" name="field67" id="field67c" value="Too little speech to tell" type="radio">
                    <span class="option-title"> Too little speech to tell </span> </div>
                </div>
                <div id="field68-container" class="field f_100 radio-group required">
                  <label for="field68"> 68. (Before age 5) Can the child understand what you say to him/her, judging from his/her ability to follow instructions or answer you? </label>
                  <div class="option clearfix">
                    <input data="68. (Before age 5) Can the child understand what you say to him/her, judging from his/her ability to follow instructions or answer you?" name="field68" id="field68a" value="Yes, understands very well " type="radio">
                    <span class="option-title"> Yes, understands very well </span> </div>
                  <div class="option clearfix">
                    <input data="68. (Before age 5) Can the child understand what you say to him/her, judging from his/her ability to follow instructions or answer you?" name="field68" id="field68b" value="Yes, understands fairly well " type="radio">
                    <span class="option-title"> Yes, understands fairly well </span> </div>
                  <div class="option clearfix">
                    <input data="68. (Before age 5) Can the child understand what you say to him/her, judging from his/her ability to follow instructions or answer you?" name="field68" id="field68c" value="Understands a little, if you repeat and repeat " type="radio">
                    <span class="option-title"> Understands a little, if you repeat and repeat </span> </div>
                  <div class="option clearfix">
                    <input data="68. (Before age 5) Can the child understand what you say to him/her, judging from his/her ability to follow instructions or answer you?" name="field68" id="field68d" value="Very little or no understanding " type="radio">
                    <span class="option-title"> Very little or no understanding </span> <br>
                  </div>
                </div>
                <div id="field69-container" class="field f_100 radio-group required">
                  <label for="field69"> 69. (Before age 5) If the child talks; do you feel he/she understands what he/she is saying? </label>
                  <div class="option clearfix">
                    <input data="69. (Before age 5) If the child talks; do you feel he/she understands what he/she is saying?" name="field69" id="field69a" value="Doesn't talk enough to tell " type="radio">
                    <span class="option-title"> Doesn't talk enough to tell </span> </div>
                  <div class="option clearfix">
                    <input data="69. (Before age 5) If the child talks; do you feel he/she understands what he/she is saying?" name="field69" id="field69b" value="No, he/she is just repeating what he/she has heard with hardly any understanding " type="radio">
                    <span class="option-title"> No, he/she is just repeating what he/she has heard with hardly any understanding </span> </div>
                  <div class="option clearfix">
                    <input data="69. (Before age 5) If the child talks; do you feel he/she understands what he/she is saying?" name="field69" id="field69c" value="Not just repeating-- he/she understands what he/she is saying; but not well " type="radio">
                    <span class="option-title"> Not just repeating--he/she understands what he/she is saying, but not well </span> </div>
                  <div class="option clearfix">
                    <input data="69. (Before age 5) If the child talks; do you feel he/she understands what he/she is saying?" name="field69" id="field69d" value="No doubt that he/she understands what he/she is saying " type="radio">
                    <span class="option-title"> No doubt that he/she understands what he/she is saying </span></div>
                </div>
                <div id="field70-container" class="field f_100 radio-group required">
                  <label for="field70"> 70. (Before age 5) Has the child used the word "Yes"? </label>
                  <div class="option clearfix">
                    <input data="70. (Before age 5) Has the child used the word 'Yes'?" name="field70" id="field70a" value="Has used &quot;Yes&quot; fairly often and correctly " type="radio">
                    <span class="option-title"> Has used "Yes" fairly often and correctly </span> </div>
                  <div class="option clearfix">
                    <input data="70. (Before age 5) Has the child used the word 'Yes'?" name="field70" id="field70b" value="Seldom has used &quot;Yes,&quot; but has used it " type="radio">
                    <span class="option-title"> Seldom has used "Yes," but has used it </span> </div>
                  <div class="option clearfix">
                    <input data="70. (Before age 5) Has the child used the word 'Yes'?" name="field70" id="field70c" value="Has used a number of other words or phrases, but hasn't used word "Yes" " type="radio">
                    <span class="option-title"> Has used sentences, but hasn't used word "Yes" </span> </div>
                  <div class="option clearfix">
                    <input data="70. (Before age 5) Has the child used the word 'Yes'?" name="field70" id="field70d" value="Has used a number of other words or phrases, but hasn't used word &quot;Yes&quot; " type="radio">
                    <span class="option-title"> Has used a number of other words or phrases, but hasn't used word "Yes" </span></div>
                  <div class="option clearfix">
                    <input data="70. (Before age 5) Has the child used the word 'Yes'?" name="field70" id="field70e" value="Has no speech, or too little speech to tell " type="radio">
                    <span class="option-title"> Has no speech, or too little speech to tell </span> <br>
                  </div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step10.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
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