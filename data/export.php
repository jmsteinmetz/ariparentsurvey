<?php
 
// Connect and query the database for the users
$conn = new PDO("mysql:host=localhost:3306;dbname=slingsurvey2", 'root', '2100hbo7');
$sql = "SELECT *, tblparentsurvey.token, tblusers.KeyID FROM tblparentsurvey JOIN tblusers ON tblparentsurvey.token = tblusers.KeyID WHERE tblusers.step13 = '1' ORDER BY token ASC";

$results = $conn->query($sql);
 
// Pick a filename and destination directory for the file
// Remember that the folder where you want to write the file has to be writable
$filename = "db_user_export_".time().".csv";
 
// Actually create the file
// The w+ parameter will wipe out and overwrite any existing file with the same name
$handle = fopen($filename, 'w+');
 
// Write the spreadsheet column titles / labels
fputcsv($handle, array('ID', 'Name', 'Email', 'Date','Question', 'Answer'));
 
// Write all the user records to the spreadsheet
foreach($results as $row)
{
    fputcsv($handle, array($row['token'], $row['xName'], $row['xEmail'], $row['dtmDate'], $row['question'], $row['answer']));
}
 
// Finish writing the file
fclose($handle);

echo "Download: <a href='" . $filename . "' target='_blank'>" . $filename . "</a>";
 
?>