<?php
function cleanQuery($string)
{
  if(get_magic_quotes_gpc())  // prevents duplicate backslashes
  {
    $string = stripslashes($string);
  }
  if (phpversion() >= '4.3.0')
  {
    $string = mysql_real_escape_string($string);
  }
  else
  {
    $string = mysql_escape_string($string);
  }
  return $string;
}

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '2100hbo7';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$label = cleanQuery($_GET['label']);
$value = cleanQuery($_GET['value']);
$token = $_GET['token'];
mysql_select_db('slingsurvey2');

$sqldel = "DELETE FROM tblparentsurvey WHERE token='" . $token . "' AND question='" . $label . "'";
$retval = mysql_query( $sqldel, $conn );

$sql = "INSERT INTO tblparentsurvey (token, question, answer) VALUES ('" . $token . "', '" . $label . "', '" . $value . "')";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
?>
