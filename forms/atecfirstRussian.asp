<% @LANGUAGE = VBScript %>
<% 

Response.Expires = 0
on error resume next
%>

<!--#include file="adovbs.inc"-->

<%


Dim a(14)
Dim b(20)
Dim c(18)
Dim d(25)
Dim emal(4)

language = "Russian"

userparent = Request.Form("userparent")
userpractitioner = Request.Form("userpractitioner")
userresearcher = Request.Form("userresearcher")
userother = Request.Form("userother")
otheruser = Request.Form("otheruser")

 firstname = Request.Form("firstname")
 lastname = Request.Form("lastname")

 dataentry = Request.Form("dataentry")
 address1 = Request.Form("address1")
 address2 = Request.Form("address2")
 city = Request.Form("city")
 state = Request.Form("state")
 zipcode = Request.Form("zipcode")
 country = Request.Form("country")
 telephone = Request.Form("telephone")
 fax = Request.Form("fax")


 email = Request.Form("email")
 email1 = Request.Form("email1")
 email2 = Request.Form("email2")
 email3 = Request.Form("email3")

 b6mag = Request.Form("b6mag")
 chelation = Request.Form("chelation")
 aba = Request.Form("aba")
 benedryl = Request.Form("benedryl")
 dmg = Request.Form("dmg")
 scd = Request.Form("scd")
 speech = Request.Form("speech")
 prozac = Request.Form("prozac")
 tmg = Request.Form("tmg")
 ivig = Request.Form("ivig")
 ait = Request.Form("ait")
 risperidal = Request.Form("risperidal")
 digenzymes = Request.Form("digenzymes")
 gfdiet = Request.Form("gfdiet")
 neurofeed = Request.Form("neurofeed")
 ritalin = Request.Form("ritalin")
 methylb12 = Request.Form("methylb12")
 cfdiet = Request.Form("cfdiet")
 sensoryint = Request.Form("sensoryint")
 secretin = Request.Form("secretin")
 hyperoxy = Request.Form("hyperoxy")
 gfcf = Request.Form("gfcf")
 ot = Request.Form("ot")
 nystatin = Request.Form("nystatin")

 othertrt = Request.Form("othertrt")
 othertreatment = Request.Form("othertreatment")
 notreatment = Request.Form("notreatment")

 assessment = Request.Form("assessment")
 otherassess = Request.Form("otherassess")
 diagnosis = Request.Form("diagnosis")
 otherdiag = Request.Form("otherdiag")
 lastchild = Request.Form("lastchild")
 firstchild = Request.Form("firstchild")
 sex = Request.Form("sex")

 ageyears = Request.Form("ageyears")
 agemonths = Request.Form("agemonths")
 birthdate = Request.Form("birthdate")

 todaydate = Date
 formcompleted = Request.Form("formcompleted")
 relationship = Request.Form("relationship")
 emailyes = Request.Form("emailyes")

useful = Request.Form("useful")

' environment  pp. 78-79 SAMS
refer_web=Request.ServerVariables("HTTP_REFERER")
client_ip=Request.ServerVariables("REMOTE_ADDR")

 a(1) = Request.Form("A1")
 a(2) = Request.Form("A2")
 a(3) = Request.Form("A3")
 a(4) = Request.Form("A4")
 a(5) = Request.Form("A5")
 a(6) = Request.Form("A6")
 a(7) = Request.Form("A7")
 a(8) = Request.Form("A8")
 a(9) = Request.Form("A9")
 a(10) = Request.Form("A10")
 a(11) = Request.Form("A11")
 a(12) = Request.Form("A12")
 a(13) = Request.Form("A13")
 a(14) = Request.Form("A14")


sectionA = 0
for i=1 to 14
 sectionA = sectionA + cint(a(i))
next



 b(1) = Request.Form("B1")
 b(2)= Request.Form("B2")
 b(3) =  Request.Form("B3")
 b(4) = Request.Form("B4")
 b(5) = Request.Form("B5")
 b(6) = Request.Form("B6")
 b(7) = Request.Form("B7")
 b(8) = Request.Form("B8")
 b(9) = Request.Form("B9")
 b(10) = Request.Form("B10")
 b(11) = Request.Form("B11")
 b(12) = Request.Form("B12")
 b(13) = Request.Form("B13")
 b(14) = Request.Form("B14")
 b(15) = Request.Form("B15")
 b(16) = Request.Form("B16")
 b(17) = Request.Form("B17")
 b(18) = Request.Form("B18")
 b(19) = Request.Form("B19")
 b(20) = Request.Form("B20")

sectionB = 0
for i=1 to 20
 sectionB = sectionB + cint(b(i))
