<% 
for i = 245 to 369
response.write ("ALTER TABLE tblsurveyanswers ADD Question" & i & " VARCHAR(50);<br>")
next
%>
