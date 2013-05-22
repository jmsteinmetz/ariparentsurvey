<?php
$token = $_GET['token'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//UPDATE DB RECORD
$sql = "UPDATE tblusers SET step14='1' WHERE KeyID = '" . $token . "'";
$retval = mysql_query( $sql, $conn );

$result = mysql_query("SELECT * FROM tblusers WHERE KeyID='" . $token ."'");
if(mysql_num_rows($result) > 0)
    while($show = mysql_fetch_array($result))
    {
    if ($show["step15"] == '1') { 
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
          <h5>Questions 110-109</h5>
        </div>
          <div class="widget-content">
            <div class="widget-box" style="display:table; width:100%">
              <div class="TTWForm-container">
                
                <form id="arisurvey" >
                  
                  <!--Field Set 1-->
                  <div id="field1-container" class="field f_100 radio-group ">
                    <label for="field1-1"> 110. Did the mother receive a fertility treatment to promote the pregnancy? </label>
                    <div class="option clearfix">
                      <input name="field1" id="field1-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field1" id="field1-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field1" id="field1-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  
                  <!--Field Set 1a-->
                  <div id="field1a-container" class="field f_100">
                    <label for="field1a"> If yes, what type? </label>
                    &nbsp;
                    <input name="field1-4" id="field1a" type="text">
                  </div>
                  <!--Field Set 2-->
                  <div id="field2-container" class="field f_100 radio-group ">
                    <label for="field2"> 111. Did the mother experience one (or more) fevers during her pregnancy? </label>
                    <div class="option clearfix">
                      <input name="field2" id="field2-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field2" id="field2-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field2" id="field2-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  <!--Field Set 2a-->
                  <div id="field2a-container" class="field f_100">
                    <label for="field2a"> If ‘yes,’ during what gestational month(s)? </label>
                    &nbsp;
                    <input name="field2a" id="field2-4" type="text">
                  </div>
                  <!--Field Set 3-->
                  <div id="field3-container" class="field f_100 radio-group ">
                    <label for="field3-1"> 112. Were there one or more ultrasounds given during the pregnancy? </label>
                    <div class="option clearfix">
                      <input name="field3" id="field3-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field3" id="field3-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field3" id="field3-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  <!--Field Set 3a-->
                  <div id="field3a-container" class="field f_100">
                    <label for="field3a"> If ‘yes,’ please list gestational age(s) when ultrasounds were given: </label>
                    <input name="field3a" id="field3-4" type="text">
                  </div>
                  <!--Field Set 4-->
                  <div id="field4-container" class="field f_100 checkbox-group ">
                    <label for="field4"> 113. During the pregnancy, did/was the mother: </label>
                    <div class="option clearfix">
                      <input name="field4a" id="field4-1" value="Consume alcohol" type="checkbox">
                      <span class="option-title"> Consume alcohol </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field4b" id="field4-2" value="Directly exposed to possibly toxic substances (e.g., fertilizer, household cleaners)"
                    type="checkbox">
                      <span class="option-title"> Directly exposed to possibly toxic substances (e.g., fertilizer, household
                      cleaners) </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field4c" id="field4-3" value="Gain excessive weight, more than expected"
                    type="checkbox">
                      <span class="option-title"> Gain excessive weight, more than expected </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field4d" id="field4-4" value="Received amalgam fillings"
                    type="checkbox">
                      <span class="option-title"> Received amalgam fillings </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field4e" id="field4-5" value="Smoke tobacco " type="checkbox">
                      <span class="option-title"> Smoke tobacco </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field4f" id="field4-6" value="Other" type="checkbox">
                      <span class="option-title"> Other </span> <br>
                    </div>
                  </div>
                  <!--Field Set 4g-->
                  <div id="field4g-container" class="field f_100">
                    <label for="field4g"> If other, please explain. </label>
                    &nbsp;
                    <input name="field4g" id="field4-7" type="text">
                  </div>
                  <!--Field Set 5-->
                  <div id="field5-container" class="field f_100 radio-group ">
                    <label for="field5"> 114. Did the mother receive prescription medications? </label>
                    <div class="option clearfix">
                      <input name="field5" id="field5-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field5" id="field5-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field5" id="field5-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  <!--Field Set 5a-->
                  <div id="field5a-container" class="field f_100">
                    <label for="field5a"> If ‘yes,’ please list </label>
                    <textarea rows="5" cols="20" name="field5-4" id="field10"></textarea>
                  </div>
                  <!--Field Set 6-->
                  <div id="field6-container" class="field f_100 radio-group ">
                    <label for="field6-1"> 115. Was the mother RH Negative? </label>
                    <div class="option clearfix">
                      <input name="field6" id="field6-1" value="Yes and was prescribed Rhogam"
                    type="radio">
                      <span class="option-title"> Yes and was prescribed Rhogam </span> </div>
                    <div class="option clearfix">
                      <input name="field6" id="field6-2" value="Yes and was NOT prescribed Rhogam"
                    type="radio">
                      <span class="option-title"> Yes and was <u>not</u> prescribed Rhogam </span> </div>
                    <div class="option clearfix">
                      <input name="field6" id="field6-3" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field6" id="field6-4" value="Don't know." type="radio">
                      <span class="option-title"> Don't know. </span> <br>
                    </div>
                  </div>
                  
                  <!--Field Set 6a--> 
                  <!--Field Set 7-->
                  <div id="field7-container" class="field f_100 radio-group ">
                    <label for="field7"> 116. What was the duration of the pregnancy:</label>
                    <input name="field7" id="field7-1" value="9 months" type="radio">&nbsp;&nbsp;Nine months (36 weeks)
                    <br>
                    <input name="field7" id="field7-2" value="Greater than 9 months" type="radio">&nbsp;&nbsp;Greater than 9 months. How long?
                    <input name="field7" id="field7-3"  type="text">
                    <br>
                    <input name="field7" id="field7-4" value="Less than 9 months" type="radio">&nbsp;&nbsp;Less than 9 months. How long?
                    <input name="field7" id="field7-5"  type="text">
                    <br>
                     <input name="field7" id="field7-6" value="I don't Know" type="radio">
                     &nbsp;Don't k&nbsp;now
                   <br>
                  </div>
                  
                  <!--Field Set 8-->
                  
                  <div id="field8-container" class="field f_100 checkbox-group ">
                    <label for="field8"> 117. Regarding the birth, please indicate those that apply: </label>
                    <div class="option clearfix">
                      <input name="field8" id="field8-1" value="Breech" type="checkbox">
                      <span class="option-title"> Breech </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-2" value="Cesarean section" type="checkbox">
                      <span class="option-title"> Cesarean section </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-3" value="Cord around neck" type="checkbox">
                      <span class="option-title"> Cord around neck </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-4" value="Forceps used" type="checkbox">
                      <span class="option-title"> Forceps used </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-5" value="Hypoxia – did not breathe immediately"
                    type="checkbox">
                      <span class="option-title"> Hypoxia – did not breathe immediately </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-6" value="Labor extremely long"
                    type="checkbox">
                      <span class="option-title"> Labor extremely long </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-7" value="Natural birth" type="checkbox">
                      <span class="option-title"> Natural birth </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-8" value="Pre-eclampsia/eclampsia"
                    type="checkbox">
                      <span class="option-title"> Pre-eclampsia/eclampsia </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-9" value="Other" type="checkbox">
                      <span class="option-title"> Other </span> &nbsp;
                      <input name="field8" id="field8-9a"  type="text">
                      <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-10" value="No" type="checkbox">
                      <span class="option-title"> No </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field8" id="field8-11" value="Don't Know" type="checkbox">
                      <span class="option-title"> Don't know </span> <br>
                    </div>
                  </div>
                  
                  <!--Field Set 9-->
                  
                  <div id="field16-container" class="field f_100 checkbox-group ">
                    <label for="field9"> 118. During the pregnancy, did the mother live near a: </label>
                    <div class="option clearfix">
                      <label for="field9-1"> Chemical plant, distance: </label>
                      <input name="field9" id="field9-1a" value="1 mile or less"
                    type="checkbox">
                      <span class="option-title">1 mile or less </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9" id="field9-1b" value="between 1-5 miles"
                    type="checkbox">
                      <span class="option-title">between 1-5 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9" id="field9-1c" value="between 5-10 miles"
                    type="checkbox">
                      <span class="option-title">between 5-10 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9" id="field9-1c" value="between 10-20 miles"
                    type="checkbox">
                      <span class="option-title">between 10-20 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                    <br>
                      <label for="field9-2"> Dry cleaners, distance: </label>
                      <br>
                      <input name="field9-2" id="field9-2a" value="Dry cleaners, 1 mile or less"
                    type="checkbox">
                      <span class="option-title"> 1 mile or less </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-2" id="field9-2b" value="between 1-5 miles"
                    type="checkbox">
                      <span class="option-title"> between 1-5 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-2" id="field9-2c" value="between 5-10 miles"
                    type="checkbox">
                      <span class="option-title"> between 5-10 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-2" id="field9-2d" value="between 10-20 miles"
                    type="checkbox">
                      <span class="option-title">between 10-20 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                    <br>
                      <label for="field9-3"> Farm, distance: </label>
                      <br>
                      <input name="field9-3" id="field9-3a" value="Farm, 1 mile or less"
                    type="checkbox">
                      <span class="option-title"> 1 mile or less </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-3" id="field9-3b" value="between 1-5 miles" type="checkbox">
                      <span class="option-title"> between 1-5 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-3" id="field9-3c" value="between 5-10 miles" type="checkbox">
                      <span class="option-title"> between 5-10 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-3" id="field9-3d" value="between 10-20 miles" type="checkbox">
                      <span class="option-title"> between 10-20 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                    <br>
                      <label for="field9-3"> Gasoline service station, distance: </label>
                      <br>
                      <input name="field9-3" id="field9-3e" value="Gasoline service station, 1 mile or less"
                    type="checkbox">
                      <span class="option-title"> 1 mile or less </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-4" id="field9-4a" value="Gasoline service station, 1-5 miles"
                    type="checkbox">
                      <span class="option-title"> between 1-5 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-4" id="field9-4b" value="Gasoline service station, 5-10 miles"
                    type="checkbox">
                      <span class="option-title"> between 5-10 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-4" id="field9-4c" value="Gasoline service station, 10-20 miles"
                    type="checkbox">
                      <span class="option-title">between 10-20 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                    <br>
                      <label for="field9-5"> Hazardous waste dump, distance: </label>
                      <input name="field9-5" id="field9-5a" value="1 mile or less"
                    type="checkbox">
                      <span class="option-title"> 1 mile or less </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-5" id="field9-5b" value="between 1-5 miles"
                    type="checkbox">
                      <span class="option-title"> between 1-5 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-5" id="field9-5c" value="between 5-10 miles"
                    type="checkbox">
                      <span class="option-title"> between 5-10 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-5" id="field9-5d" value="between 10-20 miles"
                    type="checkbox">
                      <span class="option-title">between 10-20 miles </span> <br>
                    </div>
                    <div class="option clearfix">
             
                      <label for="field9-6"> Major highway or freeway, distance: </label>
                      <label for="9-6a"></label>
                    </span></div>
                    <div class="option clearfix">
<input name="field9-6" id="field9-6b" value="1 mile or less"
                    type="checkbox">
                      <span class="option-title">1 mile or less </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-6" id="field9-6c" value="between 1-5 miles"
                    type="checkbox">
                      <span class="option-title"> between 1-5 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-6" id="field9-6d" value="between 5-10 miles"
                    type="checkbox">
                      <span class="option-title"> between 5-10 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-6" id="field9-6d" value="between 10-20 miles"
                    type="checkbox">
                      <span class="option-title"> between 10-20 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                    <br>
                      <label for="field9-7"> Other: describe: 
                        <input type="text" name="9-7a" id="9-7a">
                        , distance: 
                      </label>
                      <label for="9-7a"></label>
                      <input name="field9-7" id="field9-7b" value="1 mile or less"
                    type="checkbox">
                      <span class="option-title">1 mile or less </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-7" id="field9-7c" value="between 1-5 miles"
                    type="checkbox">
                      <span class="option-title"> between 1-5 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-71" id="field9-7d" value="between 5-10 miles"
                    type="checkbox">
                      <span class="option-title"> between 5-10 miles </span> <br>
                    </div>
                    <div class="option clearfix">
                      <input name="field9-7" id="field9-7e" value="between 10-20 miles"
                    type="checkbox">
                      <span class="option-title"> between 10-20 miles </span> <br>
                    </div>
                  </div>
                  <!--  <div id="field17-container" class="field f_100">
                    <label for="field17"> If other, please list location and distance. </label>
                    <input name="field17" id="field17" type="text">
                  </div>--> 
                  <!--Field Set 18-->
                  <div class="widget-head" style="clear:both; margin:15px 0 10px 0">
                    <h5>Section B – Family-Related Questions</h5>
                  </div>
                  <div id="field10-container" class="field f_100 radio-group ">
                    <label for="field10"> 119. During the pregnancy, did the mother live near or in a community where
                      there was sometimes a smell in the air, whether or not the source of the
                      smell could be identified? </label>
                    <div class="option clearfix">
                      <input name="field10" id="field10-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field18" id="field10-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field18" id="field10-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  <!--Field Set 10a-->
                  <div id="field10a-container" class="field f_100">
                    <label for="field10a"> If ‘yes,’ description of smell: </label>
                    &nbsp;
                    <input name="field10a" id="field10a" type="text">
                  </div>
                  <!--End Section A--><!--Start Section B--> 
                  
                  <!--Field Set 11-->
                  <div id="field20-container" class="field f_100 radio-group ">
                    <label for="field11-1"> 120. Do you have more than one child with ASD? </label>
                    <div class="option clearfix">
                      <input name="field11" id="field11-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field11" id="field11-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field11" id="field11-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  <!--Field Set 11a-->
                  <div id="field11a-container" class="field f_100">
                    <label for="field11a">If 'yes,' how many?</label>
                    <input name="field11a" id="field11a-1" type="text" size="4">
                    <span>males;</span>
                    <input name="field11b" id="field11a-2" type="text" size="4">
                    <span>females</span> </div>
                  <!--Field Set 12-->
                  <div id="field12-container" class="field f_100 ">
                    <label for="field12"> 121. Family background. Select all that apply.</label>
                    <div class="option clearfix">
                      <input name="field12" id="field12-1" value="One or more first degree relatives on the autism spectrum"type="checkbox">
                      <span class="option-title"> One or more first degree relatives on the autism spectrum; </span>
                      <input name="field12" id="field12-1a" type="text" size="4">
                      <span>mother's side; </span>
                      <input name="field12" id="field12-1b" type="text" size="4">
                      <span>father's side</span> </div>
                    <div class="option clearfix">
                      <input name="field12" id="field12-2" value="One or more first degree relatives on the autism spectrum"type="checkbox">
                      <span class="option-title"> One or more second degree relatives on the autism spectrum; </span>
                      <input name="field12-1" id="field12-1a" type="text" size="4">
                      <span>mother's side; </span>
                      <input name="field22-1b" id="field12-1b" type="text" size="4">
                      <span>father's side</span> </div>
                    <div class="option clearfix">
                      <input name="field22-2" id="field12-1c" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field22-3" id="field12-1d" value="Don't know" type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  
                  <!--Field Set 13-->
                  
                  <div id="field13-container" class="field f_100 radio-group">
                    <label for="field13"> 122. Was your child Adopted?</label>
                    <div class="option clearfix">
                      <input name="field13" id="field13" value="Yes" type="checkbox">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field13" id="field13-1" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field13" id="field13-2" value="Don't know" type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  
                  <!--End Section B-->
                  
                  <div class="widget-head" style="clear:both; margin:15px 0 10px 0">
                    <h5>Section C – Questions Related to <!--Questions Related to -->Your Son's/Daughter's Health</h5>
                  </div>
                  <!--Start Section C--> 
                  
                  <!--Field Set 14-->
                  <div id="field14-container" class="field f_100 radio-group">
                    <label for="field14"> 123. Any history of hospitalization due to infection?</label>
                    <br>
                    <div class="option clearfix">
                      <input name="field14" id="field14" value="Yes" type="checkbox">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field14" id="field14-1" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field14" id="field14-2" value="Don't know" type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  <!--Field Set 15-->
                  
                  <div id="field15-container" class="field f_100 radio-group">
                    <label for="field15">124. Any history of infection requiring intravenous antibiotics?</label>
                    <br>
                    <div class="option clearfix">
                      <input name="field15" id="field15-1" value="Yes" type="checkbox">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field15" id="field15-2" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field15" id="field15-3" value="Don't know" type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  
                  <!--Field Set 15a-->
                  
                  <div id="field15a-container" class="field f_100 ">
                    <label for="field15a">If 'yes,' when and how treated:</label>
                    <textarea rows="5" cols="20" name="field15a" id="field15a"></textarea>
                  </div>
                  
                  <!--Field Set 16-->
                  
                  <div id="field16-container" class="field f_100">
                    <label for="field16"> 125. Any history of conditions associated with airborne allergens? Please check all that apply</label>
                    <br>
                    <div class="option clearfix">
                      <input name="field16" id="field16-1" value="Asthma" type="checkbox">
                      <span class="option-title"> Asthma </span> </div>
                    <div class="option clearfix">
                      <input name="field16" id="field16-2" value="Conjunctivitis" type="checkbox">
                      <span class="option-title"> Conjunctivitis </span> </div>
                    <div class="option clearfix">
                      <input name="field16" id="field16-3" value="IgG ELISA" type="checkbox">
                      <span class="option-title"> IgG ELISA </span> </div>
                    <div class="option clearfix">
                      <input name="field16" id="field16-4" value="Rhinitis" type="checkbox">
                      <span class="option-title">Rhinitis</span> </div>
                    <div class="option clearfix">
                      <input name="field16" id="field16-5" value="Skin condition" type="checkbox">
                      <span class="option-title"> Skin condition </span> </div>
                    <div class="option clearfix">
                      <input name="field16" id="field16-6" value="Skin condition" type="checkbox">
                      <span class="option-title"> Other: </span>
                      <textarea rows="5" cols="20" name="field16-7" id="field16-7"></textarea>
                    </div>
                  </div>
                  <!--Field Set 17-->
                  
                  <div id="field17-container" class="field f_100">
                    <label for="field17"> 126. If 'yes' to any of the above, how were the airborne allergens evaluated? </label>
                    <br>
                    <div class="option clearfix">
                      <input name="field17" id="field17-1" value="Blood testing" type="checkbox">
                      <span class="option-title"> Blood testing </span> </div>
                    <div class="option clearfix">
                      <input name="field17" id="field17-2" value="Clinical symptoms only" type="checkbox">
                      <span class="option-title"> Clinical symptoms only </span> </div>
                    <div class="option clearfix">
                      <input name="field17" id="field17-3" value="Skin testing" type="checkbox">
                      <span class="option-title"> Skin testing </span> </div>
                    <div class="option clearfix">
                      <input name="field17" id="field17-4" value="Skin condition" type="checkbox">
                      <span class="option-title"> Other: </span>
                      <textarea rows="5" cols="20" name="field17-5" id="field17-5"></textarea>
                    </div>
                  </div>
                  <!--Field Set 18-->
                  
                  <div id="field29-container" class="field f_100">
                    <div class="option clearfix"> <span class="option-title"> 18. What types of allergens does the child react to?  Please list: </span>
                      <textarea rows="5" cols="20" name="field18" id="field18"></textarea>
                    </div>
                  </div>
                  <!--Field Set 19-->
                  
                  <div id="field19-container" class="field f_100">
                    <label for="field19"> 127. Any tests done for assessing food allergies?</label>
                    <br>
                    <div class="option clearfix">
                      <input name="field19" id="field19-1" value="Yes" type="checkbox">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field19" id="field19-2" value="No" type="checkbox">
                      <span class="option-title">No </span> </div>
                    <div class="option clearfix">
                      <input name="field19" id="field19-3" value="Don't know    " type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                    <!--Field Set 19a-->
                  
                  <div id="field19a-container" class="field f_100 ">
                    <label for="field19a">If 'yes,' please list:</label>
                    <textarea rows="5" cols="20" name="field19a" id="field19a"></textarea>
                  </div>
                  
                  <!--Field Set 20-->
                 <div id="field20-container" class="field f_100">
                    <label for="field20"> 128. Any reactions to foods (same symptoms each time when the child eats a specfic food)? </label>
                    <div class="option clearfix">
                      <input name="field20" id="field20-1" value="Yes" type="checkbox">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field20" id="field20-2" value="No" type="checkbox">
                      <span class="option-title">No </span> </div>
                    <div class="option clearfix">
                      <input name="field20" id="field20-3" value="Don't know    " type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                    <!--Field Set 20a-->
                  
                  <div id="field20a-container" class="field f_100 ">
                    <label for="field20a">If 'yes,' please list foods, symptoms, and how soon the symptoms appear:</label>
                    <table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <th scope="col" align="left">Food</th>
                        <th scope="col" align="left">Symptoms</th>
                        <th scope="col" colspan="5" align="center">Approx. when do the symptoms appear</th>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td align="center"> 0-15/min.</td>
                        <td align="center">16-30/min.  </td>
                        <td align="center">31-60/min.   </td>
                        <td align="center">1hr-2hrs</td>
                        <td align="center">&gt;2hrs</td>
                      </tr>
                      <tr>
                        <td valign="middle"><input name="field20a" id="field20a-1" type="text" size="20"></td>
                        <td valign="middle"><input name="field20a" id="field20a-2" type="text" size="20"></td>
                        <td align="center" valign="middle"><input name="field20a" id="20a-3" value="0-15" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20a" id="field20a-4" value="16-30" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20a" id="field20a-5" value="31-60" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20a" id="field20a-6" value="1-2" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20a" id="field20a-7" value="2" type="checkbox"></td>
                      </tr>
                      <tr>
                        <td valign="middle"><input name="field20b" id="field20b-1" type="text" size="20"></td>
                        <td valign="middle"><input name="field20b" id="field20b-2" type="text" size="20"></td>
                        <td align="center" valign="middle"><input name="field20b-3" id="field20b-3" value="0-15" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20b" id="field20b-4" value="16-30" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20b" id="field20b-5" value="31-60" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20b" id="field20b-6" value="1-2" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20b" id="field-20b-7" value="2" type="checkbox"></td>
                      </tr>
                      <tr>
                        <td valign="middle"><input name="field20c" id="field20c-1" type="text" size="20"></td>
                        <td valign="middle"><input name="field20c" id="field20c-2" type="text" size="20"></td>
                        <td align="center" valign="middle"><input name="field20c" id="field20c-3" value="0-15" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20c" id="field20c-4" value="16-30" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20c" id="field20c-5" value="31-60" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20c" id="field20c-6" value="1-2" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20c" id="field20c-7" value="2" type="checkbox"></td>
                      </tr>
                      <tr>
                        <td valign="middle"><input name="field20d" id="field20d-1" type="text" size="20"></td>
                        <td valign="middle"><input name="field20d" id="field20d-2" type="text" size="20"></td>
                        <td align="center" valign="middle"><input name="field20d-3" id="field31-3b" value="0-15" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20d" id="field20d-4" value="16-30" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20d" id="field20d-5" value="31-60" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20d" id="field20d-6" value="1-2" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field20d" id="field20d-7" value="2" type="checkbox"></td>
                      </tr>
                    </table>
                  </div>
                  <!--Field Set 21-->
                  <div id="field21-container" class="field f_100">
                    <label for="field21">129. History of ear infection or other types of respiratory infection?</label>
                    <br>
                    <div class="option clearfix">
                      <input name="field21" id="field21-1" value="Pneumonia" type="checkbox">
                      <span class="option-title"> Pneumonia </span> </div>
                    <div class="option clearfix">
                      <input name="field21" id="field21-2" value="Sinusitis" type="checkbox">
                      <span class="option-title"> Sinusitis </span> </div>
                    <div class="option clearfix">
                      <input name="field21" id="field21-3" value="Other" type="checkbox">
                      <span class="option-title"> Other </span>
                      <textarea rows="5" cols="20" name="field21" id="field21-4"></textarea>
                    </div>
                    <div class="option clearfix">
                      <input name="field1" id="field21-5" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field21" id="field21-5" value="Don't know " type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  <!--Field Set 22-->
                  
                  <div id="field22-container" class="field f_100">
                    <label for="field22">130. Any history of ear infections in the past requiring antibiotics?</label>
                    <br>
                    <div class="option clearfix">
                      <input name="field22" id="field22-1" value="Yes" type="checkbox">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field22" id="field22-2" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field22" id="field22-3" value="Don't know " type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                    <div class="option clearfix"> <span class="option-title"> If 'yes,' approximately how many times?</span>
                      <textarea rows="5" cols="20" name="field22" id="field22-4"></textarea>
                    </div>
                  </div>
                  
                  <!--Field Set 23-->
                  
                  <div id="field23-container" class="field f_100">
                    <label for="field23">131. Any history of PE tube placement for recurrent ear infection?</label>
                    <br>
                    <div class="option clearfix">
                      <input name="field23" id="field23-1" value="Yes" type="checkbox">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field23" id="field23-2" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field23" id="field23-3" value="Don't know " type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  
                    <!--Field Set 24-->
                  
                  <div id="field24-container" class="field f_100">
                    <label for="field24">132. Did the child have a period of jaundice for more than two days?</label>
                    <br>
                    <div class="option clearfix">
                      <input name="field24" id="field24-1" value="Yes" type="checkbox">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field24" id="field24-2" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field24" id="field24-3" value="Don't know " type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  
                   <!--Field Set 25-->
                  
                  <div id="field25-container" class="field f_100">
                    <label for="field25">133. Did your child experience a negative reaction within<strong> two weeks</strong> after receiving a vaccine?</label>
                    <br>
                    <div class="option clearfix">
                      <input name="field25" id="field25-1" value="Yes" type="checkbox">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field25" id="field25-2" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field25" id="field25-3" value="Don't know " type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  
                  <div id="field25a-container" class="field f_100">
                    <table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <th scope="col" align="left">Vaccine</th>
                        <th scope="col" align="left">Age of reaction</th>
                        <th scope="col" align="left">How soon the reaction occured</th>
                        <th scope="col" align="left">Description of the reaction</th>
                      </tr>
                      <tr>
                        <td><input name="field25a" id="field25a-1" type="text" size="20"></td>
                        <td><input name="field25a" id="field25a-2" type="text" size="20"></td>
                        <td><input name="field25a" id="field25a-3" type="text" size="20"></td>
                        <td><input name="field25a" id="field25a-4" type="text" size="20"></td>
                      </tr>
                      <tr>
                        <td valign="middle"><input name="field25a" id="field25b-1" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25b-2" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25b-3" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25b-4" type="text" size="20"></td>
                      </tr>
                      <tr>
                        <td valign="middle"><input name="field25a" id="field25c-1" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25c-2" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25c-3" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25c-4" type="text" size="20"></td>
                      </tr>
                      <tr>
                        <td valign="middle"><input name="field25a" id="field25d-1" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25d-2" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25d-3" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25d-4" type="text" size="20"></td>
                      </tr>
                      <tr>
                        <td valign="middle"><input name="field25a" id="field25e-1" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25e-2" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25e-3" type="text" size="20"></td>
                        <td valign="middle"><input name="field25a" id="field25e-4" type="text" size="20"></td>
                      </tr>
                    </table>
                  </div>
                  
                  <!--Field Set 26-->
                  <div id="field26-container" class="field f_100 ">
                    <label for="field26"> 134. Please indicate gastrointestinal symptoms <strong>commonly experienced </strong>by your child. Check all that apply:.</label>
                    <div class="option clearfix">
                      <input name="field26" id="field26-1" value="Abdominal pain " type="checkbox">
                      <span class="option-title">Abdominal pain </span> </div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-2" value="Constipation"type="checkbox">
                      <span class="option-title"> Constipation;&nbsp;&nbsp;Age started</span>
                      <input name="field26" id="field26-3" type="text" size="4">
                      <span>(yrs);&nbsp;Age stopped </span> &nbsp;
                      <input name="field26" id="field26-4" type="text" size="4">
                      <span>(yrs)</span></div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-5" value="Diarrhea"type="checkbox">
                      <span class="option-title"> Diarrhea;&nbsp;&nbsp;Age started</span>
                      <input name="field26" id="field26-6" type="text" size="4">
                      <span>(yrs);&nbsp;Age stopped </span> &nbsp;
                      <input name="field26" id="field26-7" type="text" size="4">
                      <span>(yrs)</span></div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-8" value="Flatulence-excessive gas" type="checkbox">
                      <span class="option-title"> Flatulence (excessive gas) </span> </div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-9" value="Irritable bowel syndrome" type="checkbox">
                      <span class="option-title"> Irritable bowel syndrome</span> </div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-10" value="Loose stools" type="checkbox">
                      <span class="option-title"> Loose stools</span> </div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-11" value=" Reflux" type="checkbox">
                      <span class="option-title"> Reflux</span> </div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-12" value="Smelly stools" type="checkbox">
                      <span class="option-title">Smelly stools</span> </div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-13" value="Vomiting-reflux and-or spitting up" type="checkbox">
                      <span class="option-title">Vomiting, reflux and/or spitting up</span> </div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-14" value="Other" type="checkbox">
                      <span class="option-title"> Other </span>
                      <textarea rows="5" cols="20" name="field36-9a" id="field36-9a"></textarea>
                    </div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-15" value="Don't know" type="checkbox">
                      <span class="option-title"> Don't know </span> </div>
                    <div class="option clearfix">
                      <input name="field26" id="field26-16" value="No" type="checkbox">
                      <span class="option-title"> No </span> </div>
                  </div>
                  
                  <!--Field Set 37-->
                  <div id="field27-container" class="field f_100 ">
                    <label for="field27"> 135. Have there been instances when the child's autistic traits seemed to have temporarily diminished or vanished?</label>
                    <div class="option clearfix">
                      <input name="field27" id="field27-1" value="During a stressful situation" type="checkbox">
                      <span class="option-title">During a stressful situation</span> </div>
                    <div class="option clearfix">
                      <input name="field27" id="field27-2" value="Sometimes during a fever" type="checkbox">
                      <span class="option-title">Sometimes during a fever</span> </div>
                    <div class="option clearfix">
                      <input name="field27" id="field27-3" value="When emerging out of anesthesia" type="checkbox">
                      <span class="option-title">When emerging out of anesthesia</span> </div>
                    <div class="option clearfix">
                      <input name="field27" id="field27-4" value="Other" type="checkbox">
                      <span class="option-title"> Other </span>
                      <textarea rows="5" cols="20" name="field27" id="field27-4a"></textarea>
                    </div>
                  </div>
                  
                  <!--Field Set 28-->
                  <div id="field28-container" class="field f_100 ">
                    <label for="field28">136. Does the child have hypotonia (low muscle tone)?</label>
                    <div class="option clearfix">
                      <input name="field28" id="field28-1" value="Yes" type="checkbox">
                      <span class="option-title">Yes</span> </div>
                    <div class="option clearfix">
                      <input name="field28" id="field28-2" value="No" type="checkbox">
                      <span class="option-title">No</span> </div>
                    <div class="option clearfix">
                      <input name="field28" id="field28-3" value="Don't Know" type="checkbox">
                      <span class="option-title">Don't Know</span> </div>
                  </div>
                  
                  <!--Field Set 29-->
                  <div id="field29-container" class="field f_100 ">
                    <label for="field29">137. Does/did the child have eczema?</label>
                    <div class="option clearfix">
                      <input name="field29" id="field29-1" value="Yes" type="checkbox">
                      <span class="option-title">Yes</span> </div>
                    <div class="option clearfix">
                      <input name="field29" id="field29-2" value="No" type="checkbox">
                      <span class="option-title">No</span> </div>
                    <div class="option clearfix">
                      <input name="field29" id="field29-3" value="Don't Know" type="checkbox">
                      <span class="option-title">Don't Know</span> </div>
                  </div>
                  
                  <!--Field Set 30-->
                  <div id="field30-container" class="field f_100 ">
                    <label for="field30">138. What is the <strong>average amount </strong>of time that your child sleeps in a 24-hour period?</label>
                    <div class="option clearfix">
                      <input name="field30" id="field30-1" value="About 8 hours a day" type="checkbox">
                      <span class="option-title">About 8 hours a day</span> </div>
                    <div class="option clearfix">
                      <input name="field30" id="field30-2" value="Other" type="checkbox">
                      <span class="Less than 8 hours; how much: "> Less than 8 hours; how much: </span>&nbsp;
                      <input name="field30" id="field30-3" type="text" size="20">
                    </div>
                    <div class="option clearfix">
                      <input name="field30" id="field30-4" value="Other" type="checkbox">
                      <span class="Less than 8 hours; how much: "> More than 8 hours; how much: </span>&nbsp;
                      <input name="field30" id="field30-5" type="text" size="20">
                    </div>
                    <div class="option clearfix">
                      <input name="field30" id="field30-6" value="Don't Know" type="checkbox">
                      <span class="option-title">Don't Know</span> </div>
                  </div>
                  
                  <!--Field Set 31-->
                  <div id="field31-container" class="field f_100 ">
                    <label for="field31">139. If the child has sleep problems, select all that apply</label>
                    <div class="option clearfix">
                      <input name="field31" id="field31-1" value="Difficulty falling asleep" type="checkbox">
                      <span class="option-title">Difficulty falling asleep</span> </div>
                    <div class="option clearfix">
                      <input name="field31" id="field31-2" value="Early morning wakening" type="checkbox">
                      <span class="option-title">Early morning wakening</span> </div>
                    <div class="option clearfix">
                      <input name="field31" id="field31-3" value="Night terrors" type="checkbox">
                      <span class="option-title">Night terrors</span> </div>
                    <div class="option clearfix">
                      <input name="field31" id="field31-4" value="Poor Sleep Quality" type="checkbox">
                      <span class="option-title">Poor Sleep Quality</span> </div>
                    <div class="option clearfix">
                      <input name="field31" id="field31-5" value="Sleeps off and on during the day" type="checkbox">
                      <span class="option-title">Sleeps off and on during the day</span> </div>
                    <div class="option clearfix">
                      <input name="field31" id="field31-6" value="Often wakes up in the middle of the night" type="checkbox">
                      <span class="option-title">Often wakes up in the middle of the night</span> </div>
                      
                      
                      
                    <div class="option clearfix">
                      <input name="field31-" id="field31-9" value="Often wakes up in the middle of the night" type="checkbox">
                      <span class="option-title">Snores</span></div>
                    <div class="option clearfix">
                      <input name="field31" id="field31-10" value="Often wakes up in the middle of the night" type="checkbox">
                      <span class="option-title">Difficulty breathing</span></div>
                    <div class="option clearfix">
                      <input name="field31" id="field31-11" value="Often wakes up in the middle of the night" type="checkbox">
                      <span class="option-title">Noisy when sleeps</span></div>
                    <div class="option clearfix">
                      <input name="field31" id="field31-12" value="Other" type="checkbox">
                      <span class="option-title"> Other </span>
                      <textarea rows="5" cols="20" name="field31" id="field31-13"></textarea>
                    </div>
                    <div class="option clearfix">
                      <p>
                        
                        <input name="field31" id="field31-14" value="No" type="checkbox">
                        No<br>
                        <input name="field31" id="field31-15" value="Don't Know" type="checkbox">
                      <span class="option-title">Don't Know</span></p>
</div>
                  </div>
                  
                  <!--Field Set 32-->
                  <div id="field32-container" class="field f_100 ">
                    <div class="option clearfix"> <span class="option-title">140. If known, what is the normal body temperature of your child</span> &nbsp;
                      <input name="field32" id="field32" type="text" size="4">
                    </div>
                  </div>
                  
                  <!--Field Set 33-->
                  <div id="field33-container" class="field f_100 ">
                    <div class="option clearfix"> <span class="option-title">141. What temperature do you consider a "fever" in your child? </span> &nbsp;
                      <input name="field33" id="field33" type="text" size="4">
                    </div>
                  </div>
                  <!--Field Set 34-->
                  <div id="field34-container" class="field f_100 ">
                    <label for="field34">142. Does the child need more than the usual amount of anesthesia?</label>
                    <div class="option clearfix">
                      <input name="field34" id="field34-1" value="Yes, to relieve pain during procedures" type="checkbox">
                      <span class="option-title">Yes, to relieve pain during procedures</span> </div>
                    <div class="option clearfix">
                      <input name="field34" id="field34-2" value="Yes, to achieve unconsciousness for surgery" type="checkbox">
                      <span class="option-title">Yes, to achieve unconsciousness for surgery</span> </div>
                    <div class="option clearfix">
                      <input name="field34" id="field34-3" value="Other" type="checkbox">
                      <span class="option-title"> Other </span>
                      <textarea rows="5" cols="20" name="field34" id="field34-3a"></textarea>
                    </div>
                    <div class="option clearfix">
                      <input name="field34" id="field34-4" value="No" type="checkbox">
                      <span class="option-title">No</span> </div>
                    <div class="option clearfix">
                      <input name="field34" id="field34-5" value="Don't Know" type="checkbox">
                      <span class="option-title">Don't Know</span> </div>
                  </div>
                  
                  <!--Field Set 45-->
                  
                  <div id="field35-container" class="field f_100 ">
                    <div class="option clearfix"> <span class="option-title">143. Does the child and/or parent have one or more of the following health conditions? Check all that apply:</span> &nbsp;
                      <input name="field35" id="field35" type="text" size="4">
                    </div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Child</th>
                        <th scope="col">Father</th>
                        <th scope="col">Mother</th>
                        <th scope="col">Other Relatives</th>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Auto-immune dysfunction</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-1a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-1b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-1c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-1d" value="other relatives" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Chronic Fatigue Syndrome</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-2a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-2b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-2c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-2d" value="other relatives" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Diabetes II or insulin resistance/<br>
                          Pre-diabetes</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-3a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-3b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-3c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-3d" value="other relatives" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Dysmenorrhea (females)<br>
                          (severe pain during menstruation)</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-4a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-4b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-4c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-4d" value="other relatives" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Fibromyalgia</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-5a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-5b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-5c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-5d" value="other relatives" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Hives</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-6a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-6b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-6c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-6d" value="other relatives" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Hirsutism (females)<br>
                          (excessive hair growth)<br></th>
                        <td align="center" valign="middle"><input name="field35" id="field35-7a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-7b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-7c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-7d" value="other relatives" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Irregular menstrual cycles(females)</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-8a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-8b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-8c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-8d" value="other relatives" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Joint Hypermobility Syndrome</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-9a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-9b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-9c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-9d" value="other relatives" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Migraine headaches</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-10a" value="0-15" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-10b" value="0-15" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-10c" value="0-15" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-10d" value="0-15" type="checkbox"></td>
                      </tr>
                      <tr>
                        <th align="left" scope="row">Severe acne</th>
                        <td align="center" valign="middle"><input name="field35" id="field35-11a" value="child" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-11b" value="father" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-11c" value="mother" type="checkbox"></td>
                        <td align="center" valign="middle"><input name="field35" id="field35-11d" value="other relatives" type="checkbox"></td>
                      </tr>
                    </table>
                  </div>
                  
                  <!--Field Set 36-->
                  
                  <div id="field36-container" class="field f_100 radio-group ">
                    <label for="field36"> 144. Does the child have Immunoglobulin A (IgA) Deficiency? </label>
                    <div class="option clearfix">
                      <input name="field36" id="field36-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field36" id="field36-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field36" id="field36-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                    <div class="option clearfix"> <span class="option-title">If yes, subtype [if known]: </span> &nbsp;
                      <input name="field36" id="field36-4" type="text" size="20">
                    </div>
                  </div>
                  
                  <!--Field Set 37-->
                  
                  <div id="field37-container" class="field f_100 radio-group ">
                    <label for="field37"> 145. Does the child have Immunoglobulin G (IgG) Deficiency? </label>
                    <div class="option clearfix">
                      <input name="field37" id="field37-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field37" id="field37-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field37" id="field37-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                    <div class="option clearfix"> <span class="option-title">If yes, subtype [if known]: </span> &nbsp;
                      <input name="field37" id="field37-4" type="text" size="20">
                    </div>
                  </div>
                  
                  <!--Field Set 38-->
                  
                  <div id="field38-container" class="field f_100 radio-group ">
                    <label for="field38"> 146. Has your child had a seizure? </label>
                    <div class="option clearfix">
                      <input name="field38" id="field38-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field38" id="field38-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field38" id="field38-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                    <label>If 'yes,' please answer the following questions:</label>
                    <br>
                    <div class="option clearfix"> <span class="option-title">What age did the seizures begin?</span> &nbsp;
                      <input name="field38" id="field38-4" type="text" size="20">
                    </div>
                    <div class="option clearfix"> <span class="option-title">If stopped, what age did they stop?</span> &nbsp;
                      <input name="field38" id="field38-5" type="text" size="20">
                    </div>
                  </div>
                  
                  <!--Field Set 38a-->
                  <div id="field38a-container" class="field f_100 checkbox-group ">
                    <label for="field38a"> What type of seizures? </label>
                    <div class="option clearfix">
                      <input name="field38a" id="field38a-1" value="Febrile" type="checkbox">
                      <span class="option-title"> Febrile</span> </div>
                    <div class="option clearfix">
                      <input name="field38a" id="field38a-2" value="Petite mal" type="checkbox">
                      <span class="option-title"> Petite mal</span> </div>
                    <div class="option clearfix">
                      <input name="field38a" id="field38a-3" value="Grand mal" type="checkbox">
                      <span class="option-title"> Grand mal </span> </div>
                    <div class="option clearfix">
                      <input name="field38a" id="field38a-4" value="Other" type="">
                      <span class="option-title">Other</span> &nbsp;
                      <input name="field38a" id="field38a-4a" type="text" size="20">
                    </div>
                  </div>

                  <!--Field Set 39-->
                  
                  <div id="field39-container" class="field f_100 radio-group ">
                    <label for="field39"> 147. Does your child become easily upset or angered?</label>
                    <div class="option clearfix">
                      <input name="field39" id="field39-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field39" id="field39-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field39" id="field39-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>
                  </div>
                  
                  <!--Field Set 40-->
                  
                  <div id="field40-container" class="field f_100 radio-group ">
                    <label for="field40"> 148. Do his/her emotions tend to be flat and do not change much? </label>
                    <div class="option clearfix">
                      <input name="field40" id="field40-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field40" id="field40-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field40" id="field40-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>

                  </div>
                  <!--Field Set 41-->
                  
                  <div id="field41-container" class="field f_100 radio-group ">
                    <label for="field41"> 149. Does your son/daughter seem depressed or sad? </label>
                    <div class="option clearfix">
                      <input name="field41" id="field41-1" value="Yes" type="radio">
                      <span class="option-title"> Yes, most of the time </span> </div>
                    <div class="option clearfix">
                      <input name="field41" id="field41-2" value="Someofthetime" type="radio">
                      <span class="option-title"> Yes, some of the time</span> </div>
                    <div class="option clearfix">
                      <input name="field41" id="field41-3" value="No" type="radio">
                      <span class="option-title">No </span> </div>
                    <div class="option clearfix">
                      <input name="field41" id="field41-4" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>

                  </div>
                  <!--Field Set 42-->
                  
                  <div id="field42-container" class="field f_100 radio-group ">
                    <label for="field42"> 150. Is he/she often anxious or nervous? </label>
                    <div class="option clearfix">
                      <input name="field42" id="field42-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field42" id="field42-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field42" id="field42-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> 
                  </div></div>
<!--Field Set 43-->
                  
                  <div id="field43-container" class="field f_100 radio-group ">
                    <label for="field43"> 151. Does your son/daughter have difficulty controlling his/her emotional reactions? </label>
                    <div class="option clearfix">
                      <input name="field43" id="field43-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field43" id="field43-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field43" id="field43-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>

                  </div>
<!--Field Set 44-->
                  
                  <div id="field44-container" class="field f_100 radio-group ">
                    <label for="field44"> 152. Do your child's emotions change quickly? </label>
                    <div class="option clearfix">
                      <input name="field44" id="field44-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field44" id="field44-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field44" id="field44-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>

                  </div>
      <!--Field Set 45-->
                  
                  <div id="field45-container" class="field f_100 radio-group ">
                    <label for="field45"> 153. Does he/she tend to have extreme emotioal reactions? </label>
                    <div class="option clearfix">
                      <input name="field45" id="field45-1" value="Yes" type="radio">
                      <span class="option-title"> Yes </span> </div>
                    <div class="option clearfix">
                      <input name="field45" id="field45-2" value="No" type="radio">
                      <span class="option-title"> No </span> </div>
                    <div class="option clearfix">
                      <input name="field45" id="field45-3" value="Don't know" type="radio">
                      <span class="option-title"> Don't know </span> </div>

                    </div>
                 <div id="form-submit" class="field f_100 clearfix submit" style="margin-bottom:25px"> <a href="step16.php?token=<?php echo $token ?>" class="btn btn-primary">Next Page</a> </div>
              </form>
            <?php include("inc/note.php"); ?>
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