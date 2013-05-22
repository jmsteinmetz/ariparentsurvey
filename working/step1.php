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
            <h5>INTRODUCTION</h5>
          </div>
          <div class="widget-content">
            <div class="widget-box">
              <form class="well white-box" action="step2.php?KeyID=<%=request.querystring("KeyID")%>" method="post">
                <fieldset>
                  <div class="control-group">
                    <p>Dear Parent,</p>
                    <p>We invite you to complete the Autism Research Institute&rsquo;s  (ARI) online questionnaire.   Autism is a  heterogeneous condition, and we hope the results from this questionnaire will  provide insight into understanding and treating those on the autism spectrum.</p>
                    <p><u>Background</u>.   The questionnaire is actually a revised version of ARI&rsquo;s Diagnostic  Checklist Form E-2.  As many of you may  know, Dr. Bernard Rimland, autism pioneer and founder of ARI, developed the  checklist in the 1960s.  The first  version, E-1, appeared as an appendix in his seminal 1964 book <em>Infantile  Autism: The Syndrome and Its Implications for a Neural Theory of Behavior</em>.   Soon after the publication of the book,  parents wrote to Dr. Rimland to share their own child&rsquo;s developmental history  along with descriptions of their behaviors; within a year or two, Dr. Rimland  revised the checklist.  This year we added  more questions to the E-2 because much has been learned over the past 50 years.</p>
                    <p>Dr. Rimland created the E-2 checklist to diagnose classical  autism, or Kanner&rsquo;s syndrome, as well as to subtype autism.  Over 42,000 parents worldwide have completed  the E-2 checklist, and we recently analyzed the data in relation to  subgroups.  The tentative findings  indicate that there may be 10 to 12 types of autism. As with any research  study, of course, these results need to be replicated.  </p>
                    <p>We have been in communication with other researchers who are  also investigating autism subtypes in order to determine whether our results  are consistent with the data obtained by other researchers who are studying  brain structure, immune system, gastrointestinal problems, biomarkers, and  more.</p>
                    <p><u>Instructions</u>.   The questionnaire should be completed by a parent or guardian who has  one or more children on the autism spectrum.    In addition, your son/daughter needs to be at least three years of age  and formally diagnosed with autism, Asperger&rsquo;s syndrome, or pervasive  developmental disorder (PDD). </p>
                    <p>Once the data is collected and analyzed, we will contact  those who completed the questionnaire and send them a summary report of the  findings. </p>
                    <p>We have received approval from Liberty IRB, Inc., a  federally-approved Institutional Review Committee.  Please read the confidentiality statement  carefully, which is located at the beginning of the questionnaire.  If you agree to the statement, please check  the appropriate box; you will then be able to complete the questionnaire. </p>
                    <p>Here are some specific instructions:</p>
                    <ul type="square">
                      <li>If a       question asks about something that happened a long time ago and you don&rsquo;t       remember, <u>please do not guess</u>.        You should simply indicate that you don&rsquo;t know.  </li>
                    </ul>
                    <ul type="square">
                      <li>Since       some people may enter nonsensical data into the online questionnaire, we       have programmed the website to send you an email after you have entered       your responses.  Please click on the       link in the email to verify your email address.  Otherwise, we will not be able to use       the data in our analyses. </li>
                    </ul>
                    <ul type="square">
                      <li>The       questionnaire involves several parts, and we estimate that it will take       from one to two hours to answer all of the questions.  You may complete the questionnaire       during more than one session.  In       this case, a link will be included in the email sent to you.  You simply need to click the link to       return to the questionnaire.  If you       accidentally delete the email, you can request another email with the link       from the questionnaire&rsquo;s webpage, www.AutismResearchSurvey.com </li>
                    </ul>
                    <p>Please let us know if you have any specific questions about  the study and/or the questionnaire.</p>
                    <p>Thank you in advance. </p>
                    <p>Steve Edelson, Ph.D.<br>
                      Director, Autism Research Institute</p>
                    <div class="controls"><!--<p class="help-block"> In addition to freeform text, any HTML5 text-based input appears like so. </p>--> 
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls"><!--<p class="help-block"> In addition to freeform text, any HTML5 text-based input appears like so. </p>--> 
                    </div>
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Next</button>
                    <!--<button class="btn">Cancel</button>--> 
                  </div>
                </fieldset>
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