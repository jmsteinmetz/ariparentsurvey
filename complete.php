<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step13='1' WHERE KeyID = '" . $token . "'";
$retval = mysql_query( $sql, $conn );

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
ul {margin: 0 10px 9px 10px}
ul li {line-height: 18px;
border-top: 1px solid #ccc;
border-left: 1px solid #ccc;
padding: 8px;
border-right: 1px solid #ccc;}
ul li:nth-child(odd) {background: #e2e2e2}
ul li.title { border-top-left-radius: 4px; border-top-right-radius: 4px; color:#fff; background-color:#39F}
ul li.footer {border-bottom-left-radius: 4px; border-bottom-right-radius: 4px; color:#fff; background-color:#39F; padding:0px; line-height:5px; height:7px}
p {margin: 0 10px 9px 10px;}
</style>
<script language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

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
          <h5>Survey Complete</h5>
        </div>
        <div class="widget-content">
          <div class="widget-box" style="display:table">
            <div class="TTWForm-container">
            <div style="padding:10px">
              <p>You have completed the survey. We thank you for your time. </p>
              <p><a href="https://www.autismdonations.com/donate.php" target="_blank">Please donate to ARI.</a></p>
              <p>
              		<ul style="list-style-type:none"> 
                    <li class="title">You submitted the following information:</li>
                    	<?php 
						$dbhost = 'localhost:3306';
						$dbuser = 'root';
						$dbpass = '2100hbo7';
						$conn = mysql_connect($dbhost, $dbuser, $dbpass);
						
						mysql_select_db('slingsurvey2');
						
						$data = mysql_query("SELECT * FROM tblparentsurvey WHERE token='" . $token . "'") 
						 or die(mysql_error()); 
						
						 while($info = mysql_fetch_array( $data )) 
						 { 
						echo "<li>" . $info['question'] . " : " . $info['answer'] ; 
						 } 
						  ?>
                          <li class="footer"></li>
                    </ul>
               </p>
               </div>
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