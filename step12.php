<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step11='1' WHERE KeyID = '" . $token . "'";
$retval = mysql_query( $sql, $conn );

$result = mysql_query("SELECT * FROM tblusers WHERE KeyID='" . $token ."'");
if(mysql_num_rows($result) > 0)
    while($show = mysql_fetch_array($result))
    {
		if ($show["step12"] == '1') { 
			header("Location: step13.php?token=" . $token);
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
          <h5>Questions 91-100</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <?php include("inc/note.php"); ?>
              <form id="arisurvey" >
              	 <div id="field91-container" class="field f_100 radio-group required">
                  <label for="field91"> 91. Before age 10, always frightened or very anxious </label>
                  <div class="option clearfix">
                    <input data="91. Before age 10, always frightened or very anxious" name="field91" id="field91a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="91. Before age 10, always frightened or very anxious" name="field91" id="field91b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="91. Before age 10, always frightened or very anxious" name="field91" id="field91c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field92-container" class="field f_100 radio-group required">
                  <label for="field92"> 92. Before age 10, inconsolable crying </label>
                  <div class="option clearfix">
                    <input data="92. Before age 10, inconsolable crying" name="field92" id="field92a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="92. Before age 10, inconsolable crying" name="field92" id="field92b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="92. Before age 10, inconsolable crying" name="field92" id="field92c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field93-container" class="field f_100 radio-group required">
                  <label for="field93"> 93. Before age 10, notices changes or imperfections and tries to correct them </label>
                  <div class="option clearfix">
                    <input data="93. Before age 10, notices changes or imperfections and tries to correct them" name="field93" id="field93a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="93. Before age 10, notices changes or imperfections and tries to correct them" name="field93" id="field93b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="93. Before age 10, notices changes or imperfections and tries to correct them" name="field93" id="field93c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field94-container" class="field f_100 radio-group required">
                  <label for="field94"> 94. Before age 10, tidy (neat, avoids messy things) </label>
                  <div class="option clearfix">
                    <input data="94. Before age 10, tidy (neat, avoids messy things)" name="field94" id="field94a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="94. Before age 10, tidy (neat, avoids messy things)" name="field94" id="field94b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="94. Before age 10, tidy (neat, avoids messy things)" name="field94" id="field94c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field95-container" class="field f_100 radio-group required">
                  <label for="field95"> 95. Before age 10, has collected a particular thing (toy horses, bits of glass, etc.)</label>
                  <div class="option clearfix">
                    <input data="95. Before age 10, has collected a particular thing (toy horses, bits of glass, etc.)" name="field95" id="field95a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="95. Before age 10, has collected a particular thing (toy horses, bits of glass, etc.)" name="field95" id="field95b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="95. Before age 10, has collected a particular thing (toy horses, bits of glass, etc.)" name="field95" id="field95c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field96-container" class="field f_100 radio-group required">
                  <label for="field96"> 96. Before age 10, after delay, repeat <strong>phrases</strong> he/she has heard </label>
                  <div class="option clearfix">
                    <input data="96. Before age 10, after delay, repeat <strong>phrases</strong> he/she has heard" name="field96" id="field96a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="96. Before age 10, after delay, repeat <strong>phrases</strong> he/she has heard" name="field96" id="field96b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="96. Before age 10, after delay, repeat <strong>phrases</strong> he/she has heard" name="field96" id="field96c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field97-container" class="field f_100 radio-group required">
                  <label for="field97"> 97. Before age 10, after delay, repeats <strong>whole sentences</strong> he/she has heard </label>
                  <div class="option clearfix">
                    <input data=" 97. Before age 10, after delay, repeats <strong>whole sentences</strong> he/she has heard" name="field97" id="field97a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data=" 97. Before age 10, after delay, repeats <strong>whole sentences</strong> he/she has heard" name="field97" id="field97b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data=" 97. Before age 10, after delay, repeats <strong>whole sentences</strong> he/she has heard" name="field97" id="field97c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field98-container" class="field f_100 radio-group required">
                  <label for="field98"> 98. Before age 10, repeats <strong>questions</strong> or <strong>conversations</strong> he/she has heard, over and
                    over, without variation </label>
                  <div class="option clearfix">
                    <input data=" 98. Before age 10, repeats <strong>questions</strong> or <strong>conversations</strong> he/she has heard, over and over, without variation" name="field98" id="field98a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data=" 98. Before age 10, repeats <strong>questions</strong> or <strong>conversations</strong> he/she has heard, over and over, without variation" name="field98" id="field98b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data=" 98. Before age 10, repeats <strong>questions</strong> or <strong>conversations</strong> he/she has heard, over and over, without variation" name="field98" id="field98c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field99-container" class="field f_100 radio-group required">
                  <label for="field99"> 99. Before age 10, gets "hooked" or fixated on one topic (like cars, maps, death)</label>
                  <div class="option clearfix">
                    <input data="99. Before age 10, gets "hooked" or fixated on one topic (like cars, maps, death)" name="field99" id="field99a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="99. Before age 10, gets "hooked" or fixated on one topic (like cars, maps, death)" name="field99" id="field99b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="99. Before age 10, gets "hooked" or fixated on one topic (like cars, maps, death)" name="field99" id="field99c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field100-container" class="field f_100 radio-group required">
                  <label for="field100"> 100. Before age 10, examines surfaces with fingers </label>
                  <div class="option clearfix">
                    <input data="100. Before age 10, examines surfaces with fingers" name="field100" id="field100a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="100. Before age 10, examines surfaces with fingers" name="field100" id="field100b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="100. Before age 10, examines surfaces with fingers" name="field100" id="field100c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step13.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
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