next


 c(1) = Request.Form("C1")
 c(2) = Request.Form("C2")
 c(3) = Request.Form("C3")
 c(4) = Request.Form("C4")
 c(5) = Request.Form("C5")
 c(6) = Request.Form("C6")
 c(7) = Request.Form("C7")
 c(8) = Request.Form("C8")
 c(9) = Request.Form("C9")
 c(10) = Request.Form("C10")
 c(11) = Request.Form("C11")
 c(12) = Request.Form("C12")
 c(13) = Request.Form("C13")
 c(14) = Request.Form("C14")
 c(15) = Request.Form("C15")
 c(16) = Request.Form("C16")
 c(17) = Request.Form("C17")
 c(18) = Request.Form("C18")

sectionC = 0
for i=1 to 18
 sectionC = sectionC + cint(c(i))
next


 d(1) = Request.Form("D1")
 d(2) = Request.Form("D2")
 d(3) = Request.Form("D3")
 d(4) = Request.Form("D4")
 d(5) = Request.Form("D5")
 d(6) = Request.Form("D6")
 d(7) = Request.Form("D7")
 d(8) = Request.Form("D8")
 d(9) = Request.Form("D9")
 d(10) = Request.Form("D10")
 d(11) = Request.Form("D11")
 d(12) = Request.Form("D12")
 d(13) = Request.Form("D13")
 d(14) = Request.Form("D14")
 d(15) = Request.Form("D15")
 d(16) = Request.Form("D16")
 d(17) = Request.Form("D17")
 d(18) = Request.Form("D18")
 d(19) = Request.Form("D19")
 d(20) = Request.Form("D20")
 d(21) = Request.Form("D21")
 d(22) = Request.Form("D22")
 d(23) = Request.Form("D23")
 d(24) = Request.Form("D24")
 d(25) = Request.Form("D25")

sectionD = 0
for i=1 to 25
 sectionD = sectionD + cint(d(i))
next


 summer= cint(sectionA)+ cint(sectionB)+ cint(sectionC)+ cint(sectionD)


' calculate number of professional emails
profemail=0
  if email1<>"" then
    profemail=profemail+1
  end if

  if email2<>"" then
    profemail=profemail+1
  end if

  if email3<>"" then
    profemail=profemail+1
  end if


' open counter file and read latest number


' d:\hosting\smedelson\here

'  Set objFS=Server.CreateObject("Scripting.FileSystemObject")
'  Set objTextS = objFS.OpenTextFile("C:\inetpub\vhosts\autism.com\httpdocs\backupdatasaver\atec_count1.txt", 1, 0)
'    strLine = objTextS.ReadLine
'  objTextS.Close
'  Set objTextS = Nothing
'  Set objFS = Nothing
'  n = strLine + 1


'  Raw data goes to ARI's database
'  Dim objMail
'  Set objMail = Server.CreateObject("CDO.Message")
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2 'Send the message using the network (SMTP over the network).
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpserver") ="k2smtpout.secureserver.net"
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpusessl") = False 'Use SSL for the connection (True or False)
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 60
'  objMail.Configuration.Fields.Update

'  objMail.From ="edelson4@comcast.net"
'  objMail.To  = "ari4182@sbcglobal.net"
'  objMail.Subject = "ATEC Data"


strQuery = language & "~" & todaydate & "~" & userparent & "~" & userpractitioner & "~" & userresearcher & "~" & userother & "~" & otheruser 

strQuery = strQuery & "~" & lastname & "~" & firstname & "~" & dataentry & "~" & address1 & "~" & address2

strQQ = StrQuery   ' *************************************

strQuery = strQuery & "~" & city & "~" & state & "~" & zipcode & "~" & country & "~" & telephone & "~" & fax & "~" & email
strQuery = strQuery & "~" & b6mag & "~" & chelation & "~" & aba & "~" & benedryl & "~" & dmg & "~" & scd
strQuery = strQuery & "~" & speech & "~" & prozac & "~" & tmg & "~" & ivig & "~" & ait & "~" & risperidal
strQuery = strQuery & "~" & digenzymes & "~" & gfdiet & "~" & neurofeed & "~" & ritalin & "~" & methylb12 & "~" & cfdiet

strQuery = strQuery & "~" & sensoryint & "~" & secretin & "~" & hyperoxy & "~" & gfcf & "~" & ot & "~" & nystatin


strQuery = strQuery & "~" & othertrt & "~" & othertreatment & "~" & notreatment
strQuery = strQuery & "~" & assessment & "~" & otherassess & "~" & diagnosis & "~" & otherdiag
strQuery = strQuery & "~" & lastchild & "~" & firstchild & "~" & sex & "~" & ageyears & "~" & agemonths & "~" & birthdate

