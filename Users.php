<?php
include_once('dbconnect.php');
//include_once('Welcome.php');
echo"-----Welcome-----"; 
echo" PLease enter your type".PHP_EOL;
echo"1)Administrator\n2)Teacher\n3)Student\n";
echo"Enter your option -  ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('Admin.php');
        break;
        case "2":
        include ('Teacher.php'); 
	break;
        case "3":
	include ('Student.php'); 
        break;
	
	case "exit":
	break;
        default:
        echo "Wrong option";
        break; 
}   




?>
