<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step5='1' WHERE KeyID = '" . $token . "'" or die(mysql_error());
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
		} elseif ($show["step7"] == '1') { 
			header("Location: step8.php?token=" . $token);
		} elseif ($show["step6"] == '1') { 
			header("Location: step7.php?token=" . $token);
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

    	//console.log(fieldid + " : " + label + " : " +  value)	
			
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
          <h5>Questions 31-40</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
                <div id="field31-container" class="field f_100 radio-group required">
                  <label for="field31"> 31. (Age 3-5) How well physically coordinated is the child (running, walking, balancing, climbing)? </label>
                  <div class="option clearfix">
                    <input data="31. (Age 3-5) How well physically coordinated is the child (running, walking, balancing, climbing)?" name="field31" id="field31a" value="Unusually graceful" type="radio">
                    <span class="option-title"> Unusually graceful </span> </div>
                  <div class="option clearfix">
                    <input data="31. (Age 3-5) How well physically coordinated is the child (running, walking, balancing, climbing)?" name="field31" id="field31b" value="Above average" type="radio">
                    <span class="option-title"> Above average </span> </div>
                  <div class="option clearfix">
                    <input data="31. (Age 3-5) How well physically coordinated is the child (running, walking, balancing, climbing)?" name="field31" id="field31c" value="Somewhat below average; or poor" type="radio">
                    <span class="option-title"> Somewhat below average; or poor </span> </div>
                </div>
                <div id="field32-container" class="field f_100 radio-group required">
                  <label for="field32"> 32. (Age 3-5) Does the child sometimes whirl him/herself like a top? </label>
                  <div class="option clearfix">
                    <input data="32. (Age 3-5) Does the child sometimes whirl him/herself like a top?" name="field32" id="field32a" value="Yes, does this often" type="radio">
                    <span class="option-title"> Yes, does this often </span> </div>
                  <div class="option clearfix">
                    <input data="32. (Age 3-5) Does the child sometimes whirl him/herself like a top?" name="field32" id="field32b" value="Yes, sometimes" type="radio">
                    <span class="option-title"> Yes, sometimes </span> </div>
                  <div class="option clearfix">
                    <input data="32. (Age 3-5) Does the child sometimes whirl him/herself like a top?" name="field32" id="field32c" value="Yes, if you start him/her out" type="radio">
                    <span class="option-title"> Yes, if you start him/her out </span> </div>
                  <div class="option clearfix">
                    <input data="32. (Age 3-5) Does the child sometimes whirl him/herself like a top?" name="field32" id="field32d" value="No, he/she shows no tendancy to whirl" type="radio">
                    <span class="option-title"> No, he/she shows no tendency to whirl </span> </div>
                </div>
                <div id="field33-container" class="field f_100 radio-group required">
                  <label for="field33-1"> 33.(Age 3-5) How skillful is the child in doing fine work with his/her fingers or playing with small objects?</label>
                  <div class="option clearfix">
                    <input data="33.(Age 3-5) How skillful is the child in doing fine work with his/her fingers or playing with small objects?" name="field33" id="field33a" value="Exceptionally skillful" type="radio">
                    <span class="option-title"> Exceptionally skillful </span> </div>
                  <div class="option clearfix">
                    <input data="33.(Age 3-5) How skillful is the child in doing fine work with his/her fingers or playing with small objects?" name="field33" id="field33b" value="Average for age" type="radio">
                    <span class="option-title"> Average for age </span> </div>
                  <div class="option clearfix">
                    <input data="33.(Age 3-5) How skillful is the child in doing fine work with his/her fingers or playing with small objects?" name="field33" id="field33c" value="A little awkward, or very awkward" type="radio">
                    <span class="option-title"> A little awkward, or very awkward </span> </div>
                  <div class="option clearfix">
                    <input data="33.(Age 3-5) How skillful is the child in doing fine work with his/her fingers or playing with small objects?" name="field33" id="field33d" value="Dont know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field34-container" class="field f_100 radio-group required">
                  <label for="field34"> 34. (Age 3-5) Does the child like to spin things like jar lids, coins, or coasters? </label>
                  <div class="option clearfix">
                    <input data="34. (Age 3-5) Does the child like to spin things like jar lids, coins, or coasters?" name="field34" id="field34a" value="Yes, often and for rather long periods" type="radio">
                    <span class="option-title"> Yes, often and for rather long periods </span> </div>
                  <div class="option clearfix">
                    <input data="34. (Age 3-5) Does the child like to spin things like jar lids, coins, or coasters?" name="field34" id="field34b" value="Very seldom, or never" type="radio">
                    <span class="option-title"> Very seldom, or never </span> </div>
                </div>
                <div id="field35-container" class="field f_100 radio-group required">
                  <label for="field35"> 35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following: </label>
                  <div class="option clearfix">
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following:" name="field35" id="field35a" value="Assembling jig saw or similar puzzles" type="radio">
                    <span class="option-title"> Assembling jig saw or similar puzzles </span></div>
                  <div class="option clearfix">
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following:" name="field35" id="field35b" value="Arithmetic computation" type="radio">
                    <span class="option-title"> Arithmetic computation </span></div>
                  <div class="option clearfix">
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following:" name="field35" id="field35c" value="Can tell day of week a certain date will fall on" type="radio">
                    <span class="option-title"> Can tell day of week a certain date will fall on </span></div>
                  <div class="option clearfix">
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following:" name="field35" id="field35d" value="Perfect musical pitch" type="radio">
                    <span class="option-title"> Perfect musical pitch </span></div>
                  <div class="option clearfix">
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following:" name="field35" id="field35e" value="Throwing and/or catching a ball" type="radio">
                    <span class="option-title"> Throwing and/or catching a ball </span></div>
                  <div class="option clearfix">
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following:" name="field35" id="field35f" value="Other" type="radio">
                    <span class="option-title"> Other:
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following: other" name="field35" type="text" id="field35f1">
                    </span></div>
                  <div class="option clearfix">
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following:" name="field35" id="field35g" value="More than one of above" type="radio">
                    <span class="option-title"> More than one of above (which?
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following: multiple" name="field35m" type="text" id="field35g1">
                    ) </span></div>
                  <div class="option clearfix">
                    <input data="35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following:" name="field35" id="field35h" value="No unusual skill or not sure" type="radio">
                    <span class="option-title"> No unusual skill or not sure </span></div>
                </div>
                <div id="field36container" class="field f_100 radio-group required">
                  <label for="field36"> 36. (Age 3-5) Does the chid sometimes jump up and down gleefully when pleased? </label>
                  <div class="option clearfix">
                    <input data="36. (Age 3-5) Does the chid sometimes jump up and down gleefully when pleased?" name="field36" id="field36a" value="Yes, this is typical" type="radio">
                    <span class="option-title"> Yes, this is typical </span> </div>
                  <div class="option clearfix">
                    <input data="36. (Age 3-5) Does the chid sometimes jump up and down gleefully when pleased?" name="field36" id="field36b" value="No or rarely" type="radio">
                    <span class="option-title"> No or rarely </span> </div>
                </div>
                <div id="field37-container" class="field f_100 radio-group required">
                  <label for="field37"> 37. (Age 3-5) Does child sometimes line things up in precise, evenly-spaced rows and insist they not be disturbed? </label>
                  <div class="option clearfix">
                    <input data="37. (Age 3-5) Does child sometimes line things up in precise, evenly-spaced rows and insist they not be disturbed?" name="field37" id="field37a" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="37. (Age 3-5) Does child sometimes line things up in precise, evenly-spaced rows and insist they not be disturbed?" name="field37" id="field37b" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="37. (Age 3-5) Does child sometimes line things up in precise, evenly-spaced rows and insist they not be disturbed?" name="field37" id="field37c" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                </div>
                <div id="field38-container" class="field f_100 radio-group required">
                  <label for="field38"> 38. (Age 3-5) Does the child refuse to use his/her hands for an extended period of time? </label>
                  <div class="option clearfix">
                    <input data="38. (Age 3-5) Does the child refuse to use his/her hands for an extended period of time?" name="field38" id="field38a" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="38. (Age 3-5) Does the child refuse to use his/her hands for an extended period of time?" name="field38" id="field38b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field39-container" class="field f_100 radio-group required">
                  <label for="field39"> 39. Was there a time before age 5 when the child <em>strongly</em> insisted on listening to music on records? </label>
                  <div class="option clearfix">
                    <input data="39. Was there a time before age 5 when the child strongly insisted on listening to music on records?" name="field39" id="field39a" value="Yes, insisted on only certain records" type="radio">
                    <span class="option-title"> Yes, insisted on only certain records </span> </div>
                  <div class="option clearfix">
                    <input data="39. Was there a time before age 5 when the child strongly insisted on listening to music on records?" name="field39" id="field39b" value="Yes, but almost any record would do" type="radio">
                    <span class="option-title"> Yes, but almost any record would do </span> </div>
                  <div class="option clearfix">
                    <input data="39. Was there a time before age 5 when the child strongly insisted on listening to music on records?" name="field39" id="field39c" value="Liked to listen, but didn't demand to" type="radio">
                    <span class="option-title"> Liked to listen, but didn't <em>demand</em> to </span> </div>
                  <div class="option clearfix">
                    <input data="39. Was there a time before age 5 when the child strongly insisted on listening to music on records?" name="field39" id="field39d" value="No special interest in records" type="radio">
                    <span class="option-title"> No special interest in records </span> <br>
                  </div>
                </div>
                <div id="field40-container" class="field f_100 radio-group required">
                  <label for="field40-1"> 40. (Age 3-5) How interested is the child in mechanical objects such as the stove or vacuum cleaner? </label>
                  <div class="option clearfix">
                    <input data="40. (Age 3-5) How interested is the child in mechanical objects such as the stove or vacuum cleaner?" name="field40" id="field40a" value="Little or no interest " type="radio">
                    <span class="option-title"> Little or no interest </span> </div>
                  <div class="option clearfix">
                    <input data="40. (Age 3-5) How interested is the child in mechanical objects such as the stove or vacuum cleaner?" name="field40" id="field40b" value="Average interest" type="radio">
                    <span class="option-title"> Average interest </span> </div>
                  <div class="option clearfix">
                    <input data="40. (Age 3-5) How interested is the child in mechanical objects such as the stove or vacuum cleaner?" name="field40" id="field40c" value="Fascinated by certain mechanical things" type="radio">
                    <span class="option-title"> Fascinated by certain mechanical things </span> </div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step7.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
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