strQuery = strQuery & "~" & formcompleted & "~" & relationship & "~" & emailyes & "~" & profemail
' strQuery = strQuery & "~" & formcompleted & "~" & relationship & "~" & emailyes

For i=1 to 14
  strQuery=strQuery & "~" & a(i)
Next

For i=1 to 20
  strQuery=strQuery & "~" & b(i)
Next

For i=1 to 18
  strQuery=strQuery & "~" & c(i)
Next

For i=1 to 25
  strQuery=strQuery & "~" & d(i)
Next

strQuery=strQuery & "~" & sectionA & "~" & sectionB & "~" & sectionC & "~" & sectionD & "~" & summer & "~" & useful

' environment variables
strQuery = strQuery & "~" & refer_web & "~" & client_ip



'  objMail.TextBody = strQuery
'  objMail.Send
'  Set objMail=Nothing

'  end ARI email data



' ++++++++++++++++ 

' field names


strQ1 = "language,todaydate,userparent,userpractitioner,userresearcher,userother,otheruser"
strQ1 = strQ1 & ",lastname,firstname,dataentry,address1,address2"
strQ1 = strQ1 & ",city,state,zipcode,country,telephone,fax,email"

strQ1 = strQ1 & ",b6mag,chelation,aba,benedryl,dmg,scd,speech"
strQ1 = strQ1 & ",prozac,tmg,ivig,ait,risperidal,digenzymes,gfdiet"
strQ1 = strQ1 & ",neurofeed,ritalin,methylb12,cfdiet,sensoryint,secretin,hyperoxy,gfcf,ot,nystatin"
strQ1 = strQ1 & ",othertrt,othertreatment,notreatment"

strQ1 = strQ1 & ",assessment,otherassess,diagnosis,otherdiag"
strQ1 = strQ1 & ",lastchild,firstchild,sex,ageyears,agemonths,birthdate"

strQ1 = strQ1 & ",formcompleted,relationship,emailyes,profemail"

  strQ1=strQ1 & ",a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13,a14"

  strQ1=strQ1 & ",b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11,b12,b13,b14,b15,b16,b17,b18,b19,b20"

  strQ1=strQ1 & ",c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12,c13,c14,c15,c16,c17,c18"

  strQ1=strQ1 & ",d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11,d12,d13,d14,d15,d16,d17,d18,d19,d20"
  strQ1=strQ1 & ",d21,d22,d23,d24,d25"

strQ1=strQ1 & ",sectionA,sectionB,sectionC,sectionD,summer,useful"

' environment variables
strQ1 = strQ1 & ",env1,env2"



' Values
  
   strQ2 = Replace(strQuery,"'","^")

    strQ2 = Replace(strQ2,"~","','")
    strQ2 = "'" & strQ2 & "'"
    strQ2 = Replace(strQ2,"''","NULL")

    strQ2 = Replace(strQ2,"^","''")

'  Save data to ARI database on server

Const ForReading = 1, ForWriting = 2, ForAppending = 8

' APPEND TEXT TO FILE
'  Set objFS=Server.CreateObject("Scripting.FileSystemObject")
'  If objFS.FileExists("C:\inetpub\vhosts\autism.com\httpdocs\backupdatasaver\atec1.txt") = True Then
'    Set objTextS = objFS.OpenTextFile("C:\inetpub\vhosts\autism.com\httpdocs\backupdatasaver\atec1.txt", ForAppending, False, 0)
'  Else
'    Set objTextS = objFS.CreateTextFile("C:\inetpub\vhosts\autism.com\httpdocs\backupdatasaver\atec1.txt",False, False)
'  End If
'  objTextS.WriteLine strQuery
'  objTextS.Close
'  Set objTextS = Nothing
'  Set objFS = Nothing



' +++++++++++++++++++++++++++++++++++++++++++++++++++
' Use with GoDaddy <<<<<<<<<<<<<<<<<<<<

' Prepare data for MS Access Table
' now enter the data into the MS Access table

Dim objConn

dbase="ariatec"
tablename = "atecdata"

Set objConn = Server.CreateObject("ADODB.Connection")
Set objRS = Server.CreateObject("ADODB.Recordset")
objConn.Open "Driver={Microsoft Access Driver (*.mdb)};Dbq=" & Server.MapPath("/access_db/" & dbase & ".mdb") & ";Uid=admin;Pwd=" 
objRS.Open tablename, objConn,,adLockOptimistic, adCmdTable

While Not objRS.EOF
	objRS.MoveNext
	if not objRS.EOF then ID = objRS("ID")

	if ID<old then ID=old
	old=ID	

Wend

