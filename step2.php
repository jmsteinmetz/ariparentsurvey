<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('slingsurvey2');

$sql = "UPDATE tblusers SET step1='1' WHERE KeyID = '" . $token . "'";
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
		} elseif ($show["step2"] == '1') { 
			header("Location: step3.php?token=" . $token);
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
		
		$('#arisurvey input').each(function(){
			var token = "<?php echo $token ?>";
						var question = $(this).attr("data");
						$.ajax({
						url: 'request.php',
						data: "token=" + token + "&question=" + question, 
						success: function(response) {  
							console.log(response)
							$(this).val("test");
							} 
						});
				});
		
		$('#arisurvey textarea').blur(function() {
				var fieldid = $(this).attr("name");
				var label = $(this).attr('data');
				var value = $(this).val();
				var token = "<?php echo $token ?>";
				$.ajax({
					url: 'submit.php',
					data: "label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token,
					success: function(response) {           
						//console.log("label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token);
						//console.log(response);
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
						//console.log("label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token);
						//console.log(response);
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
						//console.log("label=" + encodeURIComponent(label) + "&value=" +  encodeURIComponent(value) + "&token=" + token);
						//console.log(response);
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
          <h5>Background Information</h5>
        </div>
        
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            
            <div class="TTWForm-container">
              <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
                <div id="fielda-container" class="field f_100">
                  <label for="fielda">Child's First Name: </label>
                  <input data="Child's First Name" name="fielda" id="fielda" required type="text" value="">
                </div>
                <div id="fieldb-container" class="field f_100">
                  <label for="fieldb">Child's Last Name: </label>
                  <input data="Child's Last Name" name="fieldb" id="fieldb" required type="text">
                </div>
                <div id="fieldc-container" class="field f_100">
                  <label for="fieldc">Child's Date of Birth (DD/MM/YYYY): </label>
                  <input data="Child's Date of Birth" name="fieldc" id="fieldc" required type="text">
                </div>
                <div id="fieldd-container" class="field f_100">
                  <label for="fieldd">First Name of Person completing Form: </label>
                  <input data="First Name of Person completing Form" name="fieldd" id="fieldd" required type="text">
                </div>
                <div id="fielde-container" class="field f_100">
                  <label for="fielde">Last Name of Person completing Form: </label>
                  <input data="Last Name of Person completing Form" name="fielde" id="fielde" required type="text">
                </div>
                <div id="fieldf-container" class="field f_100 radio-group">
                  <label for="fieldf">Relationship to Child: </label>
                  <div class="option clearfix">
                    <input data="Relationship to Child" name="fieldf" type="radio" value="mother">
                    Mother</div>
                  <div class="option clearfix">
                    <input data="Mother" name="fieldf" type="radio" value="father">
                    Father</div>
                  <div class="option clearfix">
                    <input data="Father" name="fieldf" type="radio" value="mother">
                    Other:
                    <input data="Other" name="fieldf" id="fieldf1" type="text">
                  </div>
                </div>
                <div id="fieldg-container" class="field f_100">
                  <label for="fieldg">Street Address </label>
                  <input data="Street Address" name="fieldg" id="fieldg" required type="text">
                </div>
                <div id="fieldh-container" class="field f_100">
                  <label for="fieldh">City </label>
                  <input data="City" name="fieldh" id="fieldh" required type="text">
                </div>
                <div id="fieldi-container" class="field f_100">
                  <label for="fieldi">State </label>
                  <input data="State" name="fieldi" id="fieldi" required type="text">
                </div>
                <div id="fieldj-container" class="field f_100">
                  <label for="fieldj">Country </label>
                  <input data="Country" name="fieldj" id="fieldj" required type="text">
                </div>
                <div id="fieldk-container" class="field f_100">
                  <label for="fieldk">Zip </label>
                  <input data="Zip" max="11" min="5" name="fieldk" id="fieldk" type="text">
                </div>
                <div id="fieldl-container" class="field f_100">
                  <label for="fieldl">Phone </label>
                  <input data="Phone" name="fieldl" id="fieldl" type="text">
                </div>
                <div id="fieldm-container" class="field f_100">
                  <label for="fieldm"> Father's Occupation </label>
                  <input data="Father's Occupation" name="fieldm" id="fieldm" type="text">
                </div>
                <div id="fieldn-container" class="field f_100">
                  <label for="fieldn"> Father's Past Occupation </label>
                  <input data="Father's Past Occupation" name="fieldn" id="fieldn" type="text">
                </div>
                <div id="fieldo-container" class="field f_100">
                  <label for="fieldo"> Mother's Occupation </label>
                  <input data="Mother's Occupation" name="fieldo" id="fieldo" type="text">
                </div>
                <div id="fieldp-container" class="field f_100">
                  <label for="fieldp"> Mother's Past Occupation </label>
                  <input data="Mother's Past Occupation" name="fieldp" id="fieldp" type="text">
                </div>
                <div id="fieldq-container" class="field f_100 radiogroup">
                  <label for="fieldq"> Has the Child Been Diagnosed Before? </label>
                  <div class="option clearfix">
                    <input data="Has the Child Been Diagnosed Before?" name="fieldq" id="fieldp" type="radio" value="Yes">
                    Yes,</div>
                  <div class="option clearfix">
                    <input data="Has the Child Been Diagnosed Before?" name="fieldq" id="fieldp" type="radio" value="No">
                    No; </div>
                  <div class="option clearfix">If yes, what was diagnosis?
                    <input data="If yes, what was diagnosis?" name="fieldq" type="text" id="fieldq1" value="">
                  </div>
                </div>
                <div id="fieldr-container" class="field f_100">
                  <label for="fieldr"> Diagnosed By: </label>
                  <input data="Diagnosed By:" name="fieldr" id="fieldr" type="text">
                </div>
                <div id="fields-container" class="field f_100">
                  <label for="fieldt"> Where was he/she diagnosed? </label>
                  <input data="Where was he/she diagnosed?" name="fieldt" id="fieldt" type="text">
                </div>
                <div id="fieldt-container" class="field f_100">
                  <label for="fieldu"> Any other diagnosis? </label>
                  <input data="Any other diagnosis? " name="fieldu" id="fieldu" type="text">
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px">
                  <a href="step3.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a>
                </div>
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