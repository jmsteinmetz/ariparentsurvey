<%
	Set gobjConnection = Server.CreateObject("ADODB.Connection")
	gsConnect = "driver={MySQL ODBC 5.1 Driver}; database=slingsurvey;server=localhost;uid=root;pwd=2100hbo7;port=3306;Option=16384;"
	gobjConnection.Open gsConnect
%>
<%
	'Each page must have a key string referenced or page will log out.
	KeyID = request.querystring("KeyID")

	field1 = replace(request.form("field1"), "'", "")
	field2 = replace(request.form("field2"), "'", "")
	field3 = replace(request.form("field3"), "'", "")
	field4 = replace(request.form("field4"), "'", "")
	field5 = replace(request.form("field5"), "'", "")
	field6 = replace(request.form("field6"), "'", "")
	field7 = replace(request.form("field7"), "'", "")
	field8 = replace(request.form("field8"), "'", "")
	field9 = replace(request.form("field9"), "'", "")
	
	
	'for i = 1 to 140
	'response.write """, Question" & i & "='"" & field" & i & " & ""'"" &_<br>"
	'next
	
	SQL = "UPDATE tblsurveyanswers SET" &_ 
	"  Question161='" & field1 & "'" &_
	", Question162='" & field2 & "'" &_
	", Question163='" & field3 & "'" &_
	", Question164='" & field4 & "'" &_
	", Question165='" & field5 & "'" &_
	", Question166='" & field6 & "'" &_
	", Question167='" & field7 & "'" &_
	", Question168='" & field8 & "'" &_
	", Question169='" & field9 & "'" &_
	" WHERE UserID=" & KeyID
	rs = gobjConnection.Execute(SQL)
	
	response.write SQL
	
	'response.redirect("step5.html?KeyID=" & KeyID)

%>