ID=ID+1

         strQ = "INSERT INTO atecdata (" & strQ1 & ") VALUES (" & strQ2 & ")"
            objConn.Execute strQ
        objConn.close
       Set objConn = Nothing

' +++++++++++++++++++++++++++++++++++++++++++++++++++++++



' combine treatments into one line

if (b6mag="Y") then
  treats = "Vit. B6 and magnesium, "
end if

if (dmg="Y") then
      treats = treats & "DMG, "
end if

if (tmg="Y") then
      treats = treats & "TMG, "
end if

if (digenzymes="Y") then
      treats = treats & "Digestive Enzymes, "
end if

if (gfdiet="Y") then
      treats = treats & "GF diet, "
end if

if (methylb12="Y") then
      treats = treats & "Methyl B12, "
end if

if (cfdiet="Y") then
      treats = treats & "CF diet, "
end if

if (gfcf="Y") then
      treats = treats & "GF/CF diet, "
end if

if (ot="Y") then
      treats = treats & "OT, "
end if

if (sensoryint="Y") then
      treats = treats & "Sensory Int, "
end if

if (scd="Y") then
      treats = treats & "Specific Carb. Diet, "
end if

if (secretin="Y") then
      treats = treats & "Secretin, "
end if

if (hyperoxy="Y") then
      treats = treats & "Hyperberic Oxygen, "
end if

if (chelation="Y") then
      treats = treats & "Chelation, "
end if

if (ivig="Y") then
      treats = treats & "IVIG, "
end if


if (aba="Y") then
      treats = treats & "ABA, "
end if

if (ait="Y") then
      treats = treats & "AIT, "
end if

if (speech="Y") then
      treats = treats & "Speech, "
end if


if (neurofeed="Y") then
      treats = treats & "Neurofeedback, "
end if

if (nystatin="Y") then
      treats = treats & "Nystatin, "
end if

if (benedryl="Y") then
      treats = treats & "Benedryl, "
end if


if (prozac="Y") then
      treats = treats & "Prozac, "
end if


if (risperidal="Y") then
      treats = treats & "Risperidal, "
end if


if (ritalin="Y") then
      treats = treats & "Ritalin, "
end if


if (othertrt="Y") then
      treats = treats & " " & othertreatment & ", "
end if


i=len(treats)

if (treats<>"") then
   treats = Mid(treats,1,(i-2))
end if


' store in condensed Access table
' field names
strQ4 = "language,todaydate,lastname,firstname,telephone,email"
strQ4 = strQ4 & ",treats,othertreatment,notreatment,assessment,otherassess"
strQ4 = strQ4 & ",lastchild,firstchild,sectionA,sectionB,sectionC,sectionD,summer,useful"

' values

strQ5 = language & "~" & todaydate & "~" & lastname & "~" & firstname & "~" & telephone & "~" & email
strQ5 = strQ5 & "~" & treats & "~" & othertreatment & "~" & notreatment & "~" & assessment & "~" & otherassess
strQ5 = strQ5 & "~" & lastchild & "~" & firstchild & "~" & sectionA & "~" & sectionB & "~" & sectionC & "~" & sectionD & "~" & summer & "~" & useful

   strQ5 = Replace(strQ5,"'","^")

    strQ5 = Replace(strQ5,"~","','")
    strQ5 = "'" & strQ5 & "'"
    strQ5 = Replace(strQ5,"''","NULL")

    strQ5 = Replace(strQ5,"^","''")


' Prepare data for MS Access Table
' now enter the data into the MS Access table

' Dim objConn
 Set objConn = Server.CreateObject("ADODB.Connection")
 Set objRS = Server.CreateObject("ADODB.Recordset")

 objConn.Open "Driver={Microsoft Access Driver (*.mdb)};Dbq=" & Server.MapPath("/access_db/ariatec.mdb") & ";Uid=admin;Pwd=" 

    strQ = "INSERT INTO atecsummarydata (" & strQ4 & ") VALUES (" & strQ5 & ")"

     objConn.Execute strQ

         objConn.close
       Set objConn = Nothing


'  updating counter

' UPDATE COUNTER FILE -- atec_count1.txt
'  Set objFS=Server.CreateObject("Scripting.FileSystemObject")
'  Set objTextS = objFS.OpenTextFile("C:\inetpub\vhosts\autism.com\httpdocs\backupdatasaver\atec_count1.txt", 2, False, 0)
'  objTextS.WriteLine n
'  objTextS.Close
'  Set objTextS = Nothing
'  Set objFS = Nothing


'  now prepare for sending results via email

' here1


' Russian font


strQuery2 = strQuery2 & "Дата: "& todaydate & vbcrlf
strQuery2 = strQuery2 & " " & vbcrlf

strQuery2 = strQuery2 & "Имя ребенка: " & firstchild & " " & lastchild &  vbcrlf

