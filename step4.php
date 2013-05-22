<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('slingsurvey2');

$sql = "UPDATE tblusers SET step3='1' WHERE KeyID = '" . $token . "'";
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
		} elseif ($show["step5"] == '1') { 
			header("Location: step6.php?token=" . $token);
		} elseif ($show["step4"] == '1') { 
			header("Location: step5.php?token=" . $token);
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
<title>The Autism Research Institute : 2012-2013 Parent Survey</title>
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
          <h5>Questions 11-20</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
                <div id="field11-container" class="field f_100 radio-group required">
                  <label for="field11">11. In the first year; did the child react to bright lights; bright colors;
                    unusual sounds; etc.? </label>
                  <div class="option clearfix">
                    <input data="11. In the first year; did the child react to bright lights; bright colors; unusual sounds; etc.?" name="field11" id="field11a" value="Unusually strong reaction" type="radio">
                    <span class="option-title"> Unusually strong reaction: (
                    <input data="11. Unusually strong reaction: sensory pleasure" name="field11" id="field11a1" type="checkbox" value="true">
                    pleasure,
                    <input data="11. Unusually strong reaction: dislike" name="field11" id="field11a2" type="checkbox" value="true">
                    dislike) </span> </div>
                  <div class="option clearfix">
                    <input data="11. In the first year; did the child react to bright lights; bright colors; unusual sounds; etc.?" name="field11" id="field11b" value="Unusually unresponsive." type="radio">
                    <span class="option-title"> Unusually unresponsive</span> </div>
                  <div class="option clearfix">
                    <input data="11. In the first year; did the child react to bright lights; bright colors; unusual sounds; etc.?" name="field11" id="field11c" value="Average, or dont know" type="radio">
                    <span class="option-title"> Average, or don't know</span> <br>
                  </div>
                </div>
                <div id="field12-container" class="field f_100 radio-group required">
                  <label for="field12">12. Did the child behave normally for a time before his/her abnormal behavior began? </label>
                  <div class="option clearfix">
                    <input data="12. Did the child behave normally for a time before his/her abnormal behavior began?" name="field12" id="field12a" value="Never was a period of normal behavior" type="radio">
                    <span class="option-title"> Never was a period of normal behavior </span> </div>
                  <div class="option clearfix">
                    <input data="12. Did the child behave normally for a time before his/her abnormal behavior began?" name="field12" id="field12b" value="Normal during first 6 months" type="radio">
                    <span class="option-title"> Normal during first 6 months </span> </div>
                  <div class="option clearfix">
                    <input data="12. Did the child behave normally for a time before his/her abnormal behavior began?" name="field12" id="field12c" value="Normal during first year" type="radio">
                    <span class="option-title"> Normal during first year </span> </div>
                  <div class="option clearfix">
                    <input data="12. Did the child behave normally for a time before his/her abnormal behavior began?" name="field12" id="field12d" value="Normal during first 1-1/2 years" type="radio">
                    <span class="option-title"> Normal during first 1 1/2 years </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="12. Did the child behave normally for a time before his/her abnormal behavior began?" name="field12" id="field12e" value="Normal during first 2 years" type="radio">
                    <span class="option-title"> Normal during first 2 years </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="12. Did the child behave normally for a time before his/her abnormal behavior began?" name="field12" id="field12f" value="Normal during first 3 years" type="radio">
                    <span class="option-title"> Normal during first 3 years </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="12. Did the child behave normally for a time before his/her abnormal behavior began?" name="field12" id="field12g" value="Normal during first 4-5 years" type="radio">
                    <span class="option-title"> Normal during first 4-5 years </span> <br>
                  </div>
                </div>
                <div id="field13-container" class="field f_100 radio-group required">
                  <label for="field13">13. (Age 4-8 months) Did the child reach out or prepare him/herself to be picked up when mother approached him/her? </label>
                  <div class="option clearfix">
                    <input data="13. (Age 4-8 months) Did the child reach out or prepare him/herself to be picked up when mother approached him/her?" name="field13" id="field13a" value="Yes, or I believe so" type="radio">
                    <span class="option-title"> Yes, or I believe so </span> </div>
                  <div class="option clearfix">
                    <input data="13. (Age 4-8 months) Did the child reach out or prepare him/herself to be picked up when mother approached him/her?" name="field13" id="field13b" value="No, I dont think he/she did" type="radio">
                    <span class="option-title"> No, I don't think he/she did </span> </div>
                  <div class="option clearfix">
                    <input data="13. (Age 4-8 months) Did the child reach out or prepare him/herself to be picked up when mother approached him/her?" name="field13" id="field13c" value="No, definitely not" type="radio">
                    <span class="option-title"> No, definitely not </span> </div>
                  <div class="option clearfix">
                    <input data="13. (Age 4-8 months) Did the child reach out or prepare him/herself to be picked up when mother approached him/her?" name="field13" id="field13d" value="Dont know" type="radio">
                    <span class="option-title"> Don't know </span> </div>
                </div>
                <div id="field14-container" class="field f_100 radio-group required">
                  <label for="field14"> 14. Did the child rock in his/her crib as a baby? </label>
                  <div class="option clearfix">
                    <input data="14. Did the child rock in his/her crib as a baby?" name="field14" id="field14a" value="Yes, quite a lot" type="radio">
                    <span class="option-title"> Yes, quite a lot </span> </div>
                  <div class="option clearfix">
                    <input data="14. Did the child rock in his/her crib as a baby?" name="field14" id="field14b" value="Yes, sometimes" type="radio">
                    <span class="option-title"> Yes, sometimes </span> </div>
                  <div class="option clearfix">
                    <input data="14. Did the child rock in his/her crib as a baby?" name="field14" id="field14c" value="No, or very little" type="radio">
                    <span class="option-title"> No, or very little </span> </div>
                  <div class="option clearfix">
                    <input data="14. Did the child rock in his/her crib as a baby?" name="field14" id="field14d" value="Dont know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field15-container" class="field f_100 radio-group required">
                  <label for="field15"> 15. At what age did the child learn to walk alone? </label>
                  <div class="option clearfix">
                    <input data="15. At what age did the child learn to walk alone?" name="field15" id="field15a" value="8-12 months" type="radio">
                    <span class="option-title"> 8-12 months </span> </div>
                  <div class="option clearfix">
                    <input data="15. At what age did the child learn to walk alone?" name="field15" id="field15b" value="13-15 months" type="radio">
                    <span class="option-title"> 13-15 months </span> </div>
                  <div class="option clearfix">
                    <input data="15. At what age did the child learn to walk alone?" name="field15" id="field15c" value="16-18 months" type="radio">
                    <span class="option-title"> 16-18 months </span> </div>
                  <div class="option clearfix">
                    <input data="15. At what age did the child learn to walk alone?" name="field15" id="field15d" value="19-24 months" type="radio">
                    <span class="option-title"> 19-24 months </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="15. At what age did the child learn to walk alone?" name="field15" id="field15e" value="25-36 months" type="radio">
                    <span class="option-title"> 25-36 months </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="15. At what age did the child learn to walk alone?" name="field15" id="field15f" value="37 months or later, or does not walk alone" type="radio">
                    <span class="option-title"> 37 months or later, or does not walk alone</span> <br>
                  </div>
                </div>
                <div id="field16-container" class="field f_100 radio-group required">
                  <label for="field16"> 16. Which describes the change from crawling to walking? </label>
                  <div class="option clearfix">
                    <input data="16. Which describes the change from crawling to walking?" name="field16" id="field16a" value="Normal change from crawling to walking" type="radio">
                    <span class="option-title"> Normal change from crawling to walking </span></div>
                  <div class="option clearfix">
                    <input data="16. Which describes the change from crawling to walking?" name="field16" id="field16b" value="Little or no crawling, gradual start of walking" type="radio">
                    <span class="option-title"> Little or no crawling, gradual start of walking </span></div>
                  <div class="option clearfix">
                    <input data="16. Which describes the change from crawling to walking?" name="field16" id="field16c" value="Little or no crawling, sudden start of walking" type="radio">
                    <span class="option-title"> Little or no crawling, sudden start of walking </span></div>
                  <div class="option clearfix">
                    <input data="16. Which describes the change from crawling to walking?" name="field16" id="field16d" value="Prolonged crawling, sudden start of walking" type="radio">
                    <span class="option-title"> Prolonged crawling, sudden start of walking </span></div>
                  <div class="option clearfix">
                    <input data="16. Which describes the change from crawling to walking?" name="field16" id="field16e" value="Prolonged crawling, gradual start of walking" type="radio">
                    <span class="option-title"> Prolonged crawling, gradual start of walking </span></div>
                  <div class="option clearfix">
                    <input data="16. Which describes the change from crawling to walking?" name="field16" id="field16f" value="Other, or don't know" type="radio">
                    <span class="option-title"> Other, or don't know </span></div>
                </div>
                <div id="field17-container" class="field f_100 radio-group required">
                  <label for="field17">17. During the child's first year, did he/she seem to be unusually intelligent? </label>
                  <div class="option clearfix">
                    <input data="17. During the child's first year, did he/she seem to be unusually intelligent?" name="field17" id="field17a" value="Suspected high intelligence" type="radio">
                    <span class="option-title"> Suspected high intelligence </span></div>
                  <div class="option clearfix">
                    <input data="17. During the child's first year, did he/she seem to be unusually intelligent?" name="field17" id="field17b" value="Suspected average intelligence" type="radio">
                    <span class="option-title"> Suspected average intelligence </span></div>
                  <div class="option clearfix">
                    <input data="17. During the child's first year, did he/she seem to be unusually intelligent?" name="field17" id="field17c" value="Child looked somewhat dull" type="radio">
                    <span class="option-title"> Child looked somewhat dull </span></div>
                </div>
                <div id="field18-container" class="field f_100 radio-group required">
                  <label for="field18"> 18. During the child's first 2 years, did he/she like to be held? </label>
                  <div class="option clearfix">
                    <input data="18. During the childs first 2 years, did he/she like to be held?" name="field18" id="field18a" value="Liked being picked up; enjoyed being held" type="radio">
                    <span class="option-title"> Liked being picked up; enjoyed being held </span></div>
                  <div class="option clearfix">
                    <input data="18. During the childs first 2 years, did he/she like to be held?" name="field18" id="field18b" value="Limp and passive on being held" type="radio">
                    <span class="option-title"> Limp and passive on being held </span></div>
                  <div class="option clearfix">
                    <input data="18. During the childs first 2 years, did he/she like to be held?" name="field18" id="field18c" value="You could pick child up and hold it only when and how it preferred" type="radio">
                    <span class="option-title"> You could pick child up and hold him/her only when and how he/she preferred </span></div>
                  <div class="option clearfix">
                    <input data="18. During the childs first 2 years, did he/she like to be held?" name="field18" id="field18d" value="Notably stiff and awkward to hold" type="radio">
                    <span class="option-title"> Notably stiff and awkward to hold </span></div>
                  <div class="option clearfix">
                    <input data="18. During the childs first 2 years, did he/she like to be held?" name="field18" id="field18e" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field19-container" class="field f_100 radio-group required">
                  <label for="field19"> 19. Before age 3, did the child ever imitate another person? </label>
                  <div class="option clearfix">
                    <input data="19. Before age 3, did the child ever imitate another person?" name="field19" id="field19a" value="Yes, waved bye-bye" type="radio">
                    <span class="option-title"> <em>1.</em> Yes, waved bye-bye </span></div>
                  <div class="option clearfix">
                    <input data="19. Before age 3, did the child ever imitate another person?" name="field19" id="field19b" value="Yes, played pat-a-cake" type="radio">
                    <span class="option-title"> <em>2.</em> Yes, played pat-a-cake </span></div>
                  <div class="option clearfix">
                    <input data="19. Before age 3, did the child ever imitate another person?" name="field19" id="field19c" value="Yes, other" type="radio">
                    <span class="option-title"> <em>3.</em> Yes, other:
                    <input data="19. Before age 3, did the child ever imitate another person? : other" name="" type="text">
                    </span></div>
                  <div class="option clearfix">
                    <input data="19. Before age 3, did the child ever imitate another person?" name="field19" id="field19d" value="Two or more types" type="radio">
                    <span class="option-title"> Two or more of above (which?
                    <input data="19. Before age 3, did the child ever imitate another person? : Waved Bye Bye" name="field19" id="field19d1" type="checkbox" value="true">
                    <em>1</em>,
                    <input data="19. Before age 3, did the child ever imitate another person? : Played pat-a-cake" name="field19" id="field19d2" type="checkbox" value="true">
                    <em>2</em>,
                    <input data="19. Before age 3, did the child ever imitate another person? : Other" name="field19" id="field19d3" type="checkbox" value="true">
                    <em>3</em>) </span></div>
                  <div class="option clearfix">
                    <input data="19. Before age 3, did the child ever imitate another person?" name="field19" id="field1e" value="No, or not sure" type="radio">
                    <span class="option-title"> No, or not sure </span></div>
                </div>
                <div id="field20-container" class="field f_100 radio-group required">
                  <label for="field20"> 20. Before age 3, did the child have an unusually good memory? </label>
                  <div class="option clearfix">
                    <input data="20. Before age 3, did the child have an unusually good memory ?" name="field20" id="field20a" value="Remarkable memory for songs, rhymes, TV commercials, etc., in words" type="radio">
                    <span class="option-title"> <em>1. </em>Remarkable memory for songs, rhymes, TV commercials, etc., in words </span></div>
                  <div class="option clearfix">
                    <input data="20. Before age 3, did the child have an unusually good memory?" name="field20" id="field20b" value="Remarkable memory for songs, music (humming only)" type="radio">
                    <span class="option-title"> <em>2.</em> Remarkable memory for songs, music (humming only) </span></div>
                  <div class="option clearfix">
                    <input data="20. Before age 3, did the child have an unusually good memory?" name="field20" id="field20c" value="Remarkable memory for names, places, routes, etc." type="radio">
                    <span class="option-title"> <em>3.</em> Remarkable memory for names, places, routes, etc. </span></div>
                  <div class="option clearfix">
                    <input data="20. Before age 3, did the child have an unusually good memory?" name="field20" id="field20d" value="No evidence for remarkable memory" type="radio">
                    <span class="option-title"> <em>4. </em>No evidence for remarkable memory </span></div>
                  <div class="option clearfix">
                    <input data="20. Before age 3, did the child have an unusually good memory?" name="field20" id="field20e" value="Apparently rather poor memory" type="radio">
                    <span class="option-title"> <em>5. </em>Apparently rather poor memory </span></div>
                  <div class="option clearfix">
                    <input data="20. Before age 3, did the child have an unusually good memory?" name="field20" id="field20f" value="Remarkable memory for songs, rhymes, TV commercials, etc., in words & Remarkable memory for names, places, routes, etc." type="radio">
                    <span class="option-title"> <em>6. </em>Both 1 and 3 </span></div>
                  <div class="option clearfix">
                    <input data="20. Before age 3, did the child have an unusually good memory?" name="field20" id="field20g" value="Remarkable memory for songs, music (humming only) & Remarkable memory for names, places, routes, etc." type="radio">
                    <span class="option-title"> <em>7. </em>Both 2 and 3 </span></div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step5.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
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