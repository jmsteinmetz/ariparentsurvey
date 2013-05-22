<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$label = $_GET['label'];
$value = $_GET['value'];
$token = $_GET['token'];
mysql_select_db('slingsurvey2');

//$label = "label";
//$value = "value";
//$token = "1234";

$sql = "INSERT INTO tblparentsurvey (token, question, answer) VALUES ('" . $token . "', '" . $label . "', '" . $value . "')";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
?>
