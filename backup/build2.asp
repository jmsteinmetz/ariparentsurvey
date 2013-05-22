<% 
for i = 1 to 140
'response.write ("ALTER TABLE tblsurveyanswers ADD Question" & i & " VARCHAR(50);<br>")
response.write ("ALTER TABLE tblsurveyanswers MODIFY Question" & i & " VARCHAR(100);<br>")
'response.write ("field" & i &" = replace(request.form(""field" & i & """), ""'"", """")<br>")
next
'b = 1
'for i = 370 to 570
'	response.write """, Question" & i & "='"" & field" & b & " & ""'"" &_<br>"
'b = b+1	
'next
%>
