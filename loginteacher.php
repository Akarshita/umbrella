<?php
include_once('dbconnect.php');
echo"----login Form----".PHP_EOL;
echo"Enter Username:".PHP_EOL;
$handle = fopen("php://stdin","r");
$line = fgets($handle);
echo"Enter Password:".PHP_EOL;
system('stty -echo');
$handle2 = fopen("php://stdin","r");
$line2 = fgets($handle2);
system('stty -echo');
//echo"\n";
$username=trim($line);
$password=trim($line2);
$db=mysql_query("Select * from userdetails where uname='$username'");
$row=mysql_fetch_object($db);
if($row!="")
{
	$susername=$row->uname;
        $spassword=$row->pword;

}


	if($row!="" && $susername==$username && $spassword==$password)
	{
	$susername=$row->uname;
	$spassword=$row->pword;
	echo "Login successful".PHP_EOL;
	return include 'Teacher.php';

	}
	else 
	{
	echo "Invalid login - Please enter correct username and Password";
	return include 'Welcome.php';
	}	


?>

