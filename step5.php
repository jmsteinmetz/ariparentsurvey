<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step4='1' WHERE KeyID = '" . $token . "'" or die(mysql_error());
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
          <h5>Questions 21-30</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
                <div id="field21-container" class="field f_100 radio-group required">
                  <label for="field21"> 21. Did you ever suspect the child was very nearly deaf? </label>
                  <div class="option clearfix">
                    <input data="21. Did you ever suspect the child was very nearly deaf?" name="field21" id="field21a" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="21. Did you ever suspect the child was very nearly deaf?" name="field21" id="field21b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field42-container" class="field f_100 radio-group required">
                  <label for="field22"> 22. (Age 2-4) Is child "deaf" to some sounds, but hears others? </label>
                  <div class="option clearfix">
                    <input data="22. (Age 2-4) Is child &quot;deaf&quot; to some sounds, but hears others?" name="field22" id="field22a" value="Yes, can be &quot;deaf&quot; to loud sounds, but hear low ones" type="radio">
                    <span class="option-title"> Yes, can be "deaf" to loud sounds, but hear low ones </span> </div>
                  <div class="option clearfix">
                    <input data="22. (Age 2-4) Is child &quot;deaf&quot; to some sounds, but hears others?" name="field22" id="field22b" value="No, this is not true of him/her" type="radio">
                    <span class="option-title"> No, this is not true of him/her </span> </div>
                </div>
                <div id="field23-container" class="field f_100 radio-group required">
                  <label for="field23"> 23.(Age 2-4) Does child hold his/her hands in strange postures? </label>
                  <div class="option clearfix">
                    <input data="23.(Age 2-4) Does child hold his/her hands in strange postures?" name="field23" id="field23a" value="Yes, sometimes often" type="radio">
                    <span class="option-title"> Yes, sometimes often </span> </div>
                  <div class="option clearfix">
                    <input data="23.(Age 2-4) Does child hold his/her hands in strange postures?" name="field23" id="field23b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field24-container" class="field f_100 radio-group required">
                  <label for="field24"> 24. (Age 2-4) Does child engage in rhythmic or rocking activity for very long periods of time (like on rocking-horse or chair, jump-chair, swing, etc.)? </label>
                  <div class="option clearfix">
                    <input data="24. (Age 2-4) Does child engage in rhythmic or rocking activity for very long periods of time (like on rocking-horse or chair, jump-chair, swing, etc.)?" name="field24" id="field24a" value="Yes, this is typical" type="radio">
                    <span class="option-title"> Yes, this is typical </span> </div>
                  <div class="option clearfix">
                    <input data="24. (Age 2-4) Does child engage in rhythmic or rocking activity for very long periods of time (like on rocking-horse or chair, jump-chair, swing, etc.)?" name="field24" id="field24b" value="Seldom does this" type="radio">
                    <span class="option-title"> Seldom does this </span> </div>
                  <div class="option clearfix">
                    <input data="24. (Age 2-4) Does child engage in rhythmic or rocking activity for very long periods of time (like on rocking-horse or chair, jump-chair, swing, etc.)?" name="field24" id="field24c" value="Not true of him/her" type="radio">
                    <span class="option-title"> Not true of him/her </span> </div>
                </div>
                <div id="field25-container" class="field f_100 radio-group required">
                  <label for="field25"> 25. (Age 2-4) Does the child ever "look through" or "walk through" people, as though they weren't there? </label>
                  <div class="option clearfix">
                    <input data="25. (Age 2-4) Does the child ever look through or walk through people, as though they werent there?" name="field25" id="field25a" value="Yes, often" type="radio">
                    <span class="option-title"> Yes, often </span> </div>
                  <div class="option clearfix">
                    <input data="25. (Age 2-4) Does the child ever look through or walk through people, as though they werent there?" name="field25" id="field25b" value="Yes, I think so" type="radio">
                    <span class="option-title"> Yes, I think so </span> </div>
                  <div class="option clearfix">
                    <input data="25. (Age 2-4) Does the child ever look through or walk through people, as though they werent there?" name="field25" id="field25c" value="No, doesn't do this" type="radio">
                    <span class="option-title"> No, doesn't do this </span> </div>
                </div>
                <div id="field26container" class="field f_100 radio-group required">
                  <label for="field26-1"> 26.(Age 2-5) Does child have any unusual cravings for things to eat or chew on? </label>
                  <div class="option clearfix">
                    <input data="26.(Age 2-5) Does child have any unusual cravings for things to eat or chew on?" name="field26" id="field26a" value="Yes, salt or salty foods" type="radio">
                    <span class="option-title"> Yes, salt or salty foods </span></div>
                  <div class="option clearfix">
                    <input data="26.(Age 2-5) Does child have any unusual cravings for things to eat or chew on?" name="field26" id="field26b" value="Yes, often chews metal objects" type="radio">
                    <span class="option-title"> Yes, often chews metal objects </span></div>
                  <div class="option clearfix">
                    <input data="26.(Age 2-5) Does child have any unusual cravings for things to eat or chew on?" name="field26" id="field26c" value="Yes, other" type="radio">
                    <span class="option-title"> Yes, other:
                    <input data="26.(Age 2-5) Does child have any unusual cravings for things to eat or chew on? : other" name="field26" id="field26c1" type="text" value="">
                    </span></div>
                  <div class="option clearfix">
                    <input data="26.(Age 2-5) Does child have any unusual cravings for things to eat or chew on?" name="field26" id="field26d" value="Yes, more than 2 above" type="radio">
                    <span class="option-title"> Yes, more than 2 above (which?
                    <input data="26.(Age 2-5) Does child have any unusual cravings for things to eat or chew on? : Specific cravings" name="field26" id="field26d1" type="text" value="">
                    )</span></div>
                  <div class="option clearfix">
                    <input data="" name="field26" id="field26e" value="No, or not sure" type="radio">
                    <span class="option-title"> No, or not sure </span></div>
                </div>
                <div id="field27-container" class="field f_100 radio-group required">
                  <label for="field27"> 27. (Age 2-4) Does the child have certain eating oddities such as refusing to drink from a transparent container, eating only hot (or cold) food, eating only one or two foods, etc.? </label>
                  <div class="option clearfix">
                    <input data="27. (Age 2-4) Does the child have certain eating oddities such as refusing to drink from a transparent container, eating only hot (or cold) food, eating only one or two foods, etc.?" name="field27" id="field27a" value="Yes, definitely" type="radio">
                    <span class="option-title"> Yes, definitely </span> </div>
                  <div class="option clearfix">
                    <input data="27. (Age 2-4) Does the child have certain eating oddities such as refusing to drink from a transparent container, eating only hot (or cold) food, eating only one or two foods, etc.?" name="field27" id="field27b" value="No, or not to any marked degree" type="radio">
                    <span class="option-title"> No, or not to any marked degree </span> </div>
                  <div class="option clearfix">
                    <input data="27. (Age 2-4) Does the child have certain eating oddities such as refusing to drink from a transparent container, eating only hot (or cold) food, eating only one or two foods, etc.?" name="field27" id="field27c" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> </div>
                </div>
                <div id="field28-container" class="field f_100 radio-group required">
                  <label for="field28"> 28. Would you describe your child around age 3 or 4 as often seeming "in a shell," or so distant and "lost in thought" that you couldn't reach him/her? </label>
                  <div class="option clearfix">
                    <input data="28. Would you describe your child around age 3 or 4 as often seeming -in a shell,- or so distant and -lost in thought- that you couldnt reach him/her?" name="field28" id="field28a" value="Yes, this is a very accurate description" type="radio">
                    <span class="option-title"> Yes, this is a very accurate description </span> </div>
                  <div class="option clearfix">
                    <input data="28. Would you describe your child around age 3 or 4 as often seeming -in a shell,- or so distant and -lost in thought- that you couldnt reach him/her?" name="field28" id="field28b" value="Once in a while he/she might possibly be like that" type="radio">
                    <span class="option-title"> Once in a while he/she might possibly be like that </span> </div>
                  <div class="option clearfix">
                    <input data="28. Would you describe your child around age 3 or 4 as often seeming -in a shell,- or so distant and -lost in thought- that you couldnt reach him/her?" name="field28" id="field28c" value="Not an accurate description" type="radio">
                    <span class="option-title"> Not an accurate description </span> </div>
                </div>
                <div id="field29-container" class="field f_100 radio-group required">
                  <label for="field29"> 29. (Age 2-5) Is he/she cuddly? </label>
                  <div class="option clearfix">
                    <input data="29. (Age 2-5) Is he/she cuddly?" name="field29" id="field29a" value="Definitely, likes to cling to adults" type="radio">
                    <span class="option-title"> Definitely, likes to cling to adults </span> </div>
                  <div class="option clearfix">
                    <input data="29. (Age 2-5) Is he/she cuddly?" name="field29" id="field29b" value="Above average (likes to be held)" type="radio">
                    <span class="option-title"> Above average (likes to be held) </span> </div>
                  <div class="option clearfix">
                    <input data="29. (Age 2-5) Is he/she cuddly?" name="field29" id="field29c" value="No, rather stiff and awkward to hold" type="radio">
                    <span class="option-title"> No, rather stiff and awkward to hold </span> </div>
                  <div class="option clearfix">
                    <input data="29. (Age 2-5) Is he/she cuddly?" name="field29" id="field29d" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field30-container" class="field f_100 radio-group required">
                  <label for="field30"> 30.(Age 3-5) Does the child deliberately hit his/her own head? </label>
                  <div class="option clearfix">
                    <input data="30.(Age 3-5) Does the child deliberately hit his/her own head?" name="field30" id="field30a" value="a. Never, or rarely" type="radio">
                    <span class="option-title"> <em>1.</em> Never, or rarely </span></div>
                  <div class="option clearfix">
                    <input data="30.(Age 3-5) Does the child deliberately hit his/her own head?" name="field30" id="field30b" value="b. Yes, usually by slapping it with his/her hand" type="radio">
                    <span class="option-title"> <em>2. </em>Yes, usually by slapping it with his/her hand </span></div>
                  <div class="option clearfix">
                    <input data="30.(Age 3-5) Does the child deliberately hit his/her own head?" name="field30" id="field30c" value="c. Yes, usually by banging it against someone elses legs or head" type="radio">
                    <span class="option-title"> <em>3.</em> Yes, usually by banging it against someone else's legs or head </span></div>
                  <div class="option clearfix">
                    <input data="30.(Age 3-5) Does the child deliberately hit his/her own head?" name="field30" id="field30d" value=" d. Yes, usually by hitting walls, floor, furniture, etc." type="radio">
                    <span class="option-title"><em> 4.</em> Yes, usually by hitting walls, floor, furniture, etc. </span></div>
                  <div class="option clearfix">
                    <input data="30.(Age 3-5) Does the child deliberately hit his/her own head?" name="field30" id="field30e" value="Yes, multiple types." type="radio">
                    <span class="option-title"> Several of the above (which?
                    <input data="30.(Age 3-5) Does the child deliberately hit his/her own head? : Type1 " name="field30" type="checkbox" id="field30e1" value="b. Yes, usually by slapping it with his/her hand">
                    2,
                    <input data="30.(Age 3-5) Does the child deliberately hit his/her own head? : Type2" name="field30" type="checkbox" id="field30e2" value="c. Yes, usually by banging it against someone elses legs or head">
                    3,
                    <input data="30.(Age 3-5) Does the child deliberately hit his/her own head? : Type3" name="field30" type="checkbox" id="field30e3" value="d. Yes, usually by hitting walls, floor, furniture, etc.">
                    4) </span></div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step6.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
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