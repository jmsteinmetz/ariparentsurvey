<?php
$email = $_POST['xEmail'];
$password = $_POST['xPassword'];

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('slingsurvey2');

//$sql = "SELECT * FROM tblusers WHERE xEmail='" . $email . "' AND xPassword='" . $password . "'";

//$query = mysql_query("SELECT * FROM tblusers WHERE xEmail='" . $email . "' AND xPassword='" . $password . "'");  
$result = mysql_query("SELECT * FROM tblusers WHERE xEmail='" . $email ."' AND xPassword='" . $password ."'") or die(mysql_error());

if(mysql_num_rows($result) > 0)
    while($show = mysql_fetch_array($result))
    {
	header("Location: step1.php?token=" . $show["KeyID"]);
    }
else
   header("Location: index.php");


mysql_close($conn);
?>