<%
	Set gobjConnection = Server.CreateObject("ADODB.Connection")
	gsConnect = "driver={MySQL ODBC 5.1 Driver}; database=slingsurvey2;server=localhost;uid=root;pwd=2100hbo7;port=3306;Option=16384;"
	gobjConnection.Open gsConnect
%>
<%
	'Each page must have a key string referenced or page will log out.
	KeyID = request.querystring("KeyID")
	
	if KeyID = "" then
		response.redirect("/survey/index.html?s=1")
	end if
	
	fielda = replace(request.form("fielda"), "'", "''")
	fieldb = replace(request.form("fieldb"), "'", "''")
	fieldc = replace(request.form("fieldc"), "'", "''")
	fieldd = replace(request.form("fieldd"), "'", "''")
	fielde = replace(request.form("fielde"), "'", "''")
	fieldf = replace(request.form("fieldf"), "'", "''")
	fieldf1 = replace(request.form("fieldf1"), "'", "''")
	fieldg = replace(request.form("fieldg"), "'", "''")
	fieldh = replace(request.form("fieldh"), "'", "''")
	fieldi = replace(request.form("fieldi"), "'", "''")
	fieldj = replace(request.form("fieldj"), "'", "''")
	fieldk = replace(request.form("fieldk"), "'", "''")
	fieldl = replace(request.form("fieldl"), "'", "''")
	fieldn = replace(request.form("fieldm"), "'", "''")
	fieldm = replace(request.form("fieldn"), "'", "''")
	fieldo = replace(request.form("fieldo"), "'", "''")
	fieldp = replace(request.form("fieldp"), "'", "''")
	fieldq = replace(request.form("fieldq"), "'", "''")	
	fieldq1 = replace(request.form("fieldq1"), "'", "''")	
	fieldr = replace(request.form("fieldr"), "'", "''")
	fieldt = replace(request.form("fieldt"), "'", "''")
	fieldu = replace(request.form("fieldu"), "'", "''")

		field1a = replace(request.form("field1a"), "'", "''")
		field1b = replace(request.form("field1b"), "'", "''")
		field2a = replace(request.form("field2a"), "'", "''")
		field3a = replace(request.form("field3a"), "'", "''")
		field3a1 = replace(request.form("field3a1"), "'", "''")
		field3b1 = replace(request.form("field3b1"), "'", "''")
		field3c1 = replace(request.form("field3c1"), "'", "''")
		field3d2 = replace(request.form("field3d2"), "'", "''")
		field4a = replace(request.form("field4a"), "'", "''")
		field5a = replace(request.form("field5a"), "'", "''")
		field3b1 = replace(request.form("field3b1"), "'", "''")
		field5a1 = replace(request.form("field5a1"), "'", "''")	
		field5a2 = replace(request.form("field5a2"), "'", "''")
		field6a = replace(request.form("field6a"), "'", "''")
		field7a = replace(request.form("field7a"), "'", "''")
		field8a = replace(request.form("field8a"), "'", "''")
		field8a1 = replace(request.form("field8a1"), "'", "''")
		field8a2 = replace(request.form("field8a2"), "'", "''")
		field8a3 = replace(request.form("field8a3"), "'", "''")
		field8a4 = replace(request.form("field8a4"), "'", "''")
		field8a5 = replace(request.form("field8a5"), "'", "''")
		field8a6 = replace(request.form("field8a6"), "'", "''")
		field8a7 = replace(request.form("field8a7"), "'", "''")
		field8a8 = replace(request.form("field8a8"), "'", "''")
		field8b1 = replace(request.form("field8b1"), "'", "''")
		field9a = replace(request.form("field9a"), "'", "''")
		field9b1 = replace(request.form("field9b1"), "'", "''")
		field9b2 = replace(request.form("field9b2"), "'", "''")
		field9c = replace(request.form("field9c"), "'", "''")
		field9c1 = replace(request.form("field9c1"), "'", "''")
		field9c2 = replace(request.form("field9c2"), "'", "''")
		field9c3 = replace(request.form("field9c3"), "'", "''")
		field9c4 = replace(request.form("field9c4"), "'", "''")
		field9d1 = replace(request.form("field9d1"), "'", "''")
		field9d2 = replace(request.form("field9d2"), "'", "''")
		field9d3 = replace(request.form("field9d3"), "'", "''")
		field9d4 = replace(request.form("field9d4"), "'", "''")
		field9e1 = replace(request.form("field9e1"), "'", "''")
		field9e2 = replace(request.form("field9e2"), "'", "''")
		field9e3 = replace(request.form("field9e3"), "'", "''")
		field9f = replace(request.form("field9f"), "'", "''")
		field9f1 = replace(request.form("field9f1"), "'", "''")
		field9f2 = replace(request.form("field9f2"), "'", "''")
		field9f3 = replace(request.form("field9f3"), "'", "''")
		field9f4 = replace(request.form("field9f4"), "'", "''")

	
	SQL = "UPDATE tblanswersa SET" &_ 
	"  Question1='" & fielda & "'" &_
	", Question2='" & fieldb & "'" &_
	", Question3='" & fieldc & "'" &_
	", Question4='" & fieldd & "'" &_
	", Question5='" & fielde & "'" &_
	", Question6='" & fieldf & "'" &_
	", Question7='" & fieldf1 & "'" &_
	", Question8='" & fieldg & "'" &_
	", Question9='" & fieldh & "'" &_
	", Question10='" & fieldi & "'" &_
	", Question11='" & fieldj & "'" &_
	", Question12='" & fieldk & "'" &_
	", Question13='" & fieldl & "'" &_
	", Question14='" & fieldm & "'" &_
	", Question15='" & fieldn & "'" &_
	", Question16='" & fieldo & "'" &_
	", Question17='" & fieldp & "'" &_
	", Question18='" & fieldq & "'" &_
	", Question19='" & fieldq1 & "'" &_
	", Question20='" & fieldr & "'" &_
	", Question21='" & fieldt & "'" &_
	", Question22='" & fieldu & "'" &_
		", Question23='" & field1a & "'" &_
		", Question24='" & field1b & "'" &_
		", Question25='" & field2a & "'" &_
		", Question26='" & field3a & "'" &_
		", Question27='" & field3a1 & "'" &_
		", Question28='" & field3b1 & "'" &_
		", Question29='" & field3c1 & "'" &_
		", Question30='" & field3d2 & "'" &_
	", Question31='" & field4a & "'" &_
		", Question32='" & field5a & "'" &_
		", Question33='" & field5a1 & "'" &_
		", Question34='" & field5a2 & "'" &_
		", Question35='" & field5b1 & "'" &_
	", Question36='" & field6a & "'" &_
		", Question37='" & field7a & "'" &_
	", Question38='" & field8a & "'" &_
	", Question39='" & field8a1 & "'" &_
	", Question40='" & field8a2 & "'" &_
	", Question41='" & field8a3 & "'" &_
	", Question42='" & field8a4 & "'" &_
	", Question43='" & field8a5 & "'" &_
	", Question44='" & field8a6 & "'" &_
	", Question45='" & field8a7 & "'" &_
	", Question46='" & field8a8 & "'" &_
	", Question47='" & field8b1 & "'" &_
		", Question48='" & field9a & "'" &_
		", Question49='" & field9b1 & "'" &_
		", Question50='" & field9b2 & "'" &_
		", Question51='" & field9c & "'" &_
		", Question52='" & field9c1 & "'" &_
		", Question53='" & field9c2 & "'" &_
		", Question54='" & field9c3 & "'" &_
		", Question55='" & field9c4 & "'" &_
		", Question56='" & field9d1 & "'" &_
		", Question57='" & field9d2 & "'" &_
		", Question58='" & field9d3 & "'" &_
		", Question59='" & field9d4 & "'" &_
		", Question60='" & field9e1 & "'" &_
		", Question61='" & field9e2 & "'" &_
		", Question62='" & field9e3 & "'" &_
		", Question63='" & field9f & "'" &_
		", Question64='" & field9f1 & "'" &_
		", Question65='" & field9f2 & "'" &_
		", Question66='" & field9f3 & "'" &_
		", Question67='" & field9f4 & "'" &_
	
 	" WHERE KeyID='" & KeyID & "'"
	rs = gobjConnection.Execute(SQL)
	
	response.redirect("step3.html?KeyID=" & KeyID)

%>