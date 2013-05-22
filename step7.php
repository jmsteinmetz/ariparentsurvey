<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step6='1' WHERE KeyID = '" . $token . "'";
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
          <h5>Questions 41-50</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
              	 <div id="field41-container" class="field f_100 radio-group required">
                  <label for="field41"> 41. (Age 3-5) How does child usually react to being interrupted at what he/she is doing? </label>
                  <div class="option clearfix">
                    <input data="41. (Age 3-5) How does child usually react to being interrupted at what he/she is doing?" name="field41" id="field41a" value="Rarely or never gets upset" type="radio">
                    <span class="option-title"> Rarely or never gets upset </span> </div>
                  <div class="option clearfix">
                    <input data="41. (Age 3-5) How does child usually react to being interrupted at what he/she is doing?" name="field41" id="field41b" value="Sometimes gets mildly upset; rarely very upset" type="radio">
                    <span class="option-title"> Sometimes gets mildly upset; rarely very upset </span> </div>
                  <div class="option clearfix">
                    <input data="41. (Age 3-5) How does child usually react to being interrupted at what he/she is doing?" name="field41" id="field41c" value="Typically gets very upset" type="radio">
                    <span class="option-title"> Typically gets very upset </span> </div>
                </div>
                <div id="field42-container" class="field f_100 radio-group required">
                  <label for="field42"> 42. (Age 3-5) Will the child readily accept new articles of clothing (shoes, coats, etc.)? </label>
                  <div class="option clearfix">
                    <input data="42. (Age 3-5) Will the child readily accept new articles of clothing (shoes, coats, etc.)?" name="field42" id="field42a" value="Usually resists new clothes" type="radio">
                    <span class="option-title"> Usually resists new clothes </span> </div>
                  <div class="option clearfix">
                    <input data="42. (Age 3-5) Will the child readily accept new articles of clothing (shoes, coats, etc.)?" name="field42" id="field42b" value="Doesn't seem to mind, or enjoys them" type="radio">
                    <span class="option-title"> Doesn't seem to mind, or enjoys them </span> </div>
                </div>
                <div id="field43-container" class="field f_100 radio-group required">
                  <label for="field43-1"> 43. (Age 3-5) Is child upset by certain things that are not "right" (like crack in wall, spot on rug, books learning in bookcase, broken rung on chair, pipe held and not smoked)? </label>
                  <div class="option clearfix">
                    <input data="43. (Age 3-5) Is child upset by certain things that are not 'right' (like crack in wall, spot on rug, books leaning in bookcase, broken rung on chair, pipe held and not smoked)?" name="field43" id="field43a" value="Not especially " type="radio">
                    <span class="option-title"> Not especially </span> </div>
                  <div class="option clearfix">
                    <input data="43. (Age 3-5) Is child upset by certain things that are not 'right' (like crack in wall, spot on rug, books learning in bookcase, broken rung on chair, pipe held and not smoked)?" name="field43" id="field43b" value="Yes, such things often upset him/her greatly " type="radio">
                    <span class="option-title"> Yes, such things often upset him/her greatly </span> </div>
                  <div class="option clearfix">
                    <input data="43. (Age 3-5) Is child upset by certain things that are not 'right' (like crack in wall, spot on rug, books learning in bookcase, broken rung on chair, pipe held and not smoked)?" name="field43" id="field43c" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                </div>
                <div id="field44-container" class="field f_100 radio-group required">
                  <label for="field44"> 44. (Age 3-5) Does child adopt complicated "rituals" which make him/her very upset if not followed (like putting many dolls to bed in a certain order, taking exactly the same route between two places, dressing according to a precise pattern, or insisting that only certain words be used in a given situation)? </label>
                  <div class="option clearfix">
                    <input data="44. (Age 3-5) Does child adopt complicated 'rituals' which make him/her very upset if not followed (like putting many dolls to bed in a certain order, taking exactly the same route between two places, dressing according to a precise pattern, or insisting that only certain words be used in a given situation)?" name="field44" id="field44a" value="Yes, definitely" type="radio">
                    <span class="option-title"> Yes, definitely </span> </div>
                  <div class="option clearfix">
                    <input data="44. (Age 3-5) Does child adopt complicated 'rituals' which make him/her very upset if not followed (like putting many dolls to bed in a certain order, taking exactly the same route between two places, dressing according to a precise pattern, or insisting that only certain words be used in a given situation)?" name="field44" id="field44b" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="44. (Age 3-5) Does child adopt complicated 'rituals' which make him/her very upset if not followed (like putting many dolls to bed in a certain order, taking exactly the same route between two places, dressing according to a precise pattern, or insisting that only certain words be used in a given situation)?" name="field44" id="field44c" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field45-container" class="field f_100 radio-group required">
                  <label for="field45"> 45. (Age 3-5) Does child get very upset if certain things he/she is used to are changed (like furniture or toy arrangement, or certain doors which must be left open or shut)? </label>
                  <div class="option clearfix">
                    <input data="45. (Age 3-5) Does child get very upset if certain things he/she is used to are changed (like furniture or toy arrangement, or certain doors which must be left open or shut)?" name="field45" id="field45a" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="45. (Age 3-5) Does child get very upset if certain things he/she is used to are changed (like furniture or toy arrangement, or certain doors which must be left open or shut)?" name="field45" id="field45b" value="Yes, definitely" type="radio">
                    <span class="option-title"> Yes, definitely </span> </div>
                  <div class="option clearfix">
                    <input data="45. (Age 3-5) Does child get very upset if certain things he/she is used to are changed (like furniture or toy arrangement, or certain doors which must be left open or shut)?" name="field45" id="field45c" value="Slightly true" type="radio">
                    <span class="option-title"> Slightly true </span> </div>
                </div>
                <div id="field46-container" class="field f_100 radio-group required">
                  <label for="field46"> 46. (Age 3-5) Is the child destructive? </label>
                  <div class="option clearfix">
                    <input data="46. (Age 3-5) Is the child destructive?" name="field46" id="field46a" value="Yes, this is definitely a problem" type="radio">
                    <span class="option-title"> Yes, this is definitely a problem </span> </div>
                  <div class="option clearfix">
                    <input data="46. (Age 3-5) Is the child destructive?" name="field46" id="field46b" value="Not deliberately or severely destructive" type="radio">
                    <span class="option-title"> Not deliberately or severely destructive </span> </div>
                  <div class="option clearfix">
                    <input data="46. (Age 3-5) Is the child destructive?" name="field46" id="field46c" value="Not especially destructive" type="radio">
                    <span class="option-title"> Not especially destructive </span> </div>
                </div>
                <div id="field47-container" class="field f_100 radio-group required">
                  <label for="field47"> 47. (Age 3-5) Is the child usually physically pliable (can be led easily; melts into your arms)? </label>
                  <div class="option clearfix">
                    <input data="47. (Age 3-5) Is the child usually physically pliable (can be led easily; melts into your arms)?" name="field47" id="field47a" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="47. (Age 3-5) Is the child usually physically pliable (can be led easily; melts into your arms)?" name="field47" id="field47b" value="Seems normal in this way" type="radio">
                    <span class="option-title"> Seems normal in this way </span> </div>
                  <div class="option clearfix">
                    <input data="47. (Age 3-5) Is the child usually physically pliable (can be led easily; melts into your arms)?" name="field47" id="field47c" value="Definitely not pliable " type="radio">
                    <span class="option-title"> Definitely not pliable </span> </div>
                </div>
                <div id="field48-container" class="field f_100 radio-group required">
                  <label for="field48"> 48. (Age 3-5) Which single description; or combination of two descriptions; best characterizes the child? </label>
                  <div class="option clearfix">
                    <input data="48. (Age 3-5) Which single description; or combination of two descriptions; best characterizes the child?" name="field48" id="field48a" value="Hyperactive, constantly moving, changes quickly from one thing to another" type="radio">
                    <span class="option-title"> Hyperactive, constantly moving, changes quickly from one thing to another </span></div>
                  <div class="option clearfix">
                    <input data="48. (Age 3-5) Which single description; or combination of two descriptions; best characterizes the child?" name="field48" id="field48b" value="Watches television quietly for long periods" type="radio">
                    <span class="option-title"> Watches television quietly for long periods </span> </div>
                  <div class="option clearfix">
                    <input data="48. (Age 3-5) Which single description; or combination of two descriptions; best characterizes the child?" name="field48" id="field48c" value="Sits for long periods, staring into space or playing repetitively with objects, without apparent purpose" type="radio">
                    <span class="option-title"> Sits for long periods, staring into space or playing repetitively with objects, without apparent purpose </span></div>
                  <div class="option clearfix">
                    <input data="48. (Age 3-5) Which single description; or combination of two descriptions; best characterizes the child?" name="field48" id="field48d" value="Watches television quietly for long periods" type="radio">
                    <span class="option-title"> Combination of 1and 2 </span></div>
                  <div class="option clearfix">
                    <input data="48. (Age 3-5) Which single description; or combination of two descriptions; best characterizes the child?" name="field48" id="field48e" value="Watches television quietly for long periods" type="radio">
                    <span class="option-title"> Combination of 2 and 3 </span></div>
                  <div class="option clearfix">
                    <input data="48. (Age 3-5) Which single description; or combination of two descriptions; best characterizes the child?" name="field48" id="field48f" value="Watches television quietly for long periods" type="radio">
                    <span class="option-title"> Combination of 1 and 3 </span></div>
                </div>
                <div id="field49-container" class="field f_100 radio-group required">
                  <label for="field49"> 49. (Age 3-5) Does the child seem to want to be liked? </label>
                  <div class="option clearfix">
                    <input data="49. (Age 3-5) Does the child seem to want to be liked?" name="field49" id="field49a" value="Yes, unusually so" type="radio">
                    <span class="option-title"> Yes, unusually so </span> </div>
                  <div class="option clearfix">
                    <input data="49. (Age 3-5) Does the child seem to want to be liked?" name="field49" id="field49b" value="Just normally so" type="radio">
                    <span class="option-title"> Just normally so </span> </div>
                  <div class="option clearfix">
                    <input data="49. (Age 3-5) Does the child seem to want to be liked?" name="field49" id="field49c" value="Indifferent to being liked; happiest when left alone" type="radio">
                    <span class="option-title"> Indifferent to being liked; happiest when left alone </span> </div>
                </div>
                <div id="field50-container" class="field f_100 radio-group required">
                  <label for="field50"> 50. (Age 3-5) Is child sensitive and/or affectionate? </label>
                  <div class="option clearfix">
                    <input data="50. (Age 3-5) Is child sensitive and/or affectionate? " name="field50" id="field50a" value="Is sensitive to criticism and affectionate" type="radio">
                    <span class="option-title"> Is sensitive to criticism and affectionate </span> </div>
                  <div class="option clearfix">
                    <input data="50. (Age 3-5) Is child sensitive and/or affectionate? " name="field50" id="field50b" value="Is sensitive to criticism and <em>not </em>affectionate" type="radio">
                    <span class="option-title"> Is sensitive to criticism, <em>not</em> affectionate </span> </div>
                  <div class="option clearfix">
                    <input data="50. (Age 3-5) Is child sensitive and/or affectionate? " name="field50" id="field50c" value="Not sensitive to criticism, is affectionate" type="radio">
                    <span class="option-title"> Not sensitive to criticism, is affectionate </span> </div>
                  <div class="option clearfix">
                    <input data="50. (Age 3-5) Is child sensitive and/or affectionate? " name="field50" id="field50d" value="Not sensitive to criticism, is NOT affectionate" type="radio">
                    <span class="option-title"> Not sensitive to criticism<em> nor</em> affectionate </span></div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step8.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
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