strQuery2 = strQuery2 & " " & vbcrlf

strQuery2 = strQuery2 & " " & vbcrlf

strQuery2 = strQuery2 & "***ОБЩИЙ БАЛЛ И БАЛЛ ПО ПОДРАЗДЕЛАМ***" & vbcrlf
strQuery2 = strQuery2 & "Общий балл: " & summer & vbcrlf
strQuery2 = strQuery2 & "I. Речь/Язык/Коммуникативные навыки: " & sectionA & vbcrlf
strQuery2 = strQuery2 & "II. Социализация: " & sectionB & vbcrlf
strQuery2 = strQuery2 & "III. Сенсорные навыки/Познавательные способности: " & sectionC & vbcrlf
strQuery2 = strQuery2 & "IV.  Здоровье/Физическое развитие/Поведение: " & sectionD & vbcrlf

strQuery2 = strQuery2 & " "  & vbcrlf


'  # Subscale I


for i=1 to 14
    if a(i)="2" then a(i)="Нет"
    if a(i)="1" then a(i)="Иногда"
    if a(i)="0" then a(i)="Да"
next
   
strQuery2 = strQuery2 & "**I. Речь/Язык/Коммуникативные навыки" & vbcrlf
strQuery2 = strQuery2 & "1. Знает собственное имя: " & a(1) & vbcrlf
strQuery2 = strQuery2 & "2. Реагирует на 'нет' или 'стоп':  " & a(2) & vbcrlf
strQuery2 = strQuery2 & "3. Может выполнять некоторые команды:  " & a(3) & vbcrlf
strQuery2 = strQuery2 & "4. Может сказать одно слово:  " & a(4) & vbcrlf
strQuery2 = strQuery2 & "5. Может сказать 2 слова подряд:  " & a(5) & vbcrlf
strQuery2 = strQuery2 & "6. Может сказать 3 слова подряд:  " & a(6) & vbcrlf
strQuery2 = strQuery2 & "7. Знает 10 или больше слов:  " & a(7) & vbcrlf
strQuery2 = strQuery2 & "8. Использует в речи предложения из 4 и более слов:  " & a(8) & vbcrlf
strQuery2 = strQuery2 & "9. Объясняет, что он/она хочет	:  " & a(9) & vbcrlf
strQuery2 = strQuery2 & "10. Задает осмысленные вопросы:  " & a(10) & vbcrlf
strQuery2 = strQuery2 & "11. Речь чаще всего осмысленна/логична:  " & a(11) & vbcrlf
strQuery2 = strQuery2 & "12. Часто использует предложения, выстроенные в логической последовательности: " & a(12) & vbcrlf
strQuery2 = strQuery2 & "13. Поддерживает разговор:  " & a(13) & vbcrlf
strQuery2 = strQuery2 & "14. Имеет нормальные коммуникативные навыки для своего возраста:  " & a(14) & vbcrlf


'  Subscale II


for i=1 to 20
    if b(i)="2" then b(i)="Да"
    if b(i)="1" then b(i)="Иногда"
    if b(i)="0" then b(i)="Нет"
next

strQuery2 = strQuery2 & " " & vbcrlf
strQuery2 = strQuery2 & "**II. Социализация" & vbcrlf
strQuery2 = strQuery2 & "1. Кажется, что находится в раковине - вы не можете достучаться до него/нее:  " & b(1) & vbcrlf
strQuery2 = strQuery2 & "2. Игнорирует других людей:  " & b(2) & vbcrlf
strQuery2 = strQuery2 & "3. Практически не обращает внимание, если к нему/к ней обращаются:  " & b(3) & vbcrlf
strQuery2 = strQuery2 & "4. Не склонен к совместной деятельности:  " & b(4) & vbcrlf
strQuery2 = strQuery2 & "5. Зрительный контакт отсутствует:  " & b(5) & vbcrlf
strQuery2 = strQuery2 & "6. Предпочитает оставаться в одиночестве:  " & b(6) & vbcrlf
strQuery2 = strQuery2 & "7. Не проявляет привязанности:  " & b(7) & vbcrlf
strQuery2 = strQuery2 & "8. Не здоровается с родителями:  " & b(8) & vbcrlf
strQuery2 = strQuery2 & "9. Избегает контактов с окружающими:  " & b(9) & vbcrlf
strQuery2 = strQuery2 & "10. Имитация отсутствует:  " & b(10) & vbcrlf
strQuery2 = strQuery2 & "11. Не любит прикосновений/объятий:  " & b(11) & vbcrlf
strQuery2 = strQuery2 & "12. Не делится, указательный жест отсутствует:  " & b(12) & vbcrlf
strQuery2 = strQuery2 & "13. Не машет рукой `до свидания`:  " & b(13) & vbcrlf
strQuery2 = strQuery2 & "14. Непослушный/непокладистый:  " & b(14) & vbcrlf
strQuery2 = strQuery2 & "15. Испытывает приступы гнева, раздражительности:  " & b(15) & vbcrlf
strQuery2 = strQuery2 & "16. Недостаток друзей/нет компании:  " & b(16) & vbcrlf
strQuery2 = strQuery2 & "17. Редко улыбается:  " & b(17) & vbcrlf
strQuery2 = strQuery2 & "18. Не понимает чувств других людей:  " & b(18) & vbcrlf
strQuery2 = strQuery2 & "19. Безразличен, если ему выражают симпатию:  " & b(19) & vbcrlf
strQuery2 = strQuery2 & "20. Не реагирует на уход родителей:  " & b(20) & vbcrlf


