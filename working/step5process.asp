<%
	Set gobjConnection = Server.CreateObject("ADODB.Connection")
	gsConnect = "driver={MySQL ODBC 5.1 Driver}; database=slingsurvey;server=localhost;uid=root;pwd=2100hbo7;port=3306;Option=16384;"
	gobjConnection.Open gsConnect
%>
<%
	'Each page must have a key string referenced or page will log out.
	KeyID = request.querystring("KeyID")
	KeyID = "1"
	'on error resume next

	field10 = replace(request.form("field10"), "'", "''")
	field11 = replace(request.form("field11"), "'", "''")
		field12a = replace(request.form("field12a"), "'", "&#39;")
		field12b = replace(request.form("field12b"), "'", "&#39;")
		field12c = replace(request.form("field12c"), "'", "&#39;")
		field12d = replace(request.form("field12d"), "'", "&#39;")
		field12e = replace(request.form("field12e"), "'", "&#39;")
		field12f = replace(request.form("field12f"), "'", "&#39;")	
	field13 = replace(request.form("field13"), "'", "''")
		field14a = replace(request.form("field14a"), "'", "''")
		field14b = replace(request.form("field14b"), "'", "''")
		field14c = replace(request.form("field14c"), "'", "''")
		field14d = replace(request.form("field14d"), "'", "''")
	field15 = replace(request.form("field15"), "'", "''")
	field16 = replace(request.form("field16"), "'", "''")
	field17 = replace(request.form("field17"), "'", "''")
	field18 = replace(request.form("field18"), "'", "''")
	field19 = replace(request.form("field19"), "'", "''")
	field20 = replace(request.form("field20"), "'", "''")
	field21 = replace(request.form("field21"), "'", "''")
	field22 = replace(request.form("field22"), "'", "''")
	field23 = replace(request.form("field23"), "'", "''")
	field24 = replace(request.form("field24"), "'", "''")
	field25 = replace(request.form("field25"), "'", "''")
	field26 = replace(request.form("field26"), "'", "''")
	field27 = replace(request.form("field27"), "'", "''")
	field28 = replace(request.form("field28"), "'", "''")
		field29a = replace(request.form("field29a"), "'", "''")
		field29b = replace(request.form("field29b"), "'", "''")
		field29c = replace(request.form("field29c"), "'", "''")
		field29d = replace(request.form("field29d"), "'", "''")
		field29e = replace(request.form("field29e"), "'", "''")		
	field30 = replace(request.form("field30"), "'", "''")
	field31 = replace(request.form("field31"), "'", "''")
	field32 = replace(request.form("field32"), "'", "''")
	field33 = replace(request.form("field33"), "'", "''")
	field34 = replace(request.form("field34"), "'", "''")
	field35 = replace(request.form("field35"), "'", "''")
	field36 = replace(request.form("field36"), "'", "''")
	field37 = replace(request.form("field37"), "'", "''")
	field38 = replace(request.form("field38"), "'", "''")
	field39 = replace(request.form("field39"), "'", "''")
		field40a = replace(request.form("field40a"), "'", "''")
		field40b = replace(request.form("field40b"), "'", "''")
		field40c = replace(request.form("field40c"), "'", "''")
		field40d = replace(request.form("field40d"), "'", "''")
		field40e = replace(request.form("field40e"), "'", "''")
		field40f = replace(request.form("field40f"), "'", "''")
		field40g = replace(request.form("field40g"), "'", "''")
		field40h = replace(request.form("field40h"), "'", "''")
		field40i = replace(request.form("field40i"), "'", "''")
		field40j = replace(request.form("field40j"), "'", "''")
		field40k = replace(request.form("field40k"), "'", "''")
		field40l = replace(request.form("field40l"), "'", "''")
	field41 = replace(request.form("field41"), "'", "''")
		field42a = replace(request.form("field42a"), "'", "''")
		field42b = replace(request.form("field42b"), "'", "''")
		field42c = replace(request.form("field42c"), "'", "''")
		field42d = replace(request.form("field42d"), "'", "''")
	field43 = replace(request.form("field43"), "'", "''")
	field44 = replace(request.form("field44"), "'", "''")
	field45 = replace(request.form("field45"), "'", "''")
	field46 = replace(request.form("field46"), "'", "''")
	field47 = replace(request.form("field47"), "'", "''")
	field48 = replace(request.form("field48"), "'", "''")
		field49a = replace(request.form("field49a"), "'", "''")
		field49b = replace(request.form("field49b"), "'", "''")
		field49c = replace(request.form("field49c"), "'", "''")
		field49d = replace(request.form("field49d"), "'", "''")
		field49e = replace(request.form("field49e"), "'", "''")
		field49f = replace(request.form("field49f"), "'", "''")
		field49g = replace(request.form("field49g"), "'", "''")
		field49h = replace(request.form("field49h"), "'", "''")
		field49i = replace(request.form("field49i"), "'", "''")
	field50 = replace(request.form("field50"), "'", "''")
	field51 = replace(request.form("field51"), "'", "''")
	field52 = replace(request.form("field52"), "'", "''")
		field53a = replace(request.form("field53a"), "'", "''")
		field53b = replace(request.form("field53b"), "'", "''")
		field53c = replace(request.form("field53c"), "'", "''")
		field53d = replace(request.form("field53d"), "'", "''")
	field54 = replace(request.form("field54"), "'", "''")
		field55a = replace(request.form("field55a"), "'", "''")
		field55b = replace(request.form("field55b"), "'", "''")
		field55c = replace(request.form("field55c"), "'", "''")
		field55d = replace(request.form("field55d"), "'", "''")
		
		field56a = replace(request.form("field56a"), "'", "''")
		field56b = replace(request.form("field56b"), "'", "''")
		field56c = replace(request.form("field56c"), "'", "''")
		field56d = replace(request.form("field56d"), "'", "''")
		
		field57a = replace(request.form("field57a"), "'", "''")
		field57b = replace(request.form("field57b"), "'", "''")
		field57c = replace(request.form("field57c"), "'", "''")
		field57d = replace(request.form("field57d"), "'", "''")
		
		field58a = replace(request.form("field58a"), "'", "''")
		field58b = replace(request.form("field58b"), "'", "''")
		field58c = replace(request.form("field58c"), "'", "''")	
		
		field59a = replace(request.form("field59a"), "'", "''")
		field59b = replace(request.form("field59b"), "'", "''")
		field59c = replace(request.form("field59c"), "'", "''")
		field59d = replace(request.form("field59d"), "'", "''")
		
		field60a = replace(request.form("field60a"), "'", "''")
		field60b = replace(request.form("field60b"), "'", "''")
		field60c = replace(request.form("field60c"), "'", "''")
		field60d = replace(request.form("field60d"), "'", "''")	

		field61a = replace(request.form("field61a"), "'", "''")
		field61b = replace(request.form("field61b"), "'", "''")
		field61c = replace(request.form("field61c"), "'", "''")
		
		field62a = replace(request.form("field62a"), "'", "''")
		field62b = replace(request.form("field62b"), "'", "''")
		field62c = replace(request.form("field62c"), "'", "''")	
		
		field63a = replace(request.form("field63a"), "'", "''")
		field63b = replace(request.form("field63b"), "'", "''")
		field63c = replace(request.form("field63c"), "'", "''")
		field63d = replace(request.form("field63d"), "'", "''")	

		field64a = replace(request.form("field64a"), "'", "''")
		field64b = replace(request.form("field64b"), "'", "''")
		field64c = replace(request.form("field64c"), "'", "''")
		field64d = replace(request.form("field64d"), "'", "''")	

		field65a = replace(request.form("field65a"), "'", "''")
		field65b = replace(request.form("field65b"), "'", "''")
		field65c = replace(request.form("field65c"), "'", "''")
		field65d = replace(request.form("field65d"), "'", "''")										
						
	field66 = replace(request.form("field66"), "'", "''")
	field67 = replace(request.form("field67"), "'", "''")
	field68 = replace(request.form("field68"), "'", "''")
	field69 = replace(request.form("field69"), "'", "''")
	field70 = replace(request.form("field70"), "'", "''")
	field71 = replace(request.form("field71"), "'", "''")
	field72 = replace(request.form("field72"), "'", "''")
	field73 = replace(request.form("field73"), "'", "''")
		field74a = replace(request.form("field74a"), "'", "''")
		field74b = replace(request.form("field74b"), "'", "''")
		field74c = replace(request.form("field74c"), "'", "''")
		field74d = replace(request.form("field74d"), "'", "''")	
	field75 = replace(request.form("field75"), "'", "''")

	
	'for i = 1 to 75
	'response.write """, Question" & i+169 & "='"" & field" & i & " & ""'"" &_<br>"
	'next
	
	SQL = "UPDATE tblsurveyanswers SET" &_ 
	" Question179='" & field10 & "'" &_
	", Question180='" & field11 & "'" &_
		", Question181a='" & field12a & "'" &_
		", Question181b='" & field12b & "'" &_
		", Question181c='" & field12c & "'" &_
		", Question181d='" & field12d & "'" &_
		", Question181e='" & field12e & "'" &_
		", Question181f='" & field12f & "'" &_
	", Question182='" & field13 & "'" &_
		", Question183a='" & field14a & "'" &_
		", Question183b='" & field14b & "'" &_
		", Question183c='" & field14c & "'" &_
		", Question183d='" & field14d & "'" &_
	", Question184='" & field15 & "'" &_
	", Question185='" & field16 & "'" &_
	", Question186='" & field17 & "'" &_
	", Question187='" & field18 & "'" &_
	", Question188='" & field19 & "'" &_
	", Question189='" & field20 & "'" &_
	", Question197='" & field28 & "'" &_
		", Question198a='" & field29a & "'" &_
		", Question198b='" & field29b & "'" &_
		", Question198c='" & field29c & "'" &_
		", Question198d='" & field29d & "'" &_
		", Question198e='" & field29e & "'" &_
	", Question199='" & field30 & "'" &_
	", Question200='" & field31 & "'" &_
	", Question201='" & field32 & "'" &_
	", Question202='" & field33 & "'" &_
	", Question203='" & field34 & "'" &_
	", Question204='" & field35 & "'" &_
	", Question205='" & field36 & "'" &_
	", Question206='" & field37 & "'" &_
	", Question207='" & field38 & "'" &_
	", Question208='" & field39 & "'" &_
		", Question209a='" & field40a & "'" &_
		", Question209b='" & field40b & "'" &_
		", Question209c='" & field40c & "'" &_
		", Question209d='" & field40d & "'" &_
		", Question209e='" & field40e & "'" &_
		", Question209f='" & field40f & "'" &_
		", Question209g='" & field40g & "'" &_
		", Question209h='" & field40h & "'" &_
		", Question209i='" & field40i & "'" &_
		", Question209j='" & field40j & "'" &_
		", Question209k='" & field40k & "'" &_
		", Question209l='" & field40l & "'" &_
	", Question210='" & field41 & "'" &_
		", Question211a='" & field42a & "'" &_
		", Question211b='" & field42b & "'" &_
		", Question211c='" & field42c & "'" &_
		", Question211d='" & field42d & "'" &_
	", Question212='" & field43 & "'" &_
	", Question213='" & field44 & "'" &_
	", Question214='" & field45 & "'" &_
	", Question215='" & field46 & "'" &_
	", Question216='" & field47 & "'" &_
	", Question217='" & field48 & "'" &_
		", Question218a='" & field49a & "'" &_
		", Question218b='" & field49b & "'" &_
		", Question218c='" & field49c & "'" &_
		", Question218d='" & field49d & "'" &_
		", Question218e='" & field49e & "'" &_
		", Question218f='" & field49f & "'" &_
		", Question218g='" & field49g & "'" &_
		", Question218h='" & field49h & "'" &_
		", Question218i='" & field49i & "'" &_
	", Question219='" & field50 & "'" &_
	", Question220='" & field51 & "'" &_
	", Question221='" & field52 & "'" &_
		", Question222a='" & field53a & "'" &_
		", Question222b='" & field53b & "'" &_
		", Question222c='" & field53c & "'" &_
		", Question222d='" & field53d & "'" &_
		", Question222e='" & field53e & "'" &_
	", Question223='" & field54 & "'" &_
		", Question224a='" & field55a & "'" &_
		", Question224b='" & field55b & "'" &_
		", Question224c='" & field55c & "'" &_
		", Question224d='" & field55d & "'" &_
		
		", Question225a='" & field56a & "'" &_
		", Question225b='" & field56b & "'" &_
		", Question225c='" & field56c & "'" &_
		", Question225d='" & field56d & "'" &_

		", Question226a='" & field57a & "'" &_
		", Question226b='" & field57b & "'" &_
		", Question226c='" & field57c & "'" &_
		", Question226d='" & field57d & "'" &_

		", Question227a='" & field58a & "'" &_
		", Question227b='" & field58b & "'" &_
		", Question227c='" & field58c & "'" &_	

		", Question228a='" & field59a & "'" &_
		", Question228b='" & field59b & "'" &_
		", Question228c='" & field59c & "'" &_
		", Question228d='" & field59d & "'" &_
		
		", Question229a='" & field60a & "'" &_
		", Question229b='" & field60b & "'" &_
		", Question229c='" & field60c & "'" &_
		", Question229d='" & field60d & "'" &_	
		
		", Question230a='" & field61a & "'" &_
		", Question230b='" & field61b & "'" &_
		", Question230c='" & field61c & "'" &_
		
		", Question231a='" & field62a & "'" &_
		", Question231b='" & field62b & "'" &_
		", Question231c='" & field62c & "'" &_								

		", Question232a='" & field63a & "'" &_
		", Question232b='" & field63b & "'" &_
		", Question232c='" & field63c & "'" &_
		", Question232d='" & field63d & "'" &_
		
		", Question233a='" & field64a & "'" &_
		", Question233b='" & field64b & "'" &_
		", Question233c='" & field64c & "'" &_
		", Question233d='" & field64d & "'" &_

		", Question234a='" & field65a & "'" &_
		", Question234b='" & field65b & "'" &_
		", Question234c='" & field65c & "'" &_
		", Question234d='" & field65d & "'" &_								

	", Question235='" & field66 & "'" &_
	", Question236='" & field67 & "'" &_
	", Question237='" & field68 & "'" &_
	", Question238='" & field69 & "'" &_
	", Question239='" & field70 & "'" &_
	", Question240='" & field71 & "'" &_
	", Question241='" & field72 & "'" &_
	", Question242='" & field73 & "'" &_
		", Question243a='" & field74a & "'" &_
		", Question243b='" & field74b & "'" &_
		", Question243c='" & field74c & "'" &_
		", Question243d='" & field74d & "'" &_	
	", Question244='" & field75 & "'" &_

	" WHERE UserID=" & KeyID
	rs = gobjConnection.Execute(SQL)
	response.write SQL
	'response.redirect("surveycomplete.html?KeyID=" & KeyID)
	

%>