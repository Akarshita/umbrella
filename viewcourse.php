<?php
include_once('dbconnect.php');

echo "Enter your ID".PHP_EOL;
$handle=fopen("php://stdin","r");
$line=fgets($handle);
$studid=trim($line);



$db=mysql_query("select * from courses_student where studentid='$studid'");


//if ($db -> num_rows > 0) {
    // output data of each row
    while($row=mysql_fetch_array($db)) 
{
        echo "id: " . $row["studentid"]. "\nCoursecode: " . $row["course_code"]. "\ncourse description: " . $row["course_description"]. "\nstart date: " . $row["course_start_date"]. "\nend date: " . $row["course_end_date"]. "\ncourse time: " . $row["course_time"]. "\nProfessor: " . $row["profname"]."<br>";
    }
echo "\nThis is your schedule".PHP_EOL;

//}
 //else 
   // echo "\n0 results";	
	
	



?>
