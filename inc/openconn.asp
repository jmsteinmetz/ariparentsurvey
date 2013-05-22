<%
	'Install specific items 
	odbcdriver = "MySQL Connector/ODBC v5"
	getserver = "localhost"
	getuserid = "root"
	getpassword = "2100hbo7"
	admDatabase = "slingsurvey"

	'Open database connection to server
	Set gobjConnection = Server.CreateObject("ADODB.Connection")
	gsConnect = "driver={" & odbcdriver & "}; database=" & admDatabase & ";server=" & getserver & ";uid=" & getuserid & ";pwd=" & getpassword & ";port=3307;Option=16384"
	gobjConnection.Open gsConnect
	
	'Each page must have a key string referenced or page will log out.
	KeyID = request.querystring("KeyID")

%>