<?php
include_once('dbconnect.php');
echo"Enter professor's id".PHP_EOL;
$handle=fopen("php://stdin","r");
$line7=fgets($handle);
$profid=trim($line7);
echo"Enter course code".PHP_EOL;
$handle=fopen("php://stdin","r");
$line=fgets($handle);
$coursecode=trim($line);
echo "Enter course description".PHP_EOL;
//$handle=fopen("php://stdin","r");
$line2=fgets($handle);
$desc=trim($line2);
echo "Enter course start date".PHP_EOL;
//$handle=fopen("php://stdin","r");
$line3=fgets($handle);
$startdate=trim($line3);
echo "Enter course end date".PHP_EOL;
//$handle=fopen("php://stdin","r");
$line4=fgets($handle);
$enddate=trim($line4);
echo "Enter course time".PHP_EOL;
//$handle=fopen("php://stdin","r");
$line5=fgets($handle);
$coursetime=trim($line5);
echo "Enter professor name".PHP_EOL;
//$handle=fopen("php://stdin","r");
$line6=fgets($handle);
$profname=trim($line6);



//$db=mysql_query("select * from courses_prof where course_code='$recipient'");
//$row=mysql_num_rows($db);
//	if($row==1)
//	{
	mysql_query("Insert into courses_prof values('$profid','$coursecode','$desc','$startdate','$enddate','$coursetime','$profname')");
	echo "course and professor added".PHP_EOL;
	//include 'userdetails.php';
//	}
//	else
	
//	iecho"courses not added".PHP_EOL;
	//include 'userdetails.php';
//}

?>