'  Subscale III


for i=1 to 18
    if c(i)="0" then c(i)="Да"
    if c(i)="1" then c(i)="Иногда"
    if c(i)="2" then c(i)="Нет"
next

strQuery2 = strQuery2 & " " & vbcrlf
strQuery2 = strQuery2 & "**III.  Сенсорные навыки/Познавательные способности"  & vbcrlf
strQuery2 = strQuery2 & "1. Откликается на собственное имя:  " & c(1) & vbcrlf
strQuery2 = strQuery2 & "2. Реагирует на похвалу:  " & c(2) & vbcrlf
strQuery2 = strQuery2 & "3. Смотрит на людей и животных:  " & c(3) & vbcrlf
strQuery2 = strQuery2 & "4. Смотрит на картинки (и телевизор):  " & c(4) & vbcrlf
strQuery2 = strQuery2 & "5. Умеет рисовать, раскрашивать, мастерить:  " & c(5) & vbcrlf
strQuery2 = strQuery2 & "6. Правильно играет с игрушками:  " & c(6) & vbcrlf
strQuery2 = strQuery2 & "7. Выражение лица соответствует ситуации:  " & c(7) & vbcrlf
strQuery2 = strQuery2 & "8. Понимает происходящее на телеэкране:  " & c(8) & vbcrlf
strQuery2 = strQuery2 & "9. Понимает объяснения:  " & c(9) & vbcrlf
strQuery2 = strQuery2 & "10. Осознает окружающую среду:  " & c(10) & vbcrlf
strQuery2 = strQuery2 & "11. Осознает опасность:  " & c(11) & vbcrlf
strQuery2 = strQuery2 & "12. Проявляет воображение:  " & c(12) & vbcrlf
strQuery2 = strQuery2 & "13. Проявляет инициативу:  " & c(13) & vbcrlf
strQuery2 = strQuery2 & "14. Умеет самостоятельно одеваться:  " & c(14) & vbcrlf
strQuery2 = strQuery2 & "15. Проявляет любопытство, заинтересованность:  " & c(15) & vbcrlf
strQuery2 = strQuery2 & "16. Смелый - исследует окружающее:  " & c(16) & vbcrlf
strQuery2 = strQuery2 & "17. Адекватно воспринимает окружающее, не уходит в себя:  " & c(17) & vbcrlf
strQuery2 = strQuery2 & "18. Смотрит туда, куда смотрят другие:  " & c(18) & vbcrlf


' Subscale IIII

for i=1 to 25
    if d(i)="3" then d(i)="Серьезная проблема"
    if d(i)="2" then d(i)="Средняя проблема"
    if d(i)="1" then d(i)="Легкая проблема"
    if d(i)="0" then d(i)="Не проблема"
next

