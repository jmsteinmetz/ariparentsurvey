<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step7='1' WHERE KeyID = '" . $token . "'";
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
		} elseif ($show["step8"] == '1') { 
			header("Location: step9.php?token=" . $token);
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
          <h5>Questions 51-60</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
                <div id="field51-container" class="field f_100 radio-group required">
                  <label for="field51"> 51. (Age 3-5) Is it possible to direct child's attention to an object some distance away or out a window? </label>
                  <div class="option clearfix">
                    <input data="51. (Age 3-5) Is it possible to direct child's attention to an object some distance away or out a window?" name="field51" id="field51a" value="Yes, no special problem" type="radio">
                    <span class="option-title"> Yes, no special problem </span> </div>
                  <div class="option clearfix">
                    <input data="51. (Age 3-5) Is it possible to direct child's attention to an object some distance away or out a window?" name="field51" id="field51b" value="He/she rarely sees things very far out of reach" type="radio">
                    <span class="option-title"> He/she rarely sees things very far out of reach </span> </div>
                  <div class="option clearfix">
                    <input data="51. (Age 3-5) Is it possible to direct child's attention to an object some distance away or out a window?" name="field51" id="field51c" value="He/she examines things with fingers and mouth only" type="radio">
                    <span class="option-title"> He/she examines things with fingers and mouth only </span> </div>
                </div>
                <div id="field52-container" class="field f_100 radio-group required">
                  <label for="field52"> 52. (Age 3-5) Do people consider the child especially attractive? </label>
                  <div class="option clearfix">
                    <input data="52. (Age 3-5) Do people consider the child especially attractive?" name="field52" id="field52a" value="Yes, very good-looking child" type="radio">
                    <span class="option-title"> Yes, very good-looking child </span> </div>
                  <div class="option clearfix">
                    <input data="52. (Age 3-5) Do people consider the child especially attractive?" name="field52" id="field52b" value="No, just average" type="radio">
                    <span class="option-title"> No, just average </span> </div>
                  <div class="option clearfix">
                    <input data="52. (Age 3-5) Do people consider the child especially attractive?" name="field52" id="field52c" value="Faulty in physical appearance" type="radio">
                    <span class="option-title"> Faulty in physical appearance </span> </div>
                </div>
                <div id="field53-container" class="field f_100 radio-group required">
                  <label for="field53-1"> 53. (Age 3-5) Does the child look up at people (meet their eyes) when they are talking to him/her? </label>
                  <div class="option clearfix">
                    <input data="53. (Age 3-5) Does the child look up at people (meet their eyes) when they are talking to him/her?" name="field53" id="field53a" value="Never, or rarely" type="radio">
                    <span class="option-title"> Never, or rarely </span> </div>
                  <div class="option clearfix">
                    <input data="53. (Age 3-5) Does the child look up at people (meet their eyes) when they are talking to him/her?" name="field53" id="field53b" value="Only with parents" type="radio">
                    <span class="option-title"> Only with parents </span> </div>
                  <div class="option clearfix">
                    <input data="53. (Age 3-5) Does the child look up at people (meet their eyes) when they are talking to him/her?" name="field53" id="field53c" value="Usually does" type="radio">
                    <span class="option-title"> Usually does </span> </div>
                </div>
                <div id="field54-container" class="field f_100 radio-group required">
                  <label for="field54"> 54. (Age 3-5) Does the child take an adult by the wrist to use adult's hand (to open door, get cookies, turn on TV, etc.)? </label>
                  <div class="option clearfix">
                    <input data="54. (Age 3-5) Does the child take an adult by the wrist to use adult's hand (to open door, get cookies, turn on TV, etc.)?" name="field54" id="field54a" value="Yes, this is typical" type="radio">
                    <span class="option-title"> Yes, this is typical </span> </div>
                  <div class="option clearfix">
                    <input data="54. (Age 3-5) Does the child take an adult by the wrist to use adult's hand (to open door, get cookies, turn on TV, etc.)?" name="field54" id="field54b" value="Perhaps, or rarely" type="radio">
                    <span class="option-title"> Perhaps, or rarely </span> </div>
                  <div class="option clearfix">
                    <input data="54. (Age 3-5) Does the child take an adult by the wrist to use adult's hand (to open door, get cookies, turn on TV, etc.)?" name="field54" id="field54c" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field55-container" class="field f_100 radio-group required">
                  <label for="field55"> 55. (Age 3-5) Which set of terms best describes the child? </label>
                  <div class="option clearfix">
                    <input data="55. (Age 3-5) Which set of terms best describes the child?" name="field55" id="field55a" value="Confused, self-concerned, perplexed, dependent, worried" type="radio">
                    <span class="option-title"> Confused, self-concerned, perplexed, dependent, worried </span> </div>
                  <div class="option clearfix">
                    <input data="55. (Age 3-5) Which set of terms best describes the child?" name="field55" id="field55b" value="Aloof, indifferent, self-contented, remote" type="radio">
                    <span class="option-title"> Aloof, indifferent, self-contented, remote </span> </div>
                </div>
                <div id="field56-container" class="field f_100 radio-group required">
                  <label for="field56-1"> 56. (Age 3-5) Is the child extremely fearful? </label>
                  <div class="option clearfix">
                    <input data="56. (Age 3-5) Is the child extremely fearful?" name="field56" id="field56a" value="Yes, of strangers or certain people" type="radio">
                    <span class="option-title"> <em>1</em>. Yes, of strangers or certain people </span></div>
                  <div class="option clearfix">
                    <input data="56. (Age 3-5) Is the child extremely fearful?" name="field56" id="field56b" value="Yes, of certain animals, noises or objects" type="radio">
                    <span class="option-title"> <em>2.</em> Yes, of certain animals, noises or objects </span></div>
                  <div class="option clearfix">
                    <input data="56. (Age 3-5) Is the child extremely fearful?" name="field56" id="field56c" value="Yes, a & b above" type="radio">
                    <span class="option-title"> Yes, <em>1 & 2</em> above </span></div>
                  <div class="option clearfix">
                    <input data="56. (Age 3-5) Is the child extremely fearful?" name="field56" id="field56d" value="Only normal fearfulness" type="radio">
                    <span class="option-title"> Only normal fearfulness </span></div>
                  <div class="option clearfix">
                    <input data="56. (Age 3-5) Is the child extremely fearful?" name="field56" id="field56e" value="Seems unusually bold and free of fear" type="radio">
                    <span class="option-title"> Seems unusually bold and free of fear </span></div>
                  <div class="option clearfix">
                    <input data="56. (Age 3-5) Is the child extremely fearful?" name="field56" id="field56f" value="Child ignores or is unaware of fearsome objects" type="radio">
                    <span class="option-title"> Child ignores or is unaware of fearsome objects </span></div>
                </div>
                <div id="field57-container" class="field f_100 radio-group required">
                  <label for="field57"> 57. (Age 3-5) Does he/she fall or get hurt in running or climbing? </label>
                  <div class="option clearfix">
                    <input data="57. (Age 3-5) Does he/she fall or get hurt in running or climbing?" name="field57" id="field57a" value="Tends toward falling or injury" type="radio">
                    <span class="option-title"> Tends toward falling or injury </span> </div>
                  <div class="option clearfix">
                    <input data="57. (Age 3-5) Does he/she fall or get hurt in running or climbing?" name="field57" id="field57b" value="Average in this way" type="radio">
                    <span class="option-title"> Average in this way </span> </div>
                  <div class="option clearfix">
                    <input data="57. (Age 3-5) Does he/she fall or get hurt in running or climbing?" name="field57" id="field57c" value="Never, or almost never, exposes self to falling" type="radio">
                    <span class="option-title"> Never, or almost never, exposes self to falling </span> </div>
                  <div class="option clearfix">
                    <input data="57. (Age 3-5) Does he/she fall or get hurt in running or climbing?" name="field57" id="field57d" value="Surprisingly safe despite active climbing, swimming, etc." type="radio">
                    <span class="option-title"> Surprisingly safe despite active climbing, swimming, etc. </span></div>
                </div>
                <div id="field58-container" class="field f_100 radio-group required">
                  <label for="field58"> 58. (Age 3-5) Is there a problem in that the child hits, pinches, bites or otherwise injures<em> himself </em>or <em>others</em>? </label>
                  <div class="option clearfix">
                    <input data="58. (Age 3-5) Is there a problem in that the child hits, pinches, bites or otherwise injures himself or others? " name="field58" id="field58a" value="Self" type="radio">
                    <span class="option-title"> Yes, self only </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="58. (Age 3-5) Is there a problem in that the child hits, pinches, bites or otherwise injures himself or others?" name="field58" id="field58b" value="Others" type="radio">
                    <span class="option-title"> Yes, others only </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="58. (Age 3-5) Is there a problem in that the child hits, pinches, bites or otherwise injures himself or others?" name="field58" id="field58c" value="Yes, self and others" type="radio">
                    <span class="option-title"> Yes, self and others </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="58. (Age 3-5) Is there a problem in that the child hits, pinches, bites or otherwise injures himself or others?" name="field58" id="field58d" value="No (not a problem)" type="radio">
                    <span class="option-title"> No (not a problem) </span> <br>
                  </div>
                </div>
                <div id="field59-container" class="field f_100 radio-group required">
                  <label for="field59"> 59. At what age did the child say his/her first words (even if later stopped talking)? </label>
                  <div class="option clearfix">
                    <input data="59. At what age did the child say his/her first words (even if later stopped talking)?" name="field59" id="field59a" value="Has never used words" type="radio">
                    <span class="option-title"> Has never used words </span> </div>
                  <div class="option clearfix">
                    <input data="59. At what age did the child say his/her first words (even if later stopped talking)?" name="field59" id="field59b" value="8-12 months" type="radio">
                    <span class="option-title"> 8-12 months </span> </div>
                  <div class="option clearfix">
                    <input data="59. At what age did the child say his/her first words (even if later stopped talking)?" name="field59" id="field59c" value="13-15 months" type="radio">
                    <span class="option-title"> 13-15 months </span> </div>
                  <div class="option clearfix">
                    <input data="59. At what age did the child say his/her first words (even if later stopped talking)?" name="field59" id="field59d" value="16-24 months" type="radio">
                    <span class="option-title"> 16-24 months </span></div>
                  <div class="option clearfix">
                    <input data="59. At what age did the child say his/her first words (even if later stopped talking)?" name="field59" id="field59e" value="2 years-3 years" type="radio">
                    <span class="option-title"> 2 years-3 years </span></div>
                  <div class="option clearfix">
                    <input data="59. At what age did the child say his/her first words (even if later stopped talking)?" name="field59" id="field59f" value="3 years-4 years" type="radio">
                    <span class="option-title"> 3 years-4 years </span></div>
                  <div class="option clearfix">
                    <input data="59. At what age did the child say his/her first words (even if later stopped talking)?" name="field59" id="field59g" value="After 4 years" type="radio">
                    <span class="option-title"> After 4 years </span></div>
                  <div class="option clearfix">
                    <input data="59. At what age did the child say his/her first words (even if later stopped talking)?" name="field59" id="field59h" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span></div>
                </div>
                <div id="field59-container" class="field f_100">
                  <label for="field59a1"> 59a. Please list child's first six words (as well as you can remember them) </label>
                  <textarea data="59a. Please list child's first six words (as well as you can remember them)" rows="1" cols="20" name="field59a1" id="field59a-1" required></textarea>
                </div>
                <div id="field60-container" class="field f_100 radio-group required">
                  <label for="field60"> 60. (Before age 5) Did the child start to talk, then become silent again for a week or more? </label>
                  <div class="option clearfix">
                    <input data="60. (Before age 5) Did the child start to talk, then become silent again for a week or more?" name="field60" id="field60a" value="Yes, but later talked again"type="radio">
                    <span class="option-title"> Yes, but later talked again (age stopped
                    <input data="60. (Before age 5) Did the child start to talk, then become silent again for a week or more? : Yes, but later talked again (age stopped)" name="field60a1" type="text" class="numeral" id="field60a1">
                    ), duration
                    <input data="60. (Before age 5) Did the child start to talk, then become silent again for a week or more? : Yes, but later talked again (duration)" name="field60a2" type="text" id="field60a2">
                    )" </span> </div>
                  <div class="option clearfix">
                    <input data="60. (Before age 5) Did the child start to talk, then become silent again for a week or more?" name="field60" id="field60b" value="Yes, but never started again" type="radio">
                    <span class="option-title"> Yes, but never started again (age stopped
                    <input data="60. (Before age 5) Did the child start to talk, then become silent again for a week or more? : Yes, but never started again (age stopped)" name="field60b1" type="text" class="numeral" id="field60b1">
                    ) </span> </div>
                  <div class="option clearfix">
                    <input data="60. (Before age 5) Did the child start to talk, then become silent again for a week or more? : No, continued to talk, or never began talking" name="field60" id="field60c" value="No, continued to talk or never began talking " type="radio">
                    <span class="option-title"> No, continued to talk, or never began talking </span> </div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step9.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
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