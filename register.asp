<% 
    set typ = CreateObject("Scriptlet.TypeLib") 
    guidStr = cstr(typ.GUID) 
	
	guidStr = Replace(guidStr, "{", "")
	guidStr = Replace(guidStr, "}", "")
	guidStr =  LEFT(guidStr, 23)
    guidStr =  Server.HTMLEncode(guidStr) 
    set typ = nothing 	
%>
<%
	Set gobjConnection = Server.CreateObject("ADODB.Connection")
	gsConnect = "driver={MySQL ODBC 5.1 Driver}; database=slingsurvey2;server=localhost;uid=root;pwd=2100hbo7;port=3306;Option=16384;"
	gobjConnection.Open gsConnect
%>
<%
xEmail = request.form("xEmail")
xPassword = request.form("xPassword")
xName = request.form("xName")

ck = "SELECT * FROM tblusers WHERE xEmail='" & xEmail & "'"
set rsC = gobjConnection.Execute(ck)

if rsC.eof then

SQL = "INSERT INTO tblusers SET blnActive ='1', KeyID = '" & guidStr & "', LastLoginIP = '" & request.ServerVariables("REMOTE_ADDR") & "', xName='" & xName & "', xPassword='" & xPassword & "', xEmail='" & xEmail & "'"
set rs = gobjConnection.Execute(SQL)

response.redirect("step1.php?token=" & guidStr)

else
response.redirect("index.php?email=duplicate")
end if


%>