strQuery2 = strQuery2 & " " & vbcrlf
strQuery2 = strQuery2 & "**IV. Здоровье/Физическое развитие/Поведение"  & vbcrlf
strQuery2 = strQuery2 & "1. Ночное недержание мочи:  " & d(1) & vbcrlf
strQuery2 = strQuery2 & "2. Мочится в штаны/памперсы:  " & d(2) & vbcrlf
strQuery2 = strQuery2 & "3. Какает в штаны/памперсы:  " & d(3) & vbcrlf
strQuery2 = strQuery2 & "4. Поносы:  " & d(4) & vbcrlf
strQuery2 = strQuery2 & "5. Запоры:  " & d(5) & vbcrlf
strQuery2 = strQuery2 & "6. Проблемы со сном:  " & d(6) & vbcrlf
strQuery2 = strQuery2 & "7. Ест слишком много/слишком мало:  " & d(7) & vbcrlf
strQuery2 = strQuery2 & "8. Ест очень ограниченный набор продуктов:  " & d(8) & vbcrlf
strQuery2 = strQuery2 & "9. Гиперактивность:  " & d(9) & vbcrlf
strQuery2 = strQuery2 & "10. Апатия:  " & d(10) & vbcrlf
strQuery2 = strQuery2 & "11. Бьет или ранит сам себя:  " & d(11) & vbcrlf
strQuery2 = strQuery2 & "12. Бьет или ранит других:  " & d(12) & vbcrlf
strQuery2 = strQuery2 & "13. Ломает и разбрасывает все вокруг:  " & d(13) & vbcrlf
strQuery2 = strQuery2 & "14. Чувствительность к звукам:  " & d(14) & vbcrlf
strQuery2 = strQuery2 & "15. Тревожность/страх:  " & d(15) & vbcrlf
strQuery2 = strQuery2 & "16. Подавленность/слезы:  " & d(16) & vbcrlf
strQuery2 = strQuery2 & "17. Припадки:  " & d(17) & vbcrlf
strQuery2 = strQuery2 & "18. Навязчивая речь:  " & d(18) & vbcrlf
strQuery2 = strQuery2 & "19. Неизменный порядок действий:  " & d(19) & vbcrlf
strQuery2 = strQuery2 & "20. Вопли и крики:  " & d(20) & vbcrlf
strQuery2 = strQuery2 & "21. Потребность в однообразии:  " & d(21) & vbcrlf
strQuery2 = strQuery2 & "22. Постоянная возбужденность:  " & d(22) & vbcrlf
strQuery2 = strQuery2 & "23. Нечувствительность к боли:  " & d(23) & vbcrlf
strQuery2 = strQuery2 & "24. Концентрация на определенных предметах/темах:  " & d(24) & vbcrlf
strQuery2 = strQuery2 & "25. Повторяющиеся движения:  " & d(25) & vbcrlf



'  now send out emails of results to user and others

j=1
ii=2

    if (emailyes="Y") then
       emal(j)=email
       ii=1
    end if

  if email1<>"" then
     j=j+1
     emal(j)=email1
  end if

  if email2<>"" then
     j=j+1
     emal(j)=email2
  end if

  if email3<>"" then
     j=j+1
     emal(j)=email3
  end if



for k=ii to j

'Dim objMail
'  Set objMail = Server.CreateObject("CDO.Message")
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2 'Send the message using the network (SMTP over the network).
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpserver") ="k2smtpout.secureserver.net"
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpusessl") = False 'Use SSL for the connection (True or False)
'  objMail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 60
'  objMail.Configuration.Fields.Update
'  objMail.From = "atec@AutismEvaluation.com"


Set objMail = Server.CreateObject("CDO.Message")
  
objMail.From = "atec@AutismEvaluation.com"

objMail.To = emal(k)



' LM ************************************************


'  objMail.Value("Content-Type") = "text/plain; 
'  charset="koi8-r"
'  objMail.MailFormat=1
'  objMail.BodyFormat=1

' LM ************************************************



if (k=1) then
   strQuery3 = "ARI ATEC ID.: " & n & vbcrlf
   objMail.Subject = "ATEC Responses: " & firstchild & " " & lastchild 

end if

if (k>1) then
   strQuery3 = "Сообщение для специалистов относительно конфиденциальности." & " " & vbcrlf & " " & vbcrlf & "Данный отчет о прогрессе ребенка, страдающего аутизмом, отправлен родителями вашего пациента. Это бесплатная услуга, которую представляет Институт изучения аутизма с целью разработки эффективных способов лечения лиц, страдающих аутизмом. Этот отчет основан на анкете для оценки эффективности лечения аутизма (АТЕС), разработанной докторами Бернардом Римландом и Стивеном Эдельсоном из Института изучения аутизма, Сан-Диего, Калифорния. Анкета АТЕС представляет собой быстрый, простой и бесплатный способ оценки прогресса ребенка, страдающего аутизмом, за определенное время, и в частности, позволяет <BR>оценить прогресс во время лечебного мероприятия. Анкету АТЕС и информацию о ней можно найти по адресу: www.autismeval.com/ari-atec" & " " & vbcrlf 


strQuery3 = strQuery3 & " " & vbcrlf & " " & "Он-лайн Анкету АТЕС может заполнить как родитель, так и специалист; анкета предназначена для любого ребенка (или взрослого), имеющего расстройство аутичного спектра, и позволяет оценить учебные, биомедицинские или бихевиористические мероприятия через определенные промежутки времени, выбранные на усмотрение родителей или специалиста. Результат анкеты АТЕС подсчитывается в режиме он-лайн немедленно и включает общий результат и четыре результата по подгруппам: Язык/речь/коммуникативные навыки, социализация, сенсорные навыки/познавательные способности, здоровье/физическое развитие/поведение."


