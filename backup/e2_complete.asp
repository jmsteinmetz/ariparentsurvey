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
    
    <p>Thank you for information, your scores are below:</p>    
	<%
	response.write "ID: " & request.QueryString("ID") & "<br>"
	response.write "Behavior Score: " & request.QueryString("BS") & "<br>"
	response.write "Speech Score: " & request.QueryString("SS") & "<br>"
	response.write "Total Score: " & request.QueryString("TS") & "<br>"
	response.write "Mutism Score: " & request.QueryString("MS") & "<br>"
	%>          
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
