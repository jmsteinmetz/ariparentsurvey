<%
	Set gobjConnection = Server.CreateObject("ADODB.Connection")
	gsConnect = "driver={MySQL ODBC 5.1 Driver}; database=slingsurvey;server=localhost;uid=root;pwd=2100hbo7;port=3306;Option=16384;"
	gobjConnection.Open gsConnect
%>
<%
	'Each page must have a key string referenced or page will log out.
	KeyID = request.querystring("KeyID")
	KeyID = "1"

	field1 = replace(request.form("field1"), "'", "''")
	field2 = replace(request.form("field2"), "'", "''")
	field3 = replace(request.form("field3"), "'", "''")
	field4 = replace(request.form("field4"), "'", "''")
	field5 = replace(request.form("field5"), "'", "''")
	field6 = replace(request.form("field6"), "'", "''")
		field7a = replace(request.form("field7a"), "'", "''")
		field7b = replace(request.form("field7b"), "'", "''")
		field7c = replace(request.form("field7c"), "'", "''")
		field7d = replace(request.form("field7d"), "'", "''")
		field7e = replace(request.form("field7e"), "'", "''")
		field7f = replace(request.form("field7f"), "'", "''")		
	field8 = replace(request.form("field8"), "'", "''")
	field9 = replace(request.form("field9"), "'", "''")
	field10 = replace(request.form("field10"), "'", "''")
	field11 = replace(request.form("field11"), "'", "''")
	field12 = replace(request.form("field12"), "'", "''")
	field13 = replace(request.form("field13"), "'", "''")
		field14a = replace(request.form("field14a"), "'", "''")
		field14b = replace(request.form("field14b"), "'", "''")
		field14c = replace(request.form("field14c"), "'", "''")
		field14d = replace(request.form("field14d"), "'", "''")
		field14e = replace(request.form("field14e"), "'", "''")
		field14f = replace(request.form("field14f"), "'", "''")
		field14g = replace(request.form("field14g"), "'", "''")
		field14h = replace(request.form("field14h"), "'", "''")
		field14i = replace(request.form("field14i"), "'", "''")
		field14j = replace(request.form("field14j"), "'", "''")
		field14k = replace(request.form("field14k"), "'", "''")
	field15 = replace(request.form("field15"), "'", "''")
		field16a = replace(request.form("field16a"), "'", "''")
		field16b = replace(request.form("field16b"), "'", "''")
		field16c = replace(request.form("field16c"), "'", "''")
		field16d = replace(request.form("field16d"), "'", "''")
		field16e = replace(request.form("field16e"), "'", "''")
		field16f = replace(request.form("field16f"), "'", "''")
		field16g = replace(request.form("field16g"), "'", "''")
		field16h = replace(request.form("field16h"), "'", "''")
		field16i = replace(request.form("field16i"), "'", "''")
		field16j = replace(request.form("field16j"), "'", "''")
		field16k = replace(request.form("field16k"), "'", "''")
		field16l = replace(request.form("field16l"), "'", "''")
		field16m = replace(request.form("field16m"), "'", "''")
		field16n = replace(request.form("field16n"), "'", "''")
		field16o = replace(request.form("field16o"), "'", "''")
		field16p = replace(request.form("field16p"), "'", "''")
		field16q = replace(request.form("field16q"), "'", "''")
		field16r = replace(request.form("field16r"), "'", "''")
		field16s = replace(request.form("field16s"), "'", "''")
		field16t = replace(request.form("field16t"), "'", "''")
		field16u = replace(request.form("field16u"), "'", "''")
		field16v = replace(request.form("field16v"), "'", "''")
		field16w = replace(request.form("field16w"), "'", "''")
		field16x = replace(request.form("field16x"), "'", "''")
		field16y = replace(request.form("field16y"), "'", "''")
	field17 = replace(request.form("field17"), "'", "''")
	field18 = replace(request.form("field18"), "'", "''")
	field19 = replace(request.form("field19"), "'", "''")
	
	
	'for i = 1 to 140
	'response.write """, Question" & i & "='"" & field" & i & " & ""'"" &_<br>"
	'next
	
	SQL = "UPDATE tblsurveyanswers SET" &_ 
	"  Question141='" & field1 & "'" &_
	", Question142='" & field2 & "'" &_
	", Question143='" & field3 & "'" &_
	", Question144='" & field4 & "'" &_
	", Question145='" & field5 & "'" &_
	", Question146='" & field6 & "'" &_
		", Question147a='" & field7a & "'" &_
		", Question147b='" & field7b & "'" &_
		", Question147c='" & field7c & "'" &_
		", Question147d='" & field7d & "'" &_
		", Question147e='" & field7e & "'" &_
		", Question147f='" & field7f & "'" &_
	", Question148='" & field8 & "'" &_ 
	", Question149='" & field9 & "'" &_ 
	", Question150='" & field10 & "'" &_ 
	", Question151='" & field11 & "'" &_ 
	", Question152='" & field12 & "'" &_ 
	", Question153='" & field13 & "'" &_ 
		", Question154a='" & field14a & "'" &_
		", Question154b='" & field14b & "'" &_
		", Question154c='" & field14c & "'" &_
		", Question154d='" & field14d & "'" &_
		", Question154e='" & field14e & "'" &_
		", Question154f='" & field14f & "'" &_
		", Question154g='" & field14g & "'" &_
		", Question154h='" & field14h & "'" &_
		", Question154i='" & field14i & "'" &_
		", Question154j='" & field14j & "'" &_
		", Question154k='" & field14k & "'" &_
	", Question155='" & field15 & "'" &_
		", Question156a='" & field16a & "'" &_
		", Question156b='" & field16b & "'" &_
		", Question156c='" & field16c & "'" &_
		", Question156d='" & field16d & "'" &_
		", Question156e='" & field16e & "'" &_
		", Question156f='" & field16f & "'" &_
		", Question156g='" & field16g & "'" &_
		", Question156h='" & field16h & "'" &_
		", Question156i='" & field16i & "'" &_
		", Question156j='" & field16j & "'" &_
		", Question156k='" & field16k & "'" &_
		", Question156l='" & field16l & "'" &_
		", Question156m='" & field16m & "'" &_
		", Question156n='" & field16n & "'" &_
		", Question156o='" & field16o & "'" &_
		", Question156p='" & field16p & "'" &_
		", Question156q='" & field16q & "'" &_
		", Question156r='" & field16r & "'" &_
		", Question156s='" & field16s & "'" &_
		", Question156t='" & field16t & "'" &_
		", Question156u='" & field16u & "'" &_
		", Question156v='" & field16v & "'" &_
		", Question156w='" & field16w & "'" &_
		", Question156x='" & field16x & "'" &_
		", Question156y='" & field16y & "'" &_
	", Question157='" & field17 & "'" &_
	", Question158='" & field18 & "'" &_
	", Question159='" & field19 & "'" &_	
	" WHERE UserID=" & KeyID
	rs = gobjConnection.Execute(SQL)
	
	response.write SQL
	'response.redirect("step4.html?KeyID=" & KeyID)

%>