strQuery3 = strQuery3 & " " & vbcrlf & " " & "Мы рекомендуем распечатать результат анкеты и хранить его в папке с документами Вашего клиента. Мы рекомендуем использовать эту информацию для оценки разных способов лечения, которые Вы применяете в Вашей практике. Вы также можете рекомендовать другим Вашим клиентам заполнить анкету АТЕС и направить результат Вам, чтобы иметь возможность оценить прогресс за определенное время." & " " & vbcrlf & " " & vbcrlf & " " & "+++++" & " " & vbcrlf 


strQuery3 = strQuery3 & " " & vbcrlf & " " & "К Вашему сведению, на сайте АТЕС также появляется следующее сообщение для родителей: " & " " & vbcrlf

strQuery3 = strQuery3 & " " & vbcrlf & " " & "Сообщение для родителей о конфиденциальности личной информации о пациенте."  & " " & vbcrlf & " " & "Согласно недавно принятому закону о защите прав пациентов, информация о Вашем сыне/дочери, которая вводится он-лайн при заполнении анкеты АТЕС, может не поступить на почтовый сервер некоторых врачей/терапистов. В таких случаях Вы можете использовать специальный код или псевдоним для идентификации Вашего ребенка. Этот код нужно ввести в поле 'имя/фамилия ребенка' в анкете ATEC. Кроме того, если Вам необходима анонимность, вы можете не вводить никакую личную информацию (например, номер телефона). Тем не менее, нам необходим Ваш электронный адрес. Ваш электронный адрес не будет отправлен врачу/тераписту. Они получают только число баллов по анкете ATEC и ответы на вопросы." & " " & vbcrlf

strQuery3 = strQuery3 & " " & vbcrlf & " " & "Мы советуем Вам заранее связаться с врачом/терапистом, чтобы найти наилучший способ пересылки результатов анкеты ATEC Вашего ребенка." & " " & vbcrlf & "++++++++++++++++++++" & vbcrlf





gg="ATEC: "

if (firstchild<>"") then
  gg = gg & " " & firstchild
end if

if (lastchild<>"") then
  gg = gg & " " & lastchild
end if

if ((firstname<>"") and (lastname<>"")) then



' Elena,  Parent  below   ******
  gg = gg & " (Parent: " & firstname & " " & lastname & ")"
end if


' Elena,  Parent  below   ******
if ((firstname="") and (lastname<>"")) then
   gg = gg & " (Parent: " & lastname & ")"
end if


if ((firstname<>"") and (lastname = "")) then


' Elena,  Parent  below   ******
   gg = gg & " (Parent: " & firstname & ")"


' Elena, end additional translations



end if


objMail.Subject = gg





end if

' Russian font

'  objMail.BodyPart.Charset = "windows-1251" 
'  objMail.Charset = "koi8-r" 
  Response.Charset="koi8-r"  ' <<<<<<<<<<<<<<<<<<<<<<<<  Mike, this is likely the problem





' strQuery3 = "Content-Type: text/plain; charset=koi8-r"  & strQuery3 & " " & vbcrlf & " " & vbcrlf & " " & strQuery2

 strQuery3 = strQuery3 & " " & vbcrlf & " " & vbcrlf & " " & strQuery2


'   objMail.MimeFormatted = true
'   objMail.BodyPart.Charset="windows-1251" 
'  objMail.HTMLBodyPart.Charset="windows-1251"



objMail.Body = strQuery3

objMail.BodyFormat = 1 '1 = plain text, 2 = HTML
objMail.MailFormat = 0 '1 = text message, 0 = MIME Formatted
objMail.Importance = 1 '0 = low, 1 = normal, 2 = high importance

  objMail.Send
  Set objMail=Nothing


next


%>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>Autism Research Institute</title>
</head>
<body id="families" class="sub">

          <!--main text starts here-->
            <h3>ARI ATEC ID.: <% = ID %>: Запишите этот идентификационный номер для последующего использования.</h3>

          <p><i><I>Результаты по подразделам и общий результат</i></center>
          <p>(чем выше балл, тем больше отклонение в конкретной области)</center><p>
          <p>I. Речь/Язык/Коммуникативные навыки: <% =sectionA %> <br>
          II. Социализация: <% =sectionB %><br>
          III. Сенсорные навыки/Познавательные способности: <% =sectionC %><br>
          IV. Здоровье/Физическое развитие/Поведение: <% =sectionD %></p>
          <p>Общий результат ATEC: <% =summer %> <p>
          <h4><a href="https://www.autism.com/">Нажмите здесь, чтобы посетить вебсайт ARI</a></h4>
          

</body>
</html>
