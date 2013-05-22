<!--#include virtual="/inc/openConn.asp" -->
<% PageID = 22 %>
<!--#include virtual="/inc/callpageeditor.asp" -->
<% Nav1 = "class='active'"%>
<% if defaultlanguage = "" then 
defaultlanguage = "en" 
else
defaultlanguage = "es"
end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252" />
<title>Autism Research Institute</title>
<!--#include virtual="/inc/header.asp" -->
<style>
input, select, option {
    color: #999999;
}
.sep {border-top:1px dotted #999; margin:10px 0px}

</style>
</head>
<body id="families" class="sub e2">
<div id="kontainer">
  <div class="lcol_bg"></div>
  <div class="rcol_bg"></div>
  <div id="content">
    <div id="header">
      <!--#include virtual="/inc/top_nav.asp" -->
      <!-- close: nav -->
      <!--#include virtual="/inc/top_newsflash.asp" -->
      <!-- close: newsflash -->
      <!--#include virtual="/inc/search.asp" -->
      <div id="banner"> Autism is Treatable, Recovery is Possible. <a href="#" class="learnmore">Learn More &raquo;</a> </div>
      <!-- close: banner -->
    </div>
    <!-- close: header -->
    <div id="body_content">
      <div id="sidebar">
        <!--#include virtual="/inc/sidebar_news.asp" -->
        <!-- close: sidebar_content -->
      </div>
      <!-- close: sidebar -->
      <div id="the_page">
        <!--#include virtual="/inc/involved_bar.asp" -->
        <!-- close: involved_bar -->
        <div id="page_content">
          <h3 id="header_man">e2 checklist</h3>
        <!--#include virtual="/inc/inc_alt_content.asp" -->
          
<form name="form" action="/forms/e2process.asp" method="post">
	INSTRUCTIONS:  COMPLETE AND RECEIVE SCORES AND INTERPRETATION IN THE MAIL
  
  <div class="sep"></div>
  
  Child's First Name:<br /><input name="firstname" type="text" value=""><br />
  Child's Last Name:<br /><input name="lastname" type="text" value=""><br />
  Address:<br /><input name="address" type="text" value=""><br />
  City:<br /><input name="city" type="text" value=""><br />
  State:<br /><input name="state" type="text" value=""><br />
  Zip:<br /><input name="zip" type="text" value=""><br />
  Email:<br /><input name="email" type="text" value=""><br />
  
  <div class="sep"></div>
  
  1. Present age of child:<br>
  <input type="radio" name="Q1" value="1">Under 3 years old<br />
  <input type="radio" name="Q1" value="2">Between 3 and 4 years old<br />
  <input type="radio" name="Q1" value="3">Between 4 and 5 years old<br />
  <input type="radio" name="Q1" value="4">Between 5 and 6 years old<br />
  <input type="radio" name="Q1" value="5"><super>*</super>Over 6 years old<br />
  If over 6, please indicate age: <input type="text" name="Q1a" size="10" id="Q1a"><br />
  <div><i>(<super>*</super>Note: This Check List is designed primarily for children 3 to 5 years old.<br>
    If child is over 5, answer as well as you can by recall of child's behavior.)</i></div>
  
  <div class="sep"></div>
  
  2. Indicate child's sex:<br>
  <input type="radio" name="Q2" value="1"> Boy<br />
  <input type="radio" name="Q2" value="2"> Girl<br />
  
  <div class="sep"></div>
  
  3. Child's birth order and number of mother's other children:<br>
  <input type="radio" name="Q3" value="1"> Child is an only child<br />
  <input type="radio" name="Q3" value="2"> Child is first born of <input type="text" name="Q3a" size="4"> children <br> 
  <input type="radio" name="Q3" value="3"> Child is last born of <input type="text" name="Q3b" size="4"> children<br>
  <input type="radio" name="Q3" value="4"> Child is middle born: <input type="text" name="Q3c" size="4"> children are older and <input type="text" name="Q3d" size="4"> are younger than the child<br />
  <input type="radio" name="Q3" value="5"> Foster child or don't know<br />
  
  <div class="sep"></div>
  
  4. Were pregnancy and delivery normal?<br>
    <input type="radio" name="Q4" value="1"> Pregnancy and delivery both normal<br>
    <input type="radio" name="Q4" value="2"> Problems during both pregnancy and delivery<br>
    <input type="radio" name="Q4" value="3"> Pregnancy troubled; routine delivery<br>
    <input type="radio" name="Q4" value="4"> Pregnancy untroubled; problems during delivery<br>
    <input type="radio" name="Q4" value="5"> Don't know
  
  <div class="sep"></div>
  
  5. Was the birth premature (birth weight under 5 lbs.)?<br />
    <input type="radio" name="Q5" value="1"> Yes (about <input type="text" name="WEEKS_EARLY" size="6"> weeks early; <input type="text" name="LBS" size="4"> lbs, <input type="text" name="OUNCES" size="4">    ounces) <br>
    <input type="radio" name="Q5" value="2"> No<br>
    <input type="radio" name="Q5" value="3"> Don't know
    
  <div class="sep"></div>
  
  6. Was the child given oxygen <i>in the first week?</i><br />
    <input type="radio" name="Q6" value="1"> Yes<br>
    <input type="radio" name="Q6" value="2"> No<br>
    <input type="radio" name="Q6" value="3"> Don't know
    
  <div class="sep"></div>
    
  7. Appearance of child during first few weeks after birth:<br />
    <input type="radio" name="Q7" value="1"> Pale, delicate looking<br>
    <input type="radio" name="Q7" value="2"> Unusually healthy looking<br>
    <input type="radio" name="Q7" value="3"> Average, don't know,  or other
    
  <div class="sep"></div>
  
  8. Unusual conditions of birth and infancy (check only one number in left-hand column):<br />
    <input type="radio" name="Q8" value="1"> Unusual conditions.  Please indicate which:<br />
    <ul>
      <ul>
        <input type="checkbox" name="Q8a1" value="blindness" id="Q8a1"> blindness<br>
        <input type="checkbox" name="Q8a2" value="cp" id="Q8a2"> cerebral palsy<br>
        <input type="checkbox" name="Q8a3" value="brain injury"> brain injury<br>
        <input type="checkbox" name="Q8a4" value="seizures"> seizures<br>
        <input type="checkbox" name="Q8a5" value="bluebaby"> blue baby <br>
        <input type="checkbox" name="Q8a6" value="highfever"> very high fever <br>
        <input type="checkbox" name="Q8a7" value="jaundice" id="Q8a7">jaundice<br>
        other <input type="text" name="Q8b" size=40 maxlength=200>
      </ul>
    </ul>    
    <input type="radio" name="Q8" value="2"> Twin birth
    <ul>
      	<ul>
        <input type="radio" name="Q8c" value="identical">identical<br>
        <input type="radio" name="Q8c" value="fraternal">fraternal<br />
		</ul>
    </ul>

        <input type="radio" name="Q8" value="3">Both 1 and 2<br>
    	<input type="radio" name="Q8" value="4">Normal or don't know<br />    
   
    <div class="sep"></div>
    
  9. Concerning baby's health in first 3 months:
  <ul>
    <input name="Q9a" type="checkbox" id="Q9a" value="1"> Excellent health, no problems<br>
    <input name="Q9b" type="checkbox" id="Q9b" value="2"> Respiration
    <ul>
      <ul>
        <input name="Q9b1" type="checkbox" id="Q9b1" value="freqinfections">frequent infections<br>
        other<input name="Q9b2" type="text" id="Q9b2" size=40 maxlength=200>
      </ul>
    </ul>
    <input name="Q9c" type="checkbox" id="Q9c" value="3"> Skin
    <ul>
      <ul>
        <input type="checkbox" name="Q9c1" value="rashes" id="Q9c1">rashes<br>
        <input type="checkbox" name="Q9c2" value="infections" id="Q9c2">infections<br>
        <input type="checkbox" name="Q9c3" value="allergy" id="Q9c3">allergy<br>
        other<input type="text" name="Q9c4" size=40 maxlength=200 id="Q9c4">
      </ul>
    </ul>
    <input name="Q9d" type="checkbox" id="Q9d" value="4"> Feeding
    <ul>
      <ul>
        <input type="checkbox" name="Q9d1" value="learnsuck" id="Q9d1">
        learning to suck<br>
        <input type="checkbox" name="Q9d2" value="colic" id="Q9d2">
        colic<br>
        <input type="checkbox" name="Q9d3" value="vomiting" id="Q9d3">
        vomiting<br>
        other<input type="text" name="Q9d4" size=40 maxlength=200 id="Q9d4">
      </ul>
    </ul>
    <input name="Q9g" type="checkbox" id="Q9g" value="5"> Elimination
    <ul>
      <ul>
        <input type="checkbox" name="Q9g1" value="diarrhea" id="Q9g1">
        diarrhea<br>
        <input type="checkbox" name="Q9g2" value="constipation" id="Q9g2">
        constipation<br>
        other<input type="text" name="Q9g3" size=40 maxlength=200 id="Q9g3">
      </ul>
    </ul>
    <input name="Q9h" type="checkbox" id="Q9h" value="6"> Several of the above
    <ul>
      <ul>
        other
        <input name="Q9i" type="text" id="Q9i" size=40 maxlength=200>
        <br>
        other
        <input type="text" name="Q9j" size=40 maxlength=200>
        <br>
        other
        <input type="text" name="Q9k" size=40 maxlength=200>
        <br>
        other
        <input type="text" name="Q9l" size=40 maxlength=200>
        <br>
        other
        <input type="text" name="Q9m" size=40 maxlength=200>
        <br>
      </ul>
    </ul>
  </ul>
  
  <div class="sep"></div>
  
  10. as the child been given an electroencephalogram (EEG)?
  <ul>
    <input type="radio" name="Q10" value="1">
    Yes, it was considered normal<br>
    <input type="radio" name="Q10" value="2">
    Yes, it was considered borderline<br>
    <input type="radio" name="Q10" value="3">
    Yes, it was considered abnormal<br>
    <input type="radio" name="Q10" value="4">
    No, or don't know, or don't know results
  </ul>
  
  <div class="sep"></div>
  
  11. In the first year; did the child react to bright lights; bright colors; unusual sounds; etc.?
  <ul>
    <input type="radio" name="Q11" value="1">
    Unusually strong reaction <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pleasure <input type="text" name="Q11a" size="30"><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dislike <input type="text" name="Q11b" size="30"><br />
    <input type="radio" name="Q11" value="2">
    Unusually unresponsive<br>
    <input type="radio" name="Q11" value="3">
    Average; or don't know
  </ul>
 
 <div class="sep"></div>
 
  12. Did the child behave normally for a time before his abnormal behavior began?
  <ul>
  <input type="radio" name="Q12" value="1">
  Never was a period of normal behavior<br />
  <input type="radio" name="Q12" value="2">
  Normal during first 6 months<br>
  <input type="radio" name="Q12" value="3">
  Normal during first year<br>
  <input type="radio" name="Q12" value="4">
  Normal during first 1 1/2 years<br>
  <input type="radio" name="Q12" value="5">
  Normal during first 2 years<br>
  <input type="radio" name="Q12" value="6">
  Normal during first 3 years<br>
  <input type="radio" name="Q12" value="7">
  Normal during first 4-5 years<br>
  </ul>
  
  <div class="sep"></div>
  
  13. (Age 4-8 months) Did the child reach out or prepare himself to be picked up when mother approached him?
  <ul>
    <input type="radio" name="Q13" value="1">
    Yes, or I believe so<br>
    <input type="radio" name="Q13" value="2">
    No, I don't think he did<br>
    <input type="radio" name="Q13" value="3">
    No, definitely not<br>
    <input type="radio" name="Q13" value="4">
    Don't know<br>
  </ul>
  
  <div class="sep"></div>
  
  14. Did the child rock in this crib as a baby?
  <ul>
    <input type="radio" name="Q14" value="1">
    Yes,  quite a lot<br>
    <input type="radio" name="Q14" value="2">
    Yes, sometimes<br>
    <input type="radio" name="Q14" value="3">
    No, or very little<br>
    <input type="radio" name="Q14" value="4">
    Don't know<br>
  </ul>
  
  <div class="sep"></div>
  
  15. At what age did the child learn to walk alone?
  <ul>
    <input type="radio" name="Q15" value="1">
    8-12 months<br>
    <input type="radio" name="Q15" value="2">
    13-15 months<br>
    <input type="radio" name="Q15" value="3">
    16-18 months<br>
    <input type="radio" name="Q15" value="4">
    19-24 months<br>
    <input type="radio" name="Q15" value="5">
    25-36 months<br>
    <input type="radio" name="Q15" value="6">
    37 months or later, or does not walk alone<br>
  </ul>
  
  <div class="sep"></div>
  
  16. Which describes the change from crawling to walking?
  <ul>
    <input type="radio" name="Q16" value="1">
    Normal change from crawling to walking<br>
    <input type="radio" name="Q16" value="2">
    Little or no crawling, gradual start of walking<br>
    <input type="radio" name="Q16" value="3">
    Little or no crawling, sudden start of walking<br>
    <input type="radio" name="Q16" value="4">
    Prolonged crawling, sudden start of walking<br>
    <input type="radio" name="Q16" value="6">
    Prolonged crawling, gradual start of walking<br>
    <input type="radio" name="Q16" value="7">
    Other, or don't know<br>
  </ul>
  
  <div class="sep"></div>
  
  17. During the child's first year, did he seem to be unusually intelligent?
  <ul>
    <input type="radio" name="Q17" value="1">
    Suspected high intelligence<br>
    <input type="radio" name="Q17" value="2">
    Suspected average intelligence<br>
    <input type="radio" name="Q17" value="3">
    Child looked somewhat dull<br>
  </ul>
  
  <div class="sep"></div>
  
  18. During the child's first 2 years, did he like to be held?
  <ul>
    <input type="radio" name="Q18" value="1">
    Liked being picked up; enjoyed being held<br>
    <input type="radio" name="Q18" value="2">
    Limp and passive on being held<br>
    <input type="radio" name="Q18" value="3">
    You could pick child up and hold it only when and how it preferred<br>
    <input type="radio" name="Q18" value="4">
    Notably stiff and awkward to hold<br>
    <input type="radio" name="Q18" value="5">
    Don't know<br>
  </ul>
  
  <div class="sep"></div>
  
  19. Before age 3, did the child ever imitate another person?
  <ul>
    <input type="radio" name="Q19" value="1">
    Yes, waved bye-bye<br>
    <input type="radio" name="Q19" value="2">
    Yes, played pat-a-cake<br>
    <input type="radio" name="Q19" value="3">
    Yes, other
    <ul>
      <input type="text" name="Q19a" size="50">
      <br>
    </ul>
    <input type="radio" name="Q19" value="4">
    Two or more of above
    <ul>
      <input type="text" name="Q19b" size="50">
      <br>
      <input type="text" name="Q19c" size="50">
      <br>
      <input type="text" name="Q19d" size="50">
      <br>
    </ul>
    <input type="radio" name="Q19" value="5">
    No, or not sure<br>
  </ul>
  
  <div class="sep"></div>
  
  20. Before age 3, did the child have an unusually good memory?
  <ul>
    <input type="radio" name="Q20" value="1">
    Remarkable memory for songs, rhymes, TV commercials, etc., in words<br>
    <input type="radio" name="Q20" value="2">
    Remarkable memory for songs, music (humming only)<br>
    <input type="radio" name="Q20" value="3">
    Remarkable memory for names, places, routes, etc.<br>
    <input type="radio" name="Q20" value="4">
    No evidence for remarkable memory<br>
    <input type="radio" name="Q20" value="5">
    Apparently rather poor memory<br>
    <input type="radio" name="Q20" value="6">
    Both 1 and 2<br>
    <input type="radio" name="Q20" value="7">
    Both 2 and 3<br>
  </ul>
  
  <div class="sep"></div>
  
  21. Did you ever suspect the child was very nearly deaf?
  <ul>
    <input type="radio" name="Q21" value="1">
    Yes<br>
    <input type="radio" name="Q21" value="2">
    No<br>
  </ul>
  
  <div class="sep"></div>
  
  22. (Age 2-4) Is child "deaf" to some sounds but hears others?
  <ul>
    <input type="radio" name="Q22" value="1">
    Yes, can be "deaf" to loud sounds, but hears low ones<br>
    <input type="radio" name="Q22" value="2">
    No, this is not true of him
  </ul>
  
  <div class="sep"></div>
  
  23. (Age 2-4) Does child hold his hands in strange postures?
  <ul>
    <input type="radio" name="Q23" value="1">
    Yes, sometimes or often<br>
    <input type="radio" name="Q23" value="2">
    No<br>
  </ul>
  
  <div class="sep"></div>
  
  24. (Age 2-4) Does child engage in rhythmic or rocking activity for very long periods of time?
  <ul>
    <input type="radio" name="Q24" value="1">
    Yes, this is typical<br>
    <input type="radio" name="Q24" value="2">
    Seldom does this<br>
    <input type="radio" name="Q24" value="3">
    Not true of him<br>
  </ul>
  
  <div class="sep"></div>
  
  25. (Age 2-4) Does the child ever "look through" or "walk through" people, as though they weren't there?
  <ul>
    <input type="radio" name="Q25" value="1">
    Yes, often<br>
    <input type="radio" name="Q25" value="2">
    Yes, I think so<br>
    <input type="radio" name="Q25" value="3">
    No, doesn't do this<br>
  </ul>
  
  <div class="sep"></div>
  
  26. (Age 2-5) Does child have any unusual cravings for things to eat or chew on?
  <ul>
    <input type="radio" name="Q26" value="1">
    Yes, salt or salty foods<br>
    <input type="radio" name="Q26" value="2">
    Yes, often chews metal objects<br>
    <input type="radio" name="Q26" value="3">
    Yes, other
    <ul>
      other
      <input type="text" name="Q26a" size=40 maxlength=200>
    </ul>
    <input type="radio" name="Q26" value="4">
    Yes, more than 2 above
    <ul>
      which?
      <input type="text" name="Q26b" size=40 maxlength=200>
    </ul>
    <input type="radio" name="Q26" value="5">
    No, or not sure
  </ul>
  
  <div class="sep"></div>
  
  27. (Age 2-4) Does the child have certain eating oddities such as refusing to drink from a transparent container, eating only hot (or cold) food, eating only one or two foods, etc.?
  <ul>
    <input type="radio" name="Q27" value="1">
    Yes, definitely<br>
    <input type="radio" name="Q27" value="2">
    No, or not to any marked degree<br>
    <input type="radio" name="Q27" value="3">
    Don't know<br>
  </ul>
  
  <div class="sep"></div>
  
  28. Would you describe your child around age 3 or 4 as often seeming "in a shell," or so distant and "lost in thought" that you couldn't reach him?
  <ul>
    <input type="radio" name="Q28" value="1">
    Yes, this is a very accurate description<br>
    <input type="radio" name="Q28" value="2">
    Once in a while he might possibly be like that<br>
    <input type="radio" name="Q28" value="3">
    Not an accurate description<br>
  </ul>
  
  <div class="sep"></div>
  
  29. (Age 2-4) Is he cuddly?
  <ul>
    <input type="radio" name="Q29" value="1">
    Definitely, likes to cling to adults<br>
    <input type="radio" name="Q29" value="2">
    Above average (likes to be held)<br>
    <input type="radio" name="Q29" value="3">
    No, rather stiff and awkward to hold<br>
    <input type="radio" name="Q29" value="4">
    Don't know<br>
  </ul>
  
  <div class="sep"></div>
  
  30. (Age 3-5) Does the child deliberately hit his own head?
  <ul>
    <input type="radio" name="Q30" value="1">
    Never, or rarely<br>
    <input type="radio" name="Q30" value="2">
    Yes, usually by slapping it with his hand<br>
    <input type="radio" name="Q30" value="3">
    Yes, usually by banging it against someone else's legs or head<br>
    <input type="radio" name="Q30" value="4">
    Yes, usually by hitting walls, floor, furniture, etc.<br>
    <input type="radio" name="Q30" value="5">
    Several of above
  </ul>
  
  <div class="sep"></div>
  
  31. (Age 3-5) How well physically coordinated is the child?
  <ul>
    <input type="radio" name="Q31" value="1">
    Unusually graceful<br>
    <input type="radio" name="Q31" value="2">
    Above average<br>
    <input type="radio" name="Q31" value="3">
    Somewhat below average; or poor<br>
  </ul>
  
  <div class="sep"></div>
  
  32. (Age 3-5) Does the child sometimes whirl himself like a top?
  <ul>
    <input type="radio" name="Q32" value="1">
    Yes, does this often<br>
    <input type="radio" name="Q32" value="2">
    Yes, sometimes<br>
    <input type="radio" name="Q32" value="3">
    Yes, if you start him out<br>
    <input type="radio" name="Q32" value="4">
    No, he shows no tendency to whirl<br>
  </ul>
  
  <div class="sep"></div>
  33. (Age 3-5) How skillful is the child in doing fine work with his fingers or playing with small objects?
  <ul>
    <input type="radio" name="Q33" value="1">
    Exceptionally skillful<br>
    <input type="radio" name="Q33" value="2">
    Average for age<br>
    <input type="radio" name="Q33" value="3">
    A little awkward, or very awkward<br>
    <input type="radio" name="Q33" value="4">
    Don't know<br>
  </ul>
  
  <div class="sep"></div>
  
  34. (Age 3-5) Does the child like to spin things like jar lids, coins, or coasters?
  <ul>
    <input type="radio" name="Q34" value="1">
    Yes, often and for rather long periods<br>
    <input type="radio" name="Q34" value="2">
    Very seldom, or never<br>
  </ul>
  
  <div class="sep"></div>
  
  35. (Age 3-5) Does child show an unusual degree of skill (much better than normal child his age) at any of following:
  <ul>
    <input type="radio" name="Q35" value="1">
    Assembling jig saw or similar puzzles<br>
    <input type="radio" name="Q35" value="2">
    Arithmetic computation<br>
    <input type="radio" name="Q35" value="3">
    Can tell day of week a certain date will fall on<br>
    <input type="radio" name="Q35" value="4">
    Perfect musical pitch<br>
    <input type="radio" name="Q35" value="5">
    Throwing and/or catching a ball<br>
    <input type="radio" name="Q35" value="6">
    Other:
    <input type="text" name="Q35a" size=40 maxlength=200>
    <br>
    <input type="radio" name="Q35" value="7">
    More than one of above
    <ul>
      which?
      <input type="text" name="Q35b" size=40 maxlength=200>
    </ul>
    <input type="radio" name="Q35" value="8">
    No unusual skill; or not sure
  </ul>
  
  <div class="sep"></div>
  
  36. (Age 3-5) Does the chid sometimes jump up and down gleefully when pleased?
  <ul>
    <input type="radio" name="Q36" value="1">
    Yes, this is typical<br>
    <input type="radio" name="Q36" value="2">
    No or rarely<br>
  </ul>
  
  <div class="sep"></div>
  
  37. (Age 3-5) Does child sometimes line things up in precise, evenly-spaced rows and insist they not be disturbed?
  <ul>
    <input type="radio" name="Q37" value="1">
    No<br>
    <input type="radio" name="Q37" value="2">
    Yes<br>
    <input type="radio" name="Q37" value="3">
    Not sure<br>
  </ul>
  38. (Age 3-5) Does the child refuse to use his hands for an extended period of time?
  <ul>
    <input type="radio" name="Q38" value="1">
    Yes<br>
    <input type="radio" name="Q38" value="2">
    No<br>
  </ul>
  
  <div class="sep"></div>
  
  39. Was there a time before age 5 when the child <i>strongly</i> insisted on listening to music on records?
  <ul>
    <input type="radio" name="Q39" value="1">
    Yes, insisted on only certain records<br>
    <input type="radio" name="Q39" value="2">
    Yes, but almost any record would do<br>
    <input type="radio" name="Q39" value="3">
    Liked to listen, but didn't <i>demand</i> to<br>
    <input type="radio" name="Q39" value="4">
    No special interest in records<br>
  </ul>
<div class="sep"></div>
  40. (Age 3-5) How interested is the child in mechanical objects such as the stove or vacuum cleaner?
  <ul>
    <input type="radio" name="Q40" value="1">
    Little or no interest
    <br>
    <input type="radio" name="Q40" value="2">
    Average interest
    <br>
    <input type="radio" name="Q40" value="3">
    Fascinated by certain mechanical things
  </ul>
<div class="sep"></div>
  41. (Age 3-5) How does child usually react to being interrupted at what he is doing?
  <ul>
    <input type="radio" name="Q41" value="1">
    Rarely or never gets upset<br>
    <input type="radio" name="Q41" value="2">
    Sometimes gets mildly upset; rarely very upset<br>
    <input type="radio" name="Q41" value="3">
    Typically gets very upset<br>
  </ul>
<div class="sep"></div>
  42. (Age 3-5) Will the child readily accept new articles of clothing (shoes, coats, etc.)?
  <ul>
    <input type="radio" name="Q42" value="1">
    Usually resists new clothes<br>
    <input type="radio" name="Q42" value="2">
    Doesn't seem to mind, or enjoys them<br>
  </ul>
<div class="sep"></div>
  43. (Age 3-5) Is child upset by certain things that are not "right" (like crack in wall, spot on rug, books learning in bookcase, broken rung on chair, pipe held and not smoked)?
  <ul>
    <input type="radio" name="Q43" value="1">
    Not especially
    <br>
    <input type="radio" name="Q43" value="2">
    Yes, such things often upset him greatly
    <br>
    <input type="radio" name="Q43" value="3">
    Not sure
  </ul>
<div class="sep"></div>
  44. (Age 3-5) Does child adopt complicated "rituals" which make him very upset if not followed (like putting many dolls to bed in a certain order, taking exactly the same route between two places, dressing according to a precise pattern, or insisting that only certain words be used in a given situation)?
  <ul>
    <input type="radio" name="Q44" value="1">
    Yes, definitely<br>
    <input type="radio" name="Q44" value="2">
    Not sure<br>
    <input type="radio" name="Q44" value="3">
    No<br>
  </ul>
<div class="sep"></div>
  45. (Age 3-5) Does child get very upset if certain things he is used to are change (like furniture or toy arrangement, or certain doors which must be left open or shut)?
  <ul>
    <input type="radio" name="Q45" value="1">
    No<br>
    <input type="radio" name="Q45" value="2">
    Yes, definitely<br>
    <input type="radio" name="Q45" value="3">
    Slightly true<br>
  </ul>
<div class="sep"></div>
  46. (Age 3-5) Is the child destructive?
  <ul>
    <input type="radio" name="Q46" value="1">
    Yes, this is definitely a problem<br>
    <input type="radio" name="Q46" value="2">
    Not deliberately or severely destructive<br>
    <input type="radio" name="Q46" value="3">
    Not especially destructive<br>
  </ul>
<div class="sep"></div>
  47. (Age 3-5) Is the child usually physically pliable (can be led easily; melts into your arms)?
  <ul>
    <input type="radio" name="Q47" value="1">
    Yes
    <br>
    <input type="radio" name="Q47" value="2">
    Seems normal in this way
    <br>
    <input type="radio" name="Q47" value="3">
    Definitely not pliable
  </ul>
<div class="sep"></div>
  48. (Age 3-5) Which single description; or combination of two description; best characterizes the child?
  <ul>
    <input type="radio" name="Q48" value="1">
    Hyperactive, constantly moving, changes quickly from one thing to another<br>
    <input type="radio" name="Q48" value="2">
    Watches television quietly for long periods<br>
    <input type="radio" name="Q48" value="3">
    Sits for long periods, staring into space or playing repetitively with objects, without apparent purpose<br>
    <input type="radio" name="Q48" value="4">
    Combination of 1 and 2<br>
    <input type="radio" name="Q48" value="5">
    Combination of 2 and 3<br>
    <input type="radio" name="Q48" value="6">
    Combination of 1 and 3<br>
  </ul>
<div class="sep"></div>
  49. (Age 3-5) Does the child seem to want to be liked?
  <ul>
    <input type="radio" name="Q49" value="1">
    Yes, unusually so<br>
    <input type="radio" name="Q49" value="2">
    Just normally so<br>
    <input type="radio" name="Q49" value="3">
    Indifferent to being liked; happiest when left alone<br>
  </ul>
<div class="sep"></div>
  50. (Age 3-5) Is child sensitive and/or affectionate?
  <ul>
    <input type="radio" name="Q50" value="1">
    Is sensitive to criticism and affectionate<br>
    <input type="radio" name="Q50" value="2">
    Is sensitive to criticism, <i>not</i> affectionate<br>
    <input type="radio" name="Q50" value="3">
    Not sensitive to criticism, is affectionate<br>
    <input type="radio" name="Q50" value="4">
    Not sensitive to criticism <i>nor</i> affectionate<br>
  </ul>
<div class="sep"></div>
  51. (Age 3-5) Is it possible to direct child's attention to an object some distance away or out a window?
  <ul>
    <input type="radio" name="Q51" value="1">
    Yes, no special problem<br>
    <input type="radio" name="Q51" value="2">
    He rarely sees things very far out of reach<br>
    <input type="radio" name="Q51" value="3">
    He examines things with fingers and mouth only<br>
  </ul>
<div class="sep"></div>
  52. (Age 3-5) Do people consider the child especially attractive?
  <ul>
    <input type="radio" name="Q52" value="1">
    Yes, very good-looking child<br>
    <input type="radio" name="Q52" value="2">
    No, just average<br>
    <input type="radio" name="Q52" value="3">
    Faulty in physical appearance<br>
  </ul>
<div class="sep"></div>
  53. (Age 3-5) Does the child look up at people (meet their eyes) when they are talking to him?
  <ul>
    <input type="radio" name="Q53" value="1">
    Never, or rarely<br>
    <input type="radio" name="Q53" value="2">
    Only with parents<br>
    <input type="radio" name="Q53" value="3">
    Usually does<br>
  </ul>
<div class="sep"></div>
  54. (Age 3-5) Does the child take an adult by the wrist to use adult's hand (to open door, get cookies, turn on TV, etc.)?
  <ul>
    <input type="radio" name="Q54" value="1">
    Yes, this is typical<br>
    <input type="radio" name="Q54" value="2">
    Perhaps, or rarely<br>
    <input type="radio" name="Q54" value="3">
    No<br>
  </ul>
<div class="sep"></div>
  55. (Age 3-5) Which set of terms best describes the child?
  <ul>
    <input type="radio" name="Q55" value="1">
    Confused, self-concerned, perplexed, dependent, worried<br>
    <input type="radio" name="Q55" value="2">
    Aloof, indifferent, self-contented, remote<br>
  </ul>
<div class="sep"></div>
  56. (Age 3 and 5) Is the child extremely fearful?
  <ul>
    <input type="radio" name="Q56" value="1">
    Yes; of strangers or certain people<br>
    <input type="radio" name="Q56" value="2">
    Yes; of certain animals; noises or objects<br>
    <input type="radio" name="Q56" value="3">
    Yes; of 1 and 2 above<br>
    <input type="radio" name="Q56" value="4">
    Only normal fearfulness<br>
    <input type="radio" name="Q56" value="5">
    Seems unusually bold and free of fear<br>
    <input type="radio" name="Q56" value="6">
    Child ignores or is unawareof fearsome objects<br>
  </ul>
<div class="sep"></div>
  57. (Age 3-5) Does he fall or get hurt in running or climbing?
  <ul>
    <input type="radio" name="Q57" value="1">
    Tends toward falling or injury<br>
    <input type="radio" name="Q57" value="2">
    Average in this way<br>
    <input type="radio" name="Q57" value="3">
    Never, or almost never, exposes self to falling<br>
    <input type="radio" name="Q57" value="4">
    Surprisingly safe despite active climbing, swimming, etc.<br>
  </ul>
<div class="sep"></div>
  58. (Age 3-5) Is there a problem in that the child hits; pinches; bites or otherwise injures <i>himself or others</i>?
  <ul>
    <input type="radio" name="Q58" value="1">
    Yes, self only<br>
    <input type="radio" name="Q58" value="2">
    Yes, others only<br>
    <input type="radio" name="Q58" value="3">
    Yes, self and others<br>
    <input type="radio" name="Q58" value="4">
    No (not a problem)<br>
  </ul>
<div class="sep"></div>
  59. At what age did the child say his first words (even if later stopped talking)?
  <ul>
    <input type="radio" name="Q59" value="1">
    Has never used words<br>
    <input type="radio" name="Q59" value="2">
    8-12 months<br>
    <input type="radio" name="Q59" value="3">
    13-15 months<br>
    <input type="radio" name="Q59" value="4">
    16-24 months<br>
    <input type="radio" name="Q59" value="5">
    2 years-3 years<br>
    <input type="radio" name="Q59" value="6">
    3 years-4 years<br>
    <input type="radio" name="Q59" value="7">
    After 4 years<br>
    <input type="radio" name="Q59" value="8">
    8. Don't know<br>
  </ul>
<div class="sep"></div>
  59a. On lines below list child's first six words (as well as you can remember them)
  <ul>
    <table>
      <tr>
        <td><input type="text" name="Q59a1" size=40 maxlength=50>
        <td><input type="text" name="Q59a2" size=40 maxlength=50>
        <td><input type="text" name="Q59a3" size=40 maxlength=50>
      </tr>
      <tr>
        <td><input type="text" name="Q59a4" size=40 maxlength=50>
        <td><input type="text" name="Q59a5" size=40 maxlength=50>
        <td><input type="text" name="Q59a6" size=40 maxlength=50>
      </tr>
    </table>
  </ul>
<div class="sep"></div>
  60. (Before age 5) Did the child start to talk; then become silent again for a week or more?
  <ul>
    <input type="radio" name="Q60" value="1">
    Yes, but later talked again
    <ul>
      age stopped
      <input type="text" name="Q60a" size=20 maxlength=50>
      <br>
      duration
      <input type="text" name="Q60b" size=20 maxlength=50>
    </ul>
    <input type="radio" name="Q60" value="2">
    Yes, but never started again
    <ul>
      age stopped
      <input type="text" name="Q60c" size=20 maxlength=50>
      <br>
    </ul>
    <input type="radio" name="Q60" value="3">
    No, continued to talk or never began talking
  </ul>
<div class="sep"></div>
  61. (Before age 5) Did the child start to talk; then stop; and begin to whisper instead; for a week or more?
  <ul>
    <input type="radio" name="Q61" value="1">
    Yes, but later talked again
    <ul>
      age stopped
      <input type="text" name="Q61a" size=20 maxlength=50>
      <br>
      duration
      <input type="text" name="Q61b" size=20 maxlength=50>
    </ul>
    <input type="radio" name="Q61" value="2">
    Yes, still only whispers
    <ul>
      age stopped talking
      <input type="text" name="Q61c" size=20 maxlength=50>
      <br>
    </ul>
    <input type="radio" name="Q61" value="3">
    Now doesn't even whisper
    <ul>
      stopped talk
      <input type="text" name="Q61d" size=20 maxlength=50>
      <br>
      stopped whisper
      <input type="text" name="Q61e" size=20 maxlength=50>
    </ul>
    <input type="radio" name="Q61" value="4">
    No, continued to talk, or never began talking
  </ul>
<div class="sep"></div>
  62. (Age 1-5) How well could the child pronounce his first words when learning to speak, and how well could he pronounce difficult words between 3 and 5?
  <ul>
    <input type="radio" name="Q62" value="1">
    Too little speech to tell, or other answer<br>
    <input type="radio" name="Q62" value="2">
    Average or below average pronunciation of first words ("wabbit," etc.) and also poor at 3 to 5<br>
    <input type="radio" name="Q62" value="3">
    Average or below on first words, unusually good at 3-5<br>
    <input type="radio" name="Q62" value="4">
    Unusually good on first words, average or below at 3-5<br>
    <input type="radio" name="Q62" value="5">
    Unusually good on first words, and also at 3-5<br>
  </ul>
<div class="sep"></div>
  63. (Age 3-5) Is the child's vocabulary (the number of things he can name or point to accurately) greatly out of proportion to his ability to "communicate" (to answer questions or tell you something)?
  <ul>
    <input type="radio" name="Q63" value="1">
    He can <i>point</i> to many object I name, but doesn't speak or "communicate"<br>
    <input type="radio" name="Q63" value="2">
    He can correctly <i>name</i> many objects, but not "communicate"<br>
    <input type="radio" name="Q63" value="3">
    Ability to "communicate" is pretty good -- about what you would expect from the number of words he knows<br>
    <input type="radio" name="Q63" value="4">
    Doesn't use or understand words
  </ul>
<div class="sep"></div>
  64. When the child spoke his first sentences; did he surprise you by using words he had not used individually before?
  <ul>
    <input type="radio" name="Q64" value="1">
    Yes
    <br>
    <input type="radio" name="Q64" value="2">
    No
    <br>
    <input type="radio" name="Q64" value="3">
    Not sure
    <br>
    <input type="radio" name="Q64" value="4">
    Too little speech to tell
  </ul>
<div class="sep"></div>
  65. How did child refer to himself on first learning to talk?
  <ul>
    <input type="radio" name="Q65" value="1">
    "<i>(John) fell down;"</i> or <i>"Baby (or Boy) fall down."</i>
    <br>
    <input type="radio" name="Q65" value="1">
    2. <i>"Me fall down;"</i> or <i>"I fall down."</i>
    <br>
    <input type="radio" name="Q65" value="2">
    3. <i>"(He; Him; She; or Her) fall down"</i>
    <br>
    <input type="radio" name="Q65" value="3">
    4. <i>"You fall down"</i>
    <br>
    <input type="radio" name="Q65" value="4">
    5. Any combination of 1; 2; and/or 3
    <br>
    <input type="radio" name="Q65" value="5">
    6. Combination of 1 and 4
    <br>
    <input type="radio" name="Q65" value="6">
    7. No speech or too little speech as yet
  </ul>
<div class="sep"></div>
  66. (Age 3-5) Does child repeat phrases or sentences that he has heard in the past, what is said having little or no relation to the situation?
  <ul>
    <input type="radio" name="Q66" value="1">
    Yes, definitely, except voice not hollow or parrot-like
    <br>
    <input type="radio" name="Q66" value="2">
    Yes, definitely, including peculiar voice tone
    <br>
    <input type="radio" name="Q66" value="3">
    Not sure
    <br>
    <input type="radio" name="Q66" value="4">
    No
    <br>
    <input type="radio" name="Q66" value="5">
    Too little speech to tell
  </ul>
<div class="sep"></div>
  67. (Before age 5) Can the child answer a simple question like "What is your first name?" "Why did Mommy spank Billy?"
  <ul>
    <input type="radio" name="Q67" value="1">
    Yes, can answer such questions adequately
    <br>
    <input type="radio" name="Q67" value="2">
    No, uses speech, but can't answer questions
    <br>
    <input type="radio" name="Q67" value="3">
    Too little speech to tell
  </ul>
<div class="sep"></div>
  68. (Before age 5) Can the child understand what you say to him, judging from his ability to follow instructions or answer you?
  <ul>
    <input type="radio" name="Q68" value="1">
    Yes, understands very well
    <br>
    <input type="radio" name="Q68" value="2">
    Yes, understands fairly well
    <br>
    <input type="radio" name="Q68" value="3">
    Understands a little, if you repeat and repeat
    <br>
    <input type="radio" name="Q68" value="4">
    Very little or no understanding
  </ul>
<div class="sep"></div>
  69. (Before age 5) If the child talks; do you feel he understands what he is saying?
  <ul>
    <input type="radio" name="Q69" value="1">
    Doesn't talk enough to tell
    <br>
    <input type="radio" name="Q69" value="2">
    No, he is just repeating what he has heard with hardly any understanding
    <br>
    <input type="radio" name="Q69" value="3">
    Not just repeating-- he understands what he is saying; but not well
    <br>
    <input type="radio" name="Q69" value="4">
    No doubt that he understands what he is saying
  </ul>
<div class="sep"></div>
  70. (Before age 5) Has the child used the word "Yes"?
  <ul>
    <input type="radio" name="Q70" value="1">
    Has used "Yes" fairly often and correctly
    <br>
    <input type="radio" name="Q70" value="2">
    Seldom has used "Yes," but has used it
    <br>
    <input type="radio" name="Q70" value="3">
    Has used sentences, but hasn't used word "Yes"
    <br>
    <input type="radio" name="Q70" value="4">
    Has used a number of other words or phrases, but hasn't used word "Yes"
    <br>
    <input type="radio" name="Q70" value="5">
    Has no speech, or too little speech to tell
  </ul>
<div class="sep"></div>
  71. (Age 3-5) Does the child typically say "Yes" by repeating the same question he has been asked?  (Example: You ask "Shall we go for a walk, Honey?" and he indicates he does want to by saying "Shall we go for a walk, Honey?" or "Shall we go for a walk?)
  <ul>
    <input type="radio" name="Q71" value="1">
    Yes, definitely, does not say "yes" directly
    <br>
    <input type="radio" name="Q71" value="2">
    No, would say "Yes" or "OK" or similar answer
    <br>
    <input type="radio" name="Q71" value="3">
    Not sure
    <br>
    <input type="radio" name="Q71" value="4">
    Too little speech to say
  </ul>
<div class="sep"></div>
  72. (Before age 5) Has the child asked for something by using the same sentence you would use when you offer it to him? (Example: The child wants milk, so he says: "Do you want some milk?" or "You want some milk")
  <ul>
    <input type="radio" name="Q72" value="1">
    Yes, definitely (uses "You" instead of "I")
    <br>
    <input type="radio" name="Q72" value="2">
    No, would ask differently
    <br>
    <input type="radio" name="Q72" value="3">
    Not sure
    <br>
    <input type="radio" name="Q72" value="4">
    Not enough speech to tell
  </ul>
<div class="sep"></div>
  73. (Before age 5) Has the child used the word "I"?
  <ul>
    <input type="radio" name="Q73" value="1">
    Has used "I" fairly often and correctly
    <br>
    <input type="radio" name="Q73" value="2">
    Seldom has used "I", but has used it correctly<br>
    <input type="radio" name="Q73" value="3">
    Has used sentences, but hasn't used the word "I"
    <br>
    <input type="radio" name="Q73" value="4">
    Has used a number of words or phrases, but hasn't used the word "I"<br>
<input type="radio" name="Q73" value="5">
    Has used "I", but only where word "you" belonged
    <br>
    <input type="radio" name="Q73" value="6">
    Has no speech, or too little speech to tell
  </ul>
<div class="sep"></div>
  74. (Before age 5) How does the child usually say "No" or refuse something?
  <ul>
    <input type="radio" name="Q74" value="1">
    He would just say "No"
    <br>
    <input type="radio" name="Q74" value="2">
    He would ignore you
    <br>
    <input type="radio" name="Q74" value="3">
    He would grunt and wave his arms
    <br>
    <input type="radio" name="Q74" value="4">
    He would use some rigid meaningful phrase
    <br>
    <input type="radio" name="Q74" value="5">
    Would use phrase having only private meaning like "Daddy go in car"
    <br>
    <input type="radio" name="Q74" value="6">
    Other, or too little speech to tell
  </ul>
<div class="sep"></div>
  75. (Before age 5) Has the child used one word or idea as a substitute for another; for a prolonged period of time?  (Example: always says "catsup" to mean "red," or uses "penny" for "drawer" after seeing pennies in a desk drawer)
  <ul>
    <input type="radio" name="Q75" value="1">
    Yes, definitely
    <br>
    <input type="radio" name="Q75" value="2">
    No
    <br>
    <input type="radio" name="Q75" value="3">
    Not sure
    <br>
    <input type="radio" name="Q75" value="4">
    Too little speech to tell
  </ul>
<div class="sep"></div>
  76. Knowing what you do now, at what age do you think you could have first detected the child's abnormal behavior?  That is, when did detectable abnormal behavior actually begin?  (Under "A," indicate when you <i>might</i> have; under "B" when you <i>did.</i>
  <table>
    <tr>
      <td align="center">Might have noticed
      <td>
      <td align="center">Actually did notice 
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q76a" value="1">
      <td align="center">In first 3 months
      <td align="center"><input type="radio" name="Q76b" value="1">
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q76a" value="2">
      <td align="center">In first 3 months
      <td align="center"><input type="radio" name="Q76b" value="2">
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q76a" value="3">
      <td align="center">4-6 months
      <td align="center"><input type="radio" name="Q76b" value="3">
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q76a" value="4">
      <td align="center">7-12 months
      <td align="center"><input type="radio" name="Q76b" value="4">
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q76a" value="5" />            
      <td align="center"> 13-24 months            
      <td align="center"><input type="radio" name="Q76b" value="5" />            
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q76a" value="6">
      <td align="center">2 years-3 years
      <td align="center"><input type="radio" name="Q76b" value="6">
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q76a" value="7">
      <td align="center">3 years-4 years
      <td align="center"><input type="radio" name="Q76b" value="7">
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q76a" value="8">
      <td align="center">After 4th year
      <td align="center"><input type="radio" name="Q76b" value="8">
    </tr>
  </table>
  <br>
  <div class="sep"></div>
  Parents' highest educational level
  <table>
    <tr>
      <td align="center">Father
      <td align="center">Mother
      <td>
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q77" value="1">
      <td align="center"><input type="radio" name="Q78" value="1">
      <td>1. Did not graduate high school 
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q77" value="2">
      <td align="center"><input type="radio" name="Q78" value="2">
      <td>2. High school graduate 
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q77" value="3">
      <td align="center"><input type="radio" name="Q78" value="3">
      <td>3. Past high school tech. training 
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q77" value="4">
      <td align="center"><input type="radio" name="Q78" value="4">
      <td>4. Some college 
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q77" value="5">
      <td align="center"><input type="radio" name="Q78" value="5">
      <td>5. College graduate 
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q77" value="6">
      <td align="center"><input type="radio" name="Q78" value="6">
      <td>6. Some graduate work 
    </tr>
    <tr>
      <td align="center"><input type="radio" name="Q77" value="7">
      <td align="center"><input type="radio" name="Q78" value="7">
      <td>7. Graduate degree 
    </tr>
  </table>
  <br>
  <div class="sep"></div>
  79. Indicate the child's nearest blood relatives, including parents, who have been in a mental hospital or who were know to have been seriously mentally ill or retarded.  Consider <i>parents, siblings, grandparents, uncles and aunts.</i> <br>
  <br>
  If none, check here
  <input name="Relationshipnone" type="checkbox" value="none">
  <br>
  <div class="sep"></div>
  <table>
    <tr>
      <td><b>Relationship</b>
      <td><b>Diagnosis (if known)</b>
      <td>
    </tr>
    <tr>
      <td>1.
        <input type="text" name="Relationship1a" size="10">
      <td>Schizophrenia
        <input type="text" name="Relationship1b" size="10">
      <td>Depressive
        <input type="text" name="Relationship1c" size="10">
      <td>Other
        <input type="text" name="Relationship1d" size="10">
    </tr>
    <tr>
      <td>2.
        <input type="text" name="Relationship2a" size="10">
      <td>Schizophrenia
        <input type="text" name="Relationship2b" size="10">
      <td>Depressive
        <input type="text" name="Relationship2c" size="10">
      <td>Other
        <input type="text" name="Relationship2d" size="10">
    </tr>
    <tr>
      <td>3.
        <input type="text" name="Relationship3a" size="10">
      <td>Schizophrenia
        <input type="text" name="Relationship3b" size="10">
      <td>Depressive
        <input type="text" name="Relationship3c" size="10">
      <td>Other
        <input type="text" name="Relationship3d" size="10">
    </tr>
    <tr>
      <td>4.
        <input type="text" name="Relationship4a" size="10">
      <td>Schizophrenia
        <input type="text" name="Relationship4b" size="10">
      <td>Depressive
        <input type="text" name="Relationship4c" size="10">
      <td>Other
        <input type="text" name="Relationship4d" size="10">
    </tr>
    <tr>
      <td>5.
        <input type="text" name="Relationship5a" size="10">
      <td>Schizophrenia
        <input type="text" name="Relationship5b" size="10">
      <td>Depressive
        <input type="text" name="Relationship5c" size="10">
      <td>Other
        <input type="text" name="Relationship5d" size="10">
    </tr>
  </table>
  <br>
  <div class="sep"></div>
  
  Please answer the following questions by indicating <b>"1" If Very True, "2" If True,</b> and <b>"3" If False</b> on the line preceding the question.  Except for the first two questions, which pertain to the child before age 2, answer "Very True" (1) or "True" (2) if the statement described the child any time before his <u>10th birthday.</u> If the statement is not particularly true of the child before age 10, answer "False" (3). <br>
  <br>
  80. Before age 2, arched back and bent head back, when held
  <ul>
    <input type="radio" name="Q80" value="1">
    Very true
    <br>
    <input type="radio" name="Q80" value="2">
    True<br>
    <input type="radio" name="Q80" value="3">
    False
  </ul>
  <div class="sep"></div>
  81. Before age 2, struggled against being held
  <ul>
    <input type="radio" name="Q81" value="1">
    Very true
    <br>
    <input type="radio" name="Q82" value="2">
    True
    <br>
    <input type="radio" name="Q83" value="3">
    False
  </ul>
  <div class="sep"></div>
  
  82. Abnormal craving for certain foods
  <ul>
    <input type="radio" name="Q82" value="1">
    Very true
    <br>
    <input type="radio" name="Q82" value="2">
    True
    <br>
    <input type="radio" name="Q82" value="3">
    False
  </ul>
  <div class="sep"></div>
  83. Eats unusually large amounts of food
  <ul>
    <input type="radio" name="Q83" value="1">
    Very true
    <br>
    <input type="radio" name="Q83" value="2">
    True
    <br>
    <input type="radio" name="Q83" value="3">
    False
  </ul>
  <div class="sep"></div>
  84. Covers ears at many sounds
  <ul>
    <input type="radio" name="Q84" value="1">
    Very true
    <br>
    <input type="radio" name="Q84" value="2">
    True
    <br>
    <input type="radio" name="Q84" value="3">
    False
  </ul>
  <div class="sep"></div>
  85. Only certain sounds seem painful to him
  <ul>
    <input type="radio" name="Q85" value="1">
    Very true
    <br>
    <input type="radio" name="Q85" value="2">
    True
    <br>
    <input type="radio" name="Q85" value="3">
    False
  </ul>
  <div class="sep"></div>
  86. Fails to blink at bright lights
  <ul>
    <input type="radio" name="Q86" value="1">
    Very true
    <br>
    <input type="radio" name="Q86" value="2">
    True
    <br>
    <input type="radio" name="Q86" value="3">
    False
  </ul>
  <div class="sep"></div>
  87. Skin color lighter or darker than others in family
  <ul>
    <input type="radio" name="Q87" value="1">
    Very true
    <br>
    <input type="radio" name="Q87" value="2">
    True
    <br>
    <input type="radio" name="Q87" value="3">
    False
  </ul>
  <div class="sep"></div>
  88. Prefers inanimate (nonliving) things
  <ul>
    <input type="radio" name="Q88" value="1">
    Very true
    <br>
    <input type="radio" name="Q88" value="2">
    True
    <br>
    <input type="radio" name="Q88" value="3">
    False
  </ul>
  <div class="sep"></div>
  89. Avoids people
  <ul>
    <input type="radio" name="Q89" value="1">
    Very true
    <br>
    <input type="radio" name="Q89" value="2">
    True
    <br>
    <input type="radio" name="Q89" value="3">
    False
  </ul>
  <div class="sep"></div>
  90. Insists onkeeping certain object with him
  <ul>
    <input type="radio" name="Q90" value="1">
    Very true
    <br>
    <input type="radio" name="Q90" value="2">
    True
    <br>
    <input type="radio" name="Q90" value="3">
    False
  </ul>
  <div class="sep"></div>
  91. Always frightened or very anxious
  <ul>
    <input type="radio" name="Q91" value="1">
    Very true
    <br>
    <input type="radio" name="Q91" value="2">
    True
    <br>
    <input type="radio" name="Q91" value="3">
    False
  </ul>
  <div class="sep"></div>
  92. Inconsolable crying
  <ul>
    <input type="radio" name="Q92" value="1">
    Very true<br>
    <input type="radio" name="Q92" value="2">
    True
    <br>
    <input type="radio" name="Q92" value="3">
    False
  </ul>
  <div class="sep"></div>
  93. Notices changes or imperfections and tries to correct them
  <ul>
    <input type="radio" name="Q93" value="1">
    Very true<br>
    <input type="radio" name="Q93" value="2">
    True<br>
    <input type="radio" name="Q93" value="3">
    False
  </ul>
  <div class="sep"></div>
  94. Tidy (neat; avoids messy things)
  <ul>
    <input type="radio" name="Q94" value="1">
    Very true<br>
    <input type="radio" name="Q94" value="2">
    True<br>
    <input type="radio" name="Q94" value="3">
    False
  </ul>
  <div class="sep"></div>
  95. Has collected a particular thing
  <ul>
    <input type="radio" name="Q95" value="1">
    Very true<br>
    <input type="radio" name="Q95" value="2">
    True<br>
    <input type="radio" name="Q95" value="3">
    False
  </ul>
  <div class="sep"></div>
  96. After delay, repeat <u>phrases</u> he has heard
  <ul>
    <input type="radio" name="Q96" value="1">
    Very true<br>
    <input type="radio" name="Q96" value="2">
    True<br>
    <input type="radio" name="Q96" value="3">
    False
  </ul>
  <div class="sep"></div>
  97. After delay, repeats <u>whole sentences</u> he has heard
  <ul>
    <input type="radio" name="Q97" value="1">
    Very true<br>
    <input type="radio" name="Q97" value="2">
    True<br>
    <input type="radio" name="Q97" value="3">
    False
  </ul>
  <div class="sep"></div>
  98. Repeats <u>questions</u> or <u>conversations</u> he has heard, over and over, without variation
  <ul>
    <input type="radio" name="Q98" value="1">
    Very true<br>
    <input type="radio" name="Q98" value="2">
    True<br>
    <input type="radio" name="Q98" value="3">
    False
  </ul>
  <div class="sep"></div>
  99. Gets "hooked" or fixated on one topic
  <ul>
    <input type="radio" name="Q99" value="1">
    Very true<br>
    <input type="radio" name="Q99" value="2">
    True<br>
    <input type="radio" name="Q99" value="3">
    False
  </ul>
  <div class="sep"></div>
  100. Examines surfaces with fingers
  <ul>
    <input type="radio" name="Q100" value="1">
    Very true<br>
    <input type="radio" name="Q100" value="2">
    True<br>
    <input type="radio" name="Q100" value="3">
    False
  </ul>
  <div class="sep"></div>
  101. Holds bizarre pose or posture
  <ul>
    <input type="radio" name="Q101" value="1">
    Very true<br>
    <input type="radio" name="Q101" value="2">
    True<br>
    <input type="radio" name="Q101" value="3">
    False
  </ul>
  <div class="sep"></div>
  102. Chews or swallows nonfood objects
  <ul>
    <input type="radio" name="Q102" value="1">
    Very true<br>
    <input type="radio" name="Q102" value="2">
    True<br>
    <input type="radio" name="Q102" value="3">
    False
  </ul>
  <div class="sep"></div>
  103. Dislikes being touched or held
  <ul>
    <input type="radio" name="Q103" value="1">
    Very true<br>
    <input type="radio" name="Q103" value="2">
    True<br>
    <input type="radio" name="Q103" value="3">
    False
  </ul>
  <div class="sep"></div>
  104. Intensely aware of odors
  <ul>
    <input type="radio" name="Q104" value="1">
    Very true<br>
    <input type="radio" name="Q104" value="2">
    True<br>
    <input type="radio" name="Q104" value="3">
    False
  </ul>
  <div class="sep"></div>
  105. Hides skill or knowledge, so you are surprised later on
  <ul>
    <input type="radio" name="Q105" value="1">
    Very true<br>
    <input type="radio" name="Q105" value="2">
    True<br>
    <input type="radio" name="Q105" value="3">
    False
  </ul>
  <div class="sep"></div>
  106. Seems not to feel pain
  <ul>
    <input type="radio" name="Q106" value="1">
    Very true<br>
    <input type="radio" name="Q106" value="2">
    True<br>
    <input type="radio" name="Q106" value="3">
    False
  </ul>
  <div class="sep"></div>
  107. Terrified at unusual happenings
  <ul>
    <input type="radio" name="Q107" value="1">
    Very true<br>
    <input type="radio" name="Q107" value="2">
    True<br>
    <input type="radio" name="Q107" value="3">
    False
  </ul>
  <div class="sep"></div>
  108. Learned words useless to himself
  <ul>
    <input type="radio" name="Q108" value="1">
    Very true<br>
    <input type="radio" name="Q108" value="2">
    True<br>
    <input type="radio" name="Q108" value="3">
    False
  </ul>
  <div class="sep"></div>
  109. Learned certain words, then stopped using them
  <ul>
    <input type="radio" name="Q109" value="1">
    Very true<br>
    <input type="radio" name="Q109" value="2">
    True<br>
    <input type="radio" name="Q109" value="3">
    False
  </ul>
  <input name="" type="submit">
</form>  
          
          
        </div>
        <!-- close: page_content -->
      </div>
      <!-- close: page_content -->
      <span class="cleft"></span> </div>
    <!-- close: body_content -->
  </div>
  <!-- close: content -->
  <!--#include virtual="/inc/footer.asp" -->
  <!-- close: footer -->
</div>
<!-- close: kontainer -->
<!--#include virtual="/inc/bodybeforeclose.asp" -->
</body>
</html>
<!--#include virtual="/inc/closeConn.asp" -->
