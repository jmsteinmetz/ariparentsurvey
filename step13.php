<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step12='1' WHERE KeyID = '" . $token . "'";
$retval = mysql_query( $sql, $conn );

$result = mysql_query("SELECT * FROM tblusers WHERE KeyID='" . $token ."'");
if(mysql_num_rows($result) > 0)
    while($show = mysql_fetch_array($result))
    {
		if ($show["step13"] == '1') { 
			header("Location: complete.php?token=" . $token);
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
          <h5>Questions 101-109</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
                <div id="field101-container" class="field f_100 radio-group required">
                  <label for="field101"> 101. Before age 10, holds bizarre pose or posture </label>
                  <div class="option clearfix">
                    <input data="101. Before age 10, holds bizarre pose or posture" name="field101" id="field101a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="101. Before age 10, holds bizarre pose or posture" name="field101" id="field101b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="101. Before age 10, holds bizarre pose or posture" name="field101" id="field101c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field102-container" class="field f_100 radio-group required">
                  <label for="field102"> 102. Before age 10, chews or swallows nonfood objects </label>
                  <div class="option clearfix">
                    <input data="102. Before age 10, chews or swallows nonfood objects" name="field102" id="field102a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="102. Before age 10, chews or swallows nonfood objects" name="field102" id="field102b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="102. Before age 10, chews or swallows nonfood objects" name="field102" id="field102c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field103-container" class="field f_100 radio-group required">
                  <label for="field103"> 103. Before age 10, dislikes being touched or held </label>
                  <div class="option clearfix">
                    <input data="103. Before age 10, dislikes being touched or held" name="field103" id="field103a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="103. Before age 10, dislikes being touched or held" name="field103" id="field103b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="103. Before age 10, dislikes being touched or held" name="field103" id="field103c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field104-container" class="field f_100 radio-group required">
                  <label for="field104"> 104. Before age 10, intensely aware of odors </label>
                  <div class="option clearfix">
                    <input data="104. Before age 10, intensely aware of odors" name="field104" id="field104a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="104. Before age 10, intensely aware of odors" name="field104" id="field104b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="104. Before age 10, intensely aware of odors" name="field104" id="field104c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field105-container" class="field f_100 radio-group required">
                  <label for="field105"> 105. Before age 10, hides skill or knowledge, so you are surprised later on </label>
                  <div class="option clearfix">
                    <input data="105. Before age 10, hides skill or knowledge, so you are surprised later on" name="field105" id="field105a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="105. Before age 10, hides skill or knowledge, so you are surprised later on" name="field105" id="field105b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="105. Before age 10, hides skill or knowledge, so you are surprised later on" name="field105" id="field105c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field106-container" class="field f_100 radio-group required">
                  <label for="field106"> 106. Before age 10, seems not to feel pain </label>
                  <div class="option clearfix">
                    <input data="106. Before age 10, seems not to feel pain" name="field106" id="field106a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="106. Before age 10, seems not to feel pain" name="field106" id="field106b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="106. Before age 10, seems not to feel pain" name="field106" id="field106c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field107-container" class="field f_100 radio-group required">
                  <label for="field107"> 107. Before age 10, terrified at unusual happenings </label>
                  <div class="option clearfix">
                    <input data="107. Before age 10, terrified at unusual happenings" name="field107" id="field107a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="107. Before age 10, terrified at unusual happenings" name="field107" id="field107b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="107. Before age 10, terrified at unusual happenings" name="field107" id="field107c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field108-container" class="field f_100 radio-group required">
                  <label for="field108"> 108. Before age 10, learned words useless to him/herself </label>
                  <div class="option clearfix">
                    <input data="108. Before age 10, learned words useless to him/herself" name="field108" id="field108a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="108. Before age 10, learned words useless to him/herself" name="field108" id="field108b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="108. Before age 10, learned words useless to him/herself" name="field108" id="field108c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field109-container" class="field f_100 radio-group required">
                  <label for="field109"> 109. Before age 10, learned certain words, then stopped using them </label>
                  <div class="option clearfix">
                    <input data="109. Before age 10, learned certain words, then stopped using them" name="field109" id="field109a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="109. Before age 10, learned certain words, then stopped using them" name="field109" id="field109b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="109. Before age 10, learned certain words, then stopped using them" name="field109" id="field109c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step14.php?token=<?php echo $token ?>" class="btn btn-primary">Complete</a> </div>
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