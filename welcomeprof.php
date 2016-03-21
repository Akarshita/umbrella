<?php
include_once('dbconnect.php');
echo"If u already have a login type L to login or R to register".PHP_EOL;
echo"1)login\n2)Register\n";
echo"Enter your option or type exit to quit -  ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line))
{
	case "L":
	echo "login".PHP_EOL;
	include ('loginteacher.php');
	break;
	case "R":
	include_once('Register.php');
	case "exit":
	break;
	default:
	echo "Wrong option";
	break;
}

?>
