<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('slingsurvey2');

$sql = "UPDATE tblusers SET step2='1' WHERE KeyID = '" . $token . "'";
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
		} elseif ($show["step3"] == '1') { 
			header("Location: step4.php?token=" . $token);
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
		
		console.log('test');

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
          <h5>Questions 1-10</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
                <div id="field1-container" class="field f_100 radio-group">
                  <label for="field1">1. Present age of child: <br>
                  </label>
                  <div class="option clearfix">
                    <input data="1. Present age of child:" name="field1a" value="> 3" type="radio">
                    <span class="option-title"> Under 3 </span> </div>
                  <div class="option clearfix">
                    <input data="1. Present age of child:" name="field1a" value="3-4" type="radio">
                    <span class="option-title"> Between 3 and 4 years old </span> </div>
                  <div class="option clearfix">
                    <input data="1. Present age of child:" name="field1a" value="4-5" type="radio">
                    <span class="option-title"> Between 4 and 5 years old </span> </div>
                  <div class="option clearfix">
                    <input data="1. Present age of child:" name="field1a" value="5-6" type="radio">
                    <span class="option-title"> Between 5 and 6 years old </span> </div>
                  <div class="option clearfix">
                    <input data="1. Present age of child:" name="field1a" value="6 >" type="radio">
                    <span class="option-title"> Over 6 years old (Age: </span>
                    <input data="1. Present age of child (if over 6):" name="field1b" class="numeral"  type="text">
                    years)<br>
                    <em>(*Note: This Check List is designed primarily for children 3 to 5 years old. If child is over 5, answer as well as you can by recall of child's behavior.) </em> </div>
                </div>
                <div id="field2-container" class="field f_100 radio-group required">
                  <label for="field2">2. Indicate child's sex:</label>
                  <div class="option clearfix">
                    <input data="2. Indicate child's sex:" name="field2a" value="Boy" type="radio">
                    <span class="option-title"> Boy </span> </div>
                  <div class="option clearfix">
                    <input data="2. Indicate child's sex:" name="field2a" value="Girl" type="radio">
                    <span class="option-title"> Girl </span> </div>
                </div>
                <div id="field3-container" class="field f_100 radio-group required">
                  <label for="field3">3. Child's birth order and number of mother's other children:</label>
                  <div class="option clearfix">
                    <input data="3. Child's birth order and number of mothers other children:" name="field3a" value="Only child" type="radio">
                    <span class="option-title"> Child is an only child </span> </div>
                  <div class="option clearfix">
                    <input data="3. Child's birth order and number of mothers other children:" name="field3a" id="" value="first born" type="radio">
                    <span class="option-title"> Child is first born of
                    <input data="Child is first born of" name="field3a1" type="text" class="numeral" id="">
                    children </span> </div>
                  <div class="option clearfix">
                    <input data="3. Child's birth order and number of mothers other children:" name="field3a" id="" value="last born" type="radio">
                    <span class="option-title"> Child is last born of
                    <input data="Child is last born of" name="field3b1" type="text" class="numeral" id="">
                    children </span> </div>
                  <div class="option clearfix">
                    <input data="3. Child's birth order and number of mothers other children:" name="field3a" id="" value="Child is middle born" type="radio">
                    <span class="option-title">Child is middle born;
                    <input data="Number of older children" name="field3c1" id="" type="text" class="numeral" maxlength="4">
                    children are older and
                    <input data="Number of younger children" name="field3d2" id="" type="text" class="numeral" maxlength="4">
                    are younger than this child</span> </div>
                  <input data="3. Child's birth order and number of mothers other children:" name="field3a" id="" value="Foster child or don't know." type="radio">
                  <span class="option-title">Foster child, or don't know. </span> </div>
                <div id="field4-container" class="field f_100 radio-group required">
                  <label for="field4">4. Were pregnancy and delivery normal? </label>
                  <div class="option clearfix">
                    <input data="4. Were pregnancy and delivery normal?" name="field4a" id="" value="Pregnancy and delivery both normal"
                    type="radio">
                    <span class="option-title">Pregnancy and delivery both normal </span> </div>
                  <div class="option clearfix">
                    <input data="4. Were pregnancy and delivery normal?" name="field4a" id="" value="Problems during both pregnancy and delivery"
                    type="radio">
                    <span class="option-title"> Problems during both pregnancy and delivery </span> </div>
                  <div class="option clearfix">
                    <input data="4. Were pregnancy and delivery normal?" name="field4a" id="" value="Pregnancy troubled; routine delivery"
                    type="radio">
                    <span class="option-title"> Pregnancy troubled, routine delivery </span> </div>
                  <div class="option clearfix">
                    <input data="4. Were pregnancy and delivery normal?" name="field4a" id="" value="Pregnancy untroubled; problems during delivery"
                    type="radio">
                    <span class="option-title"> Pregnancy untroubled; problems during delivery </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="4. Were pregnancy and delivery normal?" name="field4a" id="" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field5-container" class="field f_100 radio-group required">
                  <label for="field5">5. Was the birth premature (birth weight under 5 lbs.)? </label>
                  <div class="option clearfix">
                    <input data="5. Was the birth premature (birth weight under 5 lbs.)?" name="field5a" id="" value="Yes" type="radio">
                    <span class="option-title"> Yes (about
                    <input data="premature - # of weeks early?" name="field5a1" id="" type="text" class="numeral">
                    weeks early;
                    <input data="premature - # of pounds" name="field5a2" id="" type="text" class="numeral">
                    pounds</span> </div>
                  <div class="option clearfix">
                    <input data="5. Was the birth premature (birth weight under 5 lbs.)?" name="field5a" id="" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="5. Was the birth premature (birth weight under 5 lbs.)?" name="field5a" id="" value="Don't know." type="radio">
                    <span class="option-title"> Don't know</span></div>
                </div>
                <div id="field6-container" class="field f_100 radio-group required">
                  <label for="field6">6. Was the child given oxygen <em>in the first</em> week? </label>
                  <div class="option clearfix">
                    <input data="6. Was the child given oxygen <em>in the first</em> week?" name="field6a" id="" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="6. Was the child given oxygen <em>in the first</em> week?" name="field6a" id="" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="6. Was the child given oxygen <em>in the first</em> week?" name="field6a" id="" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> </div>
                </div>
                <div id="field7-container" class="field f_100 radio-group required">
                  <label for="field7">7. Appearance of child during first few weeks after birth: </label>
                  <div class="option clearfix">
                    <input data="7. Appearance of child during first few weeks after birth: " name="field7a" id="" value="Pale, delicate looking" type="radio">
                    <span class="option-title"> Pale, delicate looking </span> </div>
                  <div class="option clearfix">
                    <input data="7. Appearance of child during first few weeks after birth: " name="field7a" id="" value="Unusually healthy looking" type="radio">
                    <span class="option-title"> Unusually healthy looking </span> </div>
                  <div class="option clearfix">
                    <input data="7. Appearance of child during first few weeks after birth: " name="field7a" id="" value="Average, don't know, or other" type="radio">
                    <span class="option-title"> Average, don't know, or other </span> </div>
                </div>
                <div id="field8-container" class="field f_100 radio-group">
                  <label for="field8">8. Unusual conditions of birth and infancy (click only one button in left-hand column): </label>
                  <div class="option clearfix">
                    <input data="8. Unusual conditions of birth and infancy: Type" name="field8a" id="" value="Unusual conditions" type="radio">
                    <em> 1.</em><span class="option-title"> Unusual conditions (indicate which: </span></div>
                  <div class="option clearfix spaceindent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    	<input data="8. Unusual conditions of birth and infancy" name="field8" id="field8a1" type="checkbox" value="blindness">
                    <span class="option-title">blindness, </span></div>
                  <div class="option clearfix spaceindent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input data="8. Unusual conditions of birth and infancy" name="field8" id="field8a2" type="checkbox" value="cerbral palsey">
                    <span class="option-title">cerebral palsey, </span></div>
                  <div class="option clearfix spaceindent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input data="8. Unusual conditions of birth and infancy" name="field8" id="field8a3" type="checkbox" value="birth injury">
                    <span class="option-title">birth injury, </span></div>
                  <div class="option clearfix spaceindent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input data="8. Unusual conditions of birth and infancy" name="field8" id="field8a4" type="checkbox" value="seizures">
                    <span class="option-title">seizures, </span></div>
                  <div class="option clearfix spaceindent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input data="8. Unusual conditions of birth and infancy" name="field8" id="field8a5" type="checkbox" value="blue baby">
                    <span class="option-title">blue baby, </span></div>
                  <div class="option clearfix spaceindent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input data="8. Unusual conditions of birth and infancy" name="field8" id="field8a6" type="checkbox" value="very high fever">
                    <span class="option-title">very high fever, </span></div>
                  <div class="option clearfix spaceindent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input data="8. Unusual conditions of birth and infancy" name="field8" id="field8a7" type="checkbox" value="jaundice">
                    <span class="option-title">jaundice,</span></div>
                  <div class="option clearfix spaceindent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other:
                    <input data="8. Unusual conditions of birth and infancy" name="field8" id="field8a8" type="text" maxlength="25">
                    ) </div>
                  <div class="option clearfix radio-group">
                    <input data="8. Unusual conditions of birth and infancy: Type" name="field8a" id="" value="Twin Birth"  type="radio">
                    <span class="option-title"><em> 2.</em> Twin Birth (
                    <input data="8. Unusual conditions of birth and infancy: Twins" name="field8b1" id="" type="radio" value="identical">
                    identical,
                    <input data="8. Unusual conditions of birth and infancy: Twins" name="field8b1" id="" type="radio" value="fraternal">
                    fraternal)</span> </div>
                  <div class="option clearfix">
                    <input data="8. Unusual conditions of birth and infancy: Type" name="field8a" id="" value="Unusual Condition & Twins"
           type="radio">
                    <em><span class="option-title"> 3</span></em><span class="option-title">. Both 1 and 2</span> </div>
                  <div class="option clearfix">
                    <input data="8. Unusual conditions of birth and infancy: Type" name="field8a" id="" value="Average, don't know, or other"  type="radio">
                    <em>4.</em><span class="option-title"> Normal, or don't know</span> </div>
                </div>
                <div id="field9-container" class="field f_100 radio-group">
                  <label for="field9">9. Concerning baby's health in first 3 months </label>
                  <div class="option clearfix">
                    <input data="9. Concerning baby's health in first 3 months" name="field9a" id="" value="Excellent health, no problems" type="radio">
                    <em><span class="option-title">1. </span></em><span class="option-title"> Excellent health, no problems </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="9. Concerning baby's health in first 3 months" name="field9a" id="" value="Respiration" type="radio">
                    <span class="option-title"> <em>2.</em> Respiration (
                    <input data="9. Concerning baby's health in first 3 months: Type" name="field9" id="field9b1" type="checkbox" value="frequent infections">
                    frequent infections,
                    <input data="9. Concerning baby's health in first 3 months: Type" name="field9" id="field9b2" type="text">
                    other) </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="9. Concerning baby's health in first 3 months: Type" name="field9" id="field9c" value="Skin" type="radio">
                    <em><span class="option-title"> 3</span></em><span class="option-title">. Skin (
                    <input data="9. Concerning baby's health in first 3 months: Rashes" name="field9" id="field9c1" type="checkbox" value="">
                    rashes,
                    <input data="9. Concerning baby's health in first 3 months: infections" name="field9" id="field9c2" type="checkbox" value="">
                    infections,
                    <input data="9. Concerning baby's health in first 3 months: allergy" name="field9" id="field9c3" type="checkbox" value="">
                    allergy,
                    <input data="9. Concerning baby's health in first 3 months: other" name="field9" id="field9c4" type="text">
                    other)</span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="9. Concerning baby's health in first 3 months: Type" name="field9" id="field9d" value="Feeding" type="radio">
                    <em>4. </em><span class="option-title">Feeding (
                    <input data="9. Concerning baby's health in first 3 months: learing to suck" name="field9" id="field9d1" type="checkbox" value="true">
                    learing to suck,
                    <input data="9. Concerning babys health in first 3 months: colic" name="field9" id="field9d2" type="checkbox" value="true">
                    colic,
                    <input data="9. Concerning babys health in first 3 months: vomiting" name="field9" id="field9d3" type="checkbox" value="true">
                    vomiting,
                    <input data="9. Concerning baby's health in first 3 months: other" name="field9" id="field9d4" type="text">
                    other)</span> </div>
                  <div class="option clearfix">
                    <input data="9. Concerning baby's health in first 3 months: Type" name="field9" id="field9e" value="Elimination" type="radio">
                    <em><span class="option-title"> 5</span></em><span class="option-title">. Elimination (
                    <input data="9. Concerning baby's health in first 3 months: diarrhea" name="field9e1" id="field9e1" type="checkbox" value="true">
                    diarrhea,
                    <input data="9. Concerning baby's health in first 3 months: constipation" name="field9e2" id="field9e2" type="checkbox" value="true">
                    constipation,
                    <input data="9. Concerning baby's health in first 3 months: other" name="field9e3" id="field9e3" type="text">
                    other) </span> </div>
                  <div class="option clearfix">
                    <input data="9. Concerning baby's health in first 3 months: Type" name="field9" id="field9f" value="Several of Above" type="radio">
                    <span class="option-title"><em>6.</em> Several of above (indicate which):
                    <input data="9. Concerning baby's health in first 3 months: Respiration" name="field9" id="field9f1" type="checkbox" value="true">
                    Respiration,
                    <input data="9. Concerning baby's health in first 3 months: Skin" name="field9" id="field9f2" type="checkbox" value="true">
                    Skin,
                    <input data="9. Concerning baby's health in first 3 months: Feeding" name="field9" id="field9f3" type="checkbox" value="true">
                    Feeding,
                    <input data="9. Concerning baby's health in first 3 months: Elimination" name="field9" id="field9f4" type="checkbox" value="true">
                    Elimination</span> </div>
                </div>
                <div id="field10-container" class="field f_100 radio-group required">
                  <label for="field10">10. Has the child been given an electroencephalogram (EEG)? </label>
                  <div class="option clearfix">
                    <input data="10. Has the child been given an electroencephalogram (EEG)?" name="field10" id="field10a" value="Yes, it was considered normal." type="radio">
                    <span class="option-title"> Yes, it was considered normal</span></div>
                  <div class="option clearfix">
                    <input data="10. Has the child been given an electroencephalogram (EEG)?" name="field10" id="field10b" value="Yes, it was considered borderline." type="radio">
                    <span class="option-title"> Yes, it was considered borderline</span></div>
                  <div class="option clearfix">
                    <input data="10. Has the child been given an electroencephalogram (EEG)?" name="field10" id="field10c" value="Yes, it was considered abnormal." type="radio">
                    <span class="option-title"> Yes, it was considered abnormal </span> </div>
                  <div class="option clearfix">
                    <input data="10. Has the child been given an electroencephalogram (EEG)?" name="field10" id="field10d" value="No" type="radio">
                    <span class="option-title"> No, or don't know, or don't know results</span> <br>
                  </div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step4.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
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