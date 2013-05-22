<?php
$token = $_GET['KeyID'];
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
    <h1>The Autism Research Institute <small>2012-2013 Parent Survey</small></h1>
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
              <form id="arisurvey" >
                <div id="fielda-container" class="field f_100">
                  <label for="fielda">Child's First Name: </label>
                  <input data="Childs First Name" name="fielda" id="fielda" required type="text">
                </div>
                <div id="fieldb-container" class="field f_100">
                  <label for="fieldb">Child's Last Name: </label>
                  <input data="Childs Last Name" name="fieldb" id="fieldb" required type="text">
                </div>
                <div id="fieldc-container" class="field f_100">
                  <label for="fieldc">Child's Date of Birth (DD/MM/YYYY): </label>
                  <input data="Childs Date of Birth" name="fieldc" id="fieldc" required type="text">
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
                <div id="fieldh-containe" class="field f_100">
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
                  <input data="Fathers Occupation" name="fieldm" id="fieldm" type="text">
                </div>
                <div id="fieldn-container" class="field f_100">
                  <label for="fieldn"> Father's Past Occupation </label>
                  <input data="Fathers Past Occupation" name="fieldn" id="fieldn" type="text">
                </div>
                <div id="fieldo-container" class="field f_100">
                  <label for="fieldo"> Mother's Occupation </label>
                  <input data="Mothers Occupation" name="fieldo" id="fieldo" type="text">
                </div>
                <div id="fieldp-container" class="field f_100">
                  <label for="fieldp"> Mother's Past Occupation </label>
                  <input data="Mothers Past Occupation" name="fieldp" id="fieldp" type="text">
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
                    <input data="1. Present age of child:" name="field1b" class="numeral" required type="text">
                    years)<br>
                    <em>(*Note: This Check List is designed primarily for children 3 to 5 years old. If child is over 5, answer as well as you can by recall of child's behavior.) </em> </div>
                </div>
                <div id="field2-container" class="field f_100 radio-group required">
                  <label for="field2">2. Indicate child's sex:</label>
                  <div class="option clearfix">
                    <input data="" name="field2a" value="Boy" type="radio">
                    <span class="option-title"> Boy </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field2a" value="Girl" type="radio">
                    <span class="option-title"> Girl </span> </div>
                </div>
                <div id="field3-container" class="field f_100 radio-group required">
                  <label for="field3">3. Child's birth order and number of mother's other children:</label>
                  <div class="option clearfix">
                    <input data="" name="field3a" value="Only child" type="radio">
                    <span class="option-title"> Child is an only child </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field3a" id="" value="first born" type="radio">
                    <span class="option-title"> Child is first born of
                    <input data="" name="field3a1" type="text" class="numeral" id="">
                    children </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field3a" id="" value="last born" type="radio">
                    <span class="option-title"> Child is last born of
                    <input data="" name="field3b1" type="text" class="numeral" id="">
                    children </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field3a" id="" value="Child is middle born" type="radio">
                    <span class="option-title">Child is middle born;
                    <input data="" name="field3c1" id="" type="text" class="numeral" maxlength="4">
                    children are older and
                    <input data="" name="field3d2" id="" type="text" class="numeral" maxlength="4">
                    are younger than this child</span> </div>
                  <input data="" name="field3a" id="" value="Foster child or don't know." type="radio">
                  <span class="option-title">Foster child, or don't know. </span> </div>
                <div id="field4-container" class="field f_100 radio-group required">
                  <label for="field4">4. Were pregnancy and delivery normal? </label>
                  <div class="option clearfix">
                    <input data="" name="field4a" id="" value="Pregnancy and delivery both normal"
                    type="radio">
                    <span class="option-title">Pregnancy and delivery both normal </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field4a" id="" value="Problems during both pregnancy and delivery"
                    type="radio">
                    <span class="option-title"> Problems during both pregnancy and delivery </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field4a" id="" value="Pregnancy troubled; routine delivery"
                    type="radio">
                    <span class="option-title"> Pregnancy troubled, routine delivery </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field4a" id="" value="Pregnancy untroubled; problems during delivery"
                    type="radio">
                    <span class="option-title"> Pregnancy untroubled; problems during delivery </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field4a" id="" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field5-container" class="field f_100 radio-group required">
                  <label for="field5">5. Was the birth premature (birth weight under 5 lbs.)? </label>
                  <div class="option clearfix">
                    <input data="" name="field5a" id="" value="Yes" type="radio">
                    <span class="option-title"> Yes (about
                    <input data="" name="field5a1" id="" type="text" class="numeral">
                    weeks early;
                    <input data="" name="field5a2" id="" type="text" class="numeral">
                    pounds</span> </div>
                  <div class="option clearfix">
                    <input data="" name="field5a" id="" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field5a" id="" value="Don't know." type="radio">
                    <span class="option-title"> Don't know</span></div>
                </div>
                <div id="field6-container" class="field f_100 radio-group required">
                  <label for="field6">6. Was the child given oxygen <em>in the first</em> week? </label>
                  <div class="option clearfix">
                    <input data="" name="field6a" id="" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field6a" id="" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field6a" id="" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> </div>
                </div>
                <div id="field7-container" class="field f_100 radio-group required">
                  <label for="field7">7. Appearance of child during first few weeks after birth: </label>
                  <div class="option clearfix">
                    <input data="" name="field7a" id="" value="Pale, delicate looking" type="radio">
                    <span class="option-title"> Pale, delicate looking </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field7a" id="" value="Unusually healthy looking" type="radio">
                    <span class="option-title"> Unusually healthy looking </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field7a" id="" value="Average, don't know, or other" type="radio">
                    <span class="option-title"> Average, don't know, or other </span> </div>
                </div>
                <div id="field8-container" class="field f_100 radio-group">
                  <label for="field8">8. Unusual conditions of birth and infancy (check only one number in left-hand column): </label>
                  <div class="option clearfix">
                    <input data="" name="field8a" id="" value="Unusual conditions (indicate which)" type="radio">
                    <em> 1.</em><span class="option-title"> Unusual conditions (indicate which: </span></div>
                  <div class="option clearfix spaceindent">
                    <input data="" name="field8" id="field8a1" type="checkbox" value="">
                    <span class="option-title">blindness, </span></div>
                  <div class="option clearfix spaceindent">
                    <input data="" name="field8" id="field8a2" type="checkbox" value="">
                    <span class="option-title">cerbral palsey, </span></div>
                  <div class="option clearfix spaceindent">
                    <input data="" name="field8" id="field8a3" type="checkbox" value="">
                    <span class="option-title">birth injury, </span></div>
                  <div class="option clearfix spaceindent">
                    <input data="" name="field8" id="field8a4" type="checkbox" value="">
                    <span class="option-title">seizures, </span></div>
                  <div class="option clearfix spaceindent">
                    <input data="" name="field8" id="field8a5" type="checkbox" value="">
                    <span class="option-title">blue baby, </span></div>
                  <div class="option clearfix spaceindent">
                    <input data="" name="field8" id="field8a6" type="checkbox" value="">
                    <span class="option-title">very high fever, </span></div>
                  <div class="option clearfix spaceindent">
                    <input data="" name="field8" id="field8a7" type="checkbox" value="">
                    <span class="option-title">jaundice,</span></div>
                  <div class="option clearfix spaceindent">Other:
                    <input data="" name="field8" id="field8a8" type="text" maxlength="25">
                    ) </div>
                  <div class="option clearfix radio-group">
                    <input data="" name="field8a" id="" value="Twin Birth"  type="radio">
                    <span class="option-title"><em> 2.</em> Twin Birth (
                    <input data="" name="field8b1" id="" type="radio" value="">
                    identical,
                    <input data="" name="field8b1" id="" type="radio" value="">
                    fraternal)</span> </div>
                  <div class="option clearfix">
                    <input data="" name="field8b1" id="" value="Both 1 and 2"
           type="radio">
                    <em><span class="option-title"> 3</span></em><span class="option-title">. Both 1 and 2</span> </div>
                  <div class="option clearfix">
                    <input data="" name="field8b1" id="" value="Average, don't know, or other"  type="radio">
                    <em>4.</em><span class="option-title"> Normal, or don't know</span> </div>
                </div>
                <div id="field9-container" class="field f_100 radio-group">
                  <label for="field9">9. Concerning baby's health in first 3 months </label>
                  <div class="option clearfix">
                    <input data="" name="field9a" id="" value="Excellent health, no problems" type="radio">
                    <em><span class="option-title">1. </span></em><span class="option-title"> Excellent health, no problems </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field9a" id="" value="Respiration: Frequent Infections" type="radio">
                    <span class="option-title"> <em>2.</em> Respiration (
                    <input data="" name="field9" id="field9b1" type="checkbox" value="">
                    frequent infections,
                    <input data="" name="field9" id="field9b2" type="text">
                    other) </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field9" id="field9c" value="Skin: Rashes" type="radio">
                    <em><span class="option-title"> 3</span></em><span class="option-title">. Skin (
                    <input data="" name="field9" id="field9c1" type="checkbox" value="">
                    rashes,
                    <input data="" name="field9" id="field9c2" type="checkbox" value="">
                    infections,
                    <input data="" name="field9" id="field9c3" type="checkbox" value="">
                    allergy,
                    <input data="" name="field9" id="field9c4" type="text">
                    other)</span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field9" id="field9d" value="Feeding: Learing to suck" type="radio">
                    <em>4. </em><span class="option-title">Feeding (
                    <input data="" name="field9" id="field9d1" type="checkbox" value="">
                    learing to suck,
                    <input data="" name="field9" id="field9d2" type="checkbox" value="">
                    colic,
                    <input data="" name="field9" id="field9d3" type="checkbox" value="">
                    vomiting,
                    <input data="" name="field9" id="field9d4" type="text">
                    other)</span> </div>
                  <div class="option clearfix">
                    <input data="" name="field9" id="field9e" value="Elimination" type="radio">
                    <em><span class="option-title"> 5</span></em><span class="option-title">. Elimination (
                    <input data="" name="field9" id="field9e1" type="checkbox" value="">
                    diarrhea,
                    <input data="" name="field9" id="field9e2" type="checkbox" value="">
                    constipation,
                    <input data="" name="field9" id="field9e3" type="text">
                    other) </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field9" id="field9f" value="Several of Above" type="checkbox">
                    <span class="option-title"><em>6.</em> Several of above (indicate which):
                    <input data="" name="field9" id="field9f1" type="checkbox" value="Respiration">
                    2,
                    <input data="" name="field9" id="field9f2" type="checkbox" value="Skin">
                    3,
                    <input data="" name="field9" id="field9f3" type="checkbox" value="Feeding">
                    4,
                    <input data="" name="field9" id="field9f4" type="checkbox" value="Elimination">
                    5)</span> </div>
                </div>
                <div id="field10-container" class="field f_100 radio-group required">
                  <label for="field10">10. Has the child been given an electroencephalogram (EEG)? </label>
                  <div class="option clearfix">
                    <input data="" name="field10" id="field10a" value="Yes, it was considered normal." type="radio">
                    <span class="option-title"> Yes, it was considered normal</span></div>
                  <div class="option clearfix">
                    <input data="" name="field10" id="field10b" value="Yes, it was considered borderline." type="radio">
                    <span class="option-title"> Yes, it was considered borderline</span></div>
                  <div class="option clearfix">
                    <input data="" name="field10" id="field10c" value="Yes, it was considered abnormal." type="radio">
                    <span class="option-title"> Yes, it was considered abnormal </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field10" id="field10d" value="No" type="radio">
                    <span class="option-title"> No, or don't know, or don't know results</span> <br>
                  </div>
                </div>
                <div id="field11-container" class="field f_100 radio-group required">
                  <label for="field11">11. In the first year; did the child react to bright lights; bright colors;
                    unusual sounds; etc.? </label>
                  <div class="option clearfix">
                    <input data="" name="field11" id="field11a" value="Unusually strong reaction" type="radio">
                    <span class="option-title"> Unusually strong reaction: (
                    <input data="" name="field11" id="field11a1" type="checkbox" value="sensory_pleasure">
                    pleasure,
                    <input data="" name="field11" id="field11a2" type="checkbox" value="dislike">
                    dislike) </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field11" id="field11b" value="Unusually unresponsive." type="radio">
                    <span class="option-title"> Unusually unresponsive</span> </div>
                  <div class="option clearfix">
                    <input data="" name="field11" id="field11c" value="Average, or don't know" type="radio">
                    <span class="option-title"> Average, or don't know</span> <br>
                  </div>
                </div>
                <div id="field12-container" class="field f_100 radio-group required">
                  <label for="field12">12. Did the child behave normally for a time before his/her abnormal behavior began? </label>
                  <div class="option clearfix">
                    <input data="" name="field12" id="field12a" value="Never was a period of normal behavior" type="radio">
                    <span class="option-title"> Never was a period of normal behavior </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field12" id="field12b" value="Normal during first 6 months" type="radio">
                    <span class="option-title"> Normal during first 6 months </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field12" id="field12c" value="Normal during first year" type="radio">
                    <span class="option-title"> Normal during first year </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field12" id="field12d" value="Normal during first 1-1/2 years" type="radio">
                    <span class="option-title"> Normal during first 1 1/2 years </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field12" id="field12e" value="Normal during first 2 years" type="radio">
                    <span class="option-title"> Normal during first 2 years </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field12" id="field12f" value="Normal during first 3 years" type="radio">
                    <span class="option-title"> Normal during first 3 years </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field12" id="field12g" value="Normal during first 4-5 years" type="radio">
                    <span class="option-title"> Normal during first 4-5 years </span> <br>
                  </div>
                </div>
                <div id="field13-container" class="field f_100 radio-group required">
                  <label for="field13">13. (Age 4-8 months) Did the child reach out or prepare him/herself to be picked up when mother approached him/her? </label>
                  <div class="option clearfix">
                    <input data="" name="field13" id="field13a" value="Yes, or I believe so" type="radio">
                    <span class="option-title"> Yes, or I believe so </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field13" id="field13b" value="No, I don't think he/she did" type="radio">
                    <span class="option-title"> No, I don't think he/she did </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field13" id="field13c" value="No, definitely not" type="radio">
                    <span class="option-title"> No, definitely not </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field13" id="field13d" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> </div>
                </div>
                <div id="field14-container" class="field f_100 radio-group required">
                  <label for="field14"> 14. Did the child rock in his/her crib as a baby? </label>
                  <div class="option clearfix">
                    <input data="" name="field14" id="field14a" value="Yes, quite a lot" type="radio">
                    <span class="option-title"> Yes, quite a lot </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field14" id="field14b" value="Yes, sometimes" type="radio">
                    <span class="option-title"> Yes, sometimes </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field14" id="field14c" value="No, or very little" type="radio">
                    <span class="option-title"> No, or very little </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field14" id="field14d" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field15-container" class="field f_100 radio-group required">
                  <label for="field15"> 15. At what age did the child learn to walk alone? </label>
                  <div class="option clearfix">
                    <input data="" name="field15" id="field15a" value="8-12 months" type="radio">
                    <span class="option-title"> 8-12 months </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field15" id="field15b" value="13-15 months" type="radio">
                    <span class="option-title"> 13-15 months </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field15" id="field15c" value="16-18 months" type="radio">
                    <span class="option-title"> 16-18 months </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field15" id="field15d" value="19-24 months" type="radio">
                    <span class="option-title"> 19-24 months </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field15" id="field15e" value="25-36 months" type="radio">
                    <span class="option-title"> 25-36 months </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field15" id="field15f" value="37 months or later, or does not walk alone" type="radio">
                    <span class="option-title"> 37 months or later, or does not walk alone</span> <br>
                  </div>
                </div>
                <div id="field16-container" class="field f_100 radio-group required">
                  <label for="field16"> 16. Which describes the change from crawling to walking? </label>
                  <div class="option clearfix">
                    <input data="" name="field16" id="field16a" value="Normal change from crawling to walking" type="radio">
                    <span class="option-title"> Normal change from crawling to walking </span></div>
                  <div class="option clearfix">
                    <input data="" name="field16" id="field16b" value="Little or no crawling, gradual start of walking" type="radio">
                    <span class="option-title"> Little or no crawling, gradual start of walking </span></div>
                  <div class="option clearfix">
                    <input data="" name="field16" id="field16c" value="Little or no crawling, sudden start of walking" type="radio">
                    <span class="option-title"> Little or no crawling, sudden start of walking </span></div>
                  <div class="option clearfix">
                    <input data="" name="field16" id="field16d" value="Prolonged crawling, sudden start of walking" type="radio">
                    <span class="option-title"> Prolonged crawling, sudden start of walking </span></div>
                  <div class="option clearfix">
                    <input data="" name="field16" id="field16e" value="Prolonged crawling, gradual start of walking" type="radio">
                    <span class="option-title"> Prolonged crawling, gradual start of walking </span></div>
                  <div class="option clearfix">
                    <input data="" name="field16" id="field16f" value="Other, or don't know" type="radio">
                    <span class="option-title"> Other, or don't know </span></div>
                </div>
                <div id="field17-container" class="field f_100 radio-group required">
                  <label for="field17">17. During the child's first year, did he/she seem to be unusually intelligent? </label>
                  <div class="option clearfix">
                    <input data="" name="field17" id="field17a" value="Suspected high intelligence" type="radio">
                    <span class="option-title"> Suspected high intelligence </span></div>
                  <div class="option clearfix">
                    <input data="" name="field17" id="field17b" value="Suspected average intelligence" type="radio">
                    <span class="option-title"> Suspected average intelligence </span></div>
                  <div class="option clearfix">
                    <input data="" name="field17" id="field17c" value="Child looked somewhat dull" type="radio">
                    <span class="option-title"> Child looked somewhat dull </span></div>
                </div>
                <div id="field18-container" class="field f_100 radio-group required">
                  <label for="field18"> 18. During the child's first 2 years, did he/she like to be held? </label>
                  <div class="option clearfix">
                    <input data="" name="field18" id="field18a" value="Liked being picked up; enjoyed being held" type="radio">
                    <span class="option-title"> Liked being picked up; enjoyed being held </span></div>
                  <div class="option clearfix">
                    <input data="" name="field18" id="field18b" value="Limp and passive on being held" type="radio">
                    <span class="option-title"> Limp and passive on being held </span></div>
                  <div class="option clearfix">
                    <input data="" name="field18" id="field18c" value="You could pick child up and hold it only when and how it preferred" type="radio">
                    <span class="option-title"> You could pick child up and hold him/her only when and how he/she preferred </span></div>
                  <div class="option clearfix">
                    <input data="" name="field18" id="field18d" value="Notably stiff and awkward to hold" type="radio">
                    <span class="option-title"> Notably stiff and awkward to hold </span></div>
                  <div class="option clearfix">
                    <input data="" name="field18" id="field18e" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field19-container" class="field f_100 radio-group required">
                  <label for="field19"> 19. Before age 3, did the child ever imitate another person? </label>
                  <div class="option clearfix">
                    <input data="" name="field19" id="field19a" value="Yes, waved bye-bye" type="radio">
                    <span class="option-title"> <em>1.</em> Yes, waved bye-bye </span></div>
                  <div class="option clearfix">
                    <input data="" name="field19" id="field19b" value="Yes, played pat-a-cake" type="radio">
                    <span class="option-title"> <em>2.</em> Yes, played pat-a-cake </span></div>
                  <div class="option clearfix">
                    <input data="" name="field19" id="field19c" value="Yes, other" type="radio">
                    <span class="option-title"> <em>3.</em> Yes, other:
                    <input data="" name="" type="text">
                    </span></div>
                  <div class="option clearfix">
                    <input data="" name="field19" id="field19d" value="Two or more of above (which? " type="radio">
                    <span class="option-title"> Two or more of above (which?
                    <input data="" name="field19" id="field19d1" type="checkbox" value="1">
                    <em>1</em>,
                    <input data="" name="field19" id="field19d2" type="checkbox" value="2">
                    <em>2</em>,
                    <input data="" name="field19" id="field19d3" type="checkbox" value="3">
                    <em>3</em>) </span></div>
                  <div class="option clearfix">
                    <input data="" name="field19" id="field1e" value="No, or not sure" type="radio">
                    <span class="option-title"> No, or not sure </span></div>
                </div>
                <div id="field20-container" class="field f_100 radio-group required">
                  <label for="field20"> 20. Before age 3, did the child have an unusually good memory? </label>
                  <div class="option clearfix">
                    <input data="" name="field20" id="field20a" value="Remarkable memory for songs, rhymes, TV commercials, etc., in words" type="radio">
                    <span class="option-title"> <em>1. </em>Remarkable memory for songs, rhymes, TV commercials, etc., in words </span></div>
                  <div class="option clearfix">
                    <input data="" name="field20" id="field20b" value="Remarkable memory for songs, music (humming only)" type="radio">
                    <span class="option-title"> <em>2.</em> Remarkable memory for songs, music (humming only) </span></div>
                  <div class="option clearfix">
                    <input data="" name="field20" id="field20c" value="Remarkable memory for names, places, routes, etc." type="radio">
                    <span class="option-title"> <em>3.</em> Remarkable memory for names, places, routes, etc. </span></div>
                  <div class="option clearfix">
                    <input data="" name="field20" id="field20d" value="No evidence for remarkable memory" type="radio">
                    <span class="option-title"> <em>4. </em>No evidence for remarkable memory </span></div>
                  <div class="option clearfix">
                    <input data="" name="field20" id="field20e" value="Apparently rather poor memory" type="radio">
                    <span class="option-title"> <em>5. </em>Apparently rather poor memory </span></div>
                  <div class="option clearfix">
                    <input data="" name="field20" id="field20f" value="Both 1 & 3" type="radio">
                    <span class="option-title"> <em>6. </em>Both 1 and 3 </span></div>
                  <div class="option clearfix">
                    <input data="" name="field20" id="field20g" value="Both 2 & 3" type="radio">
                    <span class="option-title"> <em>7. </em>Both 2 and 3 </span></div>
                </div>
                <div id="field21-container" class="field f_100 radio-group required">
                  <label for="field21"> 21. Did you ever suspect the child was very nearly deaf? </label>
                  <div class="option clearfix">
                    <input data="" name="field21" id="field21a" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field21" id="field21b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field42-container" class="field f_100 radio-group required">
                  <label for="field22"> 22. (Age 2-4) Is child "deaf" to some sounds, but hears others? </label>
                  <div class="option clearfix">
                    <input data="" name="field22" id="field22a" value="Yes, can be &quot;deaf&quot; to loud sounds, but hear low ones" type="radio">
                    <span class="option-title"> Yes, can be "deaf" to loud sounds, but hear low ones </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field22" id="field22b" value="No, this is not true of him/her" type="radio">
                    <span class="option-title"> No, this is not true of him/her </span> </div>
                </div>
                <div id="field23-container" class="field f_100 radio-group required">
                  <label for="field23"> 23.(Age 2-4) Does child hold his/her hands in strange postures? </label>
                  <div class="option clearfix">
                    <input data="" name="field23" id="field23a" value="Yes, sometimes often" type="radio">
                    <span class="option-title"> Yes, sometimes often </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field23" id="field23b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field24-container" class="field f_100 radio-group required">
                  <label for="field24"> 24. (Age 2-4) Does child engage in rhythmic or rocking activity for very long periods of time (like on rocking-horse or chair, jump-chair, swing, etc.)? </label>
                  <div class="option clearfix">
                    <input data="" name="field24" id="field24a" value="Yes, this is typical" type="radio">
                    <span class="option-title"> Yes, this is typical </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field24" id="field24b" value="Seldom does this" type="radio">
                    <span class="option-title"> Seldom does this </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field24" id="field24c" value="Not true of him/her" type="radio">
                    <span class="option-title"> Not true of him/her </span> </div>
                </div>
                <div id="field25-container" class="field f_100 radio-group required">
                  <label for="field25"> 25. (Age 2-4) Does the child ever "look through" or "walk through" people, as though they weren't there? </label>
                  <div class="option clearfix">
                    <input data="" name="field25" id="field25a" value="Yes, often" type="radio">
                    <span class="option-title"> Yes, often </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field25" id="field25b" value="Yes, I think so" type="radio">
                    <span class="option-title"> Yes, I think so </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field25" id="field25c" value="No, doesn't do this" type="radio">
                    <span class="option-title"> No, doesn't do this </span> </div>
                </div>
                <div id="field26container" class="field f_100 radio-group required">
                  <label for="field26-1"> 26.(Age 2-5) Does child have any unusual cravings for things to eat or chew on? </label>
                  <div class="option clearfix">
                    <input data="" name="field26" id="field26a" value="Yes, salt or salty foods" type="radio">
                    <span class="option-title"> Yes, salt or salty foods </span></div>
                  <div class="option clearfix">
                    <input data="" name="field26" id="field26b" value="Yes, often chews metal objects" type="radio">
                    <span class="option-title"> Yes, often chews metal objects </span></div>
                  <div class="option clearfix">
                    <input data="" name="field26" id="field26c" value="Yes, other" type="radio">
                    <span class="option-title"> Yes, other:
                    <input data="" name="field26" id="field26c1" type="text" value="">
                    </span></div>
                  <div class="option clearfix">
                    <input data="" name="field26" id="field26d" value="Yes, more than 2 above" type="radio">
                    <span class="option-title"> Yes, more than 2 above (which?
                    <input data="" name="field26" id="field26d1" type="text" value="">
                    )</span></div>
                  <div class="option clearfix">
                    <input data="" name="field26" id="field26e" value="No, or not sure" type="radio">
                    <span class="option-title"> No, or not sure </span></div>
                </div>
                <div id="field27-container" class="field f_100 radio-group required">
                  <label for="field27"> 27. (Age 2-4) Does the child have certain eating oddities such as refusing to drink from a transparent container, eating only hot (or cold) food, eating only one or two foods, etc.? </label>
                  <div class="option clearfix">
                    <input data="" name="field27" id="field27a" value="Yes, definitely" type="radio">
                    <span class="option-title"> Yes, definitely </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field27" id="field27b" value="No, or not to any marked degree" type="radio">
                    <span class="option-title"> No, or not to any marked degree </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field27" id="field27c" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> </div>
                </div>
                <div id="field28-container" class="field f_100 radio-group required">
                  <label for="field28"> 28. Would you describe your child around age 3 or 4 as often seeming "in a shell," or so distant and "lost in thought" that you couldn't reach him/her? </label>
                  <div class="option clearfix">
                    <input data="" name="field28" id="field28a" value="Yes, this is a very accurate description" type="radio">
                    <span class="option-title"> Yes, this is a very accurate description </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field28" id="field28b" value="Once in a while he/she might possibly be like that" type="radio">
                    <span class="option-title"> Once in a while he/she might possibly be like that </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field28" id="field28c" value="Not an accurate description" type="radio">
                    <span class="option-title"> Not an accurate description </span> </div>
                </div>
                <div id="field29-container" class="field f_100 radio-group required">
                  <label for="field29"> 29. (Age 2-5) Is he/she cuddly? </label>
                  <div class="option clearfix">
                    <input data="" name="field29" id="field29a" value="Definitely, likes to cling to adults" type="radio">
                    <span class="option-title"> Definitely, likes to cling to adults </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field29" id="field29b" value="Above average (likes to be held)" type="radio">
                    <span class="option-title"> Above average (likes to be held) </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field29" id="field29c" value="No, rather stiff and awkward to hold" type="radio">
                    <span class="option-title"> No, rather stiff and awkward to hold </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field29" id="field29d" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field30-container" class="field f_100 radio-group required">
                  <label for="field30"> 30.(Age 3-5) Does the child deliberately hit his/her own head? </label>
                  <div class="option clearfix">
                    <input data="" name="field30" id="field30a" value="a. Never, or rarely" type="radio">
                    <span class="option-title"> <em>1.</em> Never, or rarely </span></div>
                  <div class="option clearfix">
                    <input data="" name="field30" id="field30b" value="b. Yes, usually by slapping it with his/her hand" type="radio">
                    <span class="option-title"> <em>2. </em>Yes, usually by slapping it with his/her hand </span></div>
                  <div class="option clearfix">
                    <input data="" name="field30" id="field30c" value="c. Yes, usually by banging it against someone else's legs or head" type="radio">
                    <span class="option-title"> <em>3.</em> Yes, usually by banging it against someone else's legs or head </span></div>
                  <div class="option clearfix">
                    <input data="" name="field30" id="field30d" value=" d. Yes, usually by hitting walls, floor, furniture, etc." type="radio">
                    <span class="option-title"><em> 4.</em> Yes, usually by hitting walls, floor, furniture, etc. </span></div>
                  <div class="option clearfix">
                    <input data="" name="field30" id="field30e" value="Several of above (which? " type="radio">
                    <span class="option-title"> Several of the above (which?
                    <input data="" name="field30" type="checkbox" id="field30e1" value="2">
                    2,
                    <input data="" name="field30" type="checkbox" id="field30e2" value="3">
                    3,
                    <input data="" name="field30" type="checkbox" id="field30e3" value="4">
                    4) </span></div>
                </div>
                <div id="field31-container" class="field f_100 radio-group required">
                  <label for="field31"> 31. (Age 3-5) How well physically coordinated is the child (running, walking, balancing, climbing)? </label>
                  <div class="option clearfix">
                    <input data="" name="field31" id="field31a" value="Unusually graceful" type="radio">
                    <span class="option-title"> Unusually graceful </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field31" id="field31b" value="Above average" type="radio">
                    <span class="option-title"> Above average </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field31" id="field31c" value="Somewhat below average; or poor" type="radio">
                    <span class="option-title"> Somewhat below average; or poor </span> </div>
                </div>
                <div id="field32-container" class="field f_100 radio-group required">
                  <label for="field32"> 32. (Age 3-5) Does the child sometimes whirl him/herself like a top? </label>
                  <div class="option clearfix">
                    <input data="" name="field32" id="field32a" value="Yes, does this often" type="radio">
                    <span class="option-title"> Yes, does this often </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field32" id="field32b" value="Yes, sometimes" type="radio">
                    <span class="option-title"> Yes, sometimes </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field32" id="field32c" value="Yes, if you start him/her out" type="radio">
                    <span class="option-title"> Yes, if you start him/her out </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field32" id="field32d" value="No, he/she shows no tendancy to whirl" type="radio">
                    <span class="option-title"> No, he/she shows no tendancy to whirl </span> </div>
                </div>
                <div id="field33-container" class="field f_100 radio-group required">
                  <label for="field33-1"> 33.(Age 3-5) How skillful is the child in doing fine work with his/her fingers or playing with small objects?</label>
                  <div class="option clearfix">
                    <input data="" name="field33" id="field33a" value="Exceptionally skillful" type="radio">
                    <span class="option-title"> Exceptionally skillful </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field33" id="field33b" value="Average for age" type="radio">
                    <span class="option-title"> Average for age </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field33" id="field33c" value="A little awkward, or very awkward" type="radio">
                    <span class="option-title"> A little awkward, or very awkward </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field33" id="field33d" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span> <br>
                  </div>
                </div>
                <div id="field34-container" class="field f_100 radio-group required">
                  <label for="field34"> 34. (Age 3-5) Does the child like to spin things like jar lids, coins, or coasters? </label>
                  <div class="option clearfix">
                    <input data="" name="field34" id="field34a" value="Yes, often and for rather long periods" type="radio">
                    <span class="option-title"> Yes, often and for rather long periods </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field34" id="field34b" value="Very seldom, or never" type="radio">
                    <span class="option-title"> Very seldom, or never </span> </div>
                </div>
                <div id="field35-container" class="field f_100 radio-group required">
                  <label for="field35"> 35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his/her age) at any of following: </label>
                  <div class="option clearfix">
                    <input data="" name="field35" id="field35a" value="Assembling jig saw or similar puzzles" type="radio">
                    <span class="option-title"> Assembling jig saw or similar puzzles </span></div>
                  <div class="option clearfix">
                    <input data="" name="field35" id="field35b" value="Arithmetic computation" type="radio">
                    <span class="option-title"> Arithmetic computation </span></div>
                  <div class="option clearfix">
                    <input data="" name="field35" id="field35c" value="Can tell day of week a certain date will fall on" type="radio">
                    <span class="option-title"> Can tell day of week a certain date will fall on </span></div>
                  <div class="option clearfix">
                    <input data="" name="field35" id="field35d" value="Perfect musical pitch" type="radio">
                    <span class="option-title"> Perfect musical pitch </span></div>
                  <div class="option clearfix">
                    <input data="" name="field35" id="field35e" value="Throwing and/or catching a ball" type="radio">
                    <span class="option-title"> Throwing and/or catching a ball </span></div>
                  <div class="option clearfix">
                    <input data="" name="field35" id="field35f" value="Other" type="radio">
                    <span class="option-title"> Other:
                    <input data="" name="field35" type="text" id="field35f1">
                    </span></div>
                  <div class="option clearfix">
                    <input data="" name="field35" id="field35g" value="More than one of above (which?)" type="radio">
                    <span class="option-title"> More than one of above (which?
                    <input data="" name="field35" type="text" id="field35g1">
                    ) </span></div>
                  <div class="option clearfix">
                    <input data="" name="field35" id="field35h" value="No unusual skill or not sure" type="radio">
                    <span class="option-title"> No unusual skill or not sure </span></div>
                </div>
                <div id="field36container" class="field f_100 radio-group required">
                  <label for="field36"> 36. (Age 3-5) Does the chid sometimes jump up and down gleefully when pleased? </label>
                  <div class="option clearfix">
                    <input data="" name="field36" id="field36a" value="Yes, this is typical" type="radio">
                    <span class="option-title"> Yes, this is typical </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field36" id="field36b" value="No or rarely" type="radio">
                    <span class="option-title"> No or rarely </span> </div>
                </div>
                <div id="field37-container" class="field f_100 radio-group required">
                  <label for="field37"> 37. (Age 3-5) Does child sometimes line things up in precise, evenly-spaced rows and insist they not be disturbed? </label>
                  <div class="option clearfix">
                    <input data="" name="field37" id="field37a" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field37" id="field37b" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field37" id="field37c" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                </div>
                <div id="field38-container" class="field f_100 radio-group required">
                  <label for="field38"> 38. (Age 3-5) Does the child refuse to use his/her hands for an extended period of time? </label>
                  <div class="option clearfix">
                    <input data="" name="field38" id="field38a" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field38" id="field38b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field39-container" class="field f_100 radio-group required">
                  <label for="field39"> 39. Was there a time before age 5 when the child <em>strongly</em> insisted on listening to music on records? </label>
                  <div class="option clearfix">
                    <input data="" name="field39" id="field39a" value="Yes, insisted on only certain records" type="radio">
                    <span class="option-title"> Yes, insisted on only certain records </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field39" id="field39b" value="Yes, but almost any record would do" type="radio">
                    <span class="option-title"> Yes, but almost any record would do </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field39" id="field39c" value="Liked to listen, but didn't demand to" type="radio">
                    <span class="option-title"> Liked to listen, but didn't <em>demand</em> to </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field39" id="field39d" value="No special interest in records" type="radio">
                    <span class="option-title"> No special interest in records </span> <br>
                  </div>
                </div>
                <div id="field40-container" class="field f_100 radio-group required">
                  <label for="field40-1"> 40. (Age 3-5) How interested is the child in mechanical objects such as the stove or vacuum cleaner? </label>
                  <div class="option clearfix">
                    <input data="" name="field40" id="field40a" value="Little or no interest " type="radio">
                    <span class="option-title"> Little or no interest </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field40" id="field40b" value="Average interest" type="radio">
                    <span class="option-title"> Average interest </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field40" id="field40c" value="Fascinated by certain mechanical things" type="radio">
                    <span class="option-title"> Fascinated by certain mechanical things </span> </div>
                </div>
                <div id="field41-container" class="field f_100 radio-group required">
                  <label for="field41"> 41. (Age 3-5) How does child usually react to being interrupted at what he/she is doing? </label>
                  <div class="option clearfix">
                    <input data="" name="field41" id="field41a" value="Rarely or never gets upset" type="radio">
                    <span class="option-title"> Rarely or never gets upset </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field41" id="field41b" value="Sometimes gets mildly upset; rarely very upset" type="radio">
                    <span class="option-title"> Sometimes gets mildly upset; rarely very upset </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field41" id="field41c" value="Typically gets very upset" type="radio">
                    <span class="option-title"> Typically gets very upset </span> </div>
                </div>
                <div id="field42-container" class="field f_100 radio-group required">
                  <label for="field42"> 42. (Age 3-5) Will the child readily accept new articles of clothing (shoes, coats, etc.)? </label>
                  <div class="option clearfix">
                    <input data="" name="field42" id="field42a" value="Usually resists new clothes" type="radio">
                    <span class="option-title"> Usually resists new clothes </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field42" id="field42b" value="Doesn't seem to mind, or enjoys them" type="radio">
                    <span class="option-title"> Doesn't seem to mind, or enjoys them </span> </div>
                </div>
                <div id="field43-container" class="field f_100 radio-group required">
                  <label for="field43-1"> 43. (Age 3-5) Is child upset by certain things that are not "right" (like crack in wall, spot on rug, books learning in bookcase, broken rung on chair, pipe held and not smoked)? </label>
                  <div class="option clearfix">
                    <input data="" name="field43" id="field43a" value="Not especially " type="radio">
                    <span class="option-title"> Not especially </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field43" id="field43b" value="Yes, such things often upset him/her greatly " type="radio">
                    <span class="option-title"> Yes, such things often upset him/her greatly </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field43" id="field43c" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                </div>
                <div id="field44-container" class="field f_100 radio-group required">
                  <label for="field44"> 44. (Age 3-5) Does child adopt complicated "rituals" which make him/her very upset if not followed (like putting many dolls to bed in a certain order, taking exactly the same route between two places, dressing according to a precise pattern, or insisting that only certain words be used in a given situation)? </label>
                  <div class="option clearfix">
                    <input data="" name="field44" id="field44a" value="Yes, definitely" type="radio">
                    <span class="option-title"> Yes, definitely </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field44" id="field44b" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field44" id="field44c" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field45-container" class="field f_100 radio-group required">
                  <label for="field45"> 45. (Age 3-5) Does child get very upset if certain things he/she is used to are changed (like furniture or toy arrangement, or certain doors which must be left open or shut)? </label>
                  <div class="option clearfix">
                    <input data="" name="field45" id="field45a" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field45" id="field45b" value="Yes, definitely" type="radio">
                    <span class="option-title"> Yes, definitely </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field45" id="field45c" value="Slightly true" type="radio">
                    <span class="option-title"> Slightly true </span> </div>
                </div>
                <div id="field46-container" class="field f_100 radio-group required">
                  <label for="field46"> 46. (Age 3-5) Is the child destructive? </label>
                  <div class="option clearfix">
                    <input data="" name="field46" id="field46a" value="Yes, this is definitely a problem" type="radio">
                    <span class="option-title"> Yes, this is definitely a problem </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field46" id="field46b" value="Not deliberately or severely destructive" type="radio">
                    <span class="option-title"> Not deliberately or severely destructive </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field46" id="field46c" value="Not especially destructive" type="radio">
                    <span class="option-title"> Not especially destructive </span> </div>
                </div>
                <div id="field47-container" class="field f_100 radio-group required">
                  <label for="field47"> 47. (Age 3-5) Is the child usually physically pliable (can be led easily; melts into your arms)? </label>
                  <div class="option clearfix">
                    <input data="" name="field47" id="field47a" value="Yes" type="radio">
                    <span class="option-title"> Yes </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field47" id="field47b" value="Seems normal in this way" type="radio">
                    <span class="option-title"> Seems normal in this way </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field47" id="field47c" value="Definitely not pliable " type="radio">
                    <span class="option-title"> Definitely not pliable </span> </div>
                </div>
                <div id="field48-container" class="field f_100 radio-group required">
                  <label for="field48"> 48. (Age 3-5) Which single description; or combination of two descriptions; best characterizes the child? </label>
                  <div class="option clearfix">
                    <input data="" name="field48" id="field48a" value="Hyperactive, constantly moving, changes quickly from one thing to another" type="radio">
                    <span class="option-title"> Hyperactive, constantly moving, changes quickly from one thing to another </span></div>
                  <div class="option clearfix">
                    <input data="" name="field48" id="field48b" value="Watches television quietly for long periods" type="radio">
                    <span class="option-title"> Watches television quietly for long periods </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field48" id="field48c" value="Sits for long periods, staring into space or playing repetitively with objects, without apparent purpose" type="radio">
                    <span class="option-title"> Sits for long periods, staring into space or playing repetitively with objects, without apparent purpose </span></div>
                  <div class="option clearfix">
                    <input data="" name="field48" id="field48d" value="Watches television quietly for long periods" type="radio">
                    <span class="option-title"> Combination of 1and 2 </span></div>
                  <div class="option clearfix">
                    <input data="" name="field48" id="field48e" value="Watches television quietly for long periods" type="radio">
                    <span class="option-title"> Combination of 2 and 3 </span></div>
                  <div class="option clearfix">
                    <input data="" name="field48" id="field48f" value="Watches television quietly for long periods" type="radio">
                    <span class="option-title"> Combination of 1 and 3 </span></div>
                </div>
                <div id="field49-container" class="field f_100 radio-group required">
                  <label for="field49"> 49. (Age 3-5) Does the child seem to want to be liked? </label>
                  <div class="option clearfix">
                    <input data="" name="field49" id="field49a" value="Yes, unusually so" type="radio">
                    <span class="option-title"> Yes, unusually so </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field49" id="field49b" value="Just normally so" type="radio">
                    <span class="option-title"> Just normally so </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field49" id="field49c" value="Indifferent to being liked; happiest when left alone" type="radio">
                    <span class="option-title"> Indifferent to being liked; happiest when left alone </span> </div>
                </div>
                <div id="field50-container" class="field f_100 radio-group required">
                  <label for="field50"> 50. (Age 3-5) Is child sensitive and/or affectionate? </label>
                  <div class="option clearfix">
                    <input data="" name="field50" id="field50a" value="Is sensitive to criticism and affectionate" type="radio">
                    <span class="option-title"> Is sensitive to criticism and affectionate </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field50" id="field50b" value="Is sensitive to criticism and <em>not </em>affectionate" type="radio">
                    <span class="option-title"> Is sensitive to criticism, <em>not</em> affectionate </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field50" id="field50c" value="Not sensitive to criticism, is affectionate" type="radio">
                    <span class="option-title"> Not sensitive to criticism, is affectionate </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field50" id="field50d" value="Not sensitive to criticism, is NOT affectionate" type="radio">
                    <span class="option-title"> Not sensitive to criticism<em> nor</em> affectionate </span></div>
                </div>
                <div id="field51-container" class="field f_100 radio-group required">
                  <label for="field51"> 51. (Age 3-5) Is it possible to direct child's attention to an object some distance away or out a window? </label>
                  <div class="option clearfix">
                    <input data="" name="field51" id="field51a" value="Yes, no special problem" type="radio">
                    <span class="option-title"> Yes, no special problem </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field51" id="field51b" value="He/she rarely sees things very far out of reach" type="radio">
                    <span class="option-title"> He/she rarely sees things very far out of reach </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field51" id="field51c" value="He/she examines things with fingers and mouth only" type="radio">
                    <span class="option-title"> He/she examines things with fingers and mouth only </span> </div>
                </div>
                <div id="field52-container" class="field f_100 radio-group required">
                  <label for="field52"> 52. (Age 3-5) Do people consider the child especially attractive? </label>
                  <div class="option clearfix">
                    <input data="" name="field52" id="field52a" value="Yes, very good-looking child" type="radio">
                    <span class="option-title"> Yes, very good-looking child </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field52" id="field52b" value="No, just average" type="radio">
                    <span class="option-title"> No, just average </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field52" id="field52c" value="Faulty in physical appearance" type="radio">
                    <span class="option-title"> Faulty in physical appearance </span> </div>
                </div>
                <div id="field53-container" class="field f_100 radio-group required">
                  <label for="field53-1"> 53. (Age 3-5) Does the child look up at people (meet their eyes) when they are talking to him/her? </label>
                  <div class="option clearfix">
                    <input data="" name="field53" id="field53a" value="Never, or rarely" type="radio">
                    <span class="option-title"> Never, or rarely </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field53" id="field53b" value="Only with parents" type="radio">
                    <span class="option-title"> Only with parents </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field53" id="field53c" value="Usually does" type="radio">
                    <span class="option-title"> Usually does </span> </div>
                </div>
                <div id="field54-container" class="field f_100 radio-group required">
                  <label for="field54"> 54. (Age 3-5) Does the child take an adult by the wrist to use adult's hand (to open door, get cookies, turn on TV, etc.)? </label>
                  <div class="option clearfix">
                    <input data="" name="field54" id="field54a" value="Yes, this is typical" type="radio">
                    <span class="option-title"> Yes, this is typical </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field54" id="field54b" value="Perhaps, or rarely" type="radio">
                    <span class="option-title"> Perhaps, or rarely </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field54" id="field54c" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                </div>
                <div id="field55-container" class="field f_100 radio-group required">
                  <label for="field55"> 55. (Age 3-5) Which set of terms best describes the child? </label>
                  <div class="option clearfix">
                    <input data="" name="field55" id="field55a" value="Confused, self-concerned, perplexed, dependent, worried" type="radio">
                    <span class="option-title"> Confused, self-concerned, perplexed, dependent, worried </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field55" id="field55b" value="Aloof, indifferent, self-contented, remote" type="radio">
                    <span class="option-title"> Aloof, indifferent, self-contented, remote </span> </div>
                </div>
                <div id="field56-container" class="field f_100 radio-group required">
                  <label for="field56-1"> 56. (Age 3-5) Is the child extremely fearful? </label>
                  <div class="option clearfix">
                    <input data="" name="field56" id="field56a" value="Yes, of strangers or certain people" type="radio">
                    <span class="option-title"> <em>1</em>. Yes, of strangers or certain people </span></div>
                  <div class="option clearfix">
                    <input data="" name="field56" id="field56b" value="Yes, of certain animals, noises or objects" type="radio">
                    <span class="option-title"> <em>2.</em> Yes, of certain animals, noises or objects </span></div>
                  <div class="option clearfix">
                    <input data="" name="field56" id="field56c" value="Yes, a & b above" type="radio">
                    <span class="option-title"> Yes, <em>1 & 2</em> above </span></div>
                  <div class="option clearfix">
                    <input data="" name="field56" id="field56d" value="Only normal fearfulness" type="radio">
                    <span class="option-title"> Only normal fearfulness </span></div>
                  <div class="option clearfix">
                    <input data="" name="field56" id="field56e" value="Seems unusually bold and free of fear" type="radio">
                    <span class="option-title"> Seems unusually bold and free of fear </span></div>
                  <div class="option clearfix">
                    <input data="" name="field56" id="field56f" value="Child ignores or is unaware of fearsome objects" type="radio">
                    <span class="option-title"> Child ignores or is unaware of fearsome objects </span></div>
                </div>
                <div id="field57-container" class="field f_100 radio-group required">
                  <label for="field57"> 57. (Age 3-5) Does he/she fall or get hurt in running or climbing? </label>
                  <div class="option clearfix">
                    <input data="" name="field57" id="field57a" value="Tends toward falling or injury" type="radio">
                    <span class="option-title"> Tends toward falling or injury </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field57" id="field57b" value="Average in this way" type="radio">
                    <span class="option-title"> Average in this way </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field57" id="field57c" value="Never, or almost never, exposes self to falling" type="radio">
                    <span class="option-title"> Never, or almost never, exposes self to falling </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field57" id="field57d" value="Surprisingly safe despite active climbing, swimming, etc." type="radio">
                    <span class="option-title"> Surprisingly safe despite active climbing, swimming, etc. </span></div>
                </div>
                <div id="field58-container" class="field f_100 radio-group required">
                  <label for="field58"> 58. (Age 3-5) Is there a problem in that the child hits, pinches, bites or otherwise injures<em> himself </em>or <em>others</em>? </label>
                  <div class="option clearfix">
                    <input data="" name="field58" id="field58a" value="Self" type="radio">
                    <span class="option-title"> Yes, self only </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field58" id="field58b" value="Others" type="radio">
                    <span class="option-title"> Yes, others only </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field58" id="field58c" value="Yes, self and others" type="radio">
                    <span class="option-title"> Yes, self and others </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field58" id="field58d" value="No (not a problem)" type="radio">
                    <span class="option-title"> No (not a problem) </span> <br>
                  </div>
                </div>
                <div id="field59-container" class="field f_100 radio-group required">
                  <label for="field59"> 59. At what age did the child say his/her first words (even if later stopped talking)? </label>
                  <div class="option clearfix">
                    <input data="" name="field59" id="field59a" value="Has never used words" type="radio">
                    <span class="option-title"> Has never used words </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field59" id="field59b" value="8-12 months" type="radio">
                    <span class="option-title"> 8-12 months </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field59" id="field59c" value="13-15 months" type="radio">
                    <span class="option-title"> 13-15 months </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field59" id="field59d" value="16-24 months" type="radio">
                    <span class="option-title"> 16-24 months </span></div>
                  <div class="option clearfix">
                    <input data="" name="field59" id="field59e" value="2 years-3 years" type="radio">
                    <span class="option-title"> 2 years-3 years </span></div>
                  <div class="option clearfix">
                    <input data="" name="field59" id="field59f" value="3 years-4 years" type="radio">
                    <span class="option-title"> 3 years-4 years </span></div>
                  <div class="option clearfix">
                    <input data="" name="field59" id="field59g" value="After 4 years" type="radio">
                    <span class="option-title"> After 4 years </span></div>
                  <div class="option clearfix">
                    <input data="" name="field59" id="field59h" value="Don't know" type="radio">
                    <span class="option-title"> Don't know </span></div>
                </div>
                <div id="field59-container" class="field f_100">
                  <label for="field59"> 59a. Please list child's first six words (as well as you can remember them) </label>
                  <textarea rows="1" cols="20" name="field59a1" id="field59a-1" required></textarea>
                </div>
                <div id="field60-container" class="field f_100 radio-group required">
                  <label for="field60"> 60. (Before age 5) Did the child start to talk, then become silent again for a week or more? </label>
                  <div class="option clearfix">
                    <input data="" name="field60" id="field60a" value="Yes, but later talked again"type="radio">
                    <span class="option-title"> Yes, but later talked again (age stopped
                    <input data="" name="field60" type="text" class="numeral" id="field60a1">
                    , duration
                    <input data="" name="field60" type="text" id="field60a2">
                    )" </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field60" id="field60b" value="Yes, but never started again" type="radio">
                    <span class="option-title"> Yes, but never started again (age stopped
                    <input data="" name="field60" type="text" class="numeral" id="field60b1">
                    ) </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field60" id="field60c" value="No, continued to talk or never began talking " type="radio">
                    <span class="option-title"> No, continued to talk, or never began talking </span> </div>
                </div>
                <div id="field61-container" class="field f_100 radio-group required">
                  <label for="field61"> 61. (Before age 5) Did the child start to talk, then stop, and begin to whisper instead, for a week or more? </label>
                  <div class="option clearfix">
                    <input data="" name="field61" id="field61a" value="Yes, but later talked again" type="radio">
                    <span class="option-title"> Yes, but later talked again (age stopped
                    <input data="" name="field61" type="text" class="numeral" id="field61a1">
                    , duration
                    <input data="" name="field61" type="text" id="field61a2">
                    ) </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field61" id="field61b" value="Yes, still only whispers" type="radio">
                    <span class="option-title"> Yes, still only whispers (age stopped talking
                    <input data="" name="field61" type="text" class="numeral" id="field61b1">
                    ) </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field61" id="field61c" value="Now doesn't even whisper" type="radio">
                    <span class="option-title"> Now doesn't even whisper (stopped talk
                    <input data="" name="field61" type="text" class="numeral" id="field61c1">
                    ; stopped whispering
                    <input data="" name="field61" type="text" class="numeral" id="field61c2">
                    ) </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field61" id="field61d" value="No, continued to talk, or never began talking " type="radio">
                    <span class="option-title"> No, continued to talk, or never began talking </span> </div>
                </div>
                <div id="field62-container" class="field f_100 radio-group required">
                  <label for="field62"> 62. (Age 1-5) How well could the child pronounce his/her first words when learning to speak, and how well could he/she pronounce difficult words between 3 and 5? </label>
                  <div class="option clearfix">
                    <input data="" name="field62" id="field62a" value="Too little speech to tell, or other answer" type="radio">
                    <span class="option-title"> Too little speech to tell, or other answer </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field62" id="field62b" value="Average or below average pronunciation of first words (&quot;wabbit,&quot; etc.) and also poor at 3 to 5" type="radio">
                    <span class="option-title"> Average or below average pronunciation of first words ("wabbit," etc.),
                    and also poor at 3 to 5 </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field62" id="field62c" value="Average or below on first words, unusually good at 3-5" type="radio">
                    <span class="option-title"> Average or below on first words, unusually good at 3-5 </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field62" id="field62d" value="Unusually good on first words, average or below at 3-5" type="radio">
                    <span class="option-title"> Unusually good on first words, average or below at 3-5 </span></div>
                  <div class="option clearfix">
                    <input data="" name="field62" id="field62e" value="Unusually good on first words, and also at 3-5" type="radio">
                    <span class="option-title"> Unusually good on first words, and also at 3-5 </span></div>
                </div>
                <div id="field63-container" class="field f_100 radio-group required">
                  <label for="field63"> 63. (Age 3-5) Is the child's vocabulary (the number of things he/she can name or point to accurately) greatly out of proportion to his/her ability to "communicate" (to answer questions or tell you something)? </label>
                  <div class="option clearfix">
                    <input data="" name="field63" id="field63a" value="He/she can point to many objects I name, but doesn't speak or &quot;communicate&quot;" type="radio">
                    <span class="option-title"> He/she can <em>point</em> to many objects I name, but doesn't speak or "communicate" </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field63" id="field63b" value="He/she can correctly name many objects, but not &quot;communicate&quot;" type="radio">
                    <span class="option-title"> He/she can correctly <em>name</em> many objects, but not "communicate" </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field63" id="field63c" value="Ability to &quot;communicate&quot; is pretty good -- about what you would expect from the number of words he/she knows" type="radio">
                    <span class="option-title"> Ability to "communicate" is pretty good -- about what you would expect from the number of words he/she knows </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field63" id="field63d" value="Doesn't use or understand words " type="radio">
                    <span class="option-title"> Doesn't use or understand words </span> <br>
                  </div>
                </div>
                <div id="field64-container" class="field f_100 radio-group required">
                  <label for="field64"> 64. When the child spoke his/her first sentences; did he/she surprise you by using words he/she had not used individually before? </label>
                  <div class="option clearfix">
                    <input data="" name="field64" id="field64a" value="Yes" type="radio">
                    <span class="option-title"> Yes (any examples?
                    <input data="" name="field64" type="text" id="field64a1">
                    )</span> </div>
                  <div class="option clearfix">
                    <input data="" name="field64" id="field64b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field64" id="field64c" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field64" id="field64d" value="Too little speech to tell" type="radio">
                    <span class="option-title"> Too little speech to tell </span></div>
                </div>
                <div id="field65-container" class="field f_100 radio-group required">
                  <label for="field65"> 65. How did child refer to <em>him/herself</em> on first learning to talk? </label>
                  <div class="option clearfix">
                    <input data="" name="field65" id="field65a" value="a. &quot;(John) fell down;&quot; or &quot;Baby (or Boy) fall down.&quot;" type="radio">
                    <span class="option-title"><em>1</em>. <em>&quot;(John)</em> fall down;" or <em>"Baby (or Boy)</em> fall down." </span></div>
                  <div class="option clearfix">
                    <input data="" name="field65" id="field65b" value="b. &quot;Me fall down;&quot; or &quot;I fall down.&quot;" type="radio">
                    <span class="option-title"><em>2. &quot;Me</em> fall down," or "<em>I</em> fall down" </span></div>
                  <div class="option clearfix">
                    <input data="" name="field65" id="field65c" value="c. &quot;(He; Him; She; or Her) fall down&quot;" type="radio">
                    <em>3<span class="option-title">.</span></em><span class="option-title"> &quot;<em>(He; Him; She; or Her)</em> fall down" </span></div>
                  <div class="option clearfix">
                    <input data="" name="field65" id="field65d" value="d. &quot;You fall down&quot;" type="radio">
                    <span class="option-title"> <em>4.</em> <em>&quot;You</em> fall down" </span></div>
                  <div class="option clearfix">
                    <input data="" name="field65" id="field65e" value="Any combination of a, b & c" type="radio">
                    <span class="option-title"> Any combination of<em> 1, 2, and/or 3</em></span></div>
                  <div class="option clearfix">
                    <input data="" name="field65" id="field65f" value="Any combination of a, b & c" type="radio">
                    <span class="option-title"> No speech or too little speech as yet</span> <br>
                  </div>
                </div>
                <div id="field66-container" class="field f_100 radio-group required">
                  <label for="field66"> 66. (Age 3-5) Does child repeat phrases or sentences that he/she has heard in the past (maybe using a hollow, parrot-like voice), what is said having little or no relation to the situation? </label>
                  <div class="option clearfix">
                    <input data="" name="field66" id="field66a" value="Yes, definitely, except voice not hollow or parrot-like " type="radio">
                    <span class="option-title"> Yes, definitely, except voice not hollow or parrot-like </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field66" id="field66b" value="Yes, definitely, including peculiar voice tone " type="radio">
                    <span class="option-title"> Yes, definitely, including peculiar voice tone </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field66" id="field66c" value="Not sure " type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field66" id="field66d" value="No" type="radio">
                    <span class="option-title"> No </span> <br>
                  </div>
                  <div class="option clearfix">
                    <input data="" name="field966" id="field66e" value="Too little speech to tell "  type="radio">
                    <span class="option-title"> Too little speech to tell </span> <br>
                  </div>
                </div>
                <div id="field94-container" class="field f_100 radio-group required">
                  <label for="field67"> 67. (Before age 5) Can the child answer a simple question like "What is your first name?" "Why did Mommy spank Billy?" </label>
                  <div class="option clearfix">
                    <input data="" name="field67" id="field67a" value="Yes, can answer such questions adequately " type="radio">
                    <span class="option-title"> Yes, can answer such questions adequately </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field67" id="field67b" value="No, uses speech, but can't answer questions " type="radio">
                    <span class="option-title"> No, uses speech, but can't answer questions </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field67" id="field67c" value="Too little speech to tell" type="radio">
                    <span class="option-title"> Too little speech to tell </span> </div>
                </div>
                <div id="field68-container" class="field f_100 radio-group required">
                  <label for="field68"> 68. (Before age 5) Can the child understand what you say to him/her, judging from his/her ability to follow instructions or answer you? </label>
                  <div class="option clearfix">
                    <input data="" name="field68" id="field68a" value="Yes, understands very well " type="radio">
                    <span class="option-title"> Yes, understands very well </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field68" id="field68b" value="Yes, understands fairly well " type="radio">
                    <span class="option-title"> Yes, understands fairly well </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field68" id="field68c" value="Understands a little, if you repeat and repeat " type="radio">
                    <span class="option-title"> Understands a little, if you repeat and repeat </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field68" id="field68d" value="Very little or no understanding " type="radio">
                    <span class="option-title"> Very little or no understanding </span> <br>
                  </div>
                </div>
                <div id="field69-container" class="field f_100 radio-group required">
                  <label for="field69"> 69. (Before age 5) If the child talks; do you feel he/she understands what he/she is saying? </label>
                  <div class="option clearfix">
                    <input data="" name="field69" id="field69a" value="Doesn't talk enough to tell " type="radio">
                    <span class="option-title"> Doesn't talk enough to tell </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field69" id="field69b" value="No, he/she is just repeating what he/she has heard with hardly any understanding " type="radio">
                    <span class="option-title"> No, he/she is just repeating what he/she has heard with hardly any understanding </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field69" id="field69c" value="Not just repeating-- he/she understands what he/she is saying; but not well " type="radio">
                    <span class="option-title"> Not just repeating--he/she understands what he/she is saying, but not well </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field69" id="field69d" value="No doubt that he/she understands what he/she is saying " type="radio">
                    <span class="option-title"> No doubt that he/she understands what he/she is saying </span></div>
                </div>
                <div id="field70-container" class="field f_100 radio-group required">
                  <label for="field70"> 70. (Before age 5) Has the child used the word "Yes"? </label>
                  <div class="option clearfix">
                    <input data="" name="field70" id="field70a" value="Has used &quot;Yes&quot; fairly often and correctly " type="radio">
                    <span class="option-title"> Has used "Yes" fairly often and correctly </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field70" id="field70b" value="Seldom has used &quot;Yes,&quot; but has used it " type="radio">
                    <span class="option-title"> Seldom has used "Yes," but has used it </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field70" id="field70c" value="Has used a number of other words or phrases, but hasn't used word "Yes" " type="radio">
                    <span class="option-title"> Has used sentences, but hasn't used word "Yes" </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field70" id="field70d" value="Has used a number of other words or phrases, but hasn't used word &quot;Yes&quot; " type="radio">
                    <span class="option-title"> Has used a number of other words or phrases, but hasn't used word "Yes" </span></div>
                  <div class="option clearfix">
                    <input data="" name="field70" id="field70e" value="Has no speech, or too little speech to tell " type="radio">
                    <span class="option-title"> Has no speech, or too little speech to tell </span> <br>
                  </div>
                </div>
                <div id="field71-container" class="field f_100 radio-group required">
                  <label for="field71"> 71. (Age 3-5) Does the child typically say "Yes" by repeating the same question he/she has been asked? (Example: You ask "Shall we go for a walk, Honey?" and he/she indicates he/she does want to by saying "Shall we go for a walk, Honey?" or "Shall we go for a walk?&quot;) </label>
                  <div class="option clearfix">
                    <input data="" name="field71" id="field71a" value="Yes, definitely, does not say &quot;yes&quot; directly " type="radio">
                    <span class="option-title"> Yes, definitely, does not say "yes" directly </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field71" id="field71b" value="No, would say &quot;Yes&quot; or &quot;OK&quot; or similar answer" type="radio">
                    <span class="option-title"> No, would say "Yes" or "OK" or similar answer </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field71" id="field71c" value="Not sure " type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field71" id="field71d" value="Too little speech to say" type="radio">
                    <span class="option-title"> Too little speech to say </span></div>
                </div>
                <div id="field72-container" class="field f_100 radio-group required">
                  <label for="field72"> 72. (Before age 5) Has the child asked for something by using the same sentence you would use when you offer it to him/her? (Example: The child wants milk, so he/she says: "Do you want some milk?" or "You want some milk?") </label>
                  <div class="option clearfix">
                    <input data="" name="field72" id="field72a" value="Yes, definitely (uses &quot;You&quot; instead of &quot;I&quot;) " type="radio">
                    <span class="option-title"> Yes, definitely (uses "You" instead of "I") </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field72" id="field72b" value="No, would ask differently " type="radio">
                    <span class="option-title"> No, would ask differently </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field72" id="field72c" value="Not sure " type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field72" id="field72d" value="Not enough speech to tell " type="radio">
                    <span class="option-title"> Not enough speech to tell </span></div>
                </div>
                <div id="field73-container" class="field f_100 radio-group required">
                  <label for="field73"> 73. (Before age 5) Has the child used the word "I"? </label>
                  <div class="option clearfix">
                    <input data="" name="field73" id="field73a" value="Has used &quot;I&quot; fairly often and correctly " type="radio">
                    <span class="option-title"> Has used "I" fairly often and correctly </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field73" id="field73b" value="Seldom has used &quot;I&quot;, but has used it correctly" type="radio">
                    <span class="option-title"> Seldom has used "I", but has used it correctly </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field73" id="field73c" value="Has used sentences, but hasn't used the word &quot;I&quot; " type="radio">
                    <span class="option-title"> Has used sentences, but hasn't used the word "I" </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field73" id="field73d" value="Has used a number of words or phrases, but hasn't used the word &quot;I&quot;" type="radio">
                    <span class="option-title"> Has used a number of words or phrases, but hasn't used the word "I" </span></div>
                  <div class="option clearfix">
                    <input data="" name="field73" id="field73e" value="Has used &quot;I&quot;, but only where word &quot;you&quot; belonged " type="radio">
                    <span class="option-title"> Has used "I", but only where word "you" belonged </span></div>
                  <div class="option clearfix">
                    <input data="" name="field73" id="field73f" value="Has no speech, or too little speech to tell " type="radio">
                    <span class="option-title"> Has no speech, or too little speech to tell </span> </div>
                </div>
                <div id="field74-container" class="field f_100 radio-group required">
                  <label for="field74-1"> 74.(Before age 5) How does the child usually say "No" or refuse something? </label>
                  <div class="option clearfix">
                    <input data="" name="field74" id="field74a" value="He/she would just say &quot;No&quot; " type="radio">
                    <span class="option-title"> He/she would just say "No" </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field74" id="field74b" value="He/she would ignore you " type="radio">
                    <span class="option-title"> He/she would ignore you </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field74" id="field74c" value="He/she would grunt and wave his/her arms " type="radio">
                    <span class="option-title"> He/she would grunt and wave his/her arms </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field74" id="field74d" value="He/she would use some rigid meaningful phrase " type="radio">
                    <span class="option-title"> He/she would use some rigid meaningful phrase </span> (like &quot;Don't want it!&quot; or &quot;no milk!,&quot; &quot;No walk!&quot;)</div>
                  <div class="option clearfix">
                    <input data="" name="field74" id="field74e" value="Would use phrase having only private meaning like &quot;Daddy go in car&quot; " type="radio">
                    <span class="option-title"> Would use phrase having only private meaning like "Daddy go in car" </span></div>
                  <div class="option clearfix">
                    <input data="" name="field74" id="field74f" value="Other, or too little speech to tell " type="radio">
                    <span class="option-title"> Other, or too little speech to tell </span></div>
                </div>
                <div id="field75-container" class="field f_100 radio-group required">
                  <label for="field75"> 75. (Before age 5) Has the child used one word or idea as a substitute for another, for a prolonged period of time? (Example: always says "catsup" to mean "red," or uses "penny" for "drawer" after seeing pennies in a desk drawer) </label>
                  <div class="option clearfix">
                    <input data="" name="field75" id="field75a" value="Yes, definitely" type="radio">
                    <span class="option-title"> Yes, definitely </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field75" id="field75b" value="No" type="radio">
                    <span class="option-title"> No </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field75" id="field75c" value="Not sure" type="radio">
                    <span class="option-title"> Not sure </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field75" id="field75d" value="Too little speech to tell" type="radio">
                    <span class="option-title"> Too little speech to tell </span></div>
                </div>
                <div id="field76-container" class="field f_100 radio-group required">
                  <label for="field76"> 76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior? That is, when did detectable abnormal behavior actually begin? </label>
                  <div class="option clearfix">In first 3 months:
                    <input data="" name="field76" id="field76a" value="Might have noticed in first 3 months" type="radio">
                    <span class="option-title"> a. Might have noticed </span>
                    <input data="" name="field76" id="field76a1" value="Actually noticed in first 3 months" type="radio">
                    <span class="option-title">b. Actually noticed</span></div>
                  <div class="option clearfix"> <span class="option-title">4-6 months: </span>
                    <input data="" name="field76" id="field76b" value="Might have noticed 4-6 months" type="radio">
                    <span class="option-title"> a. Might have noticed </span>
                    <input data="" name="field76" id="field76b1" value="Actually noticed 4-6 months" type="radio">
                    <span class="option-title"> b.Actually noticed </span></div>
                  <div class="option clearfix"> <span class="option-title"> 7-12 months: </span>
                    <input data="" name="field76" id="field76c" value="Might have noticed 7-12 months" type="radio">
                    <span class="option-title"> a. Might have noticed</span>
                    <input data="" name="field76" id="field76c1" value="Actually noticed 7-12 months" type="radio">
                    <span class="option-title"> b. Actually noticed</span></div>
                  <div class="option clearfix"> <span class="option-title">13-24 months </span>
                    <input data="" name="field76" id="field76d" value="Might have noticed 13-24 months " type="radio">
                    a. <span class="option-title"> Might have noticed
                    <input data="" name="field76" id="field76d1" value="Actually noticed 13-24 months " type="radio">
                    b. Actually noticed</span></div>
                  <div class="option clearfix"><span class="option-title">2 years-3 years </span>
                    <input data="" name="field76" id="field76e" value="Might have noticed 2 years-3 years" type="radio">
                    <span class="option-title"> a. Might have noticed </span>
                    <input data="" name="field76" id="field76e1" value="Actually noticed 2 years-3 years" type="radio">
                    <span class="option-title"> b. Actually noticed </span></div>
                  <div class="option clearfix"> <span class="option-title"> 3 years-4 years </span>
                    <input data="" name="field76" id="field76f" value="Might have noticed 3 years-4 years" type="radio">
                    a. <span class="option-title"> Might have noticed</span>
                    <input data="" name="field76" id="field76f1" value="Actually noticed 3 years-4 years" type="radio">
                    b. <span class="option-title"> Actually noticed</span> </div>
                  <div class="option clearfix"> <span class="option-title">After 4th year </span>
                    <input data="" name="field76" id="field76g" value="Might have noticed after 4th year" type="radio">
                    <span class="option-title"> a. Might have noticed </span>
                    <input data="" name="field76" id="field76g1" value="Actually noticed after 4th year" type="radio">
                    <span class="option-title"> b. Actually noticed </span></div>
                  <div class="option clearfix"></div>
                </div>
                <div id="field77-container" class="field f_100 radio-group required">
                  <label for="field77"> 77. Father's highest educational level </label>
                  <div class="option clearfix">
                    <input data="" name="field77" id="field77a" value="Did not graduate high school " type="radio">
                    <span class="option-title"> Did not graduate high school </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field77" id="field77b" value="High school graduate " type="radio">
                    <span class="option-title"> High school graduate </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field77" id="field77c" value="Past high school tech. training " type="radio">
                    <span class="option-title"> Past high school tech. training </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field77" id="field77d" value="Some college " type="radio">
                    <span class="option-title"> Some college </span></div>
                  <div class="option clearfix">
                    <input data="" name="field77" id="field77e" value="College graduate" type="radio">
                    <span class="option-title"> College graduate </span></div>
                  <div class="option clearfix">
                    <input data="" name="field77" id="field77f" value="Some graduate work " type="radio">
                    <span class="option-title"> Some graduate work </span></div>
                  <div class="option clearfix">
                    <input data="" name="field77" id="field77g" value="Graduate degree" type="radio">
                    <span class="option-title"> Graduate degree 
                    (
                    <input type="text" name="field77" id="field77g1">
                    ) </span>
                    <label for="77-7a"></label>
                  </div>
                </div>
                <div id="field105-container" class="field f_100 radio-group required">
                  <label for="field78-1"> 78. Mother's highest educational level </label>
                  <div class="option clearfix">
                    <input data="" name="field78" id="field78a" value="Did not graduate high school" type="radio">
                    <span class="option-title"> Did not graduate high school </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field78" id="field78b" value="High school graduate" type="radio">
                    <span class="option-title"> High school graduate </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field78" id="field78c" value="Past high school tech. training" type="radio">
                    <span class="option-title"> Past high school tech. training </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field78" id="field78d" value="Some college" type="radio">
                    <span class="option-title"> Some college </span></div>
                  <div class="option clearfix">
                    <input data="" name="field78" id="field78e" value="College graduate" type="radio">
                    <span class="option-title"> College graduate </span></div>
                  <div class="option clearfix">
                    <input data="" name="field78" id="field78f" value="Some graduate work" type="radio">
                    <span class="option-title"> Some graduate work </span></div>
                  <div class="option clearfix">
                    <input data="" name="field77" id="field77g" value="Graduate degree" type="radio">
                    <span class="option-title"> Graduate degree 
                    (
                    <input type="text" name="field77" id="field77g1">
                    ) </span></div>
                </div>
                <div id="field79-container" class="field f_100 checkbox-group required">
                  <label for="field79"> 79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were known to have been seriously mentally ill or retarded. Consider parents, siblings, grandparents, uncles and aunts. </label>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79a" value="none" type="checkbox">
                    <span class="option-title">If none, check here </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79b" value="relationship1" type="checkbox">
                    <span class="option-title">a. Relationship:
                    <input data="" name="field79" type="text" id="field79b1">
                    <input data="" name="field79" id="field79b2" type="checkbox" value="Schizophrenia">
                    Schizophrenia
                    <input data="" name="field79" id="field79b3" type="checkbox" value="Depressive">
                    Depressive;  Other:
                    <input data="" name="field79" type="text" id="field79b4">
                    </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79c" value="relationship2" type="checkbox">
                    <span class="option-title">b. Relationship:
                    <input data="" name="field79" type="text" id="field79c1">
                    <input data="" name="field79" id="field79c2" type="checkbox" value="Schizophrenia">
                    Schizophrenia
                    <input data="" name="field79" id="field79c3" type="checkbox" value="Depressive">
                    Depressive;  Other:
                    <input data="" name="field79" type="text" id="field79c4">
                    </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79d" value="relationship3" type="checkbox">
                    <span class="option-title">c. Relationship:
                    <input data="" name="field79" type="text" id="field79d1">
                    <input data="" name="field79" id="field79d2" type="checkbox" value="Schizophrenia">
                    Schizophrenia
                    <input data="" name="field79" id="field79d3" type="checkbox" value="Depressive">
                    Depressive;  Other:
                    <input data="" name="field79" type="text" id="field79d4">
                    </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79e" value="relationship4" type="checkbox">
                    <span class="option-title">d. Relationship:
                    <input data="" name="field79" type="text" id="field79e1">
                    <input data="" name="field79" id="field79e2" type="checkbox" value="Schizophrenia">
                    Schizophrenia
                    <input data="" name="field79" id="field79e3" type="checkbox" value="Depressive">
                    Depressive;  Other:
                    <input data="" name="field79" type="text" id="field79e4">
                    </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field79" id="field79f" value="relationship5" type="checkbox">
                    <span class="option-title">e. Relationship:
                    <input data="" name="field79" type="text" id="field79f1">
                    <input data="" name="field79" id="field79f2" type="checkbox" value="Schizophrenia">
                    Schizophrenia
                    <input data="" name="field79" id="field79f3" type="checkbox" value="Depressive">
                    Depressive;  Other:
                    <input data="" name="field79" type="text" id="field79f4">
                    </span> </div>
                </div>
                <div id="field80-container" class="field f_100 radio-group required">
                  <label for="field80"> 80. Before age 2, arched back and bent head back, when held </label>
                  <div class="option clearfix">
                    <input data="" name="field80" id="field80a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field80" id="field80b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field80" id="field80c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field81-container" class="field f_100 radio-group required">
                  <label for="field81"> 81. Before age 2, struggled against being held </label>
                  <div class="option clearfix">
                    <input data="" name="field81" id="field81a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field81" id="field81b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field81" id="field81c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field82-container" class="field f_100 radio-group required">
                  <label for="field82"> 82. Before age 10, abnormal craving for certain food </label>
                  <div class="option clearfix">
                    <input data="" name="field82" id="field82a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field82" id="field82b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field82" id="field82c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field83-container" class="field f_100 radio-group required">
                  <label for="field83"> 83. Before age 10, eats unusually large amounts of food </label>
                  <div class="option clearfix">
                    <input data="" name="field83" id="field83a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field83" id="field83b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field83" id="field83c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field84-container" class="field f_100 radio-group required">
                  <label for="field84"> 84. Before age 10, covers ears at many sounds </label>
                  <div class="option clearfix">
                    <input data="" name="field84" id="field84a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field84" id="field84b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field84" id="field84c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field85-container" class="field f_100 radio-group required">
                  <label for="field85"> 85. Before age 10, only certain sounds seem painful to him/her </label>
                  <div class="option clearfix">
                    <input data="" name="field85" id="field85a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field85" id="field85b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field85" id="field85c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field86-container" class="field f_100 radio-group required">
                  <label for="field86"> 86. Before age 10, fails to blink at bright lights </label>
                  <div class="option clearfix">
                    <input data="" name="field86" id="field86a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field86" id="field86b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field86" id="field86c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field87-container" class="field f_100 radio-group required">
                  <label for="field87"> 87. Before age 10, skin color lighter or darker than others in family (which?
                    <input type="checkbox" name="field87" id="field87a">
                    lighter
                    <input type="checkbox" name="field87" id="field87a1">
                    darker) </label>
                  <div class="option clearfix">
                    <input data="" name="field87" id="field87b" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field87" id="field87c" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field87" id="field87d" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field88-container" class="field f_100 radio-group required">
                  <label for="field88"> 88. Before age 10, prefers inanimate (nonliving) things </label>
                  <div class="option clearfix">
                    <input data="" name="field88" id="field87a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field88" id="field88b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field88" id="field88c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field89-container" class="field f_100 radio-group required">
                  <label for="field89-1"> 89. Before age 10, avoids people </label>
                  <div class="option clearfix">
                    <input data="" name="field89" id="field89a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field89" id="field89b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field89" id="field89c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field90-container" class="field f_100 radio-group required">
                  <label for="field90"> 90. Before age 10, insists on keeping certain object with him/her </label>
                  <div class="option clearfix">
                    <input data="" name="field90" id="field90a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field90" id="field90b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field90" id="field90c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field91-container" class="field f_100 radio-group required">
                  <label for="field91"> 91. Before age 10, always frightened or very anxious </label>
                  <div class="option clearfix">
                    <input data="" name="field91" id="field91a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field91" id="field91b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field91" id="field91c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field92-container" class="field f_100 radio-group required">
                  <label for="field92"> 92. Before age 10, inconsolable crying </label>
                  <div class="option clearfix">
                    <input data="" name="field92" id="field92a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field92" id="field92b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field92" id="field92c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field93-container" class="field f_100 radio-group required">
                  <label for="field93"> 93. Before age 10, notices changes or imperfections and tries to correct them </label>
                  <div class="option clearfix">
                    <input data="" name="field93" id="field93a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field93" id="field93b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field93" id="field93c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field94-container" class="field f_100 radio-group required">
                  <label for="field94"> 94. Before age 10, tidy (neat, avoids messy things) </label>
                  <div class="option clearfix">
                    <input data="" name="field94" id="field94a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field94" id="field94b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field94" id="field94c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field95-container" class="field f_100 radio-group required">
                  <label for="field95"> 95. Before age 10, has collected a particular thing (toy horses, bits of glass, etc.)</label>
                  <div class="option clearfix">
                    <input data="" name="field95" id="field95a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field95" id="field95b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field95" id="field95c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field96-container" class="field f_100 radio-group required">
                  <label for="field96"> 96. Before age 10, after delay, repeat <strong>phrases</strong> he/she has heard </label>
                  <div class="option clearfix">
                    <input data="" name="field96" id="field96a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field96" id="field96b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field96" id="field96c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field97-container" class="field f_100 radio-group required">
                  <label for="field97"> 97. Before age 10, after delay, repeats <strong>whole sentences</strong> he/she has heard </label>
                  <div class="option clearfix">
                    <input data="" name="field97" id="field97a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field97" id="field97b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field97" id="field97c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field98-container" class="field f_100 radio-group required">
                  <label for="field98"> 98. Before age 10, repeats <strong>questions</strong> or <strong>conversations</strong> he/she has heard, over and
                    over, without variation </label>
                  <div class="option clearfix">
                    <input data="" name="field98" id="field98a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field98" id="field98b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field98" id="field98c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field99-container" class="field f_100 radio-group required">
                  <label for="field99"> 99. Before age 10, gets "hooked" or fixated on one topic (like cars, maps, death)</label>
                  <div class="option clearfix">
                    <input data="" name="field99" id="field99a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field99" id="field99b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field99" id="field99c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field100-container" class="field f_100 radio-group required">
                  <label for="field100"> 100. Before age 10, examines surfaces with fingers </label>
                  <div class="option clearfix">
                    <input data="" name="field100" id="field100a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field100" id="field100b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field100" id="field100c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field101-container" class="field f_100 radio-group required">
                  <label for="field101"> 101. Before age 10, holds bizarre pose or posture </label>
                  <div class="option clearfix">
                    <input data="" name="field101" id="field101a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field101" id="field101b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field101" id="field101c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field102-container" class="field f_100 radio-group required">
                  <label for="field102"> 102. Before age 10, chews or swallows nonfood objects </label>
                  <div class="option clearfix">
                    <input data="" name="field102" id="field102a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field102" id="field102b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field102" id="field102c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field103-container" class="field f_100 radio-group required">
                  <label for="field103"> 103. Before age 10, dislikes being touched or held </label>
                  <div class="option clearfix">
                    <input data="" name="field103" id="field103a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field103" id="field103b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field103" id="field103c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field104-container" class="field f_100 radio-group required">
                  <label for="field104"> 104. Before age 10, intensely aware of odors </label>
                  <div class="option clearfix">
                    <input data="" name="field104" id="field104a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field104" id="field104b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field104" id="field104c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field105-container" class="field f_100 radio-group required">
                  <label for="field105"> 105. Before age 10, hides skill or knowledge, so you are surprised later on </label>
                  <div class="option clearfix">
                    <input data="" name="field105" id="field105a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field105" id="field105b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field105" id="field105c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field106-container" class="field f_100 radio-group required">
                  <label for="field106"> 106. Before age 10, seems not to feel pain </label>
                  <div class="option clearfix">
                    <input data="" name="field106" id="field106a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field106" id="field106b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field106" id="field106c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field107-container" class="field f_100 radio-group required">
                  <label for="field107"> 107. Before age 10, terrified at unusual happenings </label>
                  <div class="option clearfix">
                    <input data="" name="field107" id="field107a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field107" id="field107b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field107" id="field107c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field108-container" class="field f_100 radio-group required">
                  <label for="field108"> 108. Before age 10, learned words useless to him/herself </label>
                  <div class="option clearfix">
                    <input data="" name="field108" id="field108a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field108" id="field108b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field108" id="field108c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="field109-container" class="field f_100 radio-group required">
                  <label for="field109"> 109. Before age 10, learned certain words, then stopped using them </label>
                  <div class="option clearfix">
                    <input data="" name="field109" id="field109a" value="Very true" type="radio">
                    <span class="option-title"> Very true </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field109" id="field109b" value="True" type="radio">
                    <span class="option-title"> True </span> </div>
                  <div class="option clearfix">
                    <input data="" name="field109" id="field109c" value="False" type="radio">
                    <span class="option-title"> False </span> </div>
                </div>
                <div id="form-submit" class="field f_100 clearfix submit">
                  <input value="Submit" type="submit">
                </div>
              </form>
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