<?php
include_once('dbconnect.php');
echo"Enter course code".PHP_EOL;
$handle=fopen("php://stdin","r");
$line=fgets($handle);
$coursecode=trim($line);


	mysql_query("Delete from courses_prof where course_code=$coursecode");
	echo "course is deleted".PHP_EOL;


?>
