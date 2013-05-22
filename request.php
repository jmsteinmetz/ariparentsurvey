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

$question = cleanQuery($_GET['question']);
$token = cleanQuery($_GET['token']);

mysql_select_db('slingsurvey2');

$data = mysql_query("SELECT * FROM tblparentsurvey WHERE token =  '" . $token . "' AND question='" . $question. "'") 
 or die(mysql_error()); 

 while($info = mysql_fetch_array( $data )) 
 { 
	echo $info['answer'] ; 
 } 

?>
