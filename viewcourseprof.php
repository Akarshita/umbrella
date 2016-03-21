<?php
include_once('dbconnect.php');

echo "Enter your ID".PHP_EOL;
$handle=fopen("php://stdin","r");
$line=fgets($handle);
$profid=trim($line);



$db=mysql_query("select * from courses_prof where professorid='$profid'");


//if ($db->num_rows = 0) {
//
  // echo "0 results";
//}
//else {
    // output data of each row
    while($row=mysql_fetch_array($db)) 
{
        echo "id: " . $row["professorid"]. "\nCoursecode: " . $row["course_code"]. "\ncourse description: " . $row["course_description"]. "\nstart date: " . $row["course_start_date"]. " \nend date: " . $row["course_end_date"]. "\ncourse time: " . $row["course_time"]. "\nProfessor: " . $row["profname"]."<br>";
    }
 
echo "This is your schedule".PHP_EOL;

	
	
	

	//include 'userdetails.php';
	
//	else
	
//	iecho"courses not added".PHP_EOL;
	//include 'userdetails.php';


?>
