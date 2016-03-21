<?php
include_once('dbconnect.php');
echo " --- Registration Form --- ".PHP_EOL;

echo " Enter your First Name ".PHP_EOL;
$line3 = fgets($handle);
$fname=trim($line3);
echo " Enter your Last Name ".PHP_EOL;
$line4 = fgets($handle);
$lname=trim($line4);
echo " Enter your Address ".PHP_EOL;
$line5 = fgets($handle);
$address=trim($line5);
echo " Enter your City ".PHP_EOL;
$line6 = fgets($handle);
$city=trim($line6);
echo " Enter your username ".PHP_EOL;
$handle = fopen("php://stdin","r");
$line = fgets($handle);
$username=trim($line);
echo " Enter your password ".PHP_EOL;
$line2 = fgets($handle);
$password=trim($line2);
echo " Enter your Role( Type T - Teacher and S - Student) ".PHP_EOL;
$line7 = fgets($handle);
$role=trim($line7);

$db=mysql_query("Select * from userdetails where uname='$username'");
$row=mysql_fetch_object($db);
//echo "$row".PHP_EOL;
//$susername=$row->username;
if($row!="")
{
	echo "USERNAME ALREADY EXIST!!!".PHP_EOL;
	return include "Welcome.php";
	
}	

else
	{
	echo "User Registration type yes to confirm or no to cancel".PHP_EOL;
	$line8=fgets($handle);
	$confirm=trim($line8);	
		if($confirm=="yes")
		{
	mysql_query("Insert into userdetails values     ('','$fname','$lname','$address','$city','$username','$password','$role')");


	echo " REGISTRATION SUCCESSFULL!! ".PHP_EOL;
	//include_once('Welcome.php');
	//return include "Welcome.php";
		}
		//else
		//{
		//echo "REGISTRATION CANCELED!!".PHP_EOL;
		//include_once('Welcome.php');
		//return include "Welcome.php";
		}
	
?>
