<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step10='1' WHERE KeyID = '" . $token . "'";
$retval = mysql_query( $sql, $conn );

$result = mysql_query("SELECT * FROM tblusers WHERE KeyID='" . $token ."'");
if(mysql_num_rows($result) > 0)
    while($show = mysql_fetch_array($result))
    {
		if ($show["step12"] == '1') { 
			header("Location: step13.php?token=" . $token);
		} elseif ($show["step11"] == '1') { 
			header("Location: step12.php?token=" . $token);
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
          <h5>Questions 81-90</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
              	<div id="field81-container" class="field f_100 radio-group required">
                  <label for="field81"> 81. Before age 2, struggled against being held </label>
                  <div class="option clearfix">
                    <input data="81. Before age 2, struggled against being held" name="field81" id="field81a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="81. Before age 2, struggled against being held" name="field81" id="field81b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="81. Before age 2, struggled against being held" name="field81" id="field81c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field82-container" class="field f_100 radio-group required">
                  <label for="field82"> 82. Before age 10, abnormal craving for certain food </label>
                  <div class="option clearfix">
                    <input data="82. Before age 10, abnormal craving for certain food" name="field82" id="field82a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="82. Before age 10, abnormal craving for certain food" name="field82" id="field82b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="82. Before age 10, abnormal craving for certain food" name="field82" id="field82c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field83-container" class="field f_100 radio-group required">
                  <label for="field83"> 83. Before age 10, eats unusually large amounts of food </label>
                  <div class="option clearfix">
                    <input data="83. Before age 10, eats unusually large amounts of food" name="field83" id="field83a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="83. Before age 10, eats unusually large amounts of food" name="field83" id="field83b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="83. Before age 10, eats unusually large amounts of food" name="field83" id="field83c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field84-container" class="field f_100 radio-group required">
                  <label for="field84"> 84. Before age 10, covers ears at many sounds </label>
                  <div class="option clearfix">
                    <input data="84. Before age 10, covers ears at many sounds" name="field84" id="field84a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="84. Before age 10, covers ears at many sounds" name="field84" id="field84b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="84. Before age 10, covers ears at many sounds" name="field84" id="field84c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field85-container" class="field f_100 radio-group required">
                  <label for="field85"> 85. Before age 10, only certain sounds seem painful to him/her </label>
                  <div class="option clearfix">
                    <input data="85. Before age 10, only certain sounds seem painful to him/her" name="field85" id="field85a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="85. Before age 10, only certain sounds seem painful to him/her" name="field85" id="field85b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="85. Before age 10, only certain sounds seem painful to him/her" name="field85" id="field85c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field86-container" class="field f_100 radio-group required">
                  <label for="field86"> 86. Before age 10, fails to blink at bright lights </label>
                  <div class="option clearfix">
                    <input data="86. Before age 10, fails to blink at bright lights" name="field86" id="field86a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="86. Before age 10, fails to blink at bright lights" name="field86" id="field86b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="86. Before age 10, fails to blink at bright lights" name="field86" id="field86c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field87-container" class="field f_100 radio-group required">
                  <label for="field87"> 87. Before age 10, skin color lighter or darker than others in family (which?
                    <input data="87. Before age 10, skin color lighter or darker than others in family: lighter" type="radio" name="field87-1" id="field87a">
                    lighter
                    <input data="87. Before age 10, skin color lighter or darker than others in family: darker " type="radio" name="field87-1" id="field87a1">
                    darker) </label>
                  <div class="option clearfix">
                    <input data="87. Before age 10, skin color lighter or darker than others in family:" name="field87" id="field87b" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="87. Before age 10, skin color lighter or darker than others in family:" name="field87" id="field87c" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="87. Before age 10, skin color lighter or darker than others in family:" name="field87" id="field87d" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field88-container" class="field f_100 radio-group required">
                  <label for="field88"> 88. Before age 10, prefers inanimate (nonliving) things </label>
                  <div class="option clearfix">
                    <input data="88. Before age 10, prefers inanimate (nonliving) things" name="field88" id="field87a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="88. Before age 10, prefers inanimate (nonliving) things" name="field88" id="field88b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="88. Before age 10, prefers inanimate (nonliving) things" name="field88" id="field88c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field89-container" class="field f_100 radio-group required">
                  <label for="field89-1"> 89. Before age 10, avoids people </label>
                  <div class="option clearfix">
                    <input data="89. Before age 10, avoids people" name="field89" id="field89a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="89. Before age 10, avoids people" name="field89" id="field89b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="89. Before age 10, avoids people" name="field89" id="field89c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field90-container" class="field f_100 radio-group required">
                  <label for="field90"> 90. Before age 10, insists on keeping certain object with him/her </label>
                  <div class="option clearfix">
                    <input data="90. Before age 10, insists on keeping certain object with him/her" name="field90" id="field90a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="90. Before age 10, insists on keeping certain object with him/her" name="field90" id="field90b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="90. Before age 10, insists on keeping certain object with him/her" name="field90" id="field90c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step